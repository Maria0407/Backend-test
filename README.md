# Backend-test
Тестовое задание для бэкенд-разработчика
Выполнено при помощи фреймворка Laravel.
Основные файлы:
- app/
    - User.php: модель User, соотв. таблице users в БД;
    - Order.php: модель Order, соотв. таблице orders в БД;
    - Console/Commands/DivideArray.php - класс консольной команды по разделению массива: если при написании команды 
      вводится идентификатор пользователя, то весь запрос (массив, число, результат и идентификатор) сохраняются в БД -
      иначе результат выводится просто на консоль;
    - Http/Controllers/OrdersController.php - контроллер, соответствующий модели Order, имеющий функции показа и добавления новых      запросов в БД и открытия формы для добавления запроса;
      
- database/migrations: папка миграций БД, в частности, в одном из файлов создается таблица orders для хранения запросов и привязки  их к пользователям; таблица состоит из столбцов: id, number(введенное число), array(введенная строка-массив, которую нужно
  разделить), user_id(ид. пользователя - внешний ключ к таблице users), answer(результат работы алгоритма: строка из индекса и значения, где нужно ставить разделитель);
- resources/views: содержит, в частности, виды createrequest и index, соотв. модели Order и контроллеру OrdersController;
- routes/web.php: прописаны маршруты приложения.

Примечание: массив вводить через одинарный пробел при работе как с формой запроса на странице, так и с консольной командой.
