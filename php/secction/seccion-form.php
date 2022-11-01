<div class="ask-question-area">
    <div class="container">
        <div class="row">           
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="ask-question-right">
                    <h2 class="title-bar50">Cotizaciones</h2>
                    <form id="contact-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-name" name="Nombre" placeholder="Nombre*" class="form-control" type="text" data-error="el nombre es necesario" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-email" name="correo" placeholder="Correo Electronico*" class="form-control" type="text" data-error="El correo Electronico es Necesario" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="form-subject" name="Descripcion" placeholder="Descripcion*" class="form-control" type="text" data-error="Descripcion es necesaria" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                       <input id="form-phone" name="telefono" placeholder="telefono*" class="form-control" type="tel" maxlength="12" minlength="10" data-error="Telefono es necesario" required>
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
                                        <input name="captcha" class="form-control" placeholder="Codigo" type="text" data-error="Codigo captcha es necesario" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="textarea form-control" rows="4" id="form-message" name="Mensaje" placeholder="Mensaje*" data-error="El campo de mensaje es necesario" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="form-group margin-b-0 text-right">
                                        <button class="btn-submit" type="submit">Enviar </button>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class='form-response'></div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="ask-question-left">
                    <h2 class="title-bar50">Obten Ya <span class="color"> Nuestro Cafe</span></h2><br>
                    <p><?php echo $Home[0];?></p><br>
                    <h2 class="text-black"><i class="fa fa-building h1 color"></i> <?php echo $Services;?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
