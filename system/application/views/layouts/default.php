<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: subhodaya ::</title>
<!-- main style sheet -->
<link href="<?=base_url();?>assets/style.css" rel="stylesheet" type="text/css" />
<!-- for tabs js ans css -->
<script type="text/javascript" src="<?=base_url();?>assets/js/yahoo-dom-event.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/element-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/tabview-min.js"></script>
<link href="<?=base_url();?>assets/fonts-min.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/tabview.css" rel="stylesheet" type="text/css" />
<!-- tabs -->
<script src="<?=base_url();?>assets/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="<?=base_url();?>assets/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">

/*Credits: Dynamic Drive CSS Library */
/*URL: http://www.dynamicdrive.com/style/ */



</style>
</head>
<body>

<table width="999" height="1330"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="985"  align="center" valign="top"><table width="988"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="936" valign="top" class="topline"></td>
      </tr>
</table>
      <table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td  height="0px" style="padding-bottom: 0px;">
          <div id="tabs" style="padding-top:0px;">
          <img src="<?=base_url();?>assets/imgs/logo.jpg" style="padding: 0px 20px 0px 5px;float: left;"></img>
			  <ul style="padding-top: 35px;">
			    <li></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['2']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>news/"><span><?=$more['3']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>cinema"><span><?=$more['4']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['5']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['6']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['7']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['8']->matter?></span></a></li>
			    <li><a href="<?=base_url();?>"><span><?=$more['9']->matter?></span></a></li>
			  </ul>
			</div>
          </td>
        </tr>
          <tr>
          <td id="scrollingnews" style="border-left: 2px solid #0A70BB;
border-right: 2px solid #0A70BB;"></td>
        </tr>
     <tr><td width="100%"  align="center" style="border: 2px solid #0A70BB;border-top: 0px solid #0A70BB">
{yield}
      
 </table>


</table>
</body>
</html>
				