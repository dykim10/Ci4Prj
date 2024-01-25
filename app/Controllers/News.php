<?php
namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends BaseController
{
	
	public function index()
	{
		try {
			$model = new NewsModel();
			$data = [
				'news'  => $model->getNews(),
				'title' => 'News archive',
			];
			
			return view('templates/header', $data)
				. view('news/overview')
				. view('templates/footer');
			
			
		} catch (\Exception $e) {
			exit($e->getMessage());
		}

	}
	
	public function view($slug = null)
	{
		$model = new NewsModel();
		$data['news'] = $model->getNews($slug);

		if (empty($data['news'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
		}
		
		$data['title'] = $data['news']['title'];
		
		return view('templates/header', $data)
			. view('news/view')
			. view('templates/footer');
		
	}
}