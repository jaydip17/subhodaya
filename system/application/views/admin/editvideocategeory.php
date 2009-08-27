<table align="center" width="300">

<thead>
   <h2 style="color:black">Video categeory</h2>
   </thead>
   
 <?= form_open('admin/videos/editcategeory'); ?>  
 
<tr>
  <td>Categeory</td>
<?=form_hidden('id',$details[0]['id'])?>

<?=form_input('name',$details[0]['name'])?>
</td>
</tr>

<tr>
  <td></td>

<td>
  <?=form_submit('edit','edit');?>
</td>
</table>
