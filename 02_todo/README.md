composer run dev

php artisan make:migration create_tasks_table

php artisan migrate

php artisan make:model Task

php artisan make:factory TaskFactory --model=Task

php artisan db:seed

php artisan make:controller TaskController

php artisan make:request StoreTaskRequest
