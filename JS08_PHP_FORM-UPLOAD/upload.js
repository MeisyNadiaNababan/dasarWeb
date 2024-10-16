$(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var files = $('#file')[0].files;
        var error = false;

        // Cek jika ada file yang dipilih
        if (files.length === 0) {
            $('#status').html('Silakan pilih file gambar untuk diunggah.');
            return;
        }

        // Cek apakah semua file adalah gambar
        $.each(files, function(i, file) {
            if (!file.type.match('image.*')) {
                $('#status').html('Hanya file gambar yang diizinkan.');
                error = true;
                return false;
            }
        });

        if (error) return;

        // Lakukan AJAX upload
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
