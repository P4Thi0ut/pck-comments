<?php

namespace Comment;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider {

	public function boot() {

	}

	public function register () {

		include __DIR__.'/routes.php';
		$this->app->make('Comment\CommentController');

	}

}