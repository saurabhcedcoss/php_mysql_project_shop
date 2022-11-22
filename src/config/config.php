<!-- shop table
CREATE TABLE `shop_db`.`shop_data` ( `shop_id` INT(50) NOT NULL AUTO_INCREMENT , `shop_name` VARCHAR(200) NOT NULL , `shop_contact` VARCHAR(200) NOT NULL , `shop_email` VARCHAR(200) NOT NULL , `shop_address` VARCHAR(200) NOT NULL , `owner_name` VARCHAR(200) NOT NULL , `owner_email` VARCHAR(200) NOT NULL , `owner_contact` VARCHAR(200) NOT NULL , PRIMARY KEY (`shop_id`)) ENGINE = InnoDB;
 user table 
CREATE TABLE `shop_db`.`user_data` ( `user_id` INT(50) NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(200) NOT NULL , `user_contact` VARCHAR(200) NOT NULL , `user_email` VARCHAR(200) NOT NULL , `user_image` VARCHAR(200) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
 login table 
CREATE TABLE `shop_db`.`login_data` ( `user_id` INT(50) NOT NULL AUTO_INCREMENT , `user_email` VARCHAR(200) NOT NULL , `user_password` VARCHAR(200) NOT NULL , `user_role` VARCHAR(200) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;
 product data 
CREATE TABLE `shop_db`.`product_data` ( `product_id` INT(50) NOT NULL AUTO_INCREMENT , `user_id` VARCHAR(200) NOT NULL , `product_category` VARCHAR(200) NOT NULL , `product_sold` VARCHAR(200) NOT NULL , PRIMARY KEY (`product_id`)) ENGINE = InnoDB;
 product detail 
CREATE TABLE `shop_db`.`product_detail` ( `product_id` INT(50) NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(200) NOT NULL , `product_short` VARCHAR(200) NOT NULL , `product_long` LONGTEXT NOT NULL , PRIMARY KEY (`product_id`)) ENGINE = InnoDB;
 product review 
CREATE TABLE `shop_db`.`product_review` ( `review_id` INT(50) NOT NULL AUTO_INCREMENT , `product_text` VARCHAR(200) NOT NULL , `product_star` VARCHAR(200) NOT NULL , `product_id` INT(50) NOT NULL , `user_id` INT(50) NOT NULL , PRIMARY KEY (`review_id`)) ENGINE = InnoDB;
 product cost 
CREATE TABLE `shop_db`.`product_cost` ( `cost_id` INT(50) NOT NULL AUTO_INCREMENT , `product_id` VARCHAR(200) NOT NULL , `product_price` VARCHAR(200) NOT NULL , `product_cost` VARCHAR(200) NOT NULL , PRIMARY KEY (`cost_id`)) ENGINE = InnoDB;
 order data 
CREATE TABLE `shop_db`.`order_data` ( `order_id` INT(50) NOT NULL AUTO_INCREMENT , `product_id` INT(50) NOT NULL , `user_id` INT(50) NOT NULL , `order_date` DATE NOT NULL , PRIMARY KEY (`order_id`)) ENGINE = InnoDB;
 order status 
CREATE TABLE `shop_db`.`order_status` ( `status_id` INT(50) NOT NULL AUTO_INCREMENT , `order_mode` VARCHAR(200) NOT NULL , `order_date` DATE NOT NULL , `order_delivery` DATE NOT NULL , PRIMARY KEY (`status_id`)) ENGINE = InnoDB;
 order details 
CREATE TABLE `shop_db`.`order_details` ( `order_id` INT(50) NOT NULL AUTO_INCREMENT , `order_cost` VARCHAR(200) NOT NULL , `order_quantity` VARCHAR(200) NOT NULL , `order_number` VARCHAR(200) NOT NULL , PRIMARY KEY (`order_id`)) ENGINE = InnoDB; -->
<?php
class Dbconnect
{
    public $servername;
    public $username;
    public $password;
    public $database;
    function __construct($servername, $username, $password, $database)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    function dbConnect(){
          mysqli_connect($this->servername,$this->username,$this->password,$this->database);
    }
}
$conn = new Dbconnect('mysql-server','root','secret','shop_db');
$conn->dbConnect();
?>