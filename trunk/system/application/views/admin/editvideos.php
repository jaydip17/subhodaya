<table align="center" width="300">
 
 <thead>
		<h2 style="color: black">edit video</h2>
	</thead>
<?=form_open_multipart( 'admin/videos/editvideo' );?>

   <tr>
		<td>Video name</td>
	   <td>
           <?=form_hidden ( 'video_cat_id', $videos[0]['video_cat_id'] )?>
           <?=form_hidden ( 'id', $videos[0]['id'] )?>
           <?=form_input ( 'name', $videos[0]['name'])?>
     </td>
	</tr>
		<tr>
		     <td>Number of views</td>
		     
		<td>
         <?=form_input ( 'no_of_views', $videos[0]['no_of_views'])?>
       </td>
	  </tr>
	   <tr>
	     <td>Rating</td>
	     <td><?=form_input('rating',$videos[0]['rating'])?></td>
	   </tr>
	  
	  <tr>
		<td></td>
		<td>
         <?=form_submit ( 'edit', 'edit' );?>
       </td>

	   </tr>
	</form>
    </table>