# todolist-yii

composer require bilalbaraz/todolist-yii

# configuration

backend/config/main-local.php

'todolist' => [
    'class' => 'backend\modules\todolist\Todolist',
],

# migrate

php yii migrate/up --migrationPath=@yii/todolist/migrations
