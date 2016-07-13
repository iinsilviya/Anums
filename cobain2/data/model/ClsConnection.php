<?php
class ClsConnection
{
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';

    protected $db_driver = 'mysql';
    protected $db_name   = 'smuna';
    protected $query     = '';
    protected $rows      = array();
    protected $conn      = null  ;

    private function open_connection()
    {
        $cadena=$this->db_driver.":host=".self::$db_host.";dbname=" .$this->db_name;
        $this->conn = new PDO($cadena,self::$db_user,self::$db_pass);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->conn->query("SET NAMES 'utf8'");
    }

    private function close_connection()
    {
        $this->conn = null;
    }


    protected function execute_query()
    {
        $data = array();
        if( $this->conn == null )
        {
            $this->open_connection();
        }

        $stm = $this->conn->prepare($this->query);

        if($stm->execute())
        {
            $col = $stm->columnCount() ;
            if ($col > 0)
            {
                $data  = $stm->fetchAll(PDO::FETCH_ASSOC) ;
            }
        }
        $this->rows =  $data ;


    }

    protected function execute_password()
    {
        $data = array();
        $col = 0;
        if( $this->conn == null )
        {
            $this->open_connection();
        }

        $stm = $this->conn->prepare($this->query);

        if($stm->execute())
        {
            $col = $stm->rowCount() ;
            /*if ($col > 0)
            {
                $data  = $stm->fetchAll(PDO::FETCH_ASSOC) ;
            }*/
        }
        $this->rows =  $col ;


    }

    public function beginTransaction()
    {
        if( $this->conn == null )
        {
                $this->open_connection();
                $this->conn->beginTransaction();
        }
        elseif( $this->conn != null )
        {
                $this->conn->beginTransaction();
        }
    }

    public function commit()
    {
        $this->conn->commit();
        $this->close_connection();
    }
    public function rollback()
    {
        $this->conn->rollback();
        $this->close_connection();
    }

    public function get_connection()
    {
        $this->open_connection() ;
        return $this->conn;
    }
    public function get_query()
    {
        $sql = $this->query ;
        return $sql ;
    }

}