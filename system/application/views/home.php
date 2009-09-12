<script type="text/javascript" src="<?=base_url()?>/assets/js/shubhodaya.js"></script>
<script type="text/javascript" >
function reload()
	 {
		 //document.getElementById('newsloading').style.display="none";
		 document.getElementById('newsletter').innerHTML="<img src='<?=base_url();?>assets/imgs/newsletter-img.jpg' onclick='show_subscribe()'/>";
		// document.getElementById('newsletters').style.display="";
		 //document.getElementById('subscribe').value="Subscribe here";
	 }
	 function subscribe(str) 
	{
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			   var address = document.getElementById('subscribe').value;
			   if(reg.test(address) == false) {
			      alert('Invalid Email Address');
				   return false;
				  }
	 if(document.getElementById('subscribe').value!="" && document.getElementById('subscribe').value!="Subscribe here")
		{
		//document.getElementById('newsletters').style.display="none";
		//document.getElementById('newsloading').style.display="";	
		subscribe_ajax(str,'<?=base_url()?>');
		setTimeout("reload()",3000);
		}
	}
	 
	 </script>
<script type="text/javascript">
<!--
function test()
{
	var uname = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	var url = '&username='+uname+'&password='+pass+'&type='+email;
	var attribures = '&height=400&width=500'; 
	document.getElementById('importcontacts').setAttribute('alt','<?=base_url()."admin/contacts/import?"?>'+url+attribures);
}
//-->
</script>
<style type="text/css">
	ul{
	list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
	padding-left: 20px;
	}
