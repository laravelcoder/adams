<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourtdateRequest;
use App\Http\Requests\UpdateCourtdateRequest;
use App\Repositories\CourtdateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CourtdateController extends AppBaseController
{
    /** @var  CourtdateRepository */
    private $courtdateRepository;

    public function __construct(CourtdateRepository $courtdateRepo)
    {
        $this->courtdateRepository = $courtdateRepo;
    }

    /**
     * Display a listing of the Courtdate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->courtdateRepository->pushCriteria(new RequestCriteria($request));
        $courtdates = $this->courtdateRepository->paginate(20);

        return view('courtdates.index')
            ->with('courtdates', $courtdates);
    }

    /**
     * Show the form for creating a new Courtdate.
     *
     * @return Response
     */
    public function create()
    {
        return view('courtdates.create');
    }

    /**
     * Store a newly created Courtdate in storage.
     *
     * @param CreateCourtdateRequest $request
     *
     * @return Response
     */
    public function store(CreateCourtdateRequest $request)
    {
        $input = $request->all();

        $courtdate = $this->courtdateRepository->create($input);

        Flash::success('Courtdate saved successfully.');

        return redirect(route('courtdates.index'));
    }

    /**
     * Display the specified Courtdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $courtdate = $this->courtdateRepository->findWithoutFail($id);

        if (empty($courtdate)) {
            Flash::error('Courtdate not found');

            return redirect(route('courtdates.index'));
        }

        return view('courtdates.show')->with('courtdate', $courtdate);
    }

    /**
     * Show the form for editing the specified Courtdate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $courtdate = $this->courtdateRepository->findWithoutFail($id);

        if (empty($courtdate)) {
            Flash::error('Courtdate not found');

            return redirect(route('courtdates.index'));
        }

        return view('courtdates.edit')->with('courtdate', $courtdate);
    }

    /**
     * Update the specified Courtdate in storage.
     *
     * @param  int              $id
     * @param UpdateCourtdateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourtdateRequest $request)
    {
        $courtdate = $this->courtdateRepository->findWithoutFail($id);

        if (empty($courtdate)) {
            Flash::error('Courtdate not found');

            return redirect(route('courtdates.index'));
        }

        $courtdate = $this->courtdateRepository->update($request->all(), $id);

        Flash::success('Courtdate updated successfully.');

        return redirect(route('courtdates.index'));
    }

    /**
     * Remove the specified Courtdate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $courtdate = $this->courtdateRepository->findWithoutFail($id);

        if (empty($courtdate)) {
            Flash::error('Courtdate not found');

            return redirect(route('courtdates.index'));
        }

        $this->courtdateRepository->delete($id);

        Flash::success('Courtdate deleted successfully.');

        return redirect(route('courtdates.index'));
    }
}
