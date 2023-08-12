<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

session_start();


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$emailUser = $_POST['email'];
$username = explode("@", $emailUser);

try {
    //Server settings
    $mail->isSMTP();                                                     //Send using SMTP
    $mail->Host       = 'tls://smtp.gmail.com';                          //Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'academydecypher@gmail.com';                     //SMTP username
    $mail->Password   = 'zgmqbbwktrznimne';                              //SMTP password
    $mail->SMTPAuth   = true;                                            //Enable SMTP authentication
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;

    $mail->setFrom('academydecypher@gmail.com', 'Decypher Academy');
    $mail->addAddress($emailUser);


    // $mail->SMTPDebug = 3;

    //Content
    $mail->isHTML(true);                                                //Set email format to HTML
    $mail->Subject = 'Subscription Successful';
    $mail->Body    = '

    <table style="width: 100%; font-family: Arial, Helvetica, sans-serif;">
        <tbody>
            <tr>
                <td>
                    <table style=" width: 775px; margin: auto; background-color: #f4f4f4; color: black !important;">
                        <tr>
                            <td>
                                <table style="padding: 50px;" cellspacing="20px">
                                    <thead align="left">
                                        <tr>
                                            <th>
                                                <img src="https://kargojakarta.id/wp-content/uploads/2022/12/logo-1.png" width="65px">
                                                <h1 style="font-size: 32px;">Hello ' . $username[0] . ' </h1>
                                                <h2 style="font-size: 24px;">Thank you for your subscription on Decypher.</h2>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-size: 16px; line-height: 24px; font-weight: 600; height: 70px;">
                                                <p>
                                                    You will get the latest news such as the latest courses and some other important news which may be very useful for you.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;">
                                                <hr>
                                                <p>
                                                    This email was sent by Decypher Academy, a learning platform trusted by reputable organizations. The information in this email is confidential and only intended for students enrolled in Decypher Academy. Reproduction, distribution, and copying of this confidential information to other parties is prohibited without the approval of Decypher Academy.
                                                </p>
                                                <p>
                                                    If you have any questions, please email <a href="mailto:academydecypher@gmail.com">academydecypher@gmail.com</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    ';

    $mail->send();

    $_SESSION['status'] = "Thank You For Subscribe";
    header('location: http://localhost/decypher/');
} catch (Exception $e) {
    $_SESSION['status'] = 'error';
    header('location: http://localhost/decypher/');
}
