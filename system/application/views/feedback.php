<form method="post" name="advertise" action="contact/send_contact/" onsubmit="return feedback_validate()">
<table width="100%" border="0" cellspacing="10" cellpadding="10" style="font-size: 13px;border: 1px solid rgb(55, 137, 195);">
    <tr>
        <td colspan="3" align="center">Please Enter all the details marked <span style="color:red">*</span></td>
    </tr>
	<tr>
	<td style="color:red">*</td>
		<td>Company/Organization</td>
		<td><input type="text" name="company" id="company"></td>
		</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Name</td>
		<td><input type="text"  name="name" id="name"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Mobile/Phone</td>
		<td><input type="text" name="phone" id="phone"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Email-id</td>
		<td><input type="text" name="mailid" id="mailid"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>City</td>
		<td><input type="text" name="city" id="city"></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Your Message</td>
		<td><textarea style="height: 100px;width: 300px;" name="message" id="message"></textarea></td>
	</tr>
	<tr >
		<td colspan='2' align="center"><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>