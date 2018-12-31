<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Employee</title>
</head> 
<body>
@include('theme.main')
  
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="mother-grid-inner">

      @if(session()->has('message'))
      <div class="alert alert-dismissible alert-danger">
        {{ session()->get('message')}}
      </div>
      @endif

      @php
      if(isset($employee))
      {
        $function =  url('/employee/'.$employee->id);
        $title = "Update Employee";
        $button ="Update";
      }
      else{

        $function =  url('/employee');
        $title = "Add Employee";
        $button ="Submit";
      }
      @endphp

	   <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashborad">Home</a><i class="fa fa-angle-right"></i>{{ $title }}</li>

    </ol>

  
    <!---------------from validation error show------->
    @php
      if($errors->any()){
    
      $status = "Failure";
      $message ='';
      
      $message = implode('<br>',$errors->all());
      
      @endphp
      <script>
      $(document).ready(function(){
        $('#myModal').modal('show');         
      });
    </script> 
    <!-- <script src="{{ url('/')}}/js/bootstrap.js"></script> -->
      @php
    }
   @endphp
	

		<div class="grid-form">
		<div class="grid-form1">
			<h2 id="forms-example" class=""> {{ $title }}
        <a href="{{ url('/employee') }}" style="float:right;">
        <button class="btn btn-success" type="button" style="border-radius: 10px;"><i class="fa fa-users"></i> View Records</button>
        </a>
      </h2>		
			<form action="{{ $function }}" method="post" enctype="multipart/form-data" id="formId">
         	{{ csrf_field() }}
          @if(isset($employee))
            {{ method_field('PUT') }}
          @endif
            <div class="col-md-6 form-group">
              <label for="name">Employee Name</label>
              <input type="text" name="name" class="form-control" placeholder="Employee Name" autocomplete="off" value="@php if(isset($employee)){ echo $employee->name; }else { echo old('name'); } @endphp">
              @if($errors->has('name'))
                  <div class="text-danger">
                    {{ $errors->first('name')}}
                  </div>
              @endif
            </div>

            <div class="col-md-6 form-group">
              <label class="email">Email Id</label>
              <input type="text" placeholder="Email Id" name="email" class="form-control" autocomplete="off" value="@php if(isset($employee)){ echo $employee->email; }else { echo old('email'); } @endphp">
              @if($errors->has('email'))
                <div class="text-danger">
                  {{ $errors->first('email')}}
                </div>
              @endif
            </div>

            <div class="clearfix"> </div>
        
            <div class="col-md-12 form-group">
              <label class="address">Employee Address</label>
              <textarea  placeholder="Enter Your Address..." name="address" class="form-control" autocomplete="off" style="resize: none;">@php if(isset($employee)){ echo $employee->address; }else { echo old('address'); } @endphp</textarea>
              @if($errors->has('address'))
                <div class="text-danger">
                  {{ $errors->first('address') }}
                </div>
              @endif
            </div>

             <div class="clearfix"> </div>

   
            <div class="col-md-6 form-group">
              <label class="phone">Phone Number</label>
              <input type="text" name="phone" autocomplete="off" placeholder="Phone Number" class="form-control" value="@php if(isset($employee)){ echo $employee->phone; }else { echo old('phone'); } @endphp">
              @if($errors->has('phone'))
                <div class="text-danger">
                  {{ $errors->first('phone')}}
                </div>
              @endif
            </div>

            <div class="col-md-6 form-group">
              <label class="mobile">Mobile Number</label>
              <input type="text" name="mobile" autocomplete="off" placeholder="Mobile Number" class="form-control" value="@php if(isset($employee)){ echo $employee->mobile; }else { echo old('mobile'); } @endphp">
              @if($errors->has('mobile'))
                  <div class="text-danger">
                    {{ $errors->first('mobile')}}
                  </div>
              @endif
            </div>

            <div class="clearfix"> </div>

            <div class="col-md-4 form-group">
      				<label class="gender">Select Gender</label>
      				<select name="gender" class="form-control">
      				<option value="">Select Any Options</option>

      				<option value="Male" @php if(isset($employee)){ if($employee->gender=='Male'){ echo "selected"; }}else {if(old('gender')=='Male'){ echo "selected"; }}@endphp>MALE</option>

      				<option value="Female" @php if(isset($employee)){ if($employee->gender=='Female'){ echo "selected"; }} else { if(old('gender')=='Female'){ echo "selected"; }} @endphp>FEMALE</option>

      				</select>
              @if($errors->has('gender'))
                  <div class="text-danger">
                    {{ $errors->first('gender')}}
                  </div>
              @endif
      			</div>

            <div class="col-md-4 form-group">
              <label class="age">AGE</label>
              <input type="text" placeholder="AGE" name="age" autocomplete="off" class="form-control" value="@php if(isset($employee)){ echo $employee->age; }else { echo old('age'); } @endphp">
              @if($errors->has('age'))
                <div class="text-danger">
                  {{ $errors->first('age')}}
                </div>
              @endif
            </div>

            
            <div class="col-md-4 form-group">
              <label class="dob">Date Of Birth</label>
              <input type="text" class="form-control" id="date" ng-model="model.date" name="dob" autocomplete="off" 
              value="@php if(isset($employee)){ /*echo date("d/m/Y", strtotime($employee->dob));*/ echo $employee->dob; }else { echo old('dob'); } @endphp">
              @if($errors->has('dob'))
                <div class="text-danger">
                  {{ $errors->first('dob')}}
                </div>
              @endif
            </div>

             <div class="clearfix"> </div>

            <div class="col-md-4 form-group">
              <div class="checkbox1">
                <label>
                  <input type="checkbox" name="status" ng-model="model.winner" class="ng-invalid ng-invalid-required" @php if(isset($employee)){ if($employee->status==1) echo "checked"; } else{  if(old('status')=='on'){ echo "checked"; } }@endphp>
                  Agree Terms & Conditions....
                </label>
                @if($errors->has('status'))
                  <div class="text-danger">
                    {{ $errors->first('status')}}
                  </div>
                @endif
              </div>
            </div>

            <!-------image----------->
            
            <div class="col-md-6 form-group">    

            @if(isset($employee) && (!empty($employee->empImg)))       
              <img alt="Employee Image" width="100" height="100" src="{{ asset('storage/upload/'.$employee->empImg) }}" />
              
              <a href="{{ route('removeimg',['id'=>$employee->id]) }}">
               Remove Image
              </a>
              @endif
               <div class="form-group">
                <label class="empImg">Employee Image</label>
                <input type="file" name="empImg">
                @if($errors->has('empImg'))
                  <div class="text-danger">
                    {{ $errors->first('empImg')}}
                  </div>
                @endif
              </div>

            </div>
            <!-- <div class="col-md-6 form-group">
              <label class="empImg">Employee Image</label>
              <input type="file" name="empImg">
              @if($errors->has('empImg'))
                <div class="text-danger">
                  {{ $errors->first('empImg')}}
                </div>
              @endif
            </div> -->
            


            <!-------image----------->
            

             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">{{$button}}</button>
              @if(! isset($employee))
              <button type="reset" class="btn btn-default">Reset</button>
              @else
              <a href="{{ url('/employee') }}"><button type="button" class="btn btn-default">Back</button></a>
              @endif
            </div>

          <div class="clearfix"> </div>
        </form>

<!--------One more way to give form validation using jquery----------->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
    $('#formId').validate({ // initialize the plugin
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
        }
      });
    });
</script> -->
<!--------One more way to give form validation using jquery----------->

		</div>
		</div>				
@include('theme.footer')
</div></div>
</body>
</html>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@isset($status){{ $status }}@endisset</h4>
      </div>
      <div class="modal-body">
        <p>@isset($message) {!!$message!!} @endisset</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>