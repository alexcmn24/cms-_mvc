<?php require APPROOT . '/views/inc/header.php'; ?>
	<section id="regst_sect">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body bg-light mt-5">
				<h2>Napravite Nalog</h2>
				<p>Molimo vas popunite polja za registraciju.</p>
				<form action="<?php echo URLROOT; ?>/users/register" method="post">
					<div class="form-group">
						<label for="name">Ime: <sup>*</sup></label>
						<input class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" name="name" type="text" value="<?php echo $data['name']; ?>">
						<span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
					</div>
					<div class="form-group">
						<label for="username">Username: <sup>*</sup></label>
						<input class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" name="username" type="text" value="<?php echo $data['username']; ?>">
						<span class="invalid-feedback"><?php echo $data['username_err'] ?></span>
					</div>
					<div class="form-group">
						<label for="password">Password: <sup>*</sup></label>
						<input class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" name="password" type="password" value="<?php echo $data['password']; ?>">
						<span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
					</div>
					<div class="form-group">
						<label for="confirm_password">Potvrdi Password: <sup>*</sup></label>
						<input class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" name="confirm_password" type="password" value="<?php echo $data['confirm_password']; ?>">
						<span class="invalid-feedback"><?php echo $data['confirm_password_err'] ?></span>
					</div>

					<div class="row">
						<div class="col">
							<input type="submit" value="Register" class="btn-3 btn3">
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Posjedujete Nalog? Login</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
