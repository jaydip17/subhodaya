<style type="text/css">
/*  styles for the unit rater
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */

.ratingblock {
	display:block;
	border-bottom:1px solid #999;
	padding-bottom:8px;
	margin-bottom:8px;
	}

.loading {
	height: 15px;
	background: url('<?=base_url()?>assets/imgs/working.gif') 50% 50% no-repeat;
	}
	
.unit-rating { /* the UL */
	list-style:none;
	margin: 0px;
	padding:0px;
	height: 15px;
	position: relative;
	background: url('<?=base_url()?>assets/imgs/starrating.gif') top left repeat-x;		
	}

.unit-rating li{
    text-indent: -90000px;
	padding:0px;
	margin:0px;
	/*\*/
	float: left;
	/* */
	}
	
.unit-rating li a {
	outline: none;
	display:block;
	width:30px;
	height: 15px;
	text-decoration: none;
	text-indent: -9000px;
	z-index: 20;
	position: absolute;
	padding: 0px;
	}
	
.unit-rating li a:hover{
	background: url('<?=base_url()?>assets/imgs/starrating.gif') left center;
	z-index: 2;
	left: 0px;
	}

.unit-rating a.r1-unit{left: 0px;}
.unit-rating a.r1-unit:hover{width:30px;}
.unit-rating a.r2-unit{left:30px;}
.unit-rating a.r2-unit:hover{width: 60px;}
.unit-rating a.r3-unit{left: 60px;}
.unit-rating a.r3-unit:hover{width: 90px;}
.unit-rating a.r4-unit{left: 90px;}	
.unit-rating a.r4-unit:hover{width: 120px;}
.unit-rating a.r5-unit{left: 120px;}
.unit-rating a.r5-unit:hover{width: 150px;}
.unit-rating a.r6-unit{left: 150px;}
.unit-rating a.r6-unit:hover{width: 180px;}
.unit-rating a.r7-unit{left: 180px;}
.unit-rating a.r7-unit:hover{width: 210px;}
.unit-rating a.r8-unit{left: 210px;}
.unit-rating a.r8-unit:hover{width: 240px;}
.unit-rating a.r9-unit{left: 240px;}
.unit-rating a.r9-unit:hover{width: 270px;}
.unit-rating a.r10-unit{left: 270px;}
.unit-rating a.r10-unit:hover{width: 300px;}

.unit-rating li.current-rating {
	background: url('<?=base_url()?>assets/imgs/starrating.gif') left bottom;
	position: absolute;
	height: 15px;
	display: block;
	text-indent: -9000px;
	z-index: 1;
	}

.voted {color:#999;}
.thanks {color:#36AA3D;}
.static {color:#5D3126;}

#container {
	width: 50%;
	border: 1px solid #ccc;
	padding: 10px;
	}

h1 {
	font-size: 21px;
	font-family: Arial, sans-serif;
	margin:0 0 5px 0;
	padding:0;
	}

h2 {
	font-size: 16px;
	color: #333;
	font-family: Arial, sans-serif;
	margin:0 0 10px 0;
	padding:0;
	}

p 	{
	margin:3px;
	padding:0;
	}
		
</style>
<script type="text/javascript" language="javascript">
var Behaviour = {
	list : new Array,
	
	register : function(sheet){
		Behaviour.list.push(sheet);
	},
	
	start : function(){
		Behaviour.addLoadEvent(function(){
			Behaviour.apply();
		});
	},
	
	apply : function(){
		for (h=0;sheet=Behaviour.list[h];h++){
			for (selector in sheet){
				list = document.getElementsBySelector(selector);
				
				if (!list){
					continue;
				}

				for (i=0;element=list[i];i++){
					sheet[selector](element);
				}
			}
		}
	},
	
	addLoadEvent : function(func){
		var oldonload = window.onload;
		
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				oldonload();
				func();
			}
		}
	}
}

Behaviour.start();

