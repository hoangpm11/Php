<!-- BEGIN: main -->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal" action="edit.cmd.php">
				<fieldset>
			
					<!-- Form Name -->
					<legend>Sửa thông tin sinh viên với ID = {ID}</legend>
			
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="sname">Tên sinh viên</label>
						<div class="col-md-4">
							<input id="sname" name="sname" type="text"
								placeholder="nhập tên sinh viên" class="form-control input-md"
								required=""
								value="{NAME}"
								>
			
						</div>
					</div>
			
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="sage">Tuổi sinh viên</label>
						<div class="col-md-4">
							<input id="sage" name="sage" type="text"
								placeholder="nhập tuổi vào đây" 
								class="form-control input-md"
								value="{AGE}"
								>
			
						</div>
					</div>
			
					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="sinfo">Thông tin thêm</label>
						<div class="col-md-4">
							<textarea class="form-control" id="sinfo" name="sinfo"
							placeholder="nhập thông tin thêm, có thể cả html"
							>
								{INFORMATION}
							</textarea>
						</div>
					</div>
			
					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="add"></label>
						<div class="col-md-4">
							<button value="{ID}" id="edit" name="edit" class="btn btn-primary">Lưu lại</button>
							<a href="index.php" class="btn btn-default">Quay lại</a>
						</div>
					</div>
			
				</fieldset>



<!-- END: main -->