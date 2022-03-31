<?php
require_once "./db.php";
require_once "./Select.php";
class QueryBuilder
{
    public function __construct()
    {
        
    }
    public static function select(string ...$select): Select
    {
        return new Select($select);
    }
}
