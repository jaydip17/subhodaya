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
<table cellpadding="0" cellspacing="5px;" width="926">
	<tr>
		<td  height="93" align="left" valign="top"><div style="width: 742px;height: 93px;border: 1px solid red;background-color: gray;">your adds here</div></td>
		<td rowspan="2" width="180" align="center" valign="top"><div style="width: 180px;height: 740px;border: 1px solid red;"></div></td>
	</tr>
	<tr>
		<td valign="top" height="600">
		<div style="margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
					<div style="text-align: left;float: left;width: 50%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
					<? if(isset($links)):?>
					<?if(isset($links['first'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['first']?>/<?=$image['0']->parentid?>">First</a>!!<?} ?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>!!<?} ?>
						<?if(isset($links['last'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['last']?>/<?=$image['0']->parentid?>">Last</a>						
					<?}endif; ?>
					</div>
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3"  id="gal_center1"  width="742" align="center" height="590" >
					<img src="<?=base_url()?>assets/gallery/image<?=$image['0']->id?>.jpg"  border="0">
					</td>
				</tr>
				 <tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
						<div style="text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['first'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['first']?>/<?=$image['0']->parentid?>">First</a>!!<?} ?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>!!<?} ?>
						<?if(isset($links['last'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['last']?>/<?=$image['0']->parentid?>">Last</a>						
					<?}endif; ?>
					</div>
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				
				<tr>
					<td valign="top" colspan="3">
					<div><form method="post" name="Ratingform" action="<?=base_url();?>gallery/content/">
   

<span id="rating2" class="ratingContainer" >
		      <span class="ratingButton" ></span>
		      <span class="ratingButton" ></span>
		      <span class="ratingButton"></span>
		      <span class="ratingButton"></span>
		      <span class="ratingButton"></span>
				<input type="hidden" name="id" value="<?=$image['0']->id?>" />
		      <input id="dynamicElement2" type="text" name="spry_dynamic2" value="3" />
      		  <span class="ratingRatedMsg sample">Thanks for your rating!</span>
  </span>
		  <label>
		  <input type="submit" name="button" id="button" value="Vote" />
		  </label>

	
</form>
    <script type="text/javascript">
		///var firstRating = new Spry.Widget.Rating("static", {ratingValueElement: 'readOnly', readOnly: true});	
		///var Rating1 = new Spry.Widget.Rating("rating1", {ratingValueElement:'dynamicElement1'});
		var Rating2 = new Spry.Widget.Rating("rating2", {ratingValueElement:'dynamicElement2'});
	
      </script></div>
					<form name="telugu_send" method="post" action="<?=base_url();?>subhodaya/sendmail">
					<input type="hidden" name="url" value="<?=base_url()?>gallery/content/<?=$image['0']->id?>">
			
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
							<tr><td colspan="2" align="left"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				            <tr>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
							</table>
						</form>
			 
							
						</table>
						</form>
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3"></td></tr>
			</table>
		</div>
			
	</td>
	</tr>
	<tr>
		<td width="925" height="156" style="border: 1px solid red;background-color: gray;" colspan="2" >
		</td>
	</tr>
</table>