<?php
        
        //Creamos un array

        $json = array();

        //Si le hemos enviado la variable 'marker_coords' estamos pidiendo los datos (img, audio, texto y valoracion) de un marker concreto.

        if(isset($_POST['marker_coords'])) {
            
           /*Acceso a base de datos*/
            
                //Obtenemos $text, $audio_filename, $image_filename y $val de $_POST['marker_coords']
            
            /**/
            
            $url_server = "http://192.168.1.10:8080/botonsocial/";
            
            //Modo de prueba para ver si funciona, en el futuro estos valores se cogen de la base de datos. 
            
            //Para probar poner en la carpeta img y audio, un fichero de cada tipo y referenciarlo aqui con solo el nombre del fichero, no la ruta.

            $image_filename="";
            $audio_filename="";
            $text = "";
            $val = "";
            
            //Create JSON array
            
            $json[]=array(
                
                'img' => $url_server+"uploads/img/".$image_filename,
                'audio' => $url_server+"/uploads/audio/".$audio_filename,
                'text' => $text,
                'val' => $val
            
            );
            
        } else {
            
            //Si no hemos enviado la variable 'marker_coords' estamos pidiendo las coordenadas de todos los marcadores de la zona. Mas adelante se podra filtrar para no devolver todos los marcadores de la base de datos.
            
            /*Acceso a base de datos*/
            
                //Obtener todas las coordenadas de todas las denuncias. (se puede aplicar un filtro mas adelante)
            
            /**/
            
            //Envio dos marcadores de prueba y deberian aparecer en el mapa.
            
            $json[]= array('lat' => 28.1166102, 'lng' => -15.4476654);
            
            $json[] = array('lat' => 28.116000, 'lng' => -15.4476654);
            
        }

        //Send JSON to javascript

        echo json_encode($json);
?>
