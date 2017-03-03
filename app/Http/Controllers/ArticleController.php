<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use View;
use Session;
class ArticleController extends Controller
{
    //

    public function add(Request $request){
        $article=new Article();
         $article->title=$request->article_title;
         $article->description=$request->article_description;

        $article->save();
        Session::flash('message', 'Article posted succesfully!');
        return redirect('add_article');

    }

    public function show_articles(){


        $articles = Article::all();

        return View::make('articles', compact('articles'));
    }



    public function edit_articles(){

        $articles = Article::all();
        return View::make('edit-articles',compact('articles'));
    }

    public function edit_article($id=null){

        if(!isset($id)){

            return redirect('/edit_articles');
        }

        $article = Article::findOrFail($id);

        return View::make('edit-article',compact('article'));
    }


    public function update(Request $request){


        Article::where('id', $request->article_id)->update(array('title' => $request->article_title,'description'=>$request->article_description));


        Session::flash('message', 'Article updated successfully!');
        return redirect('edit_article/'.$request->article_id);

    }


public function delete_article(){

    $articles = Article::all();

    return View::make('delete-article', compact('articles'));
}

public function delete(Request $request){
   $ids=$request->article_id;

    Article::destroy($ids);

    Session::flash('message', 'Deleted successfully!');
    return redirect('/delete_article');
//    foreach($ids as $id){
//
//    }
}


    public function single_article($id=null){
        if(!isset($id)){

            return redirect('/articles');
        }

        $article = Article::findOrFail($id);

        return View::make('article',compact('article'));
    }

}
