

<?php 

    /**
    * 
    */
    class Database
    {
        
        /**
         * Khai báo biến kết nối
         * @var [type]
         */
        public $link;

        public function __construct()
        {
            $this->link = mysqli_connect("localhost","root","","mobi_shop") or die ();
            mysqli_set_charset($this->link,"utf8");
        }
        public function insert($table, array $data)
        {
            //code
            $sql = "INSERT INTO {$table} ";
            $columns = implode(',', array_keys($data));
            $values  = "";
            $sql .= '(' . $columns . ')';
            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $values .= "'". mysqli_real_escape_string($this->link,$value) ."',";
                } else {
                    $values .= mysqli_real_escape_string($this->link,$value) . ',';
                }
            }
            $values = substr($values, 0, -1);
            $sql .= " VALUES (" . $values . ')';
            // _debug($sql);die;
            mysqli_query($this->link, $sql) or die("Lỗi  query  insert ----" .mysqli_error($this->link));
            return mysqli_insert_id($this->link);
        }

        public function update($table, array $data, array $conditions)
        {
            $sql = "UPDATE {$table}";

            $set = " SET ";

            $where = " WHERE ";

            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $set .= $field .'='.'\''. mysqli_real_escape_string($this->link, xss_clean($value)) .'\',';
                } else {
                    $set .= $field .'='. mysqli_real_escape_string($this->link, xss_clean($value)) . ',';
                }
            }

            $set = substr($set, 0, -1);


            foreach($conditions as $field => $value) {
                if(is_string($value)) {
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->link, xss_clean($value)) .'\' AND ';
                } else {
                    $where .= $field .'='. mysqli_real_escape_string($this->link, xss_clean($value)) . ' AND ';
                }
            }

            $where = substr($where, 0, -5);

            $sql .= $set . $where;
            // _debug($sql);die;

            mysqli_query($this->link, $sql) or die( "Lỗi truy vấn Update -- " .mysqli_error());

            return mysqli_affected_rows($this->link);
        }

        public function delete ($table ,  $masp )
        {
            $sql = "DELETE FROM {$table} WHERE MaSanPham = $masp ";

            mysqli_query($this->link,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }

        /**
         * delete array 
         */
        public function fetchID($table , $id )
        {
            $sql = "SELECT * FROM {$table} WHERE MaSanPham = $id ";
            $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn fetchID " .mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
        }

        

        

         public function fetchAll($table)
        {
            $sql = "SELECT * FROM {$table} WHERE 1" ;
            $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }
        
    }
   
?>