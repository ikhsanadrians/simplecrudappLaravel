@extends('layouts.app')


@section('content')

<div class="container">
    <h2>Edit This Article</h2>
@if(Session::has('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

   <form action={{ route('article.update',$article->id)}}"" method="POST" enctype="multipart/form-data">
    @method('PUT')
     @include('articles.partials.form');

   </form>



</div>



@endsection