<?php

namespace App\Http\Controllers;

use App\Repositories\LawyerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


class AttorneysController extends Controller
{
    public function index(Request $request)
    {

        $lawyers = $this->lawyerRepository->all();

        return view('lawyers.index')->with('lawyers', $lawyers);
    }

    public function show($id, Lawyer $lawyer)
    {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }

        return view('lawyers.show')->with('lawyer', $lawyer);
    }
}
