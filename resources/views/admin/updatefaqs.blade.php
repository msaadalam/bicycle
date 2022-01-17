@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
    <div class="container" style="padding-top:20px; padding-bottom:50px; padding-left:50px; padding-right:50px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                   <!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
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
        <!-- Main content -->
        <div class="container my-4">
        <h2>CREATE FAQS CATEGORY</h2>
        <form method="post" action="{{route('createfaqscategory')}}">
            @csrf
            <div class="row">
                <div class="col-md-6 col-6">
                <label for="category" class="form-label">Create Category</label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Please enter category name" required>
                </div>
                <div class="col-md-12 my-4">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           
           
          </form>
     
     </div>

        <div class="container my-4">
        <h2>Update FAQS</h2>
        <form method="post" action="{{route('updatefaqs',['id'=> $data['id']])}}">
            @csrf
            <div class="row">
                <div class="col-md-12 col-12 form-group">
                <label for="select_category">Select category:</label>    
                <select name="category_id" class="form-control form-select form-select-lg mb-3" id="select_category" aria-label=".form-select-lg example">
                <option value="{{$data['category']['id']}}" style="font-weight:700;" selected>{{$data['category']['category_name']}}</option>
                <li><hr class="dropdown-divider"></li>
                @foreach($category as $categories)
                <option value="{{$categories['id']}}">{{$categories['category_name']}}</option>
                @endforeach
                </select>
                </div>
                <input type="hidden" name="id" value="{{$data['id']}}" class="form-control">
                <div class="col-md-12 col-12 form-group">
                    <label for="question" class="form-label">Questions</label>
                    <input type="text" name="question" id="question" value="{{$data['question']}}" class="form-control" placeholder="Please enter name" required>
                </div>
                <div class="col-md-12 form-group">
                    <label class="form-label" for="description">Description</label>
                    <textarea row="5" class="form-control" cols="20" rows="10" name="description" id="description" placeholder="Please enter description" required>{{$data['description']}}</textarea>
                    </div>
            </div>
            <div class="col-md-12 my-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           
           
          </form>
     
     </div>    
        <!-- /.content -->
</div>
    </div>
</div>
<script>
  setTimeout(function() {$('#success').fadeOut();}, 3000);
  setTimeout(function() {$('#failure').fadeOut();}, 3000);
</script>

@endsection
