<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/13/16
     * Time: 5:59 AM
     */

    namespace App\Domain\Entities;

    use Illuminate\Database\Eloquent\Model;

    class Merk extends Model
    {
        /**
         * @var string
         */
        protected $table = 'merk';

        /**
         * @var array
         */
        protected $fillable = ['jenis_id', 'merk','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'merk';

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
            return $this->belongsTo('App\Domain\Entities\Jenis', 'jenis_id');
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
            return empty($q) ? $query : $query->where('merk', 'LIKE', '%' . $search . '%');
        }
    }