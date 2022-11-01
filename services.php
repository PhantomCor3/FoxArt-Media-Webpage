<?php include('php/secction/header.php') ?>
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Nuestros Productos</h2>
            <ul>
                <li><a href="index.php">Inicio</a> /</li>
                <li>Servicios</li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Page 1 Area Start Here -->
<div class="service-page1-area">
    <div class="container">
        <?php for ($i=1; $i <=4; $i++) {?>
            <div class="row"><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">               
                    <div class="service-box">                   
                        <div class="service-content-holder">
                            <h3 class="title-bar50"><?php echo $SN[$i];?></h3>
                            <p><?php echo $SD[$i];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="img/service/<?php echo $i?>.jpg" alt="Our Services" loading="lazy" class="img-thumbnail">
                </div>
            </div><br><hr>
        <?php }?>
       
    </div>
</div>
<!-- Service Page 1 Area End Here -->

<?php include('php/secction/seccion-socialmedia.php') ?>
<?php include('php/secction/footer.php') ?>
