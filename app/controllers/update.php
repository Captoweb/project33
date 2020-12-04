<?php
 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;


$id = $_POST['id'];

$products = $this->qb->update([
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'full_text' => $_POST['full_text'],
    'category' => $_POST['category'],
    'price' => $_POST['price']
], $id, 'products');   

 
 $products = $this->qb->findOne('products', $id); 

echo $this->templates->render('product_update', ['products' =>  $products, 'id' => $id]);
header("Location: /main_admin");   
