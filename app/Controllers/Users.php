<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        static $users = [
            ['username' => 'jkirby', 'full_name' => 'Jan Kirby', 'role' => 'Store Manager'],
            ['username' => 'jkharby', 'full_name' => 'Jhan Kharby', 'role' => 'Cashier'],
            ['username' => 'jolya', 'full_name' => 'Jolya Kirby', 'role' => 'Inventory Lead'],
            ['username' => 'jkhirby', 'full_name' => 'Jhun Khirby', 'role' => 'Cashier'],
            ['username' => 'kirbyjohn', 'full_name' => 'Kirby John', 'role' => 'Administrator'],
        ];

        return view('users/index', [
            'title' => 'POS Lab | User Accounts',
            'heading' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
