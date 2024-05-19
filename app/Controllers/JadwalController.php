<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JadwalModel;

class JadwalController extends BaseController
{
    public function index()
    {
        $JadwalModel = new JadwalModel();
        $data['jadwal'] = $JadwalModel->findAll();
        return view('jqm_jadwal', $data);
    }

    public function edit_index($id){
        $JadwalModel = new JadwalModel();
        $data['jadwal'] = $JadwalModel->where('id', $id)->first();
        return view('jqm_jadwal_edit', $data);
    }

    public function edit_post($id){
        $JadwalModel = new JadwalModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'dosen' => $this->request->getPost('dosen')
        ];
        $JadwalModel->update($id, $data);
        return redirect()->to('/list_jadwal');
    }

    public function delete($id){
        $JadwalModel = new JadwalModel();
        $JadwalModel->delete($id);
        return redirect()->to('/list_jadwal');
    }

    public function create(){
        $JadwalModel = new JadwalModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'dosen' => $this->request->getPost('dosen')
        ];
        $JadwalModel->save($data);
        return redirect()->to('/list_jadwal');
    }
}
