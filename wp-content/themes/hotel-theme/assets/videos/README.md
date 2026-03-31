# FVセクション Rectangle43 動画管理ガイド

このディレクトリは、FigmaデザインのRectangle43エリア（黒背景の動画コンテナ）の動画ファイルを管理します。

## 📐 Figma仕様との整合性

- **Rectangle43**: Figmaデザイン通りの黒背景（`bg-black`）として実装
- **背景画像**: IMGL0313-Edit が背景に正しく配置済み
- **動画コンテナ**: node-id="228:1588" で正確にマークアップ
- **差し替え機能**: 動画ファイル配置時に黒背景から自動切り替え

## 🎨 現在のデザイン状況

- **Rectangle43**: Figmaデザイン通りの黒背景（`bg-black`）を表示中
- **背景画像**: Figmaで指定されている実際の画像 (IMGL0313-Edit) が背景に配置
- **Rectangle43エリア**: node-id="228:1588" として正確に実装済み
- **動画準備完了**: 動画ファイル配置時に黒背景から自動切り替え可能

## 🎬 動画ファイル配置

### 必要なファイル

- `hero-video.mp4` - メインの動画ファイル（MP4形式）
- `hero-video.webm` - ブラウザ互換性用（WebM形式）

### 推奨仕様

- **解像度**: 1920x1080（16:9）
- **長さ**: 30-60秒程度のループ可能な内容
- **ファイルサイズ**: 10MB以下推奨
- **音声**: なし（muted属性で自動再生）
- **フォーマット**: H.264（MP4）、VP9（WebM）

## 🔄 動画の差し替え方法

### 1. 初回動画配置

```bash
# 動画ファイルを配置
cp your-video.mp4 /home/taie/work/Aies/hotel-site/public/videos/hero-video.mp4
cp your-video.webm /home/taie/work/Aies/hotel-site/public/videos/hero-video.webm

# ページをリロードすると自動的に動画表示に切り替わります
```

### 2. 動画の更新

```bash
# 既存ファイルをバックアップ（必要に応じて）
mv hero-video.mp4 hero-video.mp4.backup

# 新しい動画を配置
cp new-video.mp4 hero-video.mp4
```

## 🎛️ 表示制御

### 現在の表示状態

- **動画ファイルなし**: 高品質な宿泊施設画像を表示
- **動画ファイルあり**: 自動的に動画表示に切り替え

### 表示の優先順位

1. 動画ファイル（`hero-video.mp4`）
2. フォールバック画像（高品質なUnsplash画像）

### 手動切り替え

ブラウザの開発者コンソールで以下を実行：

```javascript
// 動画表示に強制切り替え
switchToVideo();

// 動画の再生/停止
toggleHeroVideo();
```

## 🎨 画像表示（動画差し替え前）

現在は **高級リゾートホテルの外観** 画像を表示：

- プロ品質のホスピタリティ画像
- レスポンシブ対応
- 適切なオーバーレイでテキスト視認性確保

## 🔧 トラブルシューティング

### 動画が表示されない場合

1. ファイルパスの確認: `/public/videos/hero-video.mp4`
2. ファイル形式の確認: MP4（H.264）推奨
3. ブラウザコンソールでエラーをチェック
4. ファイルサイズの確認（大きすぎる場合は圧縮）

### 最適化のヒント

```bash
# FFmpegで動画を最適化
ffmpeg -i input.mov -c:v libx264 -crf 23 -preset medium -vf scale=1920:1080 -an hero-video.mp4
ffmpeg -i input.mov -c:v libvpx-vp9 -crf 30 -vf scale=1920:1080 -an hero-video.webm
```

## 📱 レスポンシブ対応

- **PC (1024px以上)**: フル動画表示
- **SP (768px以下)**: 軽量化された表示
- **動画コントロール**: デバイスに応じて表示切り替え

---

**注意**: 動画ファイルは自動的にmuted属性で再生されるため、音声は再生されません。これはブラウザの自動再生ポリシーに準拠するためです。
