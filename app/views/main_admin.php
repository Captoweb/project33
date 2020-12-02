<?php  $this->layout('layout', ['title' => 'main_admin']) ?>

<section class="admin">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Админ панель</h2>
                <a href="product_insert" class="btn btn-success create">Добавить продукт</a>
                <a href="insert_all" class="btn btn-warning create">Заполнить готовыми данными</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Фото</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Полный текст</th>
                        <th>Категория</th>
                        <th>Цена</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <?php foreach($products as $product):?>
                        <tbody>
                        <tr>
                            <td><?= $product['id'];?></td> 
                            <td class="mini_img"  ><img src="../<?= $product['img'];?>" alt="picture" style="height: 150px;"></td>

                            <td><?= $product['name'];?></td>
                            <td><?= $product['description'];?></td>
                            <td><?= $product['full_text'];?></td>
                            <td><?= $product['category'];?></td>
                            <td><?= $product['price'];?></td>
                            <td>
                                <a href="one_product?id=<?= $product['id']?>" class="btn btn-info">show</a>
                               
                                <a href="product_update?id=<?= $product['id'];?>" class="btn btn-warning">edit</a>
                                
                                <a href="product_delete?id=<?= $product['id'];?>" class="btn btn-danger" onclick="return confirm('Вы уверены?');">del</a>
                            </td>
                        </tr>
                        </tbody>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>

</section>