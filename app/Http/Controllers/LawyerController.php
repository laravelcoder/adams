<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLawyerRequest;
use App\Http\Requests\UpdateLawyerRequest;
use App\Repositories\LawyerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use File;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LawyerController extends AppBaseController {

    /** @var  LawyerRepository */
    private $lawyerRepository;

    public function __construct(LawyerRepository $lawyerRepo) {
        $this->lawyerRepository = $lawyerRepo;
    }

    /**
     * Display a listing of the Lawyer.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->lawyerRepository->pushCriteria(new RequestCriteria($request));
        $lawyers = $this->lawyerRepository->paginate(20);

        return view('lawyers.index')
                        ->with('lawyers', $lawyers);
    }

    /**
     * Show the form for creating a new Lawyer.
     *
     * @return Response
     */
    public function create() {
        return view('lawyers.create');
    }

    /**
     * Store a newly created Lawyer in storage.
     *
     * @param CreateLawyerRequest $request
     *
     * @return Response
     */
    public function store(CreateLawyerRequest $request) {
        $input = $request->all();

        if ($request->image) {
            $photoName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images\\lawyers'), $photoName);

            $input['image'] = $photoName;
        }
        if ($request->banner) {
            $photoName = time() . '.' . $request->banner->getClientOriginalExtension();
            $request->banner->move(public_path('images\\lawyers'), $photoName);

            $input['banner'] = $photoName;
        }

        $lawyer = $this->lawyerRepository->create($input);





        Flash::success('Lawyer saved successfully.');

        return redirect(route('lawyers.index'));
    }

    /**
     * Display the specified Lawyer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }

        return view('lawyers.show')->with('lawyer', $lawyer);
    }

    /**
     * Show the form for editing the specified Lawyer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }



        return view('lawyers.edit')->with('lawyer', $lawyer);
    }

    /**
     * Update the specified Lawyer in storage.
     *
     * @param  int              $id
     * @param UpdateLawyerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLawyerRequest $request) {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);



        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }
        $data = $request->all();
        // $lawyer
        if ($request->image) {
            $photoName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images\\lawyers'), $photoName);

            $data['image'] = $photoName;
        } else
            unset($data['image']);

        if ($request->banner) {
            $photoName = time() . '.' . $request->banner->getClientOriginalExtension();
            $request->banner->move(public_path('images\\lawyers'), $photoName);

            $data['banner'] = $photoName;
        } else
            unset($data['banner']);

        $lawyer = $this->lawyerRepository->update($data, $id);



//        /dd($request->all());

        Flash::success('Lawyer updated successfully.');

        return redirect(route('lawyers.index'));
    }

    /**
     * Remove the specified Lawyer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);

        if (empty($lawyer)) {
            Flash::error('Lawyer not found');

            return redirect(route('lawyers.index'));
        }

        $this->lawyerRepository->delete($id);

        Flash::success('Lawyer deleted successfully.');

        return redirect(route('lawyers.index'));
    }

}