/*
   The following code is Copyright (C) Simon Willison 2004.

   document.getElementsBySelector(selector)
   - returns an array of element objects from the current document
     matching the CSS selector. Selectors can contain element names, 
     class names and ids and can be nested. For example:
     
       elements = document.getElementsBySelect('div#main p a.external')
     
     Will return an array of all 'a' elements with 'external' in their 
     class attribute that are contained inside 'p' elements that are 
     contained inside the 'div' element which has id="main"

   New in version 0.4: Support for CSS2 and CSS3 attribute selectors:
   See http://www.w3.org/TR/css3-selectors/#attribute-selectors

   Version 0.4 - Simon Willison, March 25th 2003
   -- Works in Phoenix 0.5, Mozilla 1.3, Opera 7, Internet Explorer 6, Internet Explorer 5 on Windows
   -- Opera 7 fails 
*/

function getAllChildren(e) {
  // Returns all children of element. Workaround required for IE5/Windows. Ugh.
  return e.all ? e.all : e.getElementsByTagName('*');
}

document.getElementsBySelector = function(selector) {
  // Attempt to fail gracefully in lesser browsers
  if (!document.getElementsByTagName) {
    return new Array();
  }
  // Split selector in to tokens
  var tokens = selector.split(' ');
  var currentContext = new Array(document);
  for (var i = 0; i < tokens.length; i++) {
    token = tokens[i].replace(/^\s+/,'').replace(/\s+$/,'');;
    if (token.indexOf('#') > -1) {
      // Token is an ID selector
      var bits = token.split('#');
      var tagName = bits[0];
      var id = bits[1];
      var element = document.getElementById(id);
      if (tagName && element.nodeName.toLowerCase() != tagName) {
        // tag with that ID not found, return false
        return new Array();
      }
      // Set currentContext to contain just this element
      currentContext = new Array(element);
      continue; // Skip to next token
    }
    if (token.indexOf('.') > -1) {
      // Token contains a class selector
      var bits = token.split('.');
      var tagName = bits[0];
      var className = bits[1];
      if (!tagName) {
        tagName = '*';
      }
      // Get elements matching tag, filter them for class selector
      var found = new Array;
      var foundCount = 0;
      for (var h = 0; h < currentContext.length; h++) {
        var elements;
        if (tagName == '*') {
            elements = getAllChildren(currentContext[h]);
        } else {
            elements = currentContext[h].getElementsByTagName(tagName);
        }
        for (var j = 0; j < elements.length; j++) {
          found[foundCount++] = elements[j];
        }
      }
      currentContext = new Array;
      var currentContextIndex = 0;
      for (var k = 0; k < found.length; k++) {
        if (found[k].className && found[k].className.match(new RegExp('\\b'+className+'\\b'))) {
          currentContext[currentContextIndex++] = found[k];
        }
      }
      continue; // Skip to next token
    }
    // Code to deal with attribute selectors
    if (token.match(/^(\w*)\[(\w+)([=~\|\^\$\*]?)=?"?([^\]"]*)"?\]$/)) {
      var tagName = RegExp.$1;
      var attrName = RegExp.$2;
      var attrOperator = RegExp.$3;
      var attrValue = RegExp.$4;
      if (!tagName) {
        tagName = '*';
      }
      // Grab all of the tagName elements within current context
      var found = new Array;
      var foundCount = 0;
      for (var h = 0; h < currentContext.length; h++) {
        var elements;
        if (tagName == '*') {
            elements = getAllChildren(currentContext[h]);
        } else {
            elements = currentContext[h].getElementsByTagName(tagName);
        }
        for (var j = 0; j < elements.length; j++) {
          found[foundCount++] = elements[j];
        }
      }
      currentContext = new Array;
      var currentContextIndex = 0;
      var checkFunction; // This function will be used to filter the elements
      switch (attrOperator) {
        case '=': // Equality
          checkFunction = function(e) { return (e.getAttribute(attrName) == attrValue); };
          break;
        case '~': // Match one of space seperated words 
          checkFunction = function(e) { return (e.getAttribute(attrName).match(new RegExp('\\b'+attrValue+'\\b'))); };
          break;
        case '|': // Match start with value followed by optional hyphen
          checkFunction = function(e) { return (e.getAttribute(attrName).match(new RegExp('^'+attrValue+'-?'))); };
          break;
        case '^': // Match starts with value
          checkFunction = function(e) { return (e.getAttribute(attrName).indexOf(attrValue) == 0); };
          break;
        case '$': // Match ends with value - fails with "Warning" in Opera 7
          checkFunction = function(e) { return (e.getAttribute(attrName).lastIndexOf(attrValue) == e.getAttribute(attrName).length - attrValue.length); };
          break;
        case '*': // Match ends with value
          checkFunction = function(e) { return (e.getAttribute(attrName).indexOf(attrValue) > -1); };
          break;
        default :
          // Just test for existence of attribute
          checkFunction = function(e) { return e.getAttribute(attrName); };
      }
      currentContext = new Array;
      var currentContextIndex = 0;
      for (var k = 0; k < found.length; k++) {
        if (checkFunction(found[k])) {
          currentContext[currentContextIndex++] = found[k];
        }
      }
      // alert('Attribute Selector: '+tagName+' '+attrName+' '+attrOperator+' '+attrValue);
      continue; // Skip to next token
    }
    
    if (!currentContext[0]){
    	return;
    }
    
    // If we get here, token is JUST an element (not a class or ID selector)
    tagName = token;
    var found = new Array;
    var foundCount = 0;
    for (var h = 0; h < currentContext.length; h++) {
      var elements = currentContext[h].getElementsByTagName(tagName);
      for (var j = 0; j < elements.length; j++) {
        found[foundCount++] = elements[j];
      }
    }
    currentContext = found;
  }
  return currentContext;
}
</script>
<script type="text/javascript" language="javascript">
/*
Page:           rating.js
Created:        Aug 2006
Last Mod:       Mar 11 2007
Handles actions and requests for rating bars.	
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */

