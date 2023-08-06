<?php
if(isset($_POST['ifsc'])){
$ifsc = $_POST['ifsc'];
$json =file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
$arr =json_decode($json);
}

echo'
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>IFSC BANK API</h3> </a>
    
</nav> 

<div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputifsc" class="form-label"><h4>Enter Ifsc Code </h4></label>
    <input type="ifsc" name="ifsc"class="form-control" id="exampleInputifsc" aria-describedby="ifsc">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
<div class="container"><h2> Bank Details :)</h2><hr>';
//print_r($arr);

if(isset($_POST['ifsc'])){
echo"</br>";
echo"<b>Ifsc</b> - ".$arr->IFSC."</br>";
echo"<b>Branch</b> - ".$arr->BRANCH."</br>";
echo"<b>Bank</b> - ".$arr->BANK."</br>";
echo"<b>City</b> - ".$arr->CITY."</br>";
echo"<b>Addres</b> - ".$arr->ADDRESS."</br>";

echo"<b>Contect</b> - ".$arr->CONTACT."</br>";
echo"<b>State</b> - ".$arr->STATE."</br>";
echo"<b>ISO</b> - ".$arr->ISO3166."</br>";

}
echo'
</div>
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>';

?>