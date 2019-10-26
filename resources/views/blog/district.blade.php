<section class="content-header">
	<h1>
		District
		<small>District panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> District</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<section class="content">
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Add District</h3>

			
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<form id="adminReset-form" name="adminResetForm" novalidate>
				<div class="row">				
					<div class="col-md-6">
						<div class="form-group">
							<label>Division</label>						
							<select name="divisionId" ng-model="districtInfo.divisionId" class="form-control select2dropdown" style="width: 100%;">
								<option value="">Select Division</option>
								<option ng-repeat="(key, value) in divisionList" value="@{{value.division_id}}">@{{value.division_name}}</option>
							</select>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label>District Name</label>		

							<input type="text" class="form-control" id="name" name="name" ng-model="districtInfo.name" placeholder="Name">

						</div>
						<!-- /.form-group -->
					</div>

					<!-- /.col -->
					<div class="col-md-6">
						<div class="form-group">
							<label>District Info</label>		

							<input type="text" class="form-control" id="info" name="info" ng-model="districtInfo.info" placeholder="Enter Info">

						</div>
						<!-- /.form-group -->
						
						<!-- /.form-group -->
					</div>
					<!-- /.col -->
				</div>
				<div >
					<button type="submit" ng-click="createDistrict()" class="btn btn-info pull-left">Add</button>
				</div>
			</form>
			<!-- /.row -->
		</div> 
		
		<pre>
			@{{districtInfo|json}}
		</pre>
		<!-- /.box-body -->

	</div>
</section>