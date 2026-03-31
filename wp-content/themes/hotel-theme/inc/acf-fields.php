<?php
/**
 * ACF Field Groups - Hotel Theme
 * 各ページテンプレートのカスタムフィールド定義
 */

if (!function_exists('acf_add_local_field_group')) {
    return;
}

/* ============================================================
   TOP Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_top',
    'title' => 'トップページ設定',
    'fields' => array(
        // --- Hero ---
        array('key' => 'field_top_tab_hero', 'label' => 'ヒーロー', 'type' => 'tab'),
        array('key' => 'field_top_hero_title', 'label' => 'タイトル', 'name' => 'hero_title', 'type' => 'text', 'instructions' => 'ヒーローセクションのメインタイトル'),
        array('key' => 'field_top_hero_subtitle', 'label' => 'サブタイトル', 'name' => 'hero_subtitle', 'type' => 'text', 'instructions' => 'ヒーローセクションのサブタイトル'),

        // --- Concept ---
        array('key' => 'field_top_tab_concept', 'label' => 'コンセプト', 'type' => 'tab'),
        array('key' => 'field_top_concept_subtitle', 'label' => 'サブタイトル', 'name' => 'concept_subtitle', 'type' => 'text', 'instructions' => '例: 私たちの想い（英語版は空欄可）'),
        array('key' => 'field_top_concept_text', 'label' => 'コンセプト文', 'name' => 'concept_text', 'type' => 'textarea', 'rows' => 6, 'instructions' => '改行は反映されます'),

        // --- Services ---
        array('key' => 'field_top_tab_services', 'label' => 'サービス', 'type' => 'tab'),
        array('key' => 'field_top_services_subtitle', 'label' => 'サブタイトル', 'name' => 'services_subtitle', 'type' => 'text', 'instructions' => '例: 施設のご案内'),
        array('key' => 'field_top_service1_label', 'label' => 'サービス1 ラベル', 'name' => 'top_service_1_label', 'type' => 'text'),
        array('key' => 'field_top_service1_title', 'label' => 'サービス1 タイトル', 'name' => 'top_service_1_title', 'type' => 'text'),
        array('key' => 'field_top_service1_desc', 'label' => 'サービス1 説明', 'name' => 'top_service_1_description', 'type' => 'textarea', 'rows' => 5),
        array('key' => 'field_top_service1_image', 'label' => 'サービス1 画像', 'name' => 'top_service_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_top_service2_label', 'label' => 'サービス2 ラベル', 'name' => 'top_service_2_label', 'type' => 'text'),
        array('key' => 'field_top_service2_title', 'label' => 'サービス2 タイトル', 'name' => 'top_service_2_title', 'type' => 'text'),
        array('key' => 'field_top_service2_desc', 'label' => 'サービス2 説明', 'name' => 'top_service_2_description', 'type' => 'textarea', 'rows' => 5),
        array('key' => 'field_top_service2_image', 'label' => 'サービス2 画像', 'name' => 'top_service_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Access ---
        array('key' => 'field_top_tab_access', 'label' => 'アクセス', 'type' => 'tab'),
        array('key' => 'field_top_access_subtitle', 'label' => 'サブタイトル', 'name' => 'access_subtitle', 'type' => 'text', 'instructions' => '例: アクセス'),
        array('key' => 'field_top_access_location_title', 'label' => '所在地タイトル', 'name' => 'access_location_title', 'type' => 'text'),
        array('key' => 'field_top_access_postal', 'label' => '郵便番号', 'name' => 'access_postal', 'type' => 'text'),
        array('key' => 'field_top_access_address', 'label' => '住所', 'name' => 'access_address', 'type' => 'text'),
        array('key' => 'field_top_access_transport_title', 'label' => '交通アクセスタイトル', 'name' => 'access_transport_title', 'type' => 'text'),
        array('key' => 'field_top_access_transport', 'label' => '交通アクセス', 'name' => 'access_transport', 'type' => 'textarea', 'rows' => 4),
        array('key' => 'field_top_access_map_url', 'label' => 'GoogleMap URL', 'name' => 'access_map_url', 'type' => 'url'),
        array('key' => 'field_top_access_map_pc', 'label' => '地図画像（PC）', 'name' => 'access_map_image_pc', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_top_access_map_sp', 'label' => '地図画像（SP）', 'name' => 'access_map_image_sp', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- FAQ ---
        array('key' => 'field_top_tab_faq', 'label' => 'FAQ', 'type' => 'tab'),
        array('key' => 'field_top_faq_subtitle', 'label' => 'サブタイトル', 'name' => 'top_faq_subtitle', 'type' => 'text', 'instructions' => '例: よくあるご質問'),
        array('key' => 'field_top_faq1_q', 'label' => 'FAQ1 質問', 'name' => 'top_faq_1_question', 'type' => 'text'),
        array('key' => 'field_top_faq1_a', 'label' => 'FAQ1 回答', 'name' => 'top_faq_1_answer', 'type' => 'text'),
        array('key' => 'field_top_faq2_q', 'label' => 'FAQ2 質問', 'name' => 'top_faq_2_question', 'type' => 'text'),
        array('key' => 'field_top_faq2_a', 'label' => 'FAQ2 回答', 'name' => 'top_faq_2_answer', 'type' => 'text'),
        array('key' => 'field_top_faq3_q', 'label' => 'FAQ3 質問', 'name' => 'top_faq_3_question', 'type' => 'text'),
        array('key' => 'field_top_faq3_a', 'label' => 'FAQ3 回答', 'name' => 'top_faq_3_answer', 'type' => 'text'),

        // --- Reservation ---
        array('key' => 'field_top_tab_reservation', 'label' => '予約', 'type' => 'tab'),
        array('key' => 'field_top_rsv_subtitle', 'label' => 'サブタイトル', 'name' => 'reservation_subtitle', 'type' => 'text', 'instructions' => '例: ご予約'),
        array('key' => 'field_top_rsv_text', 'label' => '予約セクション テキスト', 'name' => 'reservation_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_top_rsv_btn_text', 'label' => 'ボタンテキスト', 'name' => 'reservation_btn_text', 'type' => 'text'),
        array('key' => 'field_top_rsv_btn_url', 'label' => 'ボタンURL', 'name' => 'reservation_btn_url', 'type' => 'url'),

        // --- Contact ---
        array('key' => 'field_top_tab_contact', 'label' => 'お問い合わせ', 'type' => 'tab'),
        array('key' => 'field_top_contact_subtitle', 'label' => 'サブタイトル', 'name' => 'contact_subtitle', 'type' => 'text', 'instructions' => '例: お問い合わせ'),
        array('key' => 'field_top_contact_intro', 'label' => '案内文', 'name' => 'contact_intro', 'type' => 'textarea', 'rows' => 4),
        array('key' => 'field_top_contact_phone_label', 'label' => '電話ラベル', 'name' => 'contact_phone_label', 'type' => 'text'),
        array('key' => 'field_top_contact_phone', 'label' => '電話番号', 'name' => 'contact_phone', 'type' => 'text'),
        array('key' => 'field_top_contact_type_label', 'label' => 'お問い合わせ区分ラベル', 'name' => 'contact_type_label', 'type' => 'text'),
        array('key' => 'field_top_contact_type1', 'label' => '区分1', 'name' => 'contact_type_1', 'type' => 'text'),
        array('key' => 'field_top_contact_type2', 'label' => '区分2', 'name' => 'contact_type_2', 'type' => 'text'),
        array('key' => 'field_top_contact_name_label', 'label' => 'お名前ラベル', 'name' => 'contact_name_label', 'type' => 'text'),
        array('key' => 'field_top_contact_email_label', 'label' => 'メールラベル', 'name' => 'contact_email_label', 'type' => 'text'),
        array('key' => 'field_top_contact_message_label', 'label' => '内容ラベル', 'name' => 'contact_message_label', 'type' => 'text'),
        array('key' => 'field_top_contact_privacy_text', 'label' => 'プライバシー同意文', 'name' => 'contact_privacy_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_top_contact_privacy_link_text', 'label' => 'プライバシーリンクテキスト', 'name' => 'contact_privacy_link_text', 'type' => 'text'),
        array('key' => 'field_top_contact_submit_text', 'label' => '送信ボタンテキスト', 'name' => 'contact_submit_text', 'type' => 'text'),
        array('key' => 'field_top_contact_sp_rsv_text', 'label' => 'SP予約ボタンテキスト', 'name' => 'sp_reservation_text', 'type' => 'text'),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-top.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));

/* ============================================================
   Rooms Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_rooms',
    'title' => '客室ページ設定',
    'fields' => array(
        // --- KV ---
        array('key' => 'field_rooms_tab_kv', 'label' => 'キービジュアル', 'type' => 'tab'),
        array('key' => 'field_rooms_kv_heading', 'label' => 'KV見出し', 'name' => 'kv_heading', 'type' => 'text', 'default_value' => 'ROOM'),
        array('key' => 'field_rooms_kv_image', 'label' => 'KV画像', 'name' => 'kv_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'instructions' => '未設定時はCSSの背景画像が使用されます'),

        // --- Concept ---
        array('key' => 'field_rooms_tab_concept', 'label' => 'コンセプト', 'type' => 'tab'),
        array('key' => 'field_rooms_concept_heading', 'label' => '見出し', 'name' => 'concept_heading', 'type' => 'text'),
        array('key' => 'field_rooms_concept_text', 'label' => 'コンセプト文', 'name' => 'concept_text', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_rooms_concept_btn_text', 'label' => 'ボタンテキスト', 'name' => 'concept_btn_text', 'type' => 'text'),
        array('key' => 'field_rooms_concept_btn_url', 'label' => 'ボタンURL', 'name' => 'concept_btn_url', 'type' => 'url'),

        // --- Room ---
        array('key' => 'field_rooms_tab_room', 'label' => 'お部屋', 'type' => 'tab'),
        array('key' => 'field_rooms_room_heading', 'label' => '見出し', 'name' => 'room_heading', 'type' => 'text', 'default_value' => 'ROOM'),
        array('key' => 'field_rooms_room_subtitle', 'label' => 'サブタイトル', 'name' => 'room_subtitle', 'type' => 'text'),
        array('key' => 'field_rooms_room_desc', 'label' => '説明文', 'name' => 'room_description', 'type' => 'textarea', 'rows' => 4),
        array('key' => 'field_rooms_room_image', 'label' => 'メイン画像', 'name' => 'room_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Features ---
        array('key' => 'field_rooms_tab_features', 'label' => '特徴', 'type' => 'tab'),
        array('key' => 'field_rooms_feat1_title', 'label' => '特徴1 タイトル', 'name' => 'feature_1_title', 'type' => 'text'),
        array('key' => 'field_rooms_feat1_desc', 'label' => '特徴1 説明', 'name' => 'feature_1_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_feat1_image', 'label' => '特徴1 画像', 'name' => 'feature_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_feat2_title', 'label' => '特徴2 タイトル', 'name' => 'feature_2_title', 'type' => 'text'),
        array('key' => 'field_rooms_feat2_desc', 'label' => '特徴2 説明', 'name' => 'feature_2_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_feat2_image', 'label' => '特徴2 画像', 'name' => 'feature_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_feat3_title', 'label' => '特徴3 タイトル', 'name' => 'feature_3_title', 'type' => 'text'),
        array('key' => 'field_rooms_feat3_desc', 'label' => '特徴3 説明', 'name' => 'feature_3_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_feat3_image', 'label' => '特徴3 画像', 'name' => 'feature_3_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Information ---
        array('key' => 'field_rooms_tab_info', 'label' => '設備情報', 'type' => 'tab'),
        array('key' => 'field_rooms_info_subtitle', 'label' => 'サブタイトル', 'name' => 'info_subtitle', 'type' => 'text'),
        array('key' => 'field_rooms_info_size_label', 'label' => '広さラベル', 'name' => 'info_size_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_size', 'label' => '広さ', 'name' => 'info_size', 'type' => 'text'),
        array('key' => 'field_rooms_info_cap_label', 'label' => '定員ラベル', 'name' => 'info_capacity_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_cap', 'label' => '定員', 'name' => 'info_capacity', 'type' => 'text'),
        array('key' => 'field_rooms_info_layout_label', 'label' => '間取りラベル', 'name' => 'info_layout_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_layout', 'label' => '間取り', 'name' => 'info_layout', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_info_bed_label', 'label' => 'ベッドラベル', 'name' => 'info_bed_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_bed', 'label' => 'ベッドタイプ', 'name' => 'info_bed', 'type' => 'text'),
        array('key' => 'field_rooms_info_amenities_label', 'label' => '設備ラベル', 'name' => 'info_amenities_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_amenities', 'label' => '設備・備品', 'name' => 'info_amenities', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_info_parking_label', 'label' => '駐車場ラベル', 'name' => 'info_parking_label', 'type' => 'text'),
        array('key' => 'field_rooms_info_parking', 'label' => '駐車場', 'name' => 'info_parking', 'type' => 'text'),

        // --- Amenities ---
        array('key' => 'field_rooms_tab_amenities', 'label' => 'アメニティ', 'type' => 'tab'),
        array('key' => 'field_rooms_amenities_subtitle', 'label' => 'サブタイトル', 'name' => 'amenities_subtitle', 'type' => 'text'),
        array('key' => 'field_rooms_amenities_text', 'label' => 'アメニティ説明', 'name' => 'amenities_text', 'type' => 'text'),
        array('key' => 'field_rooms_amenity1_name', 'label' => 'アイテム1 名前', 'name' => 'amenity_1_name', 'type' => 'text'),
        array('key' => 'field_rooms_amenity1_img', 'label' => 'アイテム1 画像', 'name' => 'amenity_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail'),
        array('key' => 'field_rooms_amenity2_name', 'label' => 'アイテム2 名前', 'name' => 'amenity_2_name', 'type' => 'text'),
        array('key' => 'field_rooms_amenity2_img', 'label' => 'アイテム2 画像', 'name' => 'amenity_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail'),
        array('key' => 'field_rooms_amenity3_name', 'label' => 'アイテム3 名前', 'name' => 'amenity_3_name', 'type' => 'text'),
        array('key' => 'field_rooms_amenity3_img', 'label' => 'アイテム3 画像', 'name' => 'amenity_3_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail'),
        array('key' => 'field_rooms_amenity4_name', 'label' => 'アイテム4 名前', 'name' => 'amenity_4_name', 'type' => 'text'),
        array('key' => 'field_rooms_amenity4_img', 'label' => 'アイテム4 画像', 'name' => 'amenity_4_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail'),
        array('key' => 'field_rooms_amenity5_name', 'label' => 'アイテム5 名前', 'name' => 'amenity_5_name', 'type' => 'text'),
        array('key' => 'field_rooms_amenity5_img', 'label' => 'アイテム5 画像', 'name' => 'amenity_5_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail'),

        // --- Gallery ---
        array('key' => 'field_rooms_tab_gallery', 'label' => 'ギャラリー', 'type' => 'tab'),
        array('key' => 'field_rooms_gallery_subtitle', 'label' => 'サブタイトル', 'name' => 'gallery_subtitle', 'type' => 'text'),
        array('key' => 'field_rooms_gallery1', 'label' => 'ギャラリー画像1（大）', 'name' => 'gallery_1', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_gallery2', 'label' => 'ギャラリー画像2', 'name' => 'gallery_2', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_gallery3', 'label' => 'ギャラリー画像3', 'name' => 'gallery_3', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_gallery4', 'label' => 'ギャラリー画像4', 'name' => 'gallery_4', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_gallery5', 'label' => 'ギャラリー画像5', 'name' => 'gallery_5', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_rooms_instagram', 'label' => 'Instagram URL', 'name' => 'instagram_url', 'type' => 'url'),

        // --- Reservation ---
        array('key' => 'field_rooms_tab_rsv', 'label' => '予約', 'type' => 'tab'),
        array('key' => 'field_rooms_rsv_subtitle', 'label' => 'サブタイトル', 'name' => 'rsv_subtitle', 'type' => 'text'),
        array('key' => 'field_rooms_rsv_text', 'label' => 'テキスト', 'name' => 'rsv_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rooms_rsv_btn_text', 'label' => 'ボタンテキスト', 'name' => 'rsv_btn_text', 'type' => 'text'),
        array('key' => 'field_rooms_rsv_btn_url', 'label' => 'ボタンURL', 'name' => 'rsv_btn_url', 'type' => 'url'),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-rooms.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));

/* ============================================================
   Services Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_services',
    'title' => 'サービスページ設定',
    'fields' => array(
        // --- KV ---
        array('key' => 'field_svc_tab_kv', 'label' => 'キービジュアル', 'type' => 'tab'),
        array('key' => 'field_svc_kv_heading', 'label' => 'KV見出し', 'name' => 'kv_heading', 'type' => 'text', 'default_value' => 'SERVICE'),
        array('key' => 'field_svc_kv_image', 'label' => 'KV画像', 'name' => 'kv_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Intro ---
        array('key' => 'field_svc_tab_intro', 'label' => 'イントロ', 'type' => 'tab'),
        array('key' => 'field_svc_intro_text', 'label' => '紹介文', 'name' => 'intro_text', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_svc_cover_image', 'label' => 'カバー画像', 'name' => 'cover_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Service 1 (Sauna) ---
        array('key' => 'field_svc_tab_s1', 'label' => 'サービス1', 'type' => 'tab'),
        array('key' => 'field_svc_s1_label', 'label' => '英語ラベル', 'name' => 'service_1_label', 'type' => 'text'),
        array('key' => 'field_svc_s1_title', 'label' => 'タイトル', 'name' => 'service_1_title', 'type' => 'text'),
        array('key' => 'field_svc_s1_desc', 'label' => '説明文', 'name' => 'service_1_description', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_svc_s1_main', 'label' => 'メイン画像', 'name' => 'service_1_main_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_s1_sub', 'label' => 'サブ画像', 'name' => 'service_1_sub_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Service 2 (Onsen) ---
        array('key' => 'field_svc_tab_s2', 'label' => 'サービス2', 'type' => 'tab'),
        array('key' => 'field_svc_s2_label', 'label' => '英語ラベル', 'name' => 'service_2_label', 'type' => 'text'),
        array('key' => 'field_svc_s2_title', 'label' => 'タイトル', 'name' => 'service_2_title', 'type' => 'text'),
        array('key' => 'field_svc_s2_desc', 'label' => '説明文', 'name' => 'service_2_description', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_svc_s2_main', 'label' => 'メイン画像', 'name' => 'service_2_main_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_s2_sub', 'label' => 'サブ画像', 'name' => 'service_2_sub_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Service 3 (Food) ---
        array('key' => 'field_svc_tab_s3', 'label' => 'サービス3', 'type' => 'tab'),
        array('key' => 'field_svc_s3_label', 'label' => '英語ラベル', 'name' => 'service_3_label', 'type' => 'text'),
        array('key' => 'field_svc_s3_title', 'label' => 'タイトル', 'name' => 'service_3_title', 'type' => 'text'),
        array('key' => 'field_svc_s3_desc', 'label' => '説明文', 'name' => 'service_3_description', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_svc_s3_main', 'label' => 'メイン画像', 'name' => 'service_3_main_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_s3_sub', 'label' => 'サブ画像', 'name' => 'service_3_sub_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Options ---
        array('key' => 'field_svc_tab_opt', 'label' => 'オプション', 'type' => 'tab'),
        array('key' => 'field_svc_opt_heading', 'label' => '見出し', 'name' => 'option_heading', 'type' => 'text', 'default_value' => 'OPTION'),
        array('key' => 'field_svc_opt_subtitle', 'label' => 'サブタイトル', 'name' => 'option_subtitle', 'type' => 'text'),
        array('key' => 'field_svc_opt1_title', 'label' => 'オプション1 タイトル', 'name' => 'option_1_title', 'type' => 'text'),
        array('key' => 'field_svc_opt1_desc', 'label' => 'オプション1 説明', 'name' => 'option_1_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_svc_opt1_img', 'label' => 'オプション1 画像', 'name' => 'option_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_opt2_title', 'label' => 'オプション2 タイトル', 'name' => 'option_2_title', 'type' => 'text'),
        array('key' => 'field_svc_opt2_desc', 'label' => 'オプション2 説明', 'name' => 'option_2_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_svc_opt2_img', 'label' => 'オプション2 画像', 'name' => 'option_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_opt3_title', 'label' => 'オプション3 タイトル', 'name' => 'option_3_title', 'type' => 'text'),
        array('key' => 'field_svc_opt3_desc', 'label' => 'オプション3 説明', 'name' => 'option_3_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_svc_opt3_img', 'label' => 'オプション3 画像', 'name' => 'option_3_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_svc_opt_detail_text', 'label' => '詳細ボタンテキスト', 'name' => 'option_detail_text', 'type' => 'text'),
        array('key' => 'field_svc_opt_detail_url', 'label' => '詳細ボタンURL', 'name' => 'option_detail_url', 'type' => 'url'),

        // --- Reservation ---
        array('key' => 'field_svc_tab_rsv', 'label' => '予約', 'type' => 'tab'),
        array('key' => 'field_svc_rsv_subtitle', 'label' => 'サブタイトル', 'name' => 'rsv_subtitle', 'type' => 'text'),
        array('key' => 'field_svc_rsv_text', 'label' => 'テキスト', 'name' => 'rsv_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_svc_rsv_btn_text', 'label' => 'ボタンテキスト', 'name' => 'rsv_btn_text', 'type' => 'text'),
        array('key' => 'field_svc_rsv_btn_url', 'label' => 'ボタンURL', 'name' => 'rsv_btn_url', 'type' => 'url'),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-services.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));

/* ============================================================
   Plans Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_plans',
    'title' => 'プランページ設定',
    'fields' => array(
        // --- KV ---
        array('key' => 'field_plans_tab_kv', 'label' => 'キービジュアル', 'type' => 'tab'),
        array('key' => 'field_plans_kv_heading', 'label' => 'KV見出し', 'name' => 'kv_heading', 'type' => 'text', 'default_value' => 'PLAN'),
        array('key' => 'field_plans_kv_image', 'label' => 'KV画像', 'name' => 'kv_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),

        // --- Plan Intro ---
        array('key' => 'field_plans_tab_intro', 'label' => 'イントロ', 'type' => 'tab'),
        array('key' => 'field_plans_intro_heading', 'label' => '見出し', 'name' => 'plans_heading', 'type' => 'text'),
        array('key' => 'field_plans_intro_text', 'label' => '紹介文', 'name' => 'plans_text', 'type' => 'textarea', 'rows' => 4),

        // --- Plan 1 ---
        array('key' => 'field_plans_tab_p1', 'label' => 'プラン1', 'type' => 'tab'),
        array('key' => 'field_plans_p1_title', 'label' => 'タイトル', 'name' => 'plan_1_title', 'type' => 'text'),
        array('key' => 'field_plans_p1_desc', 'label' => '説明文', 'name' => 'plan_1_description', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_plans_p1_image', 'label' => '画像', 'name' => 'plan_1_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_plans_p1_feat1_text', 'label' => '特徴1テキスト', 'name' => 'plan_1_feature_1', 'type' => 'text'),
        array('key' => 'field_plans_p1_feat2_text', 'label' => '特徴2テキスト', 'name' => 'plan_1_feature_2', 'type' => 'text'),
        array('key' => 'field_plans_p1_detail_text', 'label' => '詳細ボタンテキスト', 'name' => 'plan_1_detail_text', 'type' => 'text'),
        array('key' => 'field_plans_p1_detail_url', 'label' => '詳細URL', 'name' => 'plan_1_detail_url', 'type' => 'url'),

        // --- Plan 2 ---
        array('key' => 'field_plans_tab_p2', 'label' => 'プラン2', 'type' => 'tab'),
        array('key' => 'field_plans_p2_title', 'label' => 'タイトル', 'name' => 'plan_2_title', 'type' => 'text'),
        array('key' => 'field_plans_p2_desc', 'label' => '説明文', 'name' => 'plan_2_description', 'type' => 'textarea', 'rows' => 6),
        array('key' => 'field_plans_p2_image', 'label' => '画像', 'name' => 'plan_2_image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium'),
        array('key' => 'field_plans_p2_feat1_text', 'label' => '特徴1テキスト', 'name' => 'plan_2_feature_1', 'type' => 'text'),
        array('key' => 'field_plans_p2_feat2_text', 'label' => '特徴2テキスト', 'name' => 'plan_2_feature_2', 'type' => 'text'),
        array('key' => 'field_plans_p2_detail_text', 'label' => '詳細ボタンテキスト', 'name' => 'plan_2_detail_text', 'type' => 'text'),
        array('key' => 'field_plans_p2_detail_url', 'label' => '詳細URL', 'name' => 'plan_2_detail_url', 'type' => 'url'),

        // --- Reservation ---
        array('key' => 'field_plans_tab_rsv', 'label' => '予約', 'type' => 'tab'),
        array('key' => 'field_plans_rsv_subtitle', 'label' => 'サブタイトル', 'name' => 'rsv_subtitle', 'type' => 'text'),
        array('key' => 'field_plans_rsv_text', 'label' => 'テキスト', 'name' => 'rsv_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_plans_rsv_btn_text', 'label' => 'ボタンテキスト', 'name' => 'rsv_btn_text', 'type' => 'text'),
        array('key' => 'field_plans_rsv_btn_url', 'label' => 'ボタンURL', 'name' => 'rsv_btn_url', 'type' => 'url'),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-plans.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));

/* ============================================================
   FAQ Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_faq',
    'title' => 'FAQページ設定',
    'fields' => array(
        array('key' => 'field_faq_heading', 'label' => '見出し', 'name' => 'faq_heading', 'type' => 'text'),
        array('key' => 'field_faq_count', 'label' => '表示件数', 'name' => 'faq_count', 'type' => 'number', 'default_value' => 7, 'min' => 1, 'max' => 10),
        array('key' => 'field_faq_1_q', 'label' => 'FAQ1 質問', 'name' => 'faq_1_question', 'type' => 'text'),
        array('key' => 'field_faq_1_a', 'label' => 'FAQ1 回答', 'name' => 'faq_1_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_2_q', 'label' => 'FAQ2 質問', 'name' => 'faq_2_question', 'type' => 'text'),
        array('key' => 'field_faq_2_a', 'label' => 'FAQ2 回答', 'name' => 'faq_2_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_3_q', 'label' => 'FAQ3 質問', 'name' => 'faq_3_question', 'type' => 'text'),
        array('key' => 'field_faq_3_a', 'label' => 'FAQ3 回答', 'name' => 'faq_3_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_4_q', 'label' => 'FAQ4 質問', 'name' => 'faq_4_question', 'type' => 'text'),
        array('key' => 'field_faq_4_a', 'label' => 'FAQ4 回答', 'name' => 'faq_4_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_5_q', 'label' => 'FAQ5 質問', 'name' => 'faq_5_question', 'type' => 'text'),
        array('key' => 'field_faq_5_a', 'label' => 'FAQ5 回答', 'name' => 'faq_5_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_6_q', 'label' => 'FAQ6 質問', 'name' => 'faq_6_question', 'type' => 'text'),
        array('key' => 'field_faq_6_a', 'label' => 'FAQ6 回答', 'name' => 'faq_6_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_7_q', 'label' => 'FAQ7 質問', 'name' => 'faq_7_question', 'type' => 'text'),
        array('key' => 'field_faq_7_a', 'label' => 'FAQ7 回答', 'name' => 'faq_7_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_8_q', 'label' => 'FAQ8 質問', 'name' => 'faq_8_question', 'type' => 'text'),
        array('key' => 'field_faq_8_a', 'label' => 'FAQ8 回答', 'name' => 'faq_8_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_9_q', 'label' => 'FAQ9 質問', 'name' => 'faq_9_question', 'type' => 'text'),
        array('key' => 'field_faq_9_a', 'label' => 'FAQ9 回答', 'name' => 'faq_9_answer', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_faq_10_q', 'label' => 'FAQ10 質問', 'name' => 'faq_10_question', 'type' => 'text'),
        array('key' => 'field_faq_10_a', 'label' => 'FAQ10 回答', 'name' => 'faq_10_answer', 'type' => 'textarea', 'rows' => 2),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-faq.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));

/* ============================================================
   Contact Confirm Page Fields
   ============================================================ */
acf_add_local_field_group(array(
    'key' => 'group_hotel_contact_confirm',
    'title' => 'お問い合わせ確認ページ設定',
    'fields' => array(
        array('key' => 'field_cc_title', 'label' => 'ページタイトル', 'name' => 'confirm_title', 'type' => 'text'),
        array('key' => 'field_cc_desc', 'label' => '説明文', 'name' => 'confirm_description', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_cc_name_label', 'label' => 'お名前ラベル', 'name' => 'name_label', 'type' => 'text'),
        array('key' => 'field_cc_email_label', 'label' => 'メールラベル', 'name' => 'email_label', 'type' => 'text'),
        array('key' => 'field_cc_message_label', 'label' => '内容ラベル', 'name' => 'message_label', 'type' => 'text'),
        array('key' => 'field_cc_submit_text', 'label' => '送信ボタンテキスト', 'name' => 'submit_text', 'type' => 'text'),
        array('key' => 'field_cc_back_text', 'label' => '戻るテキスト', 'name' => 'back_text', 'type' => 'text'),
    ),
    'location' => array(
        array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/template-contact-confirm.php')),
    ),
    'position' => 'normal',
    'style' => 'default',
));
