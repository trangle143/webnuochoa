<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
</head>
<body>
  <h1 class="text-center">Cách tạo hộp số lượng bằng Bootstrap</h1>
<div class="container"> 
 <div class="row"> 

  <div class="col-md-3 col-md-offset-3"> 

   <p>min = 1 và max = 9999999999999</p>

     <div class="input-group"> <span class="input-group-btn">    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>    </span> <input name="quant[1]" class="form-control input-number" value="1" type="text"> <span class="input-group-btn">    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>    </span> 
     </div> 
  </div> 

  <div class="col-md-3"> 

   <p>min = 1 và max = 10</p> 

     <div class="input-group"> <span class="input-group-btn"> 
          <button type="button" class="btn btn-danger btn-number" data-type="minus" data-field="quant[2]"> 
     <span class="glyphicon glyphicon-minus"></span> </button></span> <input name="quant[2]" class="form-control input-number" value="1" min="1" max="10" type="text"> <span class="input-group-btn">    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]"> <span class="glyphicon glyphicon-plus"></span> </button></span> 
     </div> 
  </div>

 </div>
</div>
<script type="text/javascript" src="{{asset('theme/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>