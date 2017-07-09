<?php

namespace App\Http\Controllers;
use App\Repositories\LawyerRepository;
use App\Repositories\PostRepository;
use App\Repositories\ServiceRepository;
use App\Models\Service;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SiteController extends Controller
{
	private $lawyerRepository;
	private $postRepository;
	private $serviceRepository;

	public function __construct(lawyerRepository $lawyerRepo, PostRepository $postRepo, ServiceRepository $serviceRepo)
	{
	    $this->lawyerRepository = $lawyerRepo;
	    $this->postRepository = $postRepo;
	    $this->serviceRepository = $serviceRepo;
	}

	 public function homepage(Request $request)
	{

		$posts = $this->postRepository->all();
		$lawyers = $this->lawyerRepository->all();
		$services = $this->serviceRepository->all();

	    	return view('layouts.frontpage.homepage', compact('posts', 'lawyers', 'services'));
	}


}

