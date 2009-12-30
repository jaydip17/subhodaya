<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Subhodaya.com | Leaders In Telugu News | AP Politics On The Net|<?php if(isset($engheading)){echo $engheading;}?></title>	
<meta http-equiv=Content-Type content="text/html; charset=iso-8859-1">	
<meta name=ROBOTS content="INDEX,FOLLOW">	
<meta name="Description" content="Subhodaya.com, Leaders In Telugu News, AP Politics On The Net" />	
<meta name="Keywords" content="subhodaya.com, leaders in telugu news, Latest Telugu News, Telugu News Website, Telugu Cinema News, Telugu Cinema Website, Telugu Mahila, Telugu Cinema Gallery, Telugu News On The Net,  Telugu Movie Trailers, Telugu Sahithi,
The First Google Indic Transliteration Telugu Website Forever, Telugu Greeting Cards" />	
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

<link REL="SHORTCUT ICON" HREF="<?=base_url();?>assets/favicon.ico">
<!-- for rss feeds -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=base_url()?>feeds/news" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?=base_url();?>feeds/news" />
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

<!-- video and greeting page side menu -->
	<link herf="<?=base_url()?>assets/css/video.css" rel="stylesheet" type="text/css"/>
	<link href="<?=base_url()?>assets/css/videomenu.css" rel="stylehett" type="text/css"/>
<!-- for tabs js ans css -->
	<script src="<?=base_url();?>assets/jq.tabs/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/jq.tabs/jquery.history_remote.pack.js" type="text/javascript"></script>
	<script src="<?=base_url();?>assets/jq.tabs/jquery.tabs.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
            $(function() {
                $('#container-1').tabs({ remote: true ,fxShow: { height: 'show', opacity: 'show' }, 		fxSpeed: 'normal' });
                $('#container-2').tabs({ remote: true ,fxShow: { height: 'show', opacity: 'show' }, fxSpeed: 'normal' });
                $('#container-3').tabs({ remote: true ,fxShow: { height: 'show', opacity: 'show' }, fxSpeed: 'normal' });
                $('#container-4').tabs({ remote: true ,fxShow: { height: 'show', opacity: 'show' }, fxSpeed: 'normal' });
			});
	</script>
