<?php

class FileApload
{
    public static function storeImage($file,$public_path){
        // print_r($file);
        $temporary_image = $file['tmp_name'];
        $extention = $file['type'];
        $extention = explode('/',$extention);
        $extention = $extention[1];
        var_dump($extention);
        if (self::validateImageExtension($extention) == true) {
            if (!file_exists("./public/$public_path/")) {
                mkdir("./public/$public_path/",0777);
            }
            $file_name = md5($file['name']).".$extention";
            move_uploaded_file($temporary_image,"./public/$public_path/".$file_name);
            // imagecopy($temporary_image,"../public/$public_path/".$file_name); 
            return "public/$public_path/".$file_name;
        }else{
            return 'error';
        }
        // print_r($_FILES);
    }

    public static function validateImageExtension($type){
        // $type = explode('/',$type);
        // $type = $type[1];

        if (in_array($type,['jpg','jpeg','png','gif'])) {
            return true;
        }else{
            return false;
        }
    }
    
    public static function storeDocument(){

    }

}