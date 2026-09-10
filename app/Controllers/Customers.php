<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        static $customers = [
            ['full_name' => 'Jan Kirby', 'email' => 'jan.kirby@example.com', 'phone' => '0912 345 6789'],
            ['full_name' => 'Jhan Kharby', 'email' => 'jhan.kharby@example.com', 'phone' => '0912 345 6789'],
            ['full_name' => 'Jolya Kirby', 'email' => 'jolya.kirby@example.com', 'phone' => '0912 345 6789'],
            ['full_name' => 'Jhun Khirby', 'email' => 'jhun.khirby@example.com', 'phone' => '0912 345 6789'],
            ['full_name' => 'Kirby John', 'email' => 'kirby.john@example.com', 'phone' => '0912 345 6789'],
        ];

        return view('customers/index', [
            'title' => 'POS Lab | Customer Accounts',
            'heading' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
