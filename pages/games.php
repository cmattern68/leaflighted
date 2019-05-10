<?php
$lang = changeLanguage();
$blk = 'card-staff-light';
if (strcmp(getModeCookie(), 'LIGHT') == 0)
    $blk = 'card-staff-light';
else if (strcmp(getModeCookie(), 'DARK') == 0)
    $blk = 'card-staff-dark';
else
    $blk = 'card-staff-light';
?>
<div class="games box">
    <div class="container">
        <h1><?php echo $lang['games']['games']; ?></h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#prevNextImg" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active gamesslide">
                    <a href="#"><img class="d-block" src="assets/jaquette.jpg" alt"Rite" height="250px"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#prevNextImg" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo $lang['games']['prev']; ?></span>
            </a>
            <a class="carousel-control-next" href="#prevNextImg" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo $lang['games']['next']; ?></span>
            </a>
        </div>
    </div>
</div>
