<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="430" valign="top"  align="left">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
       		<td  valign="top">
	       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="460" height="4" /></td></tr>
	            </table>
                 <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                    <tr><td width="100%" height="310" valign="top" align="left" class=" yui-skin-sam" >
                          <div id="demo" class="yui-navset" style="color: #EDF5FF;">
	    					<ul class="yui-nav">
							        <li class="selected"><a href="#tab1"><em>Politics</em></a></li>
							        <li><a href="#tab2"><em>Games</em></a></li>
							        <li><a href="#tab3"><em>cinemas</em></a></li>
									<li><a href="#tab3"><em>videos</em></a></li>
	    					</ul>            
    						<div class="yui-content">
							 <div id="tab1"><img src="<?=base_url();?>assets/imgs/move-img4.jpg" align="top"></img>
							        	</div>
							        <div id="tab2">
							        <img src="<?=base_url();?>assets/imgs/mov-img2.jpg" align="top"></img>
							        </div>
							        <div id="tab3">
							        <img src="<?=base_url();?>assets/imgs/mov-img3.jpg" align="top"></img>
							        </div>
									<div id="tab3">
									<img src="<?=base_url();?>assets/imgs/mov-img.jpg" align="top"></img>
									</div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="460"/></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="245" valign="top"><img src="<?=base_url();?>assets/imgs/add-img.jpg"></img></td>
          <td width="185" align="center" valign="top" rowspan="3">
			<table width="100%" style="border:1px solid #3789C3;">
			<tr>
				<td style="border:1px solid #3789C3;height: 25px;" id="news_heading">Latest Gallery</td>
			</tr>
			<tr>
				<td align="center">
						<table style="padding-left: 5px" >
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					</table>
				</td>
			</tr>
			</table>
			<div style="padding-top: 5px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CD8FC" width="100%">
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/imgs/add-img1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/add-img2.jpg"></div></td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/2.jpg"></div></td>
				</tr>
			</table>
			</div>
			<div style="width:100%"><img src="<?=base_url();?>assets/imgs/3.jpg" style="padding: 4px;"></div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
        
          		<table width="100%" cellspacing="10" height="520px" >
          			<tr>
          				<td width="450" style="border: 1px solid #3789C3;"  valign="top">
          				 <div style="width:100%;"id="news_heading"><span id="newsheading"><?=$news['0']->news_cat?></span>
          				 <? $count=1; foreach($news as $row): ?>
          				 <span id="changeview">Change View:<button onclick="loadNews('<?=base_url()?>newslist/listview/<?=$row->type?>')">get</button>
          				 <button onclick="loadNews('<?=base_url()?>newslist/thumbview/<?=$row->type ?>')">get1</button></span>
          				 <? if($count==1){
          				 	break;
          				 }
          				 endforeach;	 
          				 	?>
          				 </div>
          				 <div id="news_content">
    						<!--<ul>
    						<? foreach ($news as $row): ?>
    						<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><? echo $row->heading;?></a></li>
    						<? endforeach; ?>
    						<div style="padding-top: 400px;padding-left: 250px"><? echo $pagination; ?></div>
    						</ul>
          				 --></div>
          				</td>
          				<td style="border: 1px solid #3789C3;" valign="top">
          				 <div style="width:100%;" id="news_heading"></div>
          				  <div >
          				 	<ul>
          					<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          					<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          					<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	<li>Rastriya Varthalu</li>
          				 	
          				 </ul>
          				 </div>

          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="5" valign="top" id="botomtop"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top"  id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.gif" style="margin:4px 0px 0px 0px;"></img></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
        </tr>
        <tr>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser"><img src="<?=base_url();?>assets/imgs/ys-img.jpg">
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser"><img src="<?=base_url();?>assets/imgs/ys-img.jpg"></td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="109" /></td>
          <td valign="top" id="botom-ser">dshfgjh</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="109" /></td>
        </tr>
    </table>