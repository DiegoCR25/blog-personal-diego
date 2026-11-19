# Blog personal (versión inicial)

Blog tipo portafolio en PHP + HTML + CSS + JavaScript, con datos provisionales.

## Requisitos
- PHP 8.0 o superior (recomendado PHP 8.2+)
- VS Code

## Ejecutar localmente
Desde la carpeta raíz `blog-personal`:

```bash
php -S localhost:8000
```

Abre http://localhost:8000 en tu navegador. **No** abras `index.php` con doble clic ni con Live Server: PHP necesita un servidor PHP.

## Editar contenido
- `datos/perfil.php`: nombre, cargo, descripción, ubicación.
- `datos/proyectos.php`: lista de proyectos provisionales.
- `datos/articulos.php`: artículos de muestra.
- `datos/habilidades.php`: lista de tecnologías.
- `assets/css/style.css`: colores y diseño.
- `assets/js/main.js`: menú adaptable a móviles.

## Arquitectura
- `index.php` carga datos y compone la portada.
- `componentes/` contiene piezas compartidas.
- `paginas/inicio.php` contiene las secciones de inicio, sobre mí, proyectos, artículos y contacto.
- `assets/` aloja recursos estáticos.

Las tarjetas de ejemplo no tienen enlaces porque aún no existen páginas individuales. El contacto contiene un texto provisional para no publicar una dirección de correo ficticia.

## Futuras etapas
1. Crear páginas individuales y navegación por rutas.
2. Crear detalles de artículos y proyectos.
3. Agregar imágenes reales y enlaces.
4. Evaluar alojamiento compatible con PHP.
