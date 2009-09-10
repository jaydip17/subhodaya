<div class="ratingblock">
    <div id="unit_long<?= $id ?>">
        <ul id="unit_ul<?= $id ?>" class="unit-rating" style="width: <?= $rating_unitwidth*$units ?>px;">
            <li class="current-rating" style="width: <?= $rating_width ?>px;">Currently <?= $rating2.'/'.$units ?></li>
            <?php
                for ($i = 1; $i <= $units; $i++) // loop from 1 to the number of units
                {
                   if (!$voted) // if the user hasn't yet voted, draw the voting stars
                   {
                      // r=1 in url provides for javascript being disabled
                      echo '<li><a href="rpc.php?j='.$i.'&amp;q='.$id.'&amp;t='.$ip.'&amp;c='.$units.'&amp;r=1" title="'.$i.' out of '.$units.'" class="r'.$i.'-unit rater" rel="nofollow">'.$i.'</a></li>';
                   }
                }
                $i = 0;
                $pclass = ($voted) ? ' class="voted"' : '';
              ?>
        </ul>
        <p<?= $pclass ?>><?= $id ?> Rating: <strong><?= $rating1 ?></strong>/<?= $units.' ('.$count.' '.$tense.' cast)' ?></p>
    </div>
</div> 