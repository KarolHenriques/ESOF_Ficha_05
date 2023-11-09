<?php
class DatabaseExample
{
    public string $host;
    private int $port;
    private string $username;
    private string $password;

    public function __construct(string $host, int $port, string $username,
                                string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getUsername(): string
    {

        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}

/*
 * We use the singleton pattern in order to restrict the number of instances
 * that can be created from a resource consuming class to only one
 *
*/

class DBConnector
{
    private static ?DatabaseExample $instance = null;
    private static string $host;
    private static int $port;
    private static string $username;
    private static string $password;

    private function __construct(string $host, int $port, string $username,
                                string $password)
    {
        self::$instance = new DatabaseExample($host, $port, $username, $password);
        self::$host = $host;
        self::$port = $port;
        self::$username = $username;
        self::$password = $password;

    }

    public static function get_DBExample(): DatabaseExample
    {
        if(self::$instance == null){

           new DBConnector(self::$host, self::$port, self::$username, self::$password);
        }

        return self::$instance;
    }
}

