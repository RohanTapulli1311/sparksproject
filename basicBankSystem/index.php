<!DOCTYPE html>
<html>
<head>
    <title>
        Sparks Bank
    </title>
    <link rel="stylesheet" type="text/css" href="inStyle.css">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="bgimg">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
                <img src="images/tsf.png" alt="Logo" style="width:40px;">
            </a>
            <div class="container">
                <h3 class="navbar-brand text-warning font-weight-bold " style="margin-top:5px">SPARKS BANK</h3>
            </div>

            <!-- Links -->
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#services">Services</a>
                </li>

            </ul>
            
            <button class="btn btn-outline-warning mr-sm-2" onclick="location.href = 'https://www.thesparksfoundationsingapore.org/contact-us/';">Contact US</button>
            >
        </nav>
        <div class="container text-center text-white headerset">
            <h3>Welcome to SPARKS BANK</h3>
            <h2>we provide the best solution there is.</h2>

            <button class="btn btn-warning text-white btn-lg" onclick="location.href = 'https://www.thesparksfoundationsingapore.org/';">know more</button>

        </div>
    </div>
    <a id="services">
        <section class="container ourservices text-center" >
        </a>
        <h1>Services</h1>   
        <p>our services are listed below:</p>
        <div class="row rowsetting">
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto " >
                <a href="customer_display.php">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa-list-alt fa-3x text-white" aria-hidden="true"></i>
                </div>
            </a>
                <h2>View Customers</h2>
                <p>view all customers and make transactions</p>


            </div>
             <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto " >
                <a href="transfer_money.php">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa-money fa-3x text-white" aria-hidden="true"></i>
                </div>
            </a>
                <h2>Transfer Money</h2>
                <p>Transfer money from one account to another.</p>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto " >
                <a href="transaction_display.php">
                <div class="imgsetting d-block m-auto bg-warning">
                    <i class="fa fa-exchange fa-3x text-white" aria-hidden="true"></i>
                </div>
            </a>
                <h2>View Transactions</h2>
                <p>view all the transactions.</p>


            </div>


        </div>
    </section>
</body>
</html>