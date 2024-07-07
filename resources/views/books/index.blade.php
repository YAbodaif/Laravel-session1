@extends ('books/layout')

@section('main_content')
<p>The Books View</p>
<hr/>

<a href="{{route('books_create')}}"> Add New Book </a>

<hr/>

<div class="container algin-text-start">
    @foreach ($x as $book )
    <a href="{{route('books_show',$book->id)}}">
        <h3>{{$book->id}}</h3>
    </a>
    <h4>{{$book->title}}</h4>
    <h5>{{$book->desc}}</h5>
    <a href="{{route('books_edit',$book->id)}}">Eidt</a>
    <a href="{{route('books_delete',$book->id)}}">Delete</a>
    @endforeach

 {{$x->render()}}   



<!-- $x->render() or $x->links -->
@endsection


</div>



