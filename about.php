<?php include('php/secction/header.php') ?>
<div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Acerca de Nosotros</h2>
            <ul>
                <li><a href="index.php">Inicio</a> /</li>
                <li>Informacion</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-us-page1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-us-goal">
                    <h2 class="title-bar50"><span class="color">Bienvenidos A</span><br><?php echo $Company;?></h2>
                    <p><?php echo $About[0];?></p>
                    <p><?php echo $About[1];?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	            <img src="img/about/1.jpg" alt="Obten tu mejor opcion en cafe!" loading="lazy" class="">
            </div>
        </div>
    </div>
</div>

<?php include('php/secction/seccion-socialmedia.php') ?>
<?php include('php/secction/footer.php') ?>
