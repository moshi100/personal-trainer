
function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }

function show_connection()
{
	$("#registration").hide(400);
	$("#connection").toggle(400);
}

function show_registration()
{
	$("#connection").hide(400);
	$("#registration").toggle(400);
}
	

function date_today()
{
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!

	var yyyy = today.getFullYear();
	if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;

	return(today);
}

function validPhone(number){
    if(number == ""){
      return false;
    }
    if(number != Math.abs(number) && number != Math.ceil(number)){
      return false;
    }
    if(number.length < 12 || number.length > 7){
      return true;
    }
    return false;
}

function validMail(str)
{
      var at="@"
      var dot="."
      var lat=str.indexOf(at)
      var lstr=str.length
      var ldot=str.indexOf(dot)
      
      if (str.indexOf(at) == -1){
         return false;
      }
      if (str.indexOf(at) == -1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
         return false;
      }

      if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
          return false;
      }

       if (str.indexOf(at,(lat+1))!=-1){
          return false;
       }

       if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
          return false;
       }

       if (str.indexOf(dot,(lat+2))==-1){
          return false;
       }

       if (str.indexOf(" ")!=-1){
          return false;
       }

       return true;
}

function validName(name)
{
    if(name.length != "")
    {
        return true;
    }
    else
    {
        return false;
    }

}
