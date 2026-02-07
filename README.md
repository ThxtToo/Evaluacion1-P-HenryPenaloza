EVALUACIÓN 1 - Paradigmas de Programación (Fase III)

Institución: Universidad Politécnica Territorial del Estado Aragua "Federico Brito Figueroa"

**Sede:** La Victoria - Estado Aragua

**PNF:** Informática

**Profesor:** Elías Vargas

**Enunciado:** Enunciado 4 - Recursos Humanos (Gestión de Empleados)

---

##  Integrantes

* **Henry Peñaloza**

---

##  Instrucciones de Instalación y Ejecución

###  Para Usuarios de Linux (antiX / Debian / Ubuntu)

1. Clonar el repositorio:
git clone [https://github.com/ThxtToo/Evaluacion1-P-HenryPenaloza.git](https://www.google.com/search?q=https://github.com/ThxtToo/Evaluacion1-P-HenryPenaloza.git)
cd Evaluacion1-P-HenryPenaloza
2. Instalar dependencias:
composer install
3. Configurar el entorno:
cp .env.example .env
touch database/database.sqlite
4. Generar llave y ejecutar migraciones con datos de prueba:
php artisan key:generate
php artisan migrate:fresh --seed
5. Iniciar servidor:
php artisan serve
6. Ir a (ejemplo) http://127.0.0.1:8000/empleados


### Para Usuarios de Windows

1. Clonar el repositorio:
git clone [https://github.com/ThxtToo/Evaluacion1-P-HenryPenaloza.git](https://www.google.com/search?q=https://github.com/ThxtToo/Evaluacion1-P-HenryPenaloza.git)
cd Evaluacion1-P-HenryPenaloza
2. Instalar dependencias:
composer install
3. Preparar el archivo de configuración:
copy .env.example .env
4. Ejecutar base de datos y llaves:
php artisan key:generate
php artisan migrate:fresh --seed
5. Iniciar servidor:
php artisan serve
6. Ir a (ejemplo) http://127.0.0.1:8000/empleados

---

## Tecnologías Utilizadas

* Framework: Laravel 12
* Lenguaje: PHP 8.2+
* Base de Datos: SQLite
* Control de Versiones: Git / GitHub
* Sistema Operativo: antiX Linux

