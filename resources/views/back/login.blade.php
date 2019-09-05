@extends('back.layout')

@section('content')
<div class="templatemo-content-container">
    <form action="{{ url('/save-category') }}" class="templatemo-login-form">
    	@csrf
    	<div class="form-group">
    		<div class="input-group">
        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        
              	<input type="text" class="form-control" placeholder="Category-Name">
          	</div>	
    	</div>
    	<div class="form-group">
    		<div class="input-group">
        		<div class="input-group-addon"><i class="fa fa-eye fa-fw"></i></div>
        		<select name="status" class="form-control" >
        			<option class="collapse" value="active">Select Status</option>
        			<option value="active">Active</option>
        			<option value="suspended">Suspended</option>
        		</select>	                 
          	</div>	
    	</div>	     
		<div class="form-group">
			<button type="submit" class="templatemo-blue-button width-100">Add</button>
		</div>
    </form>
</div>
@endsection