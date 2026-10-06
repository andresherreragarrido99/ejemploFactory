# Patrón de Diseño Factory en PHP

Proyecto de ejemplo que implementa el patrón creacional **Factory (Fábrica)** para gestionar distintos planes de suscripción y calcular descuentos para clientes.

## 🚀 Características
- **Carga automática de clases:** Implementado con `spl_autoload_register`.
- **Patrón Factory:** Encapsula la lógica de creación de instancias según las propiedades del cliente.
- **Estructura limpia:** Separación de lógica de dominio (`src/`) y punto de entrada público (`public/`).

## 🛠️ Requisitos
- PHP 8.x
- Servidor local (Apache / Nginx / XAMPP)

## 📁 Estructura del proyecto
ejemploFactory/
├── public/
│   └── uno.php          # Punto de entrada principal
└── src/
├── Cliente.php      # Modelo de cliente
├── PlanFactory.php  # Fábrica para instanciar planes
└── Plan*.php        # Implementaciones de los distintos planes