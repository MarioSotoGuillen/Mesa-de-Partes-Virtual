<?php
/**
 * Clase Html
 */
abstract class Html {
    static function mostrar($plantilla, $datos='', $comoContenido=FALSE) {
        $file= './htmls/' . $plantilla;
        if (file_exists($file) == false) {
                trigger_error ('Plantilla ' . $file . ' no Existe.', E_USER_NOTICE);
                return false;
        }
        //Si hay variables para asignar, las pasamos una a una.
        if (is_array($datos)) 
            foreach ($datos as $clave => $valor) 
                $$clave = $valor;

        if ($comoContenido) { //Si devolvemos el contenido a una variable
            ob_start();  // activamos el BUFFER de salida
            echo eval('?>'.preg_replace("/;*\s*\?>/", "; ?>", 
                    str_replace('<?=', '<?php echo ', file_get_contents($file)
                    )));
            $buffer = ob_get_contents();
            @ob_end_clean();
            return $buffer;
        } else           //Si devolvemos el HTML
            require_once $file;  
    }
}
