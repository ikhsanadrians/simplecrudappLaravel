<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;

class ArticleController extends Controller
{
  public function index(){
    $articles = Article::latest()->get();


    return view('articles.index',compact('articles'));

  }


  public function show(Article $article){
       


    return view('articles.show' ,compact('article'));

  }

  public function create(){

    $article = new Article();
    return view('articles.create',compact('article'));

  }

  public function store(ArticleRequest $request){
      $image = $request->image->store('posts',['disk' => 'public']);


      Article::create([
          'title' => $request->title,
          'description' => $request->description,
          'image' => $image,
      ]);
      return redirect('/');

  }



  public function destroy(Article $article){
     if($article->image){
        Storage::disk('public')->delete($article->image);
        
     }
     $article->delete();
        return redirect('/');
  }



  public function edit(Article $article){
        return view('articles.edit',compact('article'));   

  }

   
  public function update(Article $article,ArticleRequest $request){
    $image = $article->image;
    if($request->file('image')){
     $image = $request->image->store('posts',['disk'=>'public']);
    }

     $article->update([
         'title'=> $request->title,
         'description' => $request->description,
         'image' => $image,

     ]);


     return back()->with('success','Berhasil Merubah Artikel');


  }




}
