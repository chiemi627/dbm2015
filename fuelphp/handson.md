# ハンズオン
* samplesのquery.phpのサンプルプログラムをfuelPHPで書いた場合どうなるか、その手順を示してみます。
* 今回の場合、データベースがすでにあることが前提です。
* データベースはsqlite3を使います

1. データベースファイルをconfig下に置く

```
 % cd fuel/app/config
 % cp ~chiemi/Sites/DB2015/samples/query/university_utf8.db univ.db
 % chmod 777 univ.db
```

2. データベースの設定を fuel/app/config/db.phpに書く
```
<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'default' => array(
		'type' => 'pdo',
		'connection' => array(
		  'dsn' => 'sqlite:'.APPPATH.'config/univ.db',
		  'username' => '',
		  'password' => '',
		),
		'charset' => NULL,
	),
);

```

3. 開発用のデータベース設定ファイルを消す

```
 % rm fuel/app/config/development/db.php
```

4. プログラムをview, model, controllerに分けて書き込みます。

* View : [fuel/app/views/enrollment/index.php](sample/view.php)
* Control : [fuel/app/classes/controller/enrollment.php](sample/controller.php)
* Model : [fuel/app/classes/model/enrollment.php](sample/model.php)

5. 下記のURLを開いてみてください
* http://localhost/~chiemi/courseMngr/enrollment

## 注意
* ~chiemi となっている所は各自のアカウントに変更してください。
