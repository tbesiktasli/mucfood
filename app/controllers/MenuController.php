<?php

class MenuController extends \BaseController {
    
        protected $layout = 'layouts.main';

	public function getIndex()
	{
		$this->layout->content = View::make('menu.index');
	}

}