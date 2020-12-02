<?php 
// $db  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");
// use Delight\Auth\Auth;
// $this->auth = new Auth($db); 
?>
<?php  $this->layout('layout', ['title' => 'register']) ?>
<?php echo flash()->display(); ?>

<div class="container">
      <div class="form">
    <h1>Registry</h1>
    
      <form action="/controllers/register" method="post">

          <div class="form-group">
            <label for="ex">Email address</label>
            <input type="email" class="form-control" id="ex" aria-describedby="emailHelp"name="email" value="<?php //echo Input::get('email');?>">
          </div>
         
          <div class="form-group">
            <label for="ex">Password</label>
            <input type="password" class="form-control" id="ex" name="password">
          </div>

          <div class="form-group">
            <label for="ex">Username</label>
            <input type="text" class="form-control" id="ex" name="username" value="<?php //echo Input::get('username');?>">
          </div>

          <!-- <div class="form-group">
            <label for="ex">Password again</label>
            <input type="password" class="form-control" id="ex" name="password_again">
          </div> -->
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
