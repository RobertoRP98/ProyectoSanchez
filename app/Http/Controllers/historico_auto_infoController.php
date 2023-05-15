<?php

namespace App\Http\Controllers;

use Response;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Repositories\historico_auto_infoRepository;
use App\Http\Requests\Createhistorico_auto_infoRequest;
use App\Http\Requests\Updatehistorico_auto_infoRequest;

class historico_auto_infoController extends AppBaseController
{
    /** @var historico_auto_infoRepository $historicoAutoInfoRepository*/
    private $historicoAutoInfoRepository;

    public function __construct(historico_auto_infoRepository $historicoAutoInfoRepo)
    {
        $this->historicoAutoInfoRepository = $historicoAutoInfoRepo;
    }

    /**
     * Display a listing of the historico_auto_info.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $historicoAutoInfos = $this->historicoAutoInfoRepository->all();

        return view('historico_auto_infos.index')
            ->with('historicoAutoInfos', $historicoAutoInfos);
    }

    /**
     * Show the form for creating a new historico_auto_info.
     *
     * @return Response
     */
    public function create()
    {
        return view('historico_auto_infos.create');
    }

    /**
     * Store a newly created historico_auto_info in storage.
     *
     * @param Createhistorico_auto_infoRequest $request
     *
     * @return Response
     */
    public function store(Createhistorico_auto_infoRequest $request)
    {
        $input = $request->all();

        $historicoAutoInfo = $this->historicoAutoInfoRepository->create($input);

        Flash::success('Historico Auto Info saved successfully.');

        return redirect(route('historicoAutoInfos.index'));
    }

    /**
     * Display the specified historico_auto_info.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $historicoAutoInfo = $this->historicoAutoInfoRepository->find($id);

        if (empty($historicoAutoInfo)) {
            Flash::error('Historico Auto Info not found');

            return redirect(route('historicoAutoInfos.index'));
        }

        return view('historico_auto_infos.show')->with('historicoAutoInfo', $historicoAutoInfo);
    }

    /**
     * Show the form for editing the specified historico_auto_info.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $historicoAutoInfo = $this->historicoAutoInfoRepository->find($id);

        if (empty($historicoAutoInfo)) {
            Flash::error('Historico Auto Info not found');

            return redirect(route('historicoAutoInfos.index'));
        }

        return view('historico_auto_infos.edit')->with('historicoAutoInfo', $historicoAutoInfo);
    }

    /**
     * Update the specified historico_auto_info in storage.
     *
     * @param int $id
     * @param Updatehistorico_auto_infoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatehistorico_auto_infoRequest $request)
    {
        $historicoAutoInfo = $this->historicoAutoInfoRepository->find($id);

        if (empty($historicoAutoInfo)) {
            Flash::error('Historico Auto Info not found');

            return redirect(route('historicoAutoInfos.index'));
        }

        $historicoAutoInfo = $this->historicoAutoInfoRepository->update($request->all(), $id);

        Flash::success('Historico Auto Info updated successfully.');

        return redirect(route('historicoAutoInfos.index'));
    }

    /**
     * Remove the specified historico_auto_info from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $historicoAutoInfo = $this->historicoAutoInfoRepository->find($id);

        if (empty($historicoAutoInfo)) {
            Flash::error('Historico Auto Info not found');

            return redirect(route('historicoAutoInfos.index'));
        }

        $this->historicoAutoInfoRepository->delete($id);

        Flash::success('Historico Auto Info deleted successfully.');

        return redirect(route('historicoAutoInfos.index'));
    }
}
