<div id="login_session" style="display:none">0</div>
<div class="content-header row">

</div>

<main class="app-content container center-layout mt-2 mb-2">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-content">
				<div class="card-body ">
					<div class="match-height">
						<div class="col-12 row content-center content-account">
							<div class="col-md-12 col-xl-12">
								<div style="text-align:left" class="pb-1">
									<h1 class="form-account-title"><b>Selamat Datang</b></h1>
								</div>

								<div class="alert alert-message alert-error-red fade show" style="display: none;">
									<div><i class="las la-exclamation-circle mobile-hidden-phone"></i> <span id="alert-message-text"></span></div>
									<button type="button" class="close mobile-hidden-phone" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>


								<form action="<?= base_url('auth') ?>" method="POST" id="">
									<input type="hidden" name="racpzCXgm4TtLGedQCNcA5COYISS8AsN" value="2e0e0e531a189e54f9d3eb6443d2c3b3">
									<!-- <input type="hidden" name="backto" value=""> -->

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text form-icon"><i class="la la-envelope"></i></span>
											</div>
											<input type="text" class="form-control required-form" name="email" placeholder="Email" id="email">
										</div>
										<span id="email_error" class="font-danger"></span>
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="input-group wrapper-password">
											<div class="input-group-prepend">
												<span class="input-group-text form-icon"><i class="la la-unlock"></i></span>
											</div>
											<input type="password" class="form-control required-form" autocomplete="off" placeholder="Password" name="password" id="password" style="border-right: none;">
											<div class="input-group-append">
												<span class="input-group-text form-icon" style="width: 40px;background: white;">
													<span id="togglePassword" class="la la-eye-slash la-eye toggler-ico"></span>
												</span>
											</div>
										</div>
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										<span id="password_error" class="font-danger"></span>
									</div>

									<div style="text-align:center">
										<button class="btn btn-santara-red btn-account submit-form" id="btnLogin" type="submit" style="width:100%">
											<span id="submit_text">Masuk</span>
										</button>
									</div>
								</form>

								<div class="row mt-1 account-footer">
									<div class="col-12" style="text-align:right">
										Belum punya akun? <a href="<?= base_url('auth/registration') ?>">Daftar</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" name="tknName" value="racpzCXgm4TtLGedQCNcA5COYISS8AsN">
			<input type="hidden" name="ckName" value="uuSO8mmXYU7n03tcAyAI6q2GXhkv5jwp">
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js" integrity="sha512-nOQuvD9nKirvxDdvQ9OMqe2dgapbPB7vYAMrzJihw5m+aNcf0dX53m6YxM4LgA9u8e9eg9QX+/+mPu8kCNpV2A==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/aes.min.js" integrity="sha512-eqbQu9UN8zs1GXYopZmnTFFtJxpZ03FHaBMoU3dwoKirgGRss9diYqVpecUgtqW2YRFkIVgkycGQV852cD46+w==" crossorigin="anonymous"></script>
		<script src="https://santara.co.id/assets/js/guest/login.js?v=5.8.0"></script>
	</div>
</main>

<!-- WHATSAPP BUTTON -->
