<div  style="background-color:#fff; float:right; width:100%;">
					<div id="left_content" style="width:165px;margin-left:4px; float:left">
						<?= (isset($left_block)) ? $left_block : '' ?>
						<?= (isset($home_poll)) ? $home_poll : '' ?>
						<div id="news_letter">
							<div  class="newsletter">
								<div id="movie" style="width:100%; height:25px; padding-top:4px" >
									Subhodaya Newsletter
								</div>
								<div id="movie" style="width:100%" >
									<input type="text" name="news_email">
								</div>
								<img style="margin:10px 0px 5px 0px; " src="<?=base_url()?>assets/image/submit.jpg">
							</div>
						</div>
						<?= (isset($left_block)) ? $left_block : '' ?>
						<?= (isset($left_block)) ? $left_block : '' ?>
					</div>
					<div id="middle_content" style="width:479px;margin-left:3px; float:left">
						<?= (isset($middle_block)) ? $middle_block : '' ?>
						<div id="container-1" align="left">
            				<ul>
				                <li><a href="<?=base_url()?>tabs"><span>Rashtreeyam</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Jatheeyam</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Antharjatheeyam</span></a></li>
								<li><a href="<?=base_url()?>tabs"><span>Sports</span></a></li>
            				</ul>
        				</div>
						<div id="container-2" align="left">
				            <ul>
				                <li><a href="<?=base_url()?>tabs"><span>Cine Visheshalu</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Cine Pukarlu</span></a></li>
				            </ul>
				            
				        </div>
						<div id="container-3" align="left">
				            <ul>
				                <li><a href="<?=base_url()?>tabs"><span>Photo Gallery</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Videos</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Greetings</span></a></li>
				            </ul>
				        </div>
						<div id="container-4" align="left">
				           <ul>
				                <li><a href="<?=base_url()?>tabs"><span>Mahila</span></a></li>
				                <li><a href="<?=base_url()?>tabs"><span>Sahithi</span></a></li>
				          </ul>
				        </div>	
					</div>
					<div id="right_content" style="width:302px;margin-left:2px; float:left">
						<div id="right_ad1">
							<img src="<?=base_url()?>assets/home_images/ads/right_ad.jpg">
						</div>
						<?= (isset($right_block)) ? $right_block : '' ?>
						<div id="right_ad1">
							<img src="<?=base_url()?>assets/home_images/ads/right_ad2.jpg">
						</div>
						<?= (isset($right_block)) ? $right_block : '' ?>
						<?= (isset($right_block)) ? $right_block : '' ?>
						
					</div>
				</div>