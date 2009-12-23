<div  style="background-color:#fff; float:right; width:100%;">
					<div id="left_content" style="width:165px;margin-left:4px; float:left">
						<?= (isset($special_block)) ? $special_block : '' ?>
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
						<?= (isset($reviews_block)) ? $reviews_block : '' ?>
						<?= (isset($songs_block)) ? $songs_block: '' ?>
					</div>
					<div id="middle_content" style="width:479px;margin-left:3px; float:left">
						<?= (isset($middle_block)) ? $middle_block : '' ?>
						<div id="container-1" align="left">
            				<ul>
				                <li><a href="<?=base_url()?>tabs/rastriya"><span><?= (isset($news_rasriyam)) ? $news_rasriyam : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/jathiyam"><span><?= (isset($news_jathiyam)) ? $news_jathiyam : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/antharja"><span><?= (isset($news_antharja)) ? $news_antharja : '' ?></span></a></li>
								<li><a href="<?=base_url()?>tabs/kridalu"><span><?= (isset($news_kridalu)) ? $news_kridalu : '' ?></span></a></li>
            				</ul>
        				</div>
						<div id="container-2" align="left">
				            <ul>
				                <li><a href="<?=base_url()?>tabs/cini_pukarlu"><span><?= (isset($cini_pukarlu)) ? $cini_pukarlu : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/cini_varthalu"><span><?= (isset($cini_vishesm)) ? $cini_vishesm : '' ?></span></a></li>
				            </ul>
				            
				        </div>
						<div id="container-3" align="left">
				            <ul>
				                <li><a href="<?=base_url()?>tabs/photo_gallery"><span><?= (isset($photo_gallery)) ? $photo_gallery : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/video_home"><span><?= (isset($videos)) ? $videos : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/greetings_home"><span><?= (isset($greetings)) ? $greetings : '' ?></span></a></li>
				            </ul>
				        </div>
						<div id="container-4" align="left">
				           <ul>
				                <li><a href="<?=base_url()?>tabs"><span><?= (isset($mahila)) ? $mahila : '' ?></span></a></li>
				                <li><a href="<?=base_url()?>tabs/sahithi"><span><?= (isset($sahithi)) ? $sahithi : '' ?></span></a></li>
				          </ul>
				        </div>	
					</div>
					<div id="right_content" style="width:302px;margin-left:2px; float:left">
						<div id="right_ad1">
							<img src="<?=base_url()?>assets/home_images/ads/right_ad.jpg">
						</div>
						<?= (isset($ardikam_block)) ? $ardikam_block : '' ?>
						<div id="right_ad1">
							<img src="<?=base_url()?>assets/home_images/ads/right_ad2.jpg">
						</div>
						<?= (isset($Bhavisham_block)) ? $Bhavisham_block : '' ?>
						<?= (isset($srugaram_block)) ? $srugaram_block : '' ?>
					</div>
				</div>