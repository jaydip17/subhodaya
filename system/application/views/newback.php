<!--unit_long<?= $id_sent ?>|
--><ul class="unit-rating" style="width: <?= $units*$rating_unitwidth ?>px;">
    <li class="current-rating" style="width: <?= @number_format($current_rating/$count,2)*$rating_unitwidth ?>px;"></li>
    <li class="r1-unit">1</li>
    <li class="r2-unit">2</li>
    <li class="r3-unit">3</li>
    <li class="r4-unit">4</li>
    <li class="r5-unit">5</li>
    <li class="r6-unit">6</li>
    <li class="r7-unit">7</li>
    <li class="r8-unit">8</li>
    <li class="r9-unit">9</li>
    <li class="r10-unit">10</li>
</ul>
<p class="voted">Rating: <strong><?= @number_format($sum/$added,1) ?></strong>/<?= $units.' ('.$count.' '.$tense.' cast)' ?>
<!--<span class="thanks">Thanks for voting!</span>--> </p>