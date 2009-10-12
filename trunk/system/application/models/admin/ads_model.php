<?php
class Ads_Model extends Model {
	function __construct()
  		{
  			parent::Model();
  		}
  	function adds_rename($details,$name){
   $oldname="assets/ads/".$details['upload_data']['file_name'];
 	
 	if(file_exists('assets/ads/'.$name.'.jpg')){
 		unlink('assets/ads/'.$name.'.jpg');
 		
 	}
 	 $rename_to ='assets/ads/'.$name.'.jpg';
  	$result=rename($oldname,$rename_to);
  	return $result;
  	}
}
?>