<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/15/16
     * Time: 5:02 PM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Type;

    class TypeRepository extends AbstractRepository implements Paginable, Crudable
    {
        public function __construct(Type $type)
        {
            $this->model = $type;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $type = parent::find($id, $columns);

            return $type;
        }

        //function for store
        public function create(array $data)
        {

            try {
                $type = parent::create([
                    'type'        => e($data['type']),
                    'category_id' => e($data['category_id']),
                    'user_id'     => '',
                ]);

                return $type;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . TypeRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
        public function update($id, array $data)
        {

            try {
                $type = parent::update($id, [
                    'type'        => e($data['type']),
                    'category_id' => e($data['category_id']),
                    'user_id'     => '',
                ]);

                return $type;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . TypeRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }

        //function for delete
        public function delete($id)
        {
            try {
                $type = parent::delete($id);

                return $type;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . TypeRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }

        //function for getData
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $type = parent::getByPageOrderBy($limit, $page, $column, 'type', $search, 'created_at');


            return $type;
        }
    }