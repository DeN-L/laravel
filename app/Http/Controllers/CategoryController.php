<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a_categories = Category::all();
        return view('backend.category.index', ['a_categories' => $a_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $o_categories = Category::all();
        return view('backend.category.create', ['o_categories' => $o_categories]);
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
     * @param string $k_category
     * @return \Illuminate\Http\Response
     */
    public function show(string $k_category)
    {
        $a_category = DB::select('
            SELECT
                categories.*,
                parent_name.text_name as text_name_parent
            FROM 
                categories left join 
                categories as parent_name on
                    categories.k_category_parent=parent_name.k_category
            WHERE
                categories.k_category=:k_category
        ', [
            'k_category' => $k_category
        ]);

        $o_category = Category::find($k_category);

        return view('backend.category.show', [
            'html_id' => $o_category->k_category, // $a_category[0]->k_category,
            'html_name' => $o_category->text_name, // $a_category[0]->text_name,
            'html_description' => $o_category->text_description,
            'html_name_parent' => isset($o_category->parentCategory) ? $o_category->parentCategory->text_name : '', // Данные из связанной записи.
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param string $k_category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(string $k_category)
    {
        $o_categories = Category::all();
        $o_category_edit = $o_categories->find($k_category);
        return view('backend.category.create', [
            'o_categories' => $o_categories,
            'o_category_edit' => $o_category_edit
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
