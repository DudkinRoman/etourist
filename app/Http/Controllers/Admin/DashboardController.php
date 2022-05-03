<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard() {
        return view('admin.dashboard', [
            'categories' => Category::lastCategories(5),    // кол-во выводимых категорий
            'articles' => Article::lastArticles(5),         // кол-во выводимых матералов
            'count_categories' => Category::count(),        // общее кол-во категорий
            'count_articles' => Article::count(),           // общее кол-во матералов
            'count_users' => User::count(),                 // кол-во зарегистрированных пользователей
            'today' => date("d.m.Y")
        ]);
    }
}

