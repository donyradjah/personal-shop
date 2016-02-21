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
            'area_id' => 'area id',
            'ads'     => 'ads',
            'link'    => 'link',
        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'area_id' => 'required',
                'ads'     => 'required',
                'link'    => 'required',
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
                    'ads'     => $message->first('ads'),
                    'link'    => $message->first('link'),
                ],
            ];
        }

    }
