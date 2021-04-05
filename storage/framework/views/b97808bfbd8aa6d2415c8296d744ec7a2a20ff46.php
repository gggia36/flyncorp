<textarea id="<?php echo e($id); ?>" name="<?php echo e($name); ?>" <?php echo e($required); ?>><?php echo $content; ?></textarea>
<script>
var url_gb = "<?php echo e(url('/')); ?>";
var editor,options={
            height: 250,
            key: "UBB7jD6C5E3A2J3B7aIVLEABVAYFKc1Ce1MYGD1c1NYVMiB3B9B6A5C2C4F4H3G3J3==",

            //<------// images upload file //------>//
            fileUploadParam: 'file_param',
            fileUploadURL: url_gb + '/admin/UploadImageEditor/Temp',
            fileUploadParams: {
                _token: '<?php echo e(csrf_token()); ?>',
            },
            fileUploadMethod: 'POST',
            fileMaxSize: 20 * 1024 * 1024,
            fileAllowedTypes: ['*'],
            //<------// images upload file //------>//

            //<------// images manager //------>//
            imageManagerPreloader: null,
            imageManagerPageSize: 20,
            imageManagerScrollOffset: 10,
            imageManagerLoadURL: url_gb + '/admin/getImageManager',
            imageManagerLoadMethod: "GET",
            imageManagerLoadParams: {
                user_id: 4219762
            },
            imageManagerDeleteURL: url_gb + '/admin/deleteImageManager/image',
            imageManagerDeleteParams: {
                _token: '<?php echo e(csrf_token()); ?>',
            },
            imageManagerDeleteMethod: "POST",
            //<------// images manager //------>//

            //<------// images upload //------>//
            imageUploadURL: null,
            requestHeaders: {
                'X-CSRF-TOKEN': 'XkK1pVlqKkVV90gwLYxvLfB6rYXA7lAR7vtF5FfP'
            },
            toolbarSticky: true,
            imageUploadURL: url_gb + '/admin/UploadImageEditor/EditorImageTemp',
            imageUploadParams: {
                _token: '<?php echo e(csrf_token()); ?>',
            },
            imageUploadMethod: 'POST',
            imageMaxSize: 2 * 1024 * 1024,
            imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif', 'ogg'],
            //<------// images upload //------>//
            events: {
                'image.uploaded': function(response) {
                    // Do something here.
                    // this is the editor instance.
                },
                'imageManager.imagesLoaded': function(response) {
                    // Do something when the request finishes with success.
                },
                'file.uploaded': function(response) {
                    // File was uploaded to the server.
                },
            }
        };
function ready(fn) {
  if (document.readyState != 'loading') {
    fn();
  } else if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', fn);
  } else {
    document.attachEvent('onreadystatechange', function() {
      if (document.readyState != 'loading')
        fn();
    });
  }
}

// test
window.ready(function() {
    editor = new FroalaEditor('#<?php echo e($id); ?>',options,() =>{

    })
    document.querySelector('#<?php echo e($id); ?>').addEventListener('FroalaEditor.contentChanged', function(e, editor, clickEvent) {
        window.trigger('resize');
    });
});


    // $(document).ready(function() {

    // });
</script>
<?php /**PATH C:\xampp\htdocs\flyncorp\vendor\elsayednofal\froala-editor\src\views/editor.blade.php ENDPATH**/ ?>