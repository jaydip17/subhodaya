<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(isset($title)){?>
<title><?=$title?></title>	
<?php }else{?>
<title><?=$this->lang->line('home_title')?></title>	
<?php }?>
<?php if(isset($description)){?>
<meta name="Description" content="<?=$description?>" />
<?php }else{?>
<meta name="Description" content="<?=$this->lang->line('home_descrip')?>"/>
<?php }?>
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1"/>	
<meta name=ROBOTS content="INDEX,FOLLOW"/>	
<meta name="copyright" content=" 2009 Subhodaya.com" />	
<meta name="content-language" content="EN" />	
<meta name="author" content="www.subhodaya.com" />	
<meta name="resource-type" content="document" />	
<meta name="distribution" content="GLOBAL" />	
<meta name="robots" content="ALL" />	
<meta name="revisit-after" content="1 day" />	
<meta name="rating" content="general" />	
<meta name="pragma" content="no-cache" />	
<meta name="classification" content="Leaders In Telugu News, AP Politics On The Net " />
<!-- color box js and css -->
	<link href="<?=base_url();?>assets/css/colorbox.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?=base_url()?>assets/java-script/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/java-script/jquery.colorbox.js"></script>
	<script type="text/javascript">
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".feedback").colorbox({width:"550px", height:"350px", iframe:true});
				$(".contact").colorbox({width:"550px", height:"350px", iframe:true});
				$(".advertise").colorbox({width:"550px", height:"350px", iframe:true});
				$(".sendtofriend").colorbox({width:"550px", height:"350px", iframe:true});
				//Example of preserving a JavaScript event for inline calls.
				$("#newsletter-img").colorbox({href:"<?=base_url();?>newsletter/show_subscribe_form",width:"500px", height:"180px",iframe:true});
			    $("#invite-img").colorbox({href:"<?=base_url();?>admin/contacts",width:"550px", height:"450px",iframe:true});
				$("#importcontacts").click(function(){ 
					$("#advertise").colorbox({href:"<?=base_url();?>newsletter/show_subscribe_form"}); 
				});
			});
		</script>
<!-- end color box js and css --> 
<link REL="SHORTCUT ICON" HREF="<?=base_url();?>assets/image/favicon.png">
<!-- for rss feeds -->
<?php if(isset($cinemarss)){?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=base_url()?>feeds/cinema" />
<?php }else{?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=base_url()?>feeds/news" />
	<?php }?>
<!-- main style sheet -->
<?php if(isset($newscss)){?>
	<link href="<?=base_url();?>assets/css/news.css" rel="stylesheet" type="text/css" />
	<?php }?>
<?php if(isset($cinemacss)){?>
	<link href="<?=base_url();?>assets/css/cinema.css" rel="stylesheet" type="text/css" />
	<?php }?>
    <link  href="<?=base_url();?>assets/css/black.css" rel="stylesheet" type="text/css" />
	<link id="theme" href="<?=base_url();?>assets/css/blue.css" rel="stylesheet" type="text/css" /> 
<?php if(isset($gallerycss)){?>
	<link href="<?=base_url();?>assets/css/gallery.css" rel="stylesheet" type="text/css"/>
<?php }?>
<!-- video and greeting page side menu -->
	<link href="<?=base_url()?>assets/css/video.css" rel="stylesheet" type="text/css"/>
	<link href="<?=base_url()?>assets/css/videomenu.css" rel="stylehett" type="text/css"/>
<!-- for tabs js ans css -->
<?php if(isset($tabscss)){?>
	<script type="text/javascript" src="<?=base_url()?>assets/java-script/subtabs.js"></script>
	<link href="<?=base_url()?>assets/java-script/example.css" rel="stylehett" type="text/css"/>
	<?php }?>
