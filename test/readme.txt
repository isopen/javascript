messenger_users - таблица пользователей
поля: id(int auto inc), firstname(varchar[50]), lastname(varchar[50]), surname(varchar[50]), activated(bool), created(timestamp with timezone), updated(timestap with timezone)
messenger_chats - таблица связей
поля: id(int auto inc), user_id(bigint), chat_id(bigint), name(varchar[50]), created(timestamp with timezone), updated(timestamp with timezone)
messenger_messages - таблица с сообщениями в чатах(партицировать допустим по chat_id)
поля: id(int auto inc), chat_id(bigint), message(text), deleted(bool) created(timestamp with timezone), updated(timestamp with timezone)

Цепочка операций:
1) На вход подается user_id - 95939293
2) По user_id производится поиск доступных чатов - select * from messenger_chats as mc where mc.user_id = 95939293;
3) Выводим список чатов или обрабатывает исключение когда чатов нет. Дублируем список в локальном хранилище(sqllite, localstorage).
3.1) Если списки с чатами предполагаются слишком большие, то грузим с limit 10-20 запоминая позицию.
4) При клике на чат(у нас уже есть в локальном хранилище chat_id. допустим chat_id = 76757473) следоветельно запрашиваем сообщения чата по таблице messenger_messages
