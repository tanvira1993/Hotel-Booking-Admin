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
							<select name="idUser" ng-model="resetPassInfo.idUser" class="form-control select2dropdown" style="width: 100%;">
								<option value="">Select User</option>
								<option ng-repeat="(key, value) in usersList" value="@{{value.user_id}}">@{{value.name}}</option>
							</select>
						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label>District Name</label>		

							<input type="text" class="form-control" id="password" name="password" ng-model="resetPassInfo.password" placeholder="Reset Password">

						</div>
						<!-- /.form-group -->
					</div>

					<!-- /.col -->
					<div class="col-md-6">
						<div class="form-group">
							<label>District Info</label>		

							<input type="text" class="form-control" id="password" name="password" ng-model="resetPassInfo.password" placeholder="Reset Password">

						</div>
						<!-- /.form-group -->
						<div class="form-group">
							<label>Reset Password</label>		

							<input type="text" class="form-control" id="password" name="password" ng-model="resetPassInfo.password" placeholder="Reset Password">

						</div>
						<!-- /.form-group -->
					</div>
					<!-- /.col -->
				</div>
				<div >
					<button type="submit" ng-click="createForceResetPass()" class="btn btn-info pull-left">Add</button>
				</div>
			</form>
			<!-- /.row -->
		</div> 
		
		
		<!-- /.box-body -->

	</div>
</section>