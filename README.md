- backup database
- git pull
- modificar .env
- php artisan migrate:reset
- php artisan migrate
- php artisan db:seed
- cp -R edutools/public/* www/edutools/
- nano www/edutools/index.php
  - require __DIR__.'/../../edutools/bootstrap/autoload.php';
  - $app = require_once __DIR__.'/../../edutools/bootstrap/app.php';
- dar permisos, carpeta exports que esta dentro de public... para que no salga fopen(exports/index.html): failed to open stream: Permission denied
  - /var# cd www/edutools/
  - /var/www/edutools# chmod -R o+w exports/
  - /var/www/edutools# chmod -R o+w
- Establecer en el ExportController.php -> $public_dir = '../../www/edutools';( a esta tambien hay que darle permisos(?) )
