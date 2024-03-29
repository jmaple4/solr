<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Schedule a tour of our amazing residences">
    <meta name="author" content="">
    <title>Tour</title>
    <?php include 'assets/includes/head.php';?>
</head>

<body class="page-tour">
    <?php include 'assets/includes/nav.php';?>

    
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                <div class="heroBlock">
                <img class="pageHeroImage img-responsive" src="assets/img/photos/tour-hero.jpg" width="1024" height="263" alt="tour">
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
            <div class="col-xs-12 col-sm-6">
                <h1>Schedule a tour</h1>
            </div>
        </div>
        <!-- /row -->
       <!--  <div class="row">
            <div class="col-xs-12 col-sm-6">
                
            </div>
        </div> -->
        <!-- /row -->

        <form role="form" action="http://forms.brace.io/info@solove.us" method="post">
        <div class="row">
            <div class="col-sm-6">
                <p>To schedule a tour, provide some basic information about yourself and we'll get back to you about a good time to take a tour.</p>
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
                  <input type="hidden" name="_subject" value="Solr: Request for a Tour" />
                  <input type="hidden" name="_next" value="//solove.us/tour-success.php" />
                  <button type="submit" class="btn-primaryAction">Request Tour</button>
            </div><!-- /col-6 -->
        </div>
        </form>
        <!-- /row -->
    </div>
    <!-- /.container -->
    <?php include 'assets/includes/footer.php';?>
</body>
</html>