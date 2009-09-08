<script type='text/javascript'>
 	var messages = new Array();
// multi-dimensional arrays containing: 
// image and text for tooltip
// optional: bgColor and color to be sent to tooltip
<?
$count = 0;
foreach ($videosnames as $item ) {
	?>
messages[<?=$count?>] = new Array('<?=base_url ()?>assets/videos/image_preview/image<?=$item->id?>_thumb.jpg','<center>Views:<?=$item->no_of_views?>  time:<?=$item->time?></center>',"#FFFFFF");
	<?
	$count ++;
}
?>
</script>
 
 <table>
                       
                              <tr>
                             <?
                             $count=0;
                          $count_another=1;
                          foreach($videosnames as $item){
                          ?>
                           <td><div style="font-size:13px;color:#000000;padding-left:25px;padding-top:8px;text-decoration:none;text-align:left;"class="viname"><a href="<?=base_url();?>video/index/<?=$item->id?>" ><?=$item->name?></a></div></td>
      
                                 
                               <?
                               if($count_another==6)
                               {
                               $count_another=0;	
                            	echo "<tr></tr>";                             }
                          $count ++;
                          $count_another++;
                         }
                           ?>
                              </tr>
                                                    
                             </table>
                             <div style="text-align:right;margin-top:10px;"class="hiname"><a href="#"><?=$paginate_videosnames?></a></div>
                          
                          </div>
                           