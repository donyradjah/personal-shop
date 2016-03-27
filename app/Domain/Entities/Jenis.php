<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 5:59 AM
     */

    namespace App\Domain\Entities;

    use Illuminate\Database\Eloquent\Model;

    class Jenis extends Model
    {
        /**
         * @var string
         */
        protected $table = 'jenis';

        /**
         * @var array
         */
        protected $fillable = ['category_id', 'jenis','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'jenis';

        /**
         * @var array
         */
        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        protected $with = ['category'];

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
            return empty($q) ? $query : $query->where('jenis', 'LIKE', '%' . $search . '%');
        }
    }