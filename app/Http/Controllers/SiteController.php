<?php

namespace App\Http\Controllers;
use App\Repositories\AttorneyRepository;
use App\Repositories\PostRepository;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class SiteController extends Controller
{
	private $attorneyRepository;
	private $postRepository;

	public function __construct(AttorneyRepository $attorneyRepo, PostRepository $postRepo)
	{
	    $this->attorneyRepository = $attorneyRepo;
	    $this->postRepository = $postRepo;
	}

	 public function homepage(Request $request)
	{
		$posts = $this->postRepository->all();
		$attorneys = $this->attorneyRepository->all();

	    	return view('layouts.frontpage.homepage', compact('posts', 'attorneys'));
	}

	public function service(Service $service)
	{

		return view('services.service', compact('service'));
	}
}

