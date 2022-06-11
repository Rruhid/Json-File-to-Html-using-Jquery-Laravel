<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ContactController extends Controller
{
   



        function index() {
        return view('contact');
        }


        function store(Request $request) {
                 $name = isset($_POST['name']); 
                 $email = isset($_POST['email']);
                  $age = isset($_POST['age']);  



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
            function get_data() {
             

                $file_name= '../storage/app/data'. '.json';  // maybe chhange here sdf/sdf/sdf.php
        
                if(file_exists("$file_name")) {
                    $current_data=file_get_contents("$file_name");
                 
                   // var_dump($current_data);
                    $array_data=json_decode($current_data, true);


       
                $item = 0;
                if (is_array($array_data) || is_object($array_data))
{
                       foreach ($array_data as $item => $data) {
                       $item++;

}
                          } 
        var_dump($item);


            





            if (($item) > 100 ){

                for ($item = 0 ; $item<100; $item++){   

                break;  //После 100 - дата удаляется (полноценного алгоритма я не нашел, но по данным stackoverflow его нужно обработать на стороне сервера ссылка: https://stackoverflow.com/questions/70381587/data-pushed-in-a-json-object-erases-when-the-page-is-refreshed )

                }
                echo "Количество ограничено";

     }  else {

                            $extra=array(
                                        'Name' => $_POST['name'],
                                        'Email' => $_POST['email'],
                                        'Age' => $_POST['age'],
                                    );
                                    $array_data[]=$extra;
                                    echo "Имя Внесено в Базу";
                                    return json_encode($array_data);
                    
                }

            



                      
              
                }
                    $datae=array();
                    $datae[]=array(
                        'Name' => $_POST['name'],
                        'Email' => $_POST['email'],
                        'Age' => $_POST['age'],
                    );
                    echo "<br>Fail<br/>";
                    return json_encode($datae);  
                
            }
        
            $file_name= '../storage/app/data'. '.json';

                                                       
            if(file_put_contents("$file_name", get_data())) {
            
            }                
            else {
                echo 'There is some error';                
            }
       


        }

        return view('data');

    }  



}

  

?>
