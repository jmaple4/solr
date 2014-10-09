<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fill out an application to rent">
    <meta name="author" content="">
    <title>Application</title>
    <?php include 'assets/includes/head.php';?>
</head>

<body class="page-application">
    <?php include 'assets/includes/nav.php';?>

    
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <div class="heroBlock">
                <img class="pageHeroImage img-responsive" src="assets/img/photos/about-hero.jpg" width="1024" height="263" alt="garden">
                    <span class="logoBranding"></span>
                    </div><!-- /heroBlock -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Fill out an application</h1>
            </div>
        </div>
        <!-- /row -->
        
        <form role="form" action="http://forms.brace.io/jmaple4@gmail.com" method="post">
        <div class="row">
            <div class="col-sm-6">
                <p>Ready to apply? Let us know a little bit about yourself and we'll give you an application.</p>
                  <div class="form-group">
                    <label for="firstLastName">First &amp; Last Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter first and last name" name="name">
                  </div>
  
                  <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Enter email address" name="email">
                  </div>
                 
                
            </div><!-- /col-6 -->





            <div class="col-sm-6">
                 <div class="form-group">
                    <label for="textBox">Additional Details</label>
                    <textarea class="form-control" id="textBox" rows="5" placeholder="Any additional details you want to mention" name="comments"></textarea>
                  </div>
                  <input type="hidden" name="_subject" value="Solr: Application Downloaded" />
                  <input type="hidden" name="_next" value="//concretewind.com/test/solr/application-success.php" />
                  <button type="submit" class="btn-primaryAction">Request Application</button>
            </div><!-- /col-6 -->
        </div>
        </form>
        <!-- /row -->

    </div>
    <!-- /.container -->
    <?php include 'assets/includes/footer.php';?>
</body>

</html>
