<link href="<?=base_url();?>assets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="420" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="500">
		       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
		     			<tr><td height="4" valign="bottom"><!--<img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="500" height="4" />--></td></tr>
		            </table>
	                <table width="100%"  border="0"  style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;" cellpadding="0" cellspacing="0">
	                    <tr><td height="360"><?=$videoplayer?></td>
	                    </tr>
	                </table></td></tr>
	                <tr><td><!--<img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="500"/>--></td></tr>
         </table>
         </td>
     </tr>
     </table>
     </td>
     <td  valign="top" align="center" height="370">
        <table width="240" height="370" align="center" style="border:1px solid #0872BC;cellspacing:0px cellpadding:0px;">
            <tr>
           <td colspan="2"  style="border:1px solid #50BFC;height:25px; padding-top:0px;font-size:14px;font-weight:bold;text-align:center" id="video_heading"><?=$more['32']->matter ?></td>
            </tr>
            <?
            foreach($latestvideos->result() as $item ) {
            ?>          
           
           <tr>
           <td><div style="margin-left:15px;"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><div id="latevideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/image<?=$item->id?>_thumb.jpg" width="96"height="66"></a></div></td>
           <td><div id="li-vi"><?=$item->insert_date?><br/><?=$item->name?><br/><span style="color:#FF6507;"><?=$item->no_of_views?> views</span><br/><?=$more['36']->matter?>:<span style="color:#FF6507;"><?=$item->rating?></span></div></td>
          </tr>
          <?} ?> 
	      
	      
          <tr>
          <td colspan="2" align="right" id="vi_heading" class="hiname"><!--<a href="#"><?=$more['0']->matter?></a>--></td>
          </tr>
        </table>
        
     </td>
   
       <td  align="center" valign="top">
		<table width="185" style="border:1px solid #50BCFC;">
			<tr>
				<td align="center"><div><img src="<?=base_url();?>assets/ads/Videos_page1.jpg"></div></td>
			</tr>
			    <tr>
			    <td align="center"><div><img  src="<?=base_url();?>assets/ads/Videos_page2.jpg"></div></td>
			    </tr>
			    
			</table>
			 
          </td>
         </tr>
  </table> 
          
          <table>
          
          <tr>
         
          <td  valign="top" height="375px" width="660px">
            <table border="0" align="left" style="margin-top:20px; margin-right:5px;" width="100%" cellspacing="0" cellpadding="0">
            <tr>
            <td><img src="<?=base_url();?>assets/imgs/hot-video-topline.jpg"></td>
            </tr>
            
            <tr ><td><div style="height:375px; width:660px;border-left:1px solid #9D9D9D; border-right:1px solid #9D9D9D;"> 
            <table width="100%" style="margin-left:4px margin-right:2px;padding-left:3px;">
                <div id="hotvideo"><?=$more['33']->matter ?><!--<span style="padding-left:300px;">Search for Videos:<input type="text" name="search" value="" size="13"></span></div>-->
          
            <tr>
               <td  style="width:640px; padding-left:4px;"> 
             
             
<div id="TabbedPanels1" class="TabbedPanels">

  <ul class="TabbedPanelsTabGroup">
  <?foreach($videocategeories->result() as $item){ ?>
   <li class="TabbedPanelsTab" onclick="javascript:loadNews('<?=$item->id?>','<?=base_url()?>videolist/videoview/<?=$item->id?>')"><?=$item->name ?></li>
  <?}?>
  </ul>
  <div class="TabbedPanelsContentGroup" >
 <?php  foreach($videocategeories->result() as $key=>$item){
 
  $count=1;?>
    <div class="TabbedPanelsContent" id="div<?=$item->id?>" >     
           </div>
     

   
  
  
    <?php } ?> 
       
    
  
               
      
      </div>   
                
       </div>  
                          
            </td>
           
            </tr>
            
             </table>   
           </div></td></tr>
                 
           <tr>
           <td><img src="<?=base_url();?>assets/imgs/hot-video-bottomline.jpg"></td>
           </tr>
          </table>
          	        
          	</td>
          	
          	<td align="left" valign="top" rowspan="2" style="height:570px;" >
          	 <table border="0" style="margin-top:18px;margin-left:15px;" cellspacing="0" cellpadding="0"  >
          	    <tr>
          	    <td style="height:4px; width:241;"></td>
          	    </tr>
          	     <tr><td>
          	     <div id="top-videocure"></div>
          	     
          	     <div style="height:558px;border-left: 1px solid #9D9D9D; border-right: 1px solid #9D9D9D;" id="backimg">
          	     
          	         <table width="95%" style="margin-left:6px;margin-right:4px; margin-top:6px;">
          	          <tr style="height:25px;">
          	       			<td colspan="2" id="topvideo" style=padding-top:0px;"><?=$more['34']->matter?></td>
          	          <tr>
          	          
          	          <!--<tr>
          	            <td>Display:</td>
          	            <td><input type="text" name="Today" value="Today"></td>
          	          </tr>
          	          --></table> 
          	          
          	            <table width="95%" style="margin-left:6px;margin-right:4px; margin-top:7px;">
          	            
          	            <?
          	            foreach($topviewedvideos->result() as $item){  
          	            ?>
          	          <tr>
          	            <td><div style="padding-top:5px;"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><div id="topvideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/image<?=$item->id?>_thumb.jpg"></div></a></td>
          	            <td  valign="top" id="topvi"><?=$item->name?><br/><?=$item->insert_date?><br/><span style="color:#FF6507;"><?=$item->no_of_views?> Views</span><br/><div id="topimg" style=height:15px;width:101px;padding-left:4px;margin-top:4px;padding-top:2px;"><?=$more['36']->matter?>:<span style="color:#FF6507;"> <?=$item->rating?></span></div></td>
          	            </tr>
          	          <?}?><!-- 
          	           
          	            <tr>
          	               <td colspan="2" align="right" style="padding-top:15px;"class="hiname"><a href="#"><?=$more['0']->matter?></td>
          	              </tr>
          	             
          	           --></table>
          	            
          	                  
          	    </div></td></tr>
          	       <tr>
          	       <td style="height:10px;width:242px;background-image: url('<?=base_url();?>assets/imgs/bottom-video-line.jpg'); background-repeat: no-repeat;"></td>
          	     </tr> 
          	     
          	 </table>
          	
          	</td>
          </tr>
         
              
            <tr>
             <td  valign="top" style="height:150px; width:660px;">
               <table  border="0" width="660" align="left" style="margin-top:10px;height:150px;" cellspacing="0" cellpadding="0">
                  <tr>
                    <td ><img src="<?=base_url();?>assets/imgs/all-video-topline.jpg"></td>
                  </tr>
                  <tr ><td><div style="height:142px;width:660px;border-left: 1px solid #9D9D9D; border-right: 1px solid #9D9D9D;">
                         <div id="allvi"><?=$more['35']->matter?></div>
                           
                          <div id="divallimg" style="width:660px;">
                          
                         
                         
                        
                   </div></td></tr>
                      <tr>
                  <td style="height:10px;width:662px;text-align:right;background-image:url('<?=base_url();?>assets/imgs/all-video-bottomline.jpg');background-repeat:no-repeat;"></td>
                 </tr>        
               </table>
            </td>
            </tr>   
        
          </table>

  
