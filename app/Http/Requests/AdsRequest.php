<?php

    namespace App\Http\Requests;

    use App\Http\Requests\Request;
    use Illuminate\Contracts\Validation\Validator;

    /**
     * Class AdsRequest
     * @package App\Http\Requests
     */
    class AdsRequest extends Request
    {


        /**
         * @var array
         */
        protected $attrs = [
            'category' => 'category',
            'type'     => 'type',
            'child_id' => 'child id',
        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'category' => 'required',
                'type'     => 'required',
                'child_id' => 'required',
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
                    'category' => $message->first('category'),
                    'type'     => $message->first('type'),
                    'child_id' => $message->first('child_id'),
                ],
            ];
        }

    }
