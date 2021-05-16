<?php
/*В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным
текстом этой новости.
Нужно в переменную $b записать сокращенный текст новости по правилам:
- обрезать до 180 символов
- приписать многоточие
- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так? - при обрезке ровно на 180 символах часть последного
слова может выглядеть как нецензурное.
Результат: ссылка на репозиторий с кодом и ваши комментарии.
*/
//текст новости
$a = "President Joe Biden has revoked a string of proclamations by Donald Trump, including an order to punish vandals who destroy monuments. Mr Trump issued the order amid last year's social justice protests as statues were being defaced or toppled.
Mr Biden also rescinded Mr Trump's plans for a sculpture garden to honour American heroes.
And he canned a 2019 proclamation that sought to bar entry to immigrants who could not afford health insurance.";

//ссылка на страницу с полным текстом
//$link = '<a href="https://www.bbc.com/news/world-us-canada-57124887" target="_blank">Full text of article</a>';
//echo $link;

//обрезаем до 180 символов и приписываем многоточие
$b = substr($a,0,180)."..."; 
//echo $b;

//разбиваем строку на массив из слов, разделенных пробелом
$tmp_arr=explode(" ",$b); 
//print_r($tmp_arr);

//определяем количество слов в массиве $tmp_arr
$num = count($tmp_arr);
//echo $num;

//берем последние 2 слова и делаем их ссылкой
$last_2_words = $tmp_arr[$num-2]." ".$tmp_arr[$num-1];
$my_link = '<a href="https://www.bbc.com/news/world-us-canada-57124887" target="_blank">'.$last_2_words.'</a>';
//echo $my_link;

//собираем необходимый текст
$result="";
for($i=0;$i<$num-2;$i++){
    $result=$result." ".$tmp_arr[$i]." ";
}
$result=$result.$my_link;
echo $result;
?>
