
<form method="post" name="advertise" action="<?=base_url()?>contact/send_contact/" >
<table width="100%" border="0" cellspacing="2" cellpadding="0" style="font-size: 13px;border: 1px solid rgb(55, 137, 195);">
    <tr>
        <td colspan="3" align="center">Please Enter all the details marked <span style="color:red">*</span> </td>
    </tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Name</td>
		<td><input type="text"  name="name" id="name" value="<?=$this->session->flashdata('name') ?>"></td>
		<td style="color: red;"><?=$this->session->flashdata('name1') ?></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Email-id</td>
		<td><input type="text" name="mailid" id="mailid" value="<?=$this->session->flashdata('mailid') ?>"></td>
		<td style="color: red;"><?=$this->session->flashdata('mailid1') ?></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Mobile/Phone</td>
		<td><input type="text" name="phone" id="phone" value="<?=$this->session->flashdata('phone') ?>"></td>
		<td style="color: red;"><?=$this->session->flashdata('phone1') ?></td>
	</tr>
	<tr>
	    <td style="color:red"></td>
		<td>City</td>
		<td><input type="text" name="city" id="city" value="<?=$this->session->flashdata('city') ?>"></td>
		<td></td>
	</tr>
	<tr>
		<td style="color:red"></td>
		<td>Company/Organization</td>
		<td><input type="text" name="company" id="company" value="<?=$this->session->flashdata('comp') ?>"></td>
		<td></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Your Message</td>
		<td><textarea style="height: 100px;width: 150px;" name="message" id="message" ></textarea></td>
		<td style="color: red;"><?=$this->session->flashdata('message1')?></td>
	</tr>
	<tr >
		<td colspan='3' align="center"><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>