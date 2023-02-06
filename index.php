
    <!----header---->
  <?php
  require_once('utility/main.php');
  include 'view/header_member.php';
  ?>
   <!----Carousel---->
    <div id="home">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-pause="hover">
            <!-- Slide Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Slide Show -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                    <!--<img src="images/3.jpg" alt="..." >-->
                    <div class="bg-overlay"></div>
                    <div class="carousel-caption">
                        <h1>Tommorow is a<br /><span>Bright</span>Future</h1>
                        <p>Aimed at helping companies promote new products and business launches.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" class="d-block w-100" alt="...">
                    <div class="bg-overlay"></div>
                    <div class="carousel-caption">
                        <h1>Tomorrow is a<br /><span>Bright</span>Future</h1>
                        <p>Aimed at helping companies promote new products and business launches.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                    <div class="bg-overlay"></div>
                    <div class="carousel-caption">
                        <h1>Tommorow is a<br /><span>Bright</span> Future</h1>
                        <p>Incline is set of landing and support pages aimed at helping companies.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!----services---->
    <div id="services">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">Our Services</h2>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-anchor"></i>
                        <h3>Some Heading</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, consequatur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-bar-chart"></i>
                        <h3>Some Heading</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, consequatur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <i class="fa fa-diamond"></i>
                        <h3>Some Heading</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, consequatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----testimonials---->

    <div id="testimonials">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-head">Testimonials</h2>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium alias, praesentium dicta unde expedita architecto.</p>
                        <img src="images/bill gates.png" width="100" height="100" alt="">
                        <div>Bill Gates</div>
                        <div>Microsoft</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium alias, praesentium dicta unde expedita architecto.</p>
                        <img src="images/steve jobs.png" width="100" height="100" alt="">
                        <div>Steve Jobs</div>
                        <div>Apple Inc.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----Recent News---->

    <div id="news">
        <div class="container section">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-head">Recent News</h2>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <img src="images/pexels-2.jpg" alt="">
                        <h3><a href="">News Heading Here</a></h3>
                        <div class="post-date">Oct 7, 2020</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, veritatis!</p>
                        <a href="" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <img src="images/pexels-3.jpg" alt="">
                        <h3><a href="">News Heading Here</a></h3>
                        <div class="post-date">Oct 7, 2020</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, veritatis!</p>
                        <a href="" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <img src="images/pexels-5.jpg" alt="">
                        <h3><a href="">News Heading Here</a></h3>
                        <div class="post-date">Oct 7, 2020</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, veritatis!</p>
                        <a href="" class="readmore">Read More</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-post">
                        <img src="images/pexels-6.jpg" alt="">
                        <h3><a href="">News Heading Here</a></h3>
                        <div class="post-date">Oct 7, 2020</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, veritatis!</p>
                        <a href="" class="readmore">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!----Display Page Footer---->
    <?php include 'view/footer.php'; ?>

</body>

</html>