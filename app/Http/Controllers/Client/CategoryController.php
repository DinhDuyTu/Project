<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        /*
        Tạo collection query từ 2 bảng:
        $category = Category::where('id', $id)
            ->orWhere('parent_id', $id)
            ->with('courses')
            ->get();
        $courses = collect();
        foreach($category as $a) {
            foreach($a->courses as $b) {
                $courses->push($b);
            }
        }
         */


        $category = Category::where('id', $id)
            ->orWhere('parent_id', $id)
            ->get('id');
        $courses = Course::whereIn('category_id', $category)->paginate(config('course.PagePaginate'));

        $categories = Category::where('parent_id', 0)->orderBy('name')->paginate(config('course.PagePaginate'));

        return view('client.course.index', compact('courses', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
