<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 6:21 AM
     */

    namespace App\Domain\Entities;

    use Illuminate\Database\Eloquent\Model;

    class Review extends Model
    {
        /**
         * @var string
         */
        protected $table = 'review';

        /**
         * @var array
         */
        protected $fillable = ['name', 'review', 'product_id', 'rating'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'review';

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
        return $this->belongsTo('App\Domain\Entities\Product', 'product_id');
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
        return empty($q) ? $query : $query->where('review', 'LIKE', '%' . $search . '%');
    }
    }