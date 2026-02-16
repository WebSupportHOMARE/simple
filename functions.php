<?php
function unset_menu()
{
    global $menu;
    unset($menu[5]); //投稿メニュー
}
add_action("admin_menu", "unset_menu");

function remove_menus()
{
    remove_menu_page('edit-comments.php'); //コメントメニュー
}
add_action('admin_menu', 'remove_menus');

// 購読者がダッシュボードにアクセスできないようにする
add_action('auth_redirect', 'subscriber_go_to_home');
function subscriber_go_to_home($user_id)
{
    if (!user_can($user_id, 'edit_posts')) {
        wp_redirect(get_home_url());
    }
}

// 購読者のツールバーを非表示にする
add_action('after_setup_theme', 'subscriber_hide_admin_bar');
function subscriber_hide_admin_bar()
{
    if (!current_user_can('edit_posts')) {
        show_admin_bar(false);
    }
}

// アーカイブタイトルのプレフィックスを削除するフィルター
function remove_archive_title_prefix($title)
{
    if (is_category() || is_tag() || is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');

// パンくずリスト
function custom_breadcrumbs()
{
    echo '<ul class="breadcrumb mw flex">';

    // ホームページへのリンク
    echo '<li class="breadcrumb__item"><a href="' . home_url() . '">TOP</a></li>';

    if (is_single()) {
        // 個別投稿ページの場合
        $post_type = get_post_type_object(get_post_type());
        if ($post_type) {
            echo '<li class="breadcrumb__item"><a href="' . get_post_type_archive_link($post_type->name) . '">' . $post_type->labels->singular_name . '</a></li>';
        }
        // 現在の投稿タイトル
        echo '<li class="breadcrumb__item">' . get_the_title() . '</li>';
    } elseif (is_archive()) {
        // アーカイブページの場合
        if (is_category() || is_tag() || is_tax() || is_post_type_archive() || is_author() || is_date()) {
            echo '<li class="breadcrumb__item">' . get_the_archive_title() . '</li>';
        }
    } elseif (is_page()) {
        // 固定ページの場合
        echo '<li class="breadcrumb__item">' . get_the_title() . '</li>';
    }

    echo '</ul>';
}

// ページネーション
function my_disable_redirect_canonical($redirect_url)
{
    if (is_archive()) {
        $subject = $redirect_url;
        $pattern = '/\/page\//'; // URLに「/page/」があるかチェック
        preg_match($pattern, $subject, $matches);

        if ($matches) {
            // リクエストURLに「/page/」があれば、リダイレクトしない。
            $redirect_url = false;
            return $redirect_url;
        }
    }
    return $redirect_url; // デフォルトのリダイレクトURLを返す
}
add_filter('redirect_canonical', 'my_disable_redirect_canonical');

// フォームで未入力項目があったときにメール本文から削除
function my_mail($mail_raw, $values)
{
    // フィールドが配列の場合は最初の要素をチェックし、それ以外はそのままチェック
    $date_value = is_array($values['フォームタグのname']) ? $values['フォームタグのname'][0] : $values['フォームタグのname'];
    // 未入力の場合にメール本文から削除
    if (empty($date_value)) {
        $mail_raw->body = str_replace('◆紐づいている項目名：{フォームタグのname}' . "\r\n", '', $mail_raw->body);
    }
    return $mail_raw;
}
add_filter('mwform_auto_mail_raw_mw-wp-form-3941', 'my_mail', 10, 2);
add_filter('mwform_admin_mail_raw_mw-wp-form-3941', 'my_mail', 10, 2);

add_action('wp_print_styles', 'load_dashicons');
function load_dashicons()
{
    wp_enqueue_style('dashicons');
}

add_filter('wpcf7_autop_or_not', '__return_false');
