
<?php $this->layout('layout', ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
	<nav class="navbar navbar-default mm-margin">
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
              <ul class="nav navbar-nav">
                  <li role="presentation" class="active"><a href="#">Home</a></li>
                  <li role="presentation"><a href="<?=$this->url('default_page1')?>">Page 1</a></li>
                  <li role="presentation"><a href="<?=$this->url('user_login')?>">CONNEXION</a></li>
                  <li role="presentation"><a href="">Profil</a></li>
              </ul>
            </div>
        	
    	</div>
    </div>
</nav>

<div class="jumbotron">
<div class="container">    
    
      <h1>Ma page d'accueil</h1>
      <p>Page d'accueil créee avec le framework
      </p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
</div>

<?php $this->stop('main_content') ?>

</body>
</html>
