<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Product Page</title>
    <!-- sytle tags-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="components/style.css"/>
  </head>
  <body>
     <header>
     <?php include_once 'components/header.php'; ?>
     </header>
         <main>
             <div class="container-fluid" style="margin-top: 70px;">
               <div class="row">
                  <!-- categories -->
                  <div class="col-md-3">
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a data-toggle="pill" href="#menu1">Clothes</a></li>
                        <li><a data-toggle="pill" href="#menu2">Electronics</a></li>
                        <li><a data-toggle="pill" href="#menu3">Computer Accessories</a></li>
                      </ul>
                  </div>
                  <!-- products -->
                  <div class="col-md-9">
                      <!--clothes-->
                      <div class="tab-content">
                          <div id="menu1" class="tab-pane fade in active">
                            <h3>Clothes</h3>
                            <div class="row">
                              <div class="col-md-4">
                                <?php  include 'components/product_card.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card.php'; ?>
                              </div>
                            </div>
                            <?php include_once 'components/pagination.php'; ?> 
                          </div>
                          <!-- electronics -->
                          <div id="menu2" class="tab-pane fade">
                            <h3>Electronics</h3>
                            <div class="row">
                              <div class="col-md-4">
                                <?php  include 'components/product_card2.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card2.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card2.php'; ?>
                              </div>
                            </div>
                            <?php include 'components/pagination.php'; ?> 
                          </div>
                          <!--Computer Accessories -->
                          <div id="menu3" class="tab-pane fade">
                            <h3>Computer Accessories</h3>
                            <div class="row">
                              <div class="col-md-4">
                                <?php  include 'components/product_card3.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card3.php'; ?>
                              </div>
                              <div class="col-md-4">
                                <?php  include 'components/product_card3.php'; ?>
                              </div>
                            </div>
                            <?php include 'components/pagination.php'; ?> 
                          </div>
                      </div>   
                  </div>

               </div>
             </div>
         </main>
     <footer>
     <?php include_once 'components/footer.php'; ?>
     </footer>
     <!--Optional Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>