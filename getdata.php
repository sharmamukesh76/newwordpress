<?php


function callAPI($method, $url, $data){
   $curl = curl_init();

   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                       
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'authCode: 1d06f08e-7f2e-460f-99eb-af84c52f4202',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}


$get_data = callAPI('POST', 'https://api.webcrm.com/Auth/ApiLogin', true);
$response = json_decode($get_data, true);

echo '<pre>';
print_r($response);
echo '</pre>';


setCookie('AccessToken', $response['AccessToken']);


    // $errors = $response['response']['errors'];
    // $data = $response['response']['data'][0];


?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
   
   $.ajax({
              type: "POST",
              url: 'https://api.webcrm.com/Auth/ApiLogin',
              async:true,
             crossDomain: true,
             headers: {
                 "authCode":"1d06f08e-7f2e-460f-99eb-af84c52f4202"   
             }
          }).done(function(data) {

            alert (data);
         });


</script>
 -->