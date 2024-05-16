<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BarangGroupModel;

class BarangGroupController extends BaseController
{
    public function index()
    {
        $barangModel = new BarangGroupModel();
        $data['barang_group'] = $barangModel->findAll();
        return view('jqm_list_barang_group', $data);
    }

    public function edit_index($id){
        $barangGroupModel = new BarangGroupModel();
        $data['barang_group'] = $barangGroupModel->where('id', $id)->first();
        return view('jqm_list_barang_group_edit', $data);
    }

    public function edit_post($id){
        $barangGroupModel = new BarangGroupModel();
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $barangGroupModel->update($id, $data);
        return redirect()->to('/list_barang_group');
    }

    public function delete_post($id){
        $barangGroupModel = new BarangGroupModel();
        $barangGroupModel->delete($id);
        return redirect()->to('/list_barang_group');
    }

    public function create(){
        $barangModel = new BarangGroupModel();
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $barangModel->save($data);
        return redirect()->to('/list_barang_group');
    }

}
