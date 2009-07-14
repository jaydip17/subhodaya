<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function grabgmail($login,$password)
{
include_once 'gmail.php';
$resultarray = get_contacts($login, $password);

	
	#if contacts were retreived successfully:
  if(is_array($resultarray))
	{
    #the first array_shift of the result will give you the names in an array
		$names = array_shift($resultarray);
		#the second array_shift of the result will give you the emails
		$emails = array_shift($resultarray);
		
		$result = array($names,$emails);
		return $result;
			
	}
  else #else print out the form with the error message
  {
    switch ($resultarray)
    {
      case 1: #invalid login
        $formdisclaimer = "<br><b style=\"color:red\">Invalid Login</b><br>";
        break;
      case 2: #empty username or password
        $formdisclaimer = "<br><b style=\"color:red\">Enter Your Username and Password</b><br>";
        break;
    }
    echo "error";
  	//include("form.php");
  }
}
