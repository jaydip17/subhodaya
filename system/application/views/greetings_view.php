	<div style="width:100%; height:780px; float:left">
					<div style="width:144px; height:350px; float:left; border:0px solid #979797;">
					<div id="greet_menu" >
		<ul style="list-style: none;padding: 0px;margin: 0px;">
		    <li id="categori"></li>
		    <?php foreach ($type as $cat):?>
			<li><a href="<?=base_url()?>greetings/content/<?=$cat->id?>"><?=$cat->gree_cat?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
					</div>
					  <div   style="float:right; ">
					   <div   ><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="268" /></div>
				      </div>
					    <div style="width:560px; float:left; margin-left:5px;border:1px solid #cee2ec;">
						      <div style="width:560px; height:28px;" id="bgsonelis">
					          <div id="bgslis"><div id="greet_font" style="float: left;width: 50%;"><?=$greet_cat['0']->gree_cat?></div><div id="paginate_div"><?=$pagination?></div></div>
							  </div>
	
						      <div id="gree_div">
									<table align="center">
										<tr>
										<?php $count=1;
										foreach ($greetings as $row):?>
										<td align="center">
											<div id="gree_img_div"><a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="118" height="93"/></a>
												<div id="gree_bottom">
													<div style="text-align: center;color:#4F00EF ">Views:<?=$row->views?></div>
													<div style="text-align: center;">
													<a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/image/gre_mail.jpg" align="top"/><span>quick Send</span></a></div>
												</div>
											</div>
										</td>
										<?php 
										if($count==4){
											$count=0;
											echo '</tr><tr>';
										}
											$count++;
										endforeach;
										?>
										</tr>
									</table>
                         		</div>
                         		<div style="width:560px; height:28px;" id="bgsonelis">
					          <div id="bgslis"><div id="greet_font" style="float: left;width: 50%;"><?=$greet_cat['0']->gree_cat?></div><div id="paginate_div"><?=$pagination?></div></div>
							  </div>
			          </div>
			           
	</div>