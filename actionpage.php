<?php

date_default_timezone_set('Asia/Hong_Kong');
session_start();
if (isset($_POST["submit"])) {
    $postdata = $_POST;
    $capture = $_SESSION["captcha"];

    if ($capture == $postdata["captcha"]) {
        
    }
};

$htmlwebmail = sprintf(
        '<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>ENES Globle Hong Kong</title>
        <style>
            th, td{
                padding: 10px;
            }
        </style>
    </head>

    <body style="margin:0px; background: #f8f8f8; ">
        <div width="700px;" style="background: #f0f0ff; padding: 0px 0px; font-family:arial; line-height:28px;   width: 700px; color: #514d6a;">
            <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 700px;background: #ddd1d1;">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:30px;" align="center">
                                <a href="/" target="_blank">
                                    <img src="https://octopuscart.in/images/logo.png" alt="ENES Globle" style="border:none;height:70px;margin-top: 25px;"/></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 600px;">
                        <tbody>

                            <tr>
                                <td style="    text-align: center;font-size: 18px;">


                                    <b>Dear %s,</b>
                                    <p>Thank you for your enquiry, Our team will connect you shortly.</p>

                                    <table style="font-size: 12px;    font-size: 12px;
                                           text-align: center;
                                           width: 300px; 
                                           margin: 10px 100px;
                                           background: white;
                                           color: black;
                                           border-radius: 39px;">
                                        <tr >
                                            <th style=" padding: 10px;text-align: right;width:200px;padding-right: 10px;">Name</th>
                                            <td style="  padding: 10px;   text-align: left;">%s</td>
                                        </tr>
                                        <tr>
                                            <th style=" padding: 10px;text-align: right;padding-right: 10px;">Email</th>
                                            <td style="  padding: 10px;  text-align: left;">%s</td>
                                        </tr>
                                        <tr>
                                            <th style=" padding: 10px;text-align: right;padding-right: 10px;">Contact No.</th>
                                            <td style="  padding: 10px;   text-align: left;">%s</td>
                                        </tr>
                                        <tr>
                                            <th style=" padding: 10px;text-align: right;padding-right: 10px;">Product</th>
                                            <td style="  padding: 10px;   text-align: left;">%s</td>
                                        </tr>
                                        <tr>
                                            <th style=" padding: 10px;text-align: right;padding-right: 10px;">Date</th>
                                            <td style="   padding: 10px;  text-align: left;">%s</td>
                                        </tr>

                                        <tr>
                                            <th style=" padding: 10px;text-align: right;width:200px;padding-right: 10px;">Time</th>
                                            <td style="  padding: 10px;   text-align: left;">%s</td>
                                        </tr>




                                    </table>



                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div style="    text-align: center;
                     font-size: 10px;
                     background: #ddd1d1;
                     color: antiquewhite;
                     padding: 10px;">
                    <table style="font-size: 12px;">
                        <tr>
                            <th style="text-align: left;" rowspan="2">
                                                                    <img src="https://octopuscart.in/images/logo.png" alt="ENES Globle" style="border:none;height:40px;margin-top: 25px;"/></a>

                            </th>
                            <th style="text-align: left;">Address</th>
                            <th style="text-align: left;">Contacts</th>
                           <th style="text-align: left;">Email</th>
                        </tr>
                        <tr>
                            <td style="text-align: left;">Flat B, 4th Floor,<br/>
                                Yen Chun Mansion,<br/>
                                Block 18-26 Portland Street,<br/>
                                Yau Ma Tei, Kowloon, Hong Kong</td>
                            <td style="text-align: left;">(+852) 9274 1833<br/>(+852) 9147 1870</td>
                            <td style="text-align: left;">sales@octopuscart.in<br/>
                                sajid@octopuscart.in</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </body>

</html>', ...[
    $postdata["name"],
    $postdata["name"],
    $postdata["email"],
    $postdata["contact_no"],
    $postdata["product"],
    date("Y-m-d"),
    date("h:m:s A"),
        ]
);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'server.costcokart.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'noreply@octopuscart.in';                     //SMTP username
    $mail->Password = 'Q25NzP74lPzw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('noreply@octopuscart.in', 'ENES GLOBAL TRADING LIMITED');
    $mail->addAddress('octopuscartltd@gmail.com', 'Joe User');     //Add a recipient
    $mail->addReplyTo('sales@octopuscart.in', 'ENES GLOBAL TRADING LIMITED');
    $mail->addCC('sales@octopuscart.in');
//    $mail->addBCC('bcc@example.com');
    //Optional name
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thank you for your enquiry';
    $mail->Body = $htmlwebmail;

    $mail->send();
    header("Location: https://octopuscart.in");
    die();
} catch (Exception $e) {
    header("Location: https://octopuscart.in");
    die();
}