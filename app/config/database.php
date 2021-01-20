<?php

class Database{

    public function db_properties(){ 
        return [
            'database'=>[
                'driver'=>[
                    'mysql'=>'mysql',
                    'sqlite' =>'sqlite'
                ]
            ],
            'mysql'=>[
                    'host'=> 'localhost',
                    'username'=>'root',
                    'database' => 'web_project',
                    'user' => 'root',
                    'password' => '',            
            ]
        ];
}
}