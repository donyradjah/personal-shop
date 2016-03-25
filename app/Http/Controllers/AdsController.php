<?php

    namespace App\Http\Controllers;

    use App\Domain\Repositories\AdsRepository;
    use Illuminate\Http\Request;

    use App\Http\Requests\AdsRequest;
    use Intervention\Image\Facades\Image;

    /**
     * Class AdsController
     * @package App\Http\Controllers
     */
    class AdsController extends Controller
    {
        /**
         * @var AdsRepository
         */
        protected $ads;

        /**
         * @param AdsRepository $ads
         */
        public function __construct(AdsRepository $ads)
        {
            $this->ads = $ads;
        }

        /**
         * @param Request $request
         * @return mixed
         */
        public function index(Request $request)
        {
            return $this->ads->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
        }

        public function uploadImage($id,Request $request)
        {

            $image = $this->ads->find($id)->image;
            \File::delete(public_path() . "/image/ads/" . $image);

            $file = $request->file('image_ads');
            $original_name1 = $file->getClientOriginalName();
            $arr1 = str_replace(' ', '', $original_name1);


            $fileName = "ads".date('dmYhi'). $request->ads  . $arr1;


            $path = public_path('image/ads/' . $fileName);


            Image::make($file->getRealPath())->resize(800, 600)->save($path);

        }

        /**
         * @param AdsRequest $request
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function store(AdsRequest $request)
        {

            $file = $request->file('image_ads');
            $original_name1 = $file->getClientOriginalName();
            $arr1 = str_replace(' ', '', $original_name1);


            $fileName = "ads".date('dmYhi'). $request->ads  . $arr1;

            $path = public_path('image/ads/' . $fileName);


            Image::make($file->getRealPath())->resize(800, 600)->save($path);


            return $this->ads->createUpload($fileName, $request->all());
        }


        /**
         * @param $id
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function show($id)
        {
            return $this->ads->find($id);
        }


        /**
         * @param AdsRequest $request
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function update(AdsRequest $request, $id)
        {

            return $this->ads->update($id, $request->all());
        }

        public function updateUpload(AdsRequest $request, $id)
        {

            return $this->ads->updateUpload($request->image,$id, $request->all());
        }


        /**
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function destroy($id)
        {
            return $this->ads->delete($id);
        }
    }
