<?php
/**
 * Created by PhpStorm.
 * User: MaziKi
 * Date: 01.03.2016
 * Time: 15:51
 */

namespace App\Http\Controllers;


use App\Menu;

class MainController extends Controller
{
    public function __construct(Menu $menuModel)
    {
        $this->data = [];


        $this->data['menu'] = $menuModel->getTopMenu();
    }
}