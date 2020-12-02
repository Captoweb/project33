<?php
 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;


$db = new QueryBuilder();

  $id = $_POST['id'];

$products = $db->update([
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'full_text' => $_POST['full_text'],
    'category' => $_POST['category'],
    'price' => $_POST['price']
], $id, 'products');   



 //$db = new QueryBuilder(); 


 //$products = $db->findOne('products', 'id'); 
 $products = $db->findOne('products', $id); 
 //$products = findOne();
 
//var_dump($products);   
//echo $products['name']; 
//echo $products->first()->name; die;
echo $this->templates->render('product_update', ['products' =>  $products, 'id' => $id]);
 header("Location: /main_admin");  
