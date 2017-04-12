$("#myTable").DataTable();

//Para ocultar el flash session
$(document).ready(function(){
    var positiveMessage = $('.alert-success');
    var existsPossitiveMessage = positiveMessage.length;

    if (existsPossitiveMessage == 1) {
        positiveMessage.delay('5000').fadeOut('slow/5000/fast');
    }
});

// Enviar formulario
$("#submit-btn").on('click' , function(){
  $("#general-form").submit();
});

//Datepicker todas los campos de fecha con la clase .input-fecha
$('.input-fecha').datepicker({
      showOn: "button",
      buttonImage: "{{ asset('calendar.gif') }}",
      buttonImageOnly: false,
      buttonText: "Select date"
});

$(".date-button-adm").on('click', function(e){
	e.preventDefault();
	$(".ui-datepicker-trigger").click();
});


$('.checkbox').checkbox();

			
