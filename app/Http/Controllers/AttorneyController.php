<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttorneyRequest;
use App\Http\Requests\UpdateAttorneyRequest;
use App\Repositories\AttorneyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AttorneyController extends AppBaseController
{
    /** @var  AttorneyRepository */
    private $attorneyRepository;

    public function __construct(AttorneyRepository $attorneyRepo)
    {
        $this->attorneyRepository = $attorneyRepo;
    }

    /**
     * Display a listing of the Attorney.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->attorneyRepository->pushCriteria(new RequestCriteria($request));
        $attorneys = $this->attorneyRepository->paginate(20);

        return view('attorneys.index')
            ->with('attorneys', $attorneys);
    }

    /**
     * Show the form for creating a new Attorney.
     *
     * @return Response
     */
    public function create()
    {
        return view('attorneys.create');
    }

    /**
     * Store a newly created Attorney in storage.
     *
     * @param CreateAttorneyRequest $request
     *
     * @return Response
     */
    public function store(CreateAttorneyRequest $request)
    {
        $input = $request->all();

        $attorney = $this->attorneyRepository->create($input);

        Flash::success('Attorney saved successfully.');

        return redirect(route('attorneys.index'));
    }

    /**
     * Display the specified Attorney.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attorney = $this->attorneyRepository->findWithoutFail($id);

        if (empty($attorney)) {
            Flash::error('Attorney not found');

            return redirect(route('attorneys.index'));
        }

        return view('attorneys.show')->with('attorney', $attorney);
    }

    /**
     * Show the form for editing the specified Attorney.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attorney = $this->attorneyRepository->findWithoutFail($id);

        if (empty($attorney)) {
            Flash::error('Attorney not found');

            return redirect(route('attorneys.index'));
        }

        return view('attorneys.edit')->with('attorney', $attorney);
    }

    /**
     * Update the specified Attorney in storage.
     *
     * @param  int              $id
     * @param UpdateAttorneyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttorneyRequest $request)
    {
        $attorney = $this->attorneyRepository->findWithoutFail($id);

        if (empty($attorney)) {
            Flash::error('Attorney not found');

            return redirect(route('attorneys.index'));
        }

        $attorney = $this->attorneyRepository->update($request->all(), $id);

        Flash::success('Attorney updated successfully.');

        return redirect(route('attorneys.index'));
    }

    /**
     * Remove the specified Attorney from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attorney = $this->attorneyRepository->findWithoutFail($id);

        if (empty($attorney)) {
            Flash::error('Attorney not found');

            return redirect(route('attorneys.index'));
        }

        $this->attorneyRepository->delete($id);

        Flash::success('Attorney deleted successfully.');

        return redirect(route('attorneys.index'));
    }
}
