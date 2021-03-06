<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/18/16
     * Time: 11:43 AM
     */

    namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\Validator;

    class MerkRequest extends Request
    {
        /**
         * @var array
         */
        protected $attrs = [
            'jenis_id' => 'jenis id',
            'merk'        => 'merk',

        ];

        /**
         * @return array
         */
        public function rules()
        {
            return [
                'jenis_id' => 'required',
                'merk'        => 'required',

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
                    'jenis_id' => $message->first('jenis_id'),
                    'merk'        => $message->first('merk'),
                ],
            ];
        }
    }