<div id="news_content">
						<div id="main_news"><span id="main_news_font">Today Main News</span></div>
						<?= (isset($main_news)) ? $main_news : '' ?>

					</div>
					<div id="hr_div"><hr id="hrline"></hr></div>
					<div id="newsmain" style="height:270px;">
						<div id="thaja_vartha" style="width:430px;">
							<div><span>thajavartha</span></div>
							<a href="#"><img src="<?=base_url()?>assets/home_images/news/prime.jpg"/></a>
							<span id="headings"><a href="#">pradani ekkadnunchina gelavagalaru</a></span><br/>
                            <span id="summery">Dr. Manmohan Singh lighting the lamp to inaugurate the National Education Day Celebrations, in New Delhi on November 11, 2009. Dr. Manmohan Singh lighting the lamp to inaugurate the National Education Day Celebrations, in New Delhi on November 11, 2009</span>
                            
						</div>
						<div style="float: left;">
					<?= (isset($setier)) ? $setier : '' ?>
					</div>
                        <div id="side_add" style="width:262px;"><img src="<?=base_url()?>assets/home_images/ads/right_ad.jpg" style="width:250px;"/></div>
					</div>
					 <div id="hr_div"><hr id="hrline"></hr></div>
					 <div id="newsmain" style="height:270px;">
						<div id="thaja_vartha" style="width:365px;">
							<?= (isset($rasriyam)) ? $rasriyam: '' ?>
						<div id="thaja_vartha" style="width:335px;">
						<?= (isset($jathiyam)) ? $jathiyam : '' ?>
						
                   		<?= (isset($ardikam)) ? $ardikam : '' ?>
					</div>
					<div id="hr_div"><hr id="hrline"></hr></div>
					<div id="newsmain" style="height:270px;">
						<div id="thaja_vartha" style="width:365px;">
							<?= (isset($anthar)) ? $anthar : '' ?>
						<div id="thaja_vartha" style="width:335px;">
						<?= (isset($state)) ? $state : '' ?>
                       <?= (isset($setier)) ? $setier : '' ?>
					</div>
					<div id="hr_div"><hr id="hrline"></hr></div>
					<div id="rastiya">
						<div id="gallery" style="padding-left:10px;">
							<span>gallery</span>
							<?= (isset($photo_gallery)) ? $photo_gallery : '' ?>
							<div style="float:right;"><!--<img src="<?=base_url()?>assets/image/line.gif" height="165px;"/>--></div>
							</div>
						<div id="gallery" style="padding-left:10px;">
							<span>videos</span>
							<?= (isset($videos)) ? $videos : '' ?>
						</div>
						</div>
					</div>