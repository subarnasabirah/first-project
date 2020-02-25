<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Author List";
        $data['authors'] = Author::paginate(1);
        $data['serial'] = managePaginationSerial($data['authors']);
        return view('admin.author.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Create New Author";
        return view('admin.author.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors',
            'phone' => 'required|unique:authors',
            'status' => 'required'
            //'photo' => 'required|mimes:jpeg,jpg,png,PNG,JPG,JPEG|max:1000',

        ]);
        $data = $request->all();
        if($request->photo){
            $data['photo'] = $this->fileUpload($request->photo);
        }
        Author::create($data);
        session()->flash('message','Author Created Successfully');
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        $data['title'] = "Author Details";
        $data['author'] = $author;
        return view('admin.author.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        $data['title'] = 'Edit Author';
        $data['author'] = $author;
        return view('admin.author.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors,email,'.$author->email,
            'phone' => 'required|unique:authors,phone,'.$author->phone,
            'status' => 'required'
            //'photo' => 'required|mimes:jpeg,jpg,png,PNG,JPG,JPEG|max:1000',
        ]);
        $data = $request->all();
        if($request->photo){
            $data['photo'] = $this->fileUpload($request->photo);
            if($author->photo && file_exists($author->photo)){
                unlink($author->photo);
            }

        }
        $author->update($data);
        session()->flash('message','Author Updated Successfully');
        return redirect()->route('author.index');
    }

    private function fileUpload($img)
    {
        $path = 'images/authors';
        $img->move($path,$img->getClientOriginalName());
        $fullPath = $path. '/' .$img->getClientOriginalName();
        return $fullPath;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        if($author->photo && file_exists($author->photo)){
            unlink($author->photo);
        }
        $author->delete();
        session()->flash('message','Author Deleted Successfully');
        return redirect()->route('author.index');
    }
}
