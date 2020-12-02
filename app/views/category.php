<?php  $this->layout('layout', ['title' => 'cat']) ?>

<h1><?php echo $_GET["category"] ?></h1>

<div class="col-md-12">
<div class="row">

<?php $i = 0; foreach($products as $product):?>
  <div class="col-md-4">
    <div class="card" style="width: 19rem;">
    <div class="product-info__image">
      <img src="<?php echo $product['img']?>" class="card-img-top" alt="...">
   </div>
      
        <div class="card-body">
        <p class="card-text"><b><?php echo $product['name']?></b></p>
        <p><?php echo  $product['description']; ?><p>
        <p><?php echo $product['price']?></p>
        <a href="one_product?id=<?= $product['id'];?>" class="card-link">Подробнее</a>
        </div>
        </div>
    </div>
    <?php $i++ ?>
    <?php if($i % 3 == 0):?>
      <div class="clearfix"></div>
    <?php endif; ?>
    <?php endforeach ?> 
  </div>
  
</div> <!-- /.row-->
 

</div>
 
</div>
</div>
</div>


