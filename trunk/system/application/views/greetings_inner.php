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
						<div style="width:600px; margin:3px;">
							<img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($result)){echo $result['0']->id;}?>.jpg">
						</div>
					</td>
				</tr>
				<tr>
					<td valign="top">
						<table align="center" width="550px" border="0">
							<tr>
								<td colspan='2'>ad</td>
							</tr>
							<tr>
								<td align="left" width="30%">Your Name</td><td align="left" width="70%"><input type="text"></td>
							</tr>
							<tr>
								<td align="left">Your Email</td><td align="left"><input type="text"></td>
							</tr>
							<tr>
								<td align="left">Recipient Name</td><td align="left"><input type="text"></td>
							</tr>
							<tr>
								<td align="left">Recipient Email</td><td align="left"><input type="text" ></td>
							</tr>
							<tr>
								<td align="left">Your Message</td><td align="left"><textarea style="height: 200px;width: 350px;"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="SEND"></td>
							</tr>
						</table>
					</td>
				</tr>
				
			</table>
		</div>
		<div style="height: 25px;width: 694px;background-color: #137ABC"></div>
		</td>
		<td width="310" style="border: 1px solid red;" rowspan="2"></td>
	</tr>
</table>