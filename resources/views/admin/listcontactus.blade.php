@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
    <div class="container" style="padding:50px">
    <section class="content">
        <div class="container-fluid" style="padding-bottom:50px">
            <h2 class="text-center display-4">Search</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
    @if(session()->has('message'))
    <div id="success" class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
  @if ($message = Session::get('error'))
    <div id="failure" class="alert alert-danger alert-block">	
        <strong>{{ $message }}</strong>
    </div>
@endif
    </section>
    <section>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Query List</h3>
                 <div class="card-tools">
                
                </div>
                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="5%">ID</th>
                      <th width="15%">Name</th>
                      <th width="25%">Email</th>
                      <th width="25%">Telephone</th>
                      <th width="20%">created at</th>
                      <th width="20%"></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($listfaqs as $listfaq)
                    <tr>
                        
                      <td>{{$listfaq['id']}}</td>
                      <td>{{$listfaq['first_name']}}{{$listfaq['last_name']}}</td>
                      <td>{{$listfaq['email']}}</td>
                      <td>{{$listfaq['telephone']}}</td>
                      <td>{{$listfaq['created_at']}}</td>
                      <td><div class="btn-group btn-group-sm">
                        <a href="{{route('showcontactus',['id'=> $listfaq['id']])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        </div>
                    </td>
                    
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>

                
              </div>
              
             
              <!-- /.card-body -->
            </div>
            <div style="display: flex; justify-content: flex-end">
            {!! $listfaqs->links() !!}
                 </div>
            <!-- /.card -->
          </div>
        </div>  
    </section>
</div>
</div>
<script>
  setTimeout(function() {$('#success').fadeOut();}, 3000);
  setTimeout(function() {$('#failure').fadeOut();}, 3000);
</script>
@endsection
