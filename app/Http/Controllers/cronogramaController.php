<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\cronogramaRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatecronogramaRequest;
use App\Http\Requests\UpdatecronogramaRequest;

class cronogramaController extends AppBaseController
{
    /** @var cronogramaRepository $cronogramaRepository*/
    private $cronogramaRepository;

    public function __construct(cronogramaRepository $cronogramaRepo)
    {
        $this->cronogramaRepository = $cronogramaRepo;
    }

    /**
     * Display a listing of the cronograma.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cronogramas = $this->cronogramaRepository->all();

        return view('cronogramas.index')
            ->with('cronogramas', $cronogramas);
    }

    /**
     * Show the form for creating a new cronograma.
     *
     * @return Response
     */
    public function create()
    {
        return view('cronogramas.create');
    }

    /**
     * Store a newly created cronograma in storage.
     *
     * @param CreatecronogramaRequest $request
     *
     * @return Response
     */
    public function store(CreatecronogramaRequest $request)
    {
        $input = $request->all();

        $cronograma = $this->cronogramaRepository->create($input);

        Flash::success('Cronograma saved successfully.');

        return redirect(route('cronogramas.index'));
    }

    /**
     * Display the specified cronograma.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cronograma = $this->cronogramaRepository->find($id);

        if (empty($cronograma)) {
            Flash::error('Cronograma not found');

            return redirect(route('cronogramas.index'));
        }

        return view('cronogramas.show')->with('cronograma', $cronograma);
    }

    /**
     * Show the form for editing the specified cronograma.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cronograma = $this->cronogramaRepository->find($id);

        if (empty($cronograma)) {
            Flash::error('Cronograma not found');

            return redirect(route('cronogramas.index'));
        }

        return view('cronogramas.edit')->with('cronograma', $cronograma);
    }

    /**
     * Update the specified cronograma in storage.
     *
     * @param int $id
     * @param UpdatecronogramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecronogramaRequest $request)
    {
        $cronograma = $this->cronogramaRepository->find($id);

        if (empty($cronograma)) {
            Flash::error('Cronograma not found');

            return redirect(route('cronogramas.index'));
        }

        $cronograma = $this->cronogramaRepository->update($request->all(), $id);

        Flash::success('Cronograma updated successfully.');

        return redirect(route('cronogramas.index'));
    }

    /**
     * Remove the specified cronograma from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cronograma = $this->cronogramaRepository->find($id);

        if (empty($cronograma)) {
            Flash::error('Cronograma not found');

            return redirect(route('cronogramas.index'));
        }

        $this->cronogramaRepository->delete($id);

        Flash::success('Cronograma deleted successfully.');

        return redirect(route('cronogramas.index'));
    }
}
