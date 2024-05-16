<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KelasMhsModel;

class KelasMahasiswaController extends BaseController
{
    public function index()
    {
        $KelasMhsModel = new KelasMhsModel();
        $data['kelas'] = $KelasMhsModel->findAll();
        return view('jqm_list_kelas_mhs', $data);
    }

    public function edit_index($id){
        $KelasMhsModel = new KelasMhsModel();
        $data['kelas'] = $KelasMhsModel->where('id', $id)->first();
        return view('jqm_list_kelas_mhs_edit', $data);
    }

    public function edit_post($id){
        $KelasMhsModel = new KelasMhsModel();
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $KelasMhsModel->update($id, $data);
        return redirect()->to('/list_kls_mhs');
    }

    public function delete($id){
        $KelasMhsModel = new KelasMhsModel();
        $KelasMhsModel->delete($id);
        return redirect()->to('/list_kls_mhs');
    }

    public function create(){
        $KelasMhsModel = new KelasMhsModel();
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $KelasMhsModel->save($data);
        return redirect()->to('/list_kls_mhs');
    }
}
