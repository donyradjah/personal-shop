<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/12/16
     * Time: 5:48 PM
     */

    namespace App\Domain\Entities;


    class Category extends Entities
    {
        /**
    * @var string
    */
        protected $table = 'category';

        /**
         * @var array
         */
        protected $fillable = ['category', 'type', 'child_id','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'category';

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
            return empty($q) ? $query : $query->where('category', 'LIKE', '%' . $search . '%');
        }
    }