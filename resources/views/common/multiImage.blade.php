<!DOCTYPE HTML>
<html>
<head>
<title>Admin : Multi Image</title>
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

  
	   <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashborad">Home</a><i class="fa fa-angle-right"></i>Multi Image</li>

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
    <script src="{{ url('/')}}/js/bootstrap.js"></script>
      @php
    }
   @endphp
	

		<div class="grid-form">
		<div class="grid-form1">
			<h2 id="forms-example" class=""> Multi Image Upload</h2>		
			<form action="{{ url('/imageUpload') }}" method="post" enctype="multipart/form-data" id="formId">
         	{{ csrf_field() }}
            <div class="col-md-6 form-group">
              <label for="name">Employee Name</label>
              <input type="file" name="imageupload[]" multiple>
              @if($errors->has('imageupload'))
                <div class="text-danger">
                  {{ $errors->first('imageupload') }}
                </div>
              @endif
           
            </div>  

            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary"> Upload</button>
              <button type="reset" class="btn btn-default"> Reset</button>
            </div><br>         
          

          @isset($multiple)
          @foreach($multiple as $multi)
          <div class="col-md-3 form-group" style="">
           <img src="{{ asset('storage/multi/'.$multi->image) }}" width="100px" height="100px" alt="Image View">
          </div>
          @endforeach
          @endisset

          <div class="clearfix"> </div>    

          <!-- <table>
            <tr>
              <th>S.no.</th>
              <th>Image</th>
            </tr>
            @isset($multiple)
            @foreach($multiple as $multi)
            <tr>
              <td> {{ $loop->index+1 }}</td>
              <td><img src="{{ asset('storage/multi/'.$multi->image) }}" width="100px" height="100px" alt="Image View"></td>
            </tr>
            @endforeach
            @endisset
          </table> -->
         
        </form>

		</div>
		</div>				
@include('theme.footer')
</div></div></div>
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