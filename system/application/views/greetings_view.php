<table align="left"   cellpadding="0" cellspacing="0">
	<tr>
		<td colspan='3' align="left" valign="top" style="padding: 5px;"><div id="gree_bar1" style="width:630px;height: 25px;"></div></td>
		<td rowspan='2'></td>
	</tr>
  	<?php $count=0; foreach ($greetings as $row):?>
		<td style="padding: 5px;">
			<div id="gree_inner">
			<img src="<?=base_url();?>assets/greetings/gree_img5_thumb.jpg"</div>
		</td>
	<?php  
	if($count==2)
		echo '</tr><tr>'; 
	else{
		if($count==8)
		break;
	}
	endforeach;?>
	</tr>
	
	<!--
	<tr>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
		<td rowspan='5' valign="top">
		</td>
	</tr>
	<tr>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
		<td style="padding: 5px;">
			<div id="gree_inner"></div>
		</td>
	</tr>
	--><tr>
	  <td colspan='3' align="left" valign="top" style="padding: 5px;"><div id="gree_bar1" style="width:630px;height: 25px;"></div></td>
	</tr>
	   <tr>
	   <td colspan='3' height="50px" bgcolor="#D003A6">t14</td>
	   </tr>
	</table>