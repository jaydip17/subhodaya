<?=form_open(base_url()."/admin/adds/add_change") ?>
<table cellpadding="7">

<tr>
	<td>Add_id</td>
	<td>Add_name</td>
	<td>preview image</td>
</tr>
<tr>
	<td align='center'>1</td>
	<td ><?=anchor('admin/ads/change_ad/Home1','Home1'); ?>(Ex:219x196)</td>
	<td><img src="<?=base_url();?>assets/ads/Home1.jpg"></td>
</tr>
<tr>
	<td align='center'>2</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Home2','Home2'); ?>(Ex:217x117)</td>
	<td><img src="<?=base_url();?>assets/ads/Home2.jpg"></td>
</tr>
<tr>
	<td align='center'>3</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Home3','Home3');?>(Ex:199x177)</td>
	<td><img src="<?=base_url();?>assets/ads/Home3.jpg"></td>
</tr>
<tr>
	<td align='center'>4</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Home4','Home4');?>(Ex:199x179)</td>
	<td><img src="<?=base_url();?>assets/ads/Home4.jpg"></td>
</tr>
<tr>
	<td align='center'>5</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/News1','News1');?>(Ex:232x315)</td>
	<td><img src="<?=base_url();?>assets/ads/News1.jpg"></td>
</tr>
<tr>
	<td align='center'>8</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Cinema1','Cinema1');?>(Ex:237x151)</td>
	<td><img src="<?=base_url();?>assets/ads/Cinema1.jpg"></td>
</tr>
<tr>
	<td align='center'>8</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Cinema2','Cinema2');?>(Ex:237x151)</td>
	<td><img src="<?=base_url();?>assets/ads/Cinema2.jpg"></td>
</tr>
<tr>
	<td align='center'>6</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Side_right1','Side_right1');?>(Ex:170x129)</td>
	<td><img src="<?=base_url();?>assets/ads/Side_right1.jpg"></td>
</tr>
<tr>
	<td align='center'>7</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Side_right2','Side_right2');?>(Ex:170x129)</td>
	<td><img src="<?=base_url();?>assets/ads/Side_right2.jpg"></td>
</tr>
<tr>
	<td align='center'>6</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Side_right3','Side_right3');?>(Ex:224x227)</td>
	<td><img src="<?=base_url();?>assets/ads/Side_right3.jpg"></td>
</tr>

<tr>
	<td align='center'>9</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Videos_page1','Videos_page1');?>(Ex:176x178)</td>
	<td><img src="<?=base_url();?>assets/ads/Videos_page1.jpg"></td>
</tr>
<tr>
	<td align='center'>10</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Videos_page2','Videos_page2');?>(Ex:176x180)</td>
	<td><img src="<?=base_url();?>assets/ads/Videos_page2.jpg"></td>
</tr>
<tr>
	<td align='center'>11</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Greetings','Greetings');?>(Ex:312x338)</td>
	<td><img src="<?=base_url();?>assets/ads/Greetings.jpg"></td>
</tr>
<tr>
	<td align='center'>11</td>
	<td><?=anchor(base_url().'admin/ads/change_ad/Inner','Inner');?>(Ex:264x315)</td>
	<td><img src="<?=base_url();?>assets/ads/Inner.jpg"></td>
</tr>
</table>
<?=form_close(); ?>