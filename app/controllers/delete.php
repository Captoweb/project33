<?php

 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;
 //use PDO;

 $db = new QueryBuilder(); 

 $id = $_GET['id'];
 $db->delete($id, 'products');
 header("Location: /main_admin"); 