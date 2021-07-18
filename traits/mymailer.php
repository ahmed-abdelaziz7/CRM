<?php
include $_SERVER['DOCUMENT_ROOT'].'/CRM/resources/PHPMailer/class.phpmailer.php';   
include $_SERVER['DOCUMENT_ROOT'].'/CRM/resources/PHPMailer/class.smtp.php';  

trait mymailer {
    
    public $my_email       = "crmproject44@gmail.com";
    public $email_password = "123456789CrmProject";
    public $form_name      = "CRM PROJECT"; 
    
    function send_mail($subject,$body,$user_email)
    {
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;
        $mail->Username   = "crmproject44@gmail.com";
        $mail->Password   = "123456789CrmProject";
        $mail->From       = "crmproject44@gmail.com";     
        $mail->FromName   = $this->form_name; 
        $mail->Subject    = $subject;
        $mail->AltBody    = $body;
        $mail->msgHTML($body);    
        $mail->addAddress($user_email, 'Client'); 
        $mail->isHTML(true); 
        $result = $mail->send();
        return ($result) ? true : false;
    }
}
