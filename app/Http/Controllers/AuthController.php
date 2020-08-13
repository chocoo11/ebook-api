<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;


class AuthController extends BaseController
{
    public function me()
    {
        return
        [

            "Nis" => "3103118083",
            "Name" => "Linda Septiana",
            "Gender" => "Perempuan",
            "Phone" => "081397841714",
            "Class" => "XII RPL 3",

        ];
    }
}


