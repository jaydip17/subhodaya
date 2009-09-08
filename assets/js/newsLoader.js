var xmlhttp;
var div_id;
var main_page;
var url;
function loadVideos(id,url,url_names,main)
{
url_new=url_names;
//alert(url_names);
main_page = main;
//alert(main);
div_id=id;
//alert(div_id);
//alert(div_id);
 //alert("hello");
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Mozilla, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE5, IE6
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if(xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=get_Videoslist;
  
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }

}
function get_Videoslist()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"
    document.getElementById('div'+div_id).innerHTML=xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
    if(main_page=="body")
   {
   //alert("h");
   loadNews('allimg',url_new,'','none');
   }
  }
}
  
 function loadNews(id,url)
{
div_id=id;
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Mozilla, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE5, IE6
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if(xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=get_Newslist;
  
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }

}
function get_Newslist()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"
  //  var oScript = document.createElement("script");
 //   oScript.src = "http:localhost/subhodaya/assets/js/imagemouseover.js";
 //   document.body.appendChild(oScript);
    document.getElementById('div'+div_id).innerHTML= xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
  
  }
 }
 
