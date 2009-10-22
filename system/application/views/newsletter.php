<form method="post" name="advertise" action="<?=base_url()?>newsletter/subscribe/" onsubmit="return <?=$onsubmit?>()">
<table width="100%" cellspacing="2" cellpadding="0" style="font-size: 13px;border: 1px solid rgb(55, 137, 195);">
    <tr>
        <td colspan="3" align="center">Please Enter all the details marked <span style="color:red">*</span></td>
    </tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Name</td>
		<td><input type="text" name="name" id="name" value="<?=$this->session->flashdata('name') ?>"></td>
		<td style="color: red;"><?=$this->session->flashdata('name1') ?></td>
	</tr>
	<tr>
	    <td style="color:red">*</td>
		<td>Email-id</td>
		<td><input type="text" name="email" id="email" value="<?=$this->session->flashdata('mailid') ?>"></td>
		<td style="color: red;"><?=$this->session->flashdata('mailid1') ?></td>
	</tr>
	
	<tr >
		<td colspan='3' align="center"><input type="submit" name="submit" value="submit" ></td>
	</tr>
</table>
</form>