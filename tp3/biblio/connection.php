<?php
# Connection a ma base de donnée via mon my_setting.ini
$file = 'my_setting.ini';
if(!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open'. $file . ".");
try
{
    $db = new PDO('mysql:host='.$settings['database']['host'].";dbname=".$settings['database']['dbname'].";charset=utf8", $settings['database']['username'], '');
	// $db = new PDO('mysql:host=localhost;dbname=iia;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>