<?php  $this->layout('layout', ['title' => 'category']) ?>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $products[0]['img']?>" class="one_img" alt="..."> 
           </div>
       
           <div class="col-md-8">
           <p>ID =  <?= $this->e($id)?></p>
                <h3><?php echo $products[0]['name']?></h3>
                <p><?php echo  $products[0]['full_text'] ?><p> 
                <p><?php echo $products[0]['price']?></p>
           </div>
        
        </div>
    </div> 


