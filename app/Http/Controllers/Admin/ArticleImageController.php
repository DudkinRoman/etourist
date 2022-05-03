<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleImageController extends Controller
{
    // Delete Image
    public function DeleteImage($id)
    {

        $article = Article::find($id);
        //dd($article['image']);
        // Удаляем файл (!)
        unlink( $_SERVER['DOCUMENT_ROOT'] . $article['image']);
        // Новое значение
        $article['image'] = '';
        $article->save();

        return redirect()->route('admin.article.edit', [
            'article' => $id
        ]);
    }

    // Add Image
    public function AddImage(Request $request, $id)
    {

        $article = Article::find($id);
        //dd($article['image']);
        // Удаляем файл (!)
        unlink( $_SERVER['DOCUMENT_ROOT'] . $article['image']);
        // Новое значение
        $article['image'] = '';
        $article->save();

        return redirect()->route('admin.article.edit', [
            'article' => $id
        ]);
    }
}
