<?php
$lang = changeLanguage();
$blk = 'card-staff-light';
$games = Games::getGames();

if (strcmp(getModeCookie(), 'LIGHT') == 0)
    $blk = 'card-staff-light';
else if (strcmp(getModeCookie(), 'DARK') == 0)
    $blk = 'card-staff-dark';
else
    $blk = 'card-staff-light';

if (!empty($games)) {
?>
<div class="games box">
    <div class="container">
        <h1><?php echo Lib::Sanitize($lang['games']['games']); ?></h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                for ($i = 0; $i < sizeof($games); ++$i) {
                ?>
                <li data-target="#prevNextImg" data-slide-to="<?php echo $i; ?>" class="active"></li>
                <?php
                }
                ?>
            </ol>
            <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($games as $game) {
                ?>
                <div class="carousel-item <?php echo $i == 0 ? "active" : "nothing"; ?> gamesslide">
                    <a href="<?php echo Lib::Sanitize($game['href']); ?>"><img class="d-block" src="<?php echo Lib::Sanitize($game['path']); ?>" alt"<?php echo Lib::Sanitize($game['name']); ?>" height="250px"></a>
                </div>
                <?php
                ++$i;
            }
            ?>
            </div>
            <?php
            if (sizeof($games) > 1) {
            ?>
            <a class="carousel-control-prev" href="#prevNextImg" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo Lib::Sanitize($lang['games']['prev']); ?></span>
            </a>
            <a class="carousel-control-next" href="#prevNextImg" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo Lib::Sanitize($lang['games']['next']); ?></span>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
}
?>
