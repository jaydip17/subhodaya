<table align="left"   cellpadding="0" cellspacing="0">
	<tr>
		<td colspan='3' align="left" valign="top" style="padding: 5px;"><div id="gree_bar1" style="width:689px;height: 25px;"><div style="padding-right: 10px;" id="more-news-div1" ><? echo $pagination; ?></div></div></td>
		<td rowspan='2'></td>
	</tr>
	<tr>
		<td valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="5">
			<tr>
			<? $count = 1; foreach ($greetings as $data): ?>
					<td align='center' width="222" height="250" id="gree_inner" valign="top">
						<div style="padding:8px 0px 2px 0px;">
								<a href="<?=base_url();?>greetings/inner/<?=$data->id?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$data->id?>_thumb.jpg" border="0"/></a>
								<div style="padding: 5px 50px 0px 0px;" id="more-news-div"><a href="<?=base_url();?>greetings/inner/<?=$data->id?>"><?=$data->name?></a></div>
								<div style="text-align: justify;padding: 5px 5px 0px 15px;"><?=$data->summery?></a></div>
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
	  <td colspan='3' align="left" valign="top" style="padding: 5px;"><div id="gree_bar1" style="width:691px;height: 25px;"><div style="padding-right: 10px;" id="more-news-div1" ><? echo $pagination; ?></div></div></td>
	</tr>
	   <tr>
	   <td colspan='3' height="50px" bgcolor="#D003A6">t14</td>
	   </tr>
	</table>