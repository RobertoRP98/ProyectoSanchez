<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\empleados_ocupadosRepository;
use App\Http\Requests\Createempleados_ocupadosRequest;
use App\Http\Requests\Updateempleados_ocupadosRequest;

class empleados_ocupadosController extends AppBaseController
{
    /** @var empleados_ocupadosRepository $empleadosOcupadosRepository*/
    private $empleadosOcupadosRepository;

    public function __construct(empleados_ocupadosRepository $empleadosOcupadosRepo)
    {
        $this->empleadosOcupadosRepository = $empleadosOcupadosRepo;
    }

    /**
     * Display a listing of the empleados_ocupados.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empleadosOcupados = $this->empleadosOcupadosRepository->all();

        return view('empleados_ocupados.index')
            ->with('empleadosOcupados', $empleadosOcupados);
    }

    /**
     * Show the form for creating a new empleados_ocupados.
     *
     * @return Response
     */
    public function create()
    {
        return view('empleados_ocupados.create');
    }

    /**
     * Store a newly created empleados_ocupados in storage.
     *
     * @param Createempleados_ocupadosRequest $request
     *
     * @return Response
     */
    public function store(Createempleados_ocupadosRequest $request)
    {
        $input = $request->all();

        $empleadosOcupados = $this->empleadosOcupadosRepository->create($input);

        Flash::success('Empleados Ocupados saved successfully.');

        return redirect(route('empleadosOcupados.index'));
    }

    /**
     * Display the specified empleados_ocupados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleadosOcupados = $this->empleadosOcupadosRepository->find($id);

        if (empty($empleadosOcupados)) {
            Flash::error('Empleados Ocupados not found');

            return redirect(route('empleadosOcupados.index'));
        }

        return view('empleados_ocupados.show')->with('empleadosOcupados', $empleadosOcupados);
    }

    /**
     * Show the form for editing the specified empleados_ocupados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleadosOcupados = $this->empleadosOcupadosRepository->find($id);

        if (empty($empleadosOcupados)) {
            Flash::error('Empleados Ocupados not found');

            return redirect(route('empleadosOcupados.index'));
        }

        return view('empleados_ocupados.edit')->with('empleadosOcupados', $empleadosOcupados);
    }

    /**
     * Update the specified empleados_ocupados in storage.
     *
     * @param int $id
     * @param Updateempleados_ocupadosRequest $request
     *
     * @return Response
     */
    public function update($id, Updateempleados_ocupadosRequest $request)
    {
        $empleadosOcupados = $this->empleadosOcupadosRepository->find($id);

        if (empty($empleadosOcupados)) {
            Flash::error('Empleados Ocupados not found');

            return redirect(route('empleadosOcupados.index'));
        }

        $empleadosOcupados = $this->empleadosOcupadosRepository->update($request->all(), $id);

        Flash::success('Empleados Ocupados updated successfully.');

        return redirect(route('empleadosOcupados.index'));
    }

    /**
     * Remove the specified empleados_ocupados from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleadosOcupados = $this->empleadosOcupadosRepository->find($id);

        if (empty($empleadosOcupados)) {
            Flash::error('Empleados Ocupados not found');

            return redirect(route('empleadosOcupados.index'));
        }

        $this->empleadosOcupadosRepository->delete($id);

        Flash::success('Empleados Ocupados deleted successfully.');

        return redirect(route('empleadosOcupados.index'));
    }
}
