<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\MerkRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MerkRequest;
/**
 * Class MerkController
 * @package App\Http\Controllers
 */
class MerkController extends Controller
{

    /**
     * @var MerkRepository
     */
    protected $merk;
    
    /**
     * MerkController constructor.
     */
    public function __construct(MerkRepository $merk)
    {
        $this->merk = $merk;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->merk->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }
    public function getByPageCategory($id,Request $request)
    {
        return $this->merk->getByPageCategory($id,10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param MerkRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(MerkRequest $request)
    {
        return $this->merk->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->merk->find($id);
    }


    /**
     * @param MerkRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(MerkRequest $request, $id)
    {
        return $this->merk->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->merk->delete($id);
    }
}
