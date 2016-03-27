<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/12/16
     * Time: 5:48 PM
     */

    namespace App\Domain\Entities;

    use Illuminate\Database\Eloquent\Model;

    class Category extends Model
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

protected $with= ['main'];

        public function main(){
            return $this->belongsTo('App\Domain\Entities\Category', 'child_id');

        }
        public function main2(){
            return $this->hasMany('App\Domain\Entities\Category', 'child_id');

        }
        public function jenis(){
            return $this->hasMany('App\Domain\Entities\Jenis','category_id');

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
            return empty($q) ? $query : $query->where('category', 'LIKE', '%' . $search . '%');
        }
    }