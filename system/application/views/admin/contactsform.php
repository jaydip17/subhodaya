
<form name="form1" method="post" action="<?=base_url()?>admin/contacts/import">
  <table width="340" border="0" cellspacing="0" cellpadding="0" >

    <tr> 
      <td colspan="2" style="padding:6"><div align="center" class="formheading"><strong>Import 
            Gmail Contacts<br>
           </strong></div></td>
    </tr>
    <tr> 
      <td width="50%" style="padding:6"><div align="left"><strong>Gmail Username:</strong></div></td>
      <td width="50%" style="padding:6"><input name="username" value="" type="text" class="text" id="username" style="width:100%"></td>
    </tr>
    <tr> 
      <td width="50%" style="padding:6"><div align="left"><strong>Gmail Password:</strong></div></td>

      <td width="50%" style="padding:6"><input name="password" type="password" class="text" id="password" style="width:100%"></td>
    </tr>
    <tr> 
      <td colspan="2" style="padding:6">*Your username and password will not be stored on this server.</td>
    </tr>
    <tr> 
      <td colspan="2" style="padding:6"><input type="submit" name="Submit" value="Import Contacts" class="button" style="width:100%"></td>
    </tr>
  </table>

</form>
