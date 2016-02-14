<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/14/16
     * Time: 7:51 PM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Menu;

    class MenuRepository extends AbstractRepository implements Paginable, Crudable
    {
        public function __construct(Menu $menu)
        {
            $this->model = $menu;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $menu = parent::find($id, $columns);

            return $menu;
        }

        //function for store
        public function create(array $data)
        {

            try {
                $menu = parent::create([
                    'area_id' => e($data['area_id']),
                    'title'   => e($data['title']),
                    'menu'    => e($data['menu']),
                    'user_id' => '',
                ]);

                return $menu;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . MenuRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
        public function update($id, array $data)
        {

            try {
                $menu = parent::update($id, [
                    'area_id' => e($data['area_id']),
                    'title'   => e($data['title']),
                    'menu'    => e($data['menu']),
                    'user_id' => '',
                ]);

                return $menu;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . MenuRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }

        //function for delete
        public function delete($id)
        {
            try {
                $menu = parent::delete($id);

                return $menu;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . MenuRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }

        //function for getData
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $menu = parent::getByPageOrderBy($limit, $page, $column, 'name', $search, 'created_at');


            return $menu;
        }
    }