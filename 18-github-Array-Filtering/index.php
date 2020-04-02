<?php 

//18 - Filtering arrays - array filter, array map - useful when modification is needed

Class Post
{
	public $title; // needs to be public
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}

}

$posts = [
	new Post('My First Post', true),  
	new Post('My Second Post', true),  
	new Post('My Third Post', true),  
	new Post('My Fourth Post', false)
]; 

$unpublishedPosts = array_filter($posts, function ($post) {
	return $post->published;
});

	// $modified = array_map(function ($post) {
		
	// 	return ['title' => $post->title];
	// }, $posts);

// $titles = array_map(function ($post) {
// 	return $post->title;
// }, $posts);

$titles = array_column($posts, 'title');

var_dump($titles);