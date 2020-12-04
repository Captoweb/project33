<?php
namespace App;
use Aura\SqlQuery\QueryFactory;
use PDO;


class QueryBuilder {

    private  $pdo;
    private  $results;
    private  $queryFactory;


    public function __construct(PDO $pdo) { 
        
       // $this->pdo = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
        $this->pdo = $pdo;
        $this->queryFactory = new QueryFactory('mysql');
    }
    

    public function getAll($table) {

        $select = $this->queryFactory->newSelect();

        $select->cols(['*'])
         ->from($table); 

        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
        
    }


    public function insert($data, $table) {

        $insert = $this->queryFactory->newInsert();

        $insert
            ->into($table)    
            ->cols($data);

            $sth = $this->pdo->prepare($insert->getStatement());
            $sth->execute($insert->getBindValues());       
                        
    }


    public function update($data, $id, $table) { 

        $update = $this->queryFactory->newUpdate();

        $update
            ->table($table)                
            ->cols($data) 
            ->where('id = :id')
            ->bindValue('id', $id);     
             

        $sth = $this->pdo->prepare($update->getStatement());
        $sth->execute($update->getBindValues());    

    }


    public function delete($id, $table) 
    {

        $delete = $this->queryFactory->newDelete();

        $delete
            ->from($table)                
            ->where('id = :id')
            ->bindValue('id', $id);      

        $sth = $this->pdo->prepare($delete->getStatement());
        $sth->execute($delete->getBindValues());

    }


    public function findOne($table, $id)
    {
        $select = $this->queryFactory->newSelect();

        $select->cols(['*'])
         ->from($table)
         ->where('id = :id'); 

       $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute([
            'id' => $_GET['id'],
        ]);

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;   
       
    }


    public function getCategory($table, $category) {
        $select = $this->queryFactory->newSelect();

        $select->cols(['*'])
         ->from($table)
         ->where('category = :category')
        
         ->bindValue('category', $category);  
         $sth = $this->pdo->prepare($select->getStatement()); 
         
         $category = $_GET['category']; 

         $sth->execute([
            'category' => $category,
            
        ]);

         $result = $sth->fetchAll(PDO::FETCH_ASSOC);

       return $result;   
    }


    public function first()
    {
        return $this->results()[0];
    }

}

