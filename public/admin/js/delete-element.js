$(document).ready(function(e) {
    $(".eliminar-elemento").on('click', function(e) {
        var elemento = $(this).closest('tr').data('id')
        $("#elemento-id").val(elemento)
        $(".modal-footer").find('.f-delete').attr('data-id', elemento)
    });

    $(".f-delete").on('click', function(e) {

        var elementoId = $("#elemento-id").val();
        var form = $("#form-delete");
        var url  = form.attr('action').replace(':c_id', elementoId);
        var data = form.serialize();

        $.ajax({
            url : url,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (response) {
            	if (response) {
                    var trs = $('.table-rows');

					$.each(trs, function(index, val) {
						var value = $(this).data('id')
						if (value === response) {
							$("#close-modal-dl").click()
							$(this).fadeOut('slow/400/fast');
						}  
					});
                }
            }
        });
    });
});