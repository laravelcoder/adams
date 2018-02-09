<?php

namespace App\Http\Controllers;
use App\Models\Attorney;
use App\Models\Lawyer;
use App\Http\Requests\CreateLawyerRequest;
use App\Http\Requests\UpdateLawyerRequest;
use App\Repositories\LawyerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use View;



class AttorneysController extends Controller
{
        private $lawyerRepository;

    public function __construct(LawyerRepository $lawyerRepo)
    {
        $this->lawyerRepository = $lawyerRepo;
    }


    public function index(Request $request)
    {
        $this->lawyerRepository->pushCriteria(new RequestCriteria($request));
        $lawyers = $this->lawyerRepository->all();

        return view('attorneys.index', compact('lawyers'));
    }

    public function show($slug, Lawyer $lawyer)
    {
        $lawyer = Lawyer::first();

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('attorneys'));
        }

        return view('attorneys.show', compact('lawyer'));
    }
}
