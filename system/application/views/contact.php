<script type="text/javascript"><!--
alert(hi);
function feedback_validate()
{
alert(hi);
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
//
--></script>



<form method="post" name="advertise" action="<?=base_url()?>contact/send_contact/" >
<table width="100%" border="0" cellspacing="10" cellpadding="10" style="font-size: 13px;border: 1px solid rgb(55, 137, 195);">
    <tr>
        <td colspan="3" align="center">Please Enter all the details marked <span style="color:red">*</span> </td>
    </tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Name</td>
		<td><input type="text"  name="name" id="name"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Email-id</td>
		<td><input type="text" name="mailid" id="mailid"></td>
	</tr>
	<tr>
	    <td style="color:red"></td>
		<td>Mobile/Phone</td>
		<td><input type="text" name="phone" id="phone"></td>
	</tr>
	<tr>
	    <td style="color:red"></td>
		<td>City</td>
		<td><input type="text" name="city" id="city"></td>
	</tr>
	<tr>
		<td style="color:red"></td>
		<td>Company/Organization</td>
		<td><input type="text" name="company" id="company"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Your Message</td>
		<td><textarea style="height: 100px;width: 300px;" name="message" id="message"></textarea></td>
	</tr>
	<tr >
		<td colspan='3' align="center"><input type="submit" name="submit" value="submit" onclick="return feedback_validate()"></td>
	</tr>
</table>
</form>