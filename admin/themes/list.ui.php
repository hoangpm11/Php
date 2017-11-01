<!-- BEGIN: main -->

<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
	rel='stylesheet' type='text/css'>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Quản lý sinh viên</h1>
			<div class="panel panel-default panel-table">
				<div class="panel-heading">
					<div class="row">
						<div class="col col-xs-6">
							<h3 class="panel-title">Danh sách sinh viên</h3>
						</div>
						<div class="col col-xs-6 text-right">
							<a href="addnew.php" class="btn btn-sm btn-primary btn-create">Thêm
								sinh viên</a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<tr>
								<th><em class="fa fa-cog"></em></th>
								<th class="hidden-xs">ID</th>
								<th>Tên</th>
								<th>Tuổi</th>
								<th>Thông tin</th>
							</tr>
						</thead>
						<tbody>
						   <!-- BEGIN: item  -->
							<tr>
								<td align="center">
								<a href="edit.php?id={ID}" class="btn btn-default"><em class="fa fa-pencil"></em></a> 
								<a href="delete.cmd.php?id={ID}" class="btn btn-danger"><em class="fa fa-trash"></em></a>
								</td>
								<td class="hidden-xs">{ID}</td>
								<td>{NAME}</td>
								<td>{AGE}</td>
								<td>{INFO}</td>
							</tr>
							<!-- END: item  -->
						</tbody>
					</table>

				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col col-xs-4">Trang 1 / 5</div>
						<div class="col col-xs-8">
							<ul class="pagination hidden-xs pull-right">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
							<ul class="pagination visible-xs pull-right">
								<li><a href="#">«</a></li>
								<li><a href="#">»</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- END: main -->



