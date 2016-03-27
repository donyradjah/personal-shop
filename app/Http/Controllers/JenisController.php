<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 3/27/16
     * Time: 7:30 AM
     */

    namespace App\Http\Controllers;


    use App\Domain\Repositories\JenisRepository;
    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Requests\JenisRequest;
    /**
     * Class JenisController
     * @package App\Http\Controllers
     */
    class JenisController extends Controller
    {

        /**
         * @var JenisRepository
         */
        protected $jenis;

        /**
         * JenisController constructor.
         */
        public function __construct(JenisRepository $jenis)
        {
            $this->jenis = $jenis;
        }

        /**
         * @param Request $request
         * @return mixed
         */
        public function index(Request $request)
        {
            return $this->jenis->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
        }
        public function getByPageCategory($id,Request $request)
        {
            return $this->jenis->getByPageCategory($id,10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
        }


        /**
         * @param JenisRequest $request
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function store(JenisRequest $request)
        {
            return $this->jenis->create($request->all());
        }


        /**
         * @param $id
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function show($id)
        {
            return $this->jenis->find($id);
        }


        /**
         * @param JenisRequest $request
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function update(JenisRequest $request, $id)
        {
            return $this->jenis->update($id, $request->all());
        }


        /**
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function destroy($id)
        {
            return $this->jenis->delete($id);
        }
    }
