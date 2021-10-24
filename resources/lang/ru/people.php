<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Контакт не найден',
    'people_list_number_kids' => ':count ребёнок|:count детей',
    'people_list_last_updated' => 'Последнее обновление:',
    'people_list_number_reminders' => ':count напоминание|:count напоминаний',
    'people_list_blank_title' => 'Вы пока ни кого ещё не добавили',
    'people_list_blank_cta' => 'Добавить кого нибудь',
    'people_list_sort' => 'Сортировка',
    'people_list_stats' => ':count контакт|:count контактов',
    'people_list_firstnameAZ' => 'Сортировать по имени А → Я',
    'people_list_firstnameZA' => 'Сортировать по имени Я → А',
    'people_list_lastnameAZ' => 'Сортировать по фамилии А → Я',
    'people_list_lastnameZA' => 'Сортировать по фамилии Я → А',
    'people_list_lastactivitydateNewtoOld' => 'Сортировать по дате последней активности, от новых к старым',
    'people_list_lastactivitydateOldtoNew' => 'Сортировать по дате последней активности, от старых к новым',
    'people_list_filter_tag' => 'Показываются все контакты помеченные тэгом',
    'people_list_clear_filter' => 'Очистить фильтр',
    'people_list_contacts_per_tags' => ':count контакт|:count контактов',
    'people_list_show_dead' => 'Показать умерших людей (:count)',
    'people_list_hide_dead' => 'Скрыть умерших людей (:count)',
    'people_search' => 'Поиск контактов…',
    'people_search_no_results' => 'Ничего не найдено',
    'people_search_next' => 'Вперёд',
    'people_search_prev' => 'Предыдущий',
    'people_search_rows_per_page' => 'Строк на страницу',
    'people_search_of' => 'из',
    'people_search_page' => 'Страница',
    'people_search_all' => 'Все',
    'people_add_new' => 'Добавить',
    'people_list_account_usage' => 'Лимиты контактов: :current/:limit',
    'people_list_account_upgrade_title' => 'Перейдите на другой план чтобы получить больше возможностей.',
    'people_list_account_upgrade_cta' => 'Обновить сейчас',
    'people_list_untagged' => 'Просмотр контактов без тегов',
    'people_list_filter_untag' => 'Показаны все контакты без тегов',
    'archived_contact_readonly' => 'Архивированный контакт не может быть отредактирован, сначала разархивируйте его.',

    // people add
    'people_add_title' => 'Добавить человека',
    'people_add_missing' => 'Контакт не найден - добавьте новый сейчас',
    'people_add_firstname' => 'Имя',
    'people_add_middlename' => 'Отчество (не обязательно)',
    'people_add_lastname' => 'Фамилия (по желанию)',
    'people_add_email' => 'Электронная почта (по желанию)',
    'people_add_nickname' => 'Псевдоним (по желанию)',
    'people_add_cta' => 'Добавить',
    'people_save_and_add_another_cta' => 'Отправить и добавить кого-то еще',
    'people_add_success' => 'Контакт :name успешно создан',
    'people_add_gender' => 'Пол',
    'people_delete_success' => 'Контакт был удалён',
    'people_delete_message' => 'Удалить контакт',
    'people_delete_confirmation' => 'Вы уверены что хотите удалить этот контакт? Восстановление невозможно.',
    'people_add_birthday_reminder' => 'Поздравить :name с днём рождения',
    'people_add_birthday_reminder_deceased' => 'В этот день, :name будет отмечать свой день рождения',
    'people_add_import' => 'Вы хотите <a href=":url">импортировать ваши контакты</a>?',
    'people_edit_email_error' => 'В вашей учетной записи с таким адресом электронной почты уже есть контакт. Пожалуйста, выберите другой.',
    'people_export' => 'Экспортировать как vCard',
    'people_add_reminder_for_birthday' => 'Создать ежегодное напоминание о дне рождения',

    // show
    'section_contact_information' => 'Контактная информация',
    'section_personal_activities' => 'Активности',
    'section_personal_reminders' => 'Напоминания',
    'section_personal_tasks' => 'Задачи',
    'section_personal_gifts' => 'Подарки',
    'section_personal_notes' => 'Заметки',

    // archived contacts
    'list_link_to_active_contacts' => 'Вы просматриваете архивные контакты. Просмотреть <a href=":url">список активных контактов</a>.',
    'list_link_to_archived_contacts' => 'Список архивированных контактов',

    // Header
    'me' => 'Это вы',
    'edit_contact_information' => 'Редактировать контакты',
    'contact_archive' => 'Архивировать контакт',
    'contact_unarchive' => 'Разархивировать контакт',
    'contact_archive_help' => 'Архивированные контакты не будут отображаться в списке контактов, но будут появляться в результатах поиска.',
    'call_button' => 'Зафиксировать звонок',
    'set_favorite' => 'Избранные контакты размещаются в верхней части списка контактов',

    // Stay in touch
    'stay_in_touch' => 'Оставаться на связи',
    'stay_in_touch_frequency' => 'Будьте на связи каждый день|Оставайтесь на связи каждые {count} дней',
    'stay_in_touch_next_date' => 'Next due: {date}',
    'stay_in_touch_invalid' => 'Частота должна быть числом больше 0.',
    'stay_in_touch_premium' => 'Вам нужно обновить свой аккаунт, чтобы использовать эту функцию',
    'stay_in_touch_modal_title' => 'Оставаться на связи',
    'stay_in_touch_modal_desc' => 'Мы можем напомнить вам по электронной почте связаться с {firstname} через одинаковый интервал.',
    'stay_in_touch_modal_label' => 'Присылать мне письма каждый… {count} день|Присылать мне письмо каждые… {count} дней',

    // Calls
    'modal_call_title' => 'Зафиксировать звонок',
    'modal_call_comment' => 'О чём вы разговаривали? (не обяз.)',
    'modal_call_exact_date' => 'Дата звонка',
    'modal_call_who_called' => 'Кто звонил?',
    'modal_call_emotion' => 'Вы хотите записать как вы чувствовали себя во время этого звонка? (опционально)',
    'calls_add_success' => 'Звонок сохранён.',
    'call_delete_confirmation' => 'Вы уверены что хотите удалить звонок?',
    'call_delete_success' => 'Звонок был удалён',
    'call_title' => 'Телефонные звонки',
    'call_empty_comment' => 'Нет деталей',
    'call_blank_title' => 'Отслеживать телефонные переговоры с {name}',
    'call_blank_desc' => 'Вы звонили {name}',
    'call_you_called' => 'Вы звонили',
    'call_he_called' => '{name} звонил(а)',
    'call_emotions' => 'Эмоции:',

    // Conversation
    'conversation_blank' => 'Записывать беседы с :name в соцсетях, SMS…',
    'conversation_delete_link' => 'Удалить разговор',
    'conversation_edit_title' => 'Изменить разговор',
    'conversation_edit_delete' => 'Вы уверены что хотите удалить этот разговор? Восстановление невозможно.',
    'conversation_add_success' => 'Разговор успешно добавлен.',
    'conversation_edit_success' => 'Разговор успешно обновлен.',
    'conversation_delete_success' => 'Разговор успешно удалён.',
    'conversation_add_title' => 'Записать беседу',
    'conversation_add_when' => 'Когда у вас был этот разговор?',
    'conversation_add_who_wrote' => 'От кого это сообщение?',
    'conversation_add_how' => 'Как вы общались?',
    'conversation_add_you' => 'Вы',
    'conversation_add_content' => 'Запишите о чем говорилось',
    'conversation_add_what_was_said' => 'Что вы сказали?',
    'conversation_add_another' => 'Добавить еще одно сообщение',
    'conversation_add_error' => 'Вы должны добавить хотя бы одно сообщение.',
    'conversation_list_table_messages' => 'Сообщения',
    'conversation_list_table_content' => 'Часть содержимого (последнее сообщение)',
    'conversation_list_title' => 'Разговоры',
    'conversation_list_cta' => 'Записать разговор',

    // age - birthday
    'birthdate_not_set' => 'Не указан день рождения',
    'age_approximate_in_years' => 'примерно :age лет',
    'age_exact_in_years' => ':age лет',
    'age_exact_birthdate' => 'день рожнения: :date',

    // Last called
    'last_called' => 'Последний звонок: :date',
    'last_called_empty' => 'Последний звонок: неизвестно',
    'last_activity_date' => 'Последняя активность вместе: :date',
    'last_activity_date_empty' => 'Последняя активность вместе: неизвестно',

    // additional information
    'information_edit_success' => 'Профиль был успешно обновлён',
    'information_edit_title' => 'Редактировать данные :name',
    'information_edit_max_size' => 'До :size Кб.',
    'information_edit_max_size2' => 'Макс. {size} Кб.',
    'information_edit_firstname' => 'Имя',
    'information_edit_lastname' => 'Фамилия (не обязательно)',
    'information_edit_description' => 'Описание (не обязательно)',
    'information_edit_description_help' => 'Используется в списке контактов для добавления контекста, в случае необходимости.',
    'information_edit_unknown' => 'Я не знаю возраст',
    'information_edit_probably' => 'Этот человек возможно…',
    'information_edit_not_year' => 'Я знаю день и месяц рождения товарища, но не знаю год…',
    'information_edit_exact' => 'Я знаю точный день рождения…',
    'information_edit_birthdate_label' => 'День рождения',
    'information_no_work_defined' => 'Рабочая информация не указана',
    'information_work_at' => 'работает в :company',
    'work_add_cta' => 'Обновите информацию о работе',
    'work_edit_success' => 'Информация о работе обновлена',
    'work_edit_title' => 'Обновление информации о работе: :name',
    'work_edit_job' => 'Должность (не обяз.)',
    'work_edit_company' => 'Компания (не обяз.)',
    'work_information' => 'Информация о работе',

    // food preferences
    'food_preferences_add_success' => 'Предпочтения в еде были сохранены',
    'food_preferences_edit_description' => 'Возможно у :firstname или кого-то из его(её) семьи есть аллергия. Или не любит какой-то определённый продукт. Запишите это и в следующий раз когда вы будете кушать вместе вы вспомните об этом',
    'food_preferences_edit_description_no_last_name' => 'Возможно у :firstname или кого-то из её семьи есть аллергия. Или не любит какой-то определённый продукт. Запишите это и в следующий раз когда вы будете кушать вместе вы вспомните об этом',
    'food_preferences_edit_title' => 'Укажите предпочтения в еде',
    'food_preferences_edit_cta' => 'Сохранить предпочтения в еде',
    'food_preferences_title' => 'Предпочтения в еде',
    'food_preferences_cta' => 'Добавить предпочтения в еде',

    // reminders
    'reminders_blank_title' => 'Есть ли что-то связанное с :name, о чём вы хотите получить напоминание?',
    'reminders_blank_add_activity' => 'Добавить напоминание',
    'reminders_add_title' => 'О чём, связанном с :name, вам напомнить?',
    'reminders_add_description' => 'Напомните мне…',
    'reminders_add_next_time' => 'Когда в следующий раз вы хотите получить напоминание?',
    'reminders_add_once' => 'Напомнить один раз',
    'reminders_add_recurrent' => 'Повторять напоминание с периодичностью: ',
    'reminders_add_starting_from' => 'начиная с даты указанной выше',
    'reminders_add_cta' => 'Добавить напоминание',
    'reminders_edit_update_cta' => 'Обновить напоминание',
    'reminders_add_error_custom_text' => 'Вы должны указать текст для этого напоминания',
    'reminders_create_success' => 'Напоминание было добавлено',
    'reminders_delete_success' => 'Напоминание было удалено',
    'reminders_update_success' => 'Напоминание успешно обновлено',
    'reminders_add_optional_comment' => 'Комментарий (не обязательно)',

    'reminder_frequency_day' => 'каждый день|[2,4]раз в :number дня|[5,*]раз в :number дней',
    'reminder_frequency_week' => 'каждую :number неделю|каждые :number недели|каждые :number недель',
    'reminder_frequency_month' => 'каждый :number месяц|каждые :number месяца|каждые :number месяцев',
    'reminder_frequency_year' => 'каждый :number год|каждые :number года|каждые :number лет',
    'reminder_frequency_one_time' => 'в :date',
    'reminders_delete_confirmation' => 'Вы уверены что хотите удалить это напоминание?',
    'reminders_delete_cta' => 'Удалить',
    'reminders_next_expected_date' => 'в',
    'reminders_cta' => 'Добавить напоминание',
    'reminders_description' => 'Мы отправим email по каждому из приведенных ниже напоминаний. Напоминания отправляются каждое утро в день, когда произойдут события. Напоминания, автоматически добавленные для дней рождения, не могут быть удалены. Если вы хотите изменить эти даты, отредактируйте день рождения контакта.',
    'reminders_one_time' => 'один раз',
    'reminders_type_week' => 'неделя',
    'reminders_type_month' => 'месяц',
    'reminders_type_year' => 'год',
    'reminders_birthday' => 'Birthdate of :name',
    'reminders_free_plan_warning' => 'Вы находитесь на бесплатном тарифном плане. На этом тарифном плане электронные письма не отправляются. Чтобы получать напоминания по электронной почте, повысьте уровень своей учетной записи.',

    // relationships
    'relationship_form_add' => 'Добавить связь',
    'relationship_form_edit' => 'Редактировать существующие отношения',
    'relationship_form_is_with' => 'Этот человек…',
    'relationship_form_is_with_name' => ':name…',
    'relationship_form_add_choice' => 'С кем эти отношения?',
    'relationship_form_create_contact' => 'Добавить человека',
    'relationship_form_associate_contact' => 'Существующий контакт',
    'relationship_form_associate_dropdown' => 'Поиск и выбор существующего контакта из списка ниже',
    'relationship_form_associate_dropdown_placeholder' => 'Поиск и выбор существующего контакта',
    'relationship_form_also_create_contact' => 'Создать запись контакта для этого человека.',
    'relationship_form_add_description' => 'Это позволит вам относиться к этому человеку как к любому другому контакту.',
    'relationship_form_add_no_existing_contact' => 'У вас нет контактов, которые могут быть связаны с :name.',
    'relationship_delete_confirmation' => 'Вы уверены, что хотите удалить эти отношения? Восстановление невозможно.',
    'relationship_unlink_confirmation' => 'Вы уверены, что хотите удалить это отношение? Этот человек не будет удален – только отношения между ними.',
    'relationship_form_add_success' => 'Связь была успешно установлена.',
    'relationship_form_deletion_success' => 'Отношения были удалены.',

    // tasks
    'tasks_title' => 'Задачи',
    'tasks_blank_title' => 'У вас пока нет задач.',
    'tasks_form_title' => 'Заголовок',
    'tasks_form_description' => 'Описание (необязательно)',
    'tasks_add_task' => 'Добавить задачу',
    'tasks_delete_success' => 'Задача была усрешна удалена',
    'tasks_complete_success' => 'Статус задачи был изменён',

    // activities
    'activity_title' => 'Активности',
    'activity_type_category_simple_activities' => 'Простая деятельность',
    'activity_type_category_sport' => 'Спорт',
    'activity_type_category_food' => 'Еда',
    'activity_type_category_cultural_activities' => 'Культурная деятельность',
    'activity_type_just_hung_out' => 'просто повеселились',
    'activity_type_watched_movie_at_home' => 'смотрели кино дома',
    'activity_type_talked_at_home' => 'разговаривали дома',
    'activity_type_did_sport_activities_together' => 'занимались спортом',
    'activity_type_ate_at_his_place' => 'ели у них',
    'activity_type_went_bar' => 'отправились в бар',
    'activity_type_ate_at_home' => 'ели дома',
    'activity_type_picnicked' => 'устраивали пикник',
    'activity_type_ate_restaurant' => 'ели в ресторане',
    'activity_type_went_theater' => 'ходили в театр',
    'activity_type_went_concert' => 'ходили на концерт',
    'activity_type_went_play' => 'ходили играть',
    'activity_type_went_museum' => 'были в музее',
    'activities_add_activity' => 'Добавить активность',
    'activities_add_more_details' => 'Добавить подробности',
    'activities_add_emotions' => 'Добавить эмоции',
    'activities_add_category' => 'Укажите категорию',
    'activities_add_participants_cta' => 'Добавить участников',
    'activities_item_information' => ':Activity. Дата: :date',
    'activities_add_title' => 'Что вы делали с {name}?',
    'activities_summary' => 'Опишите что вы делали',
    'activities_add_pick_activity' => 'Хотели бы вы классифицировать эту деятельность? Это не обязательно, но она даст вам статистику позже (опционально)',
    'activities_add_date_occured' => 'Это происходило…',
    'activities_add_participants' => 'Кто, кроме {name}, участвовал в этой активности? (опционально)',
    'activities_add_emotions_title' => 'Вы хотите отметить свои ощущения во время этой активности? (опционально)',
    'activities_blank_title' => 'Keep track of what you’ve done with {name} in the past, and what you’ve talked about',
    'activities_blank_add_activity' => 'Добавить активность',
    'activities_add_success' => 'Активность была добавлена',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'Активность была обновлена',
    'activities_delete_success' => 'Активность была удалена',
    'activities_who_was_involved' => 'Кто был вовлечен?',
    'activities_activity' => 'Activity Category',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',
    'activities_list_participants' => 'Participants ({total}):',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Категория:',

    // notes
    'notes_create_success' => 'Заметка была добавлена',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'Заметка была удалена',
    'notes_add_cta' => 'Добавить заметку',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Удалить заметку',
    'notes_delete_confirmation' => 'Вы уверены что хотите удалить эту заметку? Восстановление невозможно.',

    // gifts
    'gifts_title' => 'Подарки',
    'gifts_add_success' => 'Подарок был добавлен',
    'gifts_delete_success' => 'Подарок был удалён',
    'gifts_delete_confirmation' => 'Вы уверены что хотите удалить этот подарок?',
    'gifts_add_gift' => 'Добавить подарок',
    'gifts_link' => 'Ссылка',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Удалить',
    'gifts_add_title' => 'Управление подарками для :name',
    'gifts_add_gift_idea' => 'Идея подарка',
    'gifts_add_gift_already_offered' => 'Подарок уже предложен',
    'gifts_add_gift_received' => 'Получен подарок',
    'gifts_add_gift_title' => 'Что это за подарок?',
    'gifts_add_gift_name' => 'Gift name',
    'gifts_add_link' => 'Ссылка на веб-страницу (не обязательно)',
    'gifts_add_value' => 'Стоимость (не обязательно)',
    'gifts_add_comment' => 'Комментарий (не обязательно)',
    'gifts_add_recipient' => 'Recipient (optional)',
    'gifts_add_recipient_field' => 'Получатель',
    'gifts_add_photo' => 'Photo (optional)',
    'gifts_add_photo_title' => 'Добавить фото этого подарка',
    'gifts_add_someone' => 'This gift is for someone in {name}’s family in particular',
    'gifts_delete_title' => 'Delete a gift',
    'gifts_ideas' => 'Идеи подарка',
    'gifts_offered' => 'Предложенные подарки',
    'gifts_offered_as_an_idea' => 'Отметить как идею',
    'gifts_received' => 'Полученные подарки',
    'gifts_view_comment' => 'Просмотреть комментарий',
    'gifts_mark_offered' => 'Отметить как предложенный\'',
    'gifts_update_success' => 'Подарок успешно обновлен',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => 'Вы уверены что хотите удалить этот долг?',
    'debt_delete_success' => 'Долг был удалён',
    'debt_add_success' => 'Долг был добавлен',
    'debt_title' => 'Долги',
    'debt_add_cta' => 'Добавить долг',
    'debt_you_owe' => 'Вы должны :amount',
    'debt_they_owe' => ':name должен вам :amount',
    'debt_add_title' => 'Управление долгами',
    'debt_add_you_owe' => 'Вы должны :name',
    'debt_add_they_owe' => ':name должен вам',
    'debt_add_amount' => 'сумма ',
    'debt_add_reason' => 'причина долга (не обязательно)',
    'debt_add_add_cta' => 'Добавить долг',
    'debt_edit_update_cta' => 'Обновить задолженность',
    'debt_edit_success' => 'Долг успешно обновлен',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you',

    // tags
    'tag_edit' => 'Редактировать метку',
    'tag_add' => 'Добавить метки',
    'tag_add_search' => 'Добавить или искать метки',
    'tag_no_tags' => 'Пока нет меток',

    // Introductions
    'introductions_sidebar_title' => 'Как вы встретились',
    'introductions_blank_cta' => 'Укажите, как вы встретились с :name',
    'introductions_title_edit' => 'Как вы познакомились с :name?',
    'introductions_additional_info' => 'Расскажите, как и где вы встретились',
    'introductions_edit_met_through' => 'Кто-то ознакомил вас с этим человеком?',
    'introductions_no_met_through' => 'Никто',
    'introductions_first_met_date' => 'Дата знакомства',
    'introductions_no_first_met_date' => 'Я не знаю дату, когда мы познакомились',
    'introductions_first_met_date_known' => 'Это дата, когда мы познакомились',
    'introductions_add_reminder' => 'Добавьте напоминание об юбилее',
    'introductions_update_success' => 'Вы успешно обновили информацию о том, как вы встретили этого человека',
    'introductions_met_through' => 'Знакомство через <a href=":url">:name</a>',
    'introductions_met_date' => 'Познакомились :date',
    'introductions_reminder_title' => 'Годовщина знакомства',

    // Deceased
    'deceased_reminder_title' => 'Годовщина смерти :name',
    'deceased_mark_person_deceased' => 'Mark this as deceased',
    'deceased_know_date' => 'I know the date that this person died',
    'deceased_add_reminder' => 'Добавить напоминание на эту дату',
    'deceased_label' => 'Умерший',
    'deceased_date_label' => 'Дата смерти',
    'deceased_label_with_date' => 'Дата смерти :date',
    'deceased_age' => 'Возраст смерти',

    // Contact information
    'contact_info_title' => 'Контактная информация',
    'contact_info_form_content' => 'Содержание',
    'contact_info_form_contact_type' => 'Тип контакта',
    'contact_info_form_personalize' => 'Personalize',
    'contact_info_address' => 'Lives in',

    // Addresses
    'contact_address_title' => 'Адреса',
    'contact_address_form_name' => 'Label (optional)',
    'contact_address_form_street' => 'Street (optional)',
    'contact_address_form_city' => 'City (optional)',
    'contact_address_form_province' => 'Province (optional)',
    'contact_address_form_postal_code' => 'Postal code (optional)',
    'contact_address_form_country' => 'Country (optional)',
    'contact_address_form_latitude' => 'Широта (только цифры) (необязательно)',
    'contact_address_form_longitude' => 'Долгота (только цифры) (необязательно)',

    // Pets
    'pets_kind' => 'Вид питомца',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'Питомец был успешно добавлен',
    'pets_update_success' => 'The pet has been updated',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Питомцы',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Птица',
    'pets_cat' => 'Кошка',
    'pets_dog' => 'Собака',
    'pets_fish' => 'Рыбка',
    'pets_hamster' => 'Хомяк',
    'pets_horse' => 'Лошадь',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Добавить ежегодное напоминание об этом событии',
    'life_event_create_success' => 'Событие жизни добавлено',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Got a pet',
    'life_event_sentence_end_of_relationship' => 'Ended a relationship',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Moved',
    'life_event_sentence_bought_a_home' => 'Bought a home',
    'life_event_sentence_home_improvement' => 'Made a home improvement',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Got a new vehicle',
    'life_event_sentence_new_roommate' => 'Got a roommate',
    'life_event_sentence_overcame_an_illness' => 'Overcame an illness',
    'life_event_sentence_quit_a_habit' => 'Quit a habit',
    'life_event_sentence_new_eating_habits' => 'Started new eating habits',
    'life_event_sentence_weight_loss' => 'Lost weight',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Had surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Документы',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_title' => 'Photos',
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_current_profile_pic' => 'Current profile picture',
    'photo_make_profile_pic' => 'Make profile picture',
    'photo_delete' => 'Delete photo',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => 'Change your avatar',
    'avatar_question' => 'Which avatar would you like to use?',
    'avatar_default_avatar' => 'The default avatar',
    'avatar_adorable_avatar' => 'The Adorable avatar',
    'avatar_gravatar' => 'The Gravatar associated with the email address of this person. <a href="https://gravatar.com/">Gravatar</a> is a global system that lets users associate email addresses with photos.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Work',
    'contact_field_label_cell' => 'Mobile',
    'contact_field_label_fax' => 'Fax',
    'contact_field_label_pager' => 'Pager',
    'contact_field_label_main' => 'Main',
    'contact_field_label_other' => 'Other',
    'contact_field_label_personal' => 'Personal',
];
