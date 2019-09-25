<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POST Email</title>
</head>
<body>

<?php
    $myEmailAddress = "ravikant19932010@gmail.com";
    $subject = "Question from Just DO It!";

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $header = "from: $name <$email>";

    mail($myEmailAddress,$subject,$message,$header);

    ?>
    <p>Thanks for Sending.</p>
</body>
</html>