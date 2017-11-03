<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use App\Tag;

class TagController extends Controller{
  public function __construct()
  {
      $this->middleware('auth',['only'=>['create', 'store', 'edit', 'update', 'destroy']]);
  }

  public function index()
  {
      $tags = Tag::where('count', '>', '0')->take(10)->get();
      return view('tags.list')->with('tags',$tags);
  }
//????
  public function edit($id)
  {
      return view('tags.edit')->with('tag', Tag::find($id));
  }
//????
  public function update(Request $request, $id)
  {
        $rules = [
            'name' => ['required', 'regex:/^\w+$/'],
        ];
        $validator = Validator::make(['name'=>$request->input('name')], $rules); 
        if ($validator->passes()) {
            Tag::find($id)->update(['name'=>$request->input('name')]);
            return Redirect::back()->with('message', ['type' => 'success', 'content' => 'Modify tag successfully']);
        } else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
  }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->count = 0;
        $tag->save();
        foreach ($tag->articles as $article) {
            $tag->articles()->detach($article->id);
        }
        return Redirect::back();
    }
}
