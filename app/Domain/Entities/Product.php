<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/12/16
     * Time: 5:34 PM
     */

    namespace App\Domain\Entities;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Class Product
     * @package App\Domain\Entities
     */
    class Product extends Model
    {
        /**
         * @var string
         */
        protected $table = 'product';

        /**
         * @var array
         */
        protected $fillable = ['name', 'price', 'category_id', 'type_id', 'merk_id','kondisi','tags','berat','see','desc','stock','sell','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'product';

        /**
         * @var array
         */
        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        protected $with = ['category','type','merk'];

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function category()
        {
            return $this->belongsTo('App\Domain\Entities\Category', 'category_id');
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function type()
        {
            return $this->belongsTo('App\Domain\Entities\Type', 'type_id');
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function merk()
        {
            return $this->belongsTo('App\Domain\Entities\Merk', 'merk_id');
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
            return empty($q) ? $query : $query->where('name', 'LIKE', '%' . $search . '%');
        }
    }