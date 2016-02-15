<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/15/16
     * Time: 8:05 AM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Merk;

    class MerkRepository extends AbstractRepository implements Paginable, Crudable
    {
        public function __construct(Merk $merk)
        {
            $this->model = $merk;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $merk = parent::find($id, $columns);

            return $merk;
        }

        //function for store
        public function create(array $data)
        {

            try {
                $merk = parent::create([
                    'category_id' => e($data['category_id']),
                    'merk'        => e($data['merk']),
                    'user_id'     => '',
                ]);

                return $merk;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . MerkRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
        public function update($id, array $data)
        {

            try {
                $merk = parent::update($id, [
                    'category_id' => e($data['category_id']),
                    'merk'        => e($data['merk']),
                    'user_id'     => '',
                ]);

                return $merk;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . MerkRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }

        //function for delete
        public function delete($id)
        {
            try {
                $merk = parent::delete($id);

                return $merk;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . MerkRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }

        //function for getData
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $merk = parent::getByPageOrderBy($limit, $page, $column, 'merk', $search, 'created_at');


            return $merk;
        }
    }