<!-- change theme colors js -->
	<script type="text/javascript">
				var csslink ="assets/css";
				var styleurl = '';
				function checkCookie()
				{
					 sthemetype = getCookie('theme');
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
		</script>
<!--tabs css js -->
         <style type="text/css" media="screen, projection">

            /* Not required for Tabs, just to make this demo look better... */
            body {
                font-size: 16px; /* @ EOMB */
            }
            * html body {
                font-size: 100%; /* @ IE */
            }
            body * {
                font-size: 87.5%;
                font-family: "Trebuchet MS", Trebuchet, Verdana, Helvetica, Arial, sans-serif;
            }
            body * * {
                font-size: 100%;
            }
            h1 {
                margin: 1em 0 1.5em;
                font-size: 18px;
            }
            h2 {
                margin: 2em 0 1.5em;
                font-size: 16px;
            }
            p {
                margin: 0;
            }
            pre, pre+p, p+p {
                margin: 1em 0 0;
            }
            code {
                font-family: "Courier New", Courier, monospace;
            }
        </style> 
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
<body onload="<? if(isset($onload)) echo $onload; ?>">
<center>
<div style="width:963px; background-color:#fff;border:0px dotted #000">
	<div id="header" style="border:0px solid #ccc; margin-bottom:0px;float:left;background-color:#fff; width:100%">
		<div id="change_lang" style="height:34px">
			<div id="make_myhome" style="float:left;margin-top:5px;margin-bottom:5px;">
				<a href="" style="color:#646464; margin-left:5px;font-size:13px">Make Subhodaya.com! my home page</a>
			</div>
			<div id="language" style="color:#3398FF;margin-top:5px;margin-right:5px;margin-bottom:5px; font-size:13px;float:right">
				<font style="color:#646464">Change Language: </font>
				<a href="http://english.subhodaya.com/" id="ln">English</a>|
				<a href="http://hindi.subhodaya.com/" id="ln">Hindi</a>|
				<a href="" id="ln">Tamil</a>|
				<a href="" id="ln">Telugu</a>|
				<a href="" id="ln">Unknown</a>|
				<a href="" id="ln">Punjabi</a>|
				<a href="" id="ln">Unknown</a>|
				<a href="" id="ln">Kannada</a>|
				<a href="" id="ln">Marati</a>|
				<a href="" id="ln">Malayalam</a>
			</div>
		</div>
		<div id="logo_add" style="height:80px; margin-left:5px;margin-bottom:5px">
			<a href="#" style="float:left">
					<div id="logo"></div>
			</a>
			<a href="#" style="float:right; margin-right:5px;">
				<img src="<?=base_url()?>assets/home_images/ads/header_ad.jpg" border="0">
			</a>
		</div>
		<div id="menu">
        	<ul class="solidblockmenu">
                <li><a href="<?=base_url();?>" class="current"><?=$this->lang->line('home');?></a></li>
                <li><a href="<?=base_url()?>news" ><?=$this->lang->line('news');?></a></li>
                <li><a href="<?=base_url()?>cinema"><?=$this->lang->line('cinema');?></a></li>
                <li><a href="<?=base_url()?>videos"><?=$this->lang->line('video');?></a></li>
                <li><a href="<?=base_url()?>gallery"><?=$this->lang->line('gallery');?></a></li>
                <li><a href="<?=base_url()?>greetings"><?=$this->lang->line('greetings');?></a></li>
            	<li><a href="<?=base_url()?>mahila"><?=$this->lang->line('mahila');?></a></li>
                <li><a href="<?=base_url()?>sahithi"><?=$this->lang->line('sahithi');?></a></li>
                <li><a href="<?=base_url()?>news/details/8"><?=$this->lang->line('news_kridalu');?></a></li>
           </ul>
        	<div id="ch_color">
        	<div style="width: 80px;float: left;">
        		<span id="sample_attach_menu_parent" class="sample_attach" style="color: #FFF;"><?=$this->lang->line('more');?> </span>
				<span id="sample_attach_menu_child" style="font-size: 14px;">
				<a class="sample_attach" href="<?=base_url()?>special_sub"><?=$this->lang->line('subh_spec');?></a>
				<a class="sample_attach" href="<?=base_url()?>sex"><?=$this->lang->line('srungaram');?></a>
				<a class="sample_attach" href="<?=base_url()?>astrolagy"><?=$this->lang->line('bavishyam');?></a>
				<a class="sample_attach" href=""><?=$this->lang->line('sangitham');?></a>
				</span>
				
				<script type="text/javascript">
				at_attach("sample_attach_menu_parent", "sample_attach_menu_child", "hover", "y", "pointer");
				</script>
			</div>
			<div style="float: right;">
              <span style="color:white;">Change color:</span>
              <span><img src="<?=base_url();?>assets/image/1cr.gif"  onclick="changeTheme('blue');" /></span>
              <span><img src="<?=base_url();?>assets/image/2cr.gif"  onclick="changeTheme('yellow');" /></span>
              <span><img src="<?=base_url();?>assets/image/3cr.gif"  onclick="changeTheme('ornge');" /></span>
              <span><img src="<?=base_url();?>assets/image/4cr.gif"  onclick="changeTheme('green');" /></span>
              <span><img src="<?=base_url();?>assets/image/5cr.gif"  onclick="changeTheme('red');" /></span>
              <span><img src="<?=base_url();?>assets/image/6cr.gif"  onclick="changeTheme('black');" /></span>
            </div>
          	</div>
		</div>
		<div style="height:25px;background-color:#FDF7D5;margin-bottom:5px;">
					<script language="JavaScript1.2">
//Specify the marquee's width (in pixels)
var marqueewidth = "930px"
//Specify the marquee's height
var marqueeheight="25px"
//Specify the marquee's marquee speed (larger is faster 1-10)
var marqueespeed=2
//configure background color:
var marqueebgcolor=""
//Pause marquee onMousever (0=no. 1=yes)?
var pauseit=1
//Specify the marquee's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var marqueecontent='<nobr><span style="font: bold 14px Verdana">';
	marqueecontent+="<?php foreach ($activenews as $news){?>**<a href='<?=base_url();?>news/newsdetails/<?=$news->id?>/<?=$news->type?>'><?php echo $news->heading;?></a><?} ?>";
	marqueecontent+="</span></nobr>";

////NO NEED TO EDIT BELOW THIS LINE////////////
marqueespeed=(document.all)? marqueespeed : Math.max(1, marqueespeed-1) //slow speed down by 1 for NS
var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+marqueecontent+'</span>')
var actualwidth=''
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
</script>
					</div>
