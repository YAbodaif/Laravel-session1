@extends ('books/layout')

@section('title')
    {{$x->title}}
@endsection

@section('main_content')
<div class="bg-info text-center w-50 p-5 m-auto">
    <h3 >The Book id : {{$x->id}}</h3>
    <p>book title : {{$x->title}}</p>
    <p>book title : {{$x->desc}}</p>
    <a href="{{route('books_index')}}">Back</a>
</div>
    
@endsection
