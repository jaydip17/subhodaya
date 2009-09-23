<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: subhodaya ::</title>
<link REL="SHORTCUT ICON" HREF="<?=base_url();?>assets/favicon.ico">
<!-- main style sheet -->
<link href="<?=base_url();?>assets/style.css" rel="stylesheet" type="text/css" />
<!-- for tabs js ans css -->
<script src="<?=base_url();?>assets/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/js/yahoo-dom-event.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/element-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/tabview-min.js"></script>
<link href="<?=base_url();?>assets/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/tabview.css" rel="stylesheet" type="text/css" />
<!-- thick box -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>

<script type="text/javascript">
var tb_pathToImage = "<?=base_url()?>assets/imgs/loadingAnimation.gif";
</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/thickbox-compressed.js"></script>
<link rel="stylesheet" href="<?=base_url()?>assets/thickbox.css" type="text/css" media="screen" />
<!-- start tabs -->
<script src="<?=base_url();?>assets/SpryAssets/SpryTabbedPanels.js" type="text/javascript" />
<link href="<?=base_url();?>assets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<!-- end tabs -->
<script src="<?=base_url();?>assets/js/SpryDOMUtils.js"></script>
<script src="<?=base_url();?>assets/js/tp_unobtrusive.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pollLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/newsLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/mmenu.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/feedback_validation.js">
</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/validate_sendmail.js">
</script>

<body onload="<? if(isset($onload)) echo $onload; ?>">

<table width="999"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="985"  align="center" valign="top"><table width="988" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="936" valign="top" class="topline"></td>
      </tr>
</table>
      <table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0" >
	  
        <tr>
          <td  height="0px" style="padding-bottom: 0px;">
          <div id="tabs"  style="padding-top:0px;">
          <img src="<?=base_url();?>assets/imgs/logo.jpg" style="padding: 0px 1px 0px 1px;float: left;width: 235px;"></img>
			  <ul style="padding-top: 35px;">
			
			<? $current_url = current_url();
			   
			?>
			    <li></li>

			    <li ><a href="<?=base_url();?>"><span><?=$more['2']->matter?></span></a></li>
			    <li <?if (eregi('news', $current_url)) {echo "id='current'";} ?> ><a href="<?=base_url();?>news/"><span><?=$more['3']->matter?></span></a></li>
			    <li <?if (eregi('cinema', $current_url)) {echo "id='current'";} ?> ><a href="<?=base_url();?>cinema/"><span><?=$more['4']->matter?></span></a></li>
			    <li <?if (eregi('video', $current_url)) {echo "id='current'";} ?>><a href="<?=base_url();?>video/"><span><?=$more['5']->matter?></span></a></li>
			    <li <?if (eregi('gallery', $current_url)) {echo "id='current'";} ?>><a href="<?=base_url();?>gallery/"><span><?=$more['6']->matter?></span></a></li>
			    <li <?if (eregi('greetings', $current_url)) {echo "id='current'";} ?>><a href="<?=base_url();?>greetings/"><span><?=$more['7']->matter?></span></a></li>
			    <li <?if (eregi('mahila', $current_url)) {echo "id='current'";} ?>><a href="<?=base_url();?>mahila/"><span><?=$more['8']->matter?></span></a></li>
			    <li <?if (eregi('sahithi', $current_url)) {echo "id='current'";} ?>><a href="<?=base_url();?>sahithi/"><span><?=$more['9']->matter?></span></a></li>

			  </ul>
			</div>
          </td>
        </tr>
          <tr>
          <td id="scrollingnews" style="border-left: 2px solid #0A70BB;border-right: 2px solid #0A70BB;">
        
           <script language="JavaScript1.2">

//Specify the marquee's width (in pixels)
var marqueewidth = "947px"
//Specify the marquee's height
var marqueeheight="25px"
//Specify the marquee's marquee speed (larger is faster 1-10)
var marqueespeed=2
//configure background color:
var marqueebgcolor="#FFFFFF"
//Pause marquee onMousever (0=no. 1=yes)?
var pauseit=1

//Specify the marquee's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var marqueecontent='<nobr><span style="font: bold 14px Verdana">';
	marqueecontent+="<?php foreach ($activenews as $news){?>**<a href='<?=base_url();?>news/newsdetails/<?=$news->id?>'><?php echo $news->heading;?></a><?} ?>";
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
</td>
        </tr>
     <tr><td width="100%"  align="left" style="border: 2px solid #0A70BB;border-top: 0px solid #0A70BB;padding:0px 0px 25px 5px">
{yield}
  
    <div id="footer">

    <a href="<?=base_url();?>"><?=$more['2']->matter?></a>|
    <a href="<?=base_url();?>news/"><?=$more['3']->matter?></a>|
     <a href="<?=base_url();?>cinema/"><?=$more['4']->matter?></a>|
      <a href="<?=base_url();?>video/"><?=$more['5']->matter?></a>|
      <a href="<?=base_url();?>gallery/"><?=$more['6']->matter?></a>|
      <a href="<?=base_url();?>greetings/"><?=$more['7']->matter?></a>|
      <a href="<?=base_url();?>mahila/"><?=$more['8']->matter?></a>|
      <a href="<?=base_url();?>sahithi/"><?=$more['9']->matter?></a>|
      <a href="<?=base_url()."contact"?>?&height=350&width=550" class="thickbox" title="Please Contact Us"><?=$more['40']->matter?></a>|
      <a href="<?=base_url()."contact/feedback"?>?&height=350&width=550" class="thickbox" title="Your Feedback"><?=$more['41']->matter?></a>|
      <a href="<?=base_url()."contact/advertise"?>?&height=350&width=550" class="thickbox" title="For your add location"><?=$more['42']->matter?></a>
    </div>
   
 </td>
 </tr>
</table>
</table>
</body>
</html>
				