<script language="JavaScript" type="text/javascript">
<!--
var siteurl = "<?=base_url()?>";
var h;
var cid;
var errormsg_poll = "Please Select Your Option Before Voteing";
$(document).ready(function(){
	h=$("#qid").val();
	cid=$("#catid").val();
	$(".pollanswer").click(function(){
		var poll_ans = $(this).val();
		 $("#pollanswer").val(poll_ans);
		});
	$("#insertpoll").click(function(){
		
		var pollans = $("#pollanswer").val();
		if(pollans!='')
		{
			//alert(h,cid,pollans);
			$.post(""+siteurl+"poll/insert",{ qid: h, cid: cid, ans:pollans },function(data){
				//alert(data);
				$(".result").replaceWith(data);
				$(".result").slideDown("slow");
				});
		}
		else
		{
			alert(errormsg_poll);
			}
	});
	
	});

-->
</script>
<div id="news_poll">
							<div id="news_window_title" style="color:#FE0002;">
								<div id="news_title_left_curve">
								</div>
								<div id="news_title_right_curve">
								</div>
								<div style="margin-top:4px;font-size: 12px;"><?=(isset($sub_heading)) ? $sub_heading : ''?></div>
							</div>
							<div id="news_window_content">
							<div></div>
								<div id="question" style="font-size: 12px;padding-top: 4px;">
								<?=(isset($details[0]->question)) ? $details[0]->question : ''?>
								</div>
								
								<div id="options" align="left" style="font-size:12px; margin-left:10px">
											<?php if(isset($details[0]->id)){?>
											<input type="hidden" id="qid" name="qid" value="<?=$details[0]->id?>"/>
											<input type="hidden" id="catid" name="catid" value="<?=$details[0]->cat_id?>"/>
											<input type="hidden" id="pollanswer" name="pollanswer" value=""/>
											<?php }
											$data1 = array(
												'name'	=> 'answer',
												'value'	=>	'a',
												'checked'     => FALSE,
												'class'	=>	'pollanswer',
											);
											$data2 = array(
												'name'	=> 'answer',
												'value'	=>	'b',
												'checked'     => FALSE,
												'class'	=>	'pollanswer',
											);
											$data3 = array(
												'name'	=> 'answer',
												'value'	=>	'c',
												'checked'     => FALSE,
												'class'	=>	'pollanswer',
											);
											?>
										<?=form_radio($data1) ?><?=(isset($yes)) ? $yes : ''?>
											<br />
										<?=form_radio($data2) ?><?=(isset($no)) ? $no : ''?>
										<br />
										<?=form_radio($data3) ?><?=(isset($yes_no)) ? $yes_no : ''?>
								</div>
								<div class="result" style="font-size: 10px;color: black;"></div>
								<div style="width:100%; height:40px; ">
								
									<div style="float:left; height:46px;margin-left:5px;margin-top:0px; width:100px;font-size:11px;color:#FF0000" align="left">
										<div style="margin-top:5px">
										<div id=""><a HREF="javascript:void(0)" onclick="window.open('<?=base_url();?>poll/yes_result/<? if(isset($details['0'])){echo $details['0']->id;}?>', 'welcome','width=300,height=200')" style="color: red;">View Result</a></div>
										<!-- <div id=""><a HREF="javascript:void(0)" onclick="window.open('<?=base_url();?>poll/yes_result/<?=$details['0']->id?>', 'welcome','width=300,height=200')" style="color: red;">Yesterday's Poll</a></div>
									--></div>
									</div>
									<div style="float:left;height:46px; width:47px">
											<img style="margin:0px 0px 0px 0px;cursor: pointer;" src="<?=base_url()?>assets/image/vote.png" border="0" id="insertpoll">
									</div>
								</div>
								
								<div style="height: 15px;text-align: right;font-size: 11px;padding-right: 5px;"><a href="<?=base_url()?>home_poll/details">More</a></div>
								</div>
							
							<div id="news_window_footer" style="height:9px;width:100%" align="left">
								
								<div id="news_footer_left_curve" >
								</div>
								<div id="news_footer_right_curve">
								</div>
							</div>
						</div>