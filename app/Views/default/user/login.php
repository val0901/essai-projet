<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('main_content') ?>

<?php  $post = [];
$errors = [];
$formValid = false;	if(!empty($_POST)){
	$post = array_map('trim', array_map('strip_tags', $_POST)); 

	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
		$errors[] = 'Votre email est invalide.';
	}

	if(!emailExist($post['email'], $bdd)){
		$errors[] = 'Le couple identifiant/mot de passe est incorrect';
	}

	if(empty($post['password'])){
		$errors[] = 'Le mot de passe est incomplet.';
	}

	if(count($errors) === 0){
		$select = $bdd->prepare('SELECT * FROM members WHERE email = :email');
		$select->bindValue(':email', $post['email']);
		if($select->execute()){
			$user = $select->fetch(PDO::FETCH_ASSOC); // On récupère l'utilisateur pour pouvoir comparer son mot de passe et le connecter si besoin


			if(password_verify($post['password'], $user['password'])){
				// la variable passe à vrai
				$formValid = true;
				$_SESSION['member'] = $user;

				 header('Location: add_article.php');
                die;
			}
			else {
				$errors[] = 'Le couple identifiant/mot de passe est incorrect';

			}

		// fin execution requête 
		}

	// fin compte erreur
	}

// fin verif°
}?> <form class="form-horizontal" method="POST">
	<fieldset>

	<legend>Se connecter</legend>

	<?php if(!empty($errors)): ?>
			<div class="alert alert-danger">
				<p><?=implode('<br>', $errors);?></p>
			</div>
		<?php endif; ?>

	<div class="form-group">
	  <label class="col-md-4 control-label" for="email">Email </label>  
	  <div class="col-md-4">
	  <input id="email" name="email" type="email" placeholder="Votre email" class="form-control input-md"> 
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label" for="password">Mot de passe</label>
	  <div class="col-md-4">
	    <input id="passsword" name="password" type="password" placeholder="Votre mot de passe" class="form-control input-md">
	  </div>
	</div>

	<div class="form-group">
		<div class="col-md-4 col-md-offset-4">
			<input type="submit" name="submit" value="Se connecter" class="btn btn-info btn-block">
		</div>
	</div>




	</fieldset>
	</form>
<?php $this->stop('main_content') ?>











	