<!-- change theme colors js -->
	<script type="text/javascript">
				var csslink ="assets/css";
				var styleurl = '';
				function checkCookie()
				{
					 sthemetype = getCookie('theme');
					// alert(sthemetype);
					 if (sthemetype!=null && sthemetype!="")
					   {
						 changeTheme(sthemetype);
					   }
					 else
					   {
					   }
				}
				function changeTheme(themename)
				{
					 setCookie('theme',themename,365);
					styleurl = csslink+'/'+themename+'.css';
					document.getElementById('theme').href = styleurl;
				}
				function getCookie(c_name)
				{
				if (document.cookie.length>0)
				  {
				  c_start=document.cookie.indexOf(c_name + "=");
				  if (c_start!=-1)
					{
					c_start=c_start + c_name.length+1;
					c_end=document.cookie.indexOf(";",c_start);
					if (c_end==-1) c_end=document.cookie.length;
					return unescape(document.cookie.substring(c_start,c_end));
					}
				  }
				return "";
				}
				function setCookie(c_name,value,expiredays)
				{
				var exdate=new Date();
				exdate.setDate(exdate.getDate()+expiredays);
				document.cookie=c_name+ "=" +escape(value)+
				((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
				}
				checkCookie();
		</script>
<!-- main menu dropdown css and js -->
	<script type="text/javascript" src="<?=base_url()?>assets/java-script/dropdown.js"></script>
	<link herf="<?=base_url()?>assets/css/gre_css.css" rel="stylesheet" type="text/css"/>
		<style type="text/css">
		a.sample_attach, a.sample_attach:visited, div.sample_attach
		{
		  display: block;
		  width:150px;
		  border:  1px solid #FFF;
		  background: #1E637A;
		  text-decoration: none;
		  font-family: Verdana, Sans-Sherif;
		  font-size: 14px;
		  color:   #FFFFFF;
		}
		
		a.sample_attach, a.sample_attach:visited { border-bottom: none; }
		span#sample_attach_menu_child             { border-bottom: 1px solid #FFFFFF; }
		
		form.sample_attach
		{
		  position: absolute;
		  visibility: hidden;
		  border:  1px solid #FFFFFF;
		  padding: 0px 5px 2px 5px;
		  background: #FFFFEE;
		}
		
		form.sample_attach
		{
		  font-family: Verdana, Sans-Sherif;
		  font-size: 14px;
		}
		input.sample_attach { margin: 1px 0px; }
		</style>
		<script src="<?=base_url();?>assets/js/SpryDOMUtils.js"></script>
		<script src="<?=base_url();?>assets/js/tp_unobtrusive.js"></script>
		<script type="text/javascript" src="<?=base_url();?>assets/js/pollLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/newsLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/mmenu.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/feedback_validation.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/validate_sendmail.js"></script>
<!-- for telugu typeing -->
<?php if(isset($telegu_typing)) { ?> 
	<script type="text/javascript" src="<?=base_url()?>assets/js/jsapi.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/telugu.js"></script>
<?php } ?>
<body >
<center>
<div style="width:963px; background-color:#fff;border:0px dotted #000;">
	<div id="header" style="border:0px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%;float: left;">
		<div id="change_lang" style="height:34px">
			<div  style="float:left;margin-top:5px;margin-bottom:5px;font-size: 12px;">Make 
			<font style="color:#05AEF1;font-weight:bold">Subhodaya</font><font style="color:#FE0000; font-weight:bold">.</font><font style="color:#016CB4; font-weight:bold">com!</font>
			 my home page
				<!--<a href="javascript:setasHome()" style="color:#646464; margin-left:5px;font-size:13px">Make Subhodaya.com! my home page</a>
			--></div>
			<div id="language" style="color:#3398FF;margin-top:5px;margin-right:5px;margin-bottom:5px; font-size:13px;float:right">
				<font style="color:#646464;font-size: 12px;">Change Language: </font>
				<a href="http://english.subhodaya.com/" id="ln" target="_blank">English</a>|
				<a href="http://hindi.subhodaya.com/" id="ln" target="_blank"> हिन्दी </a>|
				<a href="" id="ln">தமிழ்</a>|
				<a href="" id="ln">ગુજરાતી </a>|
				<a href="" id="ln"> ਪੰਜਾਬੀ </a>|
				<a href="" id="ln"> తెలుగు </a>|
				<a href="" id="ln">ಕನ್ನಡ</a>|
				<a href="" id="ln">मराठी </a>|
				<a href="" id="ln">Malayalam</a>
			</div>
		</div>
		<div id="logo_add" style="height:80px; margin-left:5px;margin-bottom:5px;">
			<a href="<?=base_url()?>" style="float:left;outline-style: none;">
					<div id="logo" title="Tamil Subhodaya.com"></div>
			</a>
			<a href="#" style="float:right; margin-right:5px;">
				<img src="<?=base_url()?>assets/home_images/ads/header_ad.jpg" border="0">
			</a>
		</div>
		<div id="menu">
        	<ul class="solidblockmenu">
                <li><a href="<?=base_url();?>" class="current" style="width:35px;font-size:12px;outline-style: none;"><?=$this->lang->line('home');?></a></li>
                <li><a href="<?=base_url()?>news" style="width:60px;font-size:12px;outline-style: none;"><?=$this->lang->line('news');?></a></li>
                <li><a href="<?=base_url()?>cinema" style="font-size:12px;outline-style: none;"><?=$this->lang->line('cinema');?></a></li>
                <li><a href="<?=base_url()?>videos" style="font-size:12px;width:46px;outline-style: none;"><?=$this->lang->line('video');?></a></li>
                <li><a href="<?=base_url()?>gallery" style="font-size:12px;width:36px;outline-style: none;"><?=$this->lang->line('gallery');?></a></li>
                <li><a href="<?=base_url()?>greetings" style="width:65px;font-size:12px;outline-style: none;"><?=$this->lang->line('greetings');?></a></li>
            	<li><a href="<?=base_url()?>mahila" style="font-size:12px;outline-style: none;"><?=$this->lang->line('mahila');?></a></li>
                <li><a href="<?=base_url()?>sahithi" style="width:80px;font-size:12px;outline-style: none;"><?=$this->lang->line('sahithi');?></a></li>
                <!-- 
                <li><a href="<?=base_url()?>news/details/8" style="font-size:12px;outline-style: none;"><?=$this->lang->line('news_kridalu');?></a></li>
                 -->
                <li><a href="<?=base_url()?>cinema/details/7" style="font-size:12px;width:83px;outline-style: none;"><?=$this->lang->line('srungaram');?></a></li>
                <li><a href="<?=base_url()?>news/details/8" style="font-size:12px;width:30px;outline-style: none;"><?=$this->lang->line('sangitham');?></a></li>
                <li><a href="<?=base_url()?>astrolagy" style="font-size:12px;width:60px;outline-style: none;"><?=$this->lang->line('bavishyam');?></a></li>
           </ul>
        	<div id="ch_color">
        	<!--<div style="width: 80px;float: left;">
        		<span id="sample_attach_menu_parent" class="sample_attach" style="color: #FFF;"><?=$this->lang->line('more');?> </span>
				<span id="sample_attach_menu_child" style="font-size: 14px;">
				<a class="sample_attach" href="<?=base_url()?>news/details/9"><?=$this->lang->line('subh_spec');?></a>
				<a class="sample_attach" href="<?=base_url()?>sex"><?=$this->lang->line('srungaram');?></a>
				<a class="sample_attach" href="<?=base_url()?>astrolagy"><?=$this->lang->line('bavishyam');?></a>
				<a class="sample_attach" href=""><?=$this->lang->line('sangitham');?></a>
				</span>
				
				<script type="text/javascript">
				at_attach("sample_attach_menu_parent", "sample_attach_menu_child", "hover", "y", "pointer");
				</script>
			</div>
			-->
			<script type="text/javascript">
			<!--
			$(document).ready(function(){
				   $(".change").hover(function () {
					      $(this).addClass("ch");
					    },function (){
						    $(this).removeClass('ch');
					    });					
					});
			-->
			</script>
			<style type="text/css">
			.ch{
			border-color:red;
			cursor:pointer;
			}
			.change{
			border:1px solid #FFFFFF;
			}
			</style>
			<div style="float: right;">
              <font style="color:white;">Themes:</font>
              <span><img title="blue" src="<?=base_url();?>assets/image/2.png"    class="change" onclick="changeTheme('blue');"  /></span>
              <span><img title="yellow" src="<?=base_url();?>assets/image/1.png"   class="change" onclick="changeTheme('yellow');" /></span>
              <span><img title="ornge" src="<?=base_url();?>assets/image/3.png"   class="change" onclick="changeTheme('ornge');" /></span>
              <span><img title="green" src="<?=base_url();?>assets/image/4.png"    class="change" onclick="changeTheme('green');" /></span>
              <span><img title="red" src="<?=base_url();?>assets/image/5.png"     class="change" onclick="changeTheme('red');" /></span>
              <span><img title="black" src="<?=base_url();?>assets/image/6.png"   class="change" onclick="changeTheme('black');" /></span>
            </div>
          	</div>
		</div>
		<div id="sc_div">
		<script language="JavaScript1.2">
		<!--
//Specify the marquee's width (in pixels)
var marqueewidth = "960px";
//Specify the marquee's height
var marqueeheight="25px";
//Specify the marquee's marquee speed (larger is faster 1-10)
var marqueespeed=1;
//configure background color:
var marqueebgcolor="";
//Pause marquee onMousever (0=no. 1=yes)?
var pauseit=1;
//Specify the marquee's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var marqueecontent= "<nobr><span style=\"font: bold 14px Verdana\">";
<?php foreach ($breaking as $news){?>
	marqueecontent += "<a href='<?=base_url();?>news/newsdetails/<?=$news->id?>/<?=$news->type?>'><?php echo strip_tags(trim(nl2br(str_replace('\n','',$news->heading))));?></a> | ";
<? } ?>
	marqueecontent += "</span></nobr>";

////NO NEED TO EDIT BELOW THIS LINE////////////
marqueespeed=(document.all)? marqueespeed : Math.max(1, marqueespeed-1) //slow speed down by 1 for NS
var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+marqueecontent+'</span>')
var actualwidth='';
var cross_marquee, ns_marquee

function populate(){
if (iedom){
cross_marquee=document.getElementById? document.getElementById("iemarquee") : document.all.iemarquee
cross_marquee.style.left=parseInt(marqueewidth)+8+"px"
cross_marquee.innerHTML=marqueecontent
actualwidth=document.all? temp.offsetWidth : document.getElementById("temp").offsetWidth
}
else if (document.layers){
ns_marquee=document.ns_marquee.document.ns_marquee2
ns_marquee.left=parseInt(marqueewidth)+8
ns_marquee.document.write(marqueecontent)
ns_marquee.document.close()
actualwidth=ns_marquee.document.width
}
lefttime=setInterval("scrollmarquee()",20)
}
window.onload=populate

function scrollmarquee(){
if (iedom){
if (parseInt(cross_marquee.style.left)>(actualwidth*(-1)+8))
cross_marquee.style.left=parseInt(cross_marquee.style.left)-copyspeed+"px"
else
cross_marquee.style.left=parseInt(marqueewidth)+8+"px"

}
else if (document.layers){
if (ns_marquee.left>(actualwidth*(-1)+8))
ns_marquee.left-=copyspeed
else
ns_marquee.left=parseInt(marqueewidth)+8
}
}

if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+marqueewidth+';height:'+marqueeheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+marqueewidth+';height:'+marqueeheight+';background-color:'+marqueebgcolor+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">')
write('<div id="iemarquee" style="position:absolute;left:0px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+marqueewidth+' height='+marqueeheight+' name="ns_marquee" bgColor='+marqueebgcolor+'>')
write('<layer name="ns_marquee2" left=0 top=0 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
-->
</script>
</div>
		
<?=(isset($bread_crumb)) ? $bread_crumb : '' ?>
{yield}
<div id="hr1" style="background-color:#fff; float:left; width:100%">
	<div style="width:95%">
		<div id="" style="width:100%; float:left">
			<hr></hr>
		</div>
		<div style="width:100%; float:left">
			<div id="" style="float:left; width:180px;">
				<span style="color:#FF0D16;font-size:14px"><b><?=$this->lang->line('news_partners')?></b></span>
				<div style="color:#0101FF;height:26px;padding-top: 6px;"><?=$this->lang->line('sakshi')?>, <?=$this->lang->line('enadu')?></div>
				<div style="color:#0101FF;height:24px"> <?=$this->lang->line('surya')?>, <?=$this->lang->line('vaartha')?></div>
				<div style="color:#0101FF;height:24px"><?=$this->lang->line('andra_prabha')?>, <?=$this->lang->line('andra_jothi')?></div>
				<div style="color:#0101FF;height:24px"><?=$this->lang->line('andra_bhomi')?></div>
				<div style="color:#0101FF;height:24px"><?=$this->lang->line('praja_sakthi')?></div>
			</div>
			<div id="" style="float:left; width:180px;">
				<span style="color:#008000;font-size:14px"><b><?=$this->lang->line('tv_partners')?></b></span>
				<div style="color:#0101FF; height:26px;padding-top: 6px;">SUN NEWS, JAYA PLUS</div>
				<div style="color:#0101FF; height:26px">Kalaingar NEWS</div>
				<div style="color:#0101FF; height:26px">Podhigai NEWS</div>
				<div style="color:#0101FF; height:26px">MEHA NEWS</div>
				<div style="color:#0101FF; height:26px">RAJ NEWS</div>
			</div>
			<div id="" style="float:left; width:220px">
				<span style="color:#FF00FF; font-size:14px;"><b><?=$this->lang->line('tv_programs')?></b></span>
				<div style="color:#0101FF; line-height:25px;padding-top: 6px;"><?=$this->lang->line('sun_tv')?></u>, <?=$this->lang->line('kal_tv')?></u></div>
				<div style="color:#0101FF;line-height:25px"><?=$this->lang->line('jaya_tv')?>, <?=$this->lang->line('k_tv')?></div>
				<div style="color:#810081; margin:0px 0px 7px 0px;font-size:14px"><b><?=$this->lang->line('tech_partners')?></b></div>
				<div style="margin-top:5px">
					<a href="http://www.tech-pundits.com/" target="_blank" style="outline-style: none;">
						<img src="<?=base_url()?>assets/image/tech_pundits.jpg" border="0">
					</a>
				</div>
				support@tech-pundits.com
			</div>
			<div id="" style="float:left;width:140px;">	
				<div style="margin-top:10px; margin-bottom:10px">
				<a href="#" style="outline-style: none;"><img src="<?=base_url()?>assets/image/facebook.jpg" border="0"></a>
				</div>
				<div><a href="http://www.telugu.subhodaya.com/feeds/news" target="_blank" style="outline-style: none;"><img src="<?=base_url()?>assets/image/rss.jpg" border="0"></a></div>
			</div>
			<div id="" style="float:left;width:190px;">
				<div><a href="http://twitter.com/login" target="_blank" style="outline-style: none;"><img src="<?=base_url()?>assets/image/twitter.jpg" border="0"></a></div>
			</div>
		</div>
		<div id="" style="width:100%; float:left"><hr></hr></div>
	</div>
</div>
<div id="footer" style="background-color:#fff;float:left; width:100%">
	<div id="hr1" style="color:#359BFF; height:25px">
		<span style="color:#05AEF1;font-weight:bold">Subhodaya</span><span style="color:#FE0000; font-weight:bold">.</span><span style="color:#016CB4; font-weight:bold">com</span><span style="color:#2C5F96;font-weight:bold">! News In:</span>
		<a href="http://english.subhodaya.com/" id="ln" target="_blank" style="outline-style: none;">English </a>|
		<a href="http://hindi.subhodaya.com/" id="ln" target="_blank" style="outline-style: none;"> हिन्दी |   </a>
		 தமிழ் | ગુજરાતી | ਪੰਜਾਬੀ  | తెలుగు  | ಕನ್ನಡ | मराठी  | Malayalam
	</div>
	<div id="hr1" style="color:#359BFF; height:25px">Sitemap | Feedback | Advertise With Us | Contact Us</div>
	<div id="hr1" style="color:#359BFF; height:25px">Copyright &copy; 2009. <span style="color:#05AEF1;font-weight:bold">Subhodaya</span><span style="color:#FE0000;font-weight:bold">.</span><span style="color:#016CB4;font-weight:bold">com</span> All rights reserved.</div>
	<div id="footer_menu" style="color:#fff">
		<div id="footer_left"></div>	
		<div id="footer_right"></div>
		<div style="line-height:30px;">
			<a href="<?=base_url()?>" style="outline-style: none;"><?=$this->lang->line('home')?></a> |
			<a href="<?=base_url()?>news" style="outline-style: none;"><?=$this->lang->line('news')?></a> |
			<a href="<?=base_url()?>cinema" style="outline-style: none;"><?=$this->lang->line('cinema')?></a> |
			<a href="<?=base_url()?>videos" style="outline-style: none;"><?=$this->lang->line('videos')?></a> |
			<a href="<?=base_url()?>gallery" style="outline-style: none;"><?=$this->lang->line('gallery')?></a> |
			<a href="<?=base_url()?>greetings" style="outline-style: none;"><?=$this->lang->line('greetings')?></a> |
			<a href="<?=base_url()?>mahila" style="outline-style: none;"><?=$this->lang->line('mahila')?></a> |
			<a href="<?=base_url()?>sahithi" style="outline-style: none;"><?=$this->lang->line('sahithi')?></a> |
			<a href="<?=base_url()?>contact" class="contact" title="Contact Us" style="outline-style: none;"><?=$this->lang->line('contact')?></a> |
			<a class="feedback" href="<?=base_url()?>contact/feedback" title="Feedback" style="outline-style: none;"><?=$this->lang->line('feed_back')?></a> |
			<a href="<?=base_url()?>contact/advertise" class="advertise" title="Advertise With Us" style="outline-style: none;"><?=$this->lang->line('advertise')?></a>
		</div>
	</div>
</div>
</div>
</div>
</center>  

<!-- script -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7898202-2");
pageTracker._trackPageview();
} catch(err) {}</script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
try {
_uacct = "UA-7898202-2";
urchinTracker();
} catch(err) {}</script>
</body>
</html>