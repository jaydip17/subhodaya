var xmlhttp;
var id;
function rating_star(vote,idnum,ipnum,units,siteurl)
{	//alert(idnum);
	id = idnum;

xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var urls = siteurl+'ratings_rpc/index/vote-'+vote+'/idnum-'+idnum+'/ipnum-'+ipnum+'/units-'+units+'/nojs-1';
var url="getuser.php";
url=url+"?q="+vote;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",urls,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
	//	alert(xmlhttp.responseText);
document.getElementById('unit_long'+id).innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}