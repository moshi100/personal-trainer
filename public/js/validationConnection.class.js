
function validationConnection(){

   this.prototype = new validation();
   this.password = null;
   this.date_array = null;
   this.action = null;
   
   this.constructor=function(action){
      this.prototype.action = action;
      this.prototype.constructor("connection");
      this.password = escapeHtml($('p.'+this.prototype.form+' #password').val());
      
      this.clear("password");
   }
   
   this.send_form=function(){
       if(this.prototype.send_form() == true){
          
          this.get_array();
          form1 = this.prototype.form;
          flag1 = 1;
          $.ajax({ 
               type: "POST",
               url: "surface.ajax.php?type=user&act="+this.prototype.action,
               data: this.date_array,
               success: function(html){
                     var is_true = html;
                  if(is_true == 1){
                     $("#outer_"+form1).html("<b>Success</b>");
                     $("#status_"+form1).html("");
                     location.reload();
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
            password: this.password
      };
   }
   
    this.check_password=function(){
       if(this.password.length == 0){
          this.error("password");
        }else{
          this.success("password");
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

