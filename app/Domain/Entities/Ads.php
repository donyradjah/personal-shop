<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 5:56 AM
     */

    namespace App\Domain\Entities;


    class Ads extends Entities
    {
        /**
         * @var string
         */
        protected $table = 'ads';

        /**
         * @var array
         */
        protected $fillable = ['area_id', 'ads','image', 'link','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'ads';

        /**
         * @var array
         */
        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];




        /**
         * Where Like name
         *
         * @param $query
         * @param $search
         *
         * @return mixed
         */
        public function scopeLikeSearch($query, $search)
        {
            return empty($q) ? $query : $query->where('ads', 'LIKE', '%' . $search . '%');
        }
    }