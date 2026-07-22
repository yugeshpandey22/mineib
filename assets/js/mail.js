$(function($) {
	$("#homeenquiry-form form").on('submit', function(event) {
		var $form = $(this);	
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function(data) {
				let result = data.includes("Thank you for reaching us");
				if(result) {
					$('#homesuccessmsg').html(data);
					$('#homesuccessmsg').addClass('alert alert-success');
				} else {
					$('#homesuccessmsg').html('Thank you for reaching us');
					$('#homesuccessmsg').addClass('alert alert-success');
				}
				$("#homesuccessmsg").show();
				setTimeout(function() { $("#homesuccessmsg").hide(); }, 5000);
				$('#homeenquiry-form form')[0].reset();	
			}
		});
		event.preventDefault();	
	});
}($));
$(document).on({
    ajaxStart: function(){
        $("body").addClass("loading"); 
    },
    ajaxStop: function(){ 
        $("body").removeClass("loading"); 
    }    
});