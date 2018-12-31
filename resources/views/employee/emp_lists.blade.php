<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Employee List</title>
</head> 
<body>
@include('theme.main')

  <!---------insert message modal------->
  @php
      if(session()->has('message')){
    
      $status = "Success";
      $message ='Employee Record Inserted Successfully...';      
      @endphp
      <script>
      $(document).ready(function(){
        $('#myModal').modal('show');         
      });
    </script> 
      @php
    }
   @endphp
   <!---------insert message modal------->

   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="mother-grid-inner">

	 <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashborad">Home</a><i class="fa fa-angle-right"></i>Employee List</li>
    </ol>

	<!-------------Session show ------------>
	@if(session()->has('message'))
	    <div class="alert alert-dismissible alert-danger">
	      {{ session()->get('message')}}
	    </div>
	@endif

		<div class="grid-form">
		<div class="grid-form1">
			<h2 id="forms-example" class="">Employee List
      <a href="{{ url('/employee/create') }}" style="float:right;">
      <button class="btn btn-success" type="button" style="border-radius: 10px;"><i class="fa fa-plus"></i> Add Records</button>
      </a>
      </h2>
			 <table id="table-force-off" class="">
          <thead>
            <tr>
            <th>S.no.</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Address</th>
            <!-- <th>Phone</th> -->
            <th>Mobile</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Date Of Birth</th>
            <!-- <th>Status</th> -->
            <th>Employee Image</th>
            <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($employeelist as $emp)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>{{ $emp->name }}</td>
              <td>{{ $emp->email }}</td>
              <td>{{ $emp->address }}</td>
              <!-- <td>{{ $emp->phone }}</td> -->
              <td>{{ $emp->mobile }}</td>
              <td>{{ $emp->gender }}</td>
              <td>{{ $emp->age }}</td>
              <td>{{ $emp->dob }}</td>
             <!--  <td>@php if($emp->status=='1'){ echo "<p style='color:green;'>Active</p>"; }
                else { echo "<p style='color:red;'>Non-Active</p>"; } @endphp</td>
              <td> -->

        <td><a href="@php 
          if(!empty($emp->empImg)){ echo asset('storage/upload/'.$emp->empImg) ; } else { echo '#';} 
          @endphp" download="">
          <img src="@php if(!empty($emp->empImg)){ echo asset('storage/upload/'.$emp->empImg) ; } else { echo asset('storage/upload/default.jpg');} @endphp" height="50px" width="50px" style="border-radius: 50px" />
        </a></td>
              <td>
              <a href="{{ url('/employee/'.$emp->id.'/edit') }}" class=""><i class="fa fa-edit fa-2x"></i></a>
              <form action="{{ url('/employee/'.$emp->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Are you sure to delete this record ?')"><i class="fa fa-trash"></i></button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
          <footer>{{ $employeelist->links() }}</footer>
          
          

          <script type="text/javascript">
            $('#table-force-off').basictable({
                  forceResponsive: false,
              }); 
          </script>
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