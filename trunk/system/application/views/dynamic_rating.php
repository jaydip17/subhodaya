<div class="ratingblock">

	<div id="unit_long<?= $id ?>" style="text-align: right;padding-right: 5px;float:right;">
		<ul id="unit_ul<?= $id ?>" class="unit-rating" style="width: <?= $rating_unitwidth*$units ?>px;">
			<li class="current-rating" style="width: <?= $rating_width ?>px;"></li>
<?
				for ($i = 1; $i <= $units; $i++) { // loop from 1 to the number of units
					if(!$voted) { // if the user hasn't yet voted, draw the voting stars
						$link = ''.base_url().'ratings_rpc/index/vote-'.$i.'/idnum-'.$id.'/ipnum-'.$ip.'/units-'.$units.'/nojs-1" title="'.$i.' out of '.$units.' ';
						echo '<li><a onclick="rating_star('.$i.',\''.$id.'\',\''.$ip.'\','.$units.',\''.base_url().'\')" href="javascript:void(0)" class="r'.$i.'-unit rater" rel="nofollow"></a></li>';
					}
				}
				$i=0; // resets the count
?>
		</ul>
	 
	 
<?	 
      echo "<p";
      if($voted){ echo 'class="voted"'; }
      echo '> Rating: <strong> '.$rating1.'</strong>/'.$units.' ('.$count.' '.$tense.' cast)';
?>	  
	  
      </p>
      
	</div>
	
</div>
     
