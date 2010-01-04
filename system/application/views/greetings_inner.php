<script>

</script>
<div style="width: 100%;text-align: center;">
	<div style="width:144px; height:350px; float:left;">
		<div id="greet_menu">
			<ul style="list-style: none;padding: 0px;margin: 0px;">
				<li id="categori"></li>
				<?php foreach ($cat as $cat):?>
					<li id="gree_m"><a href="<?=base_url()?>greetings/content/<?=$cat->id?>"><?=$cat->gree_cat?></a></li>
				<?php endforeach;?>
			</ul>
	</div>
	</div>
	<div id="gree_inner">
		<div style="float: left;padding-left: 10px;font-weight: bold;font-size: 14px;">Welcome To Subhodaya Telugu Greetings</div>
		<div style="text-align: right;margin-right: 40px;font-size: 18px;"><A HREF="javascript:history.go(-1)">Back</A></div>
		<div style="text-align: center;">
			<img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($result)){echo $result['0']->id;}?>.jpg" style="border: 1px solid #939393;margin: 7px 0px 7px 0px; padding: 1px;">
		</div>
		<hr>
		<div style="text-align: center;">
		 <b> Personalize your free greeting by filling out the form below!</b>
			<?=form_open('subhodaya/sendmail','name="telugu_send"') ?>
						<span style="color: red;font-weight: bold;"><?=$this->session->flashdata('yourname')?></span>
						<table align="center" width="600px"  cellpadding="0" cellspacing="0" id="gree_td">
							<tr>
							<?=form_hidden('type','Greeting')?></td>
							<input type="hidden" name="url" value="<?=current_url()?>">
								<td align="left" width="30%" ><?=$more['27']->matter?></td>
								<td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left" width="30%"><?=$more['38']->matter?></td>
								<td align="left" width="70%"><input type="text" name="uemail" size="30"></td>
							</tr>
							<tr>
								<td align="left" width="30%"><?=$more['39']->matter?></td>
								<td align="left" width="70%"><input type="text" name="fname" size="30"><?=form_hidden('type','Greeting')?></td>
							</tr>
							<tr>
								<td align="left"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr>
								<td align="left" valign="top">Your Message<br><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" name="telugu_type">Type in telugu</td>
								<td align="left"><textarea style="height: 100px;width:60%" name="description" id="transl2"></textarea></td>
							</tr>
							<tr>
								<td align="left"><input type="submit" name="send" value="Send"></td>
								<td align="left"><input type="reset" ></td>
							</tr>
						</table>
						</form>
		</div>
	</div>
	<div style="float: right;width: 150px;text-align: center;">
		<img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="150" height="194" />
		<img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="150" height="487" />
		<img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="150" height="268" />
	</div>
</div>







<!--<table align="left" cellspacing='6' cellpadding="0" >
	<tr>
		<td >
			<table width="685px" align="left" style="border: 1px solid #137ABC;">
				<tr>
					<td align="left" width="685px" valign="top">
							<img src="<?=base_url();?>assets/greetings/gree_img<?php if(isset($result)){echo $result['0']->id;}?>.jpg" style="border: 1px solid #939393;margin: 7px 0px 7px 0px; padding: 1px;">
					</td>
				</tr>
				<tr>
				</tr>
				<?php $flash_mesg=$this->session->flashdata('greetings');
				if($flash_mesg!=''){
				?>
				<tr><td align="center"><div style="color: black;background-color: yellow;"><?=$this->session->flashdata('greetings')?></div></td></tr>
				<?php }?>
				<tr>
					<td valign="top" align="center">
					<?=form_open('index.php/subhodaya/sendmail','name="telugu_send"') ?>
						<span style="color: red;font-weight: bold;"><?=$this->session->flashdata('yourname')?></span>
						<table align="center" width="550px" border="0" style="border: 1px solid #939393;">
							<tr>
								<td colspan='3' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
							<?=form_hidden('type','Greeting')?></td>
							<input type="hidden" name="url" value="<?=current_url()?>">
								<td style="color: red;">*</td>
								<td align="left" width="30%" style="padding-left: 10px;"><?=$more['27']->matter?></td>
								<td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td style="color: red;">*</td>
								<td align="left" width="30%" style="padding-left: 10px;"><?=$more['38']->matter?></td>
								<td align="left" width="70%"><input type="text" name="uemail" size="30"></td>
							</tr>
							<tr>
								<td style="color: red;">*</td>
								<td align="left" width="30%" style="padding-left: 10px;"><?=$more['39']->matter?></td>
								<td align="left" width="70%"><input type="text" name="fname" size="30"><?=form_hidden('type','Greeting')?></td>
							</tr>
							<tr>
								<td style="color: red;">*</td>
								<td align="left" style="padding-left: 10px;"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr><td align="left" colspan="2" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" name="telugu_type">Type in telugu</td></tr>
							<tr>
							<td style="color: red;" valign="top">*</td>
							<td align="center" colspan="3"><textarea style="height: 190px;width: 95%" name="description" id="transl2"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="3"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
						</table>
						</form>
					</td>
				</tr>
				
			</table>
		</div>
		</td>
		<td rowspan="2">
		<div   style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
			<div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
			<div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="268" /></div>
		 </div>
		</td>
	</tr>
</table>-->