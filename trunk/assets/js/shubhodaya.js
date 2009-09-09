function show_subscribe()
{
  var text_box =document.createElement('input');
  text_box.setAttribute('type','text');
  var close =document.createElement('img');
  close.setAttribute('src','./assets/imgs/delete_on.gif');
  close.setAttribute('hspace','25px');
  close.setAttribute('onclick','reload()');
  close.setAttribute('onmouseover','close');
  var send_button =document.createElement('input');
  send_button.setAttribute('type','button');
  send_button.setAttribute('onclick','subscribe(document.getElementById("subscribe").value)');
  send_button.setAttribute('value','Go');
  var text = document.createTextNode('Enter E-mail');
  text_box.id="subscribe";
  document.getElementById('newsletter').innerHTML="";
  
  document.getElementById('newsletter').appendChild(text);
  document.getElementById('newsletter').appendChild(close);
  document.getElementById('newsletter').appendChild(text_box);
  document.getElementById('newsletter').appendChild(send_button);
  
   
}
	 var xmlhttp;
	
function subscribe_ajax(str,base_url)
{
  
 
xmlhttp=GetXmlHttpObject();

if (xmlhttp==null)

  {

  alert ("Browser does not support HTTP Request");

  return;

  }

var url=base_url+"newsletter";

url=url+"/subscribe?email="+str;

url=url+"&sid="+Math.random();
//alert(url);

xmlhttp.onreadystatechange=stateChanged;

xmlhttp.open("GET",url,true);

xmlhttp.send(null);

}



function stateChanged()
{

if (xmlhttp.readyState==4)

{

document.getElementById("newsletter").innerHTML=xmlhttp.responseText;

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

 	    