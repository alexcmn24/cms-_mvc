function readURL(input, wrapperClass) {
  if (input.files && input.files[0]) {
    
    var reader = new FileReader();

    reader.onload = function (e) {
      $(wrapperClass + ' .image-upload-wrap').hide();
      $(wrapperClass + ' .file-upload-image').attr('src', e.target.result);
      $(wrapperClass + ' .file-upload-content').show();
      $(wrapperClass + ' .image-title').html(input.files[0].name);
    };
    
    reader.readAsDataURL(input.files[0]);
    
  } else {
    removeUpload(wrapperClass);
  }
}

var iuw = ' .image-upload-wrap';

function removeUpload(wrapperClass) {
  
  $(wrapperClass + ' .file-upload-content').hide();
  $(wrapperClass + iuw).show();
}

function dragDrop(){

$(iuw).bind('dragover', function () {
  $(iuw).addClass('image-dropping');
});
$(iuw).bind('dragleave', function () {
  $(iuw).removeClass('image-dropping');
});

}

dragDrop();
