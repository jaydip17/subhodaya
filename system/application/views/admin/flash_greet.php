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
  var confirm1 = confirm("are u sure that your image are of size 599x319");
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
<? if(isset($message) && !is_array($message) ) echo($message);
		 
		if(isset($message))
		if(is_array($message) ) {
			foreach ($message as $mess){
				echo $mess['error'];
			}
		}?>
<?
$js = array('onsubmit'=>"return sure()");
echo form_open_multipart ( 'admin/flash_greet/add',$js );
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
		<td><?=form_label('Link for image','hyperlink') ?></td>
		<td><? $data=array('name'	=>	'link',
							'value'	=>	'',
							'rows'  => 1,
							'cols'  => 27
							); echo form_textarea($data); ?></td>
	</tr>
		
	<tr>
		<td>
<?
echo form_label ( 'Select image(only size 599x319)', 'image' );
?>
</td>
		<td>
<?=form_upload ( 'image' );?>
</td>
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

