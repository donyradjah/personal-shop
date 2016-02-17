<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\MerkRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MerkController extends Controller
{

    protected $merk;
    
    /**
     * MerkController constructor.
     */
    public function __construct(MerkRepository $merk)
    {
        $this->merk = $merk;
    }

    public function index(Request $request)
    {
        return $this->merk->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    public function store(MerkRequest $request)
    {
        return $this->merk->create($request->all());
    }


    public function show($id)
    {
        return $this->merk->find($id);
    }


    public function update(MerkRequest $request, $id)
    {
        return $this->merk->update($id, $request->all());
    }


    public function destroy($id)
    {
        return $this->merk->delete($id);
    }
}
