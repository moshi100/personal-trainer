//focusout
$(document).ready(function(){
	
	$("#link_connection").click(function() {
		show_connection();
	});
	$("#link_registration").click(function() {
		show_registration();
	});

	$("#link_logout").click(function() {
		var p=new validationConnection();
        p.constructor("logout");
        p.send_form();
	});
	
	$("#button_message").click(function() {
		var p=new validationMessage();
        p.constructor();
        p.check_name();
        p.check_message();
        p.send_form();
	});
	
	$("#button_connection").click(function() {
		var p=new validationConnection();
        p.constructor("login");
        p.check_name();
        p.check_password();
        p.send_form();
	});
	
	$("#button_contact").click(function() {
		var p=new validationContact();
        p.constructor();
        p.check_name();
        p.check_phone();
        p.check_email();
        p.send_form();
	});
	
	$("#button_registration").click(function(){
        
		var p = new validationRegistration();
        p.constructor();
        p.check_name();
        p.check_email();
        p.check_password();
        p.check_repeat_password();
        p.send_form();
        
	});

});
