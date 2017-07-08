<?php

namespace App\Http\Controllers;

use App\Repositories\StaffRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TeamController extends Controller
{
	  public function index(Request $request)
	    {
	        $this->staffRepository->pushCriteria(new RequestCriteria($request));
	        $staff = $this->staffRepository->paginate(20);

	        return view('staff.index')->with('staff', $staff);
	    }


	   public function show($id, Staff $staff)
	    {
	        $staff = $this->staffRepository->findWithoutFail($id);

	        if (empty($staff)) {
	            Flash::error('Staff not found');

	            return redirect(route('staff.index'));
	        }

	        return view('staff.show')->with('staff', $staff);
	    }
}
