@extends ('layouts.app')

@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>
<br>
<a href="/category" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">Kembali</a>
@endsection