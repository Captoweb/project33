<?php  $this->layout('layout', ['title' => 'login']) ?>

<div class="container">
      <div class="form">
    <h1>Verification</h1>
    
      <form action="" method="post">

          <div class="form-group">
            <label for="ex">Selector</label>
            <input type="text" class="form-control" id="ex" aria-describedby="emailHelp"name="selector" value="">
          </div>

          <div class="form-group">
            <label for="ex">Token</label>
            <input type="text" class="form-control" id="ex" name="token" value="">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
    </div>
  </div> 