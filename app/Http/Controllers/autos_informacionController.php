<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\autos_informacionRepository;
use App\Http\Requests\Createautos_informacionRequest;
use App\Http\Requests\Updateautos_informacionRequest;

class autos_informacionController extends AppBaseController
{
    /** @var autos_informacionRepository $autosInformacionRepository*/
    private $autosInformacionRepository;

    public function __construct(autos_informacionRepository $autosInformacionRepo)
    {
        $this->autosInformacionRepository = $autosInformacionRepo;
    }

    /**
     * Display a listing of the autos_informacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $autosInformacions = $this->autosInformacionRepository->all();

        return view('autos_informacions.index')
            ->with('autosInformacions', $autosInformacions);
    }

    /**
     * Show the form for creating a new autos_informacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('autos_informacions.create');
    }

    /**
     * Store a newly created autos_informacion in storage.
     *
     * @param Createautos_informacionRequest $request
     *
     * @return Response
     */
    public function store(Createautos_informacionRequest $request)
    {
        $input = $request->all();

        $autosInformacion = $this->autosInformacionRepository->create($input);

        Flash::success('Autos Informacion saved successfully.');

        return redirect(route('autosInformacions.index'));
    }

    /**
     * Display the specified autos_informacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autosInformacion = $this->autosInformacionRepository->find($id);

        if (empty($autosInformacion)) {
            Flash::error('Autos Informacion not found');

            return redirect(route('autosInformacions.index'));
        }

        return view('autos_informacions.show')->with('autosInformacion', $autosInformacion);
    }

    /**
     * Show the form for editing the specified autos_informacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autosInformacion = $this->autosInformacionRepository->find($id);

        if (empty($autosInformacion)) {
            Flash::error('Autos Informacion not found');

            return redirect(route('autosInformacions.index'));
        }

        return view('autos_informacions.edit')->with('autosInformacion', $autosInformacion);
    }

    /**
     * Update the specified autos_informacion in storage.
     *
     * @param int $id
     * @param Updateautos_informacionRequest $request
     *
     * @return Response
     */
    public function update($id, Updateautos_informacionRequest $request)
    {
        $autosInformacion = $this->autosInformacionRepository->find($id);

        if (empty($autosInformacion)) {
            Flash::error('Autos Informacion not found');

            return redirect(route('autosInformacions.index'));
        }

        $autosInformacion = $this->autosInformacionRepository->update($request->all(), $id);

        Flash::success('Autos Informacion updated successfully.');

        return redirect(route('autosInformacions.index'));
    }

    /**
     * Remove the specified autos_informacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autosInformacion = $this->autosInformacionRepository->find($id);

        if (empty($autosInformacion)) {
            Flash::error('Autos Informacion not found');

            return redirect(route('autosInformacions.index'));
        }

        $this->autosInformacionRepository->delete($id);

        Flash::success('Autos Informacion deleted successfully.');

        return redirect(route('autosInformacions.index'));
    }
}
