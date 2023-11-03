CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
función (argumentos)

-- declaramos lo que retorna 
RETURNS tipo de dato AS $$

-- declaramos las variables a utilizar si es que es necesario
DECLARE
variable1;
variable2;

-- definimos nuestra función
BEGIN

    -- control de flujo
    IF condicion THEN
        pasa algo
    
    ELSE
        pasa otra cosa

    END IF;

    FOR condicion LOOP
        hacer cosas
    END LOOP;



-- -- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql