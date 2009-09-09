<style type="text/css">
/*  styles for the unit rater
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */

.ratingblock {
	display:block;
	border-bottom:1px solid #999;
	padding-bottom:8px;
	margin-bottom:8px;
	}

.loading {
	height: 15px;
	background: url('<?=base_url()?>assets/imgs/working.gif') 50% 50% no-repeat;
	}
	
.unit-rating { /* the UL */
	list-style:none;
	margin: 0px;
	padding:0px;
	height: 15px;
	position: relative;
	background: url('<?=base_url()?>assets/imgs/starrating.gif') top left repeat-x;		
	}

.unit-rating li{
    text-indent: -90000px;
	padding:0px;
	margin:0px;
	/*\*/
	float: left;
	/* */
	}
	
.unit-rating li a {
	outline: none;
	display:block;
	width:30px;
	height: 15px;
	text-decoration: none;
	text-indent: -9000px;
	z-index: 20;
	position: absolute;
	padding: 0px;
	}
	
.unit-rating li a:hover{
	background: url('<?=base_url()?>assets/imgs/starrating.gif') left center;
	z-index: 2;
	left: 0px;
	}

.unit-rating a.r1-unit{left: 0px;}
.unit-rating a.r1-unit:hover{width:30px;}
.unit-rating a.r2-unit{left:30px;}
.unit-rating a.r2-unit:hover{width: 60px;}
.unit-rating a.r3-unit{left: 60px;}
.unit-rating a.r3-unit:hover{width: 90px;}
.unit-rating a.r4-unit{left: 90px;}	
.unit-rating a.r4-unit:hover{width: 120px;}
.unit-rating a.r5-unit{left: 120px;}
.unit-rating a.r5-unit:hover{width: 150px;}
.unit-rating a.r6-unit{left: 150px;}
.unit-rating a.r6-unit:hover{width: 180px;}
.unit-rating a.r7-unit{left: 180px;}
.unit-rating a.r7-unit:hover{width: 210px;}
.unit-rating a.r8-unit{left: 210px;}
.unit-rating a.r8-unit:hover{width: 240px;}
.unit-rating a.r9-unit{left: 240px;}
.unit-rating a.r9-unit:hover{width: 270px;}
.unit-rating a.r10-unit{left: 270px;}
.unit-rating a.r10-unit:hover{width: 300px;}

.unit-rating li.current-rating {
	background: url('<?=base_url()?>assets/imgs/starrating.gif') left bottom;
	position: absolute;
	height: 15px;
	display: block;
	text-indent: -9000px;
	z-index: 1;
	}

.voted {color:#999;}
.thanks {color:#36AA3D;}
.static {color:#5D3126;}

#container {
	width: 50%;
	border: 1px solid #ccc;
	padding: 10px;
	}

h1 {
	font-size: 21px;
	font-family: Arial, sans-serif;
	margin:0 0 5px 0;
	padding:0;
	}

h2 {
	font-size: 16px;
	color: #333;
	font-family: Arial, sans-serif;
	margin:0 0 10px 0;
	padding:0;
	}

p 	{
	margin:3px;
	padding:0;
	}
		
</style>
<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/behavior.js"></script>
<script type="text/javascript" language="javascript" src="<?=base_url()?>assets/js/rating.js"></script>
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
		<td  height="93" align="left" valign="top"><div style="width: 742px;height: 93px;border: 1px solid red;">
		<div id="container">

    
<?php echo $this->ratings->bar('id21',''); ?>
<img src="<?=base_url()?>assets/imgs/starrating.gif" alt="fjshfh"/>


</div></div></td>
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