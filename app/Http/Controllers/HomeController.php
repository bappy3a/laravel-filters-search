<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $users = User::latest()->paginate(10);

        if ($request->s == 'true') {
            $filters = [
                'brand' => $request->brand,
                'category'    => $request->category,
            ];
         
            $users = User::where(function ($query) use ($filters) {
                if ($filters['brand']) {
                    $query->where('brand', '=', $filters['brand']);
                }
                if ($filters['category']) {
                    $query->where('category', '=', $filters['category']);
                }
            })->paginate(10);
        }

        return view('home',compact('users'));
    }





}
