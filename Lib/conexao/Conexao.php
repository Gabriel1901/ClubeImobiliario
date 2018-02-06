<?php

namespace Lib\conexao;

use PDO;

require_once "../autoload.php";
require_once "../config.php";
/*
 * Conexão com o Banco de dados.
 */

/**
 * Description of conexaoModel
 *
 * @author Projeto
 */
class Conexao {

    private $dsn;
    private $username;
    private $password;
    private $dbname;
    private $options;
    public $con;

    public function __construct() {
        $this->dsn = db_dsn;
        $this->username = db_username;
        $this->password = db_password;
        $this->dbname = db_name;
        $this->options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"];
    }

    public function pdo() {

        return $this->con = new PDO('mysql:host=' . $this->dsn . ';dbname=' . $this->dbname, $this->username, $this->password, $this->options);
    }

    public function lastInsertId() {
        return $this->con->lastInsertId();
    }

}
