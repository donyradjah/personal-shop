<?php

    namespace App\Http\Controllers;

    use App\Domain\Repositories\AdsRepository;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;

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


        /**
         * @param AdsRequest $request
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function store(AdsRequest $request)
        {
            return $this->ads->create($request->all());
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


        /**
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function destroy($id)
        {
            return $this->ads->delete($id);
        }
    }
