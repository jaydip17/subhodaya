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
	alert("enter username and password");	
	}
	
	if(flag!=0)
	{
	//tb_show('My Caption',url,'false');
	var url = '&username='+uname+'&password='+pass+'&type='+email;
	attribures = '&height=400&width=500';
	tb_show('My Caption','<?=base_url()."admin/contacts/import?"?>'+url+attribures,'false');
	 
	}
	else
	return false;
}
//-->
</script>

  <table width="340" border="0" cellspacing="0" cellpadding="0" >

    <tr> 
      <td colspan="2" style="padding:6"><div align="center" class="formheading"><strong>Import 
            Contacts<br>
           </strong></div></td>
    </tr>
    <tr> 
      <td  style="padding:6"><div align="left"><strong>Username:</strong></div></td>
      <td  style="padding:6"><input name="username" value="" type="text" class="text" id="username1">
      <select name="type" id='email1'>
      <option value="yahoo">yahoo</option>
      <option value="gmail">gmail</option>
      </select>
      </td>
    </tr>
    <tr> 
      <td style="padding:6"><div align="left"><strong>Password:</strong></div></td>

      <td style="padding:6"><input name="password" type="password" class="text" id="password1">
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
