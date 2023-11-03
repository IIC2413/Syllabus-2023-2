CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
mover_pokemon (pid int, pname varchar(100), ptype varchar(10), total int, hp int, attack int, defense int, sp_atk int, sp_def int, speed int, legendary boolean)

-- declaramos lo que retorna, en este caso un booleano
RETURNS BOOLEAN AS $$



-- definimos nuestra función
BEGIN

    -- verificar si existe la columna generation, si no existe la agregamos y seteamos todos los valores de esa columna en 1
    IF 'generation' NOT IN (SELECT column_name FROM information_schema.columns WHERE table_name='pokemon1') THEN
        ALTER TABLE pokemon1 ADD generation int;
        UPDATE pokemon1 SET generation = 1;
    END IF;
    
    -- si el id en el argumento no está en la tabla, agregamos el pokemon
    -- notar que ahora debemos agregar el dato de la columna generation en el values a insertar
    IF pid NOT IN (SELECT id from pokemon1) THEN
        INSERT INTO pokemon1 values(pid, pname, ptype, total, hp, attack, defense, sp_atk, sp_def, speed, legendary, 1);

        -- retornamos true si se agregó el valor
        RETURN TRUE;
    ELSE
        -- y false si no se agregó
        RETURN FALSE;

    END IF;



-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql