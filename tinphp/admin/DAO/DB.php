<?php
class DB
{
    var $host='localhost';
    var $user='root';
    var $pass='';
    var $dbName='mobi_shop';

    public function ExecuteQuery($sql)
    {
        $link= mysqli_connect($this->host,$this->user,$this->pass,$this->dbName)
        or die();
        mysqli_set_charset($this->link,"utf8");
        $result=mysqli_query($link.$sql);
        mysqli_close($link);
        return $result;
    }
    
}
?>