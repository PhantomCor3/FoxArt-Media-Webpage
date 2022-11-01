<?php include('php/secction/header.php') ?>
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Galeria</h2>
            <ul>
                <li><a href="index.php">Inicio</a> /</li>
                <li>Galeria</li>
            </ul>
        </div>
    </div>
</div>

<div class="project-gallery4-area">
    <div class="container">
        <div class="row">
            <?php for ($b=1; $b <=7; $b++) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project4-box">
                        <div class="project4-content-holder">
                            <div class="project4-content">
                                <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                    <p class="gallery-details"><?php echo $Company;?></p>
                                </a>
                            </div>
                            <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                <i aria-hidden="true" class="fa fa-search text-white"></i>
                            </a>
                        </div>
                        <div class="project4-img-holder">
                            <img class="img-responsive" src="img/gallery/full/<?php echo $b;?>.jpg" alt="Our Gallery" loading="lazy">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>        
    </div>
</div>


<?php include('php/secction/seccion-bg1.php') ?>
<?php include('php/secction/seccion-bg2.php') ?>
<?php include('php/secction/footer.php') ?>