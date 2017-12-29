<?php
	if($_POST) {
		if($_POST['city'] != ''){
	    	echo "";
		}
		elseif($_POST["message"] == "" || $_POST["yourname"] == "" || $_POST["emailaddr"] == "") {
			echo "";
		}
		else {
			$to 		= 	"kyle.sjostrand@gmail.com,stacy@theironwaffle.com";
			$pname		= 	htmlspecialchars($_POST["yourname"]);
			$emailaddr 	= 	htmlspecialchars($_POST["emailaddr"]);
			$phonenumber = 	htmlspecialchars($_POST["telephone"]);
			$subject 	= 	"The Iron Waffle Customer email";
			$themessage = 	nl2br(htmlspecialchars($_POST['message']));
			$theYear	= 	date("Y");
			$message 	= 	'<html> <head> <title>Website Emailer</title> </head> <body style="font-family: arial, sans-serif; color: #444444;"> <table class="alt-wrap-none" width="650" align="center" style="width: 650px;"> <tr> <td height="25" style="font-size: 14px;"></td></tr></table> <table class="page-wrap-outer" bgcolor="#ffffff" cellpadding="0" cellspacing="0" align="center" style="width: 650px; margin: 0 auto; border: 1px solid #5187c5;"> <tr> <td style="font-size: 14px;"> <table class="page-wrap-inner" align="center" style="width: 600px; margin: 10px auto;"> <tr> <td style="font-size: 14px;"> <table class="page-wrap-inner" align="center" style="width: 600px; margin: 10px auto;"> <tr> <td style="font-size: 14px;"> <h1 style="text-align: center;" align="center">Message From Website Email Form</h1> </td></tr></table> </td></tr><tr> <td style="font-size: 14px;"> <span class="infolabel" style="font-size: 16px; font-weight: 700;">From: </span>'.$pname.' </td></tr><tr> <td height="10" style="font-size: 14px;"></td></tr><tr> <td style="font-size: 14px;"> <span class="infolabel" style="font-size: 16px; font-weight: 700;">Email Address: </span>'.$emailaddr.' </td></tr><tr> <td height="20" style="font-size: 14px;"></td></tr></table> <table class="alt-wrap-outer" bgcolor="f0f0f0" style="border-top-width: 1px; border-top-color: #cccccc; border-top-style: solid; width: 650px; background: #f0f0f0;"> <tr> <td style="font-size: 14px;"> <table class="page-wrap-inner" align="center" width="600" style="width: 600px; margin: 10px auto;"> <tr> <td style="font-size: 14px;"> <h2>Message Content</h2> </td></tr><tr> <td style="font-size: 14px;">'. $themessage .'</td></tr></table> </td></tr></table> </td></tr></table> </body></html> ';


			$headers	=	"From: Website Emailer <emailer@theironwaffle.com>\r\n";
			$headers	.=	"Reply-To: " .$emailaddr. "\r\n";
			$headers	.=	"MIME-Version: 1.0\r\n";
			$headers 	.=	"Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers	.=	"X-Mailer: PHP/" . phpversion();

			mail($to, $subject, $message, $headers);
			header("Location: /");
		}
	}
?>




