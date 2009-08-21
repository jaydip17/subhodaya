
<table align="center" width="300">
<thead><h2 style="color:olive">Edit gallery image</h2></thead>
<?= form_open('admin/gallery/editImage'); ?>
<tr>
<td>
image title
</td>
<td>
<?=form_hidden('parentid',$img[0]->parentid)?>
<?=form_hidden('id',$img[0]->id)?>
<?=form_input('title',$img[0]->title)?>
</td>
</tr>

<tr>
<td>
</td>
<td>
<?=form_submit('edit','edit'); ?>
</td>

</tr>
</form>
</table>
