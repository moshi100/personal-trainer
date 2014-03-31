
function validationRegistration(){

	this.prototype = new validation();
	this.password = null;
	this.repeat_password = null;
	this.email = null;
	this.action = null;
	this.date_array = null;
	
	this.constructor=function(){
		this.prototype.action = "insert";
		this.prototype.constructor("registration");
		this.password = escapeHtml($('p.'+this.prototype.form+' #password').val());
		this.repeat_password = escapeHtml($('p.'+this.prototype.form+' #repeat_password').val());
		this.email = escapeHtml($('p.'+this.prototype.form+' #email').val());
		
		this.clear("password");
		this.clear("repeat_password");
		this.clear("email");
	}
	
	this.send_form=function(){
		 if(this.prototype.send_form() == true){
			 
			 this.get_array();
			 form1 = this.prototype.form;
			 
			 $.ajax({ 
		 			type: "POST",
		 			url: "surface.ajax.php?type=user&act="+this.prototype.action,
		 			data: this.date_array,
		 			success: function(html){
			            var is_true = html;
						if(is_true == 1){
							$("#outer_"+form1).html("<b>Sent, thanks you</b>");
							$("#status_"+form1).html("");
							setTimeout(function() {
									show_connection();
							}, 1500);
						}
						else{
							$("#status_"+form1).html("<b>Errot, please try again</b>");
						}
		 			}
		 		});
		 }
	}
	
	this.get_array=function(){
		this.date_array = {
				name: this.prototype.name,
		    	password: this.password,
		    	email: this.email
		};
	}
	
	this.check_email=function(){
		if(validMail(this.email) == false){
			this.error("email");
	    }else{
	    	 this.success("email");
	    }
	 }
	 
	 this.check_password=function(){
		 if(this.password.length == 0){
			 this.error("password");
	     }else{
	    	 this.success("password");
		 }
	 }
	 
	 this.check_repeat_password=function(){
		 var comp = this.password.localeCompare(this.repeat_password);
		 if(comp != 0 || this.password.length == 0){
			 this.error("repeat_password");
		 }else{
	    	 this.success("repeat_password");
		 }
	 }
	
	this.success=function(name){
		this.prototype.success(name);
	}
	this.check_name=function(){
		this.prototype.check_name();
	}
	this.error=function(input){
		this.prototype.error(input);
	 }
	 this.clear=function(input){
		 this.prototype.clear(input);
	 }

}

