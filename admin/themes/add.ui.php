<!-- BEGIN: main -->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal" action="add.cmd.php" method="post">
				<fieldset>
			
					<!-- Form Name -->
					<legend>Thêm sinh viên</legend>
			
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-2 control-label" for="sname">Tên sinh viên</label>
						<div class="col-md-10">
							<input id="sname" name="sname" type="text"
								placeholder="nhập tên sinh viên" class="form-control input-md"
								required="">
			
						</div>
					</div>
			
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-2 control-label" for="sage">Tuổi sinh viên</label>
						<div class="col-md-10">
							<input id="sage" name="sage" type="text"
								placeholder="nhập tuổi vào đây" class="form-control input-md">
			
						</div>
					</div>
			
					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-2 control-label" for="sinfo">Thông tin thêm</label>
						<div class="col-md-10">
							<textarea class="form-control" id="sinfo" name="sinfo"
							placeholder = "nhập thông tin thêm, có thể cả html"
							>
							</textarea>
							<script>
							    CKEDITOR.replace( 'sinfo' );
							</script>
						</div>
					</div>
			
					<!-- Button -->
					<div class="form-group">
						<label class="col-md-2 control-label" for="add"></label>
						<div class="col-md-10">
							<button id="add" name="add" class="btn btn-primary">Thêm</button>
						</div>
					</div>
			
				</fieldset>
			</form>
		</div>
	</div>
</div>

<!-- END: main -->