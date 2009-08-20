<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="<?=base_url();?>assets/style-admin.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/ddsmoothmenu.css" />
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/ddsmoothmenu.js"></script>
<link rel="stylesheet" href="<?=base_url();?>assets/openwysiwyg/docs/style.css" type="text/css">
<? if(isset($jslinks)): echo $jslinks; endif;?>
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<title>Admin</title>
</head>
<body >

<table width="945" border="0" cellpadding="0" cellspacing="0" align="center" >
	<tr>
     	<td>
        <div class="admin-header" >Subhodaya</div> 
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="<?=base_url();?>admin/">Home</a></li>
<li><a href="#">News</a>
	<ul>
		<li><a href="<?=base_url();?>admin/news/">Add News</a></li>
		<li><a href="<?=base_url();?>admin/news/getnews">Edit News</a></li>
	</ul>
</li>
<li><a href="#">Movies</a>
  <ul>
  <li><a href="<?=base_url();?>admin/cinema">Insert</a></li>
  <li><a href="<?=base_url();?>admin/cinema/getcinema">Edit News</a></li>
  </ul>
</li>
<li><a href="#">Video</a>
	<ul>
  	<li><a href="<?=base_url();?>admin/videos/addcategeory/">Add Categeory</a></li>
  	<li><a href="<?=base_url();?>admin/videos/">Add Video</a></li>
  	<li><a href="#">View/Edit Video</a></li>
  	</ul>
</li>
<li><a href="#">Greetings</a>
	<ul>
		<li><a href="<?=base_url();?>admin/greetings">Insert</a></li>
		<li><a href="<?=base_url();?>admin/greetings/editpage/">Edit</a></li>
	</ul>
</li>
<li><a href="#">Mahila</a>
<ul>
  <li><a href="<?=base_url();?>admin/mahila">Insert</a></li>
  <li><a href="<?=base_url();?>admin/mahila/getmahilatype">View/Edit</a></li>
 </ul> 
</li>

<li><a href="#">Sahithi</a>
  <ul>
  <li><a href="<?=base_url();?>admin/sahithi">Add</a></li>
<li><a href="<?=base_url();?>admin/sahithi/getsahithitype">Edit</a></li>
  </ul>
  </li> 
<li><a href="#">Gallery</a>
  <ul>
  	<li><a href="<?=base_url();?>admin/gallery">Add Categeory</a></li>
	<li><a href="#">edit</a></li>
	<li><a href="#">View/Edit Videos</a></li>
  </ul>
</li>
<li><a href="#">Poll</a>
  <ul>
  	<li><a href="<?=base_url();?>admin/poll">Poll Add</a></li>
	<li><a href="<?=base_url();?>admin/poll/getpoll">Edit/Change</a></li>
  </ul>
</li>
<li><a href="#">Other</a>
  <ul>
  	<li><a href="<?=base_url();?>admin/contacts">Contacts</a></li>
  </ul>
</li>
  <!--<li><a href="#">Other</a>
<ul>
<li><a href="#">Poll</a>

  <ul>
   <li><a >poll add</a></li>
  <li><a href="<?=base_url();?>admin/poll/newspoll_view"">Edit/Change</a></li>
  </ul>
  </li>
  <li> <a href="#">cinemapoll</a> 
		<ul>
			<li><a href="#" >Edit/Change</a>
			</li>
			
		</ul>
	</li>
  </ul>
  </li>-->
<? $logout = $this->Login_Model->login_validate('logout'); if($logout!="no"):?>

<li><a href="<?=base_url()."admin/login/logout" ?>">Logout</a></li>

<? endif; ?>
</ul>
<br style="clear: left" />
</div>
        </td>
    </tr>
    <tr>
    	<td align="center" style="padding-top: 15px;" valign="middle">
{yield}
      </td>
    </tr>
</table>
</body>
</html>