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
 img.setAttribute('alt', 'imgs');
  img.setAttribute('src','<?=base_url();?>assets/imgs/delete1.jpg');
  img.onclick = function(){
 removeBrowse(tr);
 }
 
 inp1.setAttribute("type", "file");
 inp1.setAttribute('name', 'image'+count);
 inp1.setAttribute('id', 'image'+count);
 
 inp2.setAttribute("type", "text");
 inp2.setAttribute('name', 'title[]');
 inp2.setAttribute('id','title'+count);
 
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
function sure()
{
  var confirm1 = confirm("are u sure that your images are of size 486x267 and 90x61");
 if(confirm1)
 {
   return true;
   }
   else
   {
   return false;
   }
}
</script>

<?
if($added == 'yes')
{
	echo "Add Another Image!";
}
$js = array('onsubmit'=>"return sure()");
echo form_open_multipart ( 'admin/slideimages/add',$js );
?>
<table align="center" width="430" id="tableadmin">
	<tr>
		<td>
<?
echo form_label ( 'Select title for image', 'title[]' );
?>
</td>
		<td>
<?
$data=array('name' => 'title[]',
			'value'=>'',
			'rows'=>1,
			'cols'=>27);
echo form_textarea($data);
?>

</td>
	</tr>
		<tr>
		<td>
<?
echo form_label ( 'Select text for image', 'text[]' );
?>
</td>
		<td>
<?
$data=array('name' => 'text[]',
			'value'=>'',
			'rows'=>2,
			'cols'=>27);
echo form_textarea($data);
?>

</td>
	</tr>
		<tr>
		<td>
<?
echo form_label ( 'Select Hyper_link', 'link[]' );
?>
</td>
		<td>
<?
$data=array('name' => 'link[]',
			'value'=>'',
			'rows'=>1,
			'cols'=>27);
echo form_textarea($data);
?>

</td>
	</tr>
	<tr>
		<td>
<?
echo form_label ( 'Select image(only size 486x267)', 'image0' );
?>
</td>
		<td>
<?=form_upload ( 'image0' );?>
</td>
<tr>
<td>
<?
echo form_label ( 'Select image(only size 90x61)', 'image0_thumb' );
?>
</td>
		<td>
<?=form_upload ( 'image0_thumb' );?>
<!--  <input type='button' value='add more' onclick='fun();' />--></td>
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

