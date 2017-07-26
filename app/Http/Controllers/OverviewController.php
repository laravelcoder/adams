<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOverviewRequest;
use App\Http\Requests\UpdateOverviewRequest;
use App\Repositories\OverviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OverviewController extends AppBaseController
{
    /** @var  OverviewRepository */
    private $overviewRepository;

    public function __construct(OverviewRepository $overviewRepo)
    {
        $this->overviewRepository = $overviewRepo;
    }

    /**
     * Display a listing of the Overview.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->overviewRepository->pushCriteria(new RequestCriteria($request));
        $overviews = $this->overviewRepository->paginate(20);

        return view('overviews.index')
            ->with('overviews', $overviews);
    }

    /**
     * Show the form for creating a new Overview.
     *
     * @return Response
     */
    public function create()
    {
        return view('overviews.create');
    }

    /**
     * Store a newly created Overview in storage.
     *
     * @param CreateOverviewRequest $request
     *
     * @return Response
     */
    public function store(CreateOverviewRequest $request)
    {
        $input = $request->all();

        $overview = $this->overviewRepository->create($input);

        Flash::success('Overview saved successfully.');

        return redirect(route('overviews.index'));
    }

    /**
     * Display the specified Overview.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $overview = $this->overviewRepository->findWithoutFail($id);

        if (empty($overview)) {
            Flash::error('Overview not found');

            return redirect(route('overviews.index'));
        }

        return view('overviews.show')->with('overview', $overview);
    }

    /**
     * Show the form for editing the specified Overview.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $overview = $this->overviewRepository->findWithoutFail($id);

        if (empty($overview)) {
            Flash::error('Overview not found');

            return redirect(route('overviews.index'));
        }

        return view('overviews.edit')->with('overview', $overview);
    }

    /**
     * Update the specified Overview in storage.
     *
     * @param  int              $id
     * @param UpdateOverviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOverviewRequest $request)
    {
        $overview = $this->overviewRepository->findWithoutFail($id);

        if (empty($overview)) {
            Flash::error('Overview not found');

            return redirect(route('overviews.index'));
        }

        $overview = $this->overviewRepository->update($request->all(), $id);

        Flash::success('Overview updated successfully.');

        return redirect(route('overviews.index'));
    }

    /**
     * Remove the specified Overview from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $overview = $this->overviewRepository->findWithoutFail($id);

        if (empty($overview)) {
            Flash::error('Overview not found');

            return redirect(route('overviews.index'));
        }

        $this->overviewRepository->delete($id);

        Flash::success('Overview deleted successfully.');

        return redirect(route('overviews.index'));
    }
}
