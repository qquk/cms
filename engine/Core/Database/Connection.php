<?php
/**
 * Created by PhpStorm.
 * User: official
 * Date: 09.10.2017
 * Time: 13:08
 */

namespace Engine\Core\Database;


class Connection
{
    /**
     * @var \PDO
     */
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $pdoSet = require "config.php";

        $opt = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC];
        try {
            $this->link = new \PDO($pdoSet['dsn'], $pdoSet['user'], $pdoSet['pass'], $opt);
        } catch (\PDOException $e) {
            die("Подключение не удалось " . $e->getMessage());
        }

        return $this;
    }


    public function execute($sql, $params = null)
    {
        $stmt = $this->link->prepare($sql);
        return $stmt->execute($params);
    }

    public function query($sql, $params = null)
    {
        $stmt = $this->link->prepare($sql);
        if ($stmt->execute($params) !== false) {
            return $stmt->fetchAll();
        }
        return [];
    }
}