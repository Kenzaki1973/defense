<?php

use CodeIgniter\Email\Email;
use App\Models\EmailSettingsModel;

function sendEmail($username, $to, $subject, $controllerUrl = null, $token) {

    // Make the SMPT config editable
    // it makes your client control even the mailing system
    $emailSetting = new EmailSettingsModel();
    $settingsInfo = $emailSetting->findAll();
    $email = \Config\Services::email();

    $config['SMTPHost'] = $settingsInfo[0]['smtp_host'];
    $config['SMTPUser'] = $settingsInfo[0]['smtp_username'];
    $config['SMTPPass'] = $settingsInfo[0]['smtp_password'];
    $config['SMTPCrypto'] = $settingsInfo[0]['smtp_secure'];
    $config['SMTPPort']= $settingsInfo[0]['smtp_port'];
    $config['charset'] = $settingsInfo[0]['smtp_charset'];

    $email->initialize($config);


    //Theres a lot of things to change here but its functional
    $data = [
        'full_name' => $full_name,
        'url' => base_url() .$controllerUrl. $token
    ];

    if($subject == 'Account Activation'):
        $mailContent = view('User/mail/activation_account', $data);
    elseif($subject == 'Reset Password'):
        $mailContent = view('User/mail/forgot_password', $data);
    else:
        $data['otp_code'] = $token;
        $mailContent = view('mail/otp_mail', $data);
    endif;

    $email->setReplyTo('you@example.com', 'Your Name');
    $email->setTo($to);
    $email->setFrom('localcivilregistryofbaco@gmail.com', $subject); 
    $email->setMessage($mailContent);
    $email->setnewline("\r\n");
    $email->send();
}




