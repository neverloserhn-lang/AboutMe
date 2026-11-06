@echo off
echo === Menyiapkan proyek About Me ===
if not exist .env copy .env.example .env
call composer install
php artisan key:generate
call npm install
echo.
echo Selesai. Jalankan dua perintah ini di dua terminal berbeda:
echo    php artisan serve
echo    npm run dev
pause
