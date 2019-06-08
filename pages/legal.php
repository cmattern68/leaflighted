<div class="modal fade bd-example-modal-xl legal-modal" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" id="contact-modal-id">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-css-content">
            <div class="modal-header hr">
                <h5 class="modal-title" id="contact-title"><?php echo Lib::Sanitize($lang['footer']['mentions']); ?></h5>
                <button type="button" class="close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3><?php echo Lib::Sanitize($lang['legal']['rea']); ?></h3>
                <div class="row">
                    <dt class="col-sm-3">Leaflighted - <?php echo Lib::Sanitize($lang['legal']['sircom']); ?></dt>
                    <dd class="col-sm-9">
                        <p>Projet leaflighted<br>
                        4 rue du dôme<br>
                        67000 Strasbourg - France</p>
                    </dd>
                </div>
                <h3><?php echo Lib::Sanitize($lang['legal']['host']); ?></h3>
                <div class="row">
                    <dt class="col-sm-3">OVH</dt>
                    <dd class="col-sm-9">
                        <p>Siège social<br>
                        2 rue Kellermann<br>
                        59100 Roubaix - France</p>
                    </dd>
                </div>
                <h3><?php echo Lib::Sanitize($lang['legal']['author']); ?></h3>
                <p>
                    <?php echo Lib::Sanitize($lang['legal']['text']); ?>
                </p>
            </div>
            <div class="modal-footer top-hr">
                <button type="button" class="btn btn-secondary contact" data-dismiss="modal"><?php echo Lib::Sanitize($lang['contact']['close']); ?></button>
            </div>
        </div>
    </div>
</div>
