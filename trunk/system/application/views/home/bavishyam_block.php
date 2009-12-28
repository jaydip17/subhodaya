	<div id="ardhikam" align="left">
							<div id="sub_window_title_tab" >
								<div id="title_left_curve">
								</div>
								<div id="title_right_curve">
								</div>
								<div id="special"><?=(isset($heading)) ? $heading: ''?></div>
							</div>
							<div id="sub_window_content" class="ardikam">
								<div id="" style="width:98%; height:135px" align="left" >
									<div style="color:#1B1B8D;font-weight: bold;font-size: 12px;" align="center"><?=$this->lang->line('select_rasi');?></div>
									<div style="margin-top:5px">
									<div id="panchangam_img">
										<a href="<?=base_url()?>astrolagy"><img style="float:left; margin:4px 20px 2px 4px;" src="<?=base_url()?>assets/image/panchangam.jpg"></a>
									</div>
										<div id="panchangam_story">
											<div id="">
											<form action="">
												<select name="cars">
													<option value="volvo"><?=$this->lang->line('rasi_palam');?></option>
													<?php foreach ($rasi as $row):?>
													<option value="<?=$row->id?>"><?=$row->astrolagy_type?></option>
													<?php endforeach;?>
												</select>
											</form>
											</div>
											<table cellspacing="0" cellpadding="0" border="0" style="margin-top:10px">
												<tr height="30px">
													<td width="70px"><a href="<?=base_url()?>astrolagy/1" style="color:#000;"><?=$this->lang->line('day');?></a></td>
													<td width="70px"><a href="<?=base_url()?>astrolagy/2" style="color:#000;"><?=$this->lang->line('week');?></a></td>
												</tr>
												<tr height="30px">
													<td width="70px"><a href="<?=base_url()?>astrolagy/3" style="color:#000;"><?=$this->lang->line('month');?></a></td>
													<td width="70px"><a href="<?=base_url()?>astrolagy/4" style="color:#000;"><?=$this->lang->line('year');?></a></td>
												</tr>
											</table>
											
										</div>
										</div>
										
										
								</div>
								
							</div>
							<div id="sub_window_footer">
								<div id="footer_left_curve" >
								</div>
								<div id="footer_right_curve">
								</div>
							</div>
						</div>