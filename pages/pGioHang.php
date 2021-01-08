<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<form>
		<!-- row -->
		<div class="row" >
			<div class="col-md-9">

				<div class="section-title">
					<h3 class="title">Giỏ hàng</h3>
				</div>
					
				<div id="sectionGioHang"  class="card">
					<table class="table table-hover">
						<thead class="text-muted">
							<tr>
								<th scope="col" colspan="2" class="text-center">Sản phẩm</th>
								<th scope="col" width="100" class="text-center">Số lượng</th>
								<th scope="col" width="120" class="text-center">Đơn giá</th>
								<th scope="col" width="120" class="text-center">Tổng</th>
								<th scope="col" class="text-center"></th>
							</tr>
						</thead>

						<tbody>
						<?php
							foreach ($_SESSION['cart'] as $key => $value){											
						?>
							<tr class="dsSanPham-GioHang">
								<td>
									<a href="#">
										<img src="<?php echo $value['avatar'] ?>" class="img-thumbnail">
									</a>
								</td>

								<td>
									<p style="color: #999;" ><?php echo $value['category_name'] ?> </p>
									<a class="tenSanPham-GioHang" href="<?php echo 'index.php?page=ChiTiet&id=' . $key ?>" style="font-size: large;"><?php echo $value['name'] ?></a>
									<p style="color: #999;"><?php echo $value['author'] ?></p>
								</td>

								<td>		
									<div class="input-number">
										<input type="number" value="<?php echo $value['quantity'] ?>">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</td>

								<td class="text-center">
									<div class="price-wrap">
										<var class="price"><?php echo number_format($value['price'], 0, '.', '.') ?></var>
									</div>
								</td>

								<td class="text-center">
									<strong class="tongTien1SP-GioHang"><?php echo number_format($value['price'] * $value['quantity'], 0, '.', '.') ?></strong>
								</td>

								<td class="text-right">
									<a href="#"><span><svg fill="red" ; width="20" height="20" viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg">
												<path fill="none" stroke="red" stroke-width="1.06" d="M16,16 L4,4">
												</path>
												<path fill="none" stroke="red" stroke-width="1.06" d="M16,4 L4,16">
												</path>
											</svg></span>

								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>

			</div>

			<!-- Order Details -->
			<div class="col-md-3 order-details" style="margin-top: 80px">

				<div class="order-summary">
					<div class="order-col">
						<div><strong>Tạm tính</strong></div>
						<div>1.050.000đ</div>
					</div>

					<div class="order-col">
						<div><strong>Giảm giá</strong></div>
						<div>50.000đ</div>
					</div>

					<hr style="size: 10px;">

					<div class="order-col">
						<div><strong>Tổng tiền</strong></div>
						<div><strong class="order-total">1.000.000đ</strong></div>
					</div>
				</div>

				
				<button class="check-out">Thanh toán</button>
			</div>

		</div>
		<form>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->