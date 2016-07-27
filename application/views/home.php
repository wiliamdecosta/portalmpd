<?php $this->load->view('frontend/header'); ?>
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
						data-transform_in="y:[100%];opacity:1;s:500;">Selamat Datang di Website</div>

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
						data-mask_in="x:0px;y:0px;">Dinas Pelayanan Pajak Kota Bandung</a>


						<div class="tp-dottedoverlay tp-opacity-overlay"></div>
				</li>
			</ul>
		</div>
	</div>

	<section class="call-to-action call-to-action-default call-to-action-in-footer mt-none no-top-arrow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-action-content align-left pb-md mb-xl ml-none">
						<h2 class="mb-xs mt-xl">Start creating your new website today with <strong>Porto!</strong></h2>
						<p class="lead mb-xl">Now that you already know that Porto is the best choice for your next project, do not hesitate, purchase now for only $16 and join many happy customers. Get started now.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('frontend/footer'); ?>