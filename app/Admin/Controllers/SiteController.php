<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Encore\Admin\Form;

class SiteController extends Controller
{

    public function index()
    {

        $form = new Form(new Setting());

        $form->text('title');

        $form->text('subtitle');

        $form->text('keywords');

        $form->text('description');

        $form->text('icp');

        $form->setAction('site/setting');

        return $form;

    }

}
