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

    class ProductRepository extends AbstractRepository implements Paginable, Crudable
    {

        public function __construct(Product $product)
        {
            $this->model = $product;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $product = parent::find($id, $columns);

            return $product;
        }

        //function for store
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
                Log::error('class :' . ProductRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
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
                Log::error('class :' . ProductRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }
        //function for delete
        public function delete($id)
        {
            try {
                $product = parent::delete($id);

                return $product;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . ProductRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }
        //function for getData
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $product = parent::getByPageOrderBy($limit, $page, $column, 'name', $search, 'created_at');


            return $product;
        }


    }