<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\historico_cronogramaRepository;
use App\Http\Requests\Createhistorico_cronogramaRequest;
use App\Http\Requests\Updatehistorico_cronogramaRequest;

class historico_cronogramaController extends AppBaseController
{
    /** @var historico_cronogramaRepository $historicoCronogramaRepository*/
    private $historicoCronogramaRepository;

    public function __construct(historico_cronogramaRepository $historicoCronogramaRepo)
    {
        $this->historicoCronogramaRepository = $historicoCronogramaRepo;
    }

    /**
     * Display a listing of the historico_cronograma.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historicoCronogramas = $this->historicoCronogramaRepository->all();

        return view('historico_cronogramas.index')
            ->with('historicoCronogramas', $historicoCronogramas);
    }

    /**
     * Show the form for creating a new historico_cronograma.
     *
     * @return Response
     */
    public function create()
    {
        return view('historico_cronogramas.create');
    }

    /**
     * Store a newly created historico_cronograma in storage.
     *
     * @param Createhistorico_cronogramaRequest $request
     *
     * @return Response
     */
    public function store(Createhistorico_cronogramaRequest $request)
    {
        $input = $request->all();

        $historicoCronograma = $this->historicoCronogramaRepository->create($input);

        Flash::success('Historico Cronograma saved successfully.');

        return redirect(route('historicoCronogramas.index'));
    }

    /**
     * Display the specified historico_cronograma.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historicoCronograma = $this->historicoCronogramaRepository->find($id);

        if (empty($historicoCronograma)) {
            Flash::error('Historico Cronograma not found');

            return redirect(route('historicoCronogramas.index'));
        }

        return view('historico_cronogramas.show')->with('historicoCronograma', $historicoCronograma);
    }

    /**
     * Show the form for editing the specified historico_cronograma.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historicoCronograma = $this->historicoCronogramaRepository->find($id);

        if (empty($historicoCronograma)) {
            Flash::error('Historico Cronograma not found');

            return redirect(route('historicoCronogramas.index'));
        }

        return view('historico_cronogramas.edit')->with('historicoCronograma', $historicoCronograma);
    }

    /**
     * Update the specified historico_cronograma in storage.
     *
     * @param int $id
     * @param Updatehistorico_cronogramaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatehistorico_cronogramaRequest $request)
    {
        $historicoCronograma = $this->historicoCronogramaRepository->find($id);

        if (empty($historicoCronograma)) {
            Flash::error('Historico Cronograma not found');

            return redirect(route('historicoCronogramas.index'));
        }

        $historicoCronograma = $this->historicoCronogramaRepository->update($request->all(), $id);

        Flash::success('Historico Cronograma updated successfully.');

        return redirect(route('historicoCronogramas.index'));
    }

    /**
     * Remove the specified historico_cronograma from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historicoCronograma = $this->historicoCronogramaRepository->find($id);

        if (empty($historicoCronograma)) {
            Flash::error('Historico Cronograma not found');

            return redirect(route('historicoCronogramas.index'));
        }

        $this->historicoCronogramaRepository->delete($id);

        Flash::success('Historico Cronograma deleted successfully.');

        return redirect(route('historicoCronogramas.index'));
    }
}
