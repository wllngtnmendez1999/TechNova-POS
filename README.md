# TechNova – Sistema de Punto de Ventas (POS)

## Descripción
TechNova es un proyecto de sistema de punto de ventas orientado a mejorar la gestión de una tienda de productos tecnológicos.

## Objetivo
Diseñar un sistema digital que permita gestionar productos, clientes, inventario y ventas de una manera más organizada, facilitando el registro y la consulta de información.

## Problema que resuelve
La gestión manual o mediante registros separados puede ocasionar errores en las existencias, retrasos al registrar ventas y dificultades para consultar la información. TechNova propone integrar estos procesos en un mismo sistema.

## Funcionalidades principales
- Registrar, modificar, consultar y eliminar productos.
- Consultar y actualizar existencias del inventario.
- Registrar y consultar clientes.
- Registrar ventas seleccionando productos y cantidades.
- Consultar el historial de ventas.

## Arquitectura seleccionada
Se seleccionó una arquitectura por capas con separación entre frontend, backend y capa de datos.

### Frontend
Será responsable de la interfaz visual y de la interacción con los usuarios. Permitirá consultar productos, registrar clientes, gestionar ventas y visualizar información.

### Backend
Será responsable de procesar las solicitudes, aplicar las reglas de negocio, gestionar la autenticación y coordinar los módulos de productos, clientes, inventario y ventas.

### Capa de datos
Se encargará de almacenar y recuperar la información de productos, clientes, ventas y existencias.

### Comunicación entre frontend y backend
Se propone que el frontend envíe solicitudes HTTP a una API REST del backend, utilizando JSON para intercambiar información. El backend procesará las solicitudes, consultará la base de datos y devolverá los resultados al frontend. Esta comunicación se encuentra propuesta, pendiente de implementación.

## Herramientas utilizadas
- GitHub: repositorio y control de versiones.
- GitHub Projects: planificación y seguimiento de tareas.
- GitHub Issues: seguimiento de tareas e incidencias.
- Visual Paradigm Online: diagramas UML y arquitectura del sistema.

## Estado actual del proyecto
Versión inicial de documentación y diseño. Se han definido los requisitos funcionales, historias de usuario, modelos UML y arquitectura inicial. Las tareas de implementación, integración y pruebas continúan pendientes o en planificación.

## Próximos pasos
1. Continuar con el diseño de la interfaz.
2. Desarrollar los módulos de productos e inventario.
3. Implementar la base de datos.
4. Desarrollar los módulos de clientes y ventas.
5. Integrar los componentes y realizar pruebas funcionales.
