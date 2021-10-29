<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artikel = Articel::orderBy('created_at', 'DESC')->limit(5)->get();


        $data = [
            'artikel' => $artikel
        ];

        return view('dashboard.content.primary.index', $data);
    }

    public function kategori($kategori)
    {
        $artikel = Articel::whereHas('category', function($query) use ($kategori) {
            $query->where('slug', $kategori);
        })->orderBy('created_at', 'DESC')->limit(5)->get();

        $data = [
            'artikel' => $artikel
        ];

        return view('dashboard.content.primary.kategori', $data);

    }

    public function detail($kategori, $slug)
    {
        $kategori = Category::where('slug', $kategori)->first();
        $artikel = Articel::where('slug', $slug)->first();

        $data = [
            'kategori' => $kategori,
            'artikel' => $artikel
        ];

        return view('dashboard.content.primary.detail', $data);

    }
}
