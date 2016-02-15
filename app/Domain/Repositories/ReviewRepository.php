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

    class ReviewRepository extends AbstractRepository implements Paginable, Crudable
    {
        public function __construct(Review $review)
        {
            $this->model = $review;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $review = parent::find($id, $columns);

            return $review;
        }

        //function for store
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
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $review = parent::getByPageOrderBy($limit, $page, $column, 'review', $search, 'created_at');


            return $review;
        }
    }