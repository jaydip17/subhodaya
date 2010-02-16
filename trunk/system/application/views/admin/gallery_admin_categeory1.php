<?
if (isset ( $cat )) {
	?>
<h2>your categeory added successfully..
<h2>add another one</h2>
<?
}
?>
<table align="center" width="400" id="tableadmin">
	<thead>
		<h2 style="color: olive">Add gallery Categeory</h2>

	</thead>
<?php
$js='onsubmit= "return validate(this)"';
echo form_open ( 'admin/gall/addCategeory',$js );
?>
	<tr>
		<td>
<?
echo form_label ( 'Select Categeory', 'categeory' );
?>
</td>
<td>
<?
echo form_dropdown ( 'parentid', $options, 'root' );
?>
</td>
	</tr>
	<tr>
		<td>
<?
echo form_label ( 'categeory', 'catname' );
?>
</td>
		<td>
<?
$id = 'display';
$js = array ('name' => 'catname', 'id' => 'id', 'onFocus' => "focusthis('$id')" );
echo form_textarea($js);
?>
</td>
		
	</tr>
	<tr>
		<td></td>
		<td>
<?
echo form_submit ( 'mysubmit', 'Submit' );
?>
</td>
	</tr>
	</form>
</table>