var xmlhttp
	/*@cc_on @*/
	/*@if (@_jscript_version >= 5)
	  try {
	  xmlhttp=new ActiveXObject("Msxml2.XMLHTTP")
	 } catch (e) {
	  try {
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP")
	  } catch (E) {
	   xmlhttp=false
	  }
	 }
	@else
	 xmlhttp=false
	@end @*/
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	 try {
	  xmlhttp = new XMLHttpRequest();
	 } catch (e) {
	  xmlhttp=false
	 }
	}
	function myXMLHttpRequest() {
	  var xmlhttplocal;
	  try {
	    xmlhttplocal= new ActiveXObject("Msxml2.XMLHTTP")
	 } catch (e) {
	  try {
	    xmlhttplocal= new ActiveXObject("Microsoft.XMLHTTP")
	  } catch (E) {
	    xmlhttplocal=false;
	  }
	 }

	if (!xmlhttplocal && typeof XMLHttpRequest!='undefined') {
	 try {
	  var xmlhttplocal = new XMLHttpRequest();
	 } catch (e) {
	  var xmlhttplocal=false;
	  alert('couldn\'t create xmlhttp object');
	 }
	}
	return(xmlhttplocal);
}

function sndReq(vote,id_num,ip_num,units) {
	var theUL = document.getElementById('unit_ul'+id_num); // the UL
	
	// switch UL with a loading div
	theUL.innerHTML = '<div class="loading"></div>';
	
    xmlhttp.open('get', 'rpc.php?j='+vote+'&q='+id_num+'&t='+ip_num+'&c='+units);
    xmlhttp.onreadystatechange = handleResponse;
    xmlhttp.send(null);	
}

function handleResponse() {
  if(xmlhttp.readyState == 4){
		if (xmlhttp.status == 200){
       	
        var response = xmlhttp.responseText;
        var update = new Array();

        if(response.indexOf('|') != -1) {
            update = response.split('|');
            changeText(update[0], update[1]);
        }
		}
    }
}

function changeText( div2show, text ) {
    // Detect Browser
    var IE = (document.all) ? 1 : 0;
    var DOM = 0; 
    if (parseInt(navigator.appVersion) >=5) {DOM=1};

    // Grab the content from the requested "div" and show it in the "container"
    if (DOM) {
        var viewer = document.getElementById(div2show);
        viewer.innerHTML = text;
    }  else if(IE) {
        document.all[div2show].innerHTML = text;
    }
}

