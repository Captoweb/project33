<?php
 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;

 
if (!empty( $_POST['name']) && !empty( $_POST['description']) && !empty( $_POST['full_text']) ) {
    $products = $this->qb->insert([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'full_text' => $_POST['full_text'],
        'price' => $_POST['price'],
        'category' => $_POST['category'],
        "img" => "../img/".$_FILES['img']['name'],
     ], 'products');
     
     if(isset($_FILES['img'])) {
     
     move_uploaded_file($_FILES["img"]["tmp_name"], '../public/img/'.$_FILES["img"]["name"]);
     
     }
    
}

echo $this->templates->render('product_insert', ['products' =>  $products]);
header("Location: /main_admin"); 