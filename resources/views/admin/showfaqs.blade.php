@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
    <div class="container" style="padding:50px">
    <section>
    <div class="row">
          <div class="col-12">
             <div class="card">
               <div class="card-header">
                <h3 class="card-title">FAQs</h3>
                 <div class="card-tools">
                <a href="{{route('faqs')}}"><button type="button" class="input-group-append btn btn-primary"> Create New FAQ</button></a>
                </div>
                </div>
               <!-- /.card-header -->
               <div class="card-body">
                <div class="callout callout-info">
                  <h4>Category Name: {{$data['category']['category_name']}}</h4>
                  <h4>Question?</h4>  
                  <h5>{{$data['question']}}</h5>
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
