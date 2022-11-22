<?php


class dataHandler {

    /** @var String hostname to be used in the connection */
    private $host = "";
    private $port = "3306";
    private $username = "root";
    private $password = "";
    private $database = "test_kevin";

    public $connection;
    
    public $products = [];

    /**
     * 
     */
    public function init() {
        // create connection
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    /**
     * 
     */
    public function fetch_products() {
        if($this->connection){
            // fetch
            $result = $this->connection->query("SELECT id, name, description, price, image FROM products;");
            if($result){
                while ($row = mysqli_fetch_array($result)) {
                    $this->products = [];
                    array_push($this->products, $row);
                }
            }
            else{
                return false;
            }
        }
        else {
            return false;
        }
    }
    
    /**
     * 
     */
    public function print_products() {
        if(count($this->products) > 0){
            foreach($this->products as $product){
                $item = "
                <section class='servicio' id='pin1'>
                    <h3>".$product['name']."</h3>
                    <img src='img/".$product['image'].".png' alt=''>
                    <p>".$product['description']."</p>
                    <button class='boton' onclick='onBuy(\"".$product['id']."\", \"".$product['name']."\", \"".$product['price']."\", \"".$product['description']."\",)'>$".$product['price']."</button>
                </section>
                ";
                print $item;
            }
        }
    }

}

?>