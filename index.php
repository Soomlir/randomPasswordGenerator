<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/styles.css" rel="stylesheet">
  <title>Генератор паролей</title>
</head>

<body>
  <div class="app">
    <form class="app__form" action="/vendor/form.php">
      <label class="app__label">
        Введите длину пароля
        <input class="app__input" type="number" min="4" max="20" value="10">
      </label>

      <fieldset class="app__fieldset">
        <legend class="app__legend">Какие символы использовать?</legend>
        <label class="app__checkbox-label">
          <input class="app__checkbox" type="checkbox" name="upperWords" checked>
          Буквы верхнего регистра
        </label>
        <label class="app__checkbox-label">
          <input class="app__checkbox" type="checkbox" name="lowerWords" checked>
          Буквы нижнего регистра
        </label>
        <label class="app__checkbox-label">
          <input class="app__checkbox" type="checkbox" name="numbers" checked>
          Цифры
        </label>
        <label class="app__checkbox-label">
          <input class="app__checkbox" type="checkbox" name="specSymbols">
          Спецсимволы
        </label>
      </fieldset>
      <button class="app__button" type="button" id="generateButton">Сгенерировать пароль</button>
    </form>
    <div class="app__password">
      <p class="app__result-text">Результат:</p>
      <div class="app__result" id="appResult">Нажмите кнопку для генерации</div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="/js/script.js"></script>
</body>

</html>