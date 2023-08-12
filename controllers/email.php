<?php
// var_dump($_POST);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$handphone = $_POST['no-handphone'];
$message = $_POST['message'];

header("Location: mailto:academydecypher@gmail.com?subject=Customer%20Question&body=Fullname%20%3A%20$firstname%20$lastname%0D%0AEmail%20%3A%20$email%0D%0APhone%20Number%20%3A%20$handphone%0D%0A%0D%0AQuestion%20%3A%0D%0A$message");
