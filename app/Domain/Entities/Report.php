<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 6:18 AM
     */

    namespace App\Domain\Entities;


    class Report extends Entities
    {
        /**
         * @var string
         */
        protected $table = 'report';

        /**
         * @var array
         */
        protected $fillable = ['date', 'month', 'year', 'income', 'saldo','total','product_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'report';

        /**
         * @var array
         */
        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];


        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function product()
        {
            return $this->belongsTo('App\Domain\Entities\Merk', 'product_id');
        }

        /**
         * Where Like name
         *
         * @param $query
         * @param $search
         *
         * @return mixed
         */

    }