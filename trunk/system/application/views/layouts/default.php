<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: subhodaya ::</title>
<!-- main style sheet -->
<link href="<?=base_url();?>assets/style.css" rel="stylesheet" type="text/css" />
<!-- for tabs js ans css -->
<script src="<?=base_url();?>assets/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/yahoo-dom-event.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/element-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/tabview-min.js"></script>
<link href="<?=base_url();?>assets/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/tabview.css" rel="stylesheet" type="text/css" />

<!-- tabs -->
<script src="<?=base_url();?>assets/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>

<link href="<?=base_url();?>assets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>assets/js/SpryTabbedPanels.js"></script>
<script src="<?=base_url();?>assets/js/SpryDOMUtils.js"></script>
<script src="<?=base_url();?>assets/js/tp_unobtrusive.js"></script>

<script type="text/javascript" src="<?=base_url();?>assets/js/pollLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/newsLoader.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/mmenu.js"></script>

<body onload="<? if(isset($onload)) echo $onload; ?>">

<table width="999" height="1330"  border="0" align="center" cellpadding="0" cellspacing="0" >
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
			
			<? $current_url= current_url();?>
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
          <td id="scrollingnews" style="border-left: 2px solid #0A70BB;
border-right: 2px solid #0A70BB;"></td>
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
      <a href="<?=base_url();?>sahithi/"><?=$more['9']->matter?></a>
      
    </div>
   
 </td>
 </tr>


</table>
</table>
</body>
</html>
				