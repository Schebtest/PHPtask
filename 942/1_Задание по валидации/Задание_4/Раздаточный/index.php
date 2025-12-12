<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Безопасность приложений</h1>
	
	<h2>Валидация данных</h2>

	<form action="server.php" method="post">
		Название статьи: <input type="text" name="name"><p>
		Алиас: <input type="text" name="alias"><p>
		Тизер: (разрешить использование тегов <input type="checkbox" name="allow_tags" value="1">) <p> 
			<p><textarea name="teaser"></textarea><p>
		
		Хэштеги: <input type="text" name="tags"><p>
		
		<input type="reset" value="Очистить">
		<input type="submit" value="Отправить">
	</form>
			 	

</html>

<!-- 

	Автором сформулированы три закона юзабилити:
		<ul>
		<li>Не заставляйте пользователя думать.
		<li>Количество щелчков мышью не имеет значения до тех пор, пока каждый клик очевиден.
		<li>Использовать сайт значительно легче, если сам выбор не вызывает размышлений.
		</ul>

 -->