<?PHP
	header("Location: http://qsconference.com"); //Redirect URL
	
	//POST content from form to variables
	$gifterName = $_POST["gifterName"];
	$gifterEmail = $_POST["gifterEmail"];
	$phoneNumber = $_POST["phoneNumber"];
	$recipientName = $_POST["recipientName"];
	$recipientEmail = $_POST["recipientEmail"];
	
	$status1 = $gifterName." has generously offered to pay for ".$recipientName."'s ticket to QSC 2016. All they have to do is fill out the <a href='http://qsconference.com/application.html'>application</a> on our website. This can be found at: http://qsconference.com/application.html . They have also been sent this email.";
	$status2 = $gifterName.", you have generously offered to pay for ".$recipientName."'s ticket to QSC 2016. All they have to do is fill out the <a href='http://qsconference.com/application.html'>application</a> on our website. This can be found at: http://qsconference.com/application.html . They have also been sent this email.";
	$status3 = $gifterName." has generously offered to pay for your ticket to QSC 2016. All you need to do is fill out the <a href='http://qsconference.com/application.html'>application</a> on our website. This can be found at: http://qsconference.com/application.html .";
	
	//Prepare Email
	$to1 = "qsconference@gmail.com";
	$to2 = $gifterEmail;
	$to3 = $recipientEmail;
	$subject1 = $gifterName." has gifted a ticket to ".$recipientName." for QSC 2016!";
	$subject2 = "Thank you for giving a ticket to QSC 2016!";
	$subject3 = "You have been gifted a ticket QSC 2016!";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: z.harley@qsconference.com\r\n";
	
	$message1 = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraph.org/schema/"> <head>
	
	<meta property="fb:page_id" content="43929265776" />        
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!-- Facebook sharing information tags -->
	<meta property="og:title" content="Queen&#039;s Space Conference: Delegate Application Confirmation">
	
	<title>Queen&#039;s Space Conference: Delegate Application Confirmation</title>
	
	<style type="text/css">
		#outlook a{
		padding:0;
		}
		body{
		width:100% !important;
		}
		.ReadMsgBody{
		width:100%;
		}
		.ExternalClass{
		width:100%;
		}
		body{
		-webkit-text-size-adjust:none;
		}
		body{
		margin:0;
		padding:0;
		}
		img{
		border:0;
		height:auto;
		line-height:100%;
		outline:none;
		text-decoration:none;
		}
		table td{
		border-collapse:collapse;
		}
		#backgroundTable{
		height:100% !important;
		margin:0;
		padding:0;
		width:100% !important;
		}
		body,#backgroundTable{
		background-color:#FAFAFA;
		}
		#templateContainer{
		border:1px solid #DDDDDD;
		}
		h1,.h1{
		color:#202020;
		display:block;
		font-family:Arial;
		font-size:34px;
		font-weight:bold;
		line-height:100%;
		margin-top:0;
		margin-right:0;
		margin-bottom:10px;
		margin-left:0;
		text-align:left;
		}
		h2,.h2{
		color:#202020;
		display:block;
		font-family:Arial;
		font-size:30px;
		font-weight:bold;
		line-height:100%;
		margin-top:0;
		margin-right:0;
		margin-bottom:10px;
		margin-left:0;
		text-align:left;
		}
		h3,.h3{
		color:#202020;
		display:block;
		font-family:Arial;
		font-size:26px;
		font-weight:bold;
		line-height:100%;
		margin-top:0;
		margin-right:0;
		margin-bottom:10px;
		margin-left:0;
		text-align:left;
		}
		h4,.h4{
		color:#202020;
		display:block;
		font-family:Arial;
		font-size:22px;
		font-weight:bold;
		line-height:100%;
		margin-top:0;
		margin-right:0;
		margin-bottom:10px;
		margin-left:0;
		text-align:left;
		}
		#templatePreheader{
		background-color:#FAFAFA;
		}
		.preheaderContent div{
		color:#505050;
		font-family:Arial;
		font-size:10px;
		line-height:100%;
		text-align:left;
		}
		.preheaderContent div a:link,.preheaderContent div a:visited,.preheaderContent div a .yshortcuts {
		color:#336699;
		font-weight:normal;
		text-decoration:underline;
		}
		#templateHeader{
		background-color:#FFFFFF;
		border-bottom:0;
		}
		.headerContent{
		color:#202020;
		font-family:Arial;
		font-size:34px;
		font-weight:bold;
		line-height:100%;
		padding:0;
		text-align:center;
		vertical-align:middle;
		}
		.headerContent a:link,.headerContent a:visited,.headerContent a .yshortcuts {
		color:#336699;
		font-weight:normal;
		text-decoration:underline;
		}
		#headerImage{
		height:auto;
		max-width:600px;
		}
		#templateContainer,.bodyContent{
		background-color:#FFFFFF;
		}
		.bodyContent div{
		color:#505050;
		font-family:Arial;
		font-size:14px;
		line-height:150%;
		text-align:left;
		}
		.bodyContent div a:link,.bodyContent div a:visited,.bodyContent div a .yshortcuts {
		color:#336699;
		font-weight:normal;
		text-decoration:underline;
		}
		.bodyContent img{
		display:inline;
		height:auto;
		}
		#templateFooter{
		background-color:#FFFFFF;
		border-top:0;
		}
		.footerContent div{
		color:#707070;
		font-family:Arial;
		font-size:12px;
		line-height:125%;
		text-align:left;
		}
		.footerContent div a:link,.footerContent div a:visited,.footerContent div a .yshortcuts {
		color:#336699;
		font-weight:normal;
		text-decoration:underline;
		}
		.footerContent img{
		display:inline;
		}
		#social{
		background-color:#FAFAFA;
		border:0;
		}
		#social div{
		text-align:center;
		}
		#utility{
		background-color:#FFFFFF;
		border:0;
		}
		#utility div{
		text-align:center;
		}
		#monkeyRewards img{
		max-width:190px;
		}
		</style></head> <body id="archivebody"> 
        <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: #FAFAFA;width: 100% !important;">
			<center>
				<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable" style="margin: 0;padding: 0;background-color: #FAFAFA;height: 100% !important;width: 100% !important;">
					<tr>
						<td align="center" valign="top" style="border-collapse: collapse;">
							<!-- // Begin Template Preheader \\ -->
							<table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader" style="background-color: #FAFAFA;">
								<tr>
									<td valign="top" class="preheaderContent" style="border-collapse: collapse;">
										
										<!-- // Begin Module: Standard Preheader \ -->
										<table border="0" cellpadding="10" cellspacing="0" width="100%">
											<tr>
												<td valign="top" style="border-collapse: collapse;">
													<div style="color: #505050;font-family: Arial;font-size: 10px;line-height: 100%;text-align: left;"><p class="p1">Welcome to the Queen&#39;s Space Conference mailing list. We&#39;ll keep you up to date with the latest information about conference speakers, timeline, and events.</p>
													</div>
												</td>
												<!--  -->
											</tr>
										</table>
										<!-- // End Module: Standard Preheader \ -->
										
									</td>
								</tr>
							</table>
							<!-- // End Template Preheader \\ -->
							<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border: 1px solid #DDDDDD;background-color: #FFFFFF;">
								<tr>
									<td align="center" valign="top" style="border-collapse: collapse;">
										<!-- // Begin Template Header \\ -->
										<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="background-color: #FFFFFF;border-bottom: 0;">
											<tr>
												<td class="headerContent" style="border-collapse: collapse;color: #202020;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;padding: 0;text-align: center;vertical-align: middle;">
													
													<!-- // Begin Module: Standard Header Image \\ -->
													<img src="https://gallery.mailchimp.com/eaab54b1a8add0f6fd50dbaf7/images/ea41bb8d-a5f1-4a26-a7bf-0117b9e417f4.png" alt="" border="0" style="border-style: none;margin: 0;padding: 0;border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;">
													<!-- // End Module: Standard Header Image \\ -->
													
												</td>
											</tr>
										</table>
										<!-- // End Template Header \\ -->
									</td>
								</tr>
								<tr>
									<td align="center" valign="top" style="border-collapse: collapse;">
										<!-- // Begin Template Body \\ -->
										<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
											<tr>
												<td valign="top" class="bodyContent" style="border-collapse: collapse;background-color: #FFFFFF;">
													
													<!-- // Begin Module: Standard Postcard Content \\ -->
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr mc:repeatable="repeat_1" mc:repeatindex="0" mc:hideable="hideable_repeat_1_1" mchideable="hideable_repeat_1_1">
															<td valign="top" style="border-collapse: collapse;">
																<table border="0" cellpadding="20" cellspacing="0" width="100%">
																	<tr>
																		<td valign="top" style="border-collapse: collapse;">
																			<div style="color: #505050;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;"></div>
																			<h2 class="null" style="color: #202020;display: block;font-family: Arial;font-size: 30px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 10px;margin-left: 0;text-align: left;"><span style="color:#8B4513"><span style="font-size:18px"><span style="font-family:arial,helvetica neue,helvetica,sans-serif">QSC 2016: Delegate Application Confirmation	</span></span></span></h2>
																			
																			<div style="color: #505050;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">Hello,<br>
																				<br>
																				Thank you for showing interest in Queen&#39;s Space Conference 2016! ';
																				
	$message2 = ' Below is the information which was entered into your holiday ticket gift form. If this information is incorrect in any way, please send us an email at z.harley@qsconference.com so we can fix this.<br>
																				<br>
																				<table>
																					<tr>
																						<td style="width:300px;padding:05px 10px 0px 0px;">Gift Giver Name</td>
																						<td style="width:300px;padding:0px 0px 0px 10px;">'.$gifterName.'</td>
																					</tr>
																					<tr>
																						<td style="width:300px;padding:0px 10px 0px 0px;">Gift Giver Email</td>
																						<td style="width:300px;padding:0px 0px 0px 10px;">'.$gifterEmail.'</td>
																					</tr>
																					<tr>
																						<td style="width:300px;padding:0px 10px 0px 0px;">Gift Giver Phone Number</td>
																						<td style="width:300px;padding:0px 0px 0px 10px;">'.$phoneNumber.'</td>
																					</tr>
																					<tr>
																						<td style="width:300px;padding:0px 10px 0px 0px;">Recipient Name</td>
																						<td style="width:300px;padding:0px 0px 0px 10px;">'.$recipientName.'</td>
																					</tr>
																					<tr>
																						<td style="width:300px;padding:0px 10px 0px 0px;">Recipient Email address</td>
																						<td style="width:300px;padding:0px 0px 0px 10px;">'.$recipientEmail.'</td>
																					</tr>
																				</table>
																				<br>
																				If you have any questions or concerns please feel free to contact me. <br>
																			<br>
																			<br>
																			Cheers,<br>
																			<div>
																				<div style="float:left;margin-right: 50px;">
																					<br>
																					Michaela Thomas<br>
																					<span style="font-size:12px">Internal Delegates Coordinator<br>
																					Queen&#39;s Space Conference 2016<br>
																					internal@qsconference.com</span><br>
																					&nbsp;</div>
																				</div>
																				<div style="float:left;">
																					<br>
																					Alex Shieck<br>
																					<span style="font-size:12px">External Delegates Coordinator<br>
																					Queen&#39;s Space Conference 2016<br>
																					external@qsconference.com</span><br>
																					&nbsp;</div>
																				</div>
																			</div>
																			</td>
																			</tr>
																			</table>
																			</td>
																			</tr>
																			</table>
																			<!-- // End Module: Standard Postcard Content \\ -->
																			
																			</td>
																			</tr>
																			</table>
																			<!-- // End Template Body \\ -->
																			</td>
																			</tr>
																			<tr>
																			<td align="center" valign="top" style="border-collapse: collapse;">
																			<!-- // Begin Template Footer \\ -->
																			<table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter" style="background-color: #FFFFFF;border-top: 0;">
																			<tr>
																			<td valign="top" class="footerContent" style="border-collapse: collapse;">
																			
																			<!-- // Begin Module: Standard Footer \\ -->
																			<table border="0" cellpadding="10" cellspacing="0" width="100%">
																			<tr>
																			<td colspan="2" valign="middle" id="social" style="border-collapse: collapse;background-color: #FAFAFA;border: 0;">
																			<div style="color: #707070;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;"><span style="font-size:13px">Twitter: @QSConference | Facebook: Queen&#39;s Space Conference<br>
																			Website: www.QSConference.com | Instagram: queensspace</span></div>
																			</td>
																			</tr>
																			<tr>
																			<td valign="top" width="350" style="border-collapse: collapse;">
																			<div style="color: #707070;font-family: Arial;font-size: 12px;line-height: 125%;text-align: left;"><strong>Contact us at:<br>
																			QSConference@gmail.com</strong><br>
																			<br>
																			&nbsp;</div>
																			</td>
																			<td valign="top" width="190" id="monkeyRewards" style="border-collapse: collapse;">
																			<div style="color: #707070;font-family: Arial;font-size: 12px;line-height: 125%;text-align: left;"></div>
																			</td>
																			</tr>
																			<tr>
																			<td colspan="2" valign="middle" id="utility" style="border-collapse: collapse;background-color: #FFFFFF;border: 0;">
																			<div style="color: #707070;font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;">
																			&nbsp;<a href="http://QSConference.us3.list-manage1.com/unsubscribe?u=eaab54b1a8add0f6fd50dbaf7&id=75f4d6cdb0&e=641bd14a53&c=c4be222dd2" style="color: #336699;font-weight: normal;text-decoration: underline;">unsubscribe from this list</a> | <a href="http://QSConference.us3.list-manage.com/profile?u=eaab54b1a8add0f6fd50dbaf7&id=75f4d6cdb0&e=641bd14a53" style="color: #336699;font-weight: normal;text-decoration: underline;">update subscription preferences</a>&nbsp;
																			</div>
																			</td>
																			</tr>
																			</table>
																			<!-- // End Module: Standard Footer \\ -->
																			
																			</td>
																			</tr>
																			</table>
																			<!-- // End Template Footer \\ -->
																			</td>
																			</tr>
																			</table>
																			<br>
																			</td>
																			</tr>
																			</table>
																			</center>
																			</body>    </body> </html>';																			
	
	$my_message1 = $message1.$status1.$message2;
	$my_message2 = $message1.$status2.$message2;
	$my_message3 = $message1.$status3.$message2;
	
	$this_mail1 = mail($to1, $subject1, $my_message1, $headers);
	
	if ($this_mail1) echo 'sent qsc 56 <br>';
	else echo error_message;
	
	$this_mail2 = mail($to2, $subject2, $my_message2, $headers);
	
	if ($this_mail2) echo 'sent gifter 56 <br>';
	else echo error_message;
	
	$this_mail3 = mail($to3, $subject3, $my_message3, $headers);
	
	if ($this_mail3) echo 'sent recipient 56 <br>';
	else echo error_message;
	
	exit;
?>