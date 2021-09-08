jQuery(document).ready(function($){
    let mediaUploader;

    $( '#upload-button' ).on('click', function(e){
        e.preventDefault();
        if( mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose logo Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#logo-picture').val(attachment.url);
            $('#logo-picture-preview').css('background-image', 'url('+attachment.url+')');
        });

        mediaUploader.open();
    });
});
