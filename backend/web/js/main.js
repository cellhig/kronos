$(function()
{		//obtiene el click del boton crear
	$('#modalButton').click(function()
							{
								$('#modal').modal('show')
								.find('#ModalContent')
								.load($(this).attr('value'))	
							});	
});