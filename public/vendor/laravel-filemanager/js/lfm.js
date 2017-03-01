(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'image';

    if (type === 'image' || type === 'images') {
      type = 'Images';
    } else {
      type = 'Files';
    }

    this.on('click', function(e) {
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
      localStorage.setItem('target_input', $(this).data('input'));
      localStorage.setItem('target_preview', $(this).data('preview'));
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      return false;
    });

    $(document).on('click', '.fm-button' , function(e){
        localStorage.setItem('target_input', $(this).data('input'));
        localStorage.setItem('target_preview', $(this).data('preview'));
        window.open('/laravel-filemanager?type=' + type, 'FileManager', 'width=900,height=600');
        return false;
    })
  }

})(jQuery);


function SetUrl(url, file_path){
  //set the value of the desired input to image url
  var target_input = $('#' + localStorage.getItem('target_input'));
  target_input.val(file_path);
  var extension = file_path.split('.').pop();
  var image_value = file_path.split('/').pop();
  var exists_preview = target_input.closest(".ui.fluid").find('.preview-flm').length

  if (extension.toLowerCase() == 'png' ||  extension.toLowerCase() == 'jpg') {

      if (exists_preview == 1) {
        target_input.closest(".imagen-array").find('.title-image-flm').text(image_value)
        target_input.closest(".ui.fluid").find('.preview-flm').data('name', file_path)
      }else{
        target_input.closest(".imagen-array").find('.title-image-flm').text(image_value)
        target_input.closest(".ui.fluid").append('<a class="ui button preview-flm" data-name="'+file_path+'">Preview</a>')
      }

  }else{
      
      if (exists_preview == 1) {
        $('.preview-flm').remove();
        target_input.closest(".ui.fluid").find('.title-image-flm').text(image_value)
      }else{
        target_input.closest(".ui.fluid").find('.title-image-flm').text(image_value)
      }

  }
  //set or change the preview image src
  var target_preview = $('#' + localStorage.getItem('target_preview'));
  target_preview.attr('src', url);
}
