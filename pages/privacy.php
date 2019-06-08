<div class="modal fade bd-example-modal-xl privacy-modal" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true" id="contact-modal-id">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-css-content">
            <div class="modal-header hr">
                <h5 class="modal-title" id="contact-title"><?php echo Lib::Sanitize($lang['footer']['data']); ?></h5>
                <button type="button" class="close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo Lib::Sanitize($lang['privacy']['text-fline']); ?><br>
                <?php echo Lib::Sanitize($lang['privacy']['text-sline']); ?>
            </div>
            <div class="modal-footer top-hr">
                <button type="button" class="btn btn-secondary contact" data-dismiss="modal"><?php echo Lib::Sanitize($lang['contact']['close']); ?></button>
            </div>
        </div>
    </div>
</div>
