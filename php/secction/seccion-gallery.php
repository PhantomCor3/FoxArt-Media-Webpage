<div class="our-projects1-area">
    <div class="container">
        <h2 class="title">Galería de nuestros productos:</h2><br><br>
    </div>
    <div class="container">
        <div class="row">
            <?php for ($b=1; $b <=6; $b++) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project4-box">
                        <div class="project4-content-holder">
                            <div class="project4-content">
                                <p class="gallery-details"><?php echo $Company;?></p>
                            </div>
                            <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup"><i aria-hidden="true" class="fa fa-search text-white"></i></a>
                        </div>
                        <div class="project4-img-holder">
                            <img class="img-responsive" src="img/gallery/min/<?php echo $b;?>.jpg" alt="Our Gallery" loading="lazy">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <a class="btn-read-more-h-b" href="gallery.php">Mostrar mas</a>
        </div>
    </div>
</div>
