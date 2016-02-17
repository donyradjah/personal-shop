<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/15/16
     * Time: 8:17 AM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Review;

    /**
     * Class ReviewRepository
     * @package App\Domain\Repositories
     */
    class ReviewRepository extends AbstractRepository implements Paginable, Crudable
    {
        /**
         * @param Review $review
         */
        public function __construct(Review $review)
        {
            $this->model = $review;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $review = parent::find($id, $columns);

            return $review;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function create(array $data)
        {

            try {
                $review = parent::create([
                    'name'       => e($data['name']),
                    'review'     => e($data['review']),
                    'product_id' => e($data['product_id']),
                    'rating'     => e($data['rating']),
                    'user_id'    => '',
                ]);

                return $review;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . ReviewRepository::class . ' method : create | ' . $e);

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
                $review = parent::update($id, [
                    'name'       => e($data['name']),
                    'review'     => e($data['review']),
                    'product_id' => e($data['product_id']),
                    'rating'     => e($data['rating']),
                    'user_id'    => '',
                ]);

                return $review;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . ReviewRepository::class . ' method : update | ' . $e);

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
                $review = parent::delete($id);

                return $review;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . ReviewRepository::class . ' method : delete | ' . $e);

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
            $review = parent::getByPageOrderBy($limit, $page, $column, 'review', $search, 'created_at');


            return $review;
        }
    }