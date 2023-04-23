<?php
if(isset($_POST['submit'])){
    $to = "nmunkoev@gmail.com"; // замените на свой email
    $subject = "Заявка с сайта";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();
    if(mail($to, $subject, $message, $headers)){
        echo "<p>Сообщение отправлено успешно!</p>";
    } else{
        echo "<p>Что-то пошло не так. Попробуйте еще раз.</p>";
    }
}
?>
