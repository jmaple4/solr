<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>solr</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://i.icomoon.io/public/b82cee61ad/solr/style.css">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <?php include 'assets/includes/nav.php';?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
        <span class="logoBranding"></span>
          <img class="carouselHeroImage img-responsive" src="assets/img/photos/garden-tables.jpg" width="1024" height="680" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            <div class="thumbnail">
              <div class="caption">
                <h3>Garden Rooms</h3>
                <p>Starting at<span class="price">$849</span> a month</p>
                <p><a href="#" class="btn-primaryAction">Learn More</a></p>
              </div><!-- /caption -->
            </div><!-- /thumbnail -->
            </div><!-- /carousel-caption -->
          </div><!-- /container -->
        </div><!-- /item -->
        <div class="item">
          <img class="carouselHeroImage img-responsive" src="assets/img/photos/common-room.jpg" width="500" height="333" alt="Common Room">
          <div class="container">
            <div class="carousel-caption">
            <div class="thumbnail">
              <div class="caption">
                <h3>Garden Rooms</h3>
                <p>Starting at<span class="price">$849</span> a month</p>
                <p><a href="#" class="btn-primaryAction">Learn More</a></p>
              </div><!-- /caption -->
            </div><!-- /thumbnail -->
            </div><!-- /carousel-caption -->
          </div><!-- /container -->
        </div><!-- /item -->
        <div class="item">
          <img class="carouselHeroImage img-responsive" src="assets/img/photos/about-hero.jpg" width="1024" height="394" alt="kitchen">
          <div class="container">
            <div class="carousel-caption">
            <div class="thumbnail">
              <div class="caption">
                <h3>Garden Rooms</h3>
                <p>Starting at<span class="price">$849</span> a month</p>
                <p><a href="#" class="btn-primaryAction">Learn More</a></p>
              </div><!-- /caption -->
            </div><!-- /thumbnail -->
            </div><!-- /carousel-caption -->
          </div><!-- /container -->
        </div><!-- /item -->
      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-next"></span></a> -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="icon-chevron-prev"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="icon-chevron-next"></span></a>
    </div><!-- /.carousel -->
</div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Page Title</h1>
            </div>
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <h3>Sub Header</h3>
                <p>Paragraph text dolor sit amet, consectetur adipiscing elit. Aenean tempor aliquam feugiat. Ut eu nulla quis magna eleifend aliquam. Aenean rutrum velit eros, eget aliquam elit hendrerit sagittis. Etiam at purus a tellus ullamcorper accumsan. Donec dictum sem vel velit pretium, vel posuere libero mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam nec urna eget leo commodo auctor at sed leo.</p>
            </div>
            <div class="col-sm-6">
                <img src="assets/img/photos/triple-room.jpg" width="450" height="300" class="img-responsive featureImg" title="Triple Room" />
            </div>
            <!-- /col-6 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <h3>Sub Header</h3>
                <p>Paragraph text dolor sit amet, consectetur adipiscing elit. Aenean tempor aliquam feugiat. Ut eu nulla quis magna eleifend aliquam. Aenean rutrum velit eros, eget aliquam elit hendrerit sagittis. Etiam at purus a tellus ullamcorper accumsan. Donec dictum sem vel velit pretium, vel posuere libero mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam nec urna eget leo commodo auctor at sed leo.</p>
            </div>
            <div class="col-sm-2">
                <a href="#" class="btn-primaryAction">Primary Action</a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="btn-Regular">regular button</a>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-link" href="#"><i class="icon-refresh"></i> link button</a>
            </div>
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-4">
                <form class="radios">
                    <input type="radio" id="c1" name="cc" />
                    <label for="c1">
                        <span>option 1</span>
                    </label>
                    <input type="radio" id="c2" name="cc" checked="checked" />
                    <label for="c2">
                        <span>option 2</span>
                    </label>
                    <input type="radio" id="c3" name="cc" />
                    <label for="c3">
                        <span>option 3</span>
                    </label>
                </form>
            </div>
            <div class="col-sm-4">
                <form class="checkboxes">
                    <input type="checkbox" id="c4" name="cc" />
                    <label for="c4">
                        <span>option 1</span>
                    </label>
                    <input type="checkbox" id="c5" name="cc" checked="checked" />
                    <label for="c5">
                        <span>option 2</span>
                    </label>
                    <input type="checkbox" id="c6" name="cc" />
                    <label for="c6">
                        <span>option 3</span>
                    </label>
                </form>
            </div>
            <div class="col-sm-4">
                <form class="toggleSwitches">
                    <input type="checkbox" id="c7" name="cc" />
                    <label for="c7">
                        <span>Daily Reports</span>
                    </label>
                    <input type="checkbox" id="c8" name="cc" checked="checked" />
                    <label for="c8">
                        <span>Weekly Reports</span>
                    </label>
                    <input type="checkbox" id="c9" name="cc" />
                    <label for="c9">
                        <span>Monthly Reports</span>
                    </label>
                </form>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /.container -->
    <?php include 'assets/includes/footer.php';?>
</body>

</html>