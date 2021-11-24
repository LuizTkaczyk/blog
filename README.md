### Para criar um controlador: 
**php artisan make:controller HomeController**

### Para inserir no bd: 
**php artisan migrate**

### Para inserir nossas tabelas no bd: 
**php artisan make:migration create_cursos_table**

### Para desfazer a inserção de uma tabela bd: 
**php artisan migrate:rollback**


### Para atualizar as tabelas, porem apaga todos os dados existentes: 
**php artisan migrate:fresh**

### Para resetar as tabelas: 
**php artisan migrate:reset**

### Para atualizar uma tabela, porem, sem deletar os campos (ex:adicione a coluna avatar a tabela users): 
**php artisan make:migration add_avatar_to_users_table**


### Para criar uma model: 
**php artisan make:model Curso**


### Para criar uma factory: 
**php artisan make:factory CursoFactory**

https://www.youtube.com/watch?v=lLyWpWA8J0s&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=11
