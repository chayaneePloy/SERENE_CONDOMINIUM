<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'website@clearvision-properties.com';

// an email address that will receive the email with the output of the form
$sendTo = 'ploy@clearvision-properties.com';
 
// subject of the email
//$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('FirstName' => 'firstname', 'LastName' => 'lastname', 'Email' => 'email', 'Phone' => 'phone', 'Message' => 'message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);
try 
{
 
    if(count($_POST) == 0) throw new \Exception('Form is empty');

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email']; 
    $phone = $_POST['Phone']; 
    $message = $_POST['Message'];
/*
    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }
*/
    $emailText = "<!--SUBJECTLINE-->
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html xmlns='https://www.w3.org/1999/xhtml'><head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'><meta https-equiv='Content-Type' content='text/html; charset=utf-8'>
<!--[if !mso]><!--
<meta https-equiv='X-UA-Compatible' content='IE=edge' />
<!--<![endif]-->
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>You have recieved a suggestion</title>
    <style type='text/css'>     
        /**START COPY CSS**/        
        .prehdr {
        font-size: 4px;
        line-height:6px !important;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        Margin-top:0px;
        }
        .bodycopy {
        font-size: 14px;
        line-height:24px;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        Margin-top:0px;
        }
        .bodycopy2 {
        font-size: 16px;
        line-height:26px !important;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        Margin-top:0px;
        }
        .bodycopy3 {
        font-size: 18px;
        line-height:28px !important;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        Margin-top:0px;
        }
        .customerinfo {
        font-size: 13px;
        line-height:16px !important;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        }
        .footer {
        font-size: 12px !important;
        line-height:22px !important;
        font-family:Arial, sans-serif, 'gdsherpa-regular';
        margin-top: 0px;
        }
        .h1asterisk {
        font-size: 18px !important;
        line-height:0px !important;
        vertical-align: 21px !important;
        }
        .h2asterisk {
        font-size: 14px !important;
        line-height:0px !important;
        vertical-align: 14px !important;
        }
        .h3asterisk {
        font-size: 10px !important;
        line-height:0px !important;
        vertical-align: 10px !important;
        }
        
         /**END COPY CSS**/
        
         .mobile {border-spacing:0;display:none!important;height:0;max-height:0;mso-hide:all;overflow:hidden;visibility:hidden;width:0;}
        @media only screen and (max-width: 500px)
        {
         .hidecellinmobile {display:none !important;}
         .phonenumber {text-align:center !important;}
         .h2mobile {font-size:26px !important; line-height:36px !important;}
         .two-column .column,
            .three-column .column {max-width: 100% !important;}
            //.two-column img {max-width: 100% !important;}
            //.three-column img {max-width: 50% !important;}
        .mobiletextalign {text-align: center !important}
        
         
         /**START MOBILE SWAP CSS**/
          .mobile, td.mobile, table.mobile, img.mobile, div.mobile, tr.mobile {
              display: inline-block !important;
               width: auto !important;
                overflow: visible !important;
              height: auto !important;
              max-height: inherit !important;
              font-size: 14px !important;
              line-height:21px !important;
              visibility:visible !important;
               }
        
           img.main-image {
               display: block !important;
               height: auto !important;
               max-height: inherit !important;
                 overflow: visible !important;
               visibility:visible !important;
               width: 100% !important;
             }
        
         table.full-width {
                    width: 100% !important;       
               }
           /**END MOBILE SWAP CSS**/
          }    
        
        /**VIDEO**/
        
 @media (-webkit-min-device-pixel-ratio: 0) and (min-device-width:1024px) 
 {
  .video-wrapper { display:block!important; }
  .video-fallback { display:none!important; }
 }
  @supports (-webkit-overflow-scrolling:touch) and (color:#FFFFFF) {
    div[class^=video-wrapper] { display:block!important; }
    div[class^=video-fallback] { display:none!important; }
  }
  #MessageViewBody .video-wrapper { display:block!important; }
  #MessageViewBody .video-fallback { display:none!important; }
        /**END VIDEO**/
        
    </style>
    <!--[if (gte mso 9)|(IE)]>
    <style type='text/css'>
        table {border-collapse: collapse !important;}
    </style>
    <![endif]-->

    <!--[if gte mso 9]>
    <xml>
    <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
</head>
<body style='margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding: 0;'><img src='' width='1' height='1' style='margin:0 !important; padding:0 !important; border:0 !important; height:1px !important; width:1px !important; display:none !important; visibility:hidden !important;'>
<center style='width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;'>
<table width='100%' cellpadding='0' cellspacing='0' bgcolor='#F5F7F8' style='text-align: center;'>
<tr>
<td>      

<!--PREHEADER-->
<!--BEGIN PREHEADER-->
    <table width='100%' cellpadding='0' cellspacing='0' bgcolor='#F5F7F8'>
    <tr>
    <td>    
         <div style='margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:0px; padding-right:0px;'>
<table align='center' style='border-spacing:0;font-family:sans-serif;color:#F5F7F8;Margin:0 auto;width:100%;' bgcolor='#F5F7F8'>
       <tr>
<td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' bgcolor='#F5F7F8'>
        <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#F5F7F8;' bgcolor='#F5F7F8'>
            <tr>
               <td style='padding-bottom:0px; padding-top: 0px;padding-left:20px;padding-right:20px;background-color:#F5F7F8;color:#F5F7F8;width:100%;font-size:1px;line-height:1px;text-align:left; display:none !important; visibility:hidden !important;'>
                 <div style='display: none; max-height: 0px; overflow: hidden;'>
                                &nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;‌&nbsp;
                                
                                </div>
            </td>
            </tr>           
        </table>
    </td>
</tr>
 </table>
        </div>
        </td>
        </tr>
        </table>
    <!--END PREHEADER-->

<!--LOGO-->
<table width='100%' cellpadding='0' cellspacing='0' bgcolor='#F5F7F8'>
     <tr>
        <td style='padding-bottom: 15px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;' bgcolor='#F5F7F8'>
                          <tr>
                             <td bgcolor='#F5F7F8' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='73%' style='border-spacing:0;font-family:sans-serif;color:#111111;' bgcolor='#F5F7F8'>
                                   <tr>
                                      <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0px;' align='left'>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                             <td width='100%' bgcolor='#F5F7F8' style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;' bgcolor='#F5F7F8'>
                                   <tr>
                                      <td style='padding-top:10px;padding-bottom:0px;padding-left:10px;padding-right:0px;background-color:#F5F7F8;width:100%;text-align:right;'>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>

<!-- Custom PNG -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
     <tr>
    <td bgcolor='#F5F7F8' style='padding-top:0px; padding-bottom:0px;'>
       <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
          <!--[if (gte mso 9)|(IE)]>
          <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#00A63F;' >
         <tr>
            <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
               <![endif]-->
               <table bgcolor='#FFFFFF' align='center' style='border-spacing:0;font-family:sans-serif;color:#00A63F;margin:0 auto;width:100%;max-width:600px;'>
              <tr>
                 <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#00A63F;'>
                   <tr>
                       <td width='60px' style='padding-top:40px;padding-bottom:0px;padding-left:40px;padding-right:0px;background-color:#FFFFFF'>
                      </td>
                       <td style='padding-top:40px;padding-bottom:0px;padding-left:10px;padding-right:40px;background-color:#FFFFFF; width:100%;text-align:left; font-size:21px; line-height:31px; font-weight:bold; font-family: Arial, sans-serif, 'Arial Bold', 'gdsherpa-bold';'>         
                      </td>
                   </tr>
                </table>
                 </td>
              </tr>
               </table>
               <!--[if (gte mso 9)|(IE)]>
            </td>
         </tr>
          </table>
          <![endif]-->
       </div>
    </td>
     </tr>
  </table>

<!-- Headline -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
    <tr>
    <td bgcolor='#F5F7F8' style='background-color:#F5F7F8;padding-top:0;padding-right:0;padding-left:0;padding-bottom:0;'>
        <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
            <!--[if (gte mso 9)|(IE)]>
            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0'>
            <tr>
            <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <table bgcolor='#FFFFFF' width='100%' align='center' border='0' cellspacing='0' cellpadding='0' style='font-family:sans-serif;color:#111111;'>
                <tr>
                <td bgcolor='#FFFFFF' align='left' style='padding-top:10px;padding-bottom:0;padding-right:40px;padding-left:40px;text-align:left;background-color:#FFFFFF; font-weight:bold; font-family: Arial, sans-serif, 'Arial Bold', 'gdsherpa-bold';font-size:32px; line-height:42px;' class='h2mobile' ;?=''>
                </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>
    </td>
    </tr>
</table>
<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
    <tr>
    <td bgcolor='#F5F7F8' style='background-color:#F5F7F8;padding-top:0;padding-right:0;padding-left:0;padding-bottom:0;'>
        <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
            <!--[if (gte mso 9)|(IE)]>
            <table width='600' align='center' border='0' cellspacing='0' cellpadding='0'>
            <tr>
            <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
            <![endif]-->
            <table bgcolor='#FFFFFF' width='100%' align='left' border='0' cellspacing='0' cellpadding='0' style='font-family:sans-serif;color:#111111;'>
                <tr>
                <td bgcolor='#FFFFFF' align='left' style='padding-top:0;padding-bottom:0;padding-right:40px;padding-left:40px;text-align:left;background-color:#FFFFFF;'>
                  <h3 style='margin: 0; width:100%'>You have a new message from the Suggestion form</h3>
                    <table border='0' cellpadding='0' cellspacing='0' align='left'>
                      
                        <tr>
                    
                        <td align='left' height='20' width='100' style='padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;border-bottom:2px solid #00A63F;'>                    
                            <p style='font-size:1px;line-height:1px;'>&nbsp;</p>
                        </td>
                        </tr>
                    </table>
                        
                </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>
    </td>
    </tr>
</table>

<!-- EMAIL CONTENT -->
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
     <tr>
        <td bgcolor='#F5F7F8' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table bgcolor='#FFFFFF' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;'>
                                   <tr>
                                      <td style='padding-top:25px;padding-bottom:0px;padding-left:40px;padding-right:40px;background-color:#FFFFFF;width:100%;text-align:left;'>
                                         <p class='bodycopy' style='font-family:Arial, sans-serif, 'gdsherpa-regular';margin-top:0px; font-size:14px; line-height:24px; margin-bottom:0px;'>
                                            <p>$emailText</p>
                                            <p style='margin:0;'><b>Name:</b>$firstname</p>
                                            <p style='margin:0;'><b>lastname:</b>$email</p>
                                            <p style='margin:0;'><b>Email:</b>$email</p>
                                            <p style='margin:0;'><b>Phone:</b>$phone</p>
                                            <p style='margin:0;'><b>Message:</b></br>$message</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>

<!-- Spacer -->
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
     <tr>
        <td bgcolor='#F5F7F8' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table bgcolor='#FFFFFF' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;'>
                                   <tr>
                                      <td style='padding-top:40px;padding-bottom:0px;padding-left:40px;padding-right:40px;background-color:#FFFFFF;width:100%;text-align:left;'>
                                         <p style='margin-top:0px; line-height:0px; margin-bottom:0px;font-size:4px;'>&nbsp;</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>

<!-- DISCLAIMERS -->
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#F5F7F8'>
     <tr>
        <td bgcolor='#F5F7F8' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table bgcolor='#F5F7F8' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;'>
                                   <tr>
                                      <td style='padding-top:40px;padding-bottom:0px;padding-left:40px;padding-right:40px;background-color:#F5F7F8;width:100%;text-align:left;'>
                                         <p style='margin-top:0px; line-height:0px; margin-bottom:0px;font-size:4px;'>&nbsp;</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#E8EAEB'>
     <tr>
        <td bgcolor='#E8EAEB' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table bgcolor='#E8EAEB' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;'>
                                   <tr>
                                      <td style='padding-top:40px;padding-bottom:0px;padding-left:40px;padding-right:40px;background-color:#E8EAEB;width:100%;text-align:left;'>
                                         <p style='margin-top:0px; line-height:0px; margin-bottom:0px;font-size:4px;'>&nbsp;</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#E8EAEB'>
     <tr>
        <td bgcolor='#E8EAEB' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#757575;'>
                                   <tr>
                                      <td style='padding-top:0px;padding-bottom:15px;padding-left:0px;padding-right:0px;background-color:#E8EAEB;width:100%;text-align:left;'>
                                         <p class='footer' style='margin-bottom:0px;margin-top:0px;font-size:12px; line-height:22px;'>Please do not reply to this email. Emails sent to this address will not be answered.</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#E8EAEB'>
     <tr>
        <td bgcolor='#E8EAEB' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#757575;'>
                                   <tr>
                                      <td style='padding-top:0px;padding-bottom:15px;padding-left:0px;padding-right:0px;background-color:#E8EAEB;width:100%;text-align:left;'>
                                         <p class='footer' style='margin-bottom:0px;margin-top:0px;font-size:12px; line-height:22px;'>Copyright Clearvision 2019 All rights reserved.</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#E8EAEB'>
     <tr>
        <td bgcolor='#E8EAEB' style='padding-top:0px; padding-bottom:0px;'>
           <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
              <!--[if (gte mso 9)|(IE)]>
              <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;' >
                 <tr>
                    <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
                       <![endif]-->
                       <table bgcolor='#E8EAEB' align='center' style='border-spacing:0;font-family:sans-serif;color:#111111;margin:0 auto;width:100%;max-width:600px;'>
                          <tr>
                             <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#111111;'>
                                   <tr>
                                      <td style='padding-top:25px;padding-bottom:0px;padding-left:40px;padding-right:40px;background-color:#E8EAEB;width:100%;text-align:left;'>
                                         <p style='margin-top:0px; line-height:0px; margin-bottom:0px;font-size:4px;'>&nbsp;</p>
                                      </td>
                                   </tr>
                                </table>
                             </td>
                          </tr>
                       </table>
                       <!--[if (gte mso 9)|(IE)]>
                    </td>
                 </tr>
              </table>
              <![endif]-->
           </div>
        </td>
     </tr>
  </table>

<!-- END -->
</td>
</tr>
</table>
</center>
<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#E8EAEB'>
     <tr>
    <td bgcolor='#E8EAEB' style='padding-top:0px; padding-bottom:0px;'>
       <div style='max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto; padding-left:20px; padding-right:20px;'>
          <!--[if (gte mso 9)|(IE)]>
          <table width='600' align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;' >
         <tr>
            <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;' >
               <![endif]-->
               <table align='center' style='border-spacing:0;font-family:sans-serif;color:#757575;margin:0 auto;width:100%;max-width:600px;'>
              <tr>
                 <td style='padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;'>
                <table width='100%' style='border-spacing:0;font-family:sans-serif;color:#757575;'>
                   <tr>
                      <td style='padding-top:0px;padding-bottom:15px;padding-left:0px;padding-right:0px;background-color:#E8EAEB;width:100%;text-align:right;' align='right'>
                      </td>
                   </tr>
                </table>
                 </td>
              </tr>
               </table>
               <!--[if (gte mso 9)|(IE)]>
            </td>
         </tr>
          </table>
          <![endif]-->
       </div>
    </td>
     </tr>
  </table></body>
</html>";
    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
        'Content-Type: text/html; charset=ISO-8859-1\r\n'
    );

    // Send email
    mail($sendTo,'You have recieved a new mail from suggestion form', $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}
