<?php 
function cleanerSession(){
    $cleaner = array_keys($_SESSION);
        foreach ($cleaner as $key){
            unset($_SESSION[$key]);
        }
}

// Functions to filter user inputs
function filterName($field){
	// Sanitize user name
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    // Validate user name
	if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
		return $field;
	}
	else{
		return FALSE;
	}
}   
function filterEmail($field){
    // Sanitize e-mail address
	$field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    // Validate e-mail address
	if(filter_var($field, FILTER_VALIDATE_EMAIL)){
		return $field;
	}else{
		return FALSE;
	}
}
function filterString($field){
    // Sanitize string
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
	if(!empty($field)){
		return $field;
	}else{
		return FALSE;
	}
}

function hashPW($userpw){
  	return password_hash($userpw, PASSWORD_DEFAULT, ['cost' => 12]);
}

function send_mail($email,$message,$subject){						
		require 'phpmailer5/PHPMailerAutoload.php';
		
		$mail = new PHPMailer();
	  // only for debug START
		//$mail->SMTPDebug = 2;
		//Ask for HTML-friendly debug output
		//$mail->Debugoutput = 'html';
	  // only for debug END	
		$mail->CharSet = 'utf-8';
		$mail->isSMTP(); 
		$mail->Host = 'smtp.zoho.com'; 
		$mail->Username='admin@cmoncoco.com';  
		$mail->Password='~3891289Gp';   
		                    
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = 'tls';                 
		$mail->Port  = 587;    
		             
		$mail->setFrom('admin@cmoncoco.com','CMONCOCO');
		$mail->addReplyTo('admin@cmoncoco.com','Information');
		$mail->addAddress($email);
		
		$mail->isHtml(true);
		
		
		$mail->Subject = $subject;
		$mail->msgHTML($message);
		if(!$mail->send()) {
		    //echo 'Message could not be sent.';
		    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		    return FALSE;
		} 
		else {
		    return TRUE;
		     //echo 'Message has be sent.';
		}

	}	

function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }

    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}


/// Get ip address
function getRealIpAddr(){
    
		//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {
			$headers = apache_request_headers();
		} else {
			$headers = $_SERVER;
		}
		//Get the forwarded IP if it exists
		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			$the_ip = $headers['X-Forwarded-For'];
		} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
		) {
			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		} else {
			
			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
		return $the_ip;
}



//////////Determine visitor's country

function ipInfo($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
//echo ipInfo("Visitor", "Country"); // United States
//echo ipInfo("173.252.110.27", "Country Code"); // US
//echo ipInfo("173.252.110.27", "State"); // California
//echo ipInfo("173.252.110.27", "City"); // Menlo Park
//echo ipInfo("173.252.110.27", "Address"); // Menlo Park, California, United States
//print_r(ipInfo("173.252.110.27", "Location")); // Array ( [city] => Menlo Park [state] => California [country] => United States [country_code] => US [continent] => North America [continent_code] => NA )


?>