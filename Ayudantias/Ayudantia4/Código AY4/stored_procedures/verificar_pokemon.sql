CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
verificar_pokemon (pname varchar(100), ptype varchar(10), total int, hp int, attack int, defense int, sp_atk int, sp_def int, speed int, legendary boolean, generation int)

-- declaramos lo que retorna 
RETURNS BOOLEAN AS $$



-- declaramos las variables a utilizar si es que es necesario
DECLARE
idmax int;




-- definimos nuestra función
BEGIN

    -- si es de la generacion 1 se rechaza porque ya tenemos todos los pokemons gen 1 en la tabla
    IF generation = 1 THEN
        RETURN FALSE;
    END IF;

    -- verificamos que no se repita el name
    IF pname IN (SELECT pnombre FROM pokemon1) THEN
        RETURN FALSE;
    END IF;

    -- insertamos el maximo id en la variable idmax
    SELECT INTO idmax
    MAX(id)
    FROM pokemon1;

    -- insertamos el dato
    insert into pokemon1 values(idmax + 1, pname, ptype, total, hp, attack, defense, sp_atk, sp_def, speed, legendary, generation);
    RETURN TRUE;
    



-- -- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql