        
        <section>
            <div class="container">
                <div class="row">
                	<div class="col-lg-5 mx-auto">
<?php if (!empty($params['errors'])) :?>
                        <h4 class="text-danger">Oops! Corrija os erros para prosseguir!</h4>
                        <ul>
                            <li><?=implode('</li><li>',$params['errors']);?></li>
                        </ul>
                        <hr>
<?php elseif(isset($params['input'])):?>
                        <h4 class="text-success">Recebemos seus dados!</h4>
                        <ul>
                            <li><?=implode('</li><li>', $params['input']);?></li>
                        </ul>
                        <hr>
<?php endif;?>
                        <h2>Preencha o Formulário Abaixo</h2>
                        <hr>
                        <form method="post">
                        	<div class="form-group row">
	                        	<label class="col-sm-3 col-form-label">Nome:</label>
	                        	<input class="col-sm-9 form-control" type="text" name="required[name]">
                        	</div>
                        	<div class="form-group row">
	                        	<label class="col-sm-3 col-form-label">Email:</label>
	                        	<input class="col-sm-9 form-control" type="text" name="required[email]">
                        	</div>
                        	<div class="form-group row">
	                        	<label class="col-sm-3 col-form-label">Mensagem:</label>
    							<textarea class="col-sm-9 form-control form-control" id="exampleFormControlTextarea1" rows="3" name="required[message]"></textarea>
                        	</div>
                        	<button class="btn btn-primary" type="submit">Enviar</button>
                        </form>
                    </div>
                    <div class="col-lg-3 mx-auto">
                        <h2>Contact us</h2>
                        <p class="lead"><?= ADM_NAME;?></p>
                        <p class="lead"><?= ADM_EMAIL;?></p>
                    </div>
                </div>
            </div>
        </section>