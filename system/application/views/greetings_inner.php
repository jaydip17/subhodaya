<table align="left" cellspacing='6' cellpadding="0" >
	<tr>
		<td  width="px">
		<div style="height: 25px;width: 691px;background-color: #137ABC" id="more-news-div1">
			<span ><a href="<?=base_url();?>greetings/content/<?php if(isset($result['0'])){echo $result['0']->type;}?>"><?php if(isset($more[24])){echo $more['24']->matter;}?></a></span>
		</div>
		<div style="border: 1px solid #137ABC;">
			<table width="685px" height="700px" align="center" >
				<tr>
					<td align="center" width="685px" valign="top">
							<img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($result)){echo $result['0']->id;}?>.jpg">
					</td>
				</tr>
				<tr>
					<td valign="top">
					<form method="post" action="<?=base_url();?>subhodaya/sendmail">
						<table align="center" width="550px" border="0">
							<tr>
								<td colspan='2' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td align="left" width="30%"><?=$more['27']->matter?></td><td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left"><?=$more['28']->matter?></td><td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
						</table>
						</form>
					</td>
				</tr>
				
			</table>
		</div>
		<div style="height: 25px;width: 694px;background-color: #137ABC"></div>
		</td>
		<td width="310" style="border: 1px solid red;background-color: gray;" rowspan="2">add space</td>
	</tr>
</table>