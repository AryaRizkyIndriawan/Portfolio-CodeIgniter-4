<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index(): string
  {
    $data = [
      'title' => 'Home | Website Arya Rizky Indriawan'
    ];
    return view('pages/home', $data);
  }
  public function about(): string
  {
    $data = [
      'title' => 'About Me !'
    ];
    return view('pages/about', $data);
  }
  public function contact(): string
  {
    $data = [
      'title' => 'Contact Me !'
    ];
    return view('pages/contact', $data);
  }
}
