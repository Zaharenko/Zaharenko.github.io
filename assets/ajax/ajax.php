 <?php
$to = "anton.zaharenko@gmail.com"; // емайл получателя данных из формы 
$tema = "Форма обратной связи с САЙТА"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['NAME']."\r\n";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['EMAIL']."\r\n"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['PHONE']."\r\n"; //полученное из формы name=phone
$message .= "Как планируете использовать дом? ".$_POST['q1']."\r\n"; //полученное из формы name=q1
$message .= "Укажите площадь дома: ".$_POST['q2']."\r\n"; //полученное из формы name=q2
$message .= "На какой бюджет рассчитываете? ".$_POST['q3']."\r\n"; //полученное из формы name=q3
$message .= "Какая почва на вашем участке? ".$_POST['q4']."\r\n"; //полученное из формы name=q4
$message .= "Выберите тип кровли: ".$_POST['q5']."\r\n"; //полученное из формы name=q5
$message .= "Какие окна вы хотите? ".$_POST['q6']."\r\n"; //полученное из формы name=q6
$message .= "Нужна ли веранда? ".$_POST['q7']."\r\n"; //полученное из формы name=q7
$message .= "  ".$_POST['NAME_FORM']."\r\n"; //полученное из формы name=NAME_FORM
$message .= "SMARTO_FORM:  ".$_POST['SMARTO_FORM']."\r\n"; //полученное из формы name=SMARTO_FORM

$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>