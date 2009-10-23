<table align="left"   cellpadding="0" cellspacing="0">
	<tr>
		<td colspan='3' align="left" valign="top" >
		<div id="gree_bar" style="width:689px;height: 25px;"><div style="padding-right: 10px;" id="more-news-div1" ><? echo $pagination; ?></div></div></td>
		<td rowspan='4'><div style="height: 900px;width: 240px;border: 1px solid red;background-color: gray;">google ads</div ></div></td>
	</tr>
	<tr>
		<td valign="top" height="790px" align="left">
			<table  border="0" cellpadding="0" cellspacing="5" >
			<tr>
			<? $count = 1; foreach ($greetings as $data): ?>
					<td align='center' height="250" id="gree_inner" valign="top">
						<div style="padding:8px 0px 2px 0px;">
								<a href="<?=base_url();?>greetings/inner/<?=$data->id?>/<?=$data->type?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$data->id?>_thumb.jpg" id="img"/></a>
								<div style="padding: 5px 50px 0px 0px;"><a href="<?=base_url();?>greetings/inner/<?=$data->id?>/<?=$data->type?>"><?=$data->name?></a></div>
								<div id="gree-summery"><?=$data->summery?></a></div>
						</div>
					</td>
			<? if ($count==3)
			{
				$count = 0;
				echo "</tr><tr>";
			}
			$count++;
			endforeach; ?>
				
			</table>
		</td>
		</tr>
	<tr>
	  <td colspan='3' align="left" valign="top" ><div id="gree_bar" style="width:691px;"><div style="padding-right: 10px;" id="more-news-div1" ><? echo $pagination; ?></div></div></td>
	</tr>
	<tr>
		<td style="background-color: gray;" valign="top" height="30">add space</td>
	</tr>
	 
	</table>