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

## ローカル起動

```bash
cd hotel-site
npm install
npm run dev
```

Astro の開発サーバーは起動時に表示される URL で確認できます。

## 補足

- WordPress は `http://localhost/wp01` でアクセス
- ページ設計メモは `hotel-site/docs/page-specs.md` にまとめています
