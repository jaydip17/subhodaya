<script type="text/javascript" src="<?=base_url();?>assets/js/check.js">
</script>

<table align="center" width="300">
<thead>
   <h2 style="color:olive">Edit gallery categeory</h2>
   </thead>
<?= form_open('admin/gallery/editcategeory'); ?>
<tr>
<td>
categeory
</td>
<td>
<?=form_hidden('id',$cat[0]->id)?>
<?=form_hidden('parentid',$cat[0]->parentid)?>
<?=form_input('catname',$cat[0]->catname)?>
</td>
</tr>

<tr>
<td>
</td>
<td>
<?=form_submit('edit','edit');?>
</td>
</form>
</table>




