# Quesos Ocosingo — Corrección del alta de productos

## Cambios realizados
1. `app/productos/agregarProducto.php`: el campo **Característica** ahora envía `name="caracteristica"` y tiene un `id` propio. Se alinearon límites básicos de campos con PHP.
2. `src/validaciones.php`: reglas usadas tanto en CI como durante el registro real; añade comprobación de **característica**.
3. `src/registro_productos.php`: `procesarAltaProducto()` valida antes de persistir; `insertarProducto()` usa `mysqli::prepare()` y parámetros, sin interpolar valores de POST en SQL.
4. `app/productos/guardarProducto.php`: ejecuta la función validada, y comunica éxito o errores mediante sesión; evita el INSERT si los datos no cumplen las reglas.
5. `app/productos/productos.php`: enseña el resultado del registro (alerta Bootstrap) y corrige el control de sesión erróneo.
6. `tests/test_validaciones.php`: 12 casos de validación (los 10 originales más característica vacía y corta).
7. `tests/test_flujo_formulario.php`: 3 casos del servicio REAL usado por el guardado, verificando que los datos inválidos nunca llegan a la función de persistencia.
8. `.github/workflows/php-ci.yml`: incluye revisión sintáctica de los archivos modificados y el test de flujo.

## Instalar sin perder trabajo
- Primero haz una copia de tu carpeta actual o crea una rama Git nueva.
- Los archivos están en el proyecto completo `quesos-ocosingo-main` para que puedas copiarlo; NO sobrescribas tu configuración personal ni archivos de base de datos.
- El repositorio original/ZIP no incluye `app/configuracion/basedatos.php`; por eso añadimos `basedatos.ejemplo.php`. Si tu Laragon YA tiene `basedatos.php`, conserva el original. Si no lo tienes, copia el ejemplo a `basedatos.php` y ajusta las credenciales y nombre de base local.
- No ejecutes pruebas manuales de alta en una base de producción: utiliza una base local con registros de prueba y valores válidos en los catálogos Tipo, Marca y Proveedor.

## Comandos de comprobación desde la raíz
```
php -l src/validaciones.php
php -l src/registro_productos.php
php -l app/productos/guardarProducto.php
php tests/test_validaciones.php
php tests/test_flujo_formulario.php
```
La prueba de integración de MySQL existente se mantiene y se ejecuta en GitHub Actions mediante su servicio MySQL de pruebas. Para correrla localmente, usa la base y tabla `prueba_quesos` según `tests/estructura_pruebas.sql`, NUNCA la tabla real.

## Prueba manual del formulario (pendiente de evidencia)
1. Abre Quesos Ocosingo en Laragon e inicia sesión con un usuario de prueba.
2. En Productos > Agregar, registra una descripción, característica (5-200 caracteres), cantidad entera positiva, fecha válida y valores de catálogos existentes.
3. Comprueba el mensaje verde y el registro recién agregado.
4. Intenta enviar `cantidad=0` o `caracteristica` vacía. La validación del navegador puede bloquear el envío; para comprobar la validación **PHP** sin depender del navegador, ejecuta `php tests/test_flujo_formulario.php`. La prueba verifica que el servicio del guardado no llama al INSERT para entradas inválidas.
5. Toma capturas de la pantalla, resultados de terminal y del nuevo job de Actions.

## Límites conscientes
- El test de flujo verifica `procesarAltaProducto` (función utilizada por el controlador), pero no es una prueba HTTP de extremo a extremo ni valida tablas de catálogos reales.
- La conexión real y los registros en la tabla `producto` deben comprobarse manualmente en Laragon. Una restricción de clave foránea o esquema incorrecto puede impedir el alta y mostrar un mensaje de error.
- Fecha válida significa fecha calendárica: no se obliga a que sea futura en el servidor, porque los diez casos de la práctica no incluían esa regla.
- Sólo se modificó el alta; `editarProducto.php` y `actualizaproducto.php` permanecen como estaban.
