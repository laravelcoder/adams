<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLawyerRequest;
use App\Http\Requests\UpdateLawyerRequest;
use App\Repositories\LawyerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use View;
use App\Models\Lawyer;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;
use Prettus\Repository\Criteria\RequestCriteria;


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
        $name = $input['name'];
        $input['slug'] = Str::slug($name, '-');

        if ($request->image) {

            $destination = public_path('images/lawyers/');
            File::exists($destination) or File::makeDirectory($destination);

            $photoName = $request->image->getClientOriginalName();
            $photoName = strtolower($photoName);
            $request->image->move(public_path('images/lawyers'), $photoName);



            $input['image'] = $photoName;
        }

        if ($request->banner) {
            $photoName = time() . '.' . $request->banner->getClientOriginalExtension();
            $request->banner->move(public_path('images/lawyers/banners'), $photoName);

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

        $lawyer_image = '';
        $config = '';

       // foreach (($lawyer['image']) as $di):
            $lawyer_image.='"' . url('images/lawyers/' . $lawyer['image']) . '",';
            $config.='{"caption":"' . url('images/lawyers/' . $lawyer['image']) . '","url":"delete_image/' . $lawyer['image'] . '?_token=' . csrf_token() . '"},';
      //  endforeach;
        $image = '[' . rtrim($lawyer_image, ',') . ']';
        $image_config = '[' . rtrim($config, ',') . ']';

        return view('lawyers.edit', compact('lawyer','image', 'image_config'));
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
        $name = $data['name'];
        $data['slug'] = Str::slug($name, '-');



        // $lawyer
        if ($request->image) {

            File::delete(public_path() . 'images/lawyers/' . $request->image);
            $photoName = $request->file('image')->getClientOriginalName();
            $photoName = strtolower($photoName);
            //$photoName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move('images/lawyers', $photoName);

            $data['image'] = $photoName;

        } else

            unset($data['image']);

        if ($request->banner) {
            $photoName = time() . '.' . $request->banner->getClientOriginalExtension();
            $request->banner->move(public_path('images/lawyers/banners'), $photoName);

            $data['banner'] = $photoName;
        } else
            unset($data['banner']);

        $lawyer = $this->lawyerRepository->update($data, $id);



        //dd($request->all());

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

            foreach ($lawyer->image as $image):
                File::delete(public_path() . '/images/lawyers/' . $image);
               // File::delete(public_path() . '/images/banners/' . $image);
            endforeach;
            foreach ($lawyer->banner as $banner):
              //  File::delete(public_path() . '/images/lawyers/' . $image);
                File::delete(public_path() . '/images/banners/' . $banner);
            endforeach;

            return redirect(route('lawyers.index'));
        }

        $this->lawyerRepository->delete($id);

        Flash::success('Lawyer deleted successfully.');

        return redirect(route('lawyers.index'));
    }


    public function delete_image($id, $image) {
        $lawyer = $this->lawyerRepository->findWithoutFail($id);
        $old_image = $lawyer->image;
        if (array_search($image, $old_image) !== false) {
            File::delete(public_path() . '/images/lawyers/' . $image);
            unset($old_image[array_search($image, $old_image)]);
        }
        $data['image'] = serialize($old_image);
        $lawyer = $this->lawyerRepository->update($data, $id);
        return json_encode(1);
    }

    public function uploadimage() {
        return "{}";
    }
}
