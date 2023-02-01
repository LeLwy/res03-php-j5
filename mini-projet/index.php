<?php

    require('operations.php');
    require('surfaces.php');
    
    $data = array (
        
        'firstNb' =>  0,
        'secondNb' =>  0,
        'operation' => "",
        'geometry'=> "",
    );
    
    $result;
    
    if(isset($_POST['firstNb']) || isset($_POST['secondNb'])){
        
        if(intVal($_POST['firstNb']) && intVal($_POST['secondNb'])){
            
            $data["firstNb"] = $_POST['firstNb'];
            $data["secondNb"] = $_POST['secondNb'];
            
            var_dump($_POST['operations']);
            var_dump(empty($_POST['operations']));
            
            if(isset($_POST['operations']) && $_POST['operations'] !== ""){
                
                $data["operation"] = $_POST['operations'];
                
                if($data["operation"] === "add"){
                    
                    $result = add($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "substract"){
                    
                    $result = substract($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "multiply"){
                    
                    $result = multiply($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "divide"){
                        
                    $result = divide($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "modulo"){
                    
                    $result = modulo($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "power"){
                    
                    $result = power($data['firstNb'], $data['secondNb']);
                    
                }else if($data["operation"] === "factorial"){
                    
                    $result = factorial($data['firstNb']);
                    
                }
                
            }else if(isset($_POST['geometry']) && $_POST['geometry'] !== ""){
                
                $data["geometry"] = $_POST['geometry'];
                
                if($data["geometry"] === "rectangle_surface"){
                    
                    $result = rectangle_surface($data['firstNb'], $data['secondNb']);
                    
                }else if($data["geometry"] === "rectangle_triangle_surface"){
                    
                    $result = rectangle_triangle_surface($data['firstNb'], $data['secondNb']);
                    
                }else if($data["geometry"] === "basic_triangle_surface"){
                    
                    $result = basic_triangle_surface($data['firstNb'], $data['secondNb']);
                    
                }else if($data["geometry"] === "disk_surface"){
                        
                    $result = disk_surface($data['firstNb']);
                    
                }
            }
        }
    }
        
    require('calculator.phtml');
        
?>