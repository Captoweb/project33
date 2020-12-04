<?php

 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;
 

 $id = $_GET['id'];
 $this->qb->delete($id, 'products');
 header("Location: /main_admin"); 