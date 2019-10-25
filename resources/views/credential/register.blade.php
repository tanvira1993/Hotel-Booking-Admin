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
		<div class="col-md-10">
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
							<label for="name" class="col-sm-2 control-label">Name</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" ng-model="userInfo.name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>

							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" ng-model="userInfo.email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-sm-2 control-label">Phone</label>

							<div class="col-sm-10">
								<input type="number" class="form-control" id="phone" name="phone" ng-model="userInfo.phone" placeholder="Phone Number">
							</div>
						</div>
						<div class="form-group">
							<label for="role" class="col-sm-2 control-label">Role</label>

							<div class="col-sm-10">
								<input type="number" class="form-control" id="role" name="role" ng-model="userInfo.role" placeholder="Enter Role">
							</div>
						</div>
						<div class="form-group">
							<label for="project" class="col-sm-2 control-label">Project</label>

							<div class="col-sm-10">
								<input type="number" class="form-control" id="project" name="project" ng-model="userInfo.project" placeholder="Enter Project">
							</div>
						</div>
						<div class="form-group">
							<label for="position" class="col-sm-2 control-label">Department</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" id="position" name="position" ng-model="userInfo.position" placeholder="Enter Role">
							</div>
						</div>
						
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">Password</label>

							<div class="col-sm-10 has-success" ng-class="{'has-error': userRegistrationForm.password.$dirty &amp;&amp;userRegistrationForm.password.$error.required ,  'has-success': userRegistrationForm.password.$valid}">
								<input type="password" class="form-control" id="password" name="password" ng-model="userInfo.password" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Password">
							</div>
						</div>
						<div class="form-group has-success" ng-class="{'has-error': userRegistrationForm.repass.$dirty &amp;&amp;userRegistrationForm.repass.$error.required ,  'has-success': userRegistrationForm.repass.$valid}">
							<label for="repass" class="col-sm-2 control-label">Retype-Password</label>

							<div class="col-sm-10">
								<input type="password" class="form-control" id="repass"  name="repass" ng-model="userInfo.repass" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Confirm Password">
								<span class="help-block ng-hide" ng-show="userRegistrationForm.repass.$error.isValidcp">Please make sure your passwords match</span>
							</div>
						</div>
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" ng-click="createUser()" class="btn btn-info pull-right">Register</button>
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
		@{{userInfo|json}}
	</pre> 
</section>
