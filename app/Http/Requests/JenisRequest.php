<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 3/27/16
     * Time: 7:28 AM
     */

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;

    class JenisRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'category_id' => 'category id',
            'jenis'     => 'jenis',

        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'category_id' => 'required',
                'jenis'     => 'required',

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
                    'category_id' => $message->first('category_id'),
                    'jenis'     => $message->first('merk'),
                ],
            ];
        }
    }