<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getTenNewProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY ID DESC LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getNewLapTop()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 2 ORDER BY ID DESC LIMIT 0,5");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getFeatureProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE FEATURE = 1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getTopSellLaptop()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 2 ORDER BY SLBAN DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellLaptop2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 2 ORDER BY SLBAN DESC LIMIT 2,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellPhone()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 1 ORDER BY SLBAN DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellPhone2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 1 ORDER BY SLBAN DESC LIMIT 2,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellTivi()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 3 ORDER BY SLBAN DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellTivi2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 3 ORDER BY SLBAN DESC LIMIT 2,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellHeadPhone()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 4 ORDER BY SLBAN DESC LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTopSellHeadPhone2()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = 4 ORDER BY SLBAN DESC LIMIT 2,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search2($keyword, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu 
  	    $firstLink = ($page - 1) * $perPage;
          $sql = self::$connection->prepare("SELECT * FROM products WHERE `NAME` LIKE ? LIMIT ?,?");
          $firstLink = ($page-1)* $perPage;
          $keyword = "%$keyword%";
          $sql->bind_param("sii", $keyword, $firstLink, $perPage);
          $sql->execute(); //return an object
          $items = array();
          $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
          return $items; //return an array
    }

    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `NAME` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function getProductByType($type_id){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function get3ProductByType($type_id, $page, $perPage){
        // Tính số thứ tự trang bắt đầu 
  	    $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE TYPE_ID = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id,$firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function paginate($url, $total, $perPage, $page)
    {
        $totalLinks = ceil($total/$perPage);
 	    $link ="";
    	for($j=1; $j <= $totalLinks ; $j++){
            if($j == $page){
                $link = $link."<li class='active'>$j</li>";
            }
      		else{
                $link = $link."<li><a href='$url&page=$j'> $j </a></li>";
              }
     	}
     	return $link;
    }
    public function getRelatedProducts($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products, protypes
        WHERE products.TYPE_ID = ? and products.TYPE_ID = protypes.TYPE_ID ORDER BY SLBAN DESC LIMIT 0,3");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>