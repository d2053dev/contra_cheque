<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RescisaoCreateRequest;
use App\Http\Requests\RescisaoUpdateRequest;
use App\Repositories\RescisaoRepository;
use App\Validators\RescisaoValidator;

/**
 * Class RescisaosController.
 *
 * @package namespace App\Http\Controllers;
 */
class RescisaosController extends Controller
{
    /**
     * @var RescisaoRepository
     */
    protected $repository;

    /**
     * @var RescisaoValidator
     */
    protected $validator;

    /**
     * RescisaosController constructor.
     *
     * @param RescisaoRepository $repository
     * @param RescisaoValidator $validator
     */
    public function __construct(RescisaoRepository $repository, RescisaoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $rescisaos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $rescisaos,
            ]);
        }

        return view('rescisaos.index', compact('rescisaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RescisaoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(RescisaoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $rescisao = $this->repository->create($request->all());

            $response = [
                'message' => 'Rescisao created.',
                'data'    => $rescisao->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rescisao = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $rescisao,
            ]);
        }

        return view('rescisaos.show', compact('rescisao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rescisao = $this->repository->find($id);

        return view('rescisaos.edit', compact('rescisao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RescisaoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(RescisaoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $rescisao = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Rescisao updated.',
                'data'    => $rescisao->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Rescisao deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Rescisao deleted.');
    }
}
