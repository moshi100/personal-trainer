
$(document).ready(function(){

	$("#button_connection11").click(function(){

		$('strong').remove(); //delete all strong tags

        var date_array = {
        		name: $('#inputName').val(),
        		password: $('#password').val(),
        		email: $('#inputEmail').val(),
        		date: date_today()
		};
        var comp = date_array['password'].localeCompare($('#repeat_password').val());
        var flag = 1;
        
        if(validMail(date_array['email']) == false){
	        $("#inputEmail").after("<strong><img src='public/img/error.png'></strong>");
	        flag = 0;
        }

        if(date_array['password'].length == 0){
        	$("#password").after("<strong><img src='public/img/error.png'></strong>");
        	flag = 0;
        }
        
        if(comp != 0){
        	$("#repeat_password").after("<strong><img src='public/img/error.png'></strong>");
        	flag = 0;
        }
        
        if(validName(date_array['name']) == false){
        	$("#inputName").after("<strong><img src='public/img/error.png'></strong>");
        	flag = 0;
        }

        if (flag == 1){
        	$('#status_connection').html("<img src='public/img/loading3.gif' alt='Loading...'>");
        	$.ajax({ 
    			type: "POST",
    			url: "library/insert.ajax.php?type=user",
    			data: date_array,
    			success: function(html){
	            	var is_true = html.search('true');
					if(is_true > -1 && is_true < 15 && html.length < 15){
						$('#outer_connection').html("<b>Sent, thanks you</b>");
						$('#status_connection').html("");
					}
					else{
						$('#status_connection').html("<b>Errot, please try again</b>");
					}
    			}
    		});
        }

	});
	
});
