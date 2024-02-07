## [ejercicio 2]

## NEW VERSION [1.0.0] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/00fea2de1540b3bc76ac1e68a3b2296c715bd8a5
    - feat(): Se ha agregado el proyecto

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- No presentaron cambios.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.
____________________________________________________________________________________________________________________

## NEW VERSION [1.0.1] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/1662273644f0b3b075788547ec121e1ca4c6d9da
    - Se ha agregado README.md

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- No presentaron cambios.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Root
- Se ha agregado README.md con los autores y metas del ejercicio
____________________________________________________________________________________________________________________

## NEW VERSION [1.0.2] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/1662273644f0b3b075788547ec121e1ca4c6d9da
    - Se ha agregado el componentes

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- No presentaron cambios.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- templates/componentes/LblTotal.html.twig
    - Se ha creado un modelo para el total
-  templates/payment_method/index.html.twig
    - Se ha creado una vista

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.
____________________________________________________________________________________________________________________

## NEW VERSION [1.0.3] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/1662273644f0b3b075788547ec121e1ca4c6d9da
    - Creación de vista de botón de pago y modificación modular

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
-Creación Clase que gestiona los métodos de pago.
    - Clase: PaymentMethodController

### Controladores
- No presentaron cambios.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- templates/componentes/BtnPaymentMethod.html.html.twig
    - Se ha creado un modelo para botón

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.
____________________________________________________________________________________________________________________

## NEW VERSION [1.0.4] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/1662273644f0b3b075788547ec121e1ca4c6d9da
    - Se ha agregado el componentes

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
-Creación Clase que gestiona los métodos de pago.
    - Clase: PaymentMethodController

### Controladores
- src/Controller/PaymentMethodController.php
    - Se ha agregado nuevo enrutamiento
        Nombre : payment

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Componentes
- templates/components/BtnPaymentMethod.html.twig
    - se ha modifcado el estilo
- templates/payment_method/payment.html.twig
    - se ha creado la vista de pago
- templates/base.html.twig
    - se ha agregado los estilo de todo los componente aquí
____________________________________________________________________________________________________________________

## NEW VERSION [1.0.5] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/51ea2a7e7161c20adaf6811d06a4de2810e660f3
    - Se realizó la creación del componente Twig y un controlador asignado con los cuales se presenta la vista correspondiente a los resultados seleccionados durante la transacción a modo de detalle general previo a pagar. 

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- src/controller/PaymentController.php
    -Nueva función que valida los parámetros necesarios para la emisión y visualización de la información previa a pagar.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Componentes
- src/templates/payment/index.html.twig
    - Nuevo componente que entrega una vista de los resultados previos para realizar el pago.

____________________________________________________________________________________________________________________

## NEW VERSION [1.0.6] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/566be7ff55e429dfebb7cee2b6a54e871f75368f
    - Se realizaron las clases necesarias para gestionar cada método de pago.

- Desarrollador Responsable : Esteban Cárdenas

### Entidades
- No presentaron cambios.

### Clases
- Una clase nueva para cada método de pago:
    -khyp.php
    -mercadoPago.php
    -redolComp.php
    -transbank.php
    -webPay

### Controladores
- src/controller/PaymentController.php
    -Nueva función que valida los parámetros necesarios para la emisión y visualización de la información previa a pagar.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

____________________________________________________________________________________________________________________

## NEW VERSION [1.0.7] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/566be7ff55e429dfebb7cee2b6a54e871f75368f
    - Se ha creado archivo de parametros.

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
   - src/Controller/PaymentMethodController.php
       - Se ha modificado variable de parametro
   - src/Controller/PaymentController.php
       - Se ha modificado variable de parametro

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Configuración
   - config/packages/parameters.yaml
       - Se ha agregado nueva configuración de parametros

____________________________________________________________________________________________________________________

## NEW VERSION [1.0.8] - 2024-02-06
### Added
- https://github.com/training-webFactura/ejercicio_2/commit/566be7ff55e429dfebb7cee2b6a54e871f75368f
    - Se ha creado el CHANGELOG.md y subir los cambios pendientes

- Desarrollador Responsable : Nibaldo Chavez

### Entidades
- No presentaron cambios.

### Clases
- No presentaron cambios.

### Controladores
- No presentaron cambios.

### Formularios
- No presentaron cambios.

### Comandos
- No presentaron cambios.

### Vistas
- No presentaron cambios.

### Repositorios
- No presentaron cambios.

### Eventos
- No presentaron cambios.

### Base de datos
- No presentaron cambios.

### Rutas
- No presentaron cambios.

### Configuración
- No presentaron cambios.