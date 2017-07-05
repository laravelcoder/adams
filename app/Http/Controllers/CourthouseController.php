<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourthouseRequest;
use App\Http\Requests\UpdateCourthouseRequest;
use App\Repositories\CourthouseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CourthouseController extends AppBaseController
{
    /** @var  CourthouseRepository */
    private $courthouseRepository;

    public function __construct(CourthouseRepository $courthouseRepo)
    {
        $this->courthouseRepository = $courthouseRepo;
    }

    /**
     * Display a listing of the Courthouse.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courthouseRepository->pushCriteria(new RequestCriteria($request));
        $courthouses = $this->courthouseRepository->paginate(20);

        return view('courthouses.index')
            ->with('courthouses', $courthouses);
    }

    /**
     * Show the form for creating a new Courthouse.
     *
     * @return Response
     */
    public function create()
    {
        return view('courthouses.create');
    }

    /**
     * Store a newly created Courthouse in storage.
     *
     * @param CreateCourthouseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourthouseRequest $request)
    {
        $input = $request->all();

        $courthouse = $this->courthouseRepository->create($input);

        Flash::success('Courthouse saved successfully.');

        return redirect(route('courthouses.index'));
    }

    /**
     * Display the specified Courthouse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courthouse = $this->courthouseRepository->findWithoutFail($id);

        if (empty($courthouse)) {
            Flash::error('Courthouse not found');

            return redirect(route('courthouses.index'));
        }

        return view('courthouses.show')->with('courthouse', $courthouse);
    }

    /**
     * Show the form for editing the specified Courthouse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courthouse = $this->courthouseRepository->findWithoutFail($id);

        if (empty($courthouse)) {
            Flash::error('Courthouse not found');

            return redirect(route('courthouses.index'));
        }

        return view('courthouses.edit')->with('courthouse', $courthouse);
    }

    /**
     * Update the specified Courthouse in storage.
     *
     * @param  int              $id
     * @param UpdateCourthouseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourthouseRequest $request)
    {
        $courthouse = $this->courthouseRepository->findWithoutFail($id);

        if (empty($courthouse)) {
            Flash::error('Courthouse not found');

            return redirect(route('courthouses.index'));
        }

        $courthouse = $this->courthouseRepository->update($request->all(), $id);

        Flash::success('Courthouse updated successfully.');

        return redirect(route('courthouses.index'));
    }

    /**
     * Remove the specified Courthouse from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courthouse = $this->courthouseRepository->findWithoutFail($id);

        if (empty($courthouse)) {
            Flash::error('Courthouse not found');

            return redirect(route('courthouses.index'));
        }

        $this->courthouseRepository->delete($id);

        Flash::success('Courthouse deleted successfully.');

        return redirect(route('courthouses.index'));
    }
}
