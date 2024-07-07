@extends ('books/layout');


@section('main_content')
<div class="container mt-5 ">
<h4 class="my-3">Edit Book Details </h4>

    <form method="post" action="{{route('books_update')}}" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputEmail4" name="title" value="{{$x->title}}">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Description</label>
            <input type="textaria" class="form-control" id="inputPassword4" name="desc" value="{{$x->desc}}">
        </div>
        <input type="hidden" class="form-control" id="inputPassword4" name="id" value="{{$x->id}}">

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="login">Update</button>
        </div>
    </form>
</div>
@endsection