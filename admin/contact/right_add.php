		

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Thêm sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm sản phẩm mới</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<form method="post" id="add_product">
					<div class="form-row">
						<div class="form-group col-md-6" style="padding-left: 0">
							<label for="">Tên sản phẩm</label>
							<input type="text" class="form-control" id="inputEmail4" name="Name_product">
						</div>
						<div class="form-group col-md-6" style="padding-right: 0">
							<label for="">Giá sản phẩm</label>
							<input type="number" class="form-control" id="inputPassword4" name="price_product">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Loại sản phẩm</label>
						<select class="form-control" id="exampleFormControlSelect1">
						<option>Áo</option>
						<option>Quần</option>
						<option>Giày</option>
						<option>Trang sức</option>
						<option>Mũ</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Mô tả</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Hình ảnh</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<button type="submit" name="insert" class="btn btn-primary"><a href="">Thêm</a></button>
				</form>
			</div>
		</div><!--/.row-->		
		<?php
			if(isset($_POST('insert'))){

			}
		?>
		
		<div class="row">
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div><!--/.main-->
