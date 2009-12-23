<!--<script>
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
bartext:'GREETINGS MENU',       // bar text (the vertical cell) use text or img tag

menuItems:[
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["GREETINGS"], //create header
<?php if(!empty($type)){ foreach($type as $row):?>
["<?php echo $row->gree_cat;?>", "<?=base_url();?>greetings/content/<?=$row->id?>", ""],
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

<script language="javascript">
//
function detectBrowser()
{
var browser = navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);

}
function getFlexApp(appName) {
	  if (navigator.appName.indexOf ("Microsoft") !=-1) {
	    return window[appName];
	  } else {
	    return document[appName];
	  }
	}

function display_text(sample) {
	var browser = navigator.appName;
	if(browser == 'Microsoft Internet Explorer')
	{
	getFlexApp("FlashID").display_text(sample);	
	}
	if(browser == 'Netscape')
	{
    getFlexApp("sample123").display_text(sample);
	}
	 
}
var limit_time = 4000;
function display_text_1(){
	detectBrowser();
	display_text(1);
		window.setTimeout("display_text_2(2)",limit_time);
}
function display_text_2(ss){
	display_text(ss);
	window.setTimeout("display_text_3(3)",limit_time);
}
function display_text_3(ss){
	display_text(ss);
	window.setTimeout("display_text_4(4)",limit_time);
}
function display_text_4(ss){
	display_text(ss);
	window.setTimeout("display_text_5(5)",limit_time);
}
function display_text_5(ss){
	display_text(ss);
	window.setTimeout("display_text_34(1)",limit_time);
}
function display_text_34(ss){
	display_text(ss);
	window.setTimeout("display_text_1()",limit_time);
}
function display(value)
{
	var content = document.getElementById('flash_'+value).innerHTML;
  document.getElementById('flash-content').innerHTML = content;
}

//
</script> 
--><!--
	                    
	                     <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="604" height="319">
  <param name="movie" value="<?=base_url();?>assets/greetingd.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="9.0.45.0" />
   This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. 
  <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
   Next object tag is for non-IE browsers. So hide it from IE using IECC. 
  [if !IE]>
  <object id="sample123" type="application/x-shockwave-flash" data="<?=base_url();?>assets/greetingd.swf" width="604" height="319">
    <![endif]
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="9.0.45.0" />
    <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
     The browser displays the following alternative content for users with Flash Player 6.0 and older. 
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    [if !IE]>
  </object>
  <![endif]
</object>
<script type="text/javascript">
//
var browser = navigator.appName;
if(browser == 'Microsoft Internet Explorer')
{
	swfobject.registerObject("FlashID");
}
else
	swfobject.registerObject("sample123");
//
</script>
<div id="flash-content" style="position:absolute; width:604px; top: 425px; color:white; padding:0px 5px 20px 5px; vertical-align:top; left:41px; height: 40px;text-align: left;"> 
<?=$query['0']->text?>
</div>
<? foreach ($query as $image): ?>
<div id='flash_<?=$image->id?>' style="display: none;"><?=$image->text?></div>
<?endforeach; ?>
				-->
	<div style="width:100%; float:left">
					<div style="width:144px; height:350px; float:left;">
					 <div id="greet_menu">
		<ul>
		    <li id="categori"></li>
		    <?php foreach ($type as $cat):?>
			<li><a href="<?=base_url()?>greetings/content/<?=$cat->id?>"><?=$cat->gree_cat?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
					</div>
					 <div   style="float:right; height:100%;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="194" />
					   <div   ><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="243" height="487" /></div>
					   <div style="border:1px #000 solid;"><img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg" width="243" height="268" /></div>
				      </div>
					    <div id="main_gree_div">
						      <div style="width:560px; height:28px;" id="bgsonelis">
						          <div id="bgslis"><div id="greet_font" style="float: left;width: 50%"><?=$greetings3['0']->gree_cat?></div>
						          <div id="paginate_div" style="font-size: 12px;"><a href="<?=base_url()?>greetings/content/<?=$greetings3['0']->type?>"><?=$this->lang->line('more');?></a></div></div>
							  </div>
						      	<div id="gree_div">
									<table align="center">
										<tr>
										<?php $count=0;
										foreach ($greetings3 as $row):?>
										<td align="center">
											<div id="gree_img_div"><a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="118" height="93"/></a>
												<div id="gree_bottom">
													<div style="text-align: center;color:#4F00EF ">Views:<?=$row->views?></div>
													<div style="text-align: center;">
													<a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/image/gre_mail.jpg" align="top"/><span>quick Send</span></a></div>
												</div>
											</div>
										</td>
										<?php $count++;
										if($count==4){
											echo '</tr><tr>';
										}
										endforeach;
										?>
										</tr>
									</table>
                         		</div>
									<div id="bgslis">
									<div id="greet_font" style="float: left;width: 50%"><?=$greetings2['0']->gree_cat?></div>
							          <div id="paginate_div" style="font-size: 12px;"><a href="<?=base_url()?>greetings/content/<?=$greetings2['0']->type?>"><?=$this->lang->line('more');?></a></div>
						          </div>
									<div id="gree_div">
									<table align="center">
										<tr>
										<?php $count=0;
										foreach ($greetings2 as $row):?>
										<td align="center">
											<div id="gree_img_div"><a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="118" height="93"/></a>
											<div id="gree_bottom">
													<div style="text-align: center;color:#4F00EF">Views:<?=$row->views?></div>
													<div style="text-align: center;">
													<a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/image/gre_mail.jpg" align="top"/><span>quick Send</span></a></div>
												</div>
											</div>
										</td>
										<?php $count++;
										if($count==4){
											echo '</tr><tr>';
										}
										endforeach;
										?>
										</tr>
									</table>
                         		</div>
                         		<div id="bgslis">
									<div id="greet_font" style="float: left;width: 50%"><?=$greetings1['0']->gree_cat?></div>
							          <div id="paginate_div" style="font-size: 12px;"><a href="<?=base_url()?>greetings/content/<?=$greetings1['0']->type?>"><?=$this->lang->line('more');?></a></div>
						          </div>
                         		<div id="gree_div">
									<table align="center">
										<tr>
										<?php $count=0;
										foreach ($greetings1 as $row):?>
										<td align="center">
											<div id="gree_img_div"><a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="118" height="93"/></a>
											<div id="gree_bottom">
													<div style="text-align: center;color:#4F00EF">Views:<?=$row->views?></div>
													<div style="text-align: center;">
													<a href="<?=base_url()?>greetings/inner/<?=$row->id?>/<?=$row->type?>"><img src="<?=base_url()?>assets/image/gre_mail.jpg" align="top"/>
													<span>quick Send</span></a></div>
												</div>
											</div>
										</td>
										<?php $count++;
										if($count==4){
											echo '</tr><tr>';
										}
										endforeach;
										?>
										</tr>
									</table>
                         		</div>
			          	</div>
									</div>