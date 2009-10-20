<center><?
if(isset($message) && !is_array($message) ) echo($message);
		if(isset($message))
		if(is_array($message) ) {
			foreach ($message as $mess){
				echo $mess['error'];
			}
		}?>
		</center>
<?=form_open_multipart('admin/videos/addvideo')?>
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
		<td><?=form_input('name');?></td>
	</tr> 
	<tr>
		<td>Video_Duration</td>
		<td><?=form_input('time');?></td>
	</tr>
	 
	 <tr>
		<td>Number_of_Views</td>
		<td><?=form_input('no_of_views');?></td>
	</tr>
	 
	 <tr>
		<td>Rating</td>
		<td><?=form_input('rating');?></td>
	</tr>
	 
	 <tr>
		<td>Insert_date</td>
		<td><?=form_input('insert_date');?></td>
	</tr>
	 
	<tr>
		<td>Video</td>
		<td><?=form_upload('video');?></td>
	</tr>
	<tr>
		<td>Preview_Image</td>
		<td><?=form_upload('image');?></td>
		<td>preferably 600 x 400</td>
	</tr>
	
	<tr>
		<td>Active</td>
		<td align="left"><?=form_checkbox('active','1') ?></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<? echo form_submit('submit','submit');?>
		</td>
	</tr>
	
	
	
</table>
<?=form_close() ?>