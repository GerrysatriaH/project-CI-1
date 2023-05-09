<?php
 
namespace App\Controllers;
 
use App\Models\UserModel;
 
class Login extends BaseController {
    // Session
    protected $session;

    // Data
    protected $data;

    // Model
    protected $users;

    public function __construct() {

        $this->users = new UserModel();

        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    public function index() {
        $this->data['page_title'] = "Login Form";

        echo view('templates/header', $this->data);
        echo view('auth/login');
        echo view('templates/footer');
    }
 
    public function process(){
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $this->users->where(['email' => $email])->first();
        if ($dataUser) {
            $password_check = password_verify($password, $dataUser['password']);
            if ($password_check) {
                session()->set([
                    'name' => $dataUser['name'],
                    'email' => $dataUser['email'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/');
            } else {        
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email belum terdaftar');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}