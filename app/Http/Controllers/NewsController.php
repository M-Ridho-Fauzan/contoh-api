<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = '52c74fae8b744931a48703f7f73ed6e9';
    }

    public function index()
    {
        $response = Http::get("https://newsapi.org/v2/everything?q=bitcoin&apiKey={$this->apiKey}");
        $articles = $response->json()['articles'];

        return view('news.index', compact('articles'));
    }

    public function show($id)
    {
        $response = Http::get("https://newsapi.org/v2/everything?q=bitcoin&apiKey={$this->apiKey}");
        $article = $response->json()['articles'][$id];

        return view('news.show', compact('article'));
    }
}
