
<script language="javascript">
function fun(){
	var i;
	for(i=1;i<=10;i++)
	{
		var vn='c'+i;
		document.getElementById(vn).checked=true;
		
	}	
}

function fun1(){
	var i;
	for(i=1;i<=10;i++)
	{
	 var vn='c'+i;
	 document.getElementById(vn).checked=false;	
	}	
}
</script>



<table width="650" align="center" id="tableadmin">

 <thead>
		<h2 style="color: black">View videos</h2>
	</thead>
	
	<?php if($query->num_rows() > 0)
{?>
   <tr>
		<th></th>
		<th>Movie Name</th>
		
		<th>Title</th>
		<th>Youtube Url Id</th>			
		<th>Delete</th>
		
		<th>Edit</th>
		
		</tr>
		
		
<?php $i=1;//echo form_open();

echo form_open(base_url().'admin/videos/deletevideo/');?>
<?foreach ($query->result() as $item):

?>	

<tr>
		<td><input type="checkbox" id='c<?=$i?>' name="removeid1[]" value=<?=$item->id?>></td>
		<td><?=$item->video_name?>
    </td>
		<td><?=$item->title?>
    </td>
     <td align="center"><?=$item->video_id?>
    </td>
    
    
    <!-- <td><a href="<?=base_url();?>admin/videos/getvideos<?=$item->id?>/<?=$catid?>"> <img
			src="<?=base_url()?>assets/videos/image_preview/image<?=$item->id?>_thumb.jpg"
			alt="img"></td>-->
			
	<td><a
			href="<?=base_url()?>admin/videos/deletevideo/<?=$item->id?>/<?=$catid?>"
			onclick='return confirm("are you sure want to delete");'><img
			src="<?=base_url();?>assets/imgs/delete_on.gif" border='0' /></a></td>	
			
	<td><a
			href="<?=base_url()?>admin/videos/editvideo/<?=$item->id?>/<?=$catid?>"><img
			src="<?=base_url();?>assets/imgs/b_edit.png" border='0' /></a></td>
	</tr>	
	
	<?php $i++;endforeach ;?>
     <tr>
		
		<td align="center" colspan='6'><a onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp; <a
			onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
		
	</tr>	
	
	<tr>	
	
	<td align="center" colspan=6'>
    <? echo form_submit('remove','remove selected');?>  
    </td>
	
	</tr>
	
	<tr>
		<td colspan=4>
	  <?//php echo $this->paginationnew->paginate();?>
	  </td>
	</tr>
	
	</form>
<? }else { ?>
	
<h2>No Videos in this categeory</h2>	

<a href="<?=base_url();?>/admin/videos/viewaddvideo" style="color:purple">Click to Add Videos</a>
<? }?>
</table>