<?php
class Newsletter_model extends Model  {
	
 function Newsletter_model()
    {
        parent::Model();
    }
   
	function check_email_address($email) {
		
	  // First, we check that there's one @ symbol, 
	  // and that the lengths are right.
	  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
		// Email invalid because wrong number of characters 
		// in one section or wrong number of @ symbols.
		return FALSE;
	  }
	  // Split it into sections to make life easier
	  $email_array = explode("@", $email);
	  $local_array = explode(".", $email_array[0]);
	  for ($i = 0; $i < sizeof($local_array); $i++) {
		if
			(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
			?'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
			$local_array[$i])) {
		  		return FALSE;
			}
	  	}
	  // Check if domain is IP. If not, 
	  // it should be valid domain name
	  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
			return FALSE; // Not enough parts to domain
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
		  if
	(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
	?([A-Za-z0-9]+))$",
	$domain_array[$i])) {
			return FALSE;
		  }
		}
	  }
	  return TRUE;
	}
	
	//function to check email exists or not
	
	function check_newsletter_email($email)
	{
		$this->db->where('email', $email);
		$count = $this->db->count_all_results('newsletter');
		return $count;
	}
	
	// function to get all subscribers
	function get_subscribers()
	{
		$this->db->where('active',0);
		$this->db->order_by('insert_date','desc');
		$query = $this->db->get('newsletter');
		
		return $query->result();
		
	}
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('newsletter');
	}
	function count()
	{
		$this->db->from('newsletter');
		$count =$this->db->count_all_results();
		return $count;
	}
}
?>