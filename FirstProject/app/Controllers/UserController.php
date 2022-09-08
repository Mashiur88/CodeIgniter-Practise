<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserInfo;
use CodeIgniter\Files\File;

class UserController extends BaseController
{
    public function index()
    {
        $data = [];
        $page = (int) ($this->request->getGet('page') ?? 1);
        $userModel = new UserInfo();
        $data = [
            // 'users' => $userModel->orderBy('id', 'ASC')->findAll(),
            // 'pager' => $userModel->pager,
            // 'page' => $page,

            'users' => $userModel->orderBy('id', 'ASC')->paginate(4),
            'pager' => $userModel->pager,
        ];
        // echo "<pre>";
        // print_r($data['users']);
        // exit;
        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $userModel = new UserInfo();
        $filepath = "";
        $img = $this->request->getFile('image');
        $name = $img->getRandomName();
        if (!$img->hasMoved()) {
            $filepath = 'uploads/user_image';
            $img->move($filepath, $name);
        }
        // echo new File($filepath); exit;
        $data = [
            'first_name' => $this->request->getVar('fname'),
            'last_name'  => $this->request->getVar('lname'),
            'email'  => $this->request->getVar('email'),
            'user_name'  => $this->request->getVar('uname'),
            'password'  => $this->request->getVar('password'),
            'address'  => $this->request->getVar('address'),
            'image' => $name,
            'gender'  => $this->request->getVar('gender'),
            'status'  => $this->request->getVar('status'),
        ];
        echo "<pre>";
        print_r($data);
        // exit;
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users'));
    }

    public function edit($id = null)
    {
        $userModel = new UserInfo();
        $data['user'] = $userModel->where('id', $id)->first();

        // echo "<pre>";
        // // var_dump($data);
        // print_r($data);

        // exit;
        return view('user/edit', $data);
    }

    public function update()
    {
        $data = [];
        $userModel = new UserInfo();
        // $validationRule = [
        //     'userfile' => [
        //         'label' => 'Image File',
        //         'rules' => 'uploaded[userfile]'
        //             . '|is_image[userfile]'
        //             . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
        //             . '|max_size[userfile,100]'
        //             . '|max_dims[userfile,1024,768]',
        //     ],
        // ];
        // if (! $this->validate($validationRule)) {
        //     $data = ['errors' => $this->validator->getErrors()];

        //     return view('upload_form', $data);
        // }

        $id = $this->request->getVar('id');
        $data = [
            'first_name' => $this->request->getVar('fname'),
            'last_name'  => $this->request->getVar('lname'),
            'email'  => $this->request->getVar('email'),
            'user_name'  => $this->request->getVar('uname'),
            'address'  => $this->request->getVar('address'),
            'gender'  => $this->request->getVar('gender'),
            'status'  => $this->request->getVar('status'),
        ];

        $filepath = "";
        $img = $this->request->getFile('image');
        // echo $img; exit;
        if ($img != '') {
            $name = $img->getRandomName();
            
            if (!$img->hasMoved()) {
                $filepath = 'uploads/user_image';
                $img->move($filepath, $name);
                
            }
            $data['image'] = $name;
        }
        // echo "<pre>";
        // print_r($data);
        // exit;
        $userModel->update(['id' => $id], $data);
        return $this->response->redirect(site_url('/users'));
    }

    public function viewAddress()
    {
        $view = \Config\Services::renderer();
        $userModel = new UserInfo();
        $id = $this->request->getVar('id');
        $user = $userModel->where('id', $id)->first();
        // echo "<pre>";
        // print_r($user);
        // exit;
        $pro = $view->setVar('user',$user)->render('user/viewAddress');
        return $this->response->setJSON(['header' => 'Full Address', 'message' => 'Address Showed Successfully', 'html' => $pro]);
    }

    public function delete($id = null)
    {
        $userModel = new UserInfo();
        $result = $userModel->where('id', $id)->delete();
        return $this->response->redirect(site_url('/users'));
    }

}
