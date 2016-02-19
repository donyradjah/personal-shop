<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/18/16
     * Time: 12:04 PM
     */

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;


    class ProductRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'name'        => 'name',
            'price'       => 'price',
            'category_id' => 'category id',
            'type_id'     => 'type id',
            'merk_id'     => 'merk id',
            'kondisi'     => 'kondisi',
            'tags'        => 'tags',
            'berat'       => 'berat',
            'desc'        => 'desc',
            'stock'       => 'stock',

        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'name'        => 'required',
                'price'       => 'required|number',
                'category_id' => 'required',
                'type_id'     => 'required',
                'merk_id'     => 'required',
                'kondisi'     => 'required',
                'tags'        => '',
                'berat'       => 'required',
                'desc'        => '',
                'stock'       => '',
            ];
        }


        /**
         * @param $validator
         * @return mixed
         */
        public function validator($validator)
        {
            return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
        }


        /**
         * @param Validator $validator
         * @return array
         */
        protected function formatErrors(Validator $validator)
        {
            $message = $validator->errors();

            return [
                'success'    => false,
                'validation' => [
                    'name'        => $message->first('name'),
                    'price'       => $message->first('price'),
                    'category_id' => $message->first('category_id'),
                    'type_id'     => $message->first('type_id'),
                    'merk_id'     => $message->first('merk_id'),
                    'kondisi'     => $message->first('kondisi'),
                    'tags'        => $message->first('tags'),
                    'berat'       => $message->first('berat'),
                    'desc'        => $message->first('desc'),
                    'stock'       => $message->first('stock'),
                ],
            ];
        }
    }