<?php
/**
 * Hotel Theme - functions.php
 * テーマのセットアップ、スタイル/スクリプトのエンキュー、ヘルパー関数
 */

// テーマセットアップ
function hotel_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'hotel_theme_setup');

// テーマアセットURI取得ヘルパー
function hotel_asset($path) {
    return get_template_directory_uri() . '/assets/' . $path;
}

// スタイル・スクリプトのエンキュー
function hotel_theme_enqueue() {
    // Tailwind CSS CDN + カスタム設定
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);

    // フォントCSS
    wp_enqueue_style('hotel-fonts', hotel_asset('css/fonts.css'), array(), '1.0.0');

    // グローバルCSS
    wp_enqueue_style('hotel-global', hotel_asset('css/global.css'), array(), '1.0.0');

    // ページ別CSS
    wp_enqueue_style('hotel-pages', hotel_asset('css/pages.css'), array(), '1.0.0');

    // メインJS
    wp_enqueue_script('hotel-main', hotel_asset('js/main.js'), array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hotel_theme_enqueue');

// Tailwind カスタム設定をインラインで追加
function hotel_tailwind_config() {
    ?>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "deep-green": "#436C5E",
                    "bg-beige": "#F5EFEA",
                    "gold": "#B99563",
                    "text-color": "#483F38",
                    "light-green": "#93A9A1",
                    "dark-beige": "#D1C7BF",
                    "base": "#F4F9F1",
                    "base-02": "#FAFAFA",
                },
                fontFamily: {
                    shippori: ['"Shippori Mincho"', "serif"],
                },
                fontSize: {
                    "h1": ["36px", { lineHeight: "54px", letterSpacing: "3.6px" }],
                    "h1-sp": ["32px", { lineHeight: "48px", letterSpacing: "3.6px" }],
                    "h2": ["24px", { lineHeight: "32px", letterSpacing: "2.4px" }],
                    "body": ["16px", { lineHeight: "32px", letterSpacing: "1px" }],
                    "body-sp": ["15px", { lineHeight: "27px", letterSpacing: "1.6px" }],
                    "small": ["14px", { lineHeight: "22.75px", letterSpacing: "1.5px" }],
                    "caption": ["12px", { lineHeight: "19px", letterSpacing: "0px" }],
                },
                screens: {
                    "sp": { max: "768px" },
                    "pc": "1024px",
                },
                spacing: {
                    "80": "80px",
                    "120": "120px",
                    "150": "150px",
                },
            },
        },
    }
    </script>
    <?php
}
add_action('wp_head', 'hotel_tailwind_config', 5);

// wp_headの<title>タグはWordPressのtitle-tagサポートで自動生成

// 言語判定ヘルパー
function hotel_is_en() {
    $post = get_post();
    if (!$post) return false;
    // ページスラッグまたは親ページでen判定
    $ancestors = get_post_ancestors($post);
    if (!empty($ancestors)) {
        $top_parent = get_post(end($ancestors));
        if ($top_parent && $top_parent->post_name === 'en') return true;
    }
    return $post->post_name === 'en';
}

// ページ自動作成（テーマ有効化時に実行）
function hotel_create_pages() {
    // 日本語ページ
    $ja_pages = array(
        'ja' => array('title' => 'TOP（日本語）', 'template' => 'page-templates/template-top.php'),
        'ja/rooms' => array('title' => '客室紹介', 'template' => 'page-templates/template-rooms.php'),
        'ja/services' => array('title' => 'サービス紹介', 'template' => 'page-templates/template-services.php'),
        'ja/plans' => array('title' => 'プラン紹介', 'template' => 'page-templates/template-plans.php'),
        'ja/faq' => array('title' => 'FAQ', 'template' => 'page-templates/template-faq.php'),
        'ja/contact-confirm' => array('title' => 'お問い合わせ確認', 'template' => 'page-templates/template-contact-confirm.php'),
        'ja/contact-complete' => array('title' => 'お問い合わせ完了', 'template' => 'page-templates/template-contact-complete.php'),
        'ja/privacy-policy' => array('title' => 'プライバシーポリシー', 'template' => 'page-templates/template-privacy-policy.php'),
        'ja/terms' => array('title' => '宿泊約款', 'template' => 'page-templates/template-terms.php'),
        'ja/usage-terms' => array('title' => '利用規約', 'template' => 'page-templates/template-usage-terms.php'),
    );

    // 英語ページ
    $en_pages = array(
        'en' => array('title' => 'TOP (English)', 'template' => 'page-templates/template-top.php'),
        'en/rooms' => array('title' => 'Rooms', 'template' => 'page-templates/template-rooms.php'),
        'en/services' => array('title' => 'Services', 'template' => 'page-templates/template-services.php'),
        'en/plans' => array('title' => 'Plans', 'template' => 'page-templates/template-plans.php'),
        'en/faq' => array('title' => 'FAQ (EN)', 'template' => 'page-templates/template-faq.php'),
        'en/contact-confirm' => array('title' => 'Contact Confirm', 'template' => 'page-templates/template-contact-confirm.php'),
        'en/contact-complete' => array('title' => 'Contact Complete', 'template' => 'page-templates/template-contact-complete.php'),
        'en/privacy-policy' => array('title' => 'Privacy Policy', 'template' => 'page-templates/template-privacy-policy.php'),
        'en/terms' => array('title' => 'Terms', 'template' => 'page-templates/template-terms.php'),
        'en/usage-terms' => array('title' => 'Usage Terms', 'template' => 'page-templates/template-usage-terms.php'),
    );

    // 親ページ "ja" を作成
    $ja_parent_id = hotel_create_single_page('ja', 'TOP（日本語）', 0, 'page-templates/template-top.php');
    // 子ページを作成
    foreach ($ja_pages as $slug => $data) {
        if ($slug === 'ja') continue;
        $child_slug = str_replace('ja/', '', $slug);
        hotel_create_single_page($child_slug, $data['title'], $ja_parent_id, $data['template']);
    }

    // 親ページ "en" を作成
    $en_parent_id = hotel_create_single_page('en', 'TOP (English)', 0, 'page-templates/template-top.php');
    // 子ページを作成
    foreach ($en_pages as $slug => $data) {
        if ($slug === 'en') continue;
        $child_slug = str_replace('en/', '', $slug);
        hotel_create_single_page($child_slug, $data['title'], $en_parent_id, $data['template']);
    }
}

function hotel_create_single_page($slug, $title, $parent_id, $template) {
    // 既存ページチェック
    $existing = get_page_by_path($parent_id ? get_post($parent_id)->post_name . '/' . $slug : $slug);
    if ($existing) return $existing->ID;

    $page_id = wp_insert_post(array(
        'post_title'   => $title,
        'post_name'    => $slug,
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_parent'  => $parent_id,
        'post_content' => '',
    ));

    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', $template);
    }

    return $page_id;
}

// テーマ有効化時にページ作成
add_action('after_switch_theme', 'hotel_create_pages');

// ACFフィールド登録
if (function_exists('acf_add_local_field_group')) {
    require_once get_template_directory() . '/inc/acf-fields.php';
}

// パーマリンク設定のフラッシュ
function hotel_flush_rewrite() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'hotel_flush_rewrite');
