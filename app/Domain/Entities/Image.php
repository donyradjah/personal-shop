<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 3/6/16
     * Time: 11:03 PM
     */

    namespace App\Domain\Entities;


    use Illuminate\Database\Eloquent\Model;

    class Image extends Model
    {
        /**
         * @var string
         */
        protected $table = 'image';

        /**
         * @var array
         */
        protected $fillable = ['product_id', 'image','user_id'];

        /**
         * @var string
         */
        protected $primaryKey = 'id';

        /**
         * @var string
         */
        public static $tags = 'image';

        /**
         * @var array
         */
        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
        ];

    }