<?php

/*
  $key = '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';
  // using SendGrid's PHP Library
  // https://github.com/sendgrid/sendgrid-php
  //require '../vendor/autoload.php'; // If you're using Composer (recommended)
  // Comment out the above line if not using Composer
  require("./sendgrid-php/sendgrid-php.php");
  // If not using Composer, uncomment the above line

  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("donotreply@yofoodie.co.uk", "Yofoodie");
  $email->setSubject("Sending with SendGrid is Fun");
  $email->addTo("narendrakumar.alivenetsolution@gmail.com", "Narendra");
  $email->addContent(
  "text/plain", "and easy to do anywhere, even with PHP"
  );
  $email->addContent(
  "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
  );
  $sendgrid = new \SendGrid($key);
  try {
  $response = $sendgrid->send($email);
  print $response->statusCode() . "\n";
  print_r($response->headers());
  print $response->body() . "\n";
  } catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
  }

 */


$to_email = "narendrakumar.alivenetsolution@gmail.com";
$subject = "Marketing Email";
$htmlBody = '<body paddingwidth="0" paddingheight="0" bgcolor="#d1d3d4" style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center" bgcolor="#FFFFFF" style="font-family:Georgia, serif;">
    
  <tbody>
    <tr>
      <td><table width="560" border="0" cellspacing="0" cellpadding="0" align="center" class="MainContainer">
     
         
  <tbody>
    <tr>
      <td class="movableContentContainer">
      	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="10"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" class="specbundle4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="89" class="specbundle4" align="center"><img src="imgs/logo.png" alt="Logo" title="Logo" width="150" data-max-width="100"></td>
      <td width="40" valign="top" class="spechide">&nbsp;</td>
      <td valign="middle" class="specbundle4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="25" class="spechide"></td>
    </tr>
    <tr>
      <td class="font"><div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" align="left" style="color:#555555;font-size:18px; padding-top:5px;">
                            <h1 style="line-height: 22px;font-size:18px;">
                              
                            </h1>
                          </div>
                        </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="20" class="spechide">&nbsp;</td>
      <td valign="middle" style="vertical-align: middle;" width="150" class="left_pad">
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="text-align: right;">
                              <a target="_blank" href="[SHOWEMAIL]" class="link1">Visite out website</a>
                            </div>
                          </div>
                        </td>
    </tr>
  </tbody>
</table></td>
    </tr>
    <tr>
      <td height="10"></td>
    </tr>
  </tbody>
</table>

        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tbody><tr>
                      <td>
                        <div class="contentEditableContainer contentImageEditable">
                          <div class="contentEditable" align="left">
                            <img class="banner" src="imgs/header.jpg" alt="header" data-default="placeholder" data-max-width="560" width="560" height="242" border="0">
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="bgItem">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tbody><tr><td height="38"></td></tr>
                          <tr>
                            <td class="left_pad">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <h2 style="font-size:38px;text-align:center; line-height:42px;">Chicken Piri Piri</h2>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr><td height="20"></td></tr>
                          <tr><td height="5" align="center"><hr style="width:117px; height:5px; background-color:#e0001b;border: none;"></td></tr>
                          <tr><td height="20"></td></tr>
                          <tr>
                            <td class="left_pad">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" style="font-size:16px;color:#555555;text-align:center;line-height:24px;font-style: italic;">
                                  <p>Share your best cupcake recipes with your friends,<br> your family and the whole world!</p>
                                </div>
                              </div>                  
                            </td>
                          </tr>
                          <tr><td height="38"></td></tr>
                          <tr><td height="10" bgcolor="#ffffff"></td></tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tbody><tr><td width="210" height="10" align="right"><img src="imgs/bannerTop.png" width="179" height="10"></td><td width="350" colspan="2"></td></tr>
                <tr>
                  <td width="210" class="bgItem" align="right">
                    <table width="155" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr><td bgcolor="#e0001b" height="50"></td></tr>
                      <tr>
                        <td bgcolor="#e0001b" style="padding-right:15px;padding-left:15px;">
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="font-size:38px;color:#FFFFFF;text-align:center;line-height:38px;font-style: italic;">
                              <p style="color:#FFFFFF;">Special Offer!</p>
                            </div>
                          </div>   
                        </td>
                      </tr>
                      <tr><td height="50" bgcolor="#e0001b"></td></tr>
                      <tr><td valign="bottom"><img src="imgs/bannerBottom.png" width="155" height="24"></td></tr>
                    </tbody></table>
                  </td>
                  <td width="40" bgcolor="#f2f2f2"></td>
                  <td width="260" class="bgItem">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr><td height="30"></td></tr>
                      <tr>
                        <td>
                          <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="color:#555555;font-size:18px;line-height:28px;text-align:left;font-family: Helvetica Neue;">
                              <p> Thanks for following us! <br> Here’s a special <br> offer for you!</p>
							  <h2 style="font-size: 28px; margin-top: 30px;">20% OFF Today</h2>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height="50"></td></tr>
                    </tbody></table>
                  </td>
                  <td width="30" bgcolor="#f2f2f2"></td>
                </tr>
                <tr><td height="10"></td></tr>
              </tbody></table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f2f2f2">
  <tbody>
    <tr>
      <td height="10" bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td height="38"></td>
    </tr>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td height="5" align="center"><hr style="width:117px; height:5px; background-color:#e0001b;border: none;"></td>
    </tr>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td><table>
                            <tbody><tr>
                              <td width="30"></td>
                              <td>
                                <div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="font-size:16px;color:#555555;text-align:center;line-height:24px;font-style: italic;">
                                    <p>Here are some delightful new recipes we’ve made that are available now. Our new fruity and sweet cupcakes will get your tastebuds going. Get your glasses of milk ready.</p>
                                  </div>
                                </div>     
                              </td>
                              <td width="30"></td>
                            </tr>
                          </tbody></table></td>
    </tr>
  </tbody>
