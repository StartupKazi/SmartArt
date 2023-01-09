<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClassyOne extends CI_Model
{

	/**
	 * Email Header
	 * 
	 * @param string $header Title
	 */
	public function email_header($header_title = '')
	{
		$html_header = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
                <meta content="telephone=no" name="format-detection">
                <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
                <meta content="IE=9; IE=8; IE=7; IE=EDGE;" http-equiv="X-UA-Compatible">
                <title>' . $header_title . '</title>

                <style type="text/css">

                /**This is to overwrite Outlook.com’s Embedded CSS************/
                table {border-collapse:separate;}
                a, a:link, a:visited {text-decoration: none; color: #00788a}
                h2,h2 a,h2 a:visited,h3,h3 a,h3 a:visited,h4,h5,h6,.t_cht {color:#000 !important}
                p {margin-bottom: 0}
                .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {line-height: 100%}
                /**This is to center your email in Outlook.com************/
                .ExternalClass {width: 100%;}

                /* General Resets */
                #outlook a {padding:0;}
                body, #body-table {height:100% !important; width:100% !important; margin:0 auto; padding:0; line-height:100%; !important}
                img, a img {border:0; outline:none; text-decoration:none;}
                .image-fix {display:block;}
                table, td {border-collapse:collapse;}

                /* Client Specific Resets */
                .ReadMsgBody {width:100%;} .ExternalClass{width:100%;}
                .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100% !important;}
                .ExternalClass * {line-height: 100% !important;}
                table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;}
                img {outline: none; border: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
                body, table, td, p, a, li, blockquote {-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;}
                body.outlook img {width: auto !important;max-width: none !important;}

                /* Start Template Styles */
                /* Main */
                body{ -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
                body, #body-table {background-color: #000000 margin:0 auto !important;; margin:0 auto !important; text-align:center !important;}
                p {padding:0; margin: 0; line-height: 24px; font-family: Open Sans, sans-serif;}
                a, a:link {color: #1c344d;text-decoration: none !important;}
                .footer-link a, .nav-link a {color: #fff6e5;}

                /* Yahoo Mail */
                .thread-item.expanded .thread-body{background-color: #000000 !important;}
                .thread-item.expanded .thread-body .body, .msg-body{display:block !important;}
                #body-table .undoreset table {display: table !important;table-layout: fixed !important;}

                /* Start Media Queries */
                @media only screen and (max-width: 640px) {
                    a[href^="tel"], a[href^="sms"] {text-decoration: none;pointer-events: none;	cursor: default;}
                    .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default;	pointer-events: auto;cursor: default;}	
                    *[class].full-width {width: 100%!important;}
                    *[class].mobile-width {width: 440px !important; padding: 0 4px;}
                    *[class].content-width {width: 360px!important;}
                    *[class].content-width-menu {width: 360px!important;}
                    *[class].center {text-align:center !important; height:auto !important;}
                    *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                    *[class].stack {padding-bottom:30px !important; height: auto !important;}
                    *[class].gallery {padding-bottom: 20px!important;}
                    *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important;}
                    *[class].block {display: block!important;}
                    *[class].midaling { width:100% !important; border:none !important; }
                }
                @media only screen and (max-width: 480px) {
                    *[class].full-width {width: 100%!important;}
                    *[class].mobile-width {width: 320px!important; padding: 0 4px;}
                    *[class].content-width {width: 240px!important;}
                    *[class].content-width-menu {width: 320px!important;}
                    *[class].navlink {font-size:13px !important;}
                    *[class].center {text-align:center !important; height:auto !important;}
                    *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                    *[class].stack {padding-bottom:30px !important; height: auto !important;}
                    *[class].gallery {padding-bottom: 20px!important;}
                    *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
                    *[class].midaling { width:100% !important; border:none !important; }
                    *[class].navlink{ width:600px !important; border:none !important; }
                }
                @media only screen and (max-width: 320px) {
                    *[class].full-width {width: 100%!important;}
                    *[class].mobile-width {width: 100%!important; padding: 0 4px;}
                    *[class].content-width {width: 240px!important;}
                    *[class].center {text-align:center !important; height:auto !important;}
                    *[class].center-stack {padding-bottom:30px !important; text-align:center !important; height:auto !important;}
                    *[class].stack {padding-bottom:30px !important; height: auto !important;}
                    *[class].gallery {padding-bottom: 20px!important;}
                    *[class].fluid-img {height:auto !important; max-width:600px !important; width: 100% !important; min-width:320px !important;}
                    *[class].midaling { width:100% !important; border:none !important;}
                }
                </style>
            </head>
            <body bgcolor="#000000" style="background:#000;">

                <!-- Start of banner -->
                <table id="body-table" align="center" width="100%" bgcolor="#e6e5e7" cellspacing="0" cellpadding="0" border="0" style="table-layout:fixed;">
                    <tbody>
                        <tr>
                            <td valign="top" align="center">
                                <table width="600" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                    <tbody>
                                        <tr>
                                            <td valign="top" bgcolor="#ffffff" align="center">                                                                                                                
                                                <!-- After Menu Start -->
                                                <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center">	

        ';

		return $html_header;
	}

	/**
	 * Verify Account Email
	 */

	public function verifyAccountEmail($message, $btn = null)
	{
		// Welcome Banner
		// $welcome_banner = $this->CoreLoad->loadAssets('custom/img/mail/1.jpeg');
		$btn = (is_null($btn)) ? site_url() : $btn;
		// 
		$html_body = '
            <!-- Section 5 Starts -->
				<table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
					<tbody>
						<tr>	
							<td align="center">																										
								<!-- Start Block Content -->
								<table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
									<tbody>
										<tr>
											<td align="center">
												<!-- Start Column 1 -->
												<table width="100%" align="center" cellspacing="0" cellpadding="0" border="0" class="full-width">
													<tbody>
														<tr>
															<td height="50">&nbsp;</td>
														</tr>
														<tr>

															<td align="center"><img src="img/green_arry.jpg" width="32" height="32" alt=""/></td>
														</tr>
														<tr>
															<td height="28">&nbsp;</td>
														</tr>
														<tr>
															<td style="font-size:20px; mso-line-height-rule:exactly; line-height:20px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;" align="center">WELCOME TO CORE WP</td>
														</tr>
														<tr>
															<td height="22" style="line-height:22px; " ></td>
														</tr>
														<tr >
															<td style="font-size:15px; mso-line-height-rule:exactly; line-height:18px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;" align="center">' . $message . '</td>
														</tr>
														<tr>
															<td height="20" style="font-size:20px; mso-line-height-rule:exactly; line-height:20px;">&nbsp;</td>
														</tr>
														<tr>
															<td align="center">
																<table cellspacing="0" cellpadding="0" border="0" align="center">
																	<tbody>
																		<tr>
																			<td align="center" style="border:#16a085 solid 1px; border-radius:4px; color:#16a085; display:block; font-family: Open Sans, sans-serif; font-size:12px; font-weight:bold; line-height:12px; text-decoration:none; text-align:center; padding-top: 10px; padding-bottom: 10px; width:117px; -webkit-text-size-adjust:none;" ><a style="color:#16a085;font-family: Open Sans, sans-serif; font-size:13px; font-weight:800;" href="' . $btn . '">CLICK TO VERIFY</a></td>
																		</tr>
																	</tbody>
																</table>												
															</td>
														</tr>
														<tr>
															<td class="center-stack"></td>
														</tr>
														<tr>
															<td class="center-stack"></td>
														</tr>
													</tbody>
												</table>																	
												<!-- End Column 1 -->
											</td>
										</tr>
									</tbody>
								</table>
								<!-- End Block Content -->
							
								<!-- Start Space -->
								<table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width">
									<tbody>
										<tr>
											<td height="50" style="font-size:50px;mso-line-height-rule:exactly; line-height:50px;">&nbsp;</td>
										</tr>
									</tbody>
								</table>
								<!-- End Space -->														
							</td>
						</tr>
					</tbody>
				</table>
            <!-- Section 5 Ends -->
        ';

		// Return
		return $html_body;
	}

	/**
	 * General Email
	 */
	public function emailGeneral($header, $message, $btn = null)
	{
		// Welcome Banner
		$btn = (is_null($btn)) ? site_url() : $btn;
		// 
		$html_body = "

            <!-- Section 5 Start -->
            <table width='600' align='center' cellspacing='0' cellpadding='0' border='0' class='mobile-width'>
                <tbody>
                    <tr>	
                        <td align='center'>																										
                            <!-- Start Block Content -->
                            <table width='550' align='center' cellspacing='0' cellpadding='0' border='0' class='content-width'>
                                <tbody>
                                    <tr>
                                        <td align='center'>
                                            <!-- Start Column 1 -->
                                            <table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' class='full-width'>
                                                <tbody>
                                                    <tr>
                                                        <td height='28'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-size:20px; mso-line-height-rule:exactly; line-height:20px; color:#2c3e50; font-weight:bold; font-family: Open Sans, sans-serif;' align='center'>{$header}</td>
                                                    </tr>
                                                    <tr>
                                                        <td height='22' style='line-height:22px; ' ></td>
                                                    </tr>
                                                    <tr >
                                                        <td style='font-size:15px; mso-line-height-rule:exactly; line-height:18px; color:#95a5a6; font-weight:normal; font-family: Open Sans, sans-serif;' align='center'>
                                                        {$message}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height='20' style='font-size:20px; mso-line-height-rule:exactly; line-height:20px;'>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class='center-stack'></td>
                                                    </tr>
                                                </tbody>
                                            </table>																	
                                            <!-- End Column 1 -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Block Content -->
                        
                            <!-- Start Space -->
                            <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width'>
                                <tbody>
                                    <tr>
                                        <td height='50' style='font-size:50px;mso-line-height-rule:exactly; line-height:50px;'>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Space -->														
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Section 5 End -->
        ";

		// Return
		return $html_body;
	}


	/**
	 * Email Footer
	 */
	public function email_footer($site = '')
	{
		// Site Title
		$site = strtoupper($site);

		$html_footer = '							
                                                            <!-- Space Start -->
                                                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                <tbody>
                                                                    <tr>
                                                                        <td height="52">&nbsp;</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Space End -->											
                                                        
                                                            <!-- Section 12 Start -->	
                                                            <table width="600" bgcolor="#16a085" align="center" cellspacing="0" cellpadding="0" border="0" class="mobile-width">
                                                                <tbody>
                                                                    <tr>	
                                                                        <td align="center">														
                                                                            <!-- Start Block Content -->
                                                                            <table width="550" align="center" cellspacing="0" cellpadding="0" border="0" class="content-width">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td valign="top" td align="center">
                                                                                            <!-- Start Column 1 -->
                                                                                            <table align="center" cellspacing="0" cellpadding="0" border="0" class="full-width" width="100%">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td height="50">&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="font-family: Open Sans, sans-serif; font-size:28px;mso-line-height-rule:exactly; line-height:28px; font-weight:bold; color:#ffffff" align="center">' . $site . '</td>
                                                                                                    </tr>																				
                                                                                                    <tr>
                                                                                                        <td height="18">&nbsp;</td>
                                                                                                    </tr>																				
                                                                                                    <tr>
                                                                                                        <td style="font-size:12px; font-family: Open Sans, sans-serif; line-height:12px; color:#ffffff; font-weight:bold;" align="center">For; properties, land, & houses. </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height="25">&nbsp;</td>
                                                                                                    </tr>																				

                                                                                                </tbody>
                                                                                            </table>
                                                                                            <!-- End Column 1 -->
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- End Block Content -->
                                                                            
                                                                            <!-- Start Space -->
                                                                            <table width="100%" bgcolor="#2c3e50" cellspacing="0" cellpadding="0" border="0" class="full-width" >
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="28" align="center" style="font-family: Open Sans, sans-serif;font-size:11px; font-weight:normal; color:#7f8c8d">copyright by realestate3d</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- End Space -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- Section 12 End -->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- After Menu Ends -->								
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End of banner -->
            </body>
            </html>

        ';

		return $html_footer;
	}

	/**
	 * Email Body Message
	 * @param  string $key = 'welcome'
	 * @param  array $data
	 */
	public function email_body_message($key, $data = array())
	{

		$html_body_message = '';
		// Support Email
		$support_email = $this->CoreField->defaultContacts('support_email');

		switch ($key) {
			case 'welcome':
				/**
				 *@param keys_needed = 'site,site_domain,customer_name,link';
				 */

				$customer_name = ucwords($data['customer_name']);

				$html_body_message = "
                    Hi {$customer_name}, <br />
                    <!-- Start Column 1 -->	
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Column 1 -->	

                    Welcome to {$data['site']} and congratulation for becoming a member. We help you to add value to your business. <br />
                    Browse through our catalogs or upload you listings for free.

                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                            <tr>
                                <td height='30'></td>
                            </tr>
                        </tbody>
                    </table>

                    <p style='color:#000;'>To get started, please click on the link below to verify your email address. </p>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>

                    <a href='{$data['link']}' target='_blank'>{$data['link']}</a>

                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                            <tr>
                                <td height='30'></td>
                            </tr>
                        </tbody>
                    </table>

                    If you have any questions, please contact us at <a href='mailto:{$support_email}'>{$support_email}</a>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>
                    Thank you, \n
                    {$data['site']} Team.
                ";
				break;
			case 'reset_password':
				/**
				 *@param keys_needed = 'site,site_domain,customer_name,password';
				 */

				$customer_name = ucwords($data['customer_name']);

				$html_body_message = "
                    Hello {$customer_name}, <br />
                    <!-- Start Column 1 -->	
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Column 1 -->	

                    You have requested to reset your password. <br />:
					<table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
						<tbody>
							<tr>
								<td height='52'></td>
							</tr>
							<tr>
								<td height='30'></td>
							</tr>
						</tbody>
					</table>
					<p style='color:#000;'>To reset your password click this link : <a href='{$data['link']}' target='_blank'>{$data['link']}</a></p>
				
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>

                    If you have any questions, please contact us at <a href='mailto:{$support_email}'>{$support_email}</a>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>
                    Thank you, \n
                    {$data['site']} Team.
                ";
				break;
			case 'password_reset':
				/**
				 *@param keys_needed = 'site,site_domain,customer_name,password';
				 */

				$customer_name = ucwords($data['customer_name']);

				$html_body_message = "
                    Hello {$customer_name}, <br />
                    <!-- Start Column 1 -->	
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Column 1 -->	

                    Your account password has been reset successfully. If you did not authorize this action, please contact us at <a href='mailto:{$support_email}'>{$support_email}</a>: 

                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>

                    If it was you who requested this action, the procced to login using your new password.
					<table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
						<tbody>
							<tr>
								<td height='52'></td>
							</tr>
						</tbody>
					</table>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>
                    Thank you, \n
                    {$data['site']} Team.
                ";
				break;
			case 'verify_email':
				/**
				 *@param keys_needed = 'site,site_domain,customer_name,link';
				 */

				$customer_name = ucwords($data['customer_name']);

				$html_body_message = "
                    Hello {$customer_name}, <br />
                    <!-- Start Column 1 -->	
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Column 1 -->	

                    A new verification was requested for your account. Please click on the link below to verify your email address.

                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>

                    <p style='color:#000;'>To get started, please click on the link below to verify your email address. </p>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>

                    <a href='{$data['link']}' target='_blank'>{$data['link']}</a>

                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='52'></td>
                            </tr>
                        </tbody>
                    </table>

                    If you have any questions, please contact us at <a href='mailto:{$support_email}'>{$support_email}</a>
                    <table width='100%' cellspacing='0' cellpadding='0' border='0' class='full-width' >
                        <tbody>
                            <tr>
                                <td height='20'></td>
                            </tr>
                        </tbody>
                    </table>
                    Thank you, \n
                    {$data['site']} Team.
                ";
				break;
			case 'notification':
				$html_body_message = $data['message'];
				break;
			default:
				$html_body_message = '';
				break;
		}

		return $html_body_message;
	}

	/**
	 * Set Email
	 * 
	 * @param  call email_header
	 * @param  call email_body_message
	 * @param  call email_footer
	 * 
	 */
	public function set_email($head, $mail_type, $mail = array(), $data = null)
	{

		$email = $this->email_header($head);

		// Get Key From array data
		$key = $mail['key'];
		$message = $this->email_body_message($key, $mail);
		// Call Mail Type
		$email .= $this->$mail_type($head, $message, $data);

		$email .= $this->email_footer($mail['site']);

		// Full Email Body
		return $email;
	}
}


/* End of file ClassyOne.php */
