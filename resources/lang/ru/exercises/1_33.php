<?php

return [
    'title' => 'Обобщенное накопление',
    'description' => [
        '1' =>
        "Можно получить еще более общую версию accumulate (упражнение ",
        '2' =>
        "), если ввести понятие фильтра (filter) на комбинируемые термы." .
        "То есть комбинировать только те термы, порожденные из значений диапазона, которые удовлетворяют указанному условию. " .
        "Получающаяся абстракция filtered-accumulate получает те же аргументы, что и accumulate, плюс дополнительный одноаргументный предикат, " .
        "который определяет фильтр. Запишите filtered-accumulate ввиде процедуры. Покажите, как с помощью filtered-accumulate выразить следующее:",
        '3' =>
        "а. сумму квадратов простых чисел в интервале от a до b (в предположении, что процедура prime? уже написана);",
        '4' =>
        "б. произведение всех положительных целых чисел меньше n, которые просты по отношению к n (то есть всех таких положительных целых чисел i < n, что НОД(i, n) = 1).",
    ],
];
