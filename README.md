# probono.by

Как всё у себя установить. В гите только тема, поэтому разверните у себя Вордпресс на локалхосте. В папке ./wp-content/themes создайте папку probono, туда и слейте себе репозиторий.

Для работы с scss файлами используется Gulp, файл gulpfile.js уже в репозитории, если нужно будет править скрипты, там уже есть закомменченный блок для скриптов.

В папке ./theme в репозитории залита тема, которая используется для сайта, оттуда можно брать блоки. Если нужно что-то сделать новое, давайте стараться по-макимуму использовать существующую тему.

После установки Вордпресса на локалхосте надо установить следующие плагины:
- Advanced Custom Fields PRO - этот плагин платный, его заливаем не через UI поиска плагинов, а через заливку вручную архива с плагином в админке. Архив положил в корень репозитория 
- Advanced Custom Fields: Extended
- Custom Post Type UI

Дамп БД с сервера на состояние 14:12 2020.08.16 в корне репозитория в файле probono.sql
