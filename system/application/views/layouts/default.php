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
</head>
<body>

<table width="999" height="1330"  border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="985"  align="center" valign="top"><table width="988"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="936" valign="top" class="topline"></td>
      </tr>
</table>

      <table width="95%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="252" rowspan="2" align="center"  ><img src="<?=base_url();?>assets/imgs/logo.jpg" width="252" height="60" /></td>
          <td width="84" height="32" valign="bottom"></td>
          <td width="85" valign="bottom"></td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
        
          <td width="85" valign="bottom" id="buttion"></td>
          <td width="87" valign="bottom" id="buttion1"></td>
          <td width="87" valign="bottom" id="buttion2"></td>
          <td width="87" valign="bottom" id="buttion3"></td>
          <td width="86" valign="bottom" id="buttion4"></td>
          <td width="86" valign="bottom" id="buttion5"></td>
          <td width="87" valign="bottom" id="buttion6"></td>
          <td width="87" valign="bottom" id="buttion6"></td>
        </tr>
      </table>
      <table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0" style="border: 2px solid #0A70BB;" >
        <tr>
          <td width="100%" valign="top" id="buttionline" align="center"></td>
        </tr>
          <tr>
          <td id="scrollingnews" ></td>
        </tr>
     <tr><td width="100%"  align="center">
{yield}
      
 </table>


</table>
</body>
</html>
				