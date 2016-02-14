<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/14/16
     * Time: 7:36 PM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Ads;

    class AdsRepository extends AbstractRepository implements Paginable, Crudable
    {
        public function __construct(Ads $ads)
        {
            $this->model = $ads;
        }

        //function for detail
        public function find($id, array $columns = ['*'])
        {

            $ads = parent::find($id, $columns);

            return $ads;
        }

        //function for store
        public function create(array $data)
        {

            try {
                $ads = parent::create([
                    'area_id' => e($data['area_id']),
                    'ads'     => e($data['ads']),
//                    'image'   => e($data['image'  ]),
                    'link'    => e($data['link']),
                    'user_id' => '',
                ]);

                return $ads;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . AdsRepository::class . ' method : create | ' . $e);

                return $this->createError();
            }
        }

        //function for update
        public function update($id, array $data)
        {

            try {
                $ads = parent::update($id, [
                    'area_id' => e($data['area_id']),
                    'ads'     => e($data['ads']),
//                    'image'   => e($data['image'  ]),
                    'link'    => e($data['link']),
                    'user_id' => '',
                ]);

                return $ads;

            } catch (\Exception $e) {
                //store errors to log
                Log::error('class :' . AdsRepository::class . ' method : update | ' . $e);

                return $this->createError();
            }
        }

        //function for delete
        public function delete($id)
        {
            try {
                $ads = parent::delete($id);

                return $ads;
            } catch (\Exception $e) {
                //store error to log
                Log::error('class :' . AdsRepository::class . ' method : delete | ' . $e);

                return $this->createError();
            }
        }

        //function for getData
        public function getByPage($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
        {
            $ads = parent::getByPageOrderBy($limit, $page, $column, 'ads', $search, 'created_at');


            return $ads;
        }
    }