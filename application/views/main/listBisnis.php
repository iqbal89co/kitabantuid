<main class="app-content center-layout">
	<div class="content-wrapper">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/guest/content/list-bisnisf1a2.css?v=5.8.0">

		<div class="container-bisnis">
			<div class="title">
				<h3>Pilih Bisnis yang Bagus-bagus, sebelum kehabisan</h3>
			</div>

			<hr style="margin-left: 0.8rem;margin-right: 0.8rem;" />

			<div class="search-bisnis">
				<div class="row mb-2">
					<div class="input-group col-md-3 col-sm-12 search">
						<input class="form-control form-input-search border-right-0 alpha-space-only" type="search" placeholder="Cari" name="search" id="search">
						<span class="input-group-append">
							<div class="input-group-text form-input-search" id="searchButton" style="padding: 0.5rem 1rem; cursor: pointer;">
								<i class="la la-search"></i>
							</div>
						</span>
					</div>

					<div class="input-group col-md-5 col-sm-12 range">
						<div class="input-group-prepend">
							<span class="input-group-text form-input-search">Rp</span>
						</div>
						<input class="form-control form-input-search number-only border-left-0 border-right-0" type="search" placeholder="Minimal" name="minimal" id="minimal">

						<div class="input-group-prepend">
							<span class="input-group-text form-input-search">Rp</span>
						</div>
						<input class="form-control form-input-search number-only border-left-0" type="search" placeholder="Maksimal" name="maksimal" id="maksimal">

					</div>

					<div class="input-group col-md-2 col-sm-12 category">
						<select name="category" id="category" class="form-control sort-bisnis form-input-search">
							<option value="">Kategori</option>
							<option value="Penyediaan Akomodasi dan Makan Minum">
								Penyediaan Akomodasi dan Makan Minum </option>
							<option value="Peternakan">
								Peternakan </option>
							<option value="Pertanian, Perburuan dan Kehutanan">
								Pertanian, Perburuan dan Kehutanan </option>
							<option value="Perantara Keuangan">
								Perantara Keuangan </option>
							<option value="Jasa Kesehatan dan Kegiatan Sosial">
								Jasa Kesehatan dan Kegiatan Sosial </option>
							<option value="Perikanan">
								Perikanan </option>
							<option value="Perdagangan Besar dan Eceran">
								Perdagangan Besar dan Eceran </option>
							<option value="Industri Pengolahan">
								Industri Pengolahan </option>
							<option value="Konstruksi">
								Konstruksi </option>
							<option value="Transportasi, Pergudangan dan Komunikasi">
								Transportasi, Pergudangan dan Komunikasi </option>
							<option value="Pertambangan dan Penggalian Pertambangan">
								Pertambangan dan Penggalian Pertambangan </option>
							<option value="Listrik, Air dan Gas">
								Listrik, Air dan Gas </option>
							<option value="Real Estate">
								Real Estate </option>
							<option value="Usaha Persewaan dan Jasa Perusahaan">
								Usaha Persewaan dan Jasa Perusahaan </option>
							<option value="Jasa Pendidikan">
								Jasa Pendidikan </option>
							<option value="Jasa Kemasyarakatan dan Perorangan lainnya">
								Jasa Kemasyarakatan dan Perorangan lainnya </option>
						</select>
					</div>

					<div class="input-group col-md-2 col-sm-12 sort">
						<select name="sort" id="sort" class="form-control sort-bisnis form-input-search">
							<option value="">Urutkan</option>
							<option value="true">Terbaru</option>
							<option value="false">Terlama</option>
							<option value="terpenuhi">Terpenuhi</option>
							<option value="belum terpenuhi">Belum Terpenuhi</option>
						</select>
					</div>
				</div>
				<hr class="mb-1" />
			</div>


			<div id="empty-list-bisnis" class="row empty-loader" style="display: none;">
				Opps, Bisnis yang anda cari tidak ada. <br />
				<button class="btn" id="button-read-more" onclick="loadMore()">
					<i class="la la-briefcase"></i> <span style="position: relative; top: -2px; left: 5px;">Tampilkan Semua Bisnis</span>
				</button>
			</div>

			<div id="list-bisnis" class="row list-bisnis">
				<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>assets/css/guest/home/bisnis.css?v=5.8.0">

				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/SAGA_picture1.png" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/SAGA_picture1.png" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Surya Abadi">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Perdagangan Besar dan Eceran</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Surya Abadi Garmindo </h4>
												<h6 class="list-bisnis-title-company">Surya Abadi</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.200.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.200.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img ls-is-cached lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/HMDL_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/HMDL_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Hamada Logistik">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Transportasi, Pergudangan dan Komunikasi</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Hamada Logistik</h4>
												<h6 class="list-bisnis-title-company">Hamada Logistik</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img ls-is-cached lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/MRLN_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/MRLN_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Marlin Brothers">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Peternakan</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Marlin Brothers Indonesia</h4>
												<h6 class="list-bisnis-title-company">Marlin Brothers</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.800.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>12 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.800.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>12 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img ls-is-cached lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/BJUT_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/BJUT_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Baja Utama Tegal">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Perdagangan Besar dan Eceran</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Baja Utama Makmur</h4>
												<h6 class="list-bisnis-title-company">Baja Utama Tegal</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/APGI_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/APGI_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="APG Farm">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Peternakan</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Anugrah Peternak Gemilang Indonesia</h4>
												<h6 class="list-bisnis-title-company">APG Farm</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/LBRA_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/LBRA_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Libra Online Store Group">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Perdagangan Besar dan Eceran</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Libra Corporindo Investama</h4>
												<h6 class="list-bisnis-title-company">Libra Online Store Group</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 3.000.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/SDUR_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/SDUR_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Syarif Durian">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Perdagangan Besar dan Eceran</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Syarif Durian Indonesia</h4>
												<h6 class="list-bisnis-title-company">Syarif Durian</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.500.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 2.500.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-lg-3 col-6 col-bisnis-item">
					<div class="card-bisnis-item text-white">
						<a href="<?= base_url('site/detailBisnis/') ?>">
							<div class="card-content">


								<img class="list-bisnis-img lazyloaded" src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/GUPO_picture1.jpg" data-src="<?= base_url('assets/') ?>asset-santara/santara.co.id/token/GUPO_picture1.jpg" onerror="this.onerror=null;this.src='<?= base_url('assets/') ?>asset-santara/santara.co.id/images/error/no-image.png';" alt="Gupo Petshop">
								<div class="card-body card-content-bisnis">
									<div class="media d-flex">
										<div class="media-body media-body-bisnis text-left">
											<div class="list-bisnis-title-main">
												<h6 class="list-bisnis-title-company" style="margin-bottom: 5px">Perdagangan Besar dan Eceran</h6>
												<h4 class="list-bisnis-title" style="margin-bottom: 5px">PT Gupo Jaya Petindo</h4>
												<h6 class="list-bisnis-title-company">Gupo Petshop</h6>
											</div>


											<h6 class="harga-mulai-home" style="margin-top: 2em">Mulai dari
												<span><b>Rp 0</b></span>
											</h6>
											<hr>


											<div class="progress mb-0" style="height: 14px;">
												<div class="progress-bar bg-gradient-x-success " role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													<b style="color: blue;">100 %</b>
												</div>
											</div>

											<h6 class="bisnis-diff">Sisa waktu
												<span class="red-santara" ?="">
													0 Hari </span>
											</h6>


											<h6 class="d-none d-lg-block">
												<table width="100%" style="margin-top: 3em">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
															<td class="item-footer" style="float: right;"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 1.700.000.000</b></td>
															<td class="item-footer" style="float: right;"><b>6 Bulan</b></td>
														</tr>
													</tbody>
												</table>

											</h6>
											<h6 class="d-lg-none">
												<table width="100%">
													<tbody>
														<tr>
															<td class="item-footer">Total Pendanaan</td>
														</tr>
														<tr>
															<td class="item-footer"><b>Rp 1.700.000.000</b></td>
														</tr>
														<tr class="row-period">
															<td class="item-footer"> Periode Dividen</td>
														</tr>
														<tr>
															<td class="item-footer"><b>6 Bulan</b></td>
														</tr>

													</tbody>
												</table>
											</h6>

										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div id="spinner-item" class="spinner-item" style="display:none">
				<div class="rect1"></div>
				<div class="rect2"></div>
				<div class="rect3"></div>
				<div class="rect4"></div>
				<div class="rect5"></div>
			</div>

			<div id="load-more" class="row text-center" style="display:none">
				<div class="col-12 col-sm-12">
					<button class="btn" id="button-read-more" onclick="loadMore()">
						<i class="la la-angle-double-down"></i> <span style="position: relative; top: -2px; left: 5px;">Lihat Lebih Banyak</span>
					</button>
				</div>
			</div>
		</div>


		<script src="<?= base_url('assets/') ?>assets/js/guest/content/list-bisnisf1a2.js?v=5.8.0"></script>
	</div>
</main>

<!-- WHATSAPP BUTTON -->
