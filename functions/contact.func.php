<?php

function prepareMessage($name, $firstname, $mail, $reason, $message)
{
    $lang = changeLanguage();
    $sanitizeName = Lib::Sanitize($name);
    $sanitizeFirstName = Lib::Sanitize($firstname);
    $sanitizeMail = Lib::Sanitize($mail);
    $sanitizeReason = Lib::Sanitize($reason);
    $sanitizeMessage = Lib::Sanitize($message);
    $errors = array();

    if (empty($sanitizeName))
        $errors[] = $lang['contact']['emptname'];
    if (empty($sanitizeFirstName))
        $errors[] = $lang['contact']['emptfname'];
    if (empty($sanitizeMail))
        $errors[] = $lang['contact']['emptmail'];
    if (empty($sanitizeReason))
        $errors[] = $lang['contact']['emptreason'];
    if (empty($sanitizeMessage))
        $errors[] = $lang['contact']['emptmess'];
    if (!filter_var($sanitizeMail, FILTER_VALIDATE_EMAIL))
        $errors[] = $lang['contact']['wrmail'];
    if (!is_numeric($sanitizeReason))
        $sanitizeReason = 2;

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            ".
                $error
            ."
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            ";
        }
        return;
    } else {
        $reason = array(
            $lang['contact']['partner'],
            $lang['contact']['presse'],
            $lang['contact']['autre']
        );
        sendMessage(
            $sanitizeName,
            $sanitizeFirstName,
            $sanitizeMail,
            $reason[$sanitizeReason],
            $sanitizeMessage
        );
    }
}

function sendMessage($name, $firstname, $mail, $reason, $message)
{
    $lang = changeLanguage();
    $message = wordwrap($message, 70, "\r\n");
    $to = "corentin.mattern@epitech.eu";
    $subject = $lang['contact']['sendmail'].": ".$reason;
    $content =
    $lang['contact']['name'].": ".$name."\r\n".
    $lang['contact']['firstname'].": ".$firstname."\r\n".
    $lang['contact']['mail'].": ".$mail."\r\n".
    $lang['contact']['reason'].": ".$reason."\r\n".
    $lang['contact']['message'].": ".$message."\r\n".
    $headers = 'From: noreply@leaflighted.com'."\r\n".
    'Reply-To: '.$mail."\r\n".
    'X-Mailer: PHP/'.phpversion();
    mail($to, $subject, $content, $headers);
    echo "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
    ".
        $lang['contact']['success']
    ."
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    ";
}
