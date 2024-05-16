<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        return view('mahasiswa_form', $data);
    }

    public function jqm_form() {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();
        return view('jqm_form', $data);
    }

    public function create()
    {
        $model = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ];

        if (!$model->save($data)) {
            $error = $model->errors();
            return $this->response->setJSON(['status' => 500, 'message' => 'Data gagal disimpan ke database', 'error' => $error]);
        }

        return $this->response->setJSON(['status' => 201, 'message' => 'Data berhasil disimpan']);
    }


    public function update($id)
    {
        $model = new MahasiswaModel();
        $data = $this->request->getRawInputVar();
        $model->update($id, $data);
        return $this->response->setJSON(['status' => 200, 'message' => 'Data berhasil diupdate', 'data' => $data]);
    }


    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return $this->response->setJSON(['status' => 200, 'message' => 'Data berhasil dihapus']);
    }

    public function read($id)
    {
        $model = new MahasiswaModel();
        $data = $model->find($id);
        return $this->response->setJSON($data);
    }
}
