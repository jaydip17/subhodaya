<script type="text/javascript" src="<?=base_url()?>/assets/js/shubhodaya.js"></script>
<style>
<!--
.unselected {
	opacity:0.5;filter:alpha(opacity=50);
	cursor: pointer;
}
.selected {
	cursor: pointer;
}
input {
	color: #5A5F5F;
	font-size: 11px;
}
-->
</style>

<script type="text/javascript">
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
function test1(type)
{
		
		document.getElementById('emailtype').value = type;
	if(type=='gmail')
	{
		document.getElementById('gmail').className = "contacts_gmail_selected";
		document.getElementById('yahoo').className = "contacts_yahoo";
		document.getElementById('username').value = "Enter your Gmail id";
	}
	else
	{
		document.getElementById('gmail').className = "contacts_gmail";
		document.getElementById('yahoo').className = "contacts_yahoo_selected";
		document.getElementById('username').value = "Enter your Yahoo id";
	}

}
function test3()
{
	$(document).ready(function(){
	$("#advertise").colorbox({iframe:true, width:500, height:500, open:true}); 
	});
}
function test()
{
    var flag=1;
	var uname = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	var email = document.getElementById('emailtype').value;

	if(uname=="" || pass=="")
	{
	flag=0;
	alert("Enter username and password");	
	}
	
	if(flag!=0)
	{
	//tb_show('My Caption',url,'false');
	var url = '&username='+uname+'&password='+pass+'&type='+email;
	attribures = '&height=400&width=500';
	var sm = '<?=base_url()?>admin/contacts/import';
	alert(sm);
	tb_show('Your Yahoo (or) Gmail Contact List','<?=base_url()."admin/contacts/import?"?>'+url+attribures,'false');
	
	}
	else
	return false;
}

//-->
</script>
<style type="text/css">
	ul{
	list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
	padding-left: 20px;
	}
