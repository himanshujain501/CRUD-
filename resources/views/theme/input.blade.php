
<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Input</title>
</head> 
<body>
	@include('theme.main')
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
	<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
    </ol>
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Basic Form</h2>
 		<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!----->
<div class="grid-form1">
<h3 id="forms-horizontal">Horizontal form</h3>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="checkbox" > Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
</div>
<!---->
<div class="grid-form1">
<h3 id="forms-inline">Inline form</h3>
<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default btn-send">Send invitation</button>
</form>
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
</form>

</div>
<!---->

<div class="grid-form1">
<h3 id="forms-controls-static">Static control</h3>
<form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <p class="form-control-static">email@example.com</p>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label hor-form">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
</form>
<form class="form-inline">
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static">email@example.com</p>
  </div>
  <div class="form-group">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Confirm identity</button>
</form>
</div>

<!---->
  <div class="grid-form1">
  	       <h3>Form Element</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
									<div class="col-sm-2">
										<p class="help-block">Your help text!</p>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
									<div class="col-sm-8">
										<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
									<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
										<option>Lorem ipsum dolor sit amet.</option>
										<option>Dolore, ab unde modi est!</option>
										<option>Illum, fuga minus sit eaque.</option>
										<option>Consequatur ducimus maiores voluptatum minima.</option>
									</select></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Multiple Select</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control1">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
											<option>Option 5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio"> Unchecked</label></div>
										<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
										<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
									</div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="bs-example" data-example-id="form-validation-states">
    <form>
      <div class="form-group has-success">
        <label class="control-label" for="inputSuccess1">Input with success</label>
        <input type="text" class="form-control1" id="inputSuccess1">
      </div>
      <div class="form-group has-warning">
        <label class="control-label" for="inputWarning1">Input with warning</label>
        <input type="text" class="form-control1" id="inputWarning1">
      </div>
      <div class="form-group has-error">
        <label class="control-label" for="inputError1">Input with error</label>
        <input type="text" class="form-control1" id="inputError1">
      </div>
    </form>
  </div>
  <div class="panel-body">
					<form role="form" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Email Address</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Email Address</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="email" class="form-control1" type="text" placeholder="Email Address">
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Password</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>
						</div>
						<div class="form-group has-success">
							<label class="col-md-2 control-label">Input Addon Success</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
								    <input id="email" class="form-control1" type="text" placeholder="Email Address">
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">Email is valid!</p>
							</div>
						</div>
						<div class="form-group has-error">
							<label class="col-md-2 control-label">Input Addon Error</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" placeholder="Password">
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">Error!</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Checkbox Addon</label>
							<div class="col-md-8">
								<div class="input-group">
									<div class="input-group-addon"><input type="checkbox"></div>
									<input type="text" class="form-control1">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Checkbox Addon</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" class="form-control1">
									<div class="input-group-addon"><input type="checkbox"></div>
									
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">Checkbox on right</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Radio Addon</label>
							<div class="col-md-8">
								<div class="input-group">
									<div class="input-group-addon"><input type="radio"></div>
									<input type="text" class="form-control1">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Radio Addon</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="text" class="form-control1">
									<div class="input-group-addon"><input type="radio"></div>
									
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">Radio on right</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Input Processing</label>
							<div class="col-md-8">
								<div class="input-icon right spinner">
									<i class="fa fa-fw fa-spin fa-spinner"></i>
									<input id="email" class="form-control1" type="text" placeholder="Processing...">
								</div>
							</div>
							<div class="col-sm-2">
								<p class="help-block">Processing right</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Static Paragraph</label>
							<div class="col-md-8">
								<p class="form-control1 m-n">email@example.com</p>
							</div>
						</div>
						<div class="form-group mb-n">
							<label class="col-md-2 control-label">Readonly</label>
							<div class="col-md-8">
								<input type="text" class="form-control1" placeholder="Readonly" readonly="">
							</div>
						</div>
					</form>
	</div>
	<div class="bs-example" data-example-id="form-validation-states-with-icons">
    <form>
     
      
        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn">Submit</button>
				<button class="btn-default btn">Cancel</button>
				<button class="btn-inverse btn">Reset</button>
			</div>
		</div>
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->
@include('theme.footer')   
</div></div></div></div>
</body>
</html>