<div style="width: 100%">
<div style="float: left;width: 640px;">
	<div id="poll_div" style="height:43px;">Home >> polls</div>
	<?php $count=1; foreach ($poll as $question):?>
	<div id="poll_div" style="height: 160px;font-size: 13px;">
		<div style="padding-left: 20px;">
		<div style="color: #BEBFB8;padding-left: 10px;"><?echo  $question->date = date("l, F, Y");?></div>
			<table cellspacing="8">
				<tr><td colspan="3" style="color: #483D8B"><?=$count?>.&nbsp;&nbsp;<?=$question->question?>&nbsp;&nbsp;<span><?=$question->views ?></span></td></tr>
				<tr>
					<td width="86px"><?=$this->lang->line('yes')?></td>
					<td width="200px">
					<? for($i=0;$i<=$question->yes;$i++){ ?>
					<img src="<?=base_url()?>assets/imgs/result4.png" border="0" style="float:left">
					<? } ?>
					</td>
					<td><?=number_format($question->yes, 2, '.', '');?>%</td>
				</tr>
				<tr>
					<td width="86px"><?=$this->lang->line('no')?></td>
					<td width="200px">
					<? for($i=0;$i<=$question->no;$i++){ ?>
					<img src="<?=base_url()?>assets/imgs/result4.png" border="0" style="float:left">
					<? } ?>
					</td>
					<td><?=number_format($question->no, 2, '.', '');?>%</td>
				</tr>
				<tr>
					<td width="86px"><?=$this->lang->line('yes_no')?></td>
					<td  width="200px">
					<? for($i=0;$i<=$question->yn;$i++){ ?>
					<img src="<?=base_url()?>assets/imgs/result4.png" border="0" style="float:left">
					<? } ?>
					</td>
					<td><?=number_format($question->yn, 2, '.', '');?>%</td>
				</tr>
			</table>
		</div>
	</div>
	<?php $count++; endforeach;?>
	<div style="text-align: center;"><?=$pagination?></div>
</div>
<div style="float: right;width: 313px;border: 1px;text-align: left;">
	<img src="<?=base_url()?>assets/home_images/ads/right_ad.jpg">
	<div style="text-align: left;margin-right: 40px;"><div id="content_left"><?=$this->lang->line('cini_news')?></div></div>
		<div style="text-align: left;">
		<ul style="padding-top: 35px;">
		<?php foreach ($active_news as $row):?>
			<li><a href=""><?=$row->heading?></a></li>
			<?php endforeach;?>
		</ul>
		</div>
	<img src="<?=base_url()?>assets/home_images/ads/mahila_ad2.jpg" width="304px">
</div>
</div>