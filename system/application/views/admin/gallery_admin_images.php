
<style type="text/css">
.tablediv {
	top: 390px;
	border: solid 1px #c0c0c0;
	font-size: 11px;
	font-family: verdana;
	color: #000;
	padding: 5px;
}
</style>
<script type="text/javascript" language="javascript">
  var count=1;
function fun()
{
 document.getElementById('tablediv').value++;
 
 var table = document.getElementById('table');
 var tr = document.createElement('TR');
 var td1 = document.createElement('TD');
 var inp1 = document.createElement('input');
 var inp2 = document.createElement('input');
 var img = document.createElement('IMG');
 img.setAttribute('src','<?=base_url();?>assets/imgs/delete1.jpg');
 img.setAttribute('alt', 'imgs');
 img.onclick = function(){
 removeBrowse(tr);
 }
 
 inp1.setAttribute("type", "file");
 inp1.setAttribute('name', 'image'+count);
 inp1.setAttribute('id', 'image'+count);
 
 inp2.setAttribute("type", "text");
 inp2.setAttribute('name', 'title[]');
 inp2.setAttribute('id', 'title'+count);
 
 table.appendChild(tr);
 tr.appendChild(td1);
 td1.appendChild(inp2);
 td1.appendChild(inp1);
 td1.appendChild(img);
 count++;
}
function removeBrowse(tr){
tr.parentNode.removeChild(tr);
count--;
}
</script>

<?
echo form_open ( 'admin/gallery/root_forimages' );
?>
<table align="center" width="430" id="tableadmin">
	<thead>
		<h2 style="color:olive">Add gallery Image
		</h2>
	
	</thead>

<?
$js = 'onchange="submit();"';
?>

<?
echo form_hidden ( 'parentid', $parentid )?>

<tr>
		<td width="150">
<?
echo form_label ( 'Select root categeory', 'parentid' );
?>
</td>
		<td width="290">
<?
echo form_dropdown ( 'parentid', $options1, $parentid, $js );
?>
</td>
	</tr>

</table>
</form>
<?
echo form_open_multipart( 'admin/gallery/addImage' );
?>
<table align="center" width="430" id="tableadmin">
	<tr>
		<td align="left" width="150">
<?
echo form_label ( 'Select sub categeory', 'id' );
?>
</td>
		<td width="290">
<?
echo form_dropdown ( 'parentid1', $options );
?>
</td>
	</tr>
	<tr>
		<td>
<?
echo form_label ( 'Select title for image', 'title[]' );
?>
</td>
		<td>
<?
echo form_input ( 'title[]', '' );
?>

</td>
	</tr>
	<tr>
		<td>
<?
echo form_label ( 'Select image', 'image0' );
?>
</td>
		<td>
<?=form_upload('image0');?>
<input type='button' value='add more' onclick='fun();' /></td>
	</tr>
	
	<tr>
		<td></td>
		<td>
		<div id='tablediv'>
		<table id='table'>
		</table>
		</div>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td>
<?php
if (isset ( $upload )) {
	?>

<?
	echo form_submit ( 'mysubmit', 'upload another file' );
	

} else {
	echo form_submit ( 'mysubmit', 'upload' );}?>
</td>
	</tr>


</table>
</form>

