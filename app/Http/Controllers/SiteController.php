<?php

namespace App\Http\Controllers;
use App\Repositories\LawyerRepository;
use App\Repositories\PostRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\StaffRepository;
use App\Models\Service;
use App\Models\Staff;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SiteController extends Controller
{
	private $lawyerRepository;
	private $postRepository;
	private $serviceRepository;
	private $staffRepository;

	public function __construct(StaffRepository $staffRepo, lawyerRepository $lawyerRepo, PostRepository $postRepo, ServiceRepository $serviceRepo)
	{
	    $this->lawyerRepository = $lawyerRepo;
	    $this->postRepository = $postRepo;
	    $this->staffRepository = $staffRepo;
	    $this->serviceRepository = $serviceRepo;
	}

	 public function homepage(Request $request)
	{

		$posts = $this->postRepository->all();
		$lawyers = $this->lawyerRepository->all();
		$services = $this->serviceRepository->all();
		$staff = $this->staffRepository->all();

	    	return view('layouts.frontpage.homepage', compact('posts', 'lawyers', 'services', 'staff'));
	}


}

