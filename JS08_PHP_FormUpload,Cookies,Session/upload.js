$(document).ready(function() {
    $('#upload-form').submit(function(e) {
        e.preventDefault();

        var formData = new formData(this);

        $.ajax({
            type :'POST',
            url : 'upload_ajax.php',
            data : formData,
            chace : false,
            contentType : false,
            success : function(response) {
                $('#status').html(response);
            }, 
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file');
            }
        });
    });
});