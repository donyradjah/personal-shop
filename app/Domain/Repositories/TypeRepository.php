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

    /**
     * Class TypeRepository
     * @package App\Domain\Repositories
     */
    class TypeRepository extends AbstractRepository implements Paginable, Crudable
    {
        /**
         * @param Type $type
         */
        public function __construct(Type $type)
        {
            $this->model = $type;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $type = parent::find($id, $columns);

            return $type;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
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
                \Log::error('class :' . TypeRepository::class . ' method : create | ' . $e);

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
                $type = parent::update($id, [
                    'type'        => e($data['type']),
                    'category_id' => e($data['category_id']),
                    'user_id'     => '',
                ]);

                return $type;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . TypeRepository::class . ' method : update | ' . $e);

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
                $type = parent::delete($id);

                return $type;
            } catch (\Exception $e) {
                //store error to log
                \Log::error('class :' . TypeRepository::class . ' method : delete | ' . $e);

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
            $type = parent::getByPageOrderBy($limit, $page, $column, 'type', $search, 'created_at');


            return $type;
        }
    }