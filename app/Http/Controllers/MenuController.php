<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\MenuRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MenuRequest;
/**
 * Class MenuController
 * @package App\Http\Controllers
 */
class MenuController extends Controller
{
    //

    /**
     * @var MenuRepository
     */
    protected $menu;

    /**
     * @param MenuRepository $menu
     */
    public function __construct(MenuRepository $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->menu->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param MenuRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(MenuRequest $request)
    {
        return $this->menu->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->menu->find($id);
    }


    /**
     * @param MenuRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(MenuRequest $request, $id)
    {
        return $this->menu->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->menu->delete($id);
    }
}
