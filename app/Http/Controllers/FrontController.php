<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\InteractiveSession;
use App\Models\Offers;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $offers = Offers::with('course')->get();
        $categories = Category::all();
        $interactiveSessions = InteractiveSession::with('course')->get();

        return view('frontend.index', compact('offers', 'interactiveSessions', 'courses', 'categories'));
    }
}
