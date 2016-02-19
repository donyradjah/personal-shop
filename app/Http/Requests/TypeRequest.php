<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/19/16
     * Time: 8:25 AM
     */

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;


    class TypeRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'category_id' => 'category id',
            'type'        => 'type',

        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'category_id' => 'required',
                'type'        => 'required',

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
                    'type'        => $message->first('type'),
                ],
            ];
        }
    }