<script language="javascript">
//<!--
function telugu_typing()
{
	if(document.telugu_send.telugu_type.checked == true)
	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";

	}
	else

	{
		window.location="javascript:(t13nb=window.t13nb||function(l){var%20t=t13nb,d=document,o=d.body,c=\"createElement\",a=\"appendChild\",w=\"clientWidth\",i=d[c](\"span\"),s=i.style,x=o[a](d[c](\"script\"));if(o){if(!t.l){t.l=x.id=\"t13ns\";o[a](i).id=\"t13n\";i.innerHTML=\"Loading%20transliteration\";s.cssText=\"z-index:99;font-size:18px;background:#FFF1A8;top:0\";s.position=d.all?\"absolute\":\"fixed\";s.left=((o[w]-i[w])/2)+\"px\";x.src=\"http://t13n.googlecode.com/svn/trunk/blet/rt13n.js?l=\"+l}}else%20setTimeout(t,500)})('te')";
	}
}
//-->
</script> 
<table align="left" cellspacing='6' cellpadding="0" >
	<tr>
		<td >
		<div style="height: 25px;width: 691px;background-color: #137ABC" id="more-news-div1">
			<span ><a href="<?=base_url();?>greetings/content/<?php if(isset($result['0'])){echo $result['0']->type;}?>"><?php if(isset($more[24])){echo $more['24']->matter;}?></a></span>
		</div>
		<div style="border: 1px solid #137ABC;">
			<table width="685px" height="700px" align="center" >
				<tr>
					<td align="center" width="685px" valign="top">
							<img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($result)){echo $result['0']->id;}?>.jpg" style="border: 3px solid #939393;margin: 7px 0px 7px 0px;">
					</td>
				</tr>
				<tr>
					<td valign="top" align="center">
					<form name="telugu_send" method="post" action="<?=base_url();?>subhodaya/sendmail">
						<table align="center" width="550px" border="0" style="border: 1px solid #939393;">
							<tr>
								<td colspan='2' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td align="left" width="30%" style="padding-left: 10px;"><?=$more['27']->matter?></td>
								<td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left" width="30%" style="padding-left: 10px;"><?=$more['38']->matter?></td>
								<td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left" style="padding-left: 10px;"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr><td align="left" colspan="2" style="padding-left: 10px;"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				
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