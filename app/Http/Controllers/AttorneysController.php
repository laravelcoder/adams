<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Http\Requests\CreateLawyerRequest;
use App\Http\Requests\UpdateLawyerRequest;
use App\Repositories\LawyerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
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

    public function show($id, Lawyer $lawyer)
    {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }

        return view('attorneys.show')->with('lawyer', $lawyer);
    }
}
