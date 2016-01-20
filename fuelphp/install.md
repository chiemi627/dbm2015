# FuelPHPをインストールする手順

1. FuelPHPからzipファイルをダウンロードする
2. zipファイルを解凍する
3. 適当な場所に置く。（Sitesのしたじゃない方が良いかもしれない）
 * ここでは仮に ~/works/fuelphp/の下に置くとします。
 * ディレクトリ名を適当な名前に変更してください（ここではcourseMngrとします）
 * このディレクトリのパスをこの後仮にFUELPATHとします。
  * つまり FUELPATH = ~/works/fuelphp/courseMngr
4. FUELPATH/fuel/app/config/config.phpを開き、タイムゾーンを設定します
```
96: 'default_timezone'   => 'Asia/Tokyo',
```
5. ディレクトリのアクセス権を変えるプログラムを実行する

```
 % cd ~/works/fuelphp/courseMngr
 % mkdir fuel/app/tmp
 % php oil refine install
```

6. パッケージの最新化

```
 % php composer.phar self-update
 % php composer.phar update
```
7. publicディレクトリをSites下にリンクする

```
 % ln -s ~/works/fuelphp/courseMngr/public ~/Sites/courseMngr
```

8. ブラウザで以下のURLを開いてみてWelcomeページが出たら完了！
 http://localhost/~chiemi/courseMngr/index.php

9. index.phpを省略したい時は、[.htaccess](htaccess)ファイルをpublicディレクトリの下に
おいてください。（mod_rewriteがapacheでインストールされている必要があります。お茶情計算機室はOK。）





