<?php

class DB
{
    protected $table;
    protected $dsn = 'mysql:host=localhost;charset=utf8;dbname=tarotspa;';
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    protected function a2s($array)
    {
        $tmp = [];
        foreach ($array as $key => $value) {
            $tmp[] = "`$key`='$value'";
        }

        return $tmp;
    }

    public function all(...$arg)
    {
        $sql = "SELECT * FROM `$this->table`";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchAll(2);
    }

    public function count(...$arg)
    {
        $sql = "SELECT COUNT(*) FROM `$this->table`";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchColumn();
    }

    public function find($arg)
    {
        $sql = "SELECT * FROM `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }

        return $this->pdo->query($sql)->fetch(2);
    }

    public function del($arg)
    {
        $sql = "DELETE FROM `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }

        return $this->pdo->exec($sql);
    }

    public function save($arg)
    {
        if (isset($arg['id'])) {
            $tmp = $this->a2s($arg);
            $sql = "UPDATE `$this->table` SET " . join(",", $tmp);
            $sql .= "where `id`='{$arg['id']}'";
        } else {
            $keys = array_keys($arg);
            $sql = "INSERT INTO `$this->table` (`" . join("`,`", $keys) . "`) VALUES ('" . join("','", $arg) . "')";
        }

        return $this->pdo->exec($sql);
    }
}

function q($sql)
{
    $dsn = 'mysql:host=localhost;charset=utf8;dbname=tarotspa;';
    $pdo = new PDO($dsn, 'root', '');
    return $pdo->query($sql)->fetchAll(2);
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url)
{
    header("location:$url");
}

$Reserves = new DB('reserves');
$Cardmeanings = new DB('cardmeanings');
$Testimonials = new DB('testimonials');
$Product = new DB('products');
$Services = new DB('services');
$Footers = new DB('footers');
