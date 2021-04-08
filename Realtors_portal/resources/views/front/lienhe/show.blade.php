@extends('front.layout.master')

@section('title', 'TinTuc')

@section('body')

	<section>
		<div class="pub-banner">
			<img src="front/img/pub-banner.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/img/pub-banner.jpg" alt="pub-banner" class="fullwidth">
			<h1 class="tit-banner">LIÊN HỆ</h1>
		</div>
		<div class="info-contact">
			<div class="clear40"></div>
			<div class="container">
				<div class="editer center">
					<p class="bold text-uppercase">CÔNG TY TNHH MỘT THÀNH VIÊN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN THANH HÂN</p>
					<div class="clear20"></div>
					<p>Tầng 2 (lầu 1) 670 – 672 Đường 3/2, phường 14, Quận 10, TP HCM</p><br>
					<p>Điện thoại:  0938.333.768</p><br>
				</div>
			</div>
			<div class="clear40"></div>
		</div>
		<div id="contact_map" class="map map-container" style="position: relative; overflow: hidden;">
	  		<iframe src="fi000001.1!3m3!1m2!1s0x31752f2d20852f4d-0x6a488979488ade4!2zmjgyie5hbsbl4buzieto4bufasboz2jeqwesifboxrdhu51uzya4lcbrdeg6rw4gmywgsog7kybdamotie1pbmgsifzp4buhdcboyw0!5e0!3m2!1svi!2s!4v1532076257616" tppabs="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.29342309204!2d106.68298331538371!3d10.788823992313143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2d20852f4d%3A0x6a488979488ade4!2zMjgyIE5hbSBL4buzIEto4bufaSBOZ2jEqWEsIFBoxrDhu51uZyA4LCBRdeG6rW4gMywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1532076257616" height="600" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
      	</div>
      	<div class="form-contact">
      		<div class="clear40"></div>
      		<div class="container">
				<form>
					<h3 class="nomargin text-uppercase bold">Inquiry Form</h3>
					<div class="clear40"></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label class="control-label" for="name">Name *</label>
								<input id="name" name="name" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label class="control-label" for="email">Email *</label>
								<input id="email" name="email" type="email" class="form-control">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label class="control-label" for="phone">Telephone *</label>
								<input id="phone" name="phone" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label class="control-label" for="co-name">Company Name *</label>
								<input id="co-name" name="co-name" type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label class="control-label" for="subject">Subject</label>
								<input id="subject" name="subject" type="text" class="form-control">
								<!-- <textarea id="subject" name="subject" class="form-control" rows="2"></textarea> -->
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label class="control-label" for="subject">Select Product*</label>
								<div class="clear20"></div>
								<div class="form-check">
									<label>
										<input type="radio" name="radio"> <span class="label-text">Robotic</span>
									</label>
								</div>
								<div class="form-check">
									<label>
										<input type="radio" name="radio"> <span class="label-text">Drives &amp; Motion Control</span>
									</label>
								</div>
								<div class="form-check">
									<label>
										<input type="radio" name="radio"> <span class="label-text">System Engineering</span>
									</label>
								</div>
								<div class="form-check">
									<label>
										<input type="radio" name="radio"> <span class="label-text">Services</span>
									</label>
								</div>
								<div class="form-check">
									<label>
										<input type="radio" name="radio"> <span class="label-text">Training</span>
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label class="control-label" for="subject">Message</label>
								<textarea id="subject" name="subject" class="form-control" rows="5"></textarea>
							</div>
						</div>
					</div>
					<button type="submit" class="btn-contact">SUBMIT</button>
				</form>
			</div>
			<div class="clear40"></div>
		</div>
	</section>

@endsection
