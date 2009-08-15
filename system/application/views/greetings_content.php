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
bartext:'GREETINGS MENU',       // bar text (the vertical cell) use text or img tag

menuItems:[
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["Greetings"], //create header
<?php foreach($type as $row):?>
["<?php echo $row->gree_cat;?>", "<?=base_url();?>greetings/content/<?=$row->id?>", ""],
<?php endforeach;?>
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

#menu2 a {color:black;background-color:white;text-decoration:none;text-indent:1ex;}
#menu2 a:active	{color:black;text-decoration:none;}
#menu2 a:visited {color:black;text-decoration:none;}
#menu2 a:hover {color:red;background-color:#ffffff}
                    
</style>

<table width="99%"  border="0" cellpadding="0" cellspacing="0">
	<tr>
    	<td width="420" valign="top">
    	<table width="100%" border="0" cellpadding="0" cellspacing="8">
   		<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="604" >
		       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
		     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="604" height="4" /></td></tr>
		            </table>
	                <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;" cellpadding="0" cellspacing="0">
	                    <tr><td height="330"></td>
	                    </tr>
	                </table></td></tr>
	                <tr><td><img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="604"/></td></tr>
         </table>
         </td>
    	 </tr>
     	</table>
     	</td>
     	<td width="300" align="center" valign="top" style="padding:10px 6px 0px 0px;">
		<table width="100%" style="border:1px solid #50BCFC;">
			<tr>
				<td style="border:1px solid #50BCFC;height: 25px;" id="news_heading" align="center"><span id="telugufont"><?=$more['17']->matter ?></span></td>
			</tr>
			<tr>
				<td align="center">
				</td>
			</tr>
			</table>
		</td>
		</tr>
	<tr>
		<td width="100%" colspan="2" style="padding: 4px;"><div id="gree_main_bar"></div></td>
	</tr>
	<tr>
		<td align="left">
			<table>
				<tr>
					<td colspan="2"><div id="gree_bar"></div></td>
				</tr>
				<tr>
					<td width="50%" align="left">
						<div id="gree_cen">
							<a href="#"><img src="<?=base_url();?>assets/greetings/gree_img<?=$greetings10['0']->id?>_thumb.jpg" style="padding: 15px 10px 5px 10px;float: left" border="0"></a>
							<div style="padding-top: 15px;"><?=$greetings10['0']->name?></div>
							<div><?=$greetings10['0']->summery?></div>
						</div>
						<div id="gree_bar1"></div>
					</td>
					<td width="50%" align="left">
						<div id="gree_cen"></div>
						<div id="gree_bar1"></div>
					</td>
				</tr>
				<tr>
					<td width="50%" align="left">
						<div id="gree_cen"></div>
						<div id="gree_bar1"></div>
					</td>
					<td width="50%" align="left">
						<div id="gree_cen"></div>
						<div id="gree_bar1"></div>
					</td>
				</tr>
				<tr>
					<td width="50%" align="left">
						<div id="gree_cen"></div>
						<div id="gree_bar1"></div>
					</td>
					<td width="50%" align="left">
						<div id="gree_cen"></div>
						<div id="gree_bar1"></div>
					</td>
				</tr>
				<tr>
					<td colspan="2"><div id="gree_bar"></div></td>
				</tr>
			</table>
		</td>
		<td rowspan="5" align="left">
		<div id="gre_tabs_div">
		         <div class=" yui-skin-sam" style="width: 299px; border: 1px solid #50BCFC; height: 580px;padding: 3px;" >
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 70px;"><?php if(isset($greetings1['0'])){echo $greetings1['0']->gree_cat;}?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 70px;"><span id="telugufont"><?php if(isset($greetings2['0'])){echo $greetings2['0']->gree_cat;}?></span></em></a></li>
							         <li style="text-align: center;"><a href="#tab2"><em style="width: 70px;"><span id="telugufont"><?php if(isset($greetings12['0'])){echo $greetings12['0']->gree_cat;}?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;">
							        <div id="tab1"><p>
							        <?php foreach($greetings1 as $row):?>
							       	<div style="border: 1px solid red;height:100px;">
							        	<div style="padding:2px;">
							        		<img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" width="80px;" height="90px;" style="float: left;border: 2px red;padding:4px;text-align: justify;">
							        		<div id="more-news-div"><?=$row->name;?></div>
							        		<div><?=$row->summery;?></div>
							        	</div>
							        </div>
							        <div style="height: 3px;"></div>
							        <?php endforeach;?>
							        </p></div>
							        <div id="tab2"><p>
							        	<?php foreach($greetings2 as $row):?>
							       		<div style="border: 1px solid red;height:100px;">
							        	<div style="padding:2px;">
							        		<img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" height="90px;" width="70px" style="float: left;border: 2px red;padding:4px;text-align: justify;">
							        		<div id="more-news-div"><?=$row->name;?></div>
							        		<div><?=$row->summery;?></div>
							        	</div>
							        </div>
							        <div style="height: 3px;"></div>
							        <?php endforeach;?>
							        </p></div>
							        <div id="tab3"><p>
							        <?php foreach($greetings12 as $row):?>
							       	<div style="border: 1px solid red;height:100px;">
							        	<div style="padding:2px;">
							        		<img src="<?=base_url();?>assets/greetings/gree_img<?=$row->id?>_thumb.jpg" height="90px;" style="float: left;border: 2px red;padding:4px;text-align: justify;">
							        		<div id="more-news-div"><?=$row->name;?></div>
							        		<div><?=$row->summery;?></div>
							        	</div>
							        </div>
							        <div style="height: 3px;"></div>
							        <?php endforeach;?>
							        	
							        </p></div>
    							
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
		</div>
		</div>
		</td>
	</tr>
	
</table>
		