<?php
require_once './QuiryBuilder.php';
$rows = (new QueryBuilder())
->select('name', 'image', 'price','id')
->from('products')->orderBy("id DESC")->get();

foreach($rows as $row){
    echo $row['name']."<br>".$row['price']."<br>".$row['id'];

}