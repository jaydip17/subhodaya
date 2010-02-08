<script language="JavaScript" type="text/javascript">
<!--
function loadPoll()
{
	var siteurl = "<?=base_url()?>";
	var found_it;
	var error=false;
	var e=document.getElementsByName("answer");
	var h=document.orderform.qid.value;
	var cid=document.orderform.catid.value;
	for (var i=0; i < e.length; i++)
	   {
		if(document.orderform.answer[i].checked)
			{
				error=true;
				found_it = document.orderform.answer[i].value
				/*$.post(""+siteurl+"poll/insert/"+h+"/"+i+"/"+cid+"", function(data)){
					alert(data);
				});*/
			window.location ='poll/insert/'+h+'/'+i+'/'+cid;
			}
	   }
	   if(error==false){
		   alert('Please Select Your Option Before Voteing');
	   }
}
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
									<form method="post" name="orderform">
											<?php if(isset($details[0]->id)){?>
											<input type="hidden" name="qid" value="<?=$details[0]->id?>"/>
											<input type="hidden" name="catid" value="<?=$details[0]->cat_id?>"/>
											<?php }?>
										<?=form_radio('answer','a',FALSE) ?><?=(isset($yes)) ? $yes : ''?>
											<br />
										<?=form_radio('answer','b',FALSE) ?><?=(isset($no)) ? $no : ''?>
										<br />
										<?=form_radio('answer','c',FALSE) ?><?=(isset($yes_no)) ? $yes_no : ''?>
								</div>
								<?php  if(isset($_GET["psucc"])){
									$succ=$_GET["psucc"];
								}
								if(!empty($succ)){?>
									<font style="color: black;">successfully vote.</font>
								<?}
								?>
								<div style="width:100%; height:40px; ">
									<div style="float:left; height:46px;margin-left:5px;margin-top:0px; width:100px;font-size:11px;color:#FF0000" align="left">
										<div style="margin-top:5px">
										<div id=""><a HREF="javascript:void(0)" onclick="window.open('<?=base_url();?>poll/yes_result/<? if(isset($details['0'])){echo $details['0']->id;}?>', 'welcome','width=300,height=200')" style="color: red;">View Result</a></div>
										<!-- <div id=""><a HREF="javascript:void(0)" onclick="window.open('<?=base_url();?>poll/yes_result/<?=$details['0']->id?>', 'welcome','width=300,height=200')" style="color: red;">Yesterday's Poll</a></div>
									--></div>
									</div>
									<div style="float:left;height:46px; width:47px">
											<a href="" style="outline-style: none;"><img style="margin:0px 0px 0px 0px;" src="<?=base_url()?>assets/image/vote.png" border="0" onclick="loadPoll()"></a>
									</div>
								</div>
								<?=form_close()?>
								<div style="height: 15px;text-align: right;font-size: 11px;padding-right: 5px;"><a href="<?=base_url()?>home_poll/details">More</a></div>
								</div>
							
							<div id="news_window_footer" style="height:9px;width:100%" align="left">
								
								<div id="news_footer_left_curve" >
								</div>
								<div id="news_footer_right_curve">
								</div>
							</div>
						</div>