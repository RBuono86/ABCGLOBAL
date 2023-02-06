        <!----Company/Contact Info---->

        <div class="info">
            <div class="container section">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info-widget">
                            <h4>About Company</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque unde voluptatum at aperiam, iusto excepturi!</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, quidem?</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info-widget">
                            <h4>Useful Links</h4>
                            <ul class="latest-news">
                                <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                                <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                                <li><a href="">Lorem ipsum dolor sit amet consectetur.</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="info-widget">
                            <h4>Contact Me</h4>
                            <address>
                            <b>Saad Muavia, Inc.</b><br>
                            555 Hill Road, Raymond Street<br>
                            New York, USA 133001<br>
                            P : (123) 456-7890
                            <p>
                                <a href="contact_form.php">Contact Us</a>
                            </p>
                        </address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info-widget">
                            <h4>Newsletter</h4>
                            <form action="<?php echo $app_path; ?>subscribe.php" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" maxlength="35" size="35" name="subemail" required="vital" placeholder="me@example.com" class="form-control">
                                </div>
                                <button class="btn btn-warning btn-block"><span class="fa fa-envelope"></span> Subscribe </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!----Copyright & Social Links---->
        <div id="crsl">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    &copy; <?php echo date("Y"); ?> - ABC Global Consulting Inc.
                    </div>
                    <div class="col-md-6">
                        <ul id="social-icons" class="float-md-right">
                            <li>
                                <a href="" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-linkedin"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-instagram"></a>
                            </li>
                            <li>
                                <a href="" class="fa fa-youtube-play"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>     
</html>         