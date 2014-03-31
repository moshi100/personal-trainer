
function validation(){
	this.name; 
	this.form; //which form
	this.action; //which action
	this.flag;
	
	this.constructor=function(form){
		this.form = form;
		this.name = escapeHtml($('p.'+this.form+' #name').val());
		this.flag = 1;
		this.clear("name");
	 }
	
	this.send_form=function(){
		 if(this.flag == 1){
			 $("#status_"+this.form).html("<img src='public/img/loading3.gif'>");
			 return true;
		 }
		 return false;
	}

	 this.check_name=function(){
		 if(validName(this.name) == false){
			 this.error("name");
	     }else{
	    	 this.success("name");
	     }
	 }
	 
	 this.error=function(input){
		 $("p."+this.form+" #"+input).css("border-color","red");
		 $("p."+this.form+" #"+input).css("background","url('public/img/error.png')");
		 $("p."+this.form+" #"+input).css("background-position","right");
		 $("p."+this.form+" #"+input).css("background-repeat","no-repeat");
		 $("p."+this.form+" #"+input).css("background-color","white");
		 this.flag = 0;
	 }

	 this.success=function(input){
		 $("p."+this.form+" #"+input).css("border-color","green");
		 $("p."+this.form+" #"+input).css("background","url('public/img/success.png')");
		 $("p."+this.form+" #"+input).css("background-position","right");
		 $("p."+this.form+" #"+input).css("background-repeat","no-repeat");
		 $("p."+this.form+" #"+input).css("background-color","white");
	 }
	 
	 this.clear=function(input){
		 $("p."+this.form+" #"+input).css("border-color","#CCCCCC");
		 $("p."+this.form+" #"+input).css("background","");
		 $("p."+this.form+" #"+input).css("background-color","white");
	 }
}

