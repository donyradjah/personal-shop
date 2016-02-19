<?php

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;

    /**
     * Class MenuRequest
     * @package App\Http\Requests
     */
    class MenuRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'area_id' => 'area id',
            'title'   => 'title',
            'menu'    => 'menu',
        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'area_id' => 'required',
                'title'   => 'required',
                'menu'    => 'required',
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
                    'area_id' => $message->first('area_id'),
                    'title'   => $message->first('title'),
                    'menu'    => $message->first('menu'),
                ],
            ];
        }
    }
