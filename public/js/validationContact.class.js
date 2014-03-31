
function validationContact(){

	this.prototype = new validation();
	this.phone = null;
	this.email = null;
	this.action = null;
	this.date_array = null;
	
	this.constructor=function(){
		this.prototype.action = "insert";
		this.prototype.constructor("contact");
		this.phone = escapeHtml($('p.'+this.prototype.form+' #phone').val());
		this.email = escapeHtml($('p.'+this.prototype.form+' #email').val());
		
		this.clear("phone");
		this.clear("email");
	}
	
	this.send_form=function(){
		 if(this.prototype.send_form() == true){
			 
			 this.get_array();
			 form1 = this.prototype.form;
			 
			 $.ajax({ 
		 			type: "POST",
		 			url: "surface.ajax.php?type=contact&act="+this.prototype.action,
		 			data: this.date_array,
		 			success: function(html){
			            var is_true = html;
						if(is_true == 1){
							$("#outer_"+form1).html("<b>Sent, thanks you</b>");
							$("#status_"+form1).html("");
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
		    	phone: this.phone,
		    	email: this.email,
		    	date: date_today()
		};
	}
	
	this.check_email=function(){
		if(validMail(this.email) == false){
			this.error("email");
	    }else{
	    	 this.success("email");
	    }
	 }
	 
	 this.check_phone=function(){
		 if(validPhone(this.phone) == false){
			 this.error("phone");
	     }else{
	    	 this.success("phone");
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

