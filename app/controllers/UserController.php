<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('UserModel');
        $this->call->library('Session');
    }

    public function show(){
        // Get current page (default 1)
        $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        // Get search query (optional)
        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 5; // number of users per page

        // Call model's pagination method
        $all = $this->UserModel->page($q, $records_per_page, $page);
        $data['users'] = $all['records'];
        $total_rows = $all['total_rows'];

        // Configure pagination
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
        $this->pagination->set_theme('tailwind'); // themes: bootstrap, tailwind, custom
        $this->pagination->initialize($total_rows, $records_per_page, $page, 'users/show?q='.$q);

        // Send data to view
        $data['page'] = $this->pagination->paginate();
        $data['current_role'] = $this->session->userdata('role') ?? 'user';
        $this->call->view('students/show', $data);
    }

    public function create() {
        $current_role = $this->session->userdata('role');
        if ($current_role !== 'admin') {
            redirect('users/show');
        }
        if($this->io->method() == 'post'){
            $lastname = $this->io->post('last_name');
            $firstname = $this->io->post('first_name');
            $email = $this->io->post('email');
            $data = array(
                'last_name' => $lastname,
                'first_name' => $firstname,
                'email' => $email
            );
            if($this->UserModel->insert($data)){
                redirect('users/show');
            } else {
                echo 'Something went wrong';
            }
        } else {
            $this->call->view('students/create');
        }
    }

    public function update($id) {
        $current_role = $this->session->userdata('role');
        if ($current_role !== 'admin') {
            redirect('users/show');
        }
        $data['user'] = $this->UserModel->find($id);
        if($this->io->method() == 'post'){
            $lastname = $this->io->post('last_name');
            $firstname = $this->io->post('first_name');
            $email = $this->io->post('email');
            $update_data = array(
                'last_name' => $lastname,
                'first_name' => $firstname,
                'email' => $email
            );
            if($this->UserModel->update($id, $update_data)){
                redirect('users/show');
            } else {
                echo 'Update failed: Please check your data and try again.';
            }
        } else {
            $this->call->view('students/update', $data);
        }
    }

    public function delete($id){
        $current_role = $this->session->userdata('role');
        if ($current_role !== 'admin') {
            redirect('users/show');
        }
        if($this->UserModel->delete($id)){
            redirect('users/show');
        } else {
            echo 'Something went wrong';
        }
    }

    public function login() {
        if ($this->io->method() == 'post') {
            $name = $this->io->post('name');
            $password = $this->io->post('password');

            $user = $this->UserModel->login($name, $password);
            if ($user) {
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('name', $user['username']);
                $this->session->set_userdata('role', $user['role']);
                redirect('users/show');
            } else {
                $data['error'] = 'Invalid name or password';
                $this->call->view('user_auth/login', $data);
            }
        } else {
            $this->call->view('user_auth/login');
        }
    }

    public function register() {
        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $email = $this->io->post('email');
            $password = $this->io->post('password');
            $role = $this->io->post('role');

            // Check if username or email already exists
            if ($this->UserModel->username_exists($username)) {
                $data['error'] = 'Username already exists. Please choose a different one.';
                $this->call->view('user_auth/register', $data);
                return;
            }
            if ($this->UserModel->email_exists($email)) {
                $data['error'] = 'Email already exists. Please use a different email.';
                $this->call->view('user_auth/register', $data);
                return;
            }

            $data = [
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'role' => $role
            ];

            if ($this->UserModel->register($data)) {
                redirect('login');
            } else {
                $data['error'] = 'Registration failed. Please try again.';
                $this->call->view('user_auth/register', $data);
            }
        } else {
            $this->call->view('user_auth/register');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
