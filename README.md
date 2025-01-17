##PROYECTO RM TEST WITH LARAVEL

Desarrollo de backend para crm galileo v3 -rm1

## 🚀 Instalación

Sigue los siguientes pasos para descargar, configurar e instalar el proyecto en tu máquina local.

### 1. Clonar el repositorio

bash
git clone https://github.com/juanpablo72/BK_RM_LARAVEL.git

### 2. Configurar Entorno

Dentro del directorio del proyecto, crea un archivo .env basado en el archivo de ejemplo .env.example

cp .env.example .env

### 3. Instalar dependencias

composer install

### 4. Generar la clave de la aplicación

php artisan key:generate

### 5. Ejecutar migraciones

php artisan migrate

### 6 ejecutar servidor

php artisan serve

### 6 ver routes

php artisan route:list

# Endpoints API

# CONFIGURACION

NO API
----TODA LA PARTE DE CONFIGURACION ES DONDE ESTA TODO LOS AJUSTES COMO FORMATOS DE DISTRIBUCION , ZONA, ESTADO, MUNICIPIOS, PARROQUIAS, AGENCIAS_IMOBILIARIAS,TIPO_CONTRATOS ETC ---

# AGENTES

GET /agentes/ - Agentes activos
GET /agentes/id/ - Obtener agente por ID
POST /agentes/ - Registrar Agente
PUT /agentes/id/ - Editar agente
DELETE /agentes/id/ - Inactiva agente

# CLIENTES

GET /clientes/ - todos los clientes
GET /clientes/id/ - Obtener cliente por ID
GET /clientes/buscar -buscar cliente por datos
POST /clientes/ - Registrar Agente
PUT /clientes/id/ - Editar agente

# PROPIEDADES
