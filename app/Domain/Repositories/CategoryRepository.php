<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/14/16
     * Time: 7:46 PM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Category;

    /**
     * Class CategoryRepository
     * @package App\Domain\Repositories
     */
    class CategoryRepository extends AbstractRepository implements Paginable, Crudable
    {
        /**
         * @param Category $category
         */
        public function __construct(Category $category)
        {
            $this->model = $category;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $category = parent::find($id, $columns);

            return $category;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function create(array $data)
        {

            try {
                $category = parent::create([
                    'category' => e($data['category']),
                    'type'     => e($data['type']),
                    'child_id' => e($data['child_id']),
                    'user_id' => '',
                ]);

                return $category;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . CategoryRepository::class . ' method : create | ' . $e);

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
                $category = parent::update($id, [
                    'category' => e($data['category']),
                    'type'     => e($data['type']),
                    'child_id' => e($data['child_id']),
                    'user_id' => '',
                ]);

                return $category;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . CategoryRepository::class . ' method : update | ' . $e);

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
                $category = parent::delete($id);

                return $category;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . CategoryRepository::class . ' method : delete | ' . $e);

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
            $category = parent::getByPageOrderBy($limit, $page, $column, 'category', $search, 'created_at');


            return $category;
        }
    }