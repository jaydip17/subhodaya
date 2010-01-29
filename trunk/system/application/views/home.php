<script language="JavaScript" type="text/javascript">
<!--

function support()
{
	alert('hi');
	 var x=document.getElementById("email").value;

	 if(x=="")
	 {
		 alert('Enter Your Email-id');
	 }else{
		 alert('hi');
	 } 
}
-->
</script> 
<style type='text/css'>
#demo { width:350px; }
#demo .yui-content { padding:20px; } /* pad content container */
#demo img { margin-right:20px; }
#tabone, #tabtwo, #tabthree { height:80px; }
</style>

<div  style="background-color:#fff; float:left; width:100%;">
					<div id="left_content" style="width:165px;margin-left:4px; float:left">
						<?= (isset($special_block)) ? $special_block : '' ?>
						<?= (isset($home_poll)) ? $home_poll : '' ?>
						<div id="news_letter">
							<div  class="newsletter">
								<div id="ne_formdiv">
									<div id="movie" style="width:100%; height:25px; padding-top:4px" >
										Subhodaya Newsletter
									</div>
									<div id="movie" style="width:100%" >
										<input type="text" name="news_email" id="email">
									</div>
									<img style="margin:10px 0px 5px 0px; " src="<?=base_url()?>assets/image/submit.jpg " onclick="support()">
								</div>
								<div id="succdiv" style="display: none;">
									Thankyou for subscribing with us.
								</div>
							</div>
						</div>
						<?= (isset($reviews_block)) ? $reviews_block : '' ?>
						<?= (isset($songs_block)) ? $songs_block: '' ?>
					</div>
					<div id="middle_content" style="width:479px;margin-left:3px; float:left">
						<?= (isset($middle_block)) ? $middle_block : '' ?>
					<div class="yui-skin-sam">
					<div id='demo' class='yui-navset' style="margin-left:10px;">
						<ul class='yui-nav'>
							<li class='selected style1' id='tabOneLabel'><a href='#tabone'><em>Tab On<span class="style1"></span>e</em></a></li>
							<li id='tabTwoLabel'><a href='#tabtwo'><em>Tab Two</em></a></li>
							<li id='tabThreeLabel'><a href='#tabthree'><em>Tab Three</em></a></li>
						</ul>
						<div class='yui-content'>
							<div id='tabone'>
								<img id='imgOne' src='http://developer.yahoo.com/yui/docs/assets/examples/exampleimages/small/museum.jpg' />
							</div>
							<div id='tabtwo'>
								tab two
							</div>
							<div id='tabthree'>
								tabthree
							</div>
						</div>
					</div>
					</div>
				<script>
				var tabView = new YAHOO.widget.TabView('demo');
				</script>
					
					
							
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