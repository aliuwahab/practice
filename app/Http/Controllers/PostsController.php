<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //send the posts info to the posts view
        $data = file_get_contents('https://jsonplaceholder.typicode.com/posts', true);

        $decodedData = json_decode(json_encode($data), true);;


       // $user = User::find($userID);

        $values = [
            'decodedData' => json_decode($data),
          //  'users' => $user
        ];


        return view('posts.index')->with($values);
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

        //
        $eachPost = file_get_contents('https://jsonplaceholder.typicode.com/posts?id='.$id);

        $commentsPerPost = file_get_contents('https://jsonplaceholder.typicode.com/comments?postId='.$id);

     //   $dataArray =dd($dataArray);

        $values = [
            'posts' => json_decode($eachPost),
            'comments' => json_decode($commentsPerPost),
        ];

        return view('posts.single')->with($values);

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
