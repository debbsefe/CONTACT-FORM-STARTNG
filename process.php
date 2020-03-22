<?php
if(isset($_POST['submit'])){
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $data = $name . ", " . $email  . " , " . $phone . " , "  . $gender . " , ". $message . "\r\n";
    $myfile = fopen("$name.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $data);
    fclose($myfile);

    echo "<script type= 'text/javascript'>alert('Your message has been sent, I will get back to you in no time')</script>";
    echo "<script type='text/javascript'>document.location.href = 'index.html'</script>";

}
?>
