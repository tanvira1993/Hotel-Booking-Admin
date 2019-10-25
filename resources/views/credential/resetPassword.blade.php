<section class="content-header">
	<h1>
		Registration
		<small>Admin panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Register</a></li>
		<li class="active">Register</li>
	</ol>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">
			<!-- Horizontal Form -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Admin Registration</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form id="register-form" class="form-horizontal" name="userRegistrationForm" novalidate>
					<div class="box-body">
						
						<div class="form-group">
							<label for="ppassword" class="col-sm-2 control-label">Current Password</label>

							<div class="col-sm-10">
								<input type="password" class="form-control" id="ppassword" name="ppassword" ng-model="passInfo.ppassword" placeholder="Current Password">
							</div>
						</div>

						<div class="form-group">
							<label for="npassword" class="col-sm-2 control-label">New Password</label>

							<div class="col-sm-10">
								<input type="password" class="form-control" id="npassword" name="npassword" ng-model="passInfo.npassword" placeholder="New Password">
							</div>
						</div>

						
						<div class="form-group">
							<label for="repass" class="col-sm-2 control-label">Confirm Password</label>

							<div class="col-sm-10">
								<input type="password" class="form-control" id="repass" name="repass" ng-model="passInfo.repass" placeholder="Confirm Password">
							</div>
						</div>
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" ng-click="changePassword()" class="btn btn-info pull-right">Change Password</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
			<!-- /.box -->
			<!-- general form elements disabled -->
			
			<!-- /.box -->
		</div>
	</div>
	<pre>
		@{{passInfo|json}}
	</pre> 
</section>
