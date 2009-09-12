<form method="post" name="advertise" action="<?=base_url()?>contact/send_contact/">
<table width="100%" border="0" cellspacing="10" cellpadding="10" style="font-size: 13px;border: 1px solid rgb(55, 137, 195);">
	<tr>
		<td>Company/Organization</td>
		<td><input type="text" name="company"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text"  name="name"></td>
	</tr>
	<tr>
		<td>Mobile/Phone</td>
		<td><input type="text" name="phone"></td>
	</tr>
	<tr>
		<td>Email-id</td>
		<td><input type="text" name="mailid"></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="city"></td>
	</tr>
	<tr>
		<td>Your Message</td>
		<td><textarea style="height: 100px;width: 300px;" name="message"></textarea></td>
	</tr>
	<tr >
		<td colspan='2' align="center"><input type="submit" name="submit" value="submit" onclick="tb_remove()"></td>
	</tr>
</table>
</form>