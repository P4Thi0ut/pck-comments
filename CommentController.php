<?php

namespace Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller {

	public function __construct() {}

	public function getComment () {
		return array(
			'success' => true
		);
	}

}