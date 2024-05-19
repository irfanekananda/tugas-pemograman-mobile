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
            return $error;
        }

        return redirect()->to('/mahasiswa');
    }


    public function update($id)
    {
        $model = new MahasiswaModel();
        $data = $this->request->getRawInputVar();
        $model->update($id, $data);
        return redirect()->to('/mahasiswa');
    }

    public function update_get($id){
        $model = new MahasiswaModel();
        $data['mahasiswa']= $model->find($id);
        return view('mahasiswa_form_edit', $data);
    }
    public function update_post($id){
        $model = new MahasiswaModel();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $model->update($id, $data);
        // return 'Data berhasil diupdate';
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return $this->response->setJSON(['status' => 200, 'message' => 'Data berhasil dihapus']);
    }

    public function delete_get($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to('/mahasiswa');
        // return 'Data berhasil dihapus';
    }

    public function read($id)
    {
        $model = new MahasiswaModel();
        $data = $model->find($id);
        return $this->response->setJSON($data);
    }
}
