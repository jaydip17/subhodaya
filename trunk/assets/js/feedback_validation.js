function feedback_validate()
{
 var flag=1;
   if (document.getElementById('name').value=="")
  {
   
	flag=0;
  }
  else if (document.getElementById('phone').value=="")
  {
    
	flag=0;
  }
   else if (document.getElementById('mailid').value=="")
  {
   
	flag=0;
  }
  else if (document.getElementById('message').value=="")
  {
    
	flag=0;
  }
  
  //if all fields are entered check for validation of email phone number..
  if (!IsNumeric(document.getElementById('phone').value))
  {
    alert("enter valid phone number");
	return false;
  }
  if(flag!=0)
  {
   var z = document.getElementById('mailid').value;
   if ((z.indexOf('@') < 0) || ((z.charAt(z.length-4) != '.') && (z.charAt(z.length-3) != '.'))) {
   alert("enter valid email id");
   return false;
   }
  }
  
  
  
  if(flag==0)
  {
   alert("please enter details marked *");
    return false;
  }
  else
  {
  onclick="tb_remove()"
  return true;
  }
}

function IsNumeric(sText)
{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   
   }
function advertise_validate()
{
  if (document.getElementById('location').value=="")
  {
    alert("please enter details marked *");
    return false;
  }
  if(!feedback_validate())
  {
  return false;
  }
  else
  {
  return true;
  }
}