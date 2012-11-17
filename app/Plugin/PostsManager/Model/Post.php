<?php
class Post extends PostsManagerAppModel{
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
		),
		'body' => array(
			'rule' => 'notEmpty',
		),
	);
}

