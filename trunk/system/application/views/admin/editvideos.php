<table align="center" width="300">
 
 <thead>
		<h2 style="color: black">edit video</h2>
	</thead>
<?=form_open_multipart( 'admin/videos/editvideo' );?>

   <tr>
		<td>Video name</td>
	   <td>
           <?=form_hidden ( 'video_cat_id', $videos_list[0]['video_cat_id'] )?>
           <?=form_hidden ( 'id', $videos_list[0]['id'] )?>
           <?=form_input ( 'video_name', $videos_list[0]['video_name'])?>
     </td>
	</tr>
		<tr>
		     <td>Number of views</td>
		     
		<td>
         <?=form_input ( 'no_of_views', $videos_list[0]['no_of_views'])?>
       </td>
	  </tr>
	   <tr>
	     <td>Youtube url id</td>
	     <td><?=form_input('video_id',$videos_list[0]['video_id'])?></td>
	   </tr>
	  
	  <tr>
		<td></td>
		<td>
         <?=form_submit ( 'edit', 'edit' );?>
       </td>

	   </tr>
	</form>
    </table>