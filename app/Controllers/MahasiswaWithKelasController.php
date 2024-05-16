<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MhsWithKelasModel;
use App\Models\KelasMhsModel;

class MahasiswaWithKelasController extends BaseController
{
    public function index()
    {
        $MhsWithKelasModel = new MhsWithKelasModel();
        $KelasMhsModel = new KelasMhsModel();
        $data['mahasiswa'] = $MhsWithKelasModel->join('tbl_kelas_mhs', 'tbl_mahasiswa_with_kelas.kelas_id = tbl_kelas_mhs.id', 'left')
            ->select('tbl_mahasiswa_with_kelas.*, tbl_kelas_mhs.name as kelas_name')
            ->findAll();
        // $data['mahasiswa'] = $MhsWithKelasModel->findAll();
        $data['kelas'] = $KelasMhsModel->findAll();
        return view('jqm_list_mhs_with_kls', $data);
    }

    public function edit_index($id)
    {
        $MhsWithKelasModel = new MhsWithKelasModel();
        $KelasMhsModel = new KelasMhsModel();
        $data['kelas'] = $KelasMhsModel->findAll();
        $data['mahasiswa'] = $MhsWithKelasModel
            ->where('tbl_mahasiswa_with_kelas.id', $id)
            ->join('tbl_kelas_mhs', 'tbl_mahasiswa_with_kelas.kelas_id = tbl_kelas_mhs.id', 'left')
            ->select('tbl_mahasiswa_with_kelas.*, tbl_kelas_mhs.name as kelas_name')
            ->first();
        return view('jqm_list_mhs_with_kls_edit', $data);
    }

    public function edit_post($id)
    {
        $MhsWithKelasModel = new MhsWithKelasModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas_id' => $this->request->getPost('kelas_id')
        ];
        $MhsWithKelasModel->update($id, $data);
        return redirect()->to('/list_mhs_with_kls');
    }

    public function delete($id)
    {
        $MhsWithKelasModel = new MhsWithKelasModel();
        $MhsWithKelasModel->delete($id);
        return redirect()->to('/list_mhs_with_kls');
    }

    public function create()
    {
        $MhsWithKelasModel = new MhsWithKelasModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas_id' => $this->request->getPost('kelas_id')
        ];
        $MhsWithKelasModel->save($data);
        return redirect()->to('/list_mhs_with_kls');
    }
}
