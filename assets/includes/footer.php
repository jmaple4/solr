<div class="tourBlock">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="tour.php" class="btn-primaryAction pull-right">Schedule a Tour</a>
                    <h3>Interested in learning more? Why not take a tour?</h3>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /tourBock -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="assets/img/logo-white.svg" width="167px" height="45px" />
                    <ul class="siteLinks address">
                        <li>875 Post Street
                        </li>
                        <li>San Francisco, CA 94109
                        </li>
                        <li>(415) ###-####
                        </li>
                        <li><a href="mailto:info@solove.us">info@solove.us</a>
                        </li>
                        </ul>
                    <!-- <p>875 Post Street
                        <br />San Francisco, CA 94109
                        <br />(415) ###-####
                        <br /><a href="mailto:info@solove.us">info@solove.us</a>
                    </p> -->
                </div>
                <!-- /col -->
                <div class="col-sm-3">
                    <h5>Connect</h5>
                    <ul class="majorLinks">
                        <li><a href="#"><i class="icon-connect-facebook"></i> <span>Facebook</span></a>
                        </li>
                        <li><a href="#"><i class="icon-connect-yelp"></i> <span>Yelp</span></a>
                        </li>
                        <li><a href="mailto:info@solove.us"><i class="icon-connect-email"></i> <span>Email</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /col -->
                <div class="col-sm-3">
                    <h5>Partners</h5>
                    <ul class="majorLinks">
                        <li><a href="#">Encore Express Hotel</a>
                        </li>
                        <li><a href="#">Music City Rehersal</a>
                        </li>
                        <li><a href="http://www.miracles-course.org" target="_blank">A Course In Miracles</a>
                        </li>
                    </ul>
                </div>
                <!-- /col -->
                <div class="col-sm-3">
                    <h5>Navigate thie site</h5>
                    <ul class="siteLinks">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Amenities</a>
                        </li>
                        <li><a href="#">Rooms</a>
                        </li>
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Location</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                        <li><a href="#">Tour</a>
                        </li>
                        <li><a href="#">Application</a>
                        </li>
                    </ul>
                </div>
                <!-- /col -->
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/holder.js"></script>
        <script>
        $('#myCarousel').carousel();
        //$('.carousel-control.left').click(function() {
        //      $('#myCarousel').carousel('prev');
        //    });
        //    $('.carousel-control.right').click(function() {
        //      $('#myCarousel').carousel('next');
        //    });
            $('#myCarousel').on('slide.bs.carousel', function () {
                  $('.item').removeClass('next left');
            });
        </script>
