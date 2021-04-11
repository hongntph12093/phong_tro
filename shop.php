<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trọ tốt</title>

	<!-- css files -->
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="./assets/css/tailwind.css">

	<!-- icon -->
	<script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>

	<!-- slider -->
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="./assets/owlcarousel/assets/owl.theme.default.min.css">

	<!-- gg font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php include "./inc/header.html" ?>

	<div class="py-10">
		<div class="container mx-auto">
			<div class="direction">
				<a href="index.php">Trang chủ</a>
				<span> --- </span>
				<a href="shop.php">Thuê trọ</a>
			</div>

			<div class="grid grid-cols-12 gap-10">
				<div class="col-span-3">
					<div class="border-b py-3">
						<p class="shop_title">loại nhà đất</p>
						<ul class="shop_option">
							<li class="flex justify-between mb-2">
								<a href="#">Phòng trọ / Nhà trọ</a>
								<span class="text-blue-400">25</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Chưng cư mini</a>
								<span class="text-blue-400">13</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Tập thể</a>
								<span class="text-blue-400">48</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Căn hộ dịch vụ - Homostay</a>
								<span class="text-blue-400">21</span>
							</li>
						</ul>
					</div>

					<div class="border-b py-3">
						<p class="shop_title">khu vực</p>
						<ul class="shop_option">
							<li class="flex justify-between mb-2">
								<a href="#">Quận Hoàn Kiếm</a>
								<span class="text-blue-400">25</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Đống Đa</a>
								<span class="text-blue-400">13</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Ba Đình</a>
								<span class="text-blue-400">48</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Hai Bà Trưng</a>
								<span class="text-blue-400">21</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Hoàng Mai</a>
								<span class="text-blue-400">45</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Thanh Xuân</a>
								<span class="text-blue-400">65</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Long Biên</a>
								<span class="text-blue-400">35</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Nam Từ Liêm</a>
								<span class="text-blue-400">74</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Bắc Từ Liêmg</a>
								<span class="text-blue-400">85</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Tây Hồ</a>
								<span class="text-blue-400">15</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Cầu Giấy</a>
								<span class="text-blue-400">27</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">Quận Hà Đông</a>
								<span class="text-blue-400">38</span>
							</li>
						</ul>
					</div>

					<div class="border-b py-3">
						<p class="shop_title">khoảng giá</p>
						<ul class="shop_option">
							<li class="flex justify-between mb-2">
								<a href="#">0 - 3,000,000đ</a>
								<span class="text-blue-400">25</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">3,000,000đ - 4,000,000đ</a>
								<span class="text-blue-400">13</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">4,000,000đ - 5,000,000đ</a>
								<span class="text-blue-400">48</span>
							</li>
							<li class="flex justify-between mb-2">
								<a href="#">5,000,000đ - 8,000,000đ</a>
								<span class="text-blue-400">21</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-span-9">
					<div class="shop_filter">
						<div class="grid grid-cols-12 gap-10">
							<div class="col-span-3 mb-10 w-full">
								<select name="" id="">
									<option value="">Diện tích</option>
									<option value="">< 20m2</option>
									<option value="">20m2 - 30m2</option>
									<option value="">30m2 - 40m2</option>
									<option value="">40m2 - 50m2</option>
									<option value="">> 50m2</option>
								</select>
							</div>
							<div class="col-span-3  col-start-10 mb-6 w-full">
								<select name="" id="">
									<option value="">Tin mới đăng</option>
									<option value="">Giá tăng dần</option>
									<option value="">Giá giảm dần</option>
									<option value="">Diện tích tăng dẫn</option>
									<option value="">Diện tích giảm dẫn</option>
								</select>
							</div>
						</div>
					</div>

					<div class="grid grid-cols-12 gap-10">
						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>

						<div class="col-span-4 rounded-xl bg-white">
							<img src="./assets/images/trending/trend1.jpg" alt="" class="rounded-t-lg">
							<div class="product_infor">
								<a href="#">cho thuê chung cư mini tại quan nhân, thanh xuân</a>
								<p><span class="font-semibold">Giá thuê: </span>4,000,000đ / tháng</p>
								<p><span class="font-semibold">Loại: </span>Chung cư mini</p>
								<p><span class="font-semibold">Diện tích: </span>30m2</p>
								<p><span class="font-semibold">Vị trí: </span>Quận Thanh Xuân, TP Hà Nội</p>
								<hr class="mt-2">
								<div class="product_infor-footer">
									<p>Ngày đăng: 24/3/2021</p>
									<p>View: 513</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "./inc/footer.html" ?>
</body>
</html>