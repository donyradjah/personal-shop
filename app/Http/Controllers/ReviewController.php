<?php

namespace App\Http\Controllers;

use App\Domain\Repositories\ReviewRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReviewRequest;
/**
 * Class ReviewController
 * @package App\Http\Controllers
 */
class ReviewController extends Controller
{

    /**
     * @var ReviewRepository
     */
    protected $review;
    
    /**
     * ReviewController constructor.
     */
    public function __construct(ReviewRepository $review)
    {
        $this->review = $review;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return $this->review->getByPage(10, $request->input('page'), $column = ['*'], $key = '', $request->input('term'));
    }


    /**
     * @param ReviewRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(ReviewRequest $request)
    {
        return $this->review->create($request->all());
    }


    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->review->find($id);
    }


    /**
     * @param ReviewRequest $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update(ReviewRequest $request, $id)
    {
        return $this->review->update($id, $request->all());
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy($id)
    {
        return $this->review->delete($id);
    }
}
