<?php $this->load->view('frontend/header'); ?>
<style>
.boxhead a {
    color: #FFFFFF;
    text-decoration: none;
}
</style>
	<div class="slider-container rev_slider_wrapper" style="height: 400px;">
		<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"delay": 9000, "gridwidth": 800, "gridheight": 400}'>
			<ul>
				<li data-transition="fade">

					<img src="slider/image-3.jpg"
						alt=""
						data-bgposition="center center"
						data-bgfit="cover"
						data-bgrepeat="no-repeat"
						class="rev-slidebg">

					<div class="tp-caption bottom-label"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="5"
						data-start="2000"
						style="z-index: 5"
						data-transform_in="y:[100%];opacity:1;s:500;">Selamat Datang di Website Portal</div>

					<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
						data-hash
						data-hash-offset="85"
						href="#"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="80"
						data-start="2200"
						data-whitespace="nowrap"
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:1;s:500;"
						style="z-index: 5"
						data-mask_in="x:0px;y:0px;">Dinas Pelayanan Pajak Kota Bandung

					</a>


						<div class="tp-dottedoverlay tp-opacity-overlay"></div>
				</li>
			</ul>
		</div>
	</div>

	<section class="call-to-action call-to-action-default call-to-action-in-footer mt-none no-top-arrow">
		<div class="container">
			<div class="featured-boxes featured-boxes-flat">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=hotel'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-star"></i>
										<h1>Hotel</h1>
										<p>Peraturan Walikota Nomor 386 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=restoran'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-coffee"></i>
										<h1>Restoran</h1>
										<p>Peraturan Walikota Nomor 387 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=hiburan'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-television"></i>
										<h1>Hiburan</h1>
										<p>Peraturan Walikota Nomor 388 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=reklame'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-certificate"></i>
										<h1>Reklame</h1>
										<p>Peraturan Walikota Nomor 389 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=penjal'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-lightbulb-o"></i>
										<h1>Penerangan Jalan</h1>
										<p>Peraturan Walikota Nomor 390 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=parkir'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-map-signs"></i>
										<h1>Parkir</h1>
										<p>Peraturan Walikota Nomor 391 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=pat'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-tint"></i>
										<h1>Pajak Air Tanah</h1>
										<p>Peraturan Walikota Nomor 392 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=bphatb'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">									<div class="box-content">
										<i class="icon-featured fa fa-building"></i>
										<h1>Bea Perolehan Hak Atas Tanah dan Bangunan</h1>
										<p>Peraturan Walikota Nomor 393 tahun 2012</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="boxhead">
							<a href="<?php echo base_url().'gate?type=pbb'?>">
								<div class="featured-box featured-box-tertiary featured-box-effect-5" style="height: 203px;">
									<div class="box-content">
										<i class="icon-featured fa fa-globe"></i>
										<h1>Pajak Bumi dan Bangunan</h1>
										<p>...</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
		</div>
	</section>

<?php $this->load->view('frontend/footer'); ?>