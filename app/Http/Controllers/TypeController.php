<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\TypeRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    
    protected $type;
    
    /**
     * TypeController constructor.
     */
    public function __construct(TypeRepository $type)
    {
        $this->type = $type;
    }

    public function index(Request $request)
    {
        return $this->type->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    public function store(TypeRequest $request)
    {
        return $this->type->create($request->all());
    }


    public function show($id)
    {
        return $this->type->find($id);
    }


    public function update(TypeRequest $request, $id)
    {
        return $this->type->update($id, $request->all());
    }


    public function destroy($id)
    {
        return $this->type->delete($id);
    }
    
}
