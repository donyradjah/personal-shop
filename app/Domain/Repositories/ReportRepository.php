<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/15/16
     * Time: 8:09 AM
     */

    namespace App\Domain\Repositories;


    use App\Domain\Contracts\Crudable;
    use App\Domain\Contracts\Paginable;
    use App\Domain\Entities\Report;

    /**
     * Class ReportRepository
     * @package App\Domain\Repositories
     */
    class ReportRepository extends AbstractRepository implements Paginable, Crudable
    {
        /**
         * @param Report $report
         */
        public function __construct(Report $report)
        {
            $this->model = $report;
        }

        //function for detail
        /**
         * @param int $id
         * @param array $columns
         * @return \Illuminate\Database\Eloquent\Model
         */
        public function find($id, array $columns = ['*'])
        {

            $report = parent::find($id, $columns);

            return $report;
        }

        //function for store
        /**
         * @param array $data
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function create(array $data)
        {

            try {
                $report = parent::create([
                    'date'       => e($data['date']),
                    'month'      => e($data['month']),
                    'year'       => e($data['year']),
                    'income'     => e($data['income']),
                    'saldo'      => e($data['saldo']),
                    'total'      => e($data['total']),
                    'product_id' => e($data['product_id']),
                ]);

                return $report;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . ReportRepository::class . ' method : create | ' . $e);

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
                $report = parent::update($id, [
                    'date'       => e($data['date']),
                    'month'      => e($data['month']),
                    'year'       => e($data['year']),
                    'income'     => e($data['income']),
                    'saldo'      => e($data['saldo']),
                    'total'      => e($data['total']),
                    'product_id' => e($data['product_id']),
                ]);

                return $report;

            } catch (\Exception $e) {
                //store errors to log
                \Log::error('class :' . ReportRepository::class . ' method : update | ' . $e);

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
                $report = parent::delete($id);

                return $report;
            } catch (\Exception $e) {
                //store error to log
                \Log::error('class :' . ReportRepository::class . ' method : delete | ' . $e);

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
            $report = parent::getByPageOrderBy($limit, $page, $column, 'date', $search, 'created_at');


            return $report;
        }
    }