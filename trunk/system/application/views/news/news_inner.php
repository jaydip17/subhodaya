<script type="text/javascript">
function toggle(el)
{
	alert('hi');
myEl = document.getElementById(el);
myEl.style.display = (myEl.style.display == 'block') ? 'none' : 'block';
}
function toggle1(el,ee)
{
	myE2 = document.getElementById(ee);
	myE2.style.display='none';
	myEl = document.getElementById(el);
	myEl.style.display = (myEl.style.display == 'block') ? 'none' : 'block';
}
</script>
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
<div style="width: 100%">
	<div style="float: left;width: 645px;text-align: left;margin-left: 6px;">
		<div style="height: 40px;font-size: 23px;font-weight: normal;"><?=$cat_name?></div>
		<div style="height: 60px;border-top: 1px solid #cee2ed;border-bottom: 1px solid #cee2ed;">
			<div style="padding-top: 2px;float: left;">
			<div style="height: 30px;padding-top: 4px;"><font id="headings" style="font-size: 18px;font-weight: bold;"><?=(isset($details[0]->heading)) ? $details[0]->heading : ''?></font></div>
				<div style="float: left;width: 56px;margin-left: 15px;"><a href="<?=base_url()?>contact/email_send" class="contact" title="Send Email" id="tweet_id"><img src="<?=base_url()?>assets/image/email.jpg" style="float: left;border: 0px;">Email</a></div>
				<div style="float: left;width: 67px;"><a href="http://twitter.com/login" id="tweet_id"><img src="<?=base_url()?>assets/image/tweet.jpg" style="float: left;border: 0px;">twitter</a></div>
				<div style="float: left;"><img src="<?=base_url()?>assets/image/face_bk.jpg" style="float: left;">Facebook</div>
			</div>
			<?php if(isset($rating)){
				if($rating==1){
			?>
			<div  id="display175454" style="text-align: right;height: 50px;float: right;">
		<span>User Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
			<?php echo $this->ratings->bar($details[0]->id,5); ?>

		</div>
		<?php }}?>
		</div>
		<div style="width: 645px;padding-top: 7px;" >
			<img src="<?=$link?>news_img<?=$details[0]->id?>.jpg" style="float: left;margin: 2px 5px 2px 1px;" id="img">
			<font id="summery" style="font-size: 14px;line-height: 24px;"><?=(isset($details[0]->description)) ? $details[0]->description : ''?></font>
		</div>
		<div style="float: left;width: 183px;">
			<img src="<?=base_url()?>assets/home_images/ads/inner_ad.jpg">
		</div>
		<div style="float: right;width:460px; ">
			<div style="height: 24px;border-top: 1px solid #cee2ed;border-bottom: 1px solid #cee2ed;margin-top: 5px;">
			        <div style="padding-left: 20px;color: #375B71">
			        	<a href="">Comment</a>&nbsp;&nbsp;&nbsp;|&nbsp;
			        	<a href="">Email</a>&nbsp;&nbsp;&nbsp;  |&nbsp;
			        	<a href="http://twitter.com/login">Tweet it</a>&nbsp;&nbsp;&nbsp;  |&nbsp;
			        	<a href="">Share in Facebook</a> 
			        </div> 
			</div>
			<div style="height: 24px;border-top: 1px solid #cee2ed;border-bottom: 1px solid #cee2ed;margin-top: 5px;font-size: 16px;color: maroon;">
			<?=$this->lang->line('sambanditha');?>
			</div>
			<div style="height: 140px;">
			<?php $count=0; foreach ($realtion as $row):
			 if($count==1){$count++;continue;}
			?>
				<div style="float: left;width:151px;padding-top: 4px;text-align: center;margin: 1px 0px 2px 1px;">
					<img src="<?=base_url()?>assets/news/news_img<?=$row->id?>_thumb.jpg" id="img"/><br>
					<a href=""><?=$row->heading?></a>
				</div>	
			<? if($count==3){break;}else{$count++;}endforeach; if($count==0){echo 'No data found';}?>
			</div>
			<div style="height: 24px;background-color: #6A90A5;color: #FFF;font-size: 15px;">User Comments</div>
			<div style="height: 26px;">
				<div style="float: left;padding-left: 10px;">
					<a href="javascript:void(0)" onclick="return toggle('b');">Post your Comment</a>
				</div>
				<div style="float: right;"><a href="javascript:void(0)" onclick="return toggle('b');">[View All Comments(0)]</a></div>
			</div>
			<div style="border: 1px solid gray;margin-top: 5px;display: none;" id='a'>
						<?php if(!empty($comments)){
							foreach ($comments as $comment){?>
							<div style="border: 0px solid #B4DCE6;margin: 5px;background-color:#F9F8F3 ">
								<table cellspacing="7" width="100%">
								<tr><td width="50%" align="left" style="font-weight: bold;"><?=$comment->name?></td><td align="right"><?=$comment->insert_date?></td></tr>
								<tr><td colspan="2" align="left"><?=$comment->comment?></td></tr>
								</table>
							</div>
							<?php }
						}else{
							echo 'No Comments for this artical';
						}
						?>
						
			</div>
			<div style="height: 153px;border: 1px solid #6A90A5;">
				<form>
				<table width="90%" cellpadding="5">
					<tr><td align="left" width="20%">name</td><td><input type="text" name="name"/></td></tr>
					<tr><td align="left">name</td><td><textarea style="width: 220px;height: 65px"></textarea></td></tr>
					<tr><td colspan="2" align="right"><input type="submit" name="submit" value="Submit"/><input type="reset" name="reset" value="Reset"/></td></tr>
				</table>
				</form>
			</div>
		</div>
	</div>
	<div style="float: right;width: 302px;">
		<div style="height: 270px;text-align: center;"><img src="<?=base_url()?>assets/home_images/ads/simply_marry.jpg"/></div>
		<div style="text-align: left;margin-right: 40px;"><div id="content_left" ><?=$this->lang->line('evikuda_read')?></div></div>
		<div style="text-align: left;">
		<ul style="padding-top: 35px;">
		<?php foreach ($morenews as $row):?>
			<li><a href=""><?=$row->heading?></a></li>
			<?php endforeach;?>
		</ul>
		</div>
		<div ><img src="<?=base_url()?>assets/home_images/ads/inner_ad1.jpg"/></div>
	</div>
</div>