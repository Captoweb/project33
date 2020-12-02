<?php  $this->layout('layout', ['title' => 'one']) ?>

<h1>One page</h1>
<p>Hello, <?=$this->e($name)?></p>

<p>это one.php, она находится в папке views </p>
<p>вызывается контроллером OneController </p>
<pre>
        // Create new Plates instance
        $templates = new Engine('../app/views'); // надо ввести в адр строку one/1

        // Render a template
        echo $templates->render('one', ['name' => 'Jonathan']);
</pre>
