@extends('../layout/navbar1')

@section('title','Movie')


@section('content')



<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Movie</h3>
    </div>

    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>


                
                    
                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select name="category" class="custom-select rounded-0" id="category">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach($category as $c)
                                <option value="{{ $c->name }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div>
                        <p><b>Image<b></p>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Upload an Image</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="watched">Watch Date :</label>
                        <input type="datetime-local" name="watched" class="form-control"  id="watched" required>
                    </div>


                    
                    <div class="form-group">
                        <label for="rating">Rating :</label>
                        <input type="text" name="rating" class="form-control"  id="rating" >
                    </div>

                    <div class="form-group">
                        <label for="imdb">Imdb :</label>
                        <input type="text" name="imdb" class="form-control"  id="imdb" >
                    </div>

                   


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
