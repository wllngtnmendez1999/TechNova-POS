# Integración de la implementación previa de TechNova

## Antecedentes

El proyecto TechNova POS aprovecha como referencia una aplicación desarrollada anteriormente en la asignatura Desarrollo de Proyecto con Software Libre.

Esta aplicación fue construida utilizando Laravel, PHP, MariaDB, Apache, Ubuntu Server y Bootstrap. Su funcionalidad principal consiste en gestionar productos tecnológicos mediante operaciones CRUD.

## Relación con los requisitos

El módulo de productos se relaciona directamente con el requisito RF-01, que establece la necesidad de registrar, consultar, modificar y eliminar productos.

También presenta una relación parcial con el requisito RF-02, debido a que almacena y muestra la cantidad disponible de productos mediante el campo `stock`.

Los requisitos correspondientes a clientes, ventas e historial de ventas todavía requieren desarrollo e integración.

## Relación con los diagramas UML

El modelo Producto y el controlador encargado de gestionar sus operaciones permiten establecer una relación entre el código fuente y los diagramas elaborados durante Ingeniería de Software I.

El diagrama de clases representa las entidades y sus relaciones, mientras que los diagramas de casos de uso y secuencia permiten explicar las operaciones que realiza el usuario al administrar los productos.

## Arquitectura

La implementación anterior utiliza el patrón Modelo-Vista-Controlador (MVC) proporcionado por Laravel.

La aplicación se ejecutaba sobre Ubuntu Server mediante Apache y utilizaba MariaDB para almacenar los registros de productos.

Esta estructura constituye una referencia técnica para la ampliación del sistema hacia un punto de ventas más completo.

## Estado de integración

El código fuente de la implementación anterior se ha incorporado al repositorio TechNova-POS dentro de la carpeta `implementacion-previa/technova-laravel/`.

Su incorporación al repositorio representa una actividad de reutilización y documentación de software. No implica que los módulos pendientes del sistema POS estén implementados ni que se hayan completado las pruebas de integración.
