<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function grabgmail($login,$password,$page)
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
    if($page=="home")
    {
    	redirect(base_url());
    }
    else { 
   redirect(base_url().'admin/contacts/index/1');
    }
  	//include("form.php");
  }
  
  
}

//grab yahoo contacts
  
  function grabyahoo($login,$password)
  {
  	require 'baseclass/baseclass.php';
  	require("yahoo/class.GrabYahoo.php");
	 		$obj = new GrabYahoo();
	 		$contacts = $obj->getAddressbook($login,$password);
	 		$fp = fopen("./assets/cookie.txt","w+");
		fwrite($fp,"");				
		fclose($fp);
	 	if(!is_array($contacts))
	 	{
	 		redirect(base_url().'admin/contacts/index/1');
	 		//die('<p align="center"><font color="#FF0000">No contacts found</font></p>');
	 	}
		if(is_array($contacts))
		{
			$totalRecords=0;
			$actualfile = $login.time().".csv";
//        	$fileName="./assets/csvUpload/".$actualfile;
//        
//			$handler= fopen($fileName,"a");
//			fwrite($handler,"NAME".","."EMAIL"."\n");
		
			$total = sizeof($contacts['name']);
			
			//print the addressbook 
			
			for ($i=0;$i< $total;$i++) 
			{
				$totalRecords = $totalRecords+1;
				$rep 		  = array("<br>","&nbsp;");
				
				
				$contacts['email'][$i] = str_replace($rep, "",$contacts['email'][$i]);
				$contacts['name'][$i]  = str_replace($rep, "",$contacts['name'][$i]);
				$names[$i] = $contacts['name'][$i];
				$emails[$i] = $contacts['email'][$i];
				//fwrite($handler,$contacts['name'][$i].",".$contacts['email'][$i]."\n");
			}
			
			//fclose($handler);
		}
		$result = array($names,$emails);
		return $result;
		//return array($names,$emails);
  }
