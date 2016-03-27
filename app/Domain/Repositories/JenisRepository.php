<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 3/27/16
     * Time: 7:18 AM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Jenis;

    class JenisRepository extends AbstractRepository implements Paginable,Crudable
    {

        public function __construct(Jenis $jenis)
        {
            $this->model = $jenis;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $jenis = parent::find($id, $columns);

            return $jenis;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function create(array $data)
        {

            try {
                $jenis = parent::create([
                    'jenis_id' => e($data['jenis_id']),
                    'jenis'        => e($data['jenis']),
                    'user_id'     => '',
                ]);

                return $jenis;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . JenisRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
        /**
         * @param $id
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function update($id, array $data)
        {

            try {
                $jenis = parent::update($id, [
                    'jenis_id' => e($data['jenis_id']),
                    'jenis'        => e($data['jenis']),
                    'user_id'     => '',
                ]);

                return $jenis;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . JenisRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }

        //function for delete
        /**
         * @param $id
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function delete($id)
        {
            try {
                $jenis = parent::delete($id);

                return $jenis;
            } catch (\Exception $e) {
                //store error to log
                \Log::error('class :' . JenisRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }

        //function for getData
        /**
         * @param int $limit
         * @param int $page
         * @param array $column
         * @param string $field
         * @param string $search
         * @return mixed
         */
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $jenis = parent::getByPageOrderBy($limit, $page, $column, 'jenis', $search, 'created_at');


            return $jenis;
        }

        public function getByPageCategory($id,$limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $category = $this->model
                ->where('jenis', 'like', '%' . $search . '%')
                ->where('category_id',$id)
                ->orderBy(\DB::raw('ABS(jenis)'))
                ->paginate($limit)
                ->toArray();


            return $category;
        }
    }