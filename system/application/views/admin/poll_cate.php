<table align="center" width="50%" id="tableadmin">
	<thead>
		POLL
	</thead>
   <?php if(!empty($details))
{?>
<tr>
		<th width='300px' style="text-align:center">
		Categeory Name
		</th>

		<th width='50px'>
		View
		</th>
		
	</tr>
<?
foreach ($details as $item):

 ?>

<tr>
		<td width='300px'><?=$item->matter?>

</td>
		
		<td width='50px'><a
			href="<?=base_url()?>admin/poll/getpoll/<?=$item->id?>">
			view</a></td>
				</tr>

<?php 
     
      endforeach ;?>
<tr>
	
	
	
	
	<tr>
	<td colspan =4>
	  <?php // echo $this->paginationnew->paginate();?>
	  </td>
	  </tr>
</table>
<? }else { ?>
	
<h2>Add Sahithi to display</h2>	
<? }?>



