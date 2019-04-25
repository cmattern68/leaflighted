<?php
include("functions/contact.func.php");
?>
<div class="modal-header">
    <h5 class="modal-title" id="contact-title">Contact</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form method="POST" action="">
            <?php
            if (isset($_POST['submit'])) {
                prepareMessage(
                    $_POST['name'],
                    $_POST['firstname'],
                    $_POST['email'],
                    $_POST['reason'],
                    $_POST['message']
                );
                ?>
                <script type='text/javascript'>
                    $(window).load(function(){
                        $('#contact-modal-id').modal('show');
                    });
                </script>
                <?php
            }
            ?>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name"><?php echo $lang['contact']['name']; ?></label>
                    <input type="text" class="form-control" id="name" placeholder="<?php echo $lang['contact']['name']; ?>" name="name">
                </div>
                <div class="col">
                    <label for="firstname"><?php echo $lang['contact']['firstname']; ?></label>
                    <input type="text" class="form-control" id="firstname" placeholder="<?php echo $lang['contact']['firstname']; ?>" name="firstname">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email"><?php echo $lang['contact']['mail']; ?></label>
            <input type="email" class="form-control" id="email" placeholder="<?php echo $lang['contact']['mail']; ?>" name="email">
        </div>
        <div class="form-group">
            <label for="reason"><?php echo $lang['contact']['reason']; ?></label>
            <select class="form-control" id="reason" name="reason">
                <option value="0"><?php echo $lang['contact']['partner']; ?></option>
                <option value="1"><?php echo $lang['contact']['presse']; ?></option>
                <option value="2"><?php echo $lang['contact']['autre']; ?></option>
            </select>
        </div>
        <div class="form-group">
            <label for="message"><?php echo $lang['contact']['message']; ?></label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <input type="submit" class="btn btn-success submit" id="submit" name="submit" value="<?php echo $lang['contact']['send']; ?>">
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['contact']['close']; ?></button>
</div>
