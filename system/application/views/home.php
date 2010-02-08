<script language="JavaScript" type="text/javascript">
<!--
var siteurl = "<?=base_url()?>";
function newsletter()
{
	 var x=document.getElementById("email").value;
	 if(x=="")
	 {
		 alert('Enter Your Email-id');

	 }else{
		$.post(""+siteurl+"newsletter/subscribe/"+x+"",
				function(data){
			//alert(data);
			$(".succdiv").replaceWith(data);
			$(".succdiv").slideDown("slow");
	      });
	 } 
}

-->
</script> 
<script type="text/javascript" src="<?=base_url()?>assets/java-script/subtabs.js"></script>
	<link href="<?=base_url()?>assets/java-script/example.css" rel="stylehett" type="text/css"/>
	<style type='text/css'>	
	</style>
<div  style="background-color:#fff; float:left; width:100%;">
					<div id="left_content" style="width:165px;margin-left:4px; float:left">
						<?= (isset($special_block)) ? $special_block : '' ?>
						<?= (isset($home_poll)) ? $home_poll : '' ?>
						<div id="news_letter">
							<div  class="newsletter">
								<div id="ne_formdiv"  >
									<div id="movie" style="width:100%; height:25px; padding-top:4px;font-size: 11px;" >
										Subhodaya Newsletter
									</div>
									<div id="movie" style="width:100%" >
										<input type="text" name="news_email" id="email" value="Enter Your Email-id" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter Your Email-id':this.value;" style="color: gray;">
									</div>
									<div class="succdiv" style="width: 100%;"></div>
								<div style="width: 100%;"><a href="javascript:void(0)" onclick="newsletter()" style="outline-style: none;"><img style="margin:10px 0px 5px 0px;border: 0px;" src="<?=base_url()?>assets/image/submit.jpg"></a></div>
								</div>
								
								
							</div>
						</div>
						<?= (isset($reviews_block)) ? $reviews_block : '' ?>
						<?= (isset($songs_block)) ? $songs_block: '' ?>
					</div>
					
					<div id="middle_content" style="width:479px;margin-left:3px; float:left">
						<?= (isset($middle_block)) ? $middle_block : '' ?>
						<div id="tabber" class="tabber">

							<div class="tabbertab" title="<?=$this->lang->line('news_rasriyam')?>" style="text-align: left;">
								<?= (isset($rasriyam_block)) ? $rasriyam_block : '' ?>
							</div>
							
							<div class="tabbertab" title="<?=$this->lang->line('news_jathiyam')?>" style="text-align: left;">
								<?= (isset($jathiyam_block)) ? $jathiyam_block : '' ?>
							</div>
							
							<div class="tabbertab" title="<?=$this->lang->line('news_antharja')?>" style="text-align: left;">
							<?= (isset($antharja_block)) ? $antharja_block : '' ?>
							</div>
							<div class="tabbertab" title="<?=$this->lang->line('news_kridalu')?>" style="text-align: left;">
							<?= (isset($kridalu_block)) ? $kridalu_block : '' ?>
							</div>
						</div>
						<div id="tabber" class="tabber">
							<div class="tabbertab" title="<?=$this->lang->line('cini_pukarlu')?>" style="text-align: left;">
								<?= (isset($pukarlu_block)) ? $pukarlu_block : '' ?>
							</div>
							<div class="tabbertab" title="<?=$this->lang->line('cini_vishesm')?>" style="text-align: left;">
								<?= (isset($vishesm_block)) ? $vishesm_block : '' ?>
							</div>
						</div>	
						<div id="tabber" class="tabber">

							<div class="tabbertab" title="<?=$this->lang->line('photo_gallery')?>" style="text-align: left;">
								<?= (isset($gallery_block)) ? $gallery_block : '' ?>
							</div>
							
							<div class="tabbertab" title="<?=$this->lang->line('videos')?>" style="text-align: left;">
								<?= (isset($videos_block)) ? $videos_block : '' ?>
							</div>
							<div class="tabbertab" title="<?=$this->lang->line('greetings')?>" style="text-align: left;">
							<?= (isset($greetings_block)) ? $greetings_block : '' ?>
							</div>
						</div>
						<div id="tabber" class="tabber">
							<div class="tabbertab" title="<?=$this->lang->line('mahila')?>" style="text-align: left;">
								<?= (isset($mahila_block)) ? $mahila_block : '' ?>
							</div>
							<div class="tabbertab" title="<?=$this->lang->line('sahithi')?>" style="text-align: left;">
								<?= (isset($sahithi_block)) ? $sahithi_block : '' ?>
							</div>
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