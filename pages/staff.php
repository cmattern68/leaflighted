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
<div class="<?php
        if (strcmp(getModeCookie(), 'LIGHT') == 0)
            echo 'staff-light';
        else if (strcmp(getModeCookie(), 'DARK') == 0)
            echo 'staff-dark';
        else
            echo 'staff-light';
        ?> box">
    <div class="container">
        <h2 class="staff-name"><?php echo Lib::Sanitize($lang['staff']['direction-part']); ?></h2>
        <div class="row <?php
                if (strcmp(getModeCookie(), 'LIGHT') == 0)
                    echo 'block-staff-light';
                else if (strcmp(getModeCookie(), 'DARK') == 0)
                    echo 'block-staff-dark';
                else
                    echo 'block-staff-light';
                ?>">
            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Thibaut Burckel</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['ceo']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Guillaume Billerey</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['cto']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="staff-name"><?php echo Lib::Sanitize($lang['staff']['sous-direct-part']); ?></h2>
        <div class="row">
            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Joachim Novak</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['design']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lucas Heitzmann</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['procedural']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row block-staff">
            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lucas Zimmer</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['moteur']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Frederic Lim</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['ia']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="staff-name"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></h2>
        <div class="row">
            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Timotée Cavali</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Corentin Delplanque</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Corentin Mattern</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']);?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card mb-3 staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Simon Baumgartner</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Victor Maue</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card mb-3  staff-bg <?php echo $blk; ?>">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/staff/default.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lucas Marsala</h5>
                                <p class="card-text"><?php echo Lib::Sanitize($lang['staff']['developper']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-us box">
    <div class="container h-100 contact-blck">
        <div class="row h-100 justify-content-center align-items-center">
            <div class=".col-6 .col-md-4">
                <h1 class="mt-5 idea"><?php echo Lib::Sanitize($lang['staff']['contact']); ?></h1>
                <button type="button" class="btn btn-primary btn-lg btn-block btn-info contact-btn" data-toggle="modal" data-target=".contact-modal"><?php echo Lib::Sanitize($lang['staff']['contact-us']); ?></button>
                <div class="modal fade bd-example-modal-xl contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" id="contact-modal-id">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content <?php
                                if (strcmp(getModeCookie(), 'LIGHT') == 0)
                                    echo 'modal-light';
                                else if (strcmp(getModeCookie(), 'DARK') == 0)
                                    echo 'modal-dark';
                                else
                                    echo 'modal-light';
                                ?>">
                            <?php include("contact.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
