<!--<script type="text/javascript">
function toggle(el)
{
myEl = document.getElementById(el);
myEl.style.display = (myEl.style.display == 'block') ? 'none' : 'block';
}
function toggle1(el,ee)
{
	myE2 = document.getElementById(ee);
	myE2.style.display='none';
	myEl = document.getElementById(el);
	myEl.style.display = (myEl.style.display == 'block') ? 'none' : 'block';
}
function Validate(){
	 var x=document.getElementById("name").value;
	  if(x=="")
		{
		  alert('Enter your name');
		  return false;
		}
	  var y=document.getElementById("email").value;
	  if(y=="")
		  {
		  alert('Enter your E-mail');
		  return false;
	  	  }
	  var z=document.getElementByName("message").value;
	  if(z=="")
		  {
		  alert('Enter your comment');
		  return false;
		  }
}
</script>-->
<?=(isset($news_inner)) ? $news_inner : ''?>