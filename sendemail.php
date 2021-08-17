<?php
    require 'vendor/autoload.php';

    class SendEmail{
        public static function SendMail($to, $subject, $content) {
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("maccari78@gmail.com", "Danilo Maccari");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            // $email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try {
                $responce = $sendgrid->send($email);
                return $responce;
            } catch (Exception $e) {
                echo 'Email exception caught: '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>