</table>

        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f2f2f2">
  <tbody>
    <tr>
      <td height="38"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="40">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" class="specbundle" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td align="center"><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table>
</td>
      <td width="15" valign="top" class="specbundle"></td>
      <td valign="top" class="specbundle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table></td>
      <td width="15" valign="top" class="specbundle"></td>
      <td valign="top" class="specbundle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" class="specbundle" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td align="center"><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table>
</td>
      <td width="15" valign="top" class="specbundle"></td>
      <td valign="top" class="specbundle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table></td>
      <td width="15" valign="top" class="specbundle"></td>
      <td valign="top" class="specbundle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="contentEditableContainer contentImageEditable">
                                  <div class="contentEditable">
                                    <img src="imgs/cupcake1.jpg" data-default="placeholder" data-max-width="150" width="150" height="125">
                                  </div>
                                </div></td>
    </tr>
    <tr>
      <td><div class="contentEditableContainer contentTextEditable">
                                  <div class="contentEditable" style="text-align: left;font-size: 16px;color:#555555;">
                                    <br><h3 style="font-size: 16px;color:#e0001b;line-height: 0px;">Cupcake</h3><br>
                                    <p style="line-height: 18px;">Lemons and happiness</p><br>
                                    <a target="_blank" href="#" class="link3" style="color:#f2f2f2">Buy now</a>
                                  </div>
                                </div></td>
    </tr>
  </tbody>
</table></td>
    </tr>
  </tbody>
</table></td>
    </tr>
    <tr>
      <td height="38">
    </td></tr>
  </tbody>
</table>
</td>
      <td valign="top" width="40">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="10" bgcolor="#ffffff"></td>
    </tr>
  </tbody>
</table>

        </div>
        
        
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
       <td height="10" bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td bgcolor="#f2f2f2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="20" class="spechide">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      
      <td valign="top" class="specbundle2"><div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="font-size:16px;color:#555555;text-align:center;line-height:24px;">
                                  <h2 style="font-size:28px;">Visit us!</h2>
                                  <br>
                                  <p>We’re really nice, come and visit us!</p>
                                  <br>
                                  <span class="link2" style="font-size:24px;">40 Norfolk Street, Kings Lynn PE30 1AH</span>
                            </div>
                          </div>
                          </div></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="20"></td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="20" class="spechide">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
       <td height="10" bgcolor="#ffffff"></td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f2f2f2">
  <tbody>
    <tr>
      <td td="" height="10" bgcolor="#ffffff"></td>
    </tr>
    <tr>
      <td height="50"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="50" class="spechide">&nbsp;</td>
      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td style="padding-top:14px;" align="center" class="specbundle2"><div class="contentEditableContainer contentTextEditable">
                            <div class="contentEditable" style="font-size: 16px;color:#555555;line-height: 24px;">
                              <p>
                                Check us on Facebook, Twitter and Pinterest!
                              </p>
                            </div>
                          </div></td>
      <td width="30" class="specbundle2"></td>
      <td valign="top" width="230" class="specbundle2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="70"><div class="contentEditableContainer contentFacebookEditable">
                            <div class="contentEditable">
                              <img src="imgs/fb.png" data-max-width="70" width="70" height="70" alt="facebook" data-customicon="true">
                            </div>
                          </div></td>
      <td width="10" valign="top"></td>
      <td valign="top" width="70"><div class="contentEditableContainer contentFacebookEditable">
                            <div class="contentEditable">
                              <img src="imgs/g+.png" data-max-width="70" width="70" height="70" alt="facebook" data-customicon="true">
                            </div>
                          </div></td>
      <td width="10" valign="top"></td>
      <td valign="top" width="70"><div class="contentEditableContainer contentFacebookEditable">
                            <div class="contentEditable">
                              <img src="imgs/tw.png" data-max-width="70" width="70" height="70" alt="facebook" data-customicon="true">
                            </div>
                          </div></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
      <td valign="top" width="50" class="spechide">&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td height="50"></td>
    </tr>
    <tr>
      <td td="" height="10" bgcolor="#ffffff"></td>
    </tr>
  </tbody>
</table>

        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tbody><tr><td height="10"></td></tr>

              <tr><td><div style="border-top:1px solid #555555;"></div></td></tr>

              <tr><td height="20"></td></tr>

              <tr>
                <td align="center">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tbody><tr>
                      <td width="50%" align="left">
                        <div class="contentEditableContainer contentTextEditable">
                          <div class="contentEditable" style="color:#555555;text-align:left;font-size:13px;line-height:19px;">
                            <p>
                              <a target="_blank" href="[FORWARD]" style="color:#555555;">Forward to a friend</a><br>                         
                            </p>
                          </div>
                        </div>
                      </td>
					  <td align="right"><a target="_blank" href="[UNSUBSCRIBE]" style="color:#555555;">Unsubscribe</a></td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
    	<td height="20">&nbsp;</td>
    </tr>
  </tbody>
</table>


  
  
</body>';

$postFields = '{
	"personalizations": [{
		"to": [{
			"email": "'.$to_email.'",
			"name": "Narendra"
		}],
		"subject": "'.$subject.'"
	}],
	"content": [{
		"type": "text/html",
		"value": "'.$htmlBody.'"
	}],
	"from": {
		"email": "donotreply@yofoodie.co.uk",
                "name": "Yofoodie"
	},
	"reply_to": {
		"email": "narendrakumar.alivenetsolution@gmail.com",
		"name": "Narendra"
	}
}';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postFields,
    CURLOPT_HTTPHEADER => array(
        "authorization: Bearer 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",
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>