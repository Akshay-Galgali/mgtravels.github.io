<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<?php
  include_once '../includes/dbh.inc.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <title>Payment Gateway</title>
    <!-- Bootstrap Core CSS -->
    <link
      href="../assets/plugins/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <p><?php echo $_POST["1"]; ?></p> 
   <div class="row">
    <div class="col-12">
     <div class="card">
      <div class="card-block">
       <h4 class="card-title">Payment Gateway</h4>
       <form id="pytm" class="form-material m-t-40" method="post" action="TxnTest.php">
        <div class="form-group">
         <label for="amount">Amount <span class="help"></span></label>
         <input type="number" id="amount" title="TXN_AMOUNT" name="TXN_AMOUNT" class="form-control" value="<?php echo $_POST["1"]; ?>"> </div>
        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary">Submit</button>
       </form>
      </div>
     </div>
     <script type="text/javascript">
  document.getElementById("pytm").submit();
</script>

  </body>
</html>
