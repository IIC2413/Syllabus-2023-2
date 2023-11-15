## Bienvenidos a los datos de la entega 3 y final del proyecto de bases de datos

A continuación le presentamos una serie de consejos para su uso:
- Los datos de la E3 son ligeramente diferentes a los de la E2, en el enunciado de la tarea existe un Diccionario de datos donde verán reflejados los cambios.
- Deben realizar los cambios al modelo para que acepten los nuevos atributos
- Recuerden que estas tablas no están normalizadas, es tarea del grupo hacerlo
- Los datos corresponden a simulaciones de comportamiento de clientes de la aplicación por lo que las fechas de las actividades deben estar en los rangos válidos
- Los datos contienen en forma explícita errores que prueban las restricciones, el grupo debe generar y documentar las estrategias usadas para corregirlos.
- Cualquier otro comentario atingente a la evaluación de la entrega

Issues
Un resumen de las respuesta de los issues más relevantes
- La aplicación dee conectarse a ambas bases de datos en forma idependiente, no integrarlas en un nuevo modelo (enunciado 3 Requerimientos). Solo deben integrarse las entidades indicadas explícitamente en el enunciado.
- En 3.3 Navegación se deben implementar las consultas equivalentes en ambas bases de datos. No solo streaming sino que tambien videojuegos. (se generó unna nueva versión del enunciado)
- Los scripts de carga deben hacerse en PHP y NO ES NECESARIO que se haga desde una página de la aplicación, puede ser por CLI. Se pueden desarrollar cargadores diferentes que se ejecuten en forma individual o conjunta a través de un makefile.
- La encriptación de las claves se puede hacer de forma INDEPENDIENTE de los cargadores y cambiar los archivos de datos. Esto debe ser documentado en el Readme del proyecto.
- El poblamiento de las tablas se dee hacer directo desde los archivos CSV, SIN PREPROCESAMEINTO. La modificación de los datos, si procede, se debe hacer con posterioridad a la ejecución de las cargas y de acuerdo a los errores que los cargadores reportes según las estrategias propuestas en el enunciado. 
- ERROR en el enunciado original el diccionario de datos de proveedores impar  contiene dos atributos con su definición invertida costo y precio. Se subió una nueva versión
- ERROR en el enunciado original el diccionario de datos indica que el atributo número es el número de capítulo lo correcto es temporada.
- NOTA: TODA ACCIÓN SOBRE LOS DATOS PRODUCTO  DE LA CARGA SE DEBE DOCUMENTAR EN EL README. LAS INCONSISTENCIAS SON PARTE DEL PROBLEMA A SOLUCIONAR