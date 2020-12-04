<?php
 
 use App\QueryBuilder;

 $db = new QueryBuilder();

 $posts = $db->getAll('products');
 