<?php

    // INSTALLER
    function instalador ($ubicacion,$instalar) {

        if ($instalar == 1) {

            $archivo = [
                "modulo" => [
                    "ubicacion" => $ubicacion
                ]
            ];

            require_once($archivo['modulo']['ubicacion']);

        }

    }

    // INTERRUPTOR

    function interruptor ($encender,$ubicacion) {

        if ($encender == 1) {
            instalador ($ubicacion,$encender);
        } else if ($encender == 0) {
            return 0;
        } else {
            return -1;
        }

    }



?>