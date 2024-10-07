<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Show;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function shows()
    {
        $shows = Show::orderBy('scheduled_at', 'desc')->get();

        $yearlyShows = $shows->groupBy(function ($show) {
            return $show->scheduled_at->format('Y');
        });

        return view('shows', [
            'yearlyShows' => $yearlyShows,
        ]);
    }

    public function galleries()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        return view('galleries', [
            'galleries' => $galleries,
        ]);
    }

    public function gallery(Gallery $gallery)
    {
        return view('gallery', [
            'gallery' => $gallery,
        ]);
    }
}
