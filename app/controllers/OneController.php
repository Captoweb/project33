<?php

namespace App\controllers;
if( !session_id() ) @session_start();
use League\Plates\Engine;
use Aura\SqlQuery\QueryFactory;
use PDO;
use App\QueryBuilder;
use Delight\Auth\Auth;


class OneController {

    private $templates;
    private $auth;
    private  $qb;

    public function __construct(QueryBuilder $qb, Engine $engine, Auth $auth) {

        
        // $db  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
        // $this->templates = new Engine('../app/views');
        // $this->auth = new Auth($db);

        $this->qb = $qb;
        $this->templates = $engine;
        $this->auth = $auth;
        
        // это не работает, надо что то передать сюда
        // При создании объекта QueryBuilder нужно передавать экземпляр объекта PDO 
    }


    public function home() {

        // d($this->qb);die; 

        $db = new QueryBuilder(); 
        

        $products = $db->getAll('products'); // вывожу все продукты
        
        // передаю из контроллера в вид 
         echo $this->templates->render('homepage', [
            'products' =>  $products]); 

        //require '../app/controllers/homepage.php';

    }



    public function one_product() {

        $db = new QueryBuilder(); // подключаюсь
        $id = $_GET['id'];

        $products = $db->findOne('products', 'id'); 

        echo $this->templates->render('one_product', ['id' => $id, 'products' =>  $products]);

        //require '../app/controllers/one_product.php';
    }


    public function category() {
        $db = new QueryBuilder($pdo);
        $id = $_GET['id'];
        //$id = $_GET['category'];
        $products = $db->getCategory('products', 'category'); 
        
        echo $this->templates->render('category', ['id' => $id,'category' => $category, 'products' =>  $products]);
    }


 

    public function mainAdmin() {
        $db = new QueryBuilder();

        $products = $db->getAll('products');  

        echo $this->templates->render('main_admin', ['products' =>  $products]);
    }


    public function insert() {
        $db = new QueryBuilder();

         require '../app/controllers/insert.php';
    }

    public function insertAll() {
        $db = new QueryBuilder();

         require '../app/controllers/insert_all.php';
    }


    public function update() {
        $db = new QueryBuilder();

        $id = $_GET['id'];

         require '../app/controllers/update.php'; 
    }


    public function delete() {

        $db = new QueryBuilder();
        
        require '../app/controllers/delete.php';
    }



    public function register() {
   
         require '../app/controllers/register.php';
    }
    

    public function register_form() {

        echo $this->templates->render('register', ['userId' => $userId]);
        
    }


    
   public function email_verification() {

        require '../app/controllers/verification.php';
    }


    public function login() {
           
           require '../app/controllers/login.php';
    }

    public function login_form() {

        echo $this->templates->render('login', ['auth' =>  $auth, 'id' => $id]);
        
    }


    public function logOut() {

        require '../app/controllers/logout.php';
    }



}












