<?php include('php/secction/header.php') ?>
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="index.php">Home</a> /</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="contact-us-left">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Phone</h3>
                            <p><?php echo $PhoneName.$Phone;?></p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Address</h3>
                            <p><?php echo $Address;?></p>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-usd" aria-hidden="true"></i>
                            <h3>Payment</h3>
                            <p><?php echo $Payment;?></p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>E-mail</h3>
                            <p><?php echo $Mail;?></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-bar50">Send Us Message</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form">
                        <form id="contact-form">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-name" name="name" placeholder="Name*" class="form-control" type="text" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-email" name="email" placeholder="E-mail*" class="form-control" type="text" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-subject" name="subject" placeholder="Subject*" class="form-control" type="text" data-error="Subject field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-phone" name="phone" placeholder="Phone*" class="form-control" type="tel" maxlength="10" minlength="10" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group margin-b-0 text-left">
                                        <input class="sustituir-clase" type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                                        <img src="captcha.php" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group margin-b-0 text-right">
                                        <input name="captcha" class="form-control" placeholder="Code" type="text" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="textarea form-control" rows="4" id="form-message" name="message" placeholder="Message*" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn-send-message">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="google-map-area">
                    <?php echo $GoogleMap;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Page Area End Here -->

<?php include('php/secction/footer.php') ?>
