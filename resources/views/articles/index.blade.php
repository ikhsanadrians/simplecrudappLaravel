@extends('layouts.app')



@section('content')





<div class="container">
    <div class="row">
        @foreach($articles as $article)
       
        <div class="col-3 card m-1">
            <a href="{{ route('article.show',$article->id)}}">
            <div class="card-body">
  <h4 class="card-title">{{ Str::limit($article->title,50) }}</h4>
  <p class="card-text">{{ Str::limit($article->description,100) }}</p>
            </div>
        </a>
        </div>
        
        @endforeach
    </div>
</div>

@endsection


