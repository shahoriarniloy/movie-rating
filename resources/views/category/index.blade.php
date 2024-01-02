@extends('../layout/navbar1')
@section('title','Category List')

@section('content')

<a style="float:right" class="btn-sm btn-success" href="create">Add Category</a>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Designation List</h3>
    </div>

    <table class="table table-bordered table-striped table-hover">
      <tr>
          <th>ID</th>
          <th>Name</th>
      </tr>
      @foreach ($categories as $c)
          <tr>
              <td>{{$c->id}}</td>
              <td>{{$c->name}}</td>
          </tr>
      @endforeach
  
      
  </table>


</div>


@endsection




