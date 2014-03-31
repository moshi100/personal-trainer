
function validationMessage(){

	this.prototype = new validation();
	this.message = null;
	this.idItem = null;
	this.date_array = null;

	this.constructor=function(){
		this.prototype.action = "insert";
		this.prototype.constructor("message");
		this.message = escapeHtml($('p.'+this.prototype.form+' #message').val());
		this.idItem = escapeHtml($('p.'+this.prototype.form+' #iditem').val());
		this.clear("message");
	}

	this.send_form=function(){
		 if(this.prototype.send_form() == true){
			 
			 this.get_array();
			 form1 = this.prototype.form;
			 
			 $.ajax({ 
		 			type: "POST",
		 			url: "surface.ajax.php?type=message&act="+this.prototype.action,
		 			data: this.date_array,
		 			success: function(html){
			            var is_true = html;
						if(is_true == 1){
							$("#outer_"+form1).html("<b>Sent, thanks you</b>");
							$("#status_"+form1).html("");
							setTimeout(function() {
								location.reload();
							}, 700);
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
				idItem: this.idItem,
				name: this.prototype.name,
				message: this.message,
		    	date: date_today()
		};
	}
	
	this.check_message=function(){
		if(validName(this.message) == false){
			this.error("message");
	    }else{
	    	 this.success("message");
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

