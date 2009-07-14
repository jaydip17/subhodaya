var xmlhttp;

function loadPoll(url,somevalue)
{

 url = url+'/'+somevalue;
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Mozilla, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE5, IE6
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=get_Poll;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}
function get_Poll()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"
    document.getElementById('home_poll').innerHTML=xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
  }
}