<?=(isset($bread_crumb)) ? $bread_crumb : '' ?>
{yield}
<div id="hr" style="background-color:#fff; float:left; width:100%">
	<div style="width:95%">
		<div id="" style="width:100%; float:left">
			<hr></hr>
		</div>
		<div style="width:100%; float:left">
			<div id="" style="float:left; width:162px">
				<span style="color:#FF0D16;font-size:16px"><u>News Partnars</u></span>
				<div style="color:#0101FF;height:26px">Sakshi, Eenadu</div>
				<div style="color:#0101FF;height:26px">Andhrajyothy,</div>
				<div style="color:#0101FF;height:26px">Vaartha, Surya</div>
				<div style="color:#0101FF;height:26px">Andhrabhoomi</div>
				<div style="color:#0101FF;height:26px">Prajashakthi</div>
			</div>
			<div id="" style="float:left; width:200px">
				<span style="color:#008000;font-size:16px"><u>TV Partnars</u></span>
				<div style="color:#0101FF; height:26px">Sakshi, TV-9, NTV</div>
				<div style="color:#0101FF; height:26px">TV-5, i-NEWS	</div>
				<div style="color:#0101FF; height:26px">ETV-2, HMTV</div>
				<div style="color:#0101FF; height:26px">STUDIO N, TV-1</div>
				<div style="color:#0101FF; height:26px">Maha TV, Z-24 Gantalu</div>
			</div>
			<div id="" style="float:left; width:220px">
				<span style="color:#FF00FF; font-size:16px"><u>TV Programs</u></span>
				<div style="color:#0101FF; line-height:25px">Sakshi, Gemini, ETV</div>
				<div style="color:#0101FF;line-height:25px">Maa.TV, Z-Telugu</div>
				<div style="color:#810081; margin-top:10px;font-size:16px"><u>Technical Partnars</u></div>
				<div style="margin-top:5px">
					<a href="http://www.tech-pundits.com/">
						<img src="<?=base_url()?>assets/image/tech_pundits.jpg" border="0">
					</a>
				</div>
				supports@tech-pundits.com
			</div>
			<div id="" style="float:left;width:140px;">	
				<div style="margin-top:10px; margin-bottom:10px">
				<a href="#"><img src="<?=base_url()?>assets/image/facebook.jpg" border="0"></a>
				</div>
				<div><a href="#"><img src="<?=base_url()?>assets/image/rss.jpg" border="0"></a></div>
			</div>
			<div id="" style="float:left;width:190px;">
				<div><a href="#"><img src="<?=base_url()?>assets/image/twitter.jpg" border="0"></a></div>
			</div>
		</div>
		<div id="" style="width:100%; float:left"><hr></hr></div>
	</div>
</div>
<div id="footer" style="background-color:#fff;float:left; width:100%">
	<div id="" style="color:#359BFF; height:25px">
		<span style="color:#05AEF1;font-weight:bold">Subhodaya</span><span style="color:#FE0000; font-weight:bold">.</span><span style="color:#016CB4; font-weight:bold">com</span><span style="color:#2C5F96;font-weight:bold">! News In:</span>
		English | Hindi | Tamil | Hujarathi | Punjabi | unknown | Kannada | Marati | Malayalam
	</div>
	<div id="" style="color:#359BFF; height:25px">Sitemap | Feedback | Advertise With Us | Contact Us</div>
	<div id="" style="color:#359BFF; height:25px">Copyright &copy; 2009. <span style="color:#05AEF1;font-weight:bold">Subhodaya</span><span style="color:#FE0000;font-weight:bold">.</span><span style="color:#016CB4;font-weight:bold">com</span> All rights reserved.</div>
	<div id="footer_menu" style="color:#fff">
		<div id="footer_left"></div>	
		<div id="footer_right"></div>
		<div style="line-height:30px;">
			<a href="<?=base_url()?>">Home</a> |
			<a href="<?=base_url()?>news"> Varthalu</a> |
			<a href="<?=base_url()?>cinema">Cinema</a> |
			<a href="<?=base_url()?>videos">Video</a> |
			<a href="<?=base_url()?>gallery">Gallery</a> |
			<a href="<?=base_url()?>greetings">Greetings</a> |
			<a href="<?=base_url()?>mahila">Mahila</a> |
			<a href="<?=base_url()?>sahithi">Sahithi</a> |
			<a href="<?=base_url()?>contact" class="contact" title="Contact Us">Sampradinchu</a> |
			<a class="feedback" href="<?=base_url()?>contact/feedback" title="Feedback">Feedback</a> |
			<a href="<?=base_url()?>contact/advertise" class="advertise" title="Advertise With Us">Advertise</a>
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
				