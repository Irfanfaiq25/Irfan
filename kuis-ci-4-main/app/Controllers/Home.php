<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Home extends BaseController
{
    public function index()
    {
        
        $model = new Usermodel();

        $data['users'] = $model->findAll();
        
        return view('user', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'POST') {
            $userModel = new Usermodel();

            $userModel->insert([
                'name' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'created_at' => date('Y-m-d') 
            ]);
            
            return redirect()->to('/');
        }

        return view('form');
    }
}
