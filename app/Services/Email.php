<?php
/**
 * Created by PhpStorm.
 * User: mihail
 * Date: 22.09.19
 * Time: 18:23
 */

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    function sendEmail($email, $subject, $body, $from = 'artprestige2012@ya.ru', $image = null)
    {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $mail->CharSet = $mail::CHARSET_UTF8;
            //Server settings
//        $mail->SMTPDebug = 2;                                 // Enable verbose debug output

//            $mail->isSMTP();                                      // Set mailer to use SMTP
//            $mail->Host = '10.2.4.192';//'smtp.yandex.ru';//'localhost';//'10.2.4.192';//'localhost';  // Specify main and backup SMTP servers

        $mail->Host = 'smtp.yandex.ru';//'localhost';//'10.2.4.192';//'localhost';
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'mishamal';                 // SMTP username
        $mail->Password = 'victoria12';                           // SMTP password
        $mail->SMTPSecure = 'tls';//false;//'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;//25;                                    // TCP port to connect to

            $mail->setFrom($from, 'Типография ПолиГраф');
            $mail->addAddress($email);

            //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            $mail->setLanguage('ru');
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject; //'Из типографии. По визиткам';
            if ($image) {
                $mail->addEmbeddedImage($image, 'photo');
            }
            $mail->msgHTML($body);

            $mail->send();
            file_put_contents('/home/mihail/dev/send_email/sent_emails', $email . ";\n", FILE_APPEND);
            echo 'Message has been sent to ' . $email . "\n";
        } catch (\Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }
}
