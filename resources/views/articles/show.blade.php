@extends ('layouts.app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteArticleModal">
        Delete
      </button>
           <a href="{{route('article.edit',$article->id)}}" class="btn btn-success btn-sm">Edit</a>

      <div class="modal fade" id="deleteArticleModal">
         <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-body">
                       <p>Are you sure?</p>
                       <form action="{{route('article.destroy',$article->id)}}" method="POST">
                        @method('DELETE')   
                        @csrf 
                           
                             <button type="submit" class="btn btn-danger">Delete</button>

                       </form>
                   </div>
               </div>

         </div>

      </div>


<div class="mt-3">
    <img src="{{ asset('storage/' . $article->image)}}" alt="" class="img-fluid">
    <h1>{{$article->title}}</h1>
    <p>{!! nl2br($article->description) !!}</p>
</div>
</div>

@endsection