<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 22.09.2017
 * Time: 15:13
 */
namespace database;
use \PDO;
use config\Config;
class Database
{
    private static $pdoInstance = null;
    protected function __construct()
    {
        try{
            //var_dump(Config::pdoConfig('dsn'));
            self::$pdoInstance = new PDO (Config::pdoConfig("dsn"), Config::pdoConfig("user"), Config::pdoConfig("password"));
            self::$pdoInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection failed " . $exception->getMessage();
        }
    }
    public static function connect()
    {
        if (self::$pdoInstance) {
            return self::$pdoInstance;
        }
        new self();
        return self::$pdoInstance;
    }
}