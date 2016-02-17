<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\ProductRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{

    /**
     * @var ProductRepository
     */
    protected $product;

    /**
     * @param ProductRepository $product
     */
    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->product->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param ProductRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(ProductRequest $request)
    {
        return $this->product->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->product->find($id);
    }


    /**
     * @param ProductRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(ProductRequest $request, $id)
    {
        return $this->product->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->product->delete($id);
    }
}
