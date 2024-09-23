В Laravel создание и управление таблицами с помощью миграций — это мощный инструмент для управления структурой базы данных. Вот пошаговое руководство по созданию таблиц и управлению ими с помощью миграций.

1. Создание миграции
Чтобы создать новую миграцию для таблицы, используйте команду Artisan:

bash

php artisan make:migration create_posts_table --create=posts
2. Определение структуры таблицы
Откройте созданный файл миграции в папке database/migrations. Внутри вы увидите два метода: up() и down().

Пример определения структуры таблицы posts:

php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Автоинкрементный идентификатор
            $table->string('title'); // Столбец для заголовка
            $table->text('content'); // Столбец для содержимого
            $table->timestamps(); // Столбцы created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
3. Выполнение миграций
После определения структуры таблицы выполните миграцию:

bash

php artisan migrate
Это создаст таблицу posts в базе данных.

4. Изменение существующей таблицы
Чтобы изменить существующую таблицу, создайте новую миграцию. Например, добавим новый столбец author_id в таблицу posts:

bash

php artisan make:migration add_author_id_to_posts_table --table=posts
Затем в новой миграции определите изменения:

php

public function up()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->unsignedBigInteger('author_id')->after('content'); // Добавляем новый столбец
    });
}

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('author_id'); // Удаляем столбец при откате миграции
    });
}
5. Откат миграций
Если необходимо откатить последнюю миграцию, выполните:

bash

php artisan migrate:rollback
Если хотите откатить все миграции, используйте:

bash

php artisan migrate:reset
6. Проверка состояния миграций
Вы можете проверить, какие миграции были выполнены:

bash

php artisan migrate:status
7. Применение миграций заново
Если хотите удалить все таблицы и применить миграции заново, используйте:

bash

php artisan migrate:fresh
Заключение
Использование миграций в Laravel упрощает управление таблицами и позволяет легко отслеживать изменения в структуре базы данных. Если у вас есть вопросы или нужны примеры, не стесняйтесь спрашивать!



