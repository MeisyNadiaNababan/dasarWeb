<?php
include('Model.php');

class UserModel extends Model {
    protected $db;
    protected $table = 'm_user';
    protected $driver;

    public function __construct() {
        include('../lib/Connection.php');
        $this->db = $db;
        $this->driver = $use_driver;
    }

    public function insertData($data) {
        if ($this->driver == 'mysql') {
            // Prepare statement untuk query insert
            $query = $this->db->prepare("INSERT INTO {$this->table} (username, nama, level, password) VALUES (?, ?, ?, ?)");
            $query->bind_param(
                'ssss',
                $data['username'],
                $data['nama'],
                $data['level'],
                password_hash($data['password'], PASSWORD_DEFAULT)
            );
            $query->execute();
        } else {
            sqlsrv_query(
                $this->db,
                "INSERT INTO {$this->table} (username, nama, level, password) VALUES (?, ?, ?, ?)",
                [
                    $data['username'],
                    $data['nama'],
                    $data['level'],
                    password_hash($data['password'], PASSWORD_DEFAULT)
                ]
            );
        }
    }

    public function getData() {
        if ($this->driver == 'mysql') {
            return $this->db->query("SELECT * FROM {$this->table}")
                            ->fetch_all(MYSQLI_ASSOC);
        } else {
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table}");
            $data = [];
            while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getDataById($id) {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE user_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
            return $query->get_result()->fetch_assoc();
        } else {
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table} WHERE user_id = ?", [$id]);
            return sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        }
    }

    public function updateData($id, $data) {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare(
                "UPDATE {$this->table} SET username = ?, nama = ?, level = ?, password = ? WHERE user_id = ?"
            );
            $query->bind_param(
                'ssssi',
                $data['username'],
                $data['nama'],
                $data['level'],
                password_hash($data['password'], PASSWORD_DEFAULT),
                $id
            );
            $query->execute();
        } else {
            sqlsrv_query(
                $this->db,
                "UPDATE {$this->table} SET username = ?, nama = ?, level = ?, password = ? WHERE user_id = ?",
                [
                    $data['username'],
                    $data['nama'],
                    $data['level'],
                    password_hash($data['password'], PASSWORD_DEFAULT),
                    $id
                ]
            );
        }
    }

    public function deleteData($id) {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("DELETE FROM {$this->table} WHERE user_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
        } else {
            sqlsrv_query($this->db, "DELETE FROM {$this->table} WHERE user_id = ?", [$id]);
        }
    }

    public function getSingleDataByKeyword($column, $keyword) {
        if ($this->driver == 'mysql') {
            $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$column} = ?");
            $query->bind_param('s', $keyword);
            $query->execute();
            return $query->get_result()->fetch_assoc();
        } else {
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table} WHERE {$column} = ?", [$keyword]);
            return sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        }
    }
}