<?php $this->layout('layout', ['title' => 'insert']) ?>

<div class="container">
    <div class="row">
    <div class="col-md-12">  
<h2>Добавить продукт</h2>

<form action="/controllers/insert" class="form" method="post" name="products" enctype="multipart/form-data">

    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" id="name" name="name" class="form-control" value="">
    </div>


    <div class="form-group">
        <label for="pr_name">Описание</label>
        <textarea name="description" id="pr_name" class="form-control" rows="3" ></textarea>
    </div>

    <div class="form-group">
        <label for="full_text">Полный текст</label>
        <textarea name="full_text" id="full_text" class="form-control" rows="3" ></textarea>
    </div>

    <div class="form-group">
        <label for="title"></label>
        <input type="text" id="title" name="price" class="form-control" value="">
    </div>

    <div class="form-group">
        <label for="title"></label>
        <input type="text" id="title" name="category" class="form-control" value="">
    </div>

    <div class="form-group">
            <label for="example">Upload a picture</label>
            <input type="file" name="img" class="form-control-file" id="example">
    </div>

    <div class="form-group">
        <button class="btn btn-warning" type="submit">Добавить</button>
    </div>
</form>

</div>
</div>
</div>


