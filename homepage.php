<?php

 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;
 use PDO;


 $db = new QueryBuilder(); // подключаюсь

 $products = $db->getAll('products'); // вывожу все продукты
 