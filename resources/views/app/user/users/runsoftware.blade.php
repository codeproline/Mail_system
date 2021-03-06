@extends('app.user.layouts.default') {{-- Web site Title --}} @section('title') {{{ $title }}} :: @parent @stop {{-- Content --}} @section('styles') @parent
<style type="text/css">
.run-table{
  margin-top: 340px;
}

.border{
  border: 2px solid #000000;
  padding: 20px;
}
.run-backg{
        background-image: url('/img/cache/original/runsoftware.jpg');
        background-repeat: no-repeat;
        background-size: cover;
            /*color: #fdfdfd;*/

    }
</style>
@endsection @section('main')
@include('flash::message') 
@include('utils.errors.list')

<div class="panel panel-flat ">
    <div class="panel-heading">
        <h4 class="panel-title">
          Run Software
        </h4>
    </div>

    <div class="panel-body">
      <div class="run-backg">
      <div class="row">
     <!--    <div class="col-sm-12">
          
          <img src="{{url('img/cache/original/runsoftware.jpg')}}" width="100%" height="300px">
        </div> -->

      <div class="run-table">
<!--     <div class="col-sm-6">

       @if(count($broker_users) > 0)

                     <table class="table" id="table">
                                <thead>
                                    <tr>

                                     
                                        <th>Broker</th> 
                                        <th>URL</th>
                                      

                                    </tr>

                                </thead>
                                    <tbody>

                                            @foreach($broker_users as $key=> $busers)

                                                <tr>

                                             
                                                <td>{{$busers->name}}</td>
                                                  <td> <a href="{{$busers->url}}" target="_blank"> {{$busers->url}}</a></td>
                                                 
                                            @endforeach  

                                              

                                                          

                                    </tbody>
                            </table>
                            @else
                            No data Found
                            @endif

     
      
    </div> -->
    <div class="col-sm-4 col-sm-offset-4 text-center border">
      <p><h4 style="color: red;">Run Software</h4></p>
   

          @if($status == "stopped")
        <a class="btn btn-success" data-toggle="modal" data-target="#myModalstart">Start</span> </a>
        &nbsp

         <button type="button" class="btn btn-danger" disabled>Stop</button>
       
              <!-- Modal -->

                <div id="myModalstart" class="modal fade" role="dialog">
                <div class="modal-dialog">

              <!-- Modal content-->

                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body" style="overflow: auto !important;">
           <form action="{{url('user/savebrokerdetails')}}" class="smart-wizard form-horizontal" method="post"  >
            <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                <label class="col-sm-4 control-label" for="username">
                    Choose Broker: <span class="symbol required"></span>
                </label>
                <div class="col-sm-5">
                    <select name="user" id="user" class="form-control" required="true">
                      <option value="">Choose User</option>
                      @foreach($broker_users as $busers)
                      <option value="{{$busers->id}}">{{$busers->name}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
     
            <div class="form-group">
                <label class="col-sm-4 control-label" for="account">
                    Number Account: <span class="symbol required"></span>
                </label>
                <div class="col-sm-5">
                    <input type="text" id="account" name="account" class="form-control" required="true">
                </div>
            </div>
     
              <div class="form-group">
                <label class="col-sm-4 control-label" for="current_password">
                      Password Account
                </label>
                 <div class="col-sm-5">
                <input class="form-control" name="password" id="password"  type="password" required="true">
                </input>
                </div>
            </div>
         
   
                <div class="modal-footer">
                <div class="row">
              <button class="btn btn-info" tabindex="4" name="start" id="start" type="submit" value="start"> Start</button >       
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
        </form>
                </div>
                </div>
                </div>




                 @endif

                @if($status == "started")

                 <a href="{{url('user/changestatus')}}" class="btn btn-danger">Stop</span> </a>
                 @endif
    </div>
        
      </div>

 
        </div>
      </div>
        </div>

      
</div>




@endsection @section('overscripts') @parent

@endsection 
@section('scripts')
@parent

<script type="text/javascript"> 

   $(document).ready(function() {
            $('.summernote').summernote();
        });
</script>


@endsection
