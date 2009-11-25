<div class="ratingblock">
    <div id="unit_long<?= $id ?>">
        <ul id="unit_ul<?= $id ?>" class="unit-rating" style="width: <?= $rating_unitwidth*$units ?>px;">
            <li class="current-rating" style="width: <?= $rating_width ?>px;">Currently <?= $rating2.'/'.$units ?></li>
        </ul>
        <p class="static">Rating: <strong><?= $rating1 ?></strong>/<?= $units.' ('.$count.' '.$tense.' cast)' ?> <em>This is static</em></p>
    </div>
</div> 