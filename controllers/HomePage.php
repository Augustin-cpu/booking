<?php

class HomePage{

    public function showHome(){
        $myView = new View('homepage');
        $myView->render();
    }
}