<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [
    'yes' => 'はい',
    'no' => 'いいえ',
    'update' => '更新',
    'save' => '保存',
    'add' => '追加',
    'cancel' => 'キャンセル',
    'confirm' => '確定する',
    'delete_confirm' => 'Are you sure?',
    'delete' => '削除',
    'edit' => '編集',
    'upload' => 'アップロード',
    'download' => 'ダウンロード',
    'save_close' => '保存して閉じる',
    'close' => '閉じる',
    'copy' => 'コピー',
    'create' => '作成する',
    'remove' => '削除する',
    'revoke' => '取り消し',
    'done' => '完了',
    'back' => '戻る',
    'verify' => '検証',
    'new' => '新規',
    'unknown' => 'わかりません',
    'load_more' => '更に読み込む',
    'loading' => 'Loading…',
    'with' => 'with',
    'today' => '今日',
    'yesterday' => '昨日',
    'another_day' => 'another day',
    'date' => '日付',
    'type' => 'タイプ',
    'zoom' => 'Zoom',
    'upgrade' => 'アップグレードしてロックを解除する',
    'percent_uploaded' => '{percent}% アップロード',
    'retry' => '再試行',
    'filter' => 'リストをフィルタ',
    'go_back' => '戻る',
    'file_selected' => 'One file selected…|{count} files selected…',

    'application_title' => 'Monica – personal relationship manager',
    'application_description' => 'Monica（モニカ）はあなたの交流・家族・友人の情報を記録するツールです。',
    'application_og_title' => 'Have better relations with your loved ones. Free online CRM for friends and family.',

    'markdown_description' => 'Want to format your text nicely? We support Markdown to add bold, italic, lists, and more.',
    'markdown_link' => 'ドキュメントを読む',

    'header_settings_link' => '設定',
    'header_logout_link' => 'ログアウト',
    'header_changelog_link' => '機能の変更',

    'main_nav_cta' => '人を追加します',
    'main_nav_dashboard' => 'ダッシュボード',
    'main_nav_family' => '連絡先',
    'main_nav_journal' => '日記',
    'main_nav_activities' => 'アクテビティ',
    'main_nav_tasks' => 'タスク',

    'footer_remarks' => 'Comments?',
    'footer_send_email' => 'Send us an email',
    'footer_privacy' => 'プライバシーポリシー',
    'footer_release' => '更新情報',
    'footer_newsletter' => 'ニュースレター',
    'footer_source_code' => 'Contribute',
    'footer_version' => 'バージョン: :version',
    'footer_new_version' => 'A new version of Monica is available',

    'footer_modal_version_whats_new' => '新着情報',
    'footer_modal_version_release_away' => 'You are 1 release behind the latest version available. You should update your instance.|You are :number releases behind the latest version available. You should update your instance.',

    'breadcrumb_dashboard' => 'ダッシュボード',
    'breadcrumb_list_contacts' => '連絡先のリスト',
    'breadcrumb_archived_contacts' => 'Archived contacts',
    'breadcrumb_journal' => '日記',
    'breadcrumb_settings' => '設定',
    'breadcrumb_settings_export' => 'エクスポート',
    'breadcrumb_settings_users' => 'ユーザー',
    'breadcrumb_settings_users_add' => 'ユーザーを追加',
    'breadcrumb_settings_subscriptions' => 'Subscription',
    'breadcrumb_settings_import' => 'インポート',
    'breadcrumb_settings_import_report' => 'Import report',
    'breadcrumb_settings_import_upload' => 'アップロード',
    'breadcrumb_settings_tags' => 'タグ',
    'breadcrumb_add_significant_other' => 'Add significant other',
    'breadcrumb_edit_significant_other' => 'Edit significant other',
    'breadcrumb_add_note' => 'Add a note',
    'breadcrumb_edit_note' => 'Edit a note',
    'breadcrumb_api' => 'API',
    'breadcrumb_dav' => 'DAV Resources',
    'breadcrumb_edit_introductions' => 'どうやって会いましたか?',
    'breadcrumb_settings_personalization' => 'Personalization',
    'breadcrumb_settings_security' => 'セキュリティ',
    'breadcrumb_settings_security_2fa' => 'Two Factor Authentication',
    'breadcrumb_profile' => 'プロフィール :name',

    'gender_male' => '男',
    'gender_female' => '女',
    'gender_none' => '言いたくない',
    'gender_no_gender' => '性別無し',

    'error_title' => 'Whoops! Something went wrong.',
    'error_unauthorized' => 'You don’t have the right to edit this resource.',
    'error_user_account' => 'This user does not belong to the given account.',
    'error_save' => 'We had an error trying to save the data.',
    'error_try_again' => 'Something went wrong. Please try again.',
    'error_id' => 'エラー ID: :id',
    'error_unavailable' => 'サービスを利用できません',
    'error_maintenance' => 'Maintenance in progress. We’ll be right back.',
    'error_help' => 'メンテナンスはすぐに終わります。',
    'error_twitter' => 'Follow <a href="https://twitter.com/:twitter">our Twitter account</a> to be alerted when it’s up again.',
    'error_no_term' => 'There is no policy for this instance yet.',

    'default_save_success' => 'The data has been saved.',

    'compliance_title' => 'Sorry for the interruption.',
    'compliance_desc' => 'We have changed our <a href=":urlterm" hreflang=":hreflang">Terms of Use</a> and <a href=":url" hreflang=":hreflang">Privacy Policy</a>. By law we have to ask you to review them and accept them so you can continue to use your account.',
    'compliance_desc_end' => 'We don’t do anything nasty with your data or your account and we never will.',
    'compliance_terms' => 'Accept new terms and privacy policy',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => '恋人関係',
    'relationship_type_group_family' => '家族構成',
    'relationship_type_group_friend' => '友人関係',
    'relationship_type_group_work' => '仕事関係',
    'relationship_type_group_other' => 'その他の人間関係',

    'relationship_type_partner' => 'significant other',
    'relationship_type_partner_female' => 'significant other',
    'relationship_type_partner_with_name' => ':name’s significant other',
    'relationship_type_partner_female_with_name' => ':name’s significant other',

    'relationship_type_spouse' => '配偶者',
    'relationship_type_spouse_female' => '配偶者',
    'relationship_type_spouse_with_name' => ':name’s spouse',
    'relationship_type_spouse_female_with_name' => ':name’s spouse',

    'relationship_type_date' => 'date',
    'relationship_type_date_female' => 'date',
    'relationship_type_date_with_name' => ':name’s date',
    'relationship_type_date_female_with_name' => ':name’s date',

    'relationship_type_lover' => '恋人',
    'relationship_type_lover_female' => '恋人',
    'relationship_type_lover_with_name' => ':name’s lover',
    'relationship_type_lover_female_with_name' => ':name’s lover',

    'relationship_type_inlovewith' => 'in love with',
    'relationship_type_inlovewith_female' => 'in love with',
    'relationship_type_inlovewith_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_female_with_name' => 'someone :name is in love with',

    'relationship_type_lovedby' => 'loved by',
    'relationship_type_lovedby_female' => 'loved by',
    'relationship_type_lovedby_with_name' => ':name’s secret lover',
    'relationship_type_lovedby_female_with_name' => ':name’s secret lover',

    'relationship_type_ex' => 'ex-boyfriend',
    'relationship_type_ex_female' => 'ex-girlfriend',
    'relationship_type_ex_with_name' => ':name’s ex-boyfriend',
    'relationship_type_ex_female_with_name' => ':name’s ex-girlfriend',

    'relationship_type_parent' => '父',
    'relationship_type_parent_female' => '母',
    'relationship_type_parent_with_name' => ':name’s father',
    'relationship_type_parent_female_with_name' => ':name’s mother',

    'relationship_type_child' => 'son',
    'relationship_type_child_female' => 'daughter',
    'relationship_type_child_with_name' => ':name’s son',
    'relationship_type_child_female_with_name' => ':name’s daughter',

    'relationship_type_stepparent' => '義父',
    'relationship_type_stepparent_female' => 'stepmother',
    'relationship_type_stepparent_with_name' => ':name’s stepfather',
    'relationship_type_stepparent_female_with_name' => ':name’s stepmother',

    'relationship_type_stepchild' => 'stepson',
    'relationship_type_stepchild_female' => 'stepdaughter',
    'relationship_type_stepchild_with_name' => ':name’s stepson',
    'relationship_type_stepchild_female_with_name' => ':name’s stepdaughter',

    'relationship_type_sibling' => 'brother',
    'relationship_type_sibling_female' => 'sister',
    'relationship_type_sibling_with_name' => ':name’s brother',
    'relationship_type_sibling_female_with_name' => ':name’s sister',

    'relationship_type_grandparent' => 'grand parent',
    'relationship_type_grandparent_female' => 'grand parent',
    'relationship_type_grandparent_with_name' => ':name’s grand parent',
    'relationship_type_grandparent_female_with_name' => ':name’s grand parent',

    'relationship_type_grandchild' => 'grand child',
    'relationship_type_grandchild_female' => 'grand child',
    'relationship_type_grandchild_with_name' => ':name’s grand child',
    'relationship_type_grandchild_female_with_name' => ':name’s grand child',

    'relationship_type_uncle' => 'uncle',
    'relationship_type_uncle_female' => 'aunt',
    'relationship_type_uncle_with_name' => ':name’s uncle',
    'relationship_type_uncle_female_with_name' => ':name’s aunt',

    'relationship_type_nephew' => 'nephew',
    'relationship_type_nephew_female' => 'niece',
    'relationship_type_nephew_with_name' => ':name’s nephew',
    'relationship_type_nephew_female_with_name' => ':name’s niece',

    'relationship_type_cousin' => 'cousin',
    'relationship_type_cousin_female' => 'cousin',
    'relationship_type_cousin_with_name' => ':name’s cousin',
    'relationship_type_cousin_female_with_name' => ':name’s cousin',

    'relationship_type_godfather' => '名付け親',
    'relationship_type_godfather_female' => 'godmother',
    'relationship_type_godfather_with_name' => ':name’s godfather',
    'relationship_type_godfather_female_with_name' => ':name’s godmother',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_with_name' => ':name’s godson',
    'relationship_type_godson_female_with_name' => ':name’s goddaughter',

    'relationship_type_friend' => 'friend',
    'relationship_type_friend_female' => 'friend',
    'relationship_type_friend_with_name' => ':name’s friend',
    'relationship_type_friend_female_with_name' => ':name’s friend',

    'relationship_type_bestfriend' => 'best friend',
    'relationship_type_bestfriend_female' => 'best friend',
    'relationship_type_bestfriend_with_name' => ':name’s best friend',
    'relationship_type_bestfriend_female_with_name' => ':name’s best friend',

    'relationship_type_colleague' => 'colleague',
    'relationship_type_colleague_female' => 'colleague',
    'relationship_type_colleague_with_name' => ':name’s colleague',
    'relationship_type_colleague_female_with_name' => ':name’s colleague',

    'relationship_type_boss' => 'boss',
    'relationship_type_boss_female' => 'boss',
    'relationship_type_boss_with_name' => ':name’s boss',
    'relationship_type_boss_female_with_name' => ':name’s boss',

    'relationship_type_subordinate' => 'subordinate',
    'relationship_type_subordinate_female' => 'subordinate',
    'relationship_type_subordinate_with_name' => ':name’s subordinate',
    'relationship_type_subordinate_female_with_name' => ':name’s subordinate',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentor',
    'relationship_type_mentor_with_name' => ':name’s mentor',
    'relationship_type_mentor_female_with_name' => ':name’s mentor',

    'relationship_type_protege' => 'protege',
    'relationship_type_protege_female' => 'protege',
    'relationship_type_protege_with_name' => ':name’s protege',
    'relationship_type_protege_female_with_name' => ':name’s protege',

    'relationship_type_ex_husband' => 'ex-husband',
    'relationship_type_ex_husband_female' => 'ex-wife',
    'relationship_type_ex_husband_with_name' => ':name’s ex-husband',
    'relationship_type_ex_husband_female_with_name' => ':name’s ex-wife',

    // emotions
    'emotion_primary_love' => 'Love',
    'emotion_primary_joy' => 'Joy',
    'emotion_primary_surprise' => 'Surprise',
    'emotion_primary_anger' => 'Anger',
    'emotion_primary_sadness' => 'Sadness',
    'emotion_primary_fear' => 'Fear',

    'emotion_secondary_affection' => 'Affection',
    'emotion_secondary_lust' => 'Lust',
    'emotion_secondary_longing' => 'Longing',
    'emotion_secondary_cheerfulness' => 'Cheerfulness',
    'emotion_secondary_zest' => 'Zest',
    'emotion_secondary_contentment' => 'Contentment',
    'emotion_secondary_pride' => 'Pride',
    'emotion_secondary_optimism' => 'Optimism',
    'emotion_secondary_enthrallment' => 'Enthrallment',
    'emotion_secondary_relief' => 'Relief',
    'emotion_secondary_surprise' => 'Surprise',
    'emotion_secondary_irritation' => 'Irritation',
    'emotion_secondary_exasperation' => 'Exasperation',
    'emotion_secondary_rage' => 'Rage',
    'emotion_secondary_disgust' => 'Disgust',
    'emotion_secondary_envy' => 'Envy',
    'emotion_secondary_suffering' => 'Suffering',
    'emotion_secondary_sadness' => 'Sadness',
    'emotion_secondary_disappointment' => 'Disappointment',
    'emotion_secondary_shame' => 'Shame',
    'emotion_secondary_neglect' => 'Neglect',
    'emotion_secondary_sympathy' => 'Sympathy',
    'emotion_secondary_horror' => 'Horror',
    'emotion_secondary_nervousness' => 'Nervousness',

    'emotion_adoration' => 'Adoration',
    'emotion_affection' => 'Affection',
    'emotion_love' => 'Love',
    'emotion_fondness' => 'Fondness',
    'emotion_liking' => 'Liking',
    'emotion_attraction' => 'Attraction',
    'emotion_caring' => 'Caring',
    'emotion_tenderness' => 'Tenderness',
    'emotion_compassion' => 'Compassion',
    'emotion_sentimentality' => 'Sentimentality',
    'emotion_arousal' => 'Arousal',
    'emotion_desire' => 'Desire',
    'emotion_lust' => 'Lust',
    'emotion_passion' => 'Passion',
    'emotion_infatuation' => 'Infatuation',
    'emotion_longing' => 'Longing',
    'emotion_amusement' => 'Amusement',
    'emotion_bliss' => 'Bliss',
    'emotion_cheerfulness' => 'Cheerfulness',
    'emotion_gaiety' => 'Gaiety',
    'emotion_glee' => 'Glee',
    'emotion_jolliness' => 'Jolliness',
    'emotion_joviality' => 'Joviality',
    'emotion_joy' => 'Joy',
    'emotion_delight' => 'Delight',
    'emotion_enjoyment' => 'Enjoyment',
    'emotion_gladness' => 'Gladness',
    'emotion_happiness' => 'Happiness',
    'emotion_jubilation' => 'Jubilation',
    'emotion_elation' => 'Elation',
    'emotion_satisfaction' => 'Satisfaction',
    'emotion_ecstasy' => 'Ecstasy',
    'emotion_euphoria' => 'Euphoria',
    'emotion_enthusiasm' => 'Enthusiasm',
    'emotion_zeal' => 'Zeal',
    'emotion_zest' => 'Zest',
    'emotion_excitement' => 'Excitement',
    'emotion_thrill' => 'Thrill',
    'emotion_exhilaration' => 'Exhilaration',
    'emotion_contentment' => 'Contentment',
    'emotion_pleasure' => 'Pleasure',
    'emotion_pride' => 'Pride',
    'emotion_eagerness' => 'Eagerness',
    'emotion_hope' => 'Hope',
    'emotion_optimism' => 'Optimism',
    'emotion_enthrallment' => 'Enthrallment',
    'emotion_rapture' => 'Rapture',
    'emotion_relief' => 'Relief',
    'emotion_amazement' => 'Amazement',
    'emotion_surprise' => 'Surprise',
    'emotion_astonishment' => 'Astonishment',
    'emotion_aggravation' => 'Aggravation',
    'emotion_irritation' => 'Irritation',
    'emotion_agitation' => 'Agitation',
    'emotion_annoyance' => 'Annoyance',
    'emotion_grouchiness' => 'Grouchiness',
    'emotion_grumpiness' => 'Grumpiness',
    'emotion_exasperation' => 'Exasperation',
    'emotion_frustration' => 'Frustration',
    'emotion_anger' => 'Anger',
    'emotion_rage' => 'Rage',
    'emotion_outrage' => 'Outrage',
    'emotion_fury' => 'Fury',
    'emotion_wrath' => 'Wrath',
    'emotion_hostility' => 'Hostility',
    'emotion_ferocity' => 'Ferocity',
    'emotion_bitterness' => 'Bitterness',
    'emotion_hate' => 'Hate',
    'emotion_loathing' => 'Loathing',
    'emotion_scorn' => 'Scorn',
    'emotion_spite' => 'Spite',
    'emotion_vengefulness' => 'Vengefulness',
    'emotion_dislike' => 'Dislike',
    'emotion_resentment' => 'Resentment',
    'emotion_disgust' => 'Disgust',
    'emotion_revulsion' => 'Revulsion',
    'emotion_contempt' => 'Contempt',
    'emotion_envy' => 'Envy',
    'emotion_jealousy' => 'Jealousy',
    'emotion_agony' => 'Agony',
    'emotion_suffering' => 'Suffering',
    'emotion_hurt' => 'Hurt',
    'emotion_anguish' => 'Anguish',
    'emotion_depression' => 'Depression',
    'emotion_despair' => 'Despair',
    'emotion_hopelessness' => 'Hopelessness',
    'emotion_gloom' => 'Gloom',
    'emotion_glumness' => 'Glumness',
    'emotion_sadness' => 'Sadness',
    'emotion_unhappiness' => 'Unhappiness',
    'emotion_grief' => 'Grief',
    'emotion_sorrow' => 'Sorrow',
    'emotion_woe' => 'Woe',
    'emotion_misery' => 'Misery',
    'emotion_melancholy' => 'Melancholy',
    'emotion_dismay' => 'Dismay',
    'emotion_disappointment' => 'Disappointment',
    'emotion_displeasure' => 'Displeasure',
    'emotion_guilt' => 'Guilt',
    'emotion_shame' => 'Shame',
    'emotion_regret' => 'Regret',
    'emotion_remorse' => 'Remorse',
    'emotion_alienation' => 'Alienation',
    'emotion_isolation' => 'Isolation',
    'emotion_neglect' => 'Neglect',
    'emotion_loneliness' => 'Loneliness',
    'emotion_rejection' => 'Rejection',
    'emotion_homesickness' => 'Homesickness',
    'emotion_defeat' => 'Defeat',
    'emotion_dejection' => 'Dejection',
    'emotion_insecurity' => 'Insecurity',
    'emotion_embarrassment' => 'Embarrassment',
    'emotion_humiliation' => 'Humiliation',
    'emotion_insult' => 'Insult',
    'emotion_pity' => 'Pity',
    'emotion_sympathy' => 'Sympathy',
    'emotion_alarm' => 'Alarm',
    'emotion_shock' => 'Shock',
    'emotion_fear' => 'Fear',
    'emotion_fright' => 'Fright',
    'emotion_horror' => 'Horror',
    'emotion_terror' => 'Terror',
    'emotion_panic' => 'Panic',
    'emotion_hysteria' => 'Hysteria',
    'emotion_mortification' => 'Mortification',
    'emotion_anxiety' => 'Anxiety',
    'emotion_nervousness' => 'Nervousness',
    'emotion_tenseness' => 'Tenseness',
    'emotion_uneasiness' => 'Uneasiness',
    'emotion_apprehension' => 'Apprehension',
    'emotion_worry' => 'Worry',
    'emotion_distress' => 'Distress',
    'emotion_dread' => 'Dread',

    // weather
    'weather_sunny' => 'Sunny',
    'weather_clear' => 'Clear',
    'weather_clear-day' => 'Clear',
    'weather_clear-night' => 'Clear night',
    'weather_light-drizzle' => 'Light drizzle',
    'weather_patchy-light-drizzle' => 'Patchy light drizzle',
    'weather_patchy-light-rain' => 'Patchy light rain',
    'weather_light-rain' => 'Light rain',
    'weather_moderate-rain-at-times' => 'Moderate rain at times',
    'weather_moderate-rain' => 'Moderate rain',
    'weather_patchy-rain-possible' => 'Patchy rain possible',
    'weather_heavy-rain-at-times' => 'Heavy rain at times',
    'weather_heavy-rain' => 'Heavy rain',
    'weather_light-freezing-rain' => 'Light freezing rain',
    'weather_moderate-or-heavy-freezing-rain' => 'Moderate or heavy freezing rain',
    'weather_light-sleet' => 'Light sleet',
    'weather_moderate-or-heavy-rain-shower' => 'Moderate or heavy rain shower',
    'weather_light-rain-shower' => 'Light rain shower',
    'weather_torrential-rain-shower' => 'Torrential rain shower',
    'weather_rain' => 'Rain',
    'weather_snow' => 'Snow',
    'weather_blowing-snow' => 'Blowing snow',
    'weather_patchy-light-snow' => 'Patchy light snow',
    'weather_light-snow' => 'Light snow',
    'weather_patchy-moderate-snow' => 'Patchy moderate snow',
    'weather_moderate-snow' => 'Moderate snow',
    'weather_patchy-heavy-snow' => 'Patchy heavy snow',
    'weather_heavy-snow' => 'Heavy snow',
    'weather_light-snow-showers' => 'Light snow showers',
    'weather_moderate-or-heavy-snow-showers' => 'Moderate or heavy snow showers',
    'weather_patchy-snow-possible' => 'Patchy snow possible',
    'weather_patchy-sleet-possible' => 'Patchy sleet possible',
    'weather_moderate-or-heavy-sleet' => 'Moderate or heavy sleet',
    'weather_light-sleet-showers' => 'Light sleet showers',
    'weather_moderate-or-heavy-sleet-showers' => 'Moderate or heavy sleet showers',
    'weather_sleet' => 'Sleet',
    'weather_wind' => 'Wind',
    'weather_fog' => 'Fog',
    'weather_freezing-fog' => 'Freezing fog',
    'weather_mist' => 'Mist',
    'weather_blizzard' => 'Blizzard',
    'weather_overcast' => 'Overcast',
    'weather_cloudy' => 'Cloudy',
    'weather_partly-cloudy-day' => 'Partly cloudy',
    'weather_partly-cloudy-night' => 'Partly cloudy',
    'weather_freezing-drizzle' => 'Freezing drizzle',
    'weather_heavy-freezing-drizzle' => 'Heavy freezing drizzle',
    'weather_patchy-freezing-drizzle-possible' => 'Patchy freezing drizzle possible',
    'weather_ice-pellets' => 'Ice pellets',
    'weather_light-showers-of-ice-pellets' => 'Light showers of ice pellets',
    'weather_moderate-or-heavy-showers-of-ice-pellets' => 'Moderate or heavy showers of ice pellets',
    'weather_thundery-outbreaks-possible' => 'Thundery outbreaks possible',
    'weather_patchy-light-rain-with-thunder' => 'Patchy light rain with thunder',
    'weather_moderate-or-heavy-rain-with-thunder' => 'Moderate or heavy rain with thunder',
    'weather_patchy-light-snow-with-thunder' => 'Patchy light snow with thunder',
    'weather_moderate-or-heavy-snow-with-thunder' => 'Moderate or heavy snow with thunder',
    'weather_current_temperature_celsius' => ':temperature °C',
    'weather_current_temperature_fahrenheit' => ':temperature °F',
    'weather_current_title' => 'Current weather',

    // dav
    'dav_contacts' => '連絡先',
    'dav_contacts_description' => ':name’s contacts',
    'dav_birthdays' => 'Birthdays',
    'dav_birthdays_description' => ':name’s contact’s birthdays',
    'dav_tasks' => 'タスク',
    'dav_tasks_description' => ':name’s tasks',

    // contact list
    'contact_list_avatar' => 'Avatar',
    'contact_list_name' => 'Contact',
    'contact_list_description' => 'Description',

];
