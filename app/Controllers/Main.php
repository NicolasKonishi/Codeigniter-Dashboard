<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {

        $table_header = ['Nome', 'Email', 'Telefone', 'Ativo'];
        $table_rows = [];
        for($i = 0; $i < 10; $i++) {
            $tmp =[
                '<input class="form-check-input" type="checkbox">',
                uniqid() . "@gmail.com",
                rand(900000000, 999999999),
                rand(0, 1),
            ];
            $table_rows[] = $tmp;
        }

        // messages / posts
        $messages = [
            [
                'image'=>  'user.jpg',
                'author' => 'John Doe',
                'message' =>  'Lorem Ipsum is simply dummy text.',
                'date_time' => date('2005-02-01')
            ],
            [
                'image'=>  'user.jpg',
                'author' => 'Danielle',
                'message' =>  'Lorem Ipsum is simply dummy text.
                Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.',
                'date_time' => date('2005-02-01')
            ],
            [
                'image'=>  'user.jpg',
                'author' => 'Lucas',
                'message' =>  'Lorem Ipsum is simply dummy text.',
                'date_time' => date('2005-02-01')
            ]
        ];

        //todolist
        $todo_list = [
            'Tarefa 1',
            'Tarefa 2',
            'Tarefa 3',
            'Tarefa 4',
        ];

        //table data
        $data = [
            'table_header' => $table_header,
            'table_rows' => $table_rows,
            'messages' => $messages,
            'todo_list' => $todo_list,
        ];
        return view('main/home', $data);
    }

    public function todo_submit(){
        echo 'Formulario enviado com sucesso!';
    }
    public function error_404(){
        return view('partials/404');
    }

    public function blank_page(){
        return view('partials/blank_page');
    }
}
