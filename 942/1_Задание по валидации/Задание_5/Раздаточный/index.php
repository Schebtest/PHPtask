<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Программирование на языке PHP</title>	
</head>
<body>
	<h1>Безопасность приложений</h1>
	


	<form action="server.php" method="post">
		Имя соискателя: <input type="text" name="name" required><p>

		Заявка на должность: <p>
		<input type="checkbox" name="post[]" value="RUB">Генеральный директор<p>
		<input type="checkbox" name="post[]" value="EUR">Бренд-директор<p>
		<input type="checkbox" name="post[]" value="USD">Коммерческий директор<p>
		<input type="checkbox" name="post[]" value="CNY">Креативный директор<p>				
		
		Предполагаемая зарплата: <input type="number" min="1000" max="20000" name="date">
		<input type="radio" name="country[]" value="RUB">RUB
		<input type="radio" name="country[]" value="EUR">EUR
		<input type="radio" name="country[]" value="USD">USD
		<input type="radio" name="country[]" value="CNY">CNY<p>
		
		Карту какого банка предпочитаете: <p>
		<select size="5" multiple="multiple" name="style[]"> 
			<option value="1">JP Morgan Chase (США)</option>
			<option value="2">Bank of China (Китай)</option>
			<option value="3">Sumitomo Mitsui Financial Group (Япония)</option>
			<option value="4">Сбербанк (Россия)</option>
		</select><p>	
		
		Особые навыки (не обязательно): <p> 
			<p><textarea name="content"></textarea><p>
		
		Загрузить фото в купальнике <input type="file"><p>	

		<p>
		<input type="reset" value="Очистить">
		<input type="submit" value="Отправить">
	</form>	
			 	

</html>