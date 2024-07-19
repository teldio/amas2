<?php include ('comp/cab.php'); ?>
    <!-- Hero Area -->
    <div class="hero-area">
    	<div class="page-banner parallax" style="background-image:url(http://placehold.it/1280x400&amp;text=IMAGE+PLACEHOLDER);">
        	<div class="container">
            	<div class="page-banner-text">
        			<h1 class="block-title">AMAS-ADMIN</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
    	<div class="content">
        	<div class="container">
                
                    <div class="">
                    	<div class="well widget widget_volunteer_form">
                        	<h3>Adicione Uma Notícia</h3>
                            <form action="process_blog.php" method="post" enctype="multipart/form-data">
                            	<label>Titulo</label>
                            	<input type="text" name="titulo" class="form-control">
                            	<label>Autor</label>
                            	<input type="text" name="autor" class="form-control">
                            	<label>Categoria</label>
                            	<input type="text" name="categoria" class="form-control">
                                <label>Imagem</label>
                            	<input type="file" name="banner" class="form-control">
                                <div >
                                    <div class="form-group">
                                        <textarea cols="6" rows="8" id="comments" name="descricao" accept="image/*" class="form-control input-lg"></textarea>
                                    </div>
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Enviar!">
                              	</div>
                                
                                <div class="spacer-10"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Site Footer -->
    <?php include ('comp/rod.php'); ?>