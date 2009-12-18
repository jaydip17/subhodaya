
<script language="javascript">
function fun(){
	var i;
	for (i=1;i<=10;i++)
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


<? echo form_open(base_url().'admin/astrolagy/deletecategeory');?>

<table align="center" width="300" id="tableadmin">

<thead>
		<h2 style="color: black">Astrolagy</h2>
	</thead>

<?php if(!empty($details))
{?>

<tr>
		<th>Astrolagycategeory</th>
		<th>View</th>
		
			
	</tr>

<?
foreach ($details as $item):

 ?>
<tr>

<td><?=$item->astrolagy_cat?></td>
<td width='50px'><a
			href="<?=base_url()?>admin/astrolagy/getastrolagy/<?=$item->id?>">
			view</a></td>
 
 

</tr>

<?php 
     
      endforeach ;?>


	<? } ?>

</table>
