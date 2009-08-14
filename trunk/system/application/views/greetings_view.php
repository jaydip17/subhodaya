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
hdingwidth:170,  // heading - non linked horizontal cells width
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
fontsize:'90%',          // express as percentage with the % sign
hdingcolor:'red',      // heading - non linked horizontal cells text color
hdingbgcolor:'#78CCFB',  // heading - non linked horizontal cells background color
hdingfontweight:'bold',  // heading - non linked horizontal cells font weight
hdingvalign:'middle',    // heading - non linked horizontal cells vertical align (top, middle or center)
hdingtxtalign:'center',    // heading - non linked horizontal cells right left or center text alignment
linktxtalign:'center',     // linked horizontal cells right left or center text alignment
linktarget:'',           // default link target, leave blank for same window (other choices: _new, _top, or a window or frame name)
kviewtype:'absolute',       // Type of keepinview - 'fixed' utilizes fixed positioning where available, 'absolute' fluidly follows page scroll
menupos:'left',         // set side that menu slides in from (right or left or top)
bartext:'GREETINGS MENU',       // bar text (the vertical cell) use text or img tag

menuItems:[
//[name, link, target, colspan, endrow?] - leave 'link' and 'target' blank to make a header
["Greetings"], //create header
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Birthday ", "http://www.loisimages.com", "_new"],
["Good morning", "http://www.loisimages.com", "_new"],
["State Street Blues", "http://www.statestreetbluesstroll.com/","_new"],
["Media Jazz by Night", "http://www.mediajazzbynight.com/", "_new"],
["DD Help Forum", "http://www.dynamicdrive.com/forums", "_new"],

["Ansi Art Gallery", "http://home.comcast.net/~ansiguy", "_new"],
["John's Javascript ", "http://home.comcast.net/~jscheuer1/side", "_new"]  //no comma after last entry

]}; // REQUIRED!! do not edit or remove
make_menus();
</script>
<style type="text/css">

#menu2 a {color:black;background-color:white;text-decoration:none;text-indent:1ex;}
#menu2 a:active	{color:black;text-decoration:none;}
#menu2 a:visited {color:black;text-decoration:none;}
#menu2 a:hover {color:red;background-color:#ffffff}
                    
</style>
<table align="center" width="930px" height="1000px"  cellspacing=5 border=1>
<tr>
<td colspan='3'height="30px" bgcolor="#1479BD">t1</td>
<td rowspan='2'><div style="width:=30px;height:280px; border:1px solid red;margin:5px;"><img src="<?=base_url();?>assets/greetings/thanx_4_add_045.jpg" height="275px" width="255px" style="padding: 3px"> </div></td>
</tr>
  <tr>
		<td width="220px" height="250px">t3</td>
		<td width="220px" height="250px">t4</td>
		<td width="220px" height="250px">t5</td>
		
	</tr>
	<tr>
		<td width="220px" height="250px">t6</td>
		<td width="220px" height="250px">t7</td>
		<td width="220px" height="250px">t8</td>
		<td rowspan='5' valign="top">
		<div style="width:=30px;height:247px; border:1px solid red; margin:5px;"><img src="<?=base_url();?>assets/greetings/rva05_large.jpg" height="240px" width="255px" style="padding: 3px;"></div>
		<div style="width:=30px;height:170px; border:1px solid red; margin:5px;">hjgik</div>
		<div style="width:=30px;height:200px; border:1px solid red; margin:7px;"><img src="<?=base_url();?>assets/greetings/22948.jpg" height="195px" width="250px" style="padding: 3px;"></div>
		</td>
	</tr>
	<tr>
		<td width="220px" height="250px">t10</td>
		<td width="220px" height="250px">t11</td>
		<td width="220px" height="250px">t12</td>
	</tr>
		<tr>
	  <td colspan='3'height="30px" bgcolor="#1479BD">t13</td>

	   </tr>
	   <tr>
	   <td colspan='3' height="50px" bgcolor="#D003A6">t14</td>
	   </tr>
	</table>