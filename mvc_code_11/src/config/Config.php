<?php
namespace MyApp\Config;
use MyApp\Core\DotEnv;

class Config {
  public static function load() {
    
    // $file="../src/config/config.properties";
    // if(!file_exists($file)) {
    //   echo "Config File not found";
    //   exit();
    // }
    
    // $properties=parse_ini_file($file);
    
    (new DotEnv(__DIR__ . '../../.env'))->lood();
    
    define('BASEURL', getenv('BASE_URL'));
    
    // define('DB_HOST', $properties['db_host']);
    // define('DB_USER', $properties['db_user']);
    // define('DB_PASS', $properties['db_pass']);
    // define('DB_NAME', $properties['db_name']);
    // define('DB_PORT', $properties['db_port']);
  }
}