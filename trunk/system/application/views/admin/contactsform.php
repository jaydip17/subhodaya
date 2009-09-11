<script type="text/javascript">
<!--
function test()
{
	var uname = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	var url = '&username='+uname+'&password='+pass+'&type='+email;
	var attribures = '&height=400&width=500'; 
	document.getElementById('importcontacts').setAttribute('alt','<?=base_url()."admin/contacts/import?"?>'+url+attribures);
}
//-->
</script>
<form name="form1" method="post" action="<?=base_url()?>admin/contacts/import">
  <table width="340" border="0" cellspacing="0" cellpadding="0" >

    <tr> 
      <td colspan="2" style="padding:6"><div align="center" class="formheading"><strong>Import 
            Contacts<br>
           </strong></div></td>
    </tr>
    <tr> 
      <td  style="padding:6"><div align="left"><strong>Username:</strong></div></td>
      <td  style="padding:6"><input name="username" value="" type="text" class="text" id="username">
      <select name="type" id='email'>
      <option value="yahoo">Yahoo.com</option>
      <option value="gmail">Gmail.com</option>
      </select>
      </td>
    </tr>
    <tr> 
      <td style="padding:6"><div align="left"><strong>Password:</strong></div></td>

      <td style="padding:6"><input name="password" type="password" class="text" id="password">
      </td>
    </tr>
    <tr> 
      <td colspan="2" style="padding:6">*Your username and password will not be stored on this server.</td>
    </tr>
    <tr> 
      <td colspan="2" style="padding:6">
      <input id='importcontacts' alt='' onclick="test()" class="thickbox" type="submit" name="Submit" value="Import Contacts" class="button" style="width:100%"></td>
    </tr>
    <tr> 
      <td colspan="2" style="padding:6" align="center"><?=$message;?></td>
    </tr>
  </table>
    
</form>
