<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use Redirect;
use App\Post;

class SavePost extends Controller {
    
	public function tambahdata(Request $request){
		$post = new Post;
		$post->post_title = $request->title;
		$post->content = $request->content;

		$str = strtolower($request->title);
		$post->slug = str_slug($str, '-');

		$post->save();

		return Redirect::to('/')->with('message', 'Data berhasil ditambahkeun. Thanks bos.');
	}

	public function read_data() {
		$data = Post::orderBy('created_at', 'desc')->get();
		return View('home')->with('post', $data);
	}

	public function view_data($id) {
		$post = Post::find($id);
      	return view('view', array('post' => $post));
	}

	// update proses

	public function update_act(Request $request, $id) {
		$up = Post::where('id_post', $id)->first();
		$up->post_title = $request->title;
		$up->content = $request->content;

		$str = strtolower($request->title);
		$up->slug = str_slug($str, '-');

		$up->save();

		return Redirect::to('/')->with('message', 'Data berhasil di apdet. Thanks bos.');
	}

	public function update_view($id) {
		$post = Post::find($id);

      	return view('update', array('post' => $post));
	}

	// delete
	public function delete($id) {
		$del = Post::find($id);
		$del->delete();

		return Redirect::to('/')->with('message', 'Data berhasil di apus. Thanks bos.');
	}

}