</style>
<table width="99%" height="99%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="389" valign="top" height="329"><table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td valign="top"><table width="0"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td  valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="389" height="4" /></td>
                      </tr>
                    </table>
                      <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="100%" height="310" valign="top" align="left" class=" yui-skin-sam" >
                          	<div id="demo" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							        <li class="selected"><a href="#tab1"><em style="padding: 5px 2px 0px 4px;"><span id="telugufont"><?=$more['10']->matter ?></span></em></a></li>
							        <li><a href="#tab2"><em style="padding:5px 4px 0px 25px;"><span id="telugufont"><?=$more['11']->matter ?></span></em></a></li>
							        <li><a href="#tab3"><em style="padding:5px 4px 0px 20px;"><span id="telugufont"><?=$more['4']->matter ?></span></em></a></li>
									<li><a href="#tab4"><em style="padding:5px 4px 0px 25px;"><span id="telugufont"><?=$more['8']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content">
    							<div id="tab1">
    							<div style="height: 175px;" id="telugufont1">
    							<? if(file_exists("./assets/news/news_img".$news_type7['0']->id."_thumb.jpg")){ ?>
    							<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['0'])){echo $news_type7['0']->id;}?>/<?=$news_type7['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$news_type7['0']->id?>_thumb.jpg" align="top" style="padding: 0px 18px 1px 2px;float: left;border: 0px;"></img></a>
    							<?} ?>
    									<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['0'])){echo $news_type7['0']->id;}?>/<?=$news_type7['0']->type?>"><?php if(isset($news_type7['0'])){echo $news_type7['0']->heading;}?></a></font><br>
							        	<font style="text-align: justify;"><?php if(isset($news_type7['0'])){echo $news_type7['0']->summary;}?></font>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?=$news_type7['0']->id?>/<?=$news_type7['0']->type?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
							        	<ul id="mainnews" >
								        	<li style="padding: 1px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['1'])){echo $news_type7['1']->id;}?>/<?=$news_type7['1']->type?>"><?php if(isset($news_type7['1'])){echo $news_type7['1']->heading;}?></a></li>
								        	<li style="padding: 1px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['2'])){echo $news_type7['2']->id;}?>/<?=$news_type7['2']->type?>"><?php if(isset($news_type7['2'])){echo $news_type7['2']->heading;}?></a></li>
								        	<li style="padding: 1px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['3'])){echo $news_type7['3']->id;}?>/<?=$news_type7['3']->type?>"><?php if(isset($news_type7['3'])){echo $news_type7['3']->heading;}?></a></li>
							        	</ul>
							        	</div>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/details/<?=$news_type7['0']->type?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	<div style="padding:5px 5px 5px 5px; border: 1px solid #D9EBF7; background-image: url(assets/imgs/123.jpg);background-repeat: repeat-x; height: 70px">
							        	<table width="100%" >
							        		<tr>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type7['4']->id."_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;border: 0px;" align="top" ></a>
							        			<?} ?>
							        				<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><?php if(isset($news_type7['4'])){echo $news_type7['4']->heading;}?></a></div>
							        				<div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div>
							        			</td>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type7['5']->id."_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;border: 0px;" align="top"></a>
							        			<?} ?>
							        			<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><?php if(isset($news_type7['5'])){echo $news_type7['5']->heading;}?></a></div>
							        			<div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        		</tr>
							        	</table>
							        	</div></div>
							        	
							        <div id="tab2">
							        	<div style="height: 175px;" id="telugufont1">
							        	<? if(file_exists("./assets/news/news_img".$news_type4['0']->id."_thumb.jpg")){ ?>
							        	<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['0'])){echo $news_type4['0']->id;}?>/<?=$news_type4['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['0'])){echo $news_type4['0']->id;}?>_thumb.jpg" align="top" style="padding: 0px 18px 1px 2px;float: left;border: 0px;"></img></a>
							        	<?} ?>
    									<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['0'])){echo $news_type4['0']->id;}?>/<?=$news_type4['0']->type?>"><?php if(isset($news_type4['0'])){echo $news_type4['0']->heading;}?></a></font><br>
							        	<font style="font-size: 14px;text-align: justify;"><?php if(isset($news_type4['0'])){echo $news_type4['0']->summary;}?></font>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?=$news_type4['0']->id?>/<?=$news_type4['0']->type?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
							        	<ul height="80px;" id="mainnews">
								        	<li style="padding: 2px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['1'])){echo $news_type4['1']->id;}?>/<?=$news_type4['1']->type?>"><?php if(isset($news_type4['1'])){echo $news_type4['1']->heading;}?></a></li>
								        	<li style="padding: 2px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['2'])){echo $news_type4['2']->id;}?>/<?=$news_type4['2']->type?>"><?php if(isset($news_type4['2'])){echo $news_type4['2']->heading;}?></a></li>
								        	<li style="padding: 2px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['3'])){echo $news_type4['3']->id;}?>/<?=$news_type4['3']->type?>"><?php if(isset($news_type4['3'])){echo $news_type4['3']->heading;}?></a></li>
							        	</ul>
							        	</div>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/details/<?=$news_type4['0']->type?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	
							        	<div style="padding:5px 5px 5px 5px; border: 1px solid #D9EBF7; background-image: url(assets/imgs/123.jpg);background-repeat: repeat-x; height: 70px">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type4['4']->id."_thumb.jpg")){ ?>
							        				<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;border: 0px;" align="top"></a>
							        			<?} ?>
							        			<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><?php if(isset($news_type4['4'])){echo $news_type4['4']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type4['5']->id."_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;border: 0px;" align="top"></a>
							        			<?} ?>
							        			<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><?php if(isset($news_type4['5'])){echo $news_type4['5']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        		</tr>
							        		
							        	</table>
							        	</div></div>
							        <div id="tab3">
							        <div style="height: 175px;" id="telugufont1">
							        	<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>_thumb.jpg" align="top" style="padding: 0px 18px 1px 2px;float: left;border: 0px;"></img></a>
							        	<?} ?>
    									<font id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>/<?=$cinema_type1['0']->type?>"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->heading;}?></a></font><br>
							        	<font style="font-size: 14px;text-align: justify;"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->summary;}?></font>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/inner/<?=$cinema_type1['0']->id?>/<?=$cinema_type1['0']->type?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
							        	<ul id="mainnews">
							        		<li style="padding: 2px"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['1'])){echo $cinema_type1['1']->id;}?>/<?=$cinema_type1['1']->type?>"><?php if(isset($cinema_type1['1'])){echo $cinema_type1['1']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['2'])){echo $cinema_type1['2']->id;}?>/<?=$cinema_type1['2']->type?>"><?php if(isset($cinema_type1['2'])){echo $cinema_type1['2']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['3'])){echo $cinema_type1['3']->id;}?>/<?=$cinema_type1['3']->type?>"><?php if(isset($cinema_type1['3'])){echo $cinema_type1['3']->heading;}?></a></li>
							        	</ul>
							        	</div>
							        	<div id="more-news-div"><a href="<?=base_url();?>news/details/<?=$cinema_type1['0']->type?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	
							        	<div style="padding:5px 5px 5px 5px; border: 1px solid #D9EBF7; background-image: url(assets/imgs/123.jpg);background-repeat: repeat-x; height: 70px">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
								        			<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['4']->id."_thumb.jpg")){ ?>
								        				<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<?=$cinema_type1['4']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 15px;width: 60px;border: 0px;" align="top"></a>
								        			<?} ?>
							        				<div id="mainnews1" style="height: 40px" ><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<?=$cinema_type1['4']->type?>"><?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<?=$cinema_type1['4']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(!empty($cinema_type1['5'])){ ?>
							        			<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['5']->id."_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 15px;width: 60px;border: 0px;" align="top"></a>
							        			<?} ?>
							        			<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div><?} ?></td>
							        		
							        		</tr>
							        		
							        	</table>
							        	</div></div>
									<div id="tab4">
									     <div style="height: 175px;" id="telugufont1">
							        	<? if(file_exists("./assets/mahila/news_img".$mahila_details_yoga['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->id;}?>"><img src="<?=base_url();?>assets/mahila/news_img<?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->id;}?>_thumb.jpg" align="top" style="padding: 0px 18px 1px 2px;float: left;border: 0px;"></img></a>
							        	<?} ?>
    									<font id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->id;}?>"><?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->heading;}?></a></font><br>
							        	<font style="font-size: 14px;text-align: justify;"><?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->summary;}?></font>
							        	<div id="more-news-div"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['0']->id?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
							        	<ul id="mainnews">
                                        <li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['1'])){echo $mahila_details_yoga['1']->id;}?>"><?php if(isset($mahila_details_yoga['1'])){echo $mahila_details_yoga['1']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['2'])){echo $mahila_details_yoga['2']->id;}?>"><?php if(isset($mahila_details_yoga['2'])){echo $mahila_details_yoga['2']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['3'])){echo $mahila_details_yoga['3']->id;}?>"><?php if(isset($mahila_details_yoga['3'])){echo $mahila_details_yoga['3']->heading;}?></a></li>
							        	</ul>
							        	</div>
							        	<div id="more-news-div"><a href="<?=base_url();?>mahila/details/<?=$mahila_details_yoga['0']->cat_id?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	
							        	<div style="padding:5px 5px 5px 5px; border: 1px solid #D9EBF7; background-image: url(assets/imgs/123.jpg);background-repeat: repeat-x; height: 70px">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
							        			<? if(!empty($mahila_details_yoga['4'])){ ?>
								        			<? if(file_exists("./assets/mahila/news_img".$mahila_details_yoga['4']->id."_thumb.jpg")){ ?>
								        				<a href="<?=base_url();?>cinema/inner/<?php if(isset($mahila_details_yoga['4'])){echo $mahila_details_yoga['4']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($mahila_details_yoga['4'])){echo $mahila_details_yoga['4']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 15px;width: 60px;border: 0px;" align="top"></a>
								        			<?} }?>
							        				<div id="mainnews1" style="height: 40px" ><a href="<?=base_url();?>cinema/inner/<?php if(isset($mahila_details_yoga['4'])){echo $mahila_details_yoga['4']->id;}?>"><?php if(isset($mahila_details_yoga['4'])){echo $mahila_details1_yoga['4']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>maila/mahiladetails/<?php if(isset($mahila_details_yoga['4'])){echo $mahila_details_yoga['4']->id;}?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(!empty($mahila_details_yoga['5'])){ ?>
							        			<? if(file_exists("./assets/cinema/ceni_img".$mahila_details_yoga['5']->id."_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['5'])){echo $mahila_details_yoga['5']->id;}?>/<?=$mahila_details_yoga['5']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($mahila_details_yoga['5'])){echo $mahila_details_yoga['5']->id;}?>_thumb.jpg" style="padding: 0px 10px 0px 0px;float: left; height: 15px;width: 60px;border: 0px;" align="top"></a>
							        			<?} ?>
							        			<div id="mainnews1" style="height: 40px"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['5'])){echo $mahila_details_yoga['5']->id;}?>"><?php if(isset($mahila_details_yoga['5'])){echo $mahila_details_yoga['5']->heading;}?></a></div><div style="padding:5px 0px 0px 70px;" id="more-news-div"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['5'])){echo $mahila_details_yoga['5']->id;}?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div><?} ?></td>
							        		
							        		</tr>
							        		
							        	</table>
							        	</div></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="389"/></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="0" valign="top" style="margin-left:5px;" align="center"><table width="320" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="10"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="10" height="34" style="border-left:1px solid #1D77B3; border-top:1px solid #1D77B3;"/></td>
              <td  width="327" valign="top" id="tock-line-center" align="left" >
              <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?=$more['12']->matter ?></td></tr></table>
              <td width="8" align="right"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="8" height="34" style="border-right:1px solid #1D77B3; border-top:1px solid #1D77B3;"/></td>
            </tr>
          </table>
            <table width="320"  align="center" cellpadding="0" cellspacing="0" id="telugufont1">
              <tr>
                <td  valign="top" id="img-center"><img src="<?=base_url();?>assets/imgs/tock-line-boyom.jpg" width="5" height="283" /></td>
                <td width="340" valign="top" id="tock-botom-center" align="left">
                <div style="padding: 5px;text-align: justify;" >
                <? if(file_exists("./assets/news/news_img".$active_news['0']->id."_thumb.jpg")){ ?>
                <a href="<?=base_url();?>news/newsdetails/<?=$active_news['0']->id?>/<?=$active_news['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news['0']->id?>_thumb.jpg" style="margin:2px 5px 0px 2px;float: left;border: 0px;" align="top"></img></a>
                <?} ?>
                <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news['0']->id?>/<?=$active_news['0']->type?>"><?php echo $active_news['0']->heading;?></a></font><br>
               <?php echo $active_news['0']->summary;?>
               <div style="height: 120px;" id="telugufont">
               <ul id="mainnews">
            <?php 
          		$count=0;  foreach ($active_news as $row):
          		if($count==0)
          		{
	          	$count++;
	          	continue;
          		} ?>
               		
               			<li style="padding:3px;" ><a href="<?=base_url();?>news/newsdetails/<?=$active_news['0']->id?>/<?=$active_news['0']->type?>"><?php echo $row->heading;?></a></li>
               		
          	<? if($count==6){
          	break;
          		}else{
          	$count++;
          		}
          	endforeach; 
          	if($count==0){
          	echo 'No data found';
          		}
          		?>
               </ul>
               </div>
               		 <div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>news/details/<?if(isset($active_news['0'])){ echo $active_news['0']->type; }?>"><?=$more['0']->matter?></a></span></div>
                </div>
                </td>
                <td valign="top" id="img-center"><img src="<?=base_url();?>assets/imgs/tock-line-boyom1.jpg" width="5" height="283" /></td>
              </tr>
            </table>
          </td>
          <td width="217" valign="top" align="right">
           <img src="<?=base_url();?>assets/ads/Home1.jpg" width="215" height="196" />
            <img src="<?=base_url();?>assets/ads/Home2.jpg" width="215" height="117"/>
          </td>
          </tr>
      </table>
      <table width="99%" height="463" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="4" valign="top"><img src="<?=base_url();?>assets/imgs/add-line-left.jpg" width="4" height="456" /></td>
          <td width="206" valign="top" id="add-line"><table width="100%" height="439" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="67" valign="middle"><div align="center" id="newsletter"><img src="<?=base_url();?>assets/imgs/newsletter-img.jpg" width="199" height="59" onclick="show_subscribe()" /></div></td>
              </tr>
              <tr>
                <td height="193" valign="top"><img src="<?=base_url();?>assets/ads/Home3.jpg" width="199" height="177" /></td>
              </tr>
              <tr>
                <td valign="top"><img src="<?=base_url();?>assets/ads/Home4.jpg" width="199" height="179" /></td>
              </tr>
          </table></td>
          <td width="4" valign="top"><img src="<?=base_url();?>assets/imgs/add-line-right.jpg" width="4" height="456" /></td>
          <td width="500" valign="top">
          	<table width="0"  border="0"  id="photog-md" cellpadding="0" cellspacing="0" style="margin-left:5px;">
              <tr>
                <td width="500"  valign="top"><table width="98%" border="0" cellpadding="0" cellspacing="0" style="margin-left: 5px">
                  <tr>
                    <td height="4" valign="top"><img src="<?=base_url();?>assets/imgs/photogalleri-top-lin.jpg" width="488" height="4" /></td>
                  </tr>
                </table>
                  <table width="98%" border="0" id="photigalleri" cellpadding="0" cellspacing="0" style="margin-left: 5px">
                    <tr><td valign="bottom" class=" yui-skin-sam" align="left">
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							        <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;"><span id="telugufont"><?=$more['13']->matter ?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['14']->matter ?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab3"><em style="width: 100px;"><span id="telugufont"><?=$more['15']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;background-image:url(assets/imgs/gmail-seline.jpg);background-repeat:repeat-x;">
							        <div id="tab1"><p>
							        <table width="100%" height="100%"><tr>
							   			<?php if(!empty($images)){
							   			foreach ($images as $item):
							   			$count=1;
							   			foreach ($item as $sub):
							   			//print_r($sub);					
							   			?>
							   		<td width="125"  valign="top" >
									<div style="height: 95px;border: 0px solid red;width: 100%;text-align: left;">
									<? if(file_exists("./assets/gallery/image".$sub['id']."_thumb.jpg")){ ?>
										<a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><img src="<?=base_url();?>assets/gallery/image<?=$sub['id']?>_thumb.jpg" height="95px" width="130px" border="0"></a>
									
									</div>
									<div id="gall_botto_img"><a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><?=$sub['title']?></a></div><?} ?></td>
							   			<? if($count==3){
							   				break;
							   			}else{
							   				$count++;
							   			}
							   			endforeach;
							   			endforeach; }
							   			else 'No data found';?>
							   			</tr>
							   			</table><div style="width: 100%;height: 15px;" id="more-news-div"><a href="<?=base_url();?>gallery/inner/<?=$sub['parentid']?>"><?=$more['0']->matter;?></a></div>
							        </p></div>
							        <div id="tab2"><p>
							        <table width="100%" height="100%">
							        <tr>
							        <? if(!empty($gall_topviews)){
							        $count=1;
							        foreach ($gall_topviews as $row): ?>
							   			<td width="125"  align="center" valign="bottom">
							   				<div style="border: 0px solid red;width: 100%;text-align: left;">
							   				<? if(file_exists("./assets/gallery/image".$row->id."_thumb.jpg")){ ?>
							   				<a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><img src="<?=base_url();?>assets/gallery/image<?=$row->id?>_thumb.jpg" border="0"></a>
							   				</div>
							   				<div id="gall_botto_img"><a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><?=$row->title?></a></div><?} ?>
										</td>
										<? if($count==3){
											break;
										}else {
											$count++;
										}endforeach;}
										?>

							   		</tr>
							   		</table>
							        </p></div>
							        <div id="tab3"><p>Tab Three Content</p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
                      </td></tr>
                  </table>
                  <table width="98%" border="0" cellpadding="0" cellspacing="0" style="margin-left: 5px">
                    <tr>
                      <td><img src="<?=base_url();?>assets/imgs/photogalleri-botom-lin.jpg" width="490" height="4" /></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table width="98%" border="0" style="margin-left:1px"  cellpadding="0" cellspacing="5">
              <tr>
<td height="253" valign="top" width="240"><table width="100%"  border="0"  align="center" cellpadding="0" cellspacing="0"  style="margin-right:5px;margin-left:5px">
                  <tr>
                        <td width="6"  valign="top" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="6" height="34" /></td>
                        <td width="200" valign="bottom" id="img-senter" align="left" >
                        <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png" style="padding: 0px 5px 3px 2px;" align="middle"></img></td><td width="80%"><span id="telugufont"><?php echo $more['22']->matter;?></span></td></tr></table>
                        </td>
                        <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
                    </tr>
                      <tr>
                        <td  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" height="214" /></td>
                        <td width="200" id="center-img" align="left" valign="top">
                        	<div style="text-align: justify; height: 190px;width: 225px;padding-top: 5px;" id="telugufont1">
                        	<? if(file_exists("./assets/news/news_img".$active_news1['0']->id."_thumb.jpg")){ ?>
                        		<a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news1['0']->id?>_thumb.jpg" style="padding: 0px 3px 2px 0px;float: left;" border="0"/></a>
                        		<?} ?>
                        		<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><?=$active_news1['0']->heading?></a></font><br>
                        		<?=$active_news1['0']->summary?>
                        	</div>
                        	<div id="more-news-div" style="width: 220px;"><span ><a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$active_news1['0']->type?>"><?=$more['1']->matter ?>...</a></span></div>
                        </td>
                        <td  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5" height="214" /></td>
                    </tr>
                  </table>
                 </td>
				<td width="250" valign="top">
					<table width="100%" border="0" align="center" style="margin-left:6px;" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="6"  valign="top" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="7" height="34" /></td>
                        <td width="200" valign="bottom" id="img-senter" align="left" style="margin-bottom: 10px;">
                        <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?=$cinema_type2['0']->cinema_type ?></td></tr></table>
                        </td>
                        <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
             		 </tr>
                      <tr>
                        <td height="214"  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" height="214" /></td>
                        <td width="200" id="center-img" align="left" valign="top" height="100%">
	                        <div style="height: 190px;text-align: justify;padding-top: 3px;width: 220px;" id="telugufont1">
	                        
	                        <?if(!empty($cinema_type2['0'])){ if(file_exists("./assets/cinema/ceni_img".$cinema_type2['0']->id."_thumb.jpg")){ ?>
	                        <a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type2['0']->id?>_thumb.jpg" style="float: left;padding:2px 5px 2px 2px;border: 0px;" ></img></a>
	                        <?} ?>
	                        <font id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><?=$cinema_type2['0']->heading?></a></font><br>
	                   		<?=$cinema_type2['0']->summary ?></div>
	                        <div id="more-news-div" style="width: 220px;" ><span ><a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><?=$more['1']->matter ?>...</a></span></div>
	                        <?} ?>
                        </td>
                         <td height="214"  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5" height="214" /></td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>
         </td>
         <td width="200" valign="top" align="right">
         <table width="210"  border="0" align="center" cellpadding="0" cellspacing="0" >
         <tr>
             <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="6" height="35" /></td>
             <td  id="img-senter" align="left" valign="middle">
<!--                	<img src="<?=base_url(); ?>assets/imgs/001.png" style="margin:1px 0px 0px 0px;" align="middle"></img>-->
                	<span id="telugufont" style="padding: 0px 0px 8px 5px;"><?php echo $more['21']->matter;?></span>
             </td>
             <td valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="35" /></td>
         </tr>
         <tr>
             <td valign="top" id="center-line"><img src="<?=base_url();?>assets/imgs/tock-line-boyom.jpg" width="5" height="166" /></td>
             <td valign="top" width="100%" id="center-line"><table width="100%" border="0" cellpadding="0" cellspacing="0">
         <tr>
             <td height="165" valign="top">
      <form action="<?=base_url()?>admin/contacts/import" method="POST" onSubmit="return checkEmpty(this);" name="loginForm">
      <input type="hidden" name="page" value="home" />
	<table border="0" align="center" cellpadding="2" cellspacing="0">
	  <tr>
		<td colspan="3" align="center">Enter details</td>
	  </tr>
	  <tr>
	  	<td>Username</></td>
	  	<td><input type="text" name="username" size="10" value="" id="username"/></td>
	  	</tr>
	  
	  <tr>
	  	  <td>Password</td>
	      <td colspan="2"><input type="password" name="password" size="10" id="password"/></td>
	  </tr>
	  	<tr>
	  	<td>Domain</td>
	    <td>	
	    
	      <select name="type" size="1" id="email">
			
			<option value="yahoo" >Yahoo</option>
			<option value="gmail" >Gmail</option>
			</select>
	        </td>
	  </tr>
	  <tr>
	  	  <td colspan="3" align="center">
	  	  	<input id='importcontacts' alt='' onclick="test()" class="thickbox" type="submit" name="submit" value="Invite My Contacts" title="your Contacts list"/>
	  	  </td>
	  </tr>    
	  <tr>
	  	 <td colspan="3" align="center"><small>your info is secured..</small></td>
	  </tr>    
	</table>
	</form>
             </td>
         </tr>
       </table>
     </td>
     <td valign="top" id="center-line"><img src="<?=base_url();?>assets/imgs/tock-line-boyom1.jpg" width="5" height="166"/></td>
    </tr>
    </table>
    	<table width="217" border="0" cellpadding="0" cellspacing="0" style="margin-top:6px;border: 1px solid #50BCFC;">
        	<tr>
                <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
                <td width="208" valign="bottom" id="senter3" align="left"><table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png" style="padding: 0px 5px 3px 2px;" align="middle"></img></td><td width="80%"><span id="telugufont"><?php echo $more['16']->matter;?></span></td></tr></table></td>
                <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
              </tr>
              <tr>
                <td valign="top"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" height="225" /></td>
                <td  align="left" class="senterbotom" valign="top" style="width: 208;">
                <div id="home_poll" >
                 	<div><? if(!empty($newspoll['0']->question)){
                 	   echo $newspoll['0']->question;
                 	   ?></div>
     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$newspoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$newspoll[0]->id.'\',this.value)";' ?>
              					<?=form_radio('answer','a',True,$attributes) ?>
              				</td>
              				<td align="left"><?=$more['18']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','b',FALSE,$attributes) ?></td><td align="left"><?=$more['19']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','c',FALSE,$attributes) ?></td><td align="left"><?=$more['20']->matter ?></td></tr>
     				</table>
     				<? }else echo 'today no poll'; ?>
                </div>
                <span style="font-weight: bold;font-size: 14px;color:maroon;">yesterday poll</span>
                <div><?if(!empty($yes_poll['0']->question)){
					echo  $yes_poll['0']->question;   ?>            	
               </div>
                <div align="right" id="result"><a HREF="javascript:void(0)"
					onclick="window.open('<?=base_url();?>poll/yes_result/<?=$yes_poll['0']->id?>',
						'welcome','width=300,height=200')">
						Result</a></div>
                
                <?} else echo 'Yesterday no poll'; ?>
                </td>
              </tr><!--
              
                <td height="123" colspan="3" valign="top"><div align="right" style="padding-top:6px"><img src="<?=base_url();?>assets/imgs/add-fun.jpg" width="215" height="107"></img></div></td>
             
          --></table></td>
        </tr>
      </table>
   <table width="100%" align="left"><tr>
   <td><table width="35%"  border="0" cellpadding="0" cellspacing="0">
     		<tr><td valign="bottom" align="left" width="32" >
        		 <div class=" yui-skin-sam" style="width: 310px; border: 1px solid #50BCFC;" >
                      	<div id="demo2" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;padding-top: 2px" id="telugufont"><?=$more['5']->matter?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 80px;padding-top: 2px""><span id="telugufont"><?=$more['7']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;background-image:url(assets/imgs/gmail-seline.jpg);background-repeat:repeat-x;">
							        <div id="tab1"><p>
							         <table cellspacing="5" align="left">
							        	<tr>
							        <?php foreach($video_result as $item){?>
							        	
							        	<td><div style="padding:5px;">
							        	<a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><img src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" border="0"></a></div>
							        		<div id="gall_names" style="margin-left:10px;">Views:<?=$item->no_of_views;?><a href="<?=base_url();?>video/index/<?php if(isset($item)) {echo $item->id;}?>"><?=$item->name?></a></div></td>
							        	
                                   <? }?>
							       </tr>
							        </table>
							        </p></div>
							        <div id="tab2"><p>
							       
							        <table cellspacing="5" align="left">
							        	<tr>
							        	<?php 
							        	if(!empty($greetings1['0'])){
							        	$count=0;
							        	foreach ($greetings1 as $item):?>
							        		<td><div style="width:132px; ">
							        		<? 
							        		if(file_exists("./assets/greetings/gree_img".$greetings1['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>greetings/content/<?php if(isset($greetings1['0'])) {echo $greetings1['0']->type;}?>"><img src="<?=base_url();?>assets/greetings/gree_img<?=$item->id?>_thumb.jpg" height="100px" width="132px" border="0"></a>
							        		
							        		</div>
							        		<div id="gall_botto_img"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings1['0'])) {echo $greetings1['0']->type;}?>"><?=$item->gree_cat?></a></div><?} ?></td>
							        		<?php 
							        		if($count==1){
							        			break;
							        		}else{
							        			$count++;
							        		}
							        		endforeach;}?>
							        	</tr>
							        </table>
							        </p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo2');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
        </td></tr></table></td>
	<td><table width="35%"  border="0" cellpadding="0" cellspacing="0">
     		<tr><td valign="bottom" align="left" width="32" >
        		 <div class=" yui-skin-sam" style="width: 310px; border: 1px solid #50BCFC;" >
                      	<div id="demo3" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;padding-top: 2px"" id="telugufont"><?=$more['8']->matter?></em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 80px;padding-top: 2px""><span id="telugufont"><?=$more['9']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: left;background-image:url(assets/imgs/gmail-seline.jpg);background-repeat:repeat-x;">
							        <div id="tab1"><p>
							        <? if(!empty($mahila_details)){?>
							        <div id="image"><?if(file_exists("./assets/mahila/news_img".$mahila_details['0']->id."_thumb.jpg")){ ?>
							        <a href="<?=base_url();?>mahila/mahiladetails/<?if(!empty($mahila_details)){$mahila_details['0']->id;}?>"><img style="border:0px;" src="<?=base_url();?>/assets/mahila/news_img<?if(!empty($mahila_details)){echo $mahila_details['0']->id;}?>_thumb.jpg" /></a></div>
							        <?} }?>
							        <div id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?if(!empty($mahila_details)){echo $mahila_details['0']->id;}?>"><?if(!empty($mahila_details)){echo $mahila_details['0']->heading;}?></a></div>
							        <?php if(!empty($mahila_details)){ echo $mahila_details['0']->summary; ?>
							       <?php  $i=1;$count=0;foreach($mahila_details as $item){
							           if($count==0)
							           {$count++;
							            continue;
							           }
							            
							           if($i>3)
							           break;?>
                                    <ul id="mainnews"> 
							        <li><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>"><?=$item->heading?></a></li></ul><?$i++;}} ?></p></div>
							        <div id="tab2"><p>
							        <div id="image"> <? if(file_exists("./assets/sahithi/news_img".$sahithi_details['0']->id."_thumb.jpg")){ ?>
							        <a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details['0']->id?>"><img style="border:0px;"  src="<?=base_url();?>/assets/sahithi/news_img<?=$sahithi_details['0']->id?>_thumb.jpg" alt="hh"/></a></div>
							        <?} ?>
							        <div id="mainnews"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details['0']->id?>"><?=$sahithi_details['0']->heading?></a></div>
							        <?php echo $sahithi_details['0']->summary; ?>
							        <?$i=1;$count=0; foreach($sahithi_details as $item){
							        	 if($count==0)
							        	 {$count++;
							            continue;
							        	 }
							             if($i>3)
							           break;?>
							    <ul id="mainnews"> <li><a href="<?=base_url();?>sahithi/sahithidetails/<?=$item->id?>"><?=$item->heading?></a></li></ul><? $i++;} ?></p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo3');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
        </td></tr></table></td>
	<td width="35%" ><table  width="98%" align="left" style="margin-left:6px;" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="6" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="7" /></td>
                        <td valign="bottom" id="img-senter" align="left" style="margin-bottom: 10px;">
                        <table><tr><td width="20%"><img src="<?=base_url();?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?if(isset($home_stories['0'])){echo $home_stories['0']->heading;}?></td></tr></table>
                        </td>
                        <td width="6"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
             		 </tr>
                      <tr>
                        <td  valign="top" id="center-img1"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" /></td>
                        <td valign="top" id="center-img1" align="left">
	                        <div style="text-align:justify;padding-top:14px;height: 125px;" >
	                     <? if(isset($home_stories['0'])){ ?> 
	                      <? if(file_exists("./assets/sahithi/news_img".$home_stories['0']->id."_thumb.jpg")){ ?>
	                      <a href="<?=base_url();?>sahithi/sahithidetails/<?=$home_stories['0']->id?>"><img border="0px" id="image" src="<?=base_url();?>/assets/sahithi/news_img<?=$home_stories['0']->id?>_thumb.jpg"></a>
	                      <?} ?>
	                      <font id="mainnews"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$home_stories['0']->id?>"><? echo $home_stories['0']->heading;?></a></font>
	                       <? echo $home_stories['0']->summary;?><?} ?>
	                        </div>
	                       <div id="more-news-div"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$home_stories['0']->id?>"><?=$more['1']->matter?></a></div>
                        </td>
                         <td id="center-img1"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5"/></td>
                    </tr>
                  </table>
    </td></tr>
</table>				