<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends MY_Controller {

	public function index()
	{
		$this->mTitle = "Examples";
		$this->mViewFile = 'example/index';
	}
	
	public function demo($id)
	{
		// 2nd level of breadcrumb
		$this->mBreadcrumb[] = array(
			'name'	=> 'Examples',
			'url'	=> site_url('example')
		);
		
		$this->mTitle = "Demo ".$id;
		$this->mViewFile = 'example/demo';
	}
}