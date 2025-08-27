# Dev: Laravel 12 + Jetstream Livewire + MySQL + Español

Este proyecto inicia con Laravel 12, Jetstream Livewire, configuración regional en español, base de datos MySQL y los paquetes de iconos Blade Solar y RPG Awesome.

## Instalación rápida

1. **Clona el repositorio**
   ```bash
   git clone https://github.com/DeVikinger/Dev.git
   cd Dev
   ```

2. **Instala las dependencias**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configura tu entorno**
   - Copia `.env.example` a `.env` y ajusta tus credenciales de MySQL.

4. **Migraciones**
   ```bash
   php artisan migrate
   ```

5. **Instala Jetstream Livewire**
   ```bash
   php artisan jetstream:install livewire
   npm install && npm run dev
   php artisan migrate
   ```

6. **Instala los paquetes de iconos**
   ```bash
   composer require codeat3/blade-solar-icons
   composer require codeat3/blade-rpg-awesome-icons
   ```

7. **Configura el idioma**
   - El proyecto ya está configurado para español en `config/app.php`.

---

## Workflows y desarrollo en la nube

- El proyecto incluye un workflow de GitHub Actions para instalar dependencias automáticamente.
- Puedes abrirlo directamente en Codespaces o Gitpod.

---

## Referencias

- [Laravel Documentation](https://laravel.com/docs/12.x)
- [Jetstream Livewire](https://jetstream.laravel.com/)
- [Blade Solar Icons](https://github.com/codeat3/blade-solar-icons)
- [Blade RPG Awesome Icons](https://github.com/codeat3/blade-rpg-awesome-icons)
