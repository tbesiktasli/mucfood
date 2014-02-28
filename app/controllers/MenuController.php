<?php

class MenuController extends \BaseController {
    
        protected $layout = 'layouts.main';

	public function getIndex()
	{
            $this->layout->content = View::make('menu.index');
	}
        
        public function postIndex() {
            $number = 0;
            $apes = 0;
            $hedgehogs = 0;
            
            if( Input::has('number') ) {
                $number = Input::get('number');
            }
            if( Input::has('apes') ) {
                $apes = Input::get('apes');
            }
            if( Input::has('hedgehogs') ) {
                $hedgehogs = Input::get('hedgehogs');
            }

            $this->layout->content = View::make('menu.index', array('number'=>$number, 'image'=>1, 'apes'=>$apes, 'hedgehogs'=>$hedgehogs));
        }

}