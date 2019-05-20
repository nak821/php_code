<?php

function sendTemplate($postFields) {

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
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }
}

$postFields = '{
  "personalizations": [
    {
      "to": [
        {
          "email": "narendrakumar.alivenetsolution@gmail.com",
          "name": "Narendra"
          
        }
      ],
      "dynamic_template_data": {
        "fname": "Narendra Kumar"
      }
    }
  ],
  "from": {
    "email": "donotreply@yofoodie.co.uk",
    "name": "Yofoodie"
  },
  "reply_to": {
    "email": "narendrakumar.alivenetsolution@gmail.com",
    "name": "Narendra"
  },
  "template_id": "d-aea45541978c44949db06c342d816ef0"
}';

for($i=0; $i<1; $i++){
 echo sendTemplate($postFields);
}