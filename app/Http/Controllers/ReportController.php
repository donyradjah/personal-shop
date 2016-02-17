<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\ReportRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ReportController
 * @package App\Http\Controllers
 */
class ReportController extends Controller
{

    /**
     * @var ReportRepository
     */
    protected $report;
    
    /**
     * ReportController constructor.
     */
    public function __construct(ReportRepository $report)
    {
        $this->report = $report;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->report->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param ReportRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(ReportRequest $request)
    {
        return $this->report->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->report->find($id);
    }


    /**
     * @param ReportRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(ReportRequest $request, $id)
    {
        return $this->report->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->report->delete($id);
    }
}
