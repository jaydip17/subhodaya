<script type="text/javascript">
<!--
function test()
{
    var flag=1;
	var uname = document.getElementById('username1').value;
	//alert(uname);
	//alert(password);
	var pass = document.getElementById('password1').value;
	var email = document.getElementById('email1').value;
	if(uname=="" || pass=="")
	{
	flag=0;
	alert("Enter username and password");	
	}
	
	if(flag!=0)
	{
	//tb_show('My Caption',url,'false');
	var url = '&username='+uname+'&password='+pass+'&type='+email;
	attribures = '&height=400&width=500';
	tb_show('Your Contact list','<?=base_url()."admin/contacts/import?"?>'+url+attribures,'false');
	 
	}
	else
	return false;
}
//-->
</script>
<style>
#loginimg{
	background-image: url(<?=base_url()?>assets/imgs/logincr.jpg);
	background-repeat: repeat-x;
}
</style>
<table height="360" width="510" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td width="10" align="right" valign="top"><img src="<?=base_url()?>assets/imgs/loginleft.jpg"></td>
	<td id="loginimg" valign="top" align="center">
	<div style="text-align: center;font-size: 16px;color: #FFFFFF;font-weight: bold;padding-top: 20px;">Enter Details</div>
	<form method="post" action="<?=base_url()?>admin/contacts/import">
	  <table cellspacing="10" cellpadding="10" align="center" style="border: 1px solid #99c6E4;padding-top: 20px;">
    	<tr> 
		      <td align="left"><div align="left"><strong>Username:</strong></div></td>
		      <td align="left"><input name="username" value="" type="text" class="text" id="username1">
		      <select name="type" id='email1'>
		      <option value="yahoo">yahoo</option>
		      <option value="gmail">gmail</option>
		      </select>
		      </td>
    	</tr>
    	<tr> 
      		<td  align="left"><strong>Password:</strong></td>
      		<td align="left"><input name="password" type="password" class="text" id="password1">
      		</td>
    	</tr>
    	<tr> 
      		<td colspan="2"  align="left">*Your username and password will not be stored on this server.</td>
    	</tr>
    	<tr> 
      		<td colspan="2"  align="left">
      		<input id='importcontacts' alt='' onclick="test()" class="thickbox" type="submit" name="Submit" value="Import Contacts" class="button" style="width:100%"></td>
    	</tr>
    	<tr> 
      		<td colspan="2"  align="center"><?=$message;?></td>
    	</tr>
  	</table>
  	</form>
	</td>
	<td width="10" valign="top"><img src="<?=base_url()?>assets/imgs/loginright.jpg"></td></tr>
</table>


   

