<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 6:25 AM
     */

    namespace App\Domain\Entities;


    class Type extends Entities
    {
        /**
         * @var string
         */
        protected $table = 'type';

        /**
         * @var array
         */
        protected $fillable = ['type', 'category_id','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'type';

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
        public function category()
        {
            return $this->belongsTo('App\Domain\Entities\Category', 'category_id');
        }


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
            return empty($q) ? $query : $query->where('type', 'LIKE', '%' . $search . '%');
        }
    }
    {

    }