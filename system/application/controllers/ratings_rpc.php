<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ratings_rpc extends Controller
{
    function Ratings_rpc()
    {
        parent::Controller();
        $this->load->model('ratings_model');
        
        $this->output->set_header("Cache-Control: no-cache");
        $this->output->set_header("Pragma: nocache");
    }
    
    function index()
    {        
        $url = $this->uri->uri_string();
		
		// debug
		if (!$url){
		echo "No url";
		}else{
		//echo $url." - Url is tight<br>";
		}
		
        $nojs = false;
        // check if javascript is disabled
        if (strstr($url,'nojs-1')){
            
            $nojs = false;    
        }
        

        if(preg_match('/vote-(\d+)\/idnum-(\d+)\/ipnum-(.{1,16})\/units-(\d+)/', $url, $matches)){

            $vote_sent = $matches[1];
            $id_sent = $matches[2];    
            $ip_num = $matches[3];
            $units = $matches[4];
            $ip = $this->input->ip_address();
        }
        else{
            
            die("Sorry, vote appears to be invalid.");
        }
            


        // kill the script because normal users will never see this.
        if ($vote_sent > $units) die("Sorry, vote appears to be invalid.");

        //default values
        $checkIP = NULL;
        $count = 0;
        $current_rating = 0;
        $sum = 0;
        $tense = "votes"; // 0 votes

        //get the current values!
        if ($numbers = $this->ratings_model->findBy_id($id_sent))
        {
            // kill the script if vote limit is exceeded.
            if ($vote_sent > $numbers['vote_limit']) die("Sorry, your vote appears to be invalid.");

            $checkIP = unserialize($numbers['used_ips']);
            $count = $numbers['total_votes']; //how many votes total
            $current_rating = $numbers['total_value']; //total number of rating
            $sum = $vote_sent + $current_rating; // add together the current vote value and the total vote value
            $tense = ($count == 1) ? "vote" : "votes"; //plural form votes/vote
        }

        // checking to see if the first vote has been tallied or increment the current number of votes
        ($sum == 0 ? $added = 0 : $added = $count + 1);

        // if it is an array i.e. already has entries the push in another value
        (is_array($checkIP) ? array_push($checkIP, $ip_num) : $checkIP = array($ip_num));

        //if the user hasn't yet voted, then vote normally...
        if ($this->ratings_model->countBy_ip($ip, $id_sent) == 0)
        {

            //make sure vote is valid and IP matches - no monkey business!
            if ($vote_sent > 0 && $ip == $ip_num)
            {
                $this->ratings_model->updateBy_id($id_sent, array(
                'total_votes' => $added,
                'total_value' => $sum,
                'used_ips'    => serialize($checkIP),
                ));
            }
        }

        //get the new values!
        if ($numbers = $this->ratings_model->findBy_id($id_sent))
        {
            $checkIP = unserialize($numbers['used_ips']);
            $count = $numbers['total_votes']; //how many votes total
            $current_rating = $numbers['total_value']; //total number of rating
            $tense = ($count == 1) ? "vote" : "votes"; //plural form votes/vote
            $units = $numbers['vote_limit']; //get the vote limit
        }

        $data = array(
        'id_sent' => $id_sent,
        'current_rating' => $current_rating,
        'count' => $count,
        'sum'   => $sum,
        'added' => $added,
        'units' => $units,
        'tense' => $tense,
        'rating_unitwidth' => $this->config->item('rating_unitwidth'),
        );
		
       // echo "ddd";
        if($nojs) //javascript is disabled
        {

            // redirect() of url_helper adds site_url() :(
           // header('Location: '.getenv('HTTP_REFERER'));

        }

        $this->load->view('newback', $data); ;
    }
} 