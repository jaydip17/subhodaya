<script>
menu[2] = {  // REQUIRED!!  This menu explicitly declares all available options even if they are the same as the defaults
id:'menu2', //use unique quoted id (quoted) REQUIRED!!
/////////////////////////////////////
///////////// no quotes for these properties (numbers represent pixels unless otherwise noted): ////////////
/////////////////////////////////////
user_defined_stylesheet:false, //if true, prevents script from generating stylesheet for this menu
user_defined_markup:false, //if true, prevents script from generating markup for this menu
design_mode:false,  //if true, generates a report of the script generated/intended styles and markup (as a design aid)
menutop:260,     // initial top offset - except for top menu, where it is meaningless
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
<div style="width:100%; height:100%px; float:left">
	<div style="width: 700px; height:100%;float: left;">
	<div style="width: 700px;float: left;padding-left: 10px;">
			<div style="float:left;">
				                <object type='application/x-shockwave-flash' data='<?=base_url()?>assets/MhlaBanner.swf' width='680' height='96'><param name='flashvars' value='clickTag=&clickTarget=_self' /><param name='allowScriptAccess' value='always' /><param name='movie' value='file.swf' /><param name='bgcolor' value='#000000'></object>                                	
			</div>
	</div>
			<div style="700px; height:100%;">
				<div style="width: 700px;float: left;"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					<div id="mahila_main" style="width: 700px;">
						 <?= (isset($cine_news)) ? $cine_news : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_pukarlu)) ? $cin_pukarlu : '' ?>
					</div>
					<div style="width: 700px;float: left;"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					<div id="mahila_main" style="width: 700px;">
						 <?= (isset($cine_news)) ? $cine_news : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_pukarlu)) ? $cin_pukarlu : '' ?>
					</div>
					<div style="width: 700px;float: left;"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					<div id="mahila_main" style="width: 700px;">
						 <?= (isset($cine_news)) ? $cine_news : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_pukarlu)) ? $cin_pukarlu : '' ?>
					</div>
				
			</div>
			
	 </div>
	 <div style="width: 26%;float: right;">
	 	<img src="<?=base_url()?>assets/home_images/ads/mahila_ad1.jpg"/>
	 	<img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg"/>
	 	<img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg"/>
	 </div>
</div>
	 <!--
	<div style="width:100%; height:100%;">
	<div style="float:right; width:230px; height:100%; border-left:0px solid #b3d3e2; padding-top:5px;text-align: left;">
		<div style="height: 218px;width: 212px;">
		</div>
		<div><img src="<?=base_url()?>assets/home_images/ads/mahila_ad.jpg" width="204" height="531" /></div>
	</div>
	<div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%" /></div>
	<div id="mahila_main">
						 <?= (isset($cine_news)) ? $cine_news : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_pukarlu)) ? $cin_pukarlu : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>	  
	</div>
					  <div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					  <div id="mahila_main">
					   <?= (isset($cin_riviews)) ? $cin_riviews : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_shedule)) ? $cin_shedule : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
				  	</div>
					  <div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					  <div id="mahila_main">
					   <?= (isset($cin_interviews)) ? $cin_interviews : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_therachatu)) ? $cin_therachatu : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						  </div>
	</div>
-->