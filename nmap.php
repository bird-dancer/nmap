<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="description" content="an online nmap implementation to scan open ports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nmap scanner</title>
</head>
<body>
<h3>scan for open ports</h3>
    <form method="POST">
        <input id="domain" type="text" placeholder="domainname or ip" name="domain"/>
        <input id="submit" type="submit" name="sub" value="check ports"/>
        <label for="domain">domain input</label>
        </form>
</body>
</html>
<?php
if(isset($_POST['sub']) && isset($_POST['domain'])){
        $domain = $_POST['domain'];
        $re = '/^(?!(localhost)|(127.0.0.1)|(192.168.178.\d*)).{4,100}$/';
        if (preg_match($re, $domain)) {
                exec('/var/www/dumbeck/script/nmapscript.sh '.$domain, $output);
                echo $output[0];
        }
        exit;
}
?>
