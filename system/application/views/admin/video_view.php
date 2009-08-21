<?=form_open_multipart('admin/videos/addvideo')?>
<table>
	<tr>
		<th colspan='2' style="font-size: 16px">Videos</th>
	</tr>
	
	<tr>
	    <td>
		<? echo form_label('Select Categeory','video_cat_id');?>
		</td>
		
		<td><?echo form_dropdown('video_cat_id',$options);?></td>
	</tr>
	
	<tr>
		<td><? echo form_label('Video Name','name');?></td>
		<td><?=form_input('name');?></td>
	</tr>
	<tr>
		<td><? echo form_label('Video Duration','time');?></td>
		<td><?=form_input('time');?></td>
	</tr>
	 
	 <tr>
		<td><? echo form_label('Number of Views','no_of_views');?></td>
		<td><?=form_input('no_of_views');?></td>
	</tr>
	 
	 <tr>
		<td><? echo form_label('Rating','rating');?></td>
		<td><?=form_input('rating');?></td>
	</tr>
	 
	 <tr>
		<td><? echo form_label('Date','insert_date');?></td>
		<td><?=form_input('insert_date');?></td>
	</tr>
	 
	<tr>
		<td><? echo form_label('Video','video');?></td>
		<td><?=form_upload('video');?></td>
	</tr>
	<tr>
		<td><? echo form_label('Preview Image','image');?></td>
		<td><?=form_upload('image');?></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<? echo form_submit('submit','upload');?>
		</td>
	</tr>
</table>
<?=form_close() ?>