<?php 

class Cart{
    public $db =null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into cart table

    public function insertintoCart($params = null, $table = 'cart')
    {
        if($this->db->con != null)
        {
            if($params != null)
            {
                //*insert into cart(user_id) values (0)
                //get table colomns
                $columns = implode(',',array_keys($params));
                $values = implode(',',array_values($params));

                //create mysql query
                $query_string = sprintf("insert into %s(%s) values (%s)",$table,$columns,$values);
                
                //execute query

                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //to get user_id and item_id and insert into cart table
    public function addToCart($userid, $itemid)
    {
        if(isset($userid) && isset($itemid))
        {
            $params = array(
                "user_id"=> $userid,
                "item_id"=>$itemid
            );
            //*insert data into cart
            $result = $this->insertintoCart($params);
            if($result){
                //RELOAD PAGE
                header('Location'. $_SERVER['PHP_SELF']);
            }
        }

    }


}