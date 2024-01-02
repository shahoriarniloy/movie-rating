@extends('../layout/navbar1')
@section('title','Movies')
@section('button')
<a style="float:right" class="btn-sm btn-success" href="create">Add New Movie</a>
@endsection
@section('content')



<div class="row">
    <div class="card card-primary col col-md-12 col-sm-12" >
        <div class="card-header" style="background-color: grey">
            <h3 class="card-title">Movie List</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">
                <br>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Watched On</th>
                    <th>IMDB</th>

                   
                </tr>
                @foreach ($movie as $e)
                <tr>

                    <td>{{$e->id}}</td>
                    <td><img src="{{ asset('image/' . $e->image) }}"
                                style="height:70px; width:50px; " /> {{$e->name}}</td>
                    <td>{{$e->category}}</td>
                    <td>{{$e->rating}}</td>
                    <td>{{$e->watched}}</td>
                    <td><a href="{{$e->imdb}}"> {{$e->imdb}} </a></td>
                    

                    

                </tr>
                @endforeach


            </table>




        </div>
    </div>

</div>



        @endsection
