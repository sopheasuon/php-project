<?php
    #get database
    function database(){
        return new mysqli('localhost', 'root', '', 'php-project');
    }

    #add living room
    function add_living_room($value, $image) {
        $name = $value['name'];
        $price = $value['price'];
        database()->query("INSERT INTO living_room (name, price, image) values ('$name', '$price', '$image')");
    }
    # add dining room
    function add_dining_room($value, $image) {
        $name = $value['name'];
        $price = $value['price'];
        database()->query("INSERT INTO dining_room (name, price, image) values ('$name', '$price', '$image')");
    }
    # add bed room
    function add_bed_room($value, $image) {
        $name = $value['name'];
        $price = $value['price'];
        database()->query("INSERT INTO bed_room (name, price, image) values ('$name', '$price', '$image')");
    }
    # add bathroom
    function add_bathroom($value, $image) {
        $name = $value['name'];
        $price = $value['price'];
        database()->query("INSERT INTO bathroom (name, price, image) values ('$name', '$price', '$image')");
    }
    # add other accessory
    function add_other_accessory($value, $image) {
        $name = $value['name'];
        $price = $value['price'];
        database()->query("INSERT INTO other_accessories (name, price, image) values ('$name', '$price', '$image')");
    }

    #delete living room
    function deletLiving($id){
        database()->query("DELETE FROM living_room WHERE livingId = $id");
        
    }
    #delete dining room
    function deleteDining($id){
        database()->query("DELETE FROM dining_room WHERE diningId = $id");
        
    }
    #delete bed room
    function delete_bed_room($id){
        database()->query("DELETE FROM bed_room WHERE bedId = $id");
        
    }
    #delete  bathroom
    function deleteBathroom($id){
        database()->query("DELETE FROM bathroom WHERE bathId = $id");
        
    }
    #delete  other accessories
    function deleteOther_accessories($id){
        database()->query("DELETE FROM other_accessories WHERE otherId = $id");
        
    }
    // get id from table living room
    function getLiving($id) {
        return database()->query("SELECT * FROM living_room WHERE livingId = $id");
        
    }
    // get id from table dining room
    function getDining($id) {
        
        return database()->query("SELECT * FROM dining_room WHERE diningId = $id");
    }
    // get id from table bed room
    function getBed_room($id) {
        return database()->query("SELECT * FROM bed_room WHERE BedId = $id");
    }
    // get id from table  bathroom
    function getBathroom($id) {
        return database()->query("SELECT * FROM bathroom WHERE bathId = $id");
    }
    // get id from table  other accessories
    function getOther_accessory($id) {
        return database()->query("SELECT * FROM other_accessories WHERE otherId = $id");
    }
    // Edit Living room 
    function editLiving($value) {
        $name = $value['name'];
        $price = $value['price'];
        $image = $value['image'];
        $id = $value['livingId'];
        database()->query("UPDATE living_room SET name = '$name', price = '$price', image= '$image' WHERE livingId = $id");
    }

    // Edit dining room 
    function editDining($value) {
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['diningId'];
        database()->query("UPDATE dining_room SET name = '$name', price = '$price' WHERE diningId = $id");
    }
    // Edit bed room 
    function editBed_room($value) {
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['bedId'];
        database()->query("UPDATE bed_room SET name = '$name', price = '$price' WHERE bedId = $id");
    }
    // Edit bed room 
    function editBathroom($value) {
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['bathId'];
        database()->query("UPDATE bathroom SET name = '$name', price = '$price' WHERE bathId = $id");
    }
    // Edit other accessories
    function editOther_accessory($value) {
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['otherId'];
        database()->query("UPDATE other_accessories SET name = '$name', price = '$price'WHERE otherId = $id");
    }


    // read product

    function getAllProducts(){
        return database()->query('SELECT * FROM product ORDER BY productId DESC');
    }

    function getOneProduct($id){
        database()->query("SELECT * FROM product WHERE productId= $id");
    }
    function readMore($text, $number){
        return substr($text, 0, $number);

    }// search item name
    function searchByName($product_name){
        $productName = $product_name['search'];
        return database()->query("SELECT * FROM product WHERE productName LIKE '%$productName%'");
    }



?>