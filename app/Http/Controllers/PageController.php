<?php
    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 2/20/16
     * Time: 9:12 PM
     */

    namespace App\Http\Controllers;


    /**
     * Class PageController
     * @package App\Http\Controllers
     */
    /**
     * Class PageController
     * @package App\Http\Controllers
     */
    /**
     * Class PageController
     * @package App\Http\Controllers
     */
    class PageController extends Controller
    {

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function index()
        {
            return view('partials.content');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function ads()
        {
            return view('partials.ads.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function categoryMain()
        {
            return view('partials.category.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function categoryChild()
        {
            return view('partials.category.indexChild');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function menu()
        {
            return view('partials.menu.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function merk()
        {
            return view('partials.merk.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function product()
        {
            return view('partials.product.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function report()
        {
            return view('partials.product.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function review()
        {
            return view('partials.review.index');
        }


        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function type()
        {
            return view('partials.type.index');
        }

        /**
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function jenis()
        {
            return view('partials.jenis.index');
        }

    }