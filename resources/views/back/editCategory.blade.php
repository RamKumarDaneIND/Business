@extends('back.layout')

@section('content')
<div class="templatemo-content-container">
    <form action="/add-category" class="templatemo-login-form">
    	@csrf
    	<div class="form-group">
    		<div class="input-group">
        		<div class="input-group-addon"><i class="fa fa-list fa-fw"></i></div>	        
              	<input name="name" type="text" class="form-control" value="{{}}" placeholder="Category-Name">
          	</div>	
    	</div>
    	<div class="form-group">
    		<div class="input-group">
        		<div class="input-group-addon"><i class="fa fa-eye fa-fw"></i></div>
        		<select name="status" class="form-control" >
        			<option class="collapse" value="active">Select Status</option>
        			<option value="active" value="{{}}">Active</option>
        			<option value="suspended" value="{{}}">Suspended</option>
        		</select>	                 
          	</div>	
    	</div>	     
		<div class="form-group">
			<button type="submit" class="templatemo-blue-button width-100">Add</button>
		</div>
    </form>
</div>
@endsection