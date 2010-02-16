<script src="<?=base_url()?>assets/rating_script/rater.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/rating_script/ajax.js" type="text/javascript"></script> 

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/rating.css" />
<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.png);
padding-left: 20px;
}
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
	/*border-bottom:1px solid #999;*/
	padding-bottom:8px;
	margin-bottom:8px;
	}

.loading {
	height: 30px;
	background: url('<?=base_url();?>assets/imgs/working.gif') 50% 50% no-repeat;
	}
	
.unit-rating { /* the UL */
	list-style:none;
	margin: 0px;
	padding:0px;
	height: 30px;
	position: relative;
	background: url('<?=base_url();?>assets/imgs/starrating.gif') top left repeat-x;		
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
	height: 30px;
	text-decoration: none;
	text-indent: -9000px;
	z-index: 20;
	position: absolute;
	padding: 0px;
	}
	
.unit-rating li a:hover{
display:inline;
	background: url('<?=base_url();?>assets/imgs/starrating.gif') left center;
	position: absolute;
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
	background: url('<?=base_url();?>assets/imgs/starrating.gif') left bottom;
	position: relative;
	height: 30px;
	display: block;
	text-indent: -9000px;
	z-index: 1;
	}

.voted {color:#999;}
.thanks {color:#36AA3D;}
.static {color:#5D3126;}				
</style>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" width="1px"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td id="gal_center-top"  align="left" height="30" width="750">
			<div style="text-align: left;float: left;width: 70%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
						<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Previous</a>
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
				
					<? if(isset($links)):?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Next</a>						
					<?}endif; ?>
					</div>
	</td>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-right.jpg;" ></td>
	<td valign="top" rowspan="3" align="center" style="height: 500px;width: 170px;" >
		<table width="97%" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" width="4px"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" align="center" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><div style="height: 250px;width: 100%;background-color: #9CD8FC;font-size: 14px;">
				<ul style="margin-left: 15px;">
				<?php if(!empty($result)){
					foreach ($result as $item): 
				?>
				<li style="padding: 3px;"><a href="<?=base_url()?>gallery/categeory/<?=$item->id?>"><?=$item->catname?></a></li>
				<?endforeach;} ?>
				</ul>
			 </div>
			 <div style="margin-top: 5px;">
			 	<img src="<?=base_url()?>assets/imgs/add.jpg">
			 </div>
			 </td>
		</tr>
	</table>
	</td>
</tr>
<tr>
	<td colspan="3"   id="gal_middle" align="center" height="820"> 
		<div style="margin: 10px 0px 10px 0px">
		<img src="<?=base_url()?>assets/gallery/image<?=$image['0']->id?>.jpg" id="img">
		</div>
		<div  id="display175454" style="text-align: right;height: 50px;">
		<span>Rate This image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<?php echo $this->ratings->bar($image['0']->id,5); ?>

		</div>
		<?$flash_mesg=$this->session->flashdata('gallery');
		if($flash_mesg!=''){ ?>
		<div style="color: black;background-color: yellow;"><?=$this->session->flashdata('gallery')?></div>
		<?php }?>
		<div style="margin: 10px 0px 10px 0px">
		<?=form_open('index.php/subhodaya/sendmail','name="telugu_send"') ?>
					<input type="hidden" name="url" value="<?=current_url()?>">
						<span style="color: red;font-weight: bold;"><?=$this->session->flashdata('yourname')?></span>
						<table align="center" width="500px" style="border: 1px solid #939393;">
							<tr>
								<td colspan='3' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td style="color: red">*</td>
								<td width="25%" align="left" style="padding-left: 10px;"><?=$more['27']->matter?></td>
								<td align="left" width="75%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td style="color: red">*</td>
								<td align="left" width="25%" style="padding-left: 10px;"><?=$more['38']->matter?></td>
								<td align="left" width="75%"><input type="text" name="uemail" size="30"></td>
							</tr>
							<tr>
								<td style="color: red">*</td>
								<td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td>
								<td align="left"><input type="text" name="fname" size="30"><?=form_hidden('type','Gallery')?></td>
							</tr>
							<tr>
								<td style="color: red">*</td>
								<td align="left" style="padding-left: 10px;"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr>
								<td colspan="3" align="left" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				            <tr>
				            <td style="color: red;" valign="top">*</td>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description" id="transl2"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
							</table>
						</form>
		</div>
	</td>
</tr>
<tr>
	<td valign="bottom" width="2px"><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td id="gal_center-botom"  align="left" valign="bottom">
	<div style="text-align: left;float: left;width: 50%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Previous</a>
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;margin-bottom: 6px;">
						<? if(isset($links)):?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Next</a>						
					<?}endif; ?>
     		</div>
	</td>
	<td valign="bottom" width="2px;"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
</table>