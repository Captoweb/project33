<?php  $this->layout('layout', ['title' => 'update']) ?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
<h2>Обновить продукт</h2>

<form action="/controllers/update" class="form" method="post">

    <div class="form-group">
        <label for="title">Название</label>
        <input type="text" id="title" name="name" class="form-control" value="<?=$products[0]['name']?>">
    </div>

    <div class="form-group">
        <label for="pr_desc">Описание</label>
        <textarea name="description" id="pr_desc" class="form-control" rows="3" ><?=$products[0]['description']?></textarea>
    </div>

    <div class="form-group">
        <label for="full_text">Полный текст</label>
        <textarea name="full_text" id="full_text" class="form-control" rows="3" ><?=$products[0]['full_text']?></textarea>
    </div>

    <div class="form-group">
        <label for="category">Категория</label>
        <input type="text" id="category" name="category" class="form-control" value="<?=$products[0]['category']?>">
    </div>

    <div class="form-group">
        <label for="price">Цена</label>
        <input type="text" id="price" name="price" class="form-control" value="<?=$products[0]['price']?>">
    </div>


    <!-- <div class="form-group">
            <label for="example">Upload a picture</label>
            <input type="file" name="image" class="form-control-file" id="example">
    </div> --> 

    <input type="text" name="id" value="<?=$products[0]['id']?>">

    <div class="form-group">
        <button class="btn btn-warning" type="submit">Обновить</button>
    </div>
</form>

</div>
</div>
</div>
