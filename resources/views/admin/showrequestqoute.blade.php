@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
    <div class="container" style="padding:50px">
    <section>
    <div class="row">
          <div class="col-12">
             <div class="card">
               <div class="card-header">
                <h3 class="card-title">Request a Qoute</h3>
                </div>
               <!-- /.card-header -->
               <div class="card-body">
                <div class="callout callout-info">
                  <div class='row'>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Name</h4>
                       <h5> {{$data['first_name']}} {{$data['last_name']}}</h5>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Email</h4>  
                       <h5>{{$data['email']}}</h5>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Telephone</h4>  
                       <h5>{{$data['telephone']}}</h5>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Created At</h4> 
                       <p>{{$data['created_at']}}</p>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Number of Adults</h4> 
                       <p>{{$data['num_of_adults']}}</p>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Number of Youth</h4> 
                       <p>{{$data['num_of_youths']}}</p>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>People</h4> 
                       <p>{{$data['people']}}</p>
                       </div>
                       <div class='col-6' style="padding-top: 20px;">
                       <h4>Categories</h4> 
                       <p>{{$data['categories']}}</p>
                       </div>
                       <div class='col-12' style="padding-top: 20px;">
                       <h4>From: To:</h4> 
                       <p>{{$data['daterange']}}</p>
                       </div>
                       <div class='col-12' style="padding-top: 20px;">
                       <h4>Dietary</h4> 
                       <p>{{$data['dietary']}}</p>
                       </div>
                       <div class='col-12' style="padding-top: 20px;">
                       <h4>Height Participants</h4> 
                       <p>{{$data['height_participants']}}</p>
                       </div>
                       <div class='col-12' style="padding-top: 20px;">
                       <h4>Additional Info</h4> 
                       <p>{{$data['additional_info']}}</p>
                       </div>
                       <div class='col-12' style="padding-top: 20px;">
                       <h4>Remarks</h4> 
                       <p>{{$data['remarks']}}</p>
                       </div>
                       
                  </div>  
                  
                </div>
              </div>
              
             
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
          </div>
        
    </div>
    </section>
    
</div>
</div>
@endsection
