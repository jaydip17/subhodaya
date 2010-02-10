<center><?
if(isset($message) && !is_array($message) ) echo($message);
		if(isset($message))
		if(is_array($message) ) {
			foreach ($message as $mess){
				echo $mess['error'];
			}
		}?>
		</center>
		<div id="video_url_form">
  
  <div id="right">

  	 
    <div>
   
    <?php if(!isset($disable_form)) 
    		{	?> 
    <?=form_open('admin/videos/add_url','name=""');
    		}
    	
    $y_url = array(
    				'name'	=> 'youtube_url',
    				'id'	=> 'y_url',
    				'value' => '',
                    
    				);
    ?>
	
    <table>
	<tr>
		<th colspan='2' style="font-size: 16px">Videos</th>
	</tr>
	
	<tr>
	    <td>
		Select Categeory
		</td>
		
		<td><?echo form_dropdown('video_cat_id',$options);?></td>
	</tr>
	
	<tr>
		<td>Video_Name</td>
		<td><?=form_input('video_name');?></td>
	</tr> 
	 <tr>
		<td>Number_of_Views</td>
		<td><?=form_input('no_of_views');?></td>
	</tr>
	
	   	
	<!--  <tr>
		<td>Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>-->
	
	
	
	
</table>
     
	 <p><label for="video_cat">Paste You-Tube URL:</label>
	<?			
    echo form_input($y_url);
    	$submit['value'] = 'Add';
    	$submit['id'] = 'button';
    	if(isset($disable_form)) 
    		{
    $data = array(
              'name'        => 'event_id',
              'id'          => 'event_id',
              'value'       => $this->uri->segment(3),
    		  'type'		=> 'hidden',
              
            );?>
			</p>
			
			<?

echo form_input($data);
    	$submit['onclick'] = 'add_event_video()';
    	$submit['name'] = 'add_video';
    		}
    echo form_submit($submit);
    if(!isset($disable_form)) 
    		{
    echo form_close() ;
    		}?>
    		<span id="loading_img2" class="ajaxloading_icon1" style="float:left;margin: 2px 0px 0px 5px;"></span>
    </div>
  </div>
</div>


<?=form_close() ?>