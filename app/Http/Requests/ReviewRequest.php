<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/19/16
     * Time: 8:12 AM
     */

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;
    class ReviewRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'name'       => 'nama',
            'review'     => 'review',
            'product_id' => 'id product',
            'rating'     => 'rating',

        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'name'       => 'required',
                'review'     => 'required',
                'product_id' => 'required',
                'rating'     => 'required',
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
                    'name'       => $message->first('name'),
                    'review'     => $message->first('review'),
                    'product_id' => $message->first('product_id'),
                    'rating'     => $message->first('rating'),
                ],
            ];
        }
    }