/* =============================================================== */
var ratingAction = {
		'a.rater' : function(element){
			element.onclick = function(){

			var parameterString = this.href.replace(/.*\?(.*)/, "$1"); // onclick="sndReq('j=1&q=2&t=127.0.0.1&c=5');
			var parameterTokens = parameterString.split("&"); // onclick="sndReq('j=1,q=2,t=127.0.0.1,c=5');
			var parameterList = new Array();

			for (j = 0; j < parameterTokens.length; j++) {
				var parameterName = parameterTokens[j].replace(/(.*)=.*/, "$1"); // j
				var parameterValue = parameterTokens[j].replace(/.*=(.*)/, "$1"); // 1
				parameterList[parameterName] = parameterValue;
			}
			var theratingID = parameterList['q'];
			var theVote = parameterList['j'];
			var theuserIP = parameterList['t'];
			var theunits = parameterList['c'];
			
			//for testing	alert('sndReq('+theVote+','+theratingID+','+theuserIP+','+theunits+')'); return false;
			sndReq(theVote,theratingID,theuserIP,theunits); return false;		
			}
		}
		
	};
Behaviour.register(ratingAction);

</script>
<!--<table cellpadding="0" cellspacing="5px;" width="926">
	<tr>
		<td align="left" valign="top"><div style="width: 742px;height: 93px;border: 1px solid red;">
		<div id="container">

    
<?php echo $this->ratings->bar('id21',''); ?>


</div></div></td>
		<td rowspan="2" width="180" align="center" valign="top"><div style="width: 180px;height: 1100px;border: 1px solid red;background-color: gray;"></div></td>
	</tr>
	<tr>
		<td valign="top" height="600">
		<div style="margin-top: 5px;">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
					<div style="text-align: left;float: left;width: 50%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
					<? if(isset($links)):?>
					<?if(isset($links['first'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['first']?>/<?=$image['0']->parentid?>">First</a>!!<?} ?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>!!<?} ?>
						<?if(isset($links['last'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['last']?>/<?=$image['0']->parentid?>">Last</a>						
					<?}endif; ?>
					</div>
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				<tr>
					<td colspan="3"  id="gal_center1"  width="742" align="center" height="590" >
					<img src="<?=base_url()?>assets/gallery/image<?=$image['0']->id?>.jpg"  id="img">
					</td>
				</tr>
				 <tr>
					<td id="gal_leftslide"></td>
					<td id="gal_menucen">
						<div style="text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['first'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['first']?>/<?=$image['0']->parentid?>">First</a>!!<?} ?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>!!<?} ?>
						<?if(isset($links['last'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['last']?>/<?=$image['0']->parentid?>">Last</a>						
					<?}endif; ?>
					</div>
					</td>
					<td id="gal_rightslide"></td>
				</tr>
				
				<tr>
					<td valign="top" colspan="3" align="center" style="padding-top: 10px;">
					<?=form_open('subhodaya/sendmail','name="telugu_send"') ?>
					<input type="hidden" name="url" value="<?=base_url()?>gallery/content/<?=$image['0']->id?>">
			
						<table align="center" width="550px" style="border: 1px solid #939393;">
							<tr>
								<td colspan='2' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td width="30%" align="left" style="padding-left: 10px;"><?=$more['27']->matter?></td>
								<td align="left" width="70%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr><td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td><td><input type="text" name="fname" size="30">
							<?=form_hidden('type','Gallery')?>
							</td></tr>
							<tr>
								<td align="left" style="padding-left: 10px;"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr>
								<td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" onclick="telugu_typing()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				            <tr>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
							</table>
						</form>
			 
							
						</table>
						</form>
					</td>
				</tr>
				<tr><td id="gal_bottom" colspan="3"></td></tr>
			</table>
		</div>
			
	</td>
	</tr>
	<tr>
		<td width="925" height="156" style="border: 1px solid red;background-color: gray;" colspan="2" >
		</td>
	</tr>
</table>-->
<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/cr.png);
padding-left: 20px;
}
</style>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" width="1px"><img src="<?=base_url()?>assets/imgs/body-left.jpg"></td>
	<td id="gal_center-top"  align="left" height="30" width="750">
			<div style="text-align: left;float: left;width: 70%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
					<? if(isset($links)):?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>
					<?}endif; ?>
					</div>
	</td>
	<td valign="top" width="2px"><img src="<?=base_url()?>assets/imgs/body-right.jpg"></td>
	<td valign="top" rowspan="3" align="center" style="height: 500px;width: 170px;" >
		<table width="97%" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" width="4px"><img src="<?=base_url()?>assets/imgs/menu-left.jpg"></td>
			<td id="menu_center_gall" align="center" style="font-weight: bold;color: #FFFFFF;font-size: 14px;">Gallery Categories</td>
			<td valign="top" width="4px" align="left"><img src="<?=base_url()?>assets/imgs/menu-right.jpg"></td>
		</tr>
		<tr>
			<td colspan="3" align="left"><div style="height: 250px;width: 100%;background-color: #9CD8FC;font-size: 14px;">
				<ul style="margin-left: 15px;">
				<?php if(!empty($result)){
					foreach ($result as $item): 
				?>
				<li style="padding: 3px;"><a href="<?=base_url()?>gallery/categeory/<?=$item->id?>"><?=$item->catname?></a></li>
				<?endforeach;} ?>
				</ul>
			 </div>
			 <div style="margin-top: 5px;">
			 	<img src="<?=base_url()?>assets/imgs/add.jpg">
			 </div>
			 </td>
		</tr>
	</table>
	</td>
</tr>
<tr>
	<td colspan="3"   id="gal_middle" align="center" height="820"> 
		<div style="margin: 10px 0px 10px 0px">
		<img src="<?=base_url()?>assets/gallery/image<?=$image['0']->id?>.jpg" id="img">
		</div><?if(isset($this->session->flashdata('gallery'))){ ?>
		<div style="border: 1px solid blue;color: red"><?=$this->session->flashdata('gallery')?></div>
		<?php }?>
		<div style="margin: 10px 0px 10px 0px">
		<?=form_open('index.php/subhodaya/sendmail','name="telugu_send"') ?>
					<input type="hidden" name="url" value="<?=current_url()?>">
			
						<table align="center" width="500px" style="border: 1px solid #939393;">
							<tr>
								<td colspan='2' align="center"><div  id="gree_bar1"><?=$more['25']->matter?></div></td>
							</tr>
							<tr>
								<td width="25%" align="left" style="padding-left: 10px;"><?=$more['27']->matter?></td>
								<td align="left" width="75%"><input type="text" name="name" size="30"></td>
							</tr>
							<tr>
								<td align="left" width="25%" style="padding-left: 10px;"><?=$more['38']->matter?></td>
								<td align="left" width="75%"><input type="text" name="uemail" size="30"></td>
							</tr>
							<tr>
								<td width="150px" align="left" style="padding-left: 10px;"><?php if(isset($more['39'])){ echo $more['39']->matter;}?></td>
								<td align="left"><input type="text" name="fname" size="30"><?=form_hidden('type','Gallery')?></td>
							</tr>
							<tr>
								<td align="left" style="padding-left: 10px;"><?=$more['28']->matter?></td>
								<td align="left"><input type="text" name="email" size="30"></td>
							</tr>
							<tr>
								<td colspan="2" align="left" style="padding-left: 10px;"><input type="checkbox" id="checkboxId" onclick="javascript:checkboxClickHandler()" id="telugu_type" name="telugu_type">Type in telugu</td></tr>
				            <tr>
							<td align="center" colspan="2"><textarea style="height: 190px;width: 95%" name="description" id="transl2"></textarea></td>
							</tr>
							<tr>
								<td align="center" colspan="2"><input type="submit" name="send" value="Send"><input type="reset" ></td>
							</tr>
							</table>
						</form>
		</div>
	</td>
</tr>
<tr>
	<td valign="bottom" width="2px"><img src="<?=base_url()?>assets/imgs/body-bottomLeft.jpg"></td>
	<td id="gal_center-botom"  align="left" valign="bottom">
	<div style="text-align: left;float: left;width: 50%;text-align: left;float: left;width: 50%;padding-left: 3px;font-size: 14px;font-weight: bold;" >
					<? if(isset($links)):?>
						<?if(isset($links['prev'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['prev']?>/<?=$image['0']->parentid?>">Previous</a>						
					<?}endif; ?>
					</div>
					<div style="text-align: right;padding-right: 3px;font-size: 14px;font-weight: bold;margin-bottom: 6px;">
					<? if(isset($links)):?>
					<?if(isset($links['next'])){ ?>
						<a href="<?=base_url();?>gallery/content/<?=$links['next']?>/<?=$image['0']->parentid?>">Next</a>
					<?}endif; ?>
					</div>
	</td>
	<td valign="bottom" width="2px;"><img src="<?=base_url()?>assets/imgs/body-bottomRight.jpg"></td>
</tr>
</table>