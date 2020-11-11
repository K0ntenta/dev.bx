<?php

require('read_2.php');

echo 'Тесты:' . PHP_EOL;
readFromConsoleTest();

echo PHP_EOL . 'Введите данные для проверки: ' . PHP_EOL;
$funcResult = readFromConsole();

echo 'Ожидаемый результат: ' . PHP_EOL;
$myResult = trim(fgets(STDIN));

function assertEquals($myResult, $funcResult):string
{
    if ($funcResult == $myResult)
    {
        return 'test passed';
    }
    else
    {
        return 'test failed';
    }
}

echo 'Результат: ' . assertEquals($myResult, $funcResult) . PHP_EOL;

function readFromConsoleTest()
{
    $result = readFromConsole('true');
    echo '1) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: true' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === true ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);

    $result = readFromConsole('false');
    echo '2) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: false' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === false ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);

    $result = readFromConsole('!stop');
    echo '3) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: null' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === null ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);

    $result = readFromConsole('1.3');
    echo '4) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: 1.3' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === 1.3 ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);

    $result=readFromConsole('1');
    echo '5) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: 1' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === 1 ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);

    $result=readFromConsole('test');
    echo '6) Результат функции: ' . $result . PHP_EOL . ' Ожидаемый результат: test' . PHP_EOL;
    echo 'Ожидание/реальность?' . ($result === 'test' ? ' Да' . PHP_EOL : ' Нет' . PHP_EOL);
}