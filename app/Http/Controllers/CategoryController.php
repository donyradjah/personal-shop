<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\CategoryRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{

    /**
     * @var CategoryRepository
     */
    protected $category;
    
    /**
     * CategoryController constructor.
     */
    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->category->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getByPageMain(Request $request)
    {
        return $this->category->getByPageMain(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getByPageChild($id,Request $request)
    {
        return $this->category->getByPageChild($id,10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param CategoryRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(CategoryRequest $request)
    {
        return $this->category->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->category->find($id);
    }


    /**
     * @param CategoryRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        return $this->category->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->category->delete($id);
    }
    
}
