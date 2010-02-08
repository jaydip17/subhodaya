<script language="JavaScript" type="text/javascript">
<!--

function getsupport()
{
	 var x=document.getElementById("select").value;

	 if(x=="")
	 {
		 alert('Select your sunsign');
	 }else{
		 window.location ='astrolagy/details/'+x;
	 } 
}

-->
</script> 
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
										<?=form_open_multipart('astrolagy/details','supportform')?>
												<?php
												$js = 'id="select" ';
												 echo form_dropdown('rasi',$rasi,0,$js);
												?>
											<table cellspacing="0" cellpadding="0" border="0" style="margin-top:10px">
												<tr height="30px">
													<td width="70px"><a href="javascript:getsupport()" style="color:#000;"><?=$this->lang->line('day');?></a></td>
													<td width="70px"><a href="javascript:getsupport()" style="color:#000;"><?=$this->lang->line('week');?></a></td>
												</tr>
												<tr height="30px">
													<td width="70px"><a href="javascript:getsupport()" style="color:#000;"><?=$this->lang->line('month');?></a></td>
													<td width="70px"><a href="javascript:getsupport()" style="color:#000;"><?=$this->lang->line('year');?></a></td>
												</tr>
											</table>
											<?=form_close();?>
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