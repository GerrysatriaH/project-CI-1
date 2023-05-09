<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController {

    // Session
    protected $session;

    // Data
    protected $data;

    // Model
    protected $users;

    public function __construct(){

        $this->users = new UserModel();

        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    public function index() {

        $this->data['page_title'] = "Register Form";

        echo view('templates/header', $this->data);
        echo view('auth/register');
        echo view('templates/footer');

    }

    public function process() {
        if (!$this->validate([
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            $this->users->insert([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);
            return redirect()->to('/login');
        }
    }
}