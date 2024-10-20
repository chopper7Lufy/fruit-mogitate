# mogitate(商品登録・検索フォーム)
## 環境構築
Dockerビルド
  1. git clone git@github.com:chopper7Lufy/test2.git
  2. DockerDesktopアプリを立ち上げる
  3. docker-compose up -d --build
Laravel環境構築
  1.docker-compose exec php bash
  2.composer install
  3.「.env.example」ファイルを「.env」ファイルに命名を変更。または、新しく.envファイルを作成
  4. .envに以下の環境変数を追加
  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_PORT=3306
  DB_DATABASE=laravel_db
  DB_USERNAME=laravel_user
  DB_PASSWORD=laravel_pass
  5.アプリケーションキーの作成
  php artisan key:generate
  6.マイグレーションの実行
  php artisan migrate
  7.シーディングの実行
  php artisan db:seed
## 使用技術（実行環境）
  ・PHP8.3.9
  ・Laravel8.83.1
  ・MySQL8.0.26
## ER図
![スクリーンショット (7)](https://github.com/user-attachments/assets/a2622387-d0af-4feb-af08-d09fb92512b6)
## URL
・開発環境: http://localhost/
・phpMyAdmin: http://localhost:8080/
