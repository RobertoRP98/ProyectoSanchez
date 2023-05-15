<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\ejecucionRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateejecucionRequest;
use App\Http\Requests\UpdateejecucionRequest;

class ejecucionController extends AppBaseController
{
    /** @var ejecucionRepository $ejecucionRepository*/
    private $ejecucionRepository;

    public function __construct(ejecucionRepository $ejecucionRepo)
    {
        $this->ejecucionRepository = $ejecucionRepo;
    }

    /**
     * Display a listing of the ejecucion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ejecucions = $this->ejecucionRepository->all();

        return view('ejecucions.index')
            ->with('ejecucions', $ejecucions);
    }

    /**
     * Show the form for creating a new ejecucion.
     *
     * @return Response
     */
    public function create()
    {
        return view('ejecucions.create');
    }

    /**
     * Store a newly created ejecucion in storage.
     *
     * @param CreateejecucionRequest $request
     *
     * @return Response
     */
    public function store(CreateejecucionRequest $request)
    {
        $input = $request->all();

        $ejecucion = $this->ejecucionRepository->create($input);

        Flash::success('Ejecucion saved successfully.');

        return redirect(route('ejecucions.index'));
    }

    /**
     * Display the specified ejecucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ejecucion = $this->ejecucionRepository->find($id);

        if (empty($ejecucion)) {
            Flash::error('Ejecucion not found');

            return redirect(route('ejecucions.index'));
        }

        return view('ejecucions.show')->with('ejecucion', $ejecucion);
    }

    /**
     * Show the form for editing the specified ejecucion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ejecucion = $this->ejecucionRepository->find($id);

        if (empty($ejecucion)) {
            Flash::error('Ejecucion not found');

            return redirect(route('ejecucions.index'));
        }

        return view('ejecucions.edit')->with('ejecucion', $ejecucion);
    }

    /**
     * Update the specified ejecucion in storage.
     *
     * @param int $id
     * @param UpdateejecucionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateejecucionRequest $request)
    {
        $ejecucion = $this->ejecucionRepository->find($id);

        if (empty($ejecucion)) {
            Flash::error('Ejecucion not found');

            return redirect(route('ejecucions.index'));
        }

        $ejecucion = $this->ejecucionRepository->update($request->all(), $id);

        Flash::success('Ejecucion updated successfully.');

        return redirect(route('ejecucions.index'));
    }

    /**
     * Remove the specified ejecucion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ejecucion = $this->ejecucionRepository->find($id);

        if (empty($ejecucion)) {
            Flash::error('Ejecucion not found');

            return redirect(route('ejecucions.index'));
        }

        $this->ejecucionRepository->delete($id);

        Flash::success('Ejecucion deleted successfully.');

        return redirect(route('ejecucions.index'));
    }
}
