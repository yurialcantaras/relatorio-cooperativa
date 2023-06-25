<?php 

class dbh{

private $confFile;
private $confData;
private $config;

public function __construct(){
    $confFile = '../dbh.json';
    $confData = file_get_contents($confFile);
    $config = json_decode($confData, true);
}

protected function connection($config){

    $host = $config['db']['host'];
    $dbh = $config['db']['dbh'];
    $user = $config['db']['user'];
    $pword = $config['db']['pword'];

    $dsn = 'mysql:dbname='.$host.';host='.$dbh;
    $pdo = new PDO($dsn, $user, $pword);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
    
}

}

?>