<?php
function taskl($action)
{
    $data = func_get_args();
    unset($data[0]);
    $stroka = implode($action, $data);
    $result = array_shift($data);
    echo $stroka . '=';
    foreach ($data as $item) {
        switch ($action) {
            case "+":
                $result += $item . '<br>';
                break;
            case "-":
                $result -= $item . '<br>';
                break;
            case "*":
                $result *= $item . '<br>';
                break;
            case "/":
                if ($item != 0) {
                    $result /= $item . '<br>';
                }
                break;
            default:
                echo "неверный арифметический знак";
                return null;
        }
    }
    return $result;
}


function task2($colums, $rows)
{
    if ($colums > 0 && $rows > 0) {
        echo '<table border="1">';
        echo "<tr>";

        for ($s = 1; $s <= $colums; $s++) {
            echo "<td>$s</td>";
        }
        echo '<tr>';
        for ($r = 2; $r <= $rows; $r++) {
            echo "<tr><td>$r</td>";
            for ($k = 2; $k <= $colums; $k++) {
                if ($k % 2 == 0 && $r % 2 == 0) echo "<td>(" . $k * $r . ")</td>";
                elseif ($k % 2 != 0 && $r % 2 != 0) echo "<td>[" . $k * $r . "]</td>";
                else echo "<td>" . $k * $r . "</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Введенные размеры таблицы не верны';
    }
}

function task3()
{
    return date('d.m.Y H:i:s') . '<br>';
}

function task4()
{
    return mktime(0, 0, 0, 2, 24, 2016);
}


function task5($search, $replace, $subject)
{
    return str_replace($search, $replace, $subject);
}


function task6($name, $text)
{
    file_put_contents($name, $text); // пишем
    return file_get_contents($name); // читаем
}
