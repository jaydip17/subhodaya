<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
}
</style>
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
                    <tr><td height="310" valign="top" align="left" class=" yui-skin-sam" >
                     <div class=" yui-skin-sam" style="width: 459px;" >
                      		<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em><?php if(isset($active_news1['0'])){echo $active_news1['0']->cinema_type;}?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em><span id="telugufont"><?php if(isset($active_news2['0'])){echo $active_news2['0']->cinema_type;}?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em><span id="telugufont"><?php if(isset($active_news3['0'])){echo $active_news3['0']->cinema_type;}?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab4"><em><span id="telugufont"><?php if(isset($active_news4['0'])){echo $active_news4['0']->cinema_type;}?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" >
							        <div id="tab1"><p>
							        		<div style="height:235px;" id="telugufont1">
							        			<?if(isset($active_news1['0'])){
							        			if(file_exists("./assets/cinema/cine_img".$active_news1['0']->id."_thumb.jpg")){?>
          				 						<a href="<?=base_url();?>cinema/inner/<?=$active_news1['0']->id?>"><img src="<?=base_url();?>assets/cinema/cine_img<?=$active_news1['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;"  border="0"></img></a>
          				 						<?} ?>
          				 						<font id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><?php echo $active_news1['0']->heading;?></a></font><br>
          				 						<?php echo $active_news1['0']->summary;?>
          				 						<ul id="mainnews">
          				 						<?
          											$count=0; foreach($active_news1 as $row):
          						 					 if($count==0)
          											{
	          											$count++;
	          											continue;
          											} ?>
          											<li style="padding: 2px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading ?></a></li>
          				 							<? if($count==4){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
							          					?>
							          				 </ul>
							          				 <?} ?>
          				 						</div>
          				 						<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?if(isset($active_news1['0'])){ echo $active_news1['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        	</p></div>
							        <div id="tab2"><p>
							        		<div style="height:235px;" id="telugufont1">
							        		<?if(isset($active_news2['0'])){
							        		if(file_exists("./assets/cinema/cine_img".$active_news2['0']->id."_thumb.jpg")){
							        		?>
							        		<a href="<?=base_url();?>cinema/inner/<?=$active_news2['0']->id?>"><img src="<?=base_url();?>assets/cinema/cine_img<?=$active_news2['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;"  border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$active_news2['0']->id?>"><?=$active_news2['0']->heading?></a></div>
							        		<?php echo $active_news2['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news2 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?=$row->heading?></a></li>
							        			<? if($count==4){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
							          			?>
							        			</ul>
							        			<?} ?>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?if(isset($active_news2['0'])){ echo $active_news2['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        </p></div>
							        <div id="tab3"><p>
							        	<div style="height:235px;" id="telugufont1">
							        	<?if(isset($active_news3['0'])){
							        	if(file_exists("./assets/cinema/cine_img".$active_news3['0']->id."_thumb.jpg")){
							        	?>
							        		<a href="<?=base_url();?>cinema/inner/<?=$active_news3['0']->id?>"><img src="<?=base_url();?>assets/cinema/cine_img<?=$active_news3['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;" border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews">
							        		
							        		<a href="<?=base_url();?>cinema/inner/<?=$active_news3['0']->id?>"><?=$active_news3['0']->heading?></a></div>
							        		<?php echo $active_news3['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news3 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
							        			<? if($count==4){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
							          			?>
							        			</ul>
							        			<?} ?>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?if(isset($active_news3['0'])){ echo $active_news3['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
							        </p></div>
									<div id="tab4"><p>
										<div style="height:235px;" id="telugufont1">
										<?if(isset($active_news4['0'])){
										if(file_exists("./assets/cinema/cine_img".$active_news4['0']->id."_thumb.jpg")){
										?>
							        		<a href="<?=base_url();?>cinema/inner/<?=$active_news4['0']->id?>"><img src="<?=base_url();?>assets/cinema/cine_img<?=$active_news4['0']->id?>_thumb.jpg" style="float: left;padding: 2px 19px 2px 1px;text-align: left;text-align: justify;" border="0"></img></a>
							        		<?} ?>
							        		<div id="mainnews">
							        		<a href="<?=base_url();?>cinema/inner/<?=$active_news4['0']->id?>"><?=$active_news4['0']->heading?></a></div>
							        		<?php echo $active_news4['0']->summary;?>
							        			<ul id="mainnews">
							        			<?php
							        			$count=0;
							        			 foreach ($active_news4 as $row):
							        			 if($count==0){
							        			 	$count++;
							        			 	continue;
							        			 }
							        			 ?>
							        				<li style="padding: 1px;"><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
							        			<? if($count==4){
							          						break;
							          					}else{
							          						$count++;
							          					}
							          					endforeach; 
							          					if($count==0){
							          						echo 'No data found';
							          					}
							          			?>
							        			</ul>
							        			<?} ?>
							        		</div>
							        		<div id="more-news-div" style="padding-right: 2px;"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?if(isset($active_news4['0'])){ echo $active_news4['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
									</p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div> 
							</td></tr></table>
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
			<div style="width:100%"><!--<img src="<?=base_url();?>assets/imgs/3.jpg" style="padding: 4px;">--></div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
        
          		<table width="100%" cellspacing="10" height="520px" >
          			<tr>
          			<!--<?php print_r($result);?>
          				--><td width="450" style="border: 1px solid #3789C3;"  valign="top">
          				 <div style="width:100%;"id="news_heading" ><div id="newsheading" style="width:250px;float: left; "><?php if(isset($result['0'])){echo $result['0']->cinema_type;}?></div>
          				 <?if(!empty($result)){ 
          				 $count=0; foreach($result as $row): ?>
          				 <div id="more-news-div" >Change View:<img src="<?=base_url();?>assets/imgs/LIN.png" onclick="loadNews('<?=base_url()?>cinemalist/listview/<?=$row->type?>')"/>
          				 <img src="<?=base_url();?>assets/imgs/FUL.png" onclick="loadNews('<?=base_url()?>cinemalist/thumbview/<?=$row->type ?>')"/></div>
          				 <? if($count==0){
          				 	break;
          				 }
          				 endforeach;	 
          				 }else{
          					echo 'No data found';
          				 }
          				  ?>
          				 </div>
          				 <div id="news_content">
          				 <img src="<?=base_url();?>assets/imgs/loading3.gif"></img>
    						</div>
          				</td>
          				<td style="border: 1px solid #3789C3;" valign="top">
          				 <div style="width:100%;" id="news_heading" align="center"><span id="newsheading"><?=$more['29']->matter?></span></div>
          				  <div >
          				 	<ul id="mainnews">
          				 	<?php $count=0;
          				 	foreach ($active_news as $row):?>
          					<li style="padding-top: 2px;"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          				 	<?php if($count==19){
          				 		break;
          				 	}else {
          				 		$count++;
          				 	}
          				 	if($count==0)
          				 	echo 'No data found';
          				 	endforeach;
          				 	?>
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
          <td width="295" valign="middle" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?=$more['7']->matter?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="middle" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?php if(isset($sahithi_cat['1'])) { echo $sahithi_cat['1']->cat_name ;}?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="middle"  id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" align="middle"></img><span id="newsheading"><?php if(isset($sahithi_cat['3'])) { echo $sahithi_cat['3']->cat_name ;}?></span></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
        </tr>
        <tr>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="120" /></td>
          <td valign="top" id="botom-ser" >
          <div style="height: 100px;">
           <? if(!empty($greetings4)){
           if(file_exists("./assets/greetings/gree_img".$greetings4['0']->id."_thumb.jpg")){ ?>
          		<a href="<?=base_url()?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->id;}?>"><img src="<?=base_url()?>assets/greetings/gree_img<?php if(isset($greetings4['0'])) {echo $greetings4['0']->id;}?>_thumb.jpg" style="padding: 1px 1px 1px 1px;float: left;" border="0"/></a>
          		<?} ?>
          		<div id="mainnews"><a href="<?=base_url()?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->id;}?>"><?php if(isset($greetings4['0'])) {echo $greetings4['0']->name;}?></a></div>
          		<?php if(isset($greetings4['0'])) {echo $greetings4['0']->summery;}?>
          </div>
          		<div id="more-news-div"><a href="<?=base_url()?>greetings/content/<?php if(isset($greetings4['0'])) {echo $greetings4['0']->id;}?>"><?=$more['0']->matter?></a></div><?} ?>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="120" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="120" /></td>
          <td valign="top" id="botom-ser">
           <div style="height: 100px;">
           <? if(!empty($sahithi)){
           if(file_exists("./assets/sahithi/news_img".$sahithi['0']->id."_thumb.jpg")){ ?>
          		<a href="<?=base_url()?>sahithi/sahithidetails/<?php if(isset($sahithi['0'])) { echo $sahithi['0']->id;} ?>"><img src="<?=base_url()?>assets/sahithi/news_img<?php if(isset($sahithi['0'])) { echo $sahithi['0']->id;} ?>_thumb.jpg" style="padding: 1px 1px 1px 1px;float: left;" border="0"/></a>
          		<?} ?>
          		<div id="mainnews"><a href="<?=base_url()?>sahithi/sahithidetails/<?php if(isset($sahithi['0'])) { echo $sahithi['0']->id;} ?>"><?php if(isset($sahithi['0'])) { echo $sahithi['0']->heading;} ?></a></div>
          		<?php if(isset($sahithi['0'])) { echo $sahithi['0']->summary;} ?>
          </div>
          		<div id="more-news-div"><a href="<?=base_url()?>sahithi/sahithidetails/<?php if(isset($sahithi['0'])) { echo $sahithi['0']->id;} ?>"><?=$more['1']->matter?></a></div><?} ?>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="120" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="120" /></td>
          <td valign="top" id="botom-ser">dshfgjh</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="120" /></td>
        </tr>
    </table>