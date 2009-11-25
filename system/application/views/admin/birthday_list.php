
<table align="center" width="50%" id="tableadmin">
	<thead>
		Birthdays and Marriage-days
	</thead>
   <?php if(!empty($details))
{?>
<tr>
		<th width='300px' style="text-align:center">Name</th>
		<th width='300px' style="text-align:center">Birthday</th>
		<th width='300px' style="text-align:center">Marriage-day</th>
		<th width='50px'>Edit</th>
		<th width='50px'>Delete</th>
		
	</tr>
<?
foreach ($details as $item):

 ?>

<tr>
		<td width='300px'><?=$item->name?></td>
		<td width='50px'><?=$item->birthday?></td>
		<td width='50px'><?=$item->marri_day?></td>
		<td width='50px'>
			<a href="<?=base_url()?>admin/birthdays/edit/<?=$item->id?>"><img
				src="<?=base_url();?>assets/imgs/b_edit.png" border='0' /></a>
		</td>
		<td width='50px'>
			<a href="<?=base_url()?>admin/birthdays/delete/<?=$item->id?>"><img
				src="<?=base_url();?>assets/imgs/delete_on.gif" border='0' /></a>
		</td>
</tr>
<?php endforeach ;?>
	<tr>
		<td colspan="2"></td>
		<td><a  onclick="fun();" href="javascript:void(0)">checkall</a>&nbsp;
		<a  onclick="fun1();" href="javascript:void(0)">uncheckall</a></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="2"></td>
		<td><? echo form_submit('remove','remove selected');?>  </td>
		<td></td>
		<td></td>
	</tr>
	<tr>
	<td colspan =5>
	  </td>
	  </tr>
</table>
<? }else { ?>
	
<h2>Add Greetings to display</h2>	
<? }?>

</form>