<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
<?php

$db_host="localhost";
$db_user="Os";
$db_password="";
$db_name="test";

try{

$db= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOEXCEPTION $e)
{
    $e->getMessage();
} 



if(isset($errorMsg))
{
    foreach($errorMsg as $error)
    {
        ?>
        <div class="alert alert-success">
             <strong><?php echo $loginMsg;?></strong>
             
    }
}



