@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
    <div class="container" style="padding:50px">
    <section>
    <div class="row">
          <div class="col-12">
             <div class="card">
               <div class="card-header">
                <h3 class="card-title">Contact Query</h3>
                </div>
               <!-- /.card-header -->
               <div class="card-body">
                <div class="callout callout-info">
                  <h4>Category Name</h4>
                  <h5> {{$data['first_name']}} {{$data['last_name']}}</h5>
                  <h4>Email</h4>  
                  <h5>{{$data['email']}}</h5>
                  <h4>Telephone</h4>  
                  <h5>{{$data['telephone']}}</h5>
                  <h4>Created At</h4> 
                  <p>{{$data['created_at']}}</p>
                  <h4>Description</h4> 
                  <p>{{$data['description']}}</p>
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
