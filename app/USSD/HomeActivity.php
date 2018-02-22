<?php

namespace App\Ussd\Activities;

use Jowusu837\HubtelUssd\Lib\UssdActivity;
use Jowusu837\HubtelUssd\Lib\UssdResponse;

class HomeActivity extends UssdActivity
{
    public function run() {
        $this->response->Type = UssdResponse::RELEASE;
        $this->response->Message = 'Ussd is working!';
        return $this;
    }
    
    public function next() {
        //return MenuSelection::class;
    }

}