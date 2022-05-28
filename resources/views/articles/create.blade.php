@extends('layouts.app')


@section('content')

<div class="container">
    <h2>Create New Article</h2>
   <form action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
    
       @include('articles.partials.form');

   </form>



</div>



@endsection