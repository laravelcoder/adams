<?php

namespace App\Http\Controllers;
use App\Repositories\AttorneyRepository;
use App\Repositories\PostRepository;
use App\Repositories\ServiceRepository;
use App\Models\Service;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SiteController extends Controller
{
	private $attorneyRepository;
	private $postRepository;
	private $serviceRepository;

	public function __construct(AttorneyRepository $attorneyRepo, PostRepository $postRepo, ServiceRepository $serviceRepo)
	{
	    $this->attorneyRepository = $attorneyRepo;
	    $this->postRepository = $postRepo;
	    $this->serviceRepository = $serviceRepo;
	}

	 public function homepage(Request $request)
	{

		$posts = $this->postRepository->all();
		$attorneys = $this->attorneyRepository->all();
		$services = $this->serviceRepository->all();

	    	return view('layouts.frontpage.homepage', compact('posts', 'attorneys', 'services'));
	}


}

