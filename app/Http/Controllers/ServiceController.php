<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Repositories\ServiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Service;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use View;

class ServiceController extends AppBaseController {

    /** @var  ServiceRepository */
    private $serviceRepository;

    public function __construct(ServiceRepository $serviceRepo) {
        $this->serviceRepository = $serviceRepo;
        view()->share('type', 'service');
    }

    /**
     * Display a listing of the Service.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->serviceRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->serviceRepository->paginate(20);

        return view('services.index', compact('services'));
    }

    public function service(Service $service)
    {
        //GoogleTagManager::set('pageType', 'BlogPost');

        if ($service == null) {
            return Response::view('errors.missing', [], 404);
        }

        return view('services.service', compact('service'));
    }

    public function services(Request $request)
    {
        $this->serviceRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->serviceRepository->paginate(20);

        //GoogleTagManager::set('pageType', 'BlogPost');

        return view('services.services', compact('services'));
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return Response
     */
    public function create() {

        return view('services.create');
    }

    /**
     * Store a newly created Service in storage.
     *
     * @param CreateServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request) {


        $input = $request->all();

        $name = $input['service'];
        $input['slug'] = Str::slug($name, '-');

        if ($request->banner) {
            $destination = 'images/services/' . $input->service;
            //$photoName = time() . '.' . $request->banner->getClientOriginalExtension();

//            $destination = public_path('images/services/');
            File::exists($destination) or File::makeDirectory($destination);

            $photoName = $request->banner->getClientOriginalName();

            $request->banner->move(public_path('images/services'), $photoName);

            $input['banner'] = $photoName;
        }
        // dd( request()->all());


        $service = $this->serviceRepository->create($input);


        // dd($service);


        Flash::success('Service saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $service = $this->serviceRepository->findWithoutFail($id);


        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.service'));
        }

        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('service', $service);
    }

    /**
     * Update the specified Service in storage.
     *
     * @param  int              $id
     * @param UpdateServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $data = $request->all();
        if (empty($service->slug)){
            $name = $data['service'];
            $data['slug'] = Str::slug($name, '-');
        }

        if ($request->banner) {
            $newdir = $request->slug;
            $destination = 'images/services/' . $newdir;
            File::exists($destination) or File::makeDirectory($destination);

            $photoName = $request->banner->getClientOriginalName();
            $request->banner->move($destination, $photoName);

            $data['banner'] = $photoName;


        } else
            unset($data['banner']);

        $service = $this->serviceRepository->update($data, $id);

        $service->update(['slug' => Str::slug($service->service)]);


        Flash::success('Service updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Service deleted successfully.');

        return redirect(route('services.index'));
    }

}
