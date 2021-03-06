@extends('app.admin.layouts.default')
 @section('styles')
  @parent
  {{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop

<style type="text/css">

.col-md-12 {
    width: 100%;
    padding: 8px;
}

</style>
@endsection


@section('main')

	<div class="col-md-12 col-sm-12">
  <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
            <li class="nav-item active"><a href="#steps-change-tab1" class="nav-link  steps-leadership active  " data-toggle="tab" data-payment='newregiserd'>Change Username</a>
            </li>
            <li class="nav-item"><a href="#steps-change-tab2" class="nav-link steps-plan-payment" data-toggle="tab" data-payment='BinaryMatchBonus'>Change Password</a></li>
            
        </ul>
     
        <div class="tab-content">

         <div class="tab-pane active  " id="steps-change-tab1"> 
           <div class="panel-body"> 
                 <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                          
                        </thead>
                        <tbody>
<div class="panel">
 <div class="panel-body ">
  <form action="{{url('admin/users/updatename')}}" class="smart-wizard form-horizontal" method="post"  >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
   

    <div class="row">
      <div class="col-cd-6">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="username">
             {{trans('ticket_config.username')}}: <span class="symbol required"></span>
            </label>
            <div class="col-sm-4">
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
        </div>
        </div>
          </div>

     <div class="row">
      <div class="col-cd-6">
        <div class="form-group">
             <label class="col-sm-2 control-label" for="amount">
                 {{trans('ticket_config.new_username')}}: <span class="symbol required"></span>
            </label>
                <div class="col-sm-4">
                <input type="text" id="new_username" name="new_username" class="form-control" required>
        </div>
        </div>
          </div>
          </div>
       
         <br>
             <button type="reset" class="btn btn-sm btn-default" style="margin-left: 150px;">
                        <span class="glyphicon glyphicon-remove-circle"></span> {{
                        trans("modal.reset") }}
                        </button>
                        <button type="submit" class="btn btn-sm btn-success">
                        <span class="glyphicon glyphicon-ok-circle"></span>
                        
                        {{ trans("modal.edit") }}
                        
                        </button>

       
           

    </form>
    </div>
</div>
   </tbody>
  </table>
 </div>                                                                             
 </div>       
  </div>
           
          
          <div class="tab-pane   " id="steps-change-tab2">
               <div class="panel-body">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                          
                        </thead>
                        <tbody>
                        	<div class="panel">
                        <div class="panel-body">
                        		<form class="form-horizontal" method="post"	action="{{ URL::to('admin/users/edit') }}"	autocomplete="off">
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
			<div>
				<div class=" col-md-12">
					

					

					<div id="searchtreeholder"  class="form-group {{{ $errors->has('username') ? 'has-error' : '' }}}">
						<label class="col-sm-4 control-label" for="username">
							{{trans('ewallet.username')}} <span class="symbol required"></span>
						</label>
						<div class="col-sm-4">
							<span class="input-group"> 
							 <input type="text" class="form-control" id="key-word" name="key-word" placeholder="Search Member">
							  <input type="hidden" id="key_user_hidden" name="username" >
							  <span class="input-group-btn">
							  		<button class="btn btn-danger" type="button"  id="btn-cancel"><i class="fa fa-search"></i></button>
							  </span>
							</span>							 
						</div>
						
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group {{{ $errors->has('password') ? 'has-error' : '' }}}">
						<label class="col-md-4 control-label" for="password">{{
						trans('users.password') }}</label>
						<div class="col-md-4">
							<input class="form-control" tabindex="6" placeholder="{{ trans('users.password') }}"	type="password" name="password" id="password" value="" />
							{!!$errors->first('password', '<label class="control-label"	for="password">:message</label>')!!}
							
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group {{{ $errors->has('password_confirmation') ? 'has-error' : '' }}}">
						<label class="col-md-4 control-label" for="password_confirmation">{!!
						trans('users.password_confirmation') !!}</label>
						<div class="col-md-4">
							<input class="form-control" type="password" tabindex="6"
							placeholder="{{ trans('users.password_confirmation') }}"
							name="password_confirmation" id="password_confirmation" value="" />
							{{$errors->first('password_confirmation', '<label
							class="control-label" for="password_confirmation">:message</label>')}}
						</div>
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-4">
						
						<button type="reset" class="btn btn-sm btn-default">
						<span class="glyphicon glyphicon-remove-circle"></span> {{
						trans("modal.reset") }}
						</button>
						<button type="submit" class="btn btn-sm btn-success">
						<span class="glyphicon glyphicon-ok-circle"></span>
						
						{{ trans("modal.edit") }}
						
						</button>
					</div>
				</div>
			</form>


                        </div>
                    </div>


                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
             
           
      
               
           
          </div>
        </div>
    </div>

	
	
	@stop
	@section('scripts') @parent
  
	@endsection