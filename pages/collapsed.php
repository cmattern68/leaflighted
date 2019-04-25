<?php
$lang = changeLanguage();
?>
<div class="bg-dark p-4 <?php
        if (strcmp(getModeCookie(), 'LIGHT') == 0)
            echo 'navbar-dev-light';
        else if (strcmp(getModeCookie(), 'DARK') == 0)
            echo 'navbar-dev-dark';
        else
            echo 'navbar-dev-light';
        ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                &nbsp;
            </div>
            <div class="col-sm rite-bock">
                <img src="assets/jaquette.jpg" height="250px" class="rounded mx-auto d-block filter">
                <figcaption class="rite-log-txt"><?php echo $lang['home']['comming-soon']; ?></figcaption>
                <button type="button" class="btn btn-info hover-show">Pre-Order</button>
            </div>
            <div class="col-sm">
                &nbsp;
            </div>
        </div>
    </div>
</div>
