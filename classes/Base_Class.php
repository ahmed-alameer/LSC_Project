<?php class Base_Class extends DB_Connect
{


    public $query;

    public function __construct()
    {
        parent::__construct();
    }


    public function normal_query($sql, $params = null)
    {

        $this->query = $this->conn->prepare($sql);

        if (is_null($params)) {

            $this->query->execute();
        } else {

            $this->query->execute($params);
        }
    }


    public function single_row()
    {

        return $this->query->fetch(PDO::FETCH_OBJ);
    }


    public function all_rows()
    {

        return $this->query->fetchAll(PDO::FETCH_OBJ);
    }


    public function count_rows()
    {

        return $this->query->rowCount();
    }

    public function security($text)
    {

        return trim(strip_tags($text));
    }
}