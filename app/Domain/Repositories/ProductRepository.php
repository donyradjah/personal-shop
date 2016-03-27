<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 8:55 AM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Product;

    /**
     * Class ProductRepository
     * @package App\Domain\Repositories
     */
    class ProductRepository extends AbstractRepository implements Paginable, Crudable
    {

        /**
         * @param Product $product
         */
        public function __construct(Product $product)
        {
            $this->model = $product;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $product = parent::find($id, $columns);

            return $product;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function create(array $data)
        {

            try {
                $product = parent::create([
                    'name'        => e($data['name']),
                    'price'       => e($data['price']),
                    'category_id' => e($data['category_id']),
                    'type_id'     => e($data['type_id']),
                    'merk_id'     => e($data['merk_id']),
                    'kondisi'     => e($data['kondisi']),
                    'tags'        => e($data['tags']),
                    'berat'       => e($data['berat']),
                    'see'         => e($data['see']),
                    'desc'        => e($data['desc']),
                    'stock'       => e($data['stock']),
                    'sell'        => e($data['sell']),
                    'user_id'     => '',
                ]);

                return $product;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . ProductRepository::class . ' method : create | ' . $e);

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
                $product = parent::update($id, [
                    'name'        => e($data['name']),
                    'price'       => e($data['price']),
                    'category_id' => e($data['category_id']),
                    'type_id'     => e($data['type_id']),
                    'merk_id'     => e($data['merk_id']),
                    'kondisi'     => e($data['kondisi']),
                    'tags'        => e($data['tags']),
                    'berat'       => e($data['berat']),
                    'see'         => e($data['see']),
                    'desc'        => e($data['desc']),
                    'stock'       => e($data['stock']),
                    'sell'        => e($data['sell']),
                    'user_id'     => '',
                ]);

                return $product;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . ProductRepository::class . ' method : update | ' . $e);

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
                $product = parent::delete($id);

                return $product;
            } catch (\Exception $e) {
                //store error to log
                \Log::error('class :' . ProductRepository::class . ' method : delete | ' . $e);

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
            $product = parent::getByPageOrderBy($limit, $page, $column, 'name', $search, 'created_at');


            return $product;
        }


    }