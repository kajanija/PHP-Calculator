<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zadatak za IT Akademiju</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

<div class="container">
  <div id="rezultat" style="margin-bottom: 15px; margin:auto;"></div>
<div style="width: 60%; margin:auto;">
  <form id="firstform">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1. Number</span>
  </div>
  <input type="number" class="form-control" placeholder="1- Number"  name="broj1" />
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Operation</label>
  </div>
  <select class="custom-select" id="" name="operacija" >
    <option selected value="Izaberi">Chose</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
</div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2. Number</span>
  </div>
  <input type="number" class="form-control" placeholder="2- Number"  name="broj2" />
</div>

<button class="btn btn-light" id="izracunaj">OK</button>

</form>
</div>
</div>
    


  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="vendor/jquery/custom.js"></script>

  </body>

</html>
