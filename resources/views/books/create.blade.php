@extends ('books/layout');


@section('main_content')
<div class="container mt-5 ">
<h4 class="my-3">Add a new Book  </h4>

    <form method="post" action="{{route('books_store')}}" class="row g-3">
        @csrf
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" class="form-control" id="inputEmail4" name="title">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Description</label>
            <input type="textaria" class="form-control" id="inputPassword4" name="desc">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="login">Save</button>
        </div>
    </form>
</div>
@endsection