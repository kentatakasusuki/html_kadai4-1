<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title></title>
    <!-- BootstrapのCSS読み込み -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">

</head>
<body>
<header>

</header>
<main>
<form method="POST" action="/takasusukisample/public/reg" enctype="multipart/form-data">
@csrf
  <fieldset>
    <legend>チャット入力画面</legend>
    <div>
      名前: <input type="text" class="form-control" name="name" placeholder="ハンドルネームOK">
    </div>
    <div>
      メールアドレス: <input type="email" class="form-control" name="email" placeholder="メールアドレス">
    </div>
    <div>
      住所: <input type="text" class="form-control" name="address" placeholder="住所">
    </div>
	
	<div>
      性別:
		<select class="form-control" name="sex">
			<option value="男子">男子</option>
			<option value="女子">女子</option>
		</select>
    </div>
    <div>
	<h3>帽子</h3>
    帽子の名前：<input type="text" class="form-control" name="cap1" placeholder="名前">
    買った店：<input type="text" class="form-control" name="cap2" placeholder="買った店">
    お値段：<input type="number" class="form-control" name="cap3" placeholder="">
    </div>
    <div>
	<h3>上半身</h3>
    上半身の名前：<input type="text" class="form-control" name="wear1" placeholder="名前">
    買った店：<input type="text" class="form-control" name="wear2" placeholder="買った店">
    お値段：<input type="number" class="form-control" name="wear3" placeholder="">
    </div>	
    <div>
	<h3>下半身</h3>
    下半身の名前：<input type="text" class="form-control" name="bottom1" placeholder="名前">
    買った店：<input type="text" class="form-control" name="bottom2" placeholder="買った店">
    お値段：<input type="number" class="form-control" name="bottom3" placeholder="">
    </div>	
    <div>
	<h3>靴</h3>
    靴の名前：<input type="text" class="form-control" name="shoes1" placeholder="名前">
    買った店：<input type="text" class="form-control" name="shoes2" placeholder="買った店">
    お値段：<input type="number" class="form-control" name="shoes3" placeholder="">
    </div>		
    <div>
	今日のコーデのポイントは？
	<textarea class="form-control" name="point" placeholder="できるだけ細かくお願いします。"></textarea>
	</div>
	<div class="form-group">
		<label for="InputFile">ファイル</label>
		<input type="file" name="file1">
		<p class="help-block">ヘルプ用ブロック。これはサンプルです。</p>
	</div>
	<button type="submit" class="btn btn-default">送信</button>
    </div>
  </fieldset>
</form>
</main>			
			
			
			
<footer>
</footer>

	
</body>
</html>
