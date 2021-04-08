@extends('front.layout.master')

@section('title', 'Home')

@section('body')
	<section>
		<div class="main-slider">
			<div class="slider-wrapper">
                <div id="mainSlider" class="nivoSlider">
                    <img src="front/img/banner1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/banner1.jpg" alt="banner1" class="fullwidth" />
                    <img src="front/img/banner2.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/banner2.jpg" alt="banner2" class="fullwidth"/>
                </div>
            </div>
            <div class="box-search container">
            	<div class="row flex-n">
            		<div class="col-md-6 col-sm-4 bdright">
            			<div class="ct-left-box">
            				<form>
	            				<p class="clwhite">Bạn có thể tìm theo dự án</p>
	            				<div class="clear20"></div>
	            				<input type="text" name="" class="form-control">
	            				<div class="clear20"></div>
	            				<button type="submit" class="sm-box-search"><i class="fas fa-search"></i> Tìm kiếm</button>
            				</form>
            			</div>
            		</div>
            		<div class="col-md-6 col-sm-8">
            			<div class="ct-right-box">
            				<form>
            					<p class="clwhite">Hoặc lọc nhanh theo nhu cầu của bạn</p>
            					<div class="clear20"></div>
            					<div class="row flex-bw">
            						<div class="solu">
            							<p class="clwhite">Khu vực</p>
            						</div>
            						<div class="col-md-6 col-sm-6 col-xs-6 fwmb">
            							<select class="selectpicker fullwidthselect">
											<option>Hà Nội</option>
											<option>TP Hồ Chí Minh</option>
											<option>Đà Nẵng</option>
										</select>
            						</div>
            						<div class="col-md-6 col-sm-6 col-xs-6 fwmb">
            							<select class="selectpicker fullwidthselect" title="Quận/huyện">
											<option>Quận 1</option>
											<option>Quận 2</option>
											<option>Quận 3</option>
										</select>
            						</div>
            					</div>
            					<div class="clear20 hide480"></div>
            					<div class="row flex-bw">
            						<div class="solu">
            							<p class="clwhite">Khoảng giá</p>
            						</div>
            						<div class="col-md-6 col-sm-6 col-xs-6 fwmb">
            							<div class="join-ip">
            								<input type="text" name="" class="form-control">
            								<span>Tỷ</span>
            							</div>
            						</div>
            						<div class="col-md-6 col-sm-6 col-xs-6 fwmb">
            							<div class="join-ip">
            								<input type="text" name="" class="form-control">
            								<span>Tỷ</span>
            							</div>
            						</div>
            					</div>
            					<div class="clear20 hide480"></div>
            					<div class="row flex-bw">
            						<div class="solu hide480"></div>
            						<div class="col-md-12 col-sm-12 col-xs-12">
            							<button type="submit" class="filter-kq"><i class="fas fa-indent" style="margin-right: 7px;"></i> Lọc kết quả</button>
            						</div>
            					</div>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
		</div>
		<div class="main-about-us">
			<div class="clear40"></div>
			<div class="container">
				<div class="center">
					<h3 class="tit-pub">Về chúng tôi</h3>
					<div class="clear20"></div>
					<div class="ani-scale">
						<p class="bold">Kính thưa Quý khách hàng, Quý đối tác và toàn thể nhân viên!</p>
						<div class="clear20"></div>
						<p>Realtors Portal được khởi dựng từ khát vọng về một tập đoàn đa năng, chuyên nghiệp, với mục tiêu khẳng định vị thế và thương hiệu trên thị trường bất động sản ở khu vực Bắc Bộ nói chung và Hà Nội nói riêng.</p>
						<div class="clear20"></div>
						<p>Với nguồn tài chính vững chắc, hướng quản trị phù hợp, cùng đội ngũ nhân viên chuyên nghiệp, sau gần 5 năm hoạt động, chúng tôi đang dần khẳng định được vị thế và vai trò của mình đối với kinh tế - xã hội khu vực, đồng thời thể hiện được đẳng cấp thương hiệu trên thị trường...</p>
						<div class="clear40"></div>
						<div><a href="gioi-thieu.html" tppabs="http://demo02.123corp.com.vn/thanhhan/gioi-thieu.html" class="view-more">Xem thêm</a></div>
					</div>
				</div>
				<div class="clear40"></div>
				<div class="main-count">
					   	<div class="container">
					      	<div class="row flex-wrap clearfix">
				         	<div class="col-md-3 col-sm-6 col-xs-6 fwmb center">
					            <p class="icon-count"><img src="front/img/count1.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/count1.png" alt="count1"></p>
					            <span class="counter">58</span>
					            <p class="title-count">TỔNG SỐ DỰ ÁN</p>
					            <div class="clear20 show991"></div>
				         	</div>
				         	<div class="col-md-3 col-sm-6 col-xs-6 fwmb center">
					            <p class="icon-count"><img src="front/img/count2.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/count2.png" alt="count2"></p>
					            <span class="counter">12</span>
					            <p class="title-count">TỔNG SỐ CHI NHÁNH</p>
					            <div class="clear20 show991"></div>
				         	</div>
				         	<div class="col-md-3 col-sm-6 col-xs-6 fwmb center">
					            <p class="icon-count"><img src="front/img/count3.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/count3.png" alt="count3"></p>
					            <span class="counter">2000</span>
					            <p class="title-count">TỔNG SỐ ĐỐI TÁC</p>
					            <div class="clear20 show991"></div>
				         	</div>
				         	<div class="col-md-3 col-sm-6 col-xs-6 fwmb center">
					            <p class="icon-count"><img src="front/img/count4.png" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/count4.png" alt="count4"></p>
					            <span class="counter">40</span>
					            <p class="title-count">TỔNG SỐ SÀN LIÊN KẾT</p>
					            <div class="clear20 show991"></div>
				         	</div>
				      	</div>
					</div>
				</div>
			</div>
			<div class="clear40"></div>
		</div>
		<div class="main-duannoibat">
			<div class="clear40"></div>
			<div class="container">
				<div class="center">
					<h3 class="tit-pub">DỰ ÁN NỔI BẬT</h3>
					<div class="clear20"></div>
					<div class="ani-scale">
						<p>Chiến lược phát triển của Realtors Portal là tập trung phát triển sản phẩm với mục tiêu tạo ra sản phẩm phù hợp với nhu cầu khách hàng. Cụ thể hóa cho chiến lược này Realtors Portal  đã, đang và sẽ tập trung phát triển 3 dòng sản phẩm đáp ứng 3 phân khúc khách hàng trung bình, trung bình khá và cao cấp với nhiều dòng sản phẩm.</p>
					</div>
					<div class="clear20"></div>
					<div><a href="du-an.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an.html" class="clblack bold"><i class="fas fa-th-large" style="margin-right: 5px;"></i> XEM TẤT CẢ</a></div>
					<div class="clear20"></div>
					<div class="row flex-wrap">
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb1.jpg" alt="danb1" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">Charmington IRIS</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> 8A Tôn Thất Thuyết</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb2.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb2.jpg" alt="danb2" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">Jamona Heights</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> 210 Bùi Văn Ba | Tân Thuận Đông</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb3.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb3.jpg" alt="danb3" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">Charmington La Pointe</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> Cao Thắng, Quận 10</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb4.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb4.jpg" alt="danb4" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">Jamona Golden Silk</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> Bùi Văn Ba - Quận 7</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb5.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb5.jpg" alt="danb5" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">The Era Premium Quận 7</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> Nguyễn Lương Bằng</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6 fwmb">
							<div class="block-danb">
								<div class="img-danb">
									<a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html"><img src="front/img/danb6.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/danb6.jpg" alt="danb6" class="fullwidth"></a>
								</div>
								<div class="clear10"></div>
								<h4 class="nomargin bold center"><a href="du-an-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/du-an-chi-tiet.html" class="clblack">Carillon 7</a></h4>
								<div class="clear10"></div>
								<p><i class="fas fa-map-marker-alt" style="color: #2565a7;margin-right: 5px;"></i> 33 Lương Minh Nguyệt | Tân Thới Hòa</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear40"></div>
		</div>
		<div class="main-doitac">
			<div class="clear40"></div>
			<div class="container">
				<h3 class="tit-pub">ĐỐI TÁC</h3>
				<div class="clear40"></div>
				<div class="block-doitacs">
					<div class="slider-partner">
						<div class="partner-img"><img src="front/img/dt1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt1.jpg" alt="doitac1"></div>
						<div class="partner-img"><img src="front/img/dt2.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt2.jpg" alt="doitac2"></div>
						<div class="partner-img"><img src="front/img/dt3.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt3.jpg" alt="doitac3"></div>
						<div class="partner-img"><img src="front/img/dt4.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt4.jpg" alt="doitac4"></div>
						<div class="partner-img"><img src="front/img/dt5.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt5.jpg" alt="doitac5"></div>
						<div class="partner-img"><img src="front/img/dt2.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt2.jpg" alt="doitac2"></div>
						<div class="partner-img"><img src="front/img/dt4.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/dt4.jpg" alt="doitac4"></div>
					</div>
				</div>
			</div>
			<div class="clear40"></div>
		</div>
		<div class="main-tintuc">
			<div class="clear40"></div>
			<div class="container">
				<div class="center">
					<h3 class="tit-pub">TIN TỨC</h3>
					<div class="clear20"></div>
					<div><a href="tin-tuc.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc.html" class="clblack bold"><i class="fas fa-th-large" style="margin-right: 5px;"></i> XEM TẤT CẢ</a></div>
				</div>
				<div class="clear40"></div>
				<div class="row flex-wrap">
					<div class="col-md-3 col-sm-6 col-xs-6 fwmb">
						<div class="block-danb">
							<div class="img-danb">
								<a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html"><img src="front/img/tintuc1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/tintuc1.jpg" alt="tintuc1" class="fullwidth"></a>
							</div>
							<div class="clear10"></div>
							<p class="center bold"><a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html" class="clblack">Một số quy định của pháp luật sẽ tác động mạnh đến thị trường bất động sản</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 fwmb">
						<div class="block-danb">
							<div class="img-danb">
								<a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html"><img src="front/img/tintuc1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/tintuc1.jpg" alt="tintuc1" class="fullwidth"></a>
							</div>
							<div class="clear10"></div>
							<p class="center bold"><a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html" class="clblack">Một số quy định của pháp luật sẽ tác động mạnh đến thị trường bất động sản</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 fwmb">
						<div class="block-danb">
							<div class="img-danb">
								<a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html"><img src="front/img/tintuc1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/tintuc1.jpg" alt="tintuc1" class="fullwidth"></a>
							</div>
							<div class="clear10"></div>
							<p class="center bold"><a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html" class="clblack">Một số quy định của pháp luật sẽ tác động mạnh đến thị trường bất động sản</a></p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 fwmb">
						<div class="block-danb">
							<div class="img-danb">
								<a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html"><img src="front/img/tintuc1.jpg" tppabs="http://demo02.123corp.com.vn/thanhhan/front/img/tintuc1.jpg" alt="tintuc1" class="fullwidth"></a>
							</div>
							<div class="clear10"></div>
							<p class="center bold"><a href="tin-tuc-chi-tiet.html" tppabs="http://demo02.123corp.com.vn/thanhhan/tin-tuc-chi-tiet.html" class="clblack">Một số quy định của pháp luật sẽ tác động mạnh đến thị trường bất động sản</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clear40"></div>
		</div>
		<div class="main-connect">
			<div class="container">
				<h2 class="center nomargin clwhite bold">Bạn muốn kết nối với Realtors Portal?</h2>
				<div class="clear40"></div>
				<div class="center"><a href="tel:0938 333 768" class="a-hotline">Hotline: 0938 333 768</a></div>
				<div class="clear40"></div>
				<p class="clwhite center">hoặc <a href="lien-he.html" tppabs="http://demo02.123corp.com.vn/thanhhan/lien-he.html" style="color: #fff;text-decoration: underline;">gửi thông tin cho chúng tôi</a></p>
			</div>
		</div>
	</section>
@endsection
