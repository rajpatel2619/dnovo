<?php

if (isset($_POST['contact'])) {
    $name =  $_POST['first_name'] . " " . $_POST['last_name'];
    $state =  $_POST['state'];
    $organisation =  $_POST['org'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    $sub =  $_POST['subject'];
    $msg =  $_POST['msg'];



    $to = "kakhilesh79@gmail.com,chairman@dnovo.org.in,Ceo@dnovo.org.in,Coo@dnovo.org.in,Cfo@dnovo.org.in,Cao@dnovo.org.in,Chro@dnovo.org.in,support@dnovo.org.in";
    $subject = "New Query from D'novo Solutions";

    $message = "
<html>
<head>
<title>New Query from D'novo Solutions</title>
</head>
<body>
<p style=`color:blue;`>Congrats! we got a new response from a new user! </p>
<div>
    <p><span style=`font-weight:bold;color:teal;`>Name : </span>{$name}</p>
    <p><span style=`font-weight:bold;color:teal;`>State : </span>{$state}</p>
    <p><span style=`font-weight:bold;color:teal;`>Organisation : </span>{$organisation}</p>
    <p><span style=`font-weight:bold;color:teal;`>Phone : </span>{$phone}</p>
    <p><span style=`font-weight:bold;color:teal;`>Email : </span>{$email}</p>
    <p><span style=`font-weight:bold;color:teal;`>Purpose : </span>{$sub}</p>
    <p><span style=`font-weight:bold;color:teal;`>Message : </span>{$msg}</p>
</div>
</body>
</html>
";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: support@dnovo.org.in' . "\r\n";

    mail($to, $subject, $message, $headers);
    header("Location: https://dnovo.org.in/");

}


if (isset($_POST['career'])) {
    $name =  $_POST['name'];
    $phone =  $_POST['phone'];
    $email =  $_POST['email'];
    $location =  $_POST['location'];
    $experience =  $_POST['experience'];
    $job =  $_POST['jobtype'];
    $resume =  $_POST['resume'];



    $to = "kakhilesh79@gmail.com,chairman@dnovo.org.in,Ceo@dnovo.org.in,Coo@dnovo.org.in,Cfo@dnovo.org.in,Cao@dnovo.org.in,Chro@dnovo.org.in,support@dnovo.org.in";
    $subject = "New Registration from D'novo Solutions";

    $message = "
<html>
<head>
<title>New Career Registration from D'novo Solutions</title>
</head>
<body>
<p style=`color:blue;`>Congrats! we got a new registration! </p>
<div>
    <p><span style=`font-weight:bold;color:teal;`>Name : </span>{$name}</p>
    <p><span style=`font-weight:bold;color:teal;`>Phone : </span>{$phone}</p>
    <p><span style=`font-weight:bold;color:teal;`>Email : </span>{$email}</p>
    <p><span style=`font-weight:bold;color:teal;`>Location : </span>{$location}</p>
    <p><span style=`font-weight:bold;color:teal;`>Experience : </span>{$experience}</p>
    <p><span style=`font-weight:bold;color:teal;`>Resume Link : </span>{$resume}</p>
    <p><span style=`font-weight:bold;color:teal;`>Job Type : </span>{$job}</p>
</div>
</body>
</html>
";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: support@dnovo.org.in' . "\r\n";

    mail($to, $subject, $message, $headers);
    header("Location: https://dnovo.org.in/");
    
}
