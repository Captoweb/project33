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

        $this->qb = $qb;
        $this->templates = $engine;
        $this->auth = $auth;
        
    }


    public function home() {

         
        $products = $this->qb->getAll('products'); 
         
          echo $this->templates->render('homepage', ['products' =>  $products]); 


        //require '../app/controllers/homepage.php';

    }



    public function one_product() {

        $id = $_GET['id'];

        $products = $this->qb->findOne('products', 'id'); 

        echo $this->templates->render('one_product', ['id' => $id, 'products' =>  $products]);

        //require '../app/controllers/one_product.php';
    }


    public function category() {
        
        $id = $_GET['id'];
        
        $products = $this->qb->getCategory('products', 'category'); 
        
        echo $this->templates->render('category', ['id' => $id,'category' => $category, 'products' =>  $products]);
    }


 

    public function mainAdmin() {

        $products = $this->qb->getAll('products');  

        echo $this->templates->render('main_admin', ['products' =>  $products]);
    }


    public function insert() {

         require '../app/controllers/insert.php';
    }

    public function insertAll() {

         require '../app/controllers/insert_all.php';
    }


    public function update() {

        $id = $_GET['id'];

         require '../app/controllers/update.php'; 
    }


    public function delete() {
        
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












