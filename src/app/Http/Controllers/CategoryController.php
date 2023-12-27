<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod('post')){
           $model = new Category();
           $model->name = $request->input('name');
           $model->description = $request->input('description');
           if($model->save()){
               return redirect('/category/view');
           }
        }

        return view('category.create');
    }


    public function view()
    {
        return view('category.view', ['categories' => Category::where('id', '>', 3)->where('id', '<', 8)->get()]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->isMethod('post')){
            Category::find($id)->update(['name' => $request->input('name'), 'description' => $request->input('description')]);
            return redirect('/category/view');
        }

        return view('category.update', ['category' => $category]);
    }


    public function delete(Request $request, $id)
    {
        if($request->isMethod('get')){
            Category::find($id)->delete();
            return redirect('/category/view');
        }
    }
}