</style>
<table width="99%" height="99%"  border="0" cellpadding="0" cellspacing="5">
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
							        <li><a href="#tab2" on><em style="padding:5px 4px 0px 25px;"><span id="telugufont"><?=$more['11']->matter ?></span></em></a></li>
							        <li><a href="#tab3"><em style="padding:5px 4px 0px 20px;"><span id="telugufont"><?=$more['4']->matter ?></span></em></a></li>
									<li><a href="#tab4"><em style="padding:5px 4px 0px 25px;"><span id="telugufont"><?=$more['8']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content">
    							<div id="tab1">
    							<div style="height: 169px;" id="telugufont1">
    							<? if(file_exists("./assets/news/news_img".$news_type7['0']->id."_thumb.jpg")){ ?>
    							<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['0'])){echo $news_type7['0']->id;}?>/<?=$news_type7['0']->type?>"><img id="img" src="<?=base_url();?>assets/news/news_img<?=$news_type7['0']->id?>_thumb.jpg" align="top" style="margin: 0px 22px 1px 2px;float: left;"></img></a>
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
							        	<div id="more-news-div" style="margin-bottom: 3px;"><a href="<?=base_url();?>news/details/<?=$news_type7['0']->type?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	<div class="div123">
							        	<table width="100%" >
							        		<tr>
							        			<td width="50%" valign="top" height="97%"> 
							        			<? if(file_exists("./assets/news/news_img".$news_type7['4']->id."_home_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;" align="top" id="img"></a>
							        			<?} ?>
							        				<div id="home_bottom"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><?php if(isset($news_type7['4'])){echo $news_type7['4']->heading;}?></a></div>
							        				<div  id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['4'])){echo $news_type7['4']->id;}?>/<?=$news_type7['4']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div>
							        			</td>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type7['5']->id."_home_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;" align="top" id="img"></a>
							        			<?} ?>
							        			<div id="home_bottom"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><?php if(isset($news_type7['5'])){echo $news_type7['5']->heading;}?></a></div>
							        			<div id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type7['5'])){echo $news_type7['5']->id;}?>/<?=$news_type7['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        		</tr>
							        	</table>
							        	</div></div>
							        	
							        <div id="tab2">
							        	<div style="height: 175px;" id="telugufont1">
							        	<? if(file_exists("./assets/news/news_img".$news_type4['0']->id."_thumb.jpg")){ ?>
							        	<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['0'])){echo $news_type4['0']->id;}?>/<?=$news_type4['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['0'])){echo $news_type4['0']->id;}?>_thumb.jpg" align="top" style="margin: 0px 22px 1px 2px;float: left;" id="img"></img></a>
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
							        	
							        	<div class="div123">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type4['4']->id."_home_thumb.jpg")){ ?>
							        				<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;border: 0px;" align="top" id="img"></a>
							        			<?} ?>
							        			<div id="home_bottom"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><?php if(isset($news_type4['4'])){echo $news_type4['4']->heading;}?></a></div><div  id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['4'])){echo $news_type4['4']->id;}?>/<?=$news_type4['4']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(file_exists("./assets/news/news_img".$news_type4['5']->id."_home_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><img src="<?=base_url();?>assets/news/news_img<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left; height: 40px;width: 60px;" align="top" id="img"></a>
							        			<?} ?>
							        			<div id="home_bottom"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><?php if(isset($news_type4['5'])){echo $news_type4['5']->heading;}?></a></div><div id="more-news-div"><a href="<?=base_url();?>news/newsdetails/<?php if(isset($news_type4['5'])){echo $news_type4['5']->id;}?>/<?=$news_type4['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        		</tr>
							        		
							        	</table>
							        	</div></div>
							        <div id="tab3">
							        <div style="height: 169px;" id="telugufont1">
							        	<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>/<?=$cinema_type1['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>_thumb.jpg" align="top" style="margin: 0px 22px 1px 2px;float: left;" id="img"></img></a>
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
							        	<div id="more-news-div"><a href="<?=base_url();?>cinema/details/<?=$cinema_type1['0']->type?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        	
							        	<div class="div123">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
							        			
								        			<? 
								        			if(!empty($cinema_type1))
								        			{if(isset($cinema_type1['4'])){ 
								        			if(file_exists("./assets/cinema/ceni_img".$cinema_type1['4']->id."_home_thumb.jpg")){ ?>
								        				<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<?=$cinema_type1['4']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;;" align="top" id="img"></a>
								        			<?}} ?>
							        				<div id="home_bottom"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<? if(isset($cinema_type1['4'])){echo $cinema_type1['4']->type;}?>"><?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->heading;}?></a></div><div id="more-news-div"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['4'])){echo $cinema_type1['4']->id;}?>/<?if(isset($cinema_type1['4'])){echo $cinema_type1['4']->type;}?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(!empty($cinema_type1['5'])){ ?>
							        			<? if(file_exists("./assets/cinema/ceni_img".$cinema_type1['5']->id."_home_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;" align="top" id="img"></a>
							        			<?} ?>
							        			<div id="home_bottom"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->heading;}?></a></div><div  id="more-news-div"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['5'])){echo $cinema_type1['5']->id;}?>/<?=$cinema_type1['5']->type?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div><?}} ?></td>
							        		
							        		</tr>
							        		
							        	</table>
							        	</div></div>
									<div id="tab4">
									     <div style="height: 169px;" id="telugufont1">
							        	<? if(!empty($mahila_details_yoga['0'])){if(file_exists("./assets/mahila/news_img".$mahila_details_yoga['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['0']->id?>/<?=$mahila_details_yoga['0']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->id;}?>_thumb.jpg" align="top" style="margin: 0px 22px 1px 2px;float: left;" id="img"></img></a>
							        	<?} ?>
    									<font id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['0']->id?>/<?=$mahila_details_yoga['0']->cat_id?>"><?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->heading;}?></a></font><br>
							        	<font style="font-size: 14px;text-align: justify;"><?php if(isset($mahila_details_yoga['0'])){echo $mahila_details_yoga['0']->summary;}?></font>
							        	<div id="more-news-div"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['0']->id?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
							        	<ul id="mainnews">
                                        <li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['1']->id?>/<?=$mahila_details_yoga['1']->cat_id?>"><?php if(isset($mahila_details_yoga['1'])){echo $mahila_details_yoga['1']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['2']->id?>/<?=$mahila_details_yoga['2']->cat_id?>"><?php if(isset($mahila_details_yoga['2'])){echo $mahila_details_yoga['2']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['3']->id?>/<?=$mahila_details_yoga['3']->cat_id?>"><?php if(isset($mahila_details_yoga['3'])){echo $mahila_details_yoga['3']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['4']->id?>/<?=$mahila_details_yoga['4']->cat_id?>"><?php if(isset($mahila_details_yoga['4'])){echo $mahila_details_yoga['4']->heading;}?></a></li>
							        		<li style="padding: 2px"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['5']->id?>/<?=$mahila_details_yoga['5']->cat_id?>"><?php if(isset($mahila_details_yoga['3'])){echo $mahila_details_yoga['5']->heading;}?></a></li>
							        	</ul>
							        		<?} ?>
							        	</div>
							        	<div id="more-news-div"><a href="<?=base_url();?>mahila/details/<?=$mahila_details_yoga['0']->cat_id?>"><?php if(isset($more['0'])){echo $more['0']->matter;}?></a></div>
							        
							        	<div class="div123">
							        	<table width="100%">
							        	
							        		<tr>
							        			<td width="50%" valign="top">
							        			<? if(!empty($mahila_details_yoga['6'])){ ?>
								        			<? if(file_exists("./assets/mahila/news_img".$mahila_details_yoga['6']->id."_home_thumb.jpg")){ ?>
								        				<a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details_yoga['6']->id?>/<?=$mahila_details_yoga['6']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?php if(isset($mahila_details_yoga['6'])){echo $mahila_details_yoga['6']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;;width: 60px;" align="top" id="img"></a>
								        			<?} }?>
							        				<div id="home_bottom"><a href="<?=base_url();?>cinema/inner/<?=$mahila_details_yoga['6']->id?>/<?=$mahila_details_yoga['6']->cat_id?>"><?php if(isset($mahila_details_yoga['6'])){echo $mahila_details_yoga['6']->heading;}?></a></div><div  id="more-news-div"><a href="<?=base_url();?>maila/mahiladetails/<?php if(isset($mahila_details_yoga['6'])){echo $mahila_details_yoga['6']->id;}?>/<?=$mahila_details_yoga['6']->cat_id?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div></td>
							        			<td width="50%" valign="top">
							        			<? if(!empty($mahila_details_yoga['7'])){ ?>
							        			<? if(file_exists("./assets/mahila/news_img".$mahila_details_yoga['7']->id."_home_thumb.jpg")){ ?>
							        			<a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['7'])){echo $mahila_details_yoga['7']->id;}?>/<?=$mahila_details_yoga['7']->cat_id?>"><img src="<?=base_url();?>assets/mahila/news_img<?php if(isset($mahila_details_yoga['7'])){echo $mahila_details_yoga['7']->id;}?>_home_thumb.jpg" style="margin: 0px 10px 0px 0px;float: left;width: 60px;" align="top" id="img"></a>
							        			<?} ?>
							        			<div id="home_bottom"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['7'])){echo $mahila_details_yoga['7']->id;}?>/<?=$mahila_details_yoga['7']->cat_id?>"><?php if(isset($mahila_details_yoga['7'])){echo $mahila_details_yoga['7']->heading;}?></a></div><div  id="more-news-div"><a href="<?=base_url();?>mahila/mahiladetails/<?php if(isset($mahila_details_yoga['7'])){echo $mahila_details_yoga['7']->id;}?>/<?=$mahila_details_yoga['7']->cat_id?>"><?php if(isset($more['1'])){echo $more['1']->matter;}?></a></div><?} ?></td>
							        		
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
              <td  width="305" valign="top" id="tock-line-center" align="left" >
              <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?=$more['12']->matter ?></td></tr></table>
              <td width="8" align="right"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="8" height="34" style="border-right:1px solid #1D77B3; border-top:1px solid #1D77B3;"/></td>
            </tr>
          </table>
            <table width="320"  align="center" cellpadding="0" cellspacing="0" id="telugufont1">
              <tr>
                <td  valign="top" id="img-center"><img src="<?=base_url();?>assets/imgs/tock-line-boyom.jpg" width="5" height="283" /></td>
                <td width="310" valign="top" id="tock-botom-center" align="left">
                <div style="padding:5px;text-align: justify;" >
                <? if(file_exists("./assets/news/news_img".$active_news['0']->id."_thumb.jpg")){ ?>
                <a href="<?=base_url();?>news/newsdetails/<?=$active_news['0']->id?>/<?=$active_news['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news['0']->id?>_thumb.jpg" style="margin:2px 23px 0px 2px;float: left;" align="top" id="img"></img></a>
                <?} ?>
                <font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news['0']->id?>/<?=$active_news['0']->type?>"><?php echo $active_news['0']->heading;?></a></font><br>
               <?php echo $active_news['0']->summary;?>
               <div style="" id="telugufont">
               <ul id="mainnews">
            <?php 
          		$count=0;  foreach ($active_news as $row):
          		if($count==0)
          		{
	          	$count++;
	          	continue;
          		} ?>
               		
               			<li style="padding:3px;" ><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?php echo $row->heading;?></a></li>
               		
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
          <td width="217" valign="top" align="center" style="margin-left: 3px;">
           <table cellpadding="0" cellspacing="0" height="196" width="200">
					<tr>
					<td width="7" height="30px" valign="top" align="right"><img src="<?=base_url();?>assets/imgs/beauty-top-left1.gif"  /></td>
					<td  height="30px;" width="300px;" style="background-image:url(<?=base_url();?>assets/imgs/beauty-top-center1.gif);background-repeat: repeat-x" valign="bottom" align="left"><div style="margin-bottom: 1px;"><span id="newsheading"><img src="<?=base_url()?>assets/imgs/001.png" align="top"/><?php echo $this->lang->line('subhodaya_special');?></span></div></td>
					<td width="8" height="30px" valign="top"><img src="<?=base_url();?>assets/imgs/beauty-top-right1.gif"  alt="gg" /></td>
					</tr>
					<tr>
					<td valign="top" colspan="3" style="background-image:url(<?=base_url();?>assets/imgs/KitchenTips-cr.gif);background-repeat:repeat-x; border:1px solid #0A70BB;border-bottom:0px; background-position: bottom;">
					<div style="text-align: justify;padding: 2px;height: 150px;">
          		<?php if(!empty($special_news)){
          			$cat_id=1;
          		if(file_exists("./assets/special_newsimg/news_img".$special_news['0']->id."_home_thumb.jpg")){?>
                	<a href="<?=base_url()?>news/newsdetails/<?=$special_news['0']->id?>/<?=$cat_id?>/<?=1?>"><img src="<?=base_url()?>assets/special_newsimg/news_img<?=$special_news['0']->id?>_home_thumb.jpg" id="img" style="margin: 2px 10px 1px 2px;float: left;"></a>
                	<?php }?>
                	<font id="mainnews"><a href="<?=base_url()?>news/newsdetails/<?=$special_news['0']->id?>/<?=$cat_id?>/<?=1?>"><?=$special_news['0']->heading?></a></font><br>
                	<font style="text-align: justify;text-align: left;font-size: 14px;"><?=$special_news['0']->summary?></font>
                	</div>
                	<div id="more-news-div" style="margin:0px 2px 2px 0px;"><a href="<?=base_url()?>news/newsdetails/<?=$special_news['0']->id?>/<?=$cat_id?>/<?=1?>"><?php if(isset($more['0'])){echo $more['1']->matter;}?></a></div>
                	<?php }?>
	                 </td>
					</tr>
					<tr>
					<td colspan="3" width="224" height="7"><img src="<?=base_url();?>assets/imgs/beauty-bottom-img.gif" width="224px" height="7px "  /></td>
					</tr>
					</table>
           <!--<img src="<?=base_url();?>assets/ads/Home1.jpg" width="215" height="196" />
            --><img src="<?=base_url();?>assets/ads/Home2.jpg" width="219" height="100" style="margin-top:6px;"/>
          </td>
          </tr>
      </table>
      <table width="99%" height="463" border="0" cellpadding="0" cellspacing="0">
        <tr>
         <td width="206" valign="top" style="background-color:#bdcbd2;"><table width="100%" height="439" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="67" valign="middle"><div align="center" id="newsletter"><img style="cursor:pointer;" id="newsletter-img" src="<?=base_url();?>assets/imgs/newsletter-img.jpg" width="199" height="59" /></div></td>
              </tr>
              <tr>
                <td  valign="top" align="center"><!--
                <img src="<?=base_url();?>assets/ads/Home3.jpg" width="215" height="196" />
            	<img src="<?=base_url();?>assets/ads/Home4.jpg" width="219" height="100" style="margin-top:6px;"/>
                --><!-- VCricket Score Feed Code Start v 3.00 --><script language="JavaScript" type="text/JavaScript" src="http://ifeed.vcricket.com/get_code.aspx?dk=A6084745CB6346C68AB20E40D178F2B0&amp;sc=&amp;sz=180x320"></script><noscript><a href="http://www.vcricket.com/help.aspx?q=java_disable"  target="_blank"><img src="/images/error_java_180x320.gif"  alt="Javascript is disabled." width="220" height="380" border="0" /></a></noscript><!-- Please note this will not work if directly run in browser. --><!-- VCricket Score Feed Code End -->
                <div style="padding-top: 4px;"><img src="<?=base_url()?>assets/imgs/ad2-200x100.gif" width="190"></div>
                </td>
              </tr>
             
          </table></td>
          <td width="100%" valign="top"  colspan="2">
          	<table width="0"  border="0"  id="photog-md" cellpadding="0" cellspacing="0" style="margin-left:5px;">
              <tr>
                <td width="498"  valign="top"><table width="98%" border="0" cellpadding="0" cellspacing="0" style="margin-left: 5px">
                  <tr>
                    <td height="4" valign="top"><img src="<?=base_url();?>assets/imgs/photogalleri-top-lin.jpg" width="481" height="4" /></td>
                  </tr>
                </table>
                  <table border="0" cellpadding="0" cellspacing="0" style="margin-left: 5px;">
                    <tr><td valign="bottom" class=" yui-skin-sam" align="left" style=" border-left:1px solid #3daff6;
	border-right:1px solid #3daff6;">
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;width: 480px;">
	    						<ul class="yui-nav">
							        <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;"><span id="telugufont"><?=$more['13']->matter ?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['14']->matter ?></span></em></a></li>
									<!--<li style="text-align: center;"><a href="#tab3"><em style="width: 100px;"><span id="telugufont"><?=$more['15']->matter ?></span></em></a></li>
	    						--></ul>            
    							<div class="yui-content" style="height: 173px;text-align: center;" id="tabs_background">
							        <div id="tab1"><p>
							        <table width="95%" height="100%"><tr>
							   			<?php if(!empty($images)){
							   				//print_r($images);
							   				$count=1;
							   			foreach ($images as $item):
							   			//print_r($item);
							   			foreach ($item as $sub):
							   			//print_r($sub);					
							   			?>
							   		<td valign="top" >
									<div style=";width:;text-align: left;margin-bottom: 4px;">
									
										<a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><img id="img" src="<?=base_url();?>assets/gallery/thumimg<?=$sub['id']?>.jpg" id="img"></a>
									
									</div>
									<!--<div id="gall_botto_img"><a href="<?=base_url();?>gallery/content/<?=$sub['id']?>/<?=$sub['parentid']?>"><?=$sub['title']?></a></div>--></td>
							   			<? $count++; 
							   			if($count==3){
							   				break;
							   			}
							   				
							   			
							   			endforeach;
							   			endforeach; }
							   			else 'No data found';?>
							   			<!--<td width="11%" valign="bottom"><div style="width: 90%;height: 15px;margin-bottom: 2px;" id="more-news-div"><a href="<?=base_url();?>gallery/inner/<?php if(!empty($sub['parentid'])) {echo $sub['parentid'];}?>"><?=$more['0']->matter;?></a></div></td>
							   			--></tr>
							   			<!--<tr>
							   				<td colspan="3" style="text-align: right;"><a href="<?=base_url();?>gallery/inner/<?php if(!empty($sub['parentid'])) {echo $sub['parentid'];}?>"><?=$more['0']->matter;?></a></td>
							   			</tr>
							   			--></table>
							        </p></div>
							        <div id="tab2"><p>
							        <table width="100%" height="100%">
							        <tr>
							        <? if(!empty($gall_topviews)){
							        $count=1;
							        foreach ($gall_topviews as $row): ?>
							   			<td width="125"  valign="bottom">
							   				<div style="border: 0px solid red;width: 100%;text-align: left;margin-bottom: -1px">
							   				<a href="<?=base_url();?>gallery/content/<?=$row->id?>/<?=$row->parentid?>"><img id="img" src="<?=base_url();?>assets/gallery/thumimg<?=$row->id?>.jpg" id="img"></a>
							   				</div>
										</td>
										<? if($count==3){
											break;
										}else {
											$count++;
										}endforeach;}
										?>
									<!--<td width="11%" valign="bottom"><div style="width: 90%;height: 15px;margin-bottom: 2px;" id="more-news-div"><a href="<?=base_url();?>gallery/inner/<?php if(!empty($gall_topviews)) {echo $row->parentid;}?>"><?=$more['0']->matter;?></a></div></td>
							   		--></tr>
							   		<!--<tr><td colspan="3" style="text-align: right;"><a href="<?=base_url();?>gallery/inner/<?php if(!empty($gall_topviews)) {echo $row->parentid;}?>"><?=$more['0']->matter;?></a></td></tr>
							   		--></table>
							        </p></div>
							        <!--<div id="tab3"><p>Tab Three Content</p></div>
    							--></div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
                      </td></tr>
                  </table>
                  <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left: 5px">
                    <tr>
                      <td><img src="<?=base_url();?>assets/imgs/photogalleri-botom-lin.jpg" width="481" height="4" /></td>
                    </tr>
                  </table>
                </td>  <td align="center" valign="top">
                <img style="cursor:pointer;padding-left:3px;" id="invite-img" src="<?=base_url();?>assets/imgs/inviteFriends.jpg" />
                 <img src="<?=base_url();?>assets/ads/Home2.jpg" width="223" height="115" style="padding: 3px;"/><!--
                <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" >
         <tr>
             <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="7" height="35" /></td>
             <td  id="img-senter" align="left" valign="bottom">
                	<img src="<?=base_url(); ?>assets/imgs/001.png" style="margin:1px 0px 0px 0px;" align="middle"></img>
                	<span id="telugufont" style="padding: 5px 0px px 2px;">Invite Friends  Via E-mail</span>
             </td>
             <td valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="35" /></td>
         </tr>
         <tr>
             <td valign="top" id="center-line"><img src="<?=base_url();?>assets/imgs/tock-line-boyom.jpg" width="7" height="166" /></td>
             <td valign="top" width="100%" id="center-line"><table width="100%" border="0" cellpadding="0" cellspacing="0">
         <tr>
         <td height="165" valign="top" style="background-image:url(assets/imgs/gmailseline.jpg);background-repeat:repeat-x;border-bottom:1px solid #166DBC;">
      <form action="<?=base_url()?>admin/contacts/import" method="POST" onSubmit="return checkEmpty(this);" name="loginForm">
      <input type="hidden" name="page" value="home" />
	<table border="0" align="center" cellpadding="0" cellspacing="2" style="padding: 5px 0px 0px 15px;">
	  <tr>
	  	<td align="left">
	  	 <div id='gmail' class="contacts_gmail_selected" onclick="test1('gmail')" > </div>
	    <td align="left">
	    <div id='yahoo' class="contacts_yahoo" onclick="test1('yahoo')" > </div>
	    
	    </td>
	  </tr>
	  <tr>
	  	<td>Username</></td>
	  	<td align="left"><input onfocus="this.value=''" type="text" name="username" size="15" value="Enter your Gmail id" id="username"/>
	  	<input type="hidden" name="emailtype" size="10" value="gmail" id="emailtype"/></td>
	  	<td id="wrong_id"></td>
	  	</tr>
	  <tr>
	  	  <td>Password</td>
	      <td align="left"><input type="password" name="password" size="15" id="password"/></td>
	      <td id="wrong_pw"></td>
	  </tr>
	  <tr>
	  	  <td colspan="3" align="center">
	  	  <img  src="<?=base_url()?>assets/imgs/invite-contact2.png" id='importcontacts1' onclick="test3()" style="cursor: pointer;"  name="submit" alt=""/></td>
	  </tr>    
	  <tr>
	  	 <td colspan="3" align="center" ><small>We Don't Store Your Username And Password</small></td>
	  </tr>    
	</table>
	</form>
             </td>
         </tr>
       </table>
     </td> 
     <td valign="top" id="center-line"><img src="<?=base_url();?>assets/imgs/tock-line-boyom1.jpg" width="5" height="165"/></td>
    </tr>
    </table></td>-->
              </tr>
            </table>
            <table  width="100%" border="0" style="margin-left:1px"  cellpadding="0" cellspacing="5">
              <tr>
<td height="253" valign="top" width="50%"><table width="100%"  border="0"  align="center" cellpadding="0" cellspacing="0"  style="margin-right:5px;margin-left:5px">
                  <tr>
                        <td width="6"  valign="top" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="6" height="34" /></td>
                        <td  valign="bottom" id="img-senter" align="left" >
                        <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png" style="padding: 0px 5px 3px 2px;" align="middle"></img></td><td width="80%"><span id="telugufont"><?php echo $more['22']->matter;?></span></td></tr></table>
                        </td>
                        <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
                    </tr>
                      <tr>
                        <td  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" height="214" /></td>
                        <td  id="center-img" align="left" valign="top">
                        	<div style="text-align: justify; height: 185px;width:99%;padding-top: 5px;" id="telugufont1">
                        	<? if(!empty($active_news1)){
                        	if(file_exists("./assets/news/news_img".$active_news1['0']->id."_thumb.jpg")){ ?>
                        		<a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><img src="<?=base_url();?>assets/news/news_img<?=$active_news1['0']->id?>_thumb.jpg" style="margin: 0px 22px 2px 0px;float: left;" id="img"/></a>
                        		<?} ?>
                        		<font id="mainnews"><a href="<?=base_url();?>news/newsdetails/<?=$active_news1['0']->id?>/<?=$active_news1['0']->type?>"><?=$active_news1['0']->heading?></a></font><br>
                        		<?=$active_news1['0']->summary?>
                        		 <ul id="mainnews">
						            <?php 
						          		$count=0;  foreach ($active_news1 as $row):
						          		if($count==0)
						          		{
							          	$count++;
							          	continue;
						          		} ?>
						               		
						               			<li style="padding-top:3px;" ><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>/<?=$row->type?>"><?php echo $row->heading;?></a></li>
						               		
						          	<? if($count==5){
						          	break;
						          		}else{
						          	$count++;
						          		}
						          	endforeach; 
                        	}
						          		?>
               </ul>
                        	</div>
                        	<div id="more-news-div" style="width:99%;"><span ><a href="<?=base_url();?>news/details/<?=$active_news1['0']->type?>"><?=$more['0']->matter ?>...</a></span></div>
                        </td>
                        <td  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5" height="214" /></td>
                    </tr>
                  </table>
                 </td>
				<td width="50%" valign="top">
					<table width="100%" border="0" align="center" style="margin-left:6px;" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="6"  valign="top" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="7" height="34" /></td>
                        <td  valign="bottom" id="img-senter" align="left" style="margin-bottom: 10px;">
                        <table><tr><td width="20%"><img src="<?=base_url(); ?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?=$cinema_type2['0']->cinema_type ?></td></tr></table>
                        </td>
                        <td width="6" valign="top"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
             		 </tr>
                      <tr>
                        <td height="214"  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" height="214" /></td>
                        <td id="center-img" align="left" valign="top" height="100%">
	                        <div style="height: 185px;text-align: justify;padding-top: 3px;width:99%;" id="telugufont1">
	                        
	                        <? 
	                        if(!empty($cinema_type2['0'])){ if(file_exists("./assets/cinema/ceni_img".$cinema_type2['0']->id."_thumb.jpg")){ ?>
	                        <a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$cinema_type2['0']->id?>_thumb.jpg" style="float: left;margin:2px 22px 2px 2px;" id="img"></img></a>
	                        <?} ?>
	                        <font id="mainnews"><a href="<?=base_url();?>cinema/inner/<?=$cinema_type2['0']->id?>/<?=$cinema_type2['0']->type?>"><?=$cinema_type2['0']->heading?></a></font><br>
	                   		<?=$cinema_type2['0']->summary ?>
	                   		 <ul id="mainnews">
						            <?php 
						          		$count=0;  foreach ($cinema_type2 as $row):
						          		if($count==0)
						          		{
							          	$count++;
							          	continue;
						          		} ?>
						               		
						               			<li style="padding-top:3px;" ><a href="<?=base_url();?>cinema/inner/<?=$row->id?>/<?=$row->type?>"><?php echo $row->heading;?></a></li>
						               		
						          	<? if($count==5){
						          	break;
						          		}else{
						          	$count++;
						          		}
						          	endforeach; 
                        	}
						      ?>
                  </ul>
	                   		</div>
	                        <div id="more-news-div" style="width: 99%;" ><span ><a href="<?=base_url();?>cinema/details/<?=$cinema_type2['0']->type?>"><?=$more['0']->matter ?>...</a></span></div>
                        </td>
                         <td height="214"  valign="top" id="center-img"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5" height="214" /></td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>
         </td>
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
    							<div class="yui-content" style="height: 150px;text-align: center;" id="tabs_background">
							        <div id="tab1"><p>
							         <table cellspacing="5" align="left">
							        	<tr>
							        <?php if(!empty($video_result)){
							        foreach($video_result as $item){?>
							        	<td align="left"><div style="padding-top:5px;width:128px;text-align: center;">
							        	<a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><div id="latestvideo_time"><?=$item->time?></div><img id="img" src="<?=base_url();?>assets/videos/image_preview/home_image<?=$item->id?>_thumb.jpg" height="100px" width="130px" ></a></div>
							        		<div style="width:132px;text-align:center;" id="video_botto_img"><a href="<?=base_url();?>video/index/<?=$item->id?>/<?=$item->video_cat_id?>"><?=$item->name?></a></div></td>
                                   <? }}?>
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
							        		<td align="left" valign="top"><div style="padding-top:5px;width:128px;text-align: center;">
							        		<?if(file_exists("./assets/greetings/gree_img".$greetings1['0']->id."_thumb.jpg")){ ?>
							        		<a href="<?=base_url();?>greetings/content/<?php if(isset($greetings1['0'])) {echo $greetings1['0']->type;}?>"><img id="img" src="<?=base_url();?>assets/greetings/gree_img<?=$item->id?>_thumb.jpg"  height="100px" width="130px"  vspace="0"></a></div>
							        		<div id="gall_botto_img" style="margin-top:-1px;text-align: center;"><a href="<?=base_url();?>greetings/content/<?php if(isset($greetings1['0'])) {echo $greetings1['0']->type;}?>"><?=$item->gree_cat?></a></div><?}?></td>
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
    							<div class="yui-content" style="height: 150px;text-align: left;" id="tabs_background">
							        <div id="tab1"><p><div style="padding-top:3px">
							        <? if(!empty($mahila_details)){?>
							        <div id="image"><?if(file_exists("./assets/mahila/news_img".$mahila_details['0']->id."_thumb.jpg")){ ?>
							        <a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details['0']->id?>/<?=$mahila_details['0']->cat_id?>"><img  id="img" src="<?=base_url();?>assets/mahila/news_img<?=$mahila_details['0']->id?>_thumb.jpg" /></a></div>
							        <?} ?>
							        <div id="mainnews"><a href="<?=base_url();?>mahila/mahiladetails/<?=$mahila_details['0']->id?>/<?=$mahila_details['0']->cat_id?>"><?=$mahila_details['0']->heading?></a></div>
							     <font style="font-size:14px;padding-top:5px;">  <?=$mahila_details['0']->summary?></font>
							       <?php  $i=1;$count=0;foreach($mahila_details as $item){
							           if($count==0)
							           {$count++;
							            continue;
							           }
							            
							           if($i>2)
							           break;?>
                                    <ul id="mainnews"> 
							        <li style="padding-top:5px;"><a href="<?=base_url();?>mahila/mahiladetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading?></a></li></ul><?$i++;}} ?></p>
							        </div><div id="more-news-div"><a href="<?=base_url()?>mahila/details/<?=$mahila_details['0']->cat_id ?>"><?=$more['0']->matter?></a></div></div>
							        <div id="tab2"><p><div style="padding-top:3px">
							     <?php if(!empty($sahithi_details)){?>
							        <div id="image"> <? if(file_exists("./assets/sahithi/news_img".$sahithi_details['0']->id."_thumb.jpg")){?>
							        <a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details['0']->id?>/<?=$sahithi_details['0']->cat_id?>"><img src="<?=base_url();?>assets/sahithi/news_img<?=$sahithi_details['0']->id?>_thumb.jpg" alt="hh" id="img"/></a></div>
							        <?} ?>
							        <div id="mainnews"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details['0']->id?>/<?=$sahithi_details['0']->cat_id?>"><?=$sahithi_details['0']->heading?></a></div>
							      <font style="font-size:14px;padding-top:5px;">   <?php echo $sahithi_details['0']->summary; ?></font>
							        <?$i=1;$count=0; foreach($sahithi_details as $item){
							        	 if($count==0)
							        	 {$count++;
							            continue;
							        	 }
							             if($i>2)
							           break;?>
							    <ul id="mainnews"> <li style="padding-top:5px;"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$item->id?>/<?=$item->cat_id?>"><?=$item->heading?></a></li></ul><? $i++;} ?></p></div>
							    <div id="more-news-div"><a href="<?=base_url()?>mahila/details/<?=$mahila_details['0']->cat_id ?>"><?=$more['0']->matter?></a></div>
    							</div></div><?php }?>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo3');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
        </td></tr></table></td>
	<td width="35%"><table  width="98%" align="left" style="margin-left:6px;" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="6" id="img-senter"><img src="<?=base_url();?>assets/imgs/tock-line.jpg" width="7" /></td>
                        <td valign="bottom" id="img-senter" align="left" style="margin-bottom: 10px;">
                        <table><tr><td width="20%"><img src="<?=base_url();?>assets/imgs/001.png"></img></td><td width="80%" id="telugufont"><?php echo $more['16']->matter;?></td></tr></table>
                        </td>
                        <td width="6"><img src="<?=base_url();?>assets/imgs/tock-line-right.jpg" width="6" height="34" /></td>
             		 </tr>
                      <tr>
                        <td  valign="top" id="center-img1"><img src="<?=base_url();?>assets/imgs/new1.jpg" width="5" /></td>
                        <td valign="top" id="center-img1" align="left">
                         <div id="home_poll" >
                 	<div style="padding-top: 3px;"><? if(!empty($newspoll['0']->question)){
                 	   echo $newspoll['0']->question;
                 	   ?></div>
     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$newspoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$newspoll[0]->id.'\',this.value,\''.base_url().'assets/imgs/bigrotation2.gif\')";' ?>
              					<?=form_radio('answer','a',FALSE,$attributes) ?>
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
                         <td id="center-img1"><img src="<?=base_url();?>assets/imgs/new.jpg" width="5"/></td>
                    </tr>
                  </table>
    </td></tr>
</table>				