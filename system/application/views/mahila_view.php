<script>
menu[2] = {  // REQUIRED!!  This menu explicitly declares all available options even if they are the same as the defaults
id:'menu2', //use unique quoted id (quoted) REQUIRED!!
/////////////////////////////////////
///////////// no quotes for these properties (numbers represent pixels unless otherwise noted): ////////////
/////////////////////////////////////
user_defined_stylesheet:false, //if true, prevents script from generating stylesheet for this menu
user_defined_markup:false, //if true, prevents script from generating markup for this menu
design_mode:false,  //if true, generates a report of the script generated/intended styles and markup (as a design aid)
menutop:145,     // initial top offset - except for top menu, where it is meaningless
menuleft:'45%',    // initial left offset - only for top menu, as pixels (can be a quoted percentage - ex: '50%')
keepinview:80,   // Use false (for not static) - OR - true or numeric top offset when page scrolls
menuspeed:20,    // Speed of menu sliding smaller is faster (interval of milliseconds)
menupause:500,   // How long menu stays out when mouse leaves it (in milliseconds)
d_colspan:3,     // Available columns in menu body as integer
allowtransparent:false, // true to allow page to show through menu if other bg's are transparent or border has gaps
barwidth:30,     // bar (the vertical cell) width
wrapbar:true,    // extend and wrap bar below menu for a more solid look (default false) - will revert to false for top menu
hdingwidth:200,  // heading - non linked horizontal cells width
hdingheight:25,  // heading - non linked horizontal cells height
hdingindent:1,   // heading - non linked horizontal cells text-indent represents ex units (@8 pixels decimals allowed)
linkheight:20,   // linked horizontal cells height
linktopad:3,     // linked horizontal cells top padding
borderwidth:0,   // inner border-width used for this menu
/////////////////////////// quote these properties: /////////////////////
bordercolor:'#78CCFB', // inner border color
borderstyle:'solid',    // inner border style (solid, dashed, inset, etc.)
outbrdwidth:'0ex 0ex 0ex 0ex', // outer border-width used for this menu (top right bottom left)
outbrdcolor:'#78CCFB',  // outer border color
outbrdstyle:'solid',     // outer border style (solid, dashed, inset, etc.)
barcolor:'black',        // bar (the vertical cell) text color
barbgcolor:'#78CCFB',   // bar (the vertical cell) background color
barfontweight:'bold',    // bar (the vertical cell) font weight
baralign:'center',       // bar (the vertical cell) right left or center text alignment
menufont:'verdana',      // menu font
fontsize:'100%',          // express as percentage with the % sign
hdingcolor:'red',      // heading - non linked horizontal cells text color
hdingbgcolor:'#78CCFB',  // heading - non linked horizontal cells background color
hdingfontweight:'bold',  // heading - non linked horizontal cells font weight
hdingvalign:'center',    // heading - non linked horizontal cells vertical align (top, middle or center)
hdingtxtalign:'center',    // heading - non linked horizontal cells right left or center text alignment
linktxtalign:'center',     // linked horizontal cells right left or center text alignment
linktarget:'',           // default link target, leave blank for same window (other choices: _new, _top, or a window or frame name)
kviewtype:'absolute',       // Type of keepinview - 'fixed' utilizes fixed positioning where available, 'absolute' fluidly follows page scroll
menupos:'left',         // set side that menu slides in from (right or left or top)
bartext:'MAHILA MENU',       // bar text (the vertical cell) use text or img tag

menuItems:[
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["Mahila"], //create header
<?php if(!empty($details)){ foreach($details as $row):?>
["<?php echo $row->cat_name;?>", "<?=base_url();?>mahila/details/<?=$row->id?>", ""],
<?php endforeach;} else 'No data found';?>
//["Birthday", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Birthday ", "http://www.loisimages.com", "_new"],
//["Good morning", "http://www.loisimages.com", "_new"],
//["State Street Blues", "http://www.statestreetbluesstroll.com/","_new"],
//["Media Jazz by Night", "http://www.mediajazzbynight.com/", "_new"],
//["DD Help Forum", "http://www.dynamicdrive.com/forums", "_new"],
//
//["Ansi Art Gallery", "http://home.comcast.net/~ansiguy", "_new"],
//["John's Javascript ", "http://home.comcast.net/~jscheuer1/side", "_new"]  //no comma after last entry

]}; // REQUIRED!! do not edit or remove
make_menus();
</script>
<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
padding-left: 20px;
}
li
{
padding-top:3px;
line-height:16px;
}
body{
font-size:14px;
line-height:16px;
}
#tdmahila
{
padding-left:5px;
background-image:url(<?=base_url();?>assets/imgs/sahithi-top.gif);
background-repeat-x;
padding-top:0px;
}
</style>
<table width="99%"  border="0" cellpadding="0" cellspacing="0" >
<tr>
        <td  valign="top">
	     <img src="<?=base_url();?>assets/imgs/sahithi1.jpg" width="680" height="96" />
					</td>
					<td rowspan="5" valign="top" style="padding-left:10px";> 
					<table cellpadding="0" cellspacing="0">
					<tr>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-left.gif" width="8" height="23" /></td>
					<td width="208px" style="background-image:url(<?=base_url();?>assets/imgs/beauty-top-center.gif);background-repeat-x;"><span id="newsheading"><?=$details_sahithi['0']->cat_name?></span></td>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-right.gif" width="8" height="23" alt="gg" /></td>
					</tr>
					<tr>
					<td height="151px" valign="top" colspan="3" style="background-image:url(<?=base_url();?>assets/imgs/KitchenTips-cr.gif);background-repeat-x;border:1px solid #0A70BB;border-bottom:0px;">
					<div style="height: 120px;padding: 3px;width:215px;" id="telugufont">
					<ul id="mainnews">
	              <?if(!empty($details_more_sahithi['1'])){
	              $count=0; 
	              foreach($details_more_sahithi['1'] as $item):?>

	              <li style="padding: 1px;"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading?></li>
	              <? if($count==5)
	              break;
	              else $count++;
					endforeach;} ?>
	                 </ul>
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>sahithi/details/<?if(isset($types_sahithi['1'])){ echo $types_sahithi['1']; }?>"><?=$more['0']->matter?></a></span></div></td>
					</tr>
					<tr>
					<td colspan="3" width="224" height="7"><img src="<?=base_url();?>assets/imgs/beauty-bottom-img.gif" width="224px" height="7px "  /></td>
					</tr>
					</table>
					<table cellpadding="0" cellspacing="0" style="margin:7px 0px 7px 0px;">
					<tr>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-left.gif" width="8" height="23" /></td>
					<td width="208px" style="background-image:url(<?=base_url();?>assets/imgs/beauty-top-center.gif);background-repeat-x;"><span id="newsheading"><?=$details_sahithi['1']->cat_name?></span></td>
					<td><img src="<?=base_url();?>assets/imgs/beauty-top-right.gif" width="8" height="23" alt="gg" /></td>
					</tr>
					<tr>
					<td height="151px" valign="top" colspan="3" style="background-image:url(<?=base_url();?>assets/imgs/KitchenTips-cr.gif);background-repeat-x;border: 1px solid #0A70BB;border-bottom: 0px;">
					 <div style="height: 120px;padding: 3px;width:215px" id="telugufont">
					 <ul id="mainnews">
	              <?if(!empty($details_more_sahithi['2'])){
	              	$count=0;
	              foreach($details_more_sahithi['2'] as $row):?>

	              <li style="padding:1px;"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$row->id?>/<?=$row->cat_id?>"><?=$row->heading?></a></li>
	              <? if($count==5)
	              break;
	              else $count++;
	              endforeach;} ?>
	                 </ul>
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>sahithi/details/<?if(isset($types_sahithi['2'])){ echo $types_sahithi['2']; }?>"><?=$more['0']->matter?></a></span></div></td>
					</tr>
					<tr>
					<td colspan="3" width="224" height="7"><img src="<?=base_url();?>assets/imgs/beauty-bottom-img.gif" width="224px" height="7px "  /></td>
					</tr>
					</table>
					<img src="<?=base_url();?>assets/ads/Side_right1.jpg" width="221px" height="132px" style="padding-bottom:7px;" />
					<img src="<?=base_url();?>assets/ads/Side_right2.jpg" width="221px" height="132px" style="padding-bottom:6px;" />
					<img src="<?=base_url();?>assets/ads/Side_right3.jpg" width="224px" height="227px"/>
					
					</td>
					</tr>
	     			<tr><td style="padding-top:7px"><img src="<?=base_url();?>assets/imgs/top-cru.gif" width="681px" height="11"/></td></tr>
	               <tr> 
	              <td valign="top" style="border: 1px solid #0A70BB;border-top: 0px;border-bottom: 0px;">
	              <table id="sahithi-table" cellpadding="0" cellspacing="5px"  width="675px">
	              <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['0']->cat_name?></span></td>
	           
	            </tr>
	            <tr>
	            <td width="50%" valign="top" height="219px" style="background-image:url(<?=base_url();?>assets/imgs/Pandugalu-cr.gif);background-repeat-y;">
	            <div id="telugufont1">
	              <div style="height: 183px;padding:3px;">
	              <?if(!empty($details_more['1'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['1']['0']->id."_thumb.jpg")){
	             ?>
	              <a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['1']['0']->id?>/<?=$details_more['1']['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$details_more['1']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;"  align="top" id="img"  alt="gg"/></a>
	              <?} ?>
	             <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['1']['0']->id?>/<?=$details_more['1']['0']->cat_id?>"><?php echo $details_more['1']['0']->heading?></a></font><br>
	              <?=$details_more['1']['0']->summary; }?>
	                 <ul id="mainnews">
	              <?if(!empty($details_more['1'])){
	              	$count=0;
	              foreach($details_more['1'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>7)
							           {
							           break;
                                       }$count++;?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	                <?}} ?>
	                 </ul>
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['0'])){ echo $types['0']; }?>"><?=$more['0']->matter?></a></span></div>
	                 </div>
	                  </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['1']->cat_name?></span>
	            </td>
	            </tr>
	            <tr>
	             <td width="50%" valign="top" height="219px" style="background-image:url(<?=base_url();?>assets/imgs/Pandugalu-cr.gif);background-repeat-y;">
	              <div id="telugufont1">
	              <div style="height: 183px;padding:3px;">
	              <?if(!empty($details_more['2'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['2']['0']->id."_thumb.jpg")){
	             ?>
	              <a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['2']['0']->id?>/<?=$details_more['2']['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$details_more['2']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	              <?}} ?>
	            <?if(!empty($details_more['2'])){?>
	             <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['2']['0']->id?>/<?=$details_more['2']['0']->cat_id?>"><?php echo $details_more['2']['0']->heading?></a></font><br>
	              <?=$details_more['2']['0']->summary; }?>
	              <ul id="mainnews">
	             <?if(!empty($details_more['2'])){
	             	$count=0;
	              foreach($details_more['2'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           } if($count>7)
							           {
							           break;
                                       }$count++;?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                
	                </ul>
	                </div>
	                <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['1'])){ echo $types['1']; }?>"><?=$more['0']->matter?></a></span></div>
	                  </div>
	            </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
	            <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['2']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/MathruBashacr.gif);background-repeat-y;">
	             <div id="telugufont1">
	             <div style="height:80px;padding: 3px;">
	             <?if(!empty($details_more['3'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['3']['0']->id."_thumb.jpg")){
	             ?>
	             	<a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['3']['0']->id?>/<?=$details_more['3']['0']->cat_id?>"><img  src="<?=base_url();?>assets/mahila/news_img<?=$details_more['3']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	             <?}} ?>
	              <?if(!empty($details_more['3'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['3']['0']->id?>/<?=$details_more['3']['0']->cat_id?>"><?php echo $details_more['3']['0']->heading?></a></font><br>
	              <?=$details_more['3']['0']->summary; }?>
	              <ul id="mainnews">
	              <?if(!empty($details_more['3'])){
	              	$count=0;
	              foreach($details_more['3'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>2)
							           {
							           break;
                                       }$count++;?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	               <?}} ?>
	                 </ul>
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['2'])){ echo $types['2']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['3']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/MathruBashacr.gif);background-repeat-y;">
	              <div id="telugufont1"> 
	              <div style="height:80px;padding: 3px;">
	             <?if(!empty($details_more['3'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['4']['0']->id."_thumb.jpg")){
	             ?>
	             	<a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['4']['0']->id?>/<?=$details_more['4']['0']->cat_id?>"><img  src="<?=base_url();?>assets/mahila/news_img<?=$details_more['4']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	             <?}} ?>
	              <?if(!empty($details_more['3'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['4']['0']->id?>/<?=$details_more['4']['0']->cat_id?>"><?php echo $details_more['4']['0']->heading?></a></font><br>
	              <?=$details_more['4']['0']->summary; }?>
	              <ul id="mainnews">
	              <?if(!empty($details_more['4'])){
	              	$count=0;
	              foreach($details_more['4'] as $item){if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>2)
							           {
							           break;
                                       }$count++;?>


	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	              <?}} ?>	                 </ul> 
	              </div>
	             <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['3'])){ echo $types['3']; }?>"><?=$more['0']->matter?></a></span></div> 
	                  </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
	           
	            <tr>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['4']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td  height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/MathruBashacr.gif);background-repeat-y;"> 
	              <div id="telugufont1">
	              <div style="height:80px;padding: 3px;">
	              <?if(!empty($details_more['5'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['5']['0']->id."_thumb.jpg")){
	             ?>
	              <a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['5']['0']->id?>/<?=$details_more['5']['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$details_more['5']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	              <?}} ?>
	              <?if(!empty($details_more['5'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['5']['0']->id?>/<?=$details_more['5']['0']->cat_id?>"><?php echo $details_more['5']['0']->heading?></a></font><br>
	              <?=$details_more['5']['0']->summary; }?>
	              <ul id="mainnews">
	             <?if(!empty($details_more['5'])){
	             	$count=0;
	              foreach($details_more['5'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>3)
							           {
							           break;
                                       }$count++;?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                 </ul>
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['4'])){ echo $types['4']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	            <td>
	            <table width="332px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['5']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="116px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/MathruBashacr.gif);background-repeat-y;">
	              <div id="telugufont1">
	              <div style="padding: 3px; height:80px;">
                 <?if(!empty($details_more['6'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['6']['0']->id."_thumb.jpg")){
	             ?>
	              <a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['6']['0']->id?>/<?=$details_more['6']['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$details_more['6']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	              <?}} ?>
                 <?if(!empty($details_more['6'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['6']['0']->id?>/<?=$details_more['6']['0']->cat_id?>"><?php echo $details_more['6']['0']->heading?></a></font><br>
	              <?=$details_more['6']['0']->summary; }?>
	             <ul id="mainnews">
	              <?if(!empty($details_more['6'])){
	              	$count=0;
	              foreach($details_more['6'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>3)
							           {
							           break;
                                       }$count++;?>

	             <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	              <?}} ?>
	                 </ul> 
	                 </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['5'])){ echo $types['5']; }?>"><?=$more['0']->matter?></a></span></div>
	                   </td>
	            </tr>
	            </table>
	            </td>
	           </tr>
			   
	            <tr>
	            <td colspan="2">
				<div style="float:left;padding-right:4px;">
	            <table width="450px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['6']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td  height="163px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Janapadalu-cr.gif);background-repeat-x;">
	             <div id="telugufont1">
	              <div style="padding: 3px;height:128px;" >
	               <?if(!empty($details_more['7'])){
	             if(file_exists("./assets/mahila/news_img".$details_more['7']['0']->id."_thumb.jpg")){
	             ?>
	             	<a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['7']['0']->id?>/<?=$details_more['7']['0']->cat_id?>"><img  src="<?=base_url();?>assets/mahila/news_img<?=$details_more['7']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	             <?}} ?>
	               <?if(!empty($details_more['7'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['7']['0']->id?>/<?=$details_more['7']['0']->cat_id?>"><?php echo $details_more['7']['0']->heading?></a></font><br>
	              <?=$details_more['7']['0']->summary; }?>
	              <ul id="mainnews">
	             <?if(!empty($details_more['7'])){
	             	$count=0;
	              foreach($details_more['7'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>5)
							           {
							           break;
                                       }$count++;?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading ?></a></li>
	             <?}} ?>
	                 </ul>
	               </div>
	               <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['6'])){ echo $types['6']; }?>"><?=$more['0']->matter?></a></span></div>
	               </div>
	                   </td>
	            </tr>
	            </table>
	           </div>
	           
	            <table width="213px" align="center" style="border: 1px solid #0A70BB;" cellpadding="0" cellspacing="0">
	            <tr>
	            <td height="22px" id="tdmahila"><span id="newsheading"><?=$details['7']->cat_name?></span>
	            </td>
	           
	            </tr>
	            <tr>
	             <td height="163px" valign="top" style="background-image:url(<?=base_url();?>assets/imgs/Janapadalu-cr.gif);background-repeat-x;"> 
	             <div id="telugufont1">
	             <div style="padding: 3px;height:128px;">
	             <?if(!empty($details_more['8'])){
	             	if(file_exists("./assets/mahila/news_img".$details_more['8']['0']->id."_thumb.jpg")){
	             ?>
	             	<a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['8']['0']->id?>/<?=$details_more['8']['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?=$details_more['8']['0']->id?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;" align="top" id="img"/></a>
	             <?}} ?>
	              <?if(!empty($details_more['8'])){?>
	              <font id="telugufont"><a href="<?=base_url();?>mahila/mahiladetails/<?=$details_more['8']['0']->id?>/<?=$details_more['8']['0']->cat_id?>"><?php echo $details_more['8']['0']->heading?></a></font><br>
	              <?=$details_more['8']['0']->summary; }?>
	             <ul id="mainnews" >
	             <?if(!empty($details_more['8'])){
	             	$count=0;
	              foreach($details_more['8'] as $item) {if($count==0)
							           {$count++;
							            continue;
							           }
							            if($count>5)
							           {
							           break;
                                       }$count++;?>

	              <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading?></a></li>
	              <?}} ?>
	                 </ul> </div>
	                 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>mahila/details/<?if(isset($types['7'])){ echo $types['7']; }?>"><?=$more['0']->matter?></a></span></div>
	                  </td>
	                 
	                 
	                  
	            </tr>
	            </table>
	            </td>
	           </tr>
	           
	            </table>
	              </td>
				  </tr>
				 <tr>
	     			<td><img src="<?=base_url();?>assets/imgs/bottm-cru.gif" width="681px" height="11" /><td></tr>
	            </table>