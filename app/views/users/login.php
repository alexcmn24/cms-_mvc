<section id="lgn_sect">
	<div class="row">
		<div class="col-md-6 mx-auto mt-2">
			<div class="card card-body bg-light mt-4">
				<?php flash('register_success'); ?>
				<p class="mx-auto">Unesite podatke za prijavu</p>
				<form action="<?php echo URLROOT; ?>/users/login" method="post">
					<div class="form-group">
						<input class="form-control form-control-lg" name="username" type="text" value="<?php echo $data['username']; ?>" placeholder="Korisničko Ime">
					</div>
					<div class="form-group">
						<input class="form-control form-control-lg" name="password" type="password" value="<?php echo $data['password']; ?>" placeholder="Lozinka">
					</div>
					
					<div class="row">
						<div class="col">
							<input class="btn-3 btn3" type="submit" value="Login">
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Pogrešno ste unijeli korisničko ime ili lozinku! Molimo vas da pokušate ponovo.
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn-3 btn3" data-dismiss="modal">U redu</button>
							      </div>
							    </div>
							  </div>
							</div>
							
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block">Kreiraj novi nalog</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>

<?php if((!empty($data['password_err'])) || (!empty($data['username_err']))): ?>
	<script>$('#exampleModalCenter').modal('show')</script>
<?php endif; ?>
