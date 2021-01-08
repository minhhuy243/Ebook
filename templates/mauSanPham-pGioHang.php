<tr>
	<td>
		<a href="#">
			<img src="<?php echo $value['avatar'] ?>" class="img-thumbnail">
		</a>
	</td>

	<td>
		<p style="color: #999;"><?php echo $value['category_name'] ?></p>
		<a href="#" style="font-size: large;"><?php echo $value['name'] ?></a>
		<p style="color: #999;"><?php echo $value['author'] ?></p>
	</td>

	<td>		
		<div class="input-number">
			<input type="number" id="slSanPham" value="<?php echo $value['quantity'] ?>">
			<span class="qty-up">+</span>
			<span class="qty-down">-</span>
		</div>
	</td>

	<td class="text-center">
		<div class="price-wrap">
			<var class="price"><?php echo $value['price'] ?></var>
		</div>
	</td>

	<td class="text-center">
		<strong><?php echo $value['price'] * $value['quantity'] ?></strong>
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