<section class="content-header">
	<h1>
		Division
		<small>Division panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Division</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Add Division</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form id="adminReset-form" name="adminResetForm" novalidate>
				<div class="row">				
					<div class="col-md-6">
						<div class="form-group">
							<label>Division Name</label>		

							<input type="text" class="form-control" id="name" name="name" ng-model="divisonInfo.name" placeholder="Divison Name">

						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label>Division Info</label>		

							<input type="text" class="form-control" id="info" name="info" ng-model="divisonInfo.info" placeholder="Remarks">

						</div>
						<!-- /.form-group -->
					</div>

				</div>
				<div >
					<button type="submit" ng-click="createDivision()" class="btn btn-info pull-left">Add</button>
				</div>
			</form>

			<!-- /.row -->
		</div>

		<pre>@{{divisonInfo|json}}</pre>
	</div>
</section>


