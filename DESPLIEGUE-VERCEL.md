# Blog personal en Vercel

## 1. Agrega los archivos en VS Code

En la terminal de tu clon de `DiegoCR25/blog-personal`, crea una rama:

```powershell
git switch -c vercel-preview
```

Extrae el ZIP y copia `api/`, `vercel.json` y `.gitignore` junto al
`index.php` de la raíz. Si ya tienes un `.gitignore`, agrega las dos líneas
a tu archivo actual. Esta guía también se puede copiar si quieres conservarla
en tu repositorio.

`api/index.php` carga la portada existente. `includeFiles` empaqueta las
plantillas y los datos con la función PHP. La regla `rewrites` permite abrir
la portada desde `/`. El comando de compilación copia `assets/` a `dist/`
para que se sirvan el CSS, JavaScript y las futuras imágenes desde las URL
actuales. Mantén `dist/` fuera de Git.

## 2. Sube la rama cuando quieras iniciar la prueba

```powershell
git add -- api/index.php vercel.json .gitignore
git diff --cached
git commit -m "Configurar blog PHP para Vercel"
git push -u origin vercel-preview
```

En Vercel, importa `DiegoCR25/blog-personal` y usa **Other** como preset.
Deja como **Root Directory** la carpeta que contiene `index.php` y
`vercel.json` (la raíz del repositorio actual). El archivo `vercel.json`
define el comando de compilación y la carpeta de salida.

Si el proyecto todavía no existe en Vercel, la importación suele desplegar
la rama de producción `main`. Para que la primera importación tenga esta
configuración, puedes fusionar esta rama a `main` antes de importar.
Si el proyecto ya está conectado a GitHub, el push a `vercel-preview`
normalmente genera una vista previa separada. Si subiste la rama antes de
conectar GitHub, un nuevo push a esa rama puede activar la vista previa una
vez conectado el repositorio.

## 3. Comprueba el despliegue

En **Deployments**, abre la URL del despliegue cuando el estado sea **Ready**.

- Abre `/` y comprueba la portada oscura y sus secciones.
- En **Network** (F12), verifica que `/assets/css/style.css` y
  `/assets/js/main.js` respondan con código 200.
- Prueba el menú en el modo móvil del navegador.
- Si falla la compilación, revisa **Build Logs**. Si la portada devuelve
  un error 500, revisa los registros de la función.

Para iterar en la rama, edita en VS Code, haz commit y ejecuta `git push`.
Con GitHub conectado, Vercel generará un nuevo despliegue para esa rama.
Fusiona a `main` cuando quieras actualizar producción. Para probar estas
vistas previas solo necesitas Git y un navegador en tu computadora.

Esta configuración usa `vercel-php@0.9.0`, un runtime comunitario. Para
arrancar el servidor local por tu cuenta basta con PHP instalado y el
comando `php -S localhost:8000` desde la raíz del blog.
