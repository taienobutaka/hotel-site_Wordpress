# ホテルサイト ポートフォリオ

宿泊施設を想定した Web サイトのポートフォリオです。
WordPress 環境上で管理しつつ、フロントエンドは Astro で構築しています。

## 概要

- 日本語 / 英語の多言語ページ
- レスポンシブ対応（スマホ・PC）
- 共通レイアウトとコンポーネントで一貫したUI

## 技術スタック

- WordPress
- Astro
- Tailwind CSS
- HTML / CSS / JavaScript

## 主なページ

- トップ
- 客室
- サービス
- 宿泊プラン
- FAQ
- お問い合わせ確認 / 完了

## ディレクトリ構成

- `wp01/`
  - WordPress 本体
- `hotel-site/`
  - Astro プロジェクト（UI・ページ実装）

## チーム開発でのセットアップ手順

### 1. リポジトリをクローン

```bash
git clone https://github.com/taienobutaka/hotel-site_Wordpress.git wp01
cd wp01
```

### 2. `wp-config.php` を作成

`wp-config.php` はセキュリティ上リポジトリに含まれていません。  
`wp-config-sample.php` をコピーして DB 接続情報を編集してください。

```bash
cp wp-config-sample.php wp-config.php
```

`wp-config.php` を開き、以下を自分の環境に合わせて書き換えます。

```php
define( 'DB_NAME',     'データベース名' );
define( 'DB_USER',     'ユーザー名' );
define( 'DB_PASSWORD', 'パスワード' );
define( 'DB_HOST',     'localhost' );
```

### 3. WordPress のセットアップ

1. XAMPP の Apache / MySQL を起動
2. phpMyAdmin で DB を作成（DB名を上記と合わせる）
3. `http://localhost/wp01` にアクセスしてインストールを完了

> **Note**  
> テーマは `wp-content/themes/hotel-theme/` に含まれています。  
> インストール後、管理画面の「外観 > テーマ」で **hotel-theme** を有効化してください。

> **Note**  
> `wp-content/uploads/`（メディアファイル）は共有されていません。  
> メディアが必要な場合は別途チームで共有してください。

### 4. プラグインをインストール

`wp-content/plugins/` はリポジトリに含まれていません。  
管理画面の「プラグイン > 新規追加」から利用するプラグインをインストールしてください。

代表的な使用プラグイン:
- Advanced Custom Fields (ACF)

### 5. Astro 側（`hotel-site/`）

```bash
cd hotel-site
npm install
npm run dev
```

Astro の開発サーバーは起動時に表示される URL で確認できます。

## 補足

- WordPress は `http://localhost/wp01` でアクセス
- ページ設計メモは `hotel-site/docs/page-specs.md` にまとめています
