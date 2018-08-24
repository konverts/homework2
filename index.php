<?php
require_once 'functions.php';
echo '<h2>Считаем переменное количество аргументов</h2>';
echo taskl('+', 8, 2, 4);
echo '<h2>Таблица умножения разной ширины</h2>';
echo task2(14, 5);
echo '<h2>Даты</h2>';
echo task3();
echo task4();
echo '<h2>Карл без буквы К</h2>';
echo task5('К', '', 'Карл у Клары украл Кораллы');
echo '<br>';
echo task5('Две', 'Три', 'Две бутылки лимонада');
echo '<h2>Запись в файл</h2>';
echo task6('file.txt', 'Hello again!');