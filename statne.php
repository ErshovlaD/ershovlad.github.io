<?php
$access_token = '54af9be77363b2845129b4adcb92be0a4423af1606dfd6e016d4a0e8a04648214534916b7f8a2a8afff77';
date_default_timezone_set ('Europe/Samara');
// ------------------------ Время ---------------------------------------------------------------------
$hours_clock = date("H");																				///
$minutes_clock = date("i");																			///
$today = date("z");     																				///
$time = $hours_clock.':'.$minutes_clock;															///
// ----------------------------------------------------------------------------------------------------

/*$weater = file_get_contents("http://informer.gismeteo.ru/xml/28900_1.xml");
$xml = xml_parser_create();
$indexes = array();
$values = array();
xml_parse_into_struct($xml, $weater, $values, $indexes);
$wiz = $values[8]['attributes']['MIN'];
$a1 = "в Самаре: $wiz °C⛅  ";
*/
$texts = array(/*"Улыбнись", 
 "Бруньк", 
 "Вжух",
 "Прекрасное недолговечно.", 
 "Жизнь притягивает жизнь", 
 "Ты от фитнеса устала? Ущипни себя за сало", 
 "Запомните — этот день обмену и возврату не подлежит", 
 "Иногда так жалею, что говорил дорогие слова дешевым людям",
 "Никогда и никому не смотрите в глаза, пока едите банан",
 "Основной критерий разумности — наличие чувства юмора", 
 "Вежливость стала такой редкостью, что некоторые принимают ее за флирт", 
 "После третьей вилки супа понимаешь, что что-то не так", 
 "Меняю обретённую реальность на утраченные иллюзии", 
 "Не легко пришлось матери кощея, в начале ей пришлось рожать сундук", 
 "Талант не пропьёшь. Но многие не оставляют попыток", 
 "Кто ищет, тот всегда займет",
 "Я всё отдам, но где мне это взять?", 
 "Если будильник ставить не на 07:00, а на 07:04, то к концу месяца вы накопите 2 часа сна", 
 "Оказывается, вес коровы совсем не влияет на жирность молока", 
 "Кошка - это тот случай, когда усы женщину не портят", 
 "Марк Шагал, Тадж Махал... все чем-то занимались", 
 "Надо сходить к окулисту, а то я вообще не вижу смысла", 
 "Катя с 15 лет Дева только по гороскопу",
 "вышел колобок из бани и говорит голову забыл помыть",
 "Кто тебе в старости подаст телефон?",
 "Недавно прочитал слово унитаз наоборот, теперь боюсь на него сесть",
 "Голос. Деньги.",
 "Любая болезнь смертельна, если правильно гуглить",
 "Если хотите добавить свой статус - в ЛС",
 "Если вы читаете это, значит Влад устал",
 "Если вы читаете это, значит рандом работает",
 "Если вы читаете это, значит вам нечего делать", 
 "Пройдемте в сад? Я покажу вас розам.", 
 "Возьмите средство для ухода и уходите, наконец", 
 "мы сами создаем себе реальность", 
 "каждое мгновение жизни - чудо и тайна", 
 "не печалься и танцуй!", 
 "А ты впечатлительная крошка?", 
 "банЗАЙ!", 
 "Fortes fortuna adjuvat", 
 "Фотограф 📸	По всем вопросам писать в ЛС", 
 "Я сейчас здесь просто танцую🔥", 
 "Тот, кто понял цену слова, - постиг технику речи!", 
 "Fais se que dois advienne que peut.", 
 "Числа не имеют смысла - я рисую искрами!", 
 "Friend of All the World", 
 "The noblest art is that of making others happy", 
 "Ты нечто и в тоже время ничто.", 
 "Morto per la libertà", 
 "🔥", 
 "Plus grandir", 
 "Мы все - момент.", 
 "в тишине", 
 "спорим, мой ручей столкнется с морем", 
 "<<...>>", 
 "Меня точно засудят", 
 "-3,5 градуса", 
 "Для познания нужно доказательство", 
 "делай, чтобы было", 
 "Факультет чилла и безрассудств", 
 "What if the silent majority wasn't silent anymore?", 
 "Послушай мои аудио", 
 "Посмотри на небо, и вспомни - почему с любовью не спорят", 
 "🦄💜", 
 "From ashes to new, again and again like a fucking phoenix", 
 "In Ohm's law we trust", 
 "Console.Write(''Hello, world!'');", 
 "0.1 + 0.2 = 0.30000000000000004", 
 "#define TRUE FALSE", 
 "Мы просто дети белого гетто", 
 "Влад добавил новых строк", 
 "Жив, пока больно (с) кик бутовски", 
 "✈", 
 "у истоков всего стоит любовь", 
 "Всё встало на свои места🐱", 
 "С тучки на тучку", 
 "Холодно не на улице, а на душе", 
 "Кто хочет, тот ищет возможности, кто не хочет — причины", 
 "Жизнь — как фотография: получается лучше, когда ты улыбаешься", 
 "Слабоумие и отвага", 
 "☭", 
 "Enjoy life as it's ", 
 "Я напеваю, тихо касаясь струн. Сколько осталось нам этих полных лун?", 
 "Уходя пролиться золотом, чтобы вернуться вновь", 
 "Самарская глава ее жизни окрашена драматическим цветом", 
 "Красота в глазах смотрящего?", 
 "Аз есмь в чину учимых и учащих мя требую", 
 "Всё всегда начинается со взгляда.", 
 "🤔🤔🤔🤔🤔🤔🤔🤔🤔🤔🤔🤔🤔🤔", 
 "Надейся на лучшее и готовься к худшему", 
 "Keep calm.|", 
 "Барьеры, как и страхи, зачастую, всего лишь иллюзия", 
 "цпцукпу", 
 "🍪", 
 "Таскаюсь меж мирами", 
 "Чужая душа - потёмки", 
 "🐉", 
 "Ъ", 
 "maybe not", 
 "improve, adopt, overcome", 
 "Любые совпадения случайны", 
 "Все события и герои вымышлены", 
 "👑 Глупый гений, гениальный глупец", 
 "Сессия не дверь, можно не закрывать", 
 "never broke again", 
 "Veni, vidi, vici", 
 "Улыбайся чаще!... И чаща улыбнётся тебе", 
 "|̲̅̅●̲̅̅|̲̅̅=̲̅̅|̲̅̅●̲̅̅] Кто знает , тот поймет |̲̅̅●̲̅̅|̲̅̅=̲̅̅|̲̅̅●̲̅̅]", 
 "мурмурация", 
 "хрю", 
 "🦁", 
 "гы", 
 "измерить неизмеримое", 
 "Мам, пап, я Вас люблю!", 
 "Всё только начинается!", 
 "Пользуясь случаем, передаю привет своим родным и близким", 
 "А нам достался апрель, сдавшийся снегам..", 
 "Дьявол в деталях", 
 "Я не казюлька!", 
 "carpe diem", 
 "Если вы есть - будьте первыми!", 
 "Детство Бобика закончилось, началась собачья жизнь", 
 "Чтобы влезть одной пяткой в историю", 
 "Где-то здесь, на этой планете", 
 "Передо мною только море без дна", 
 "Не сделать шагу назад", 
 "We'll make a memory out of it.", 
 "Его зовут Влад", 
 "Унесённый ветром🎈", 
 "A posse ad esse non valet consequential", 
 "The world is cruel, but it isn't have to be ugly", 
 "/////////////", 
 "пускай остаток будет ярким, хоть и не долгим", 
 "изменяй идеалам своей юности", 
 "keel me pls", 
 "Ну и зачем ты это читаешь?", 
 "О-ла-ла!", 
 "Вот мы и пришли к тому, с чего начали", 
 "Шашки - это зызнь", 
 "дома.", 
 "Потеряв одно, приобретаешь другое", 
 "Эгоизм - это нормально", 
 "Цепной пес кровавого режима", 
 "Hostages of alien opinion👹", 
 "понравилось не очень понравилось.", 
 "meh", 
 "Waiting for the lilac to blossom", 
 "🌸🌙", 
 "чищ", 
 "Вдохновляю! Фотографирую!", 
 "Rock 'n' roll", 
 "Вклавиатурупальцемтыкальщик", 
 "Пасмурно. В тропосфере. И в душе.", 
 "У моего Амура не стрелы, а пули. Ты не почувствуешь боли", 
 "Sensus veris", 
 "каждый разный", 
 "Глука агори", 
 "Кибер погроммист из аэрокоса", 
 "We create our own demons.", 
 "Буду рад ответить на ваши вопросы!", 
 "Adventure Time", 
 "Овощ one love ❤", 
 "Идем со мной?", 
 "Ты со мной?", 
 "Ждём - с", 
 "Я знаю Ху из Ху", 
 "Зачем я вам это сказал?", 
 "[creative]", 
 "Выше облаков ☁💥", 
 "солай де...", 
 "И ждет она суда нечеловеческого", 
 "Расскажу анекдот в ЛС", 
 "А какая погода у тебя?", 
 "ⓋⓁⒶⒹ is me", 
 "Спецкорка [хлеба].",
 "Xiaomi - ТОП за свои деньги",
 "Привлекаю внимание. Пассивно.",
 "Записываемся на ноготочки",
 "Эти звуки накроют меня опять",
 "Ты знаешь почему хочется танцевать?",
 "А я люблю дип-хаус", 
 "Это просто луна из бумаги", 
 "Солнце приветливо светило в окна", 
 "Влад упал со своей мечты", 
 "Почувствуй ток денег по NFC", 
 "Подумай, прежде чем подумать", 
 "Какие друзья — такие и выходные", 
 "Все хорошее рано или поздно скачается", 
 "Повернуть время в спать", 
 "Каждый вечер я сижу дома навстречу своей судьбе", 
 "Мы не подходим друг другу. Я Лев, а ты идиотка.",
 "И овцы волки, и целы сыты",
 "Многие говорят, что я нелогичен. Это не так, хоть это и правда. ",
 "Валяюсь с температурой 36.6",
 "Когда-то я был и молод и красив. Теперь только красив.",
 "Необходимость присутствия проверяется отсутствием ",
 "Не держите зла, держите шарики.",
 "Поменьше негатива, побольше позитива",
 "Подлецу все к лицу",
 "Нет ничего более уродливого на Земле, чем твоё понятие о красоте",
 "Кто не идёт вперёд, тот идёт назад.",
 "I'm not Vlad, but twenty dollars it's twenty dollars.",
 "О чём ты молчишь? О чём-то важном или о пустяках?",
 "Грубость — это естественная реакция Влада на боль.",
 "Итак, вот моя жизнь, а вот - твоя. Как они могли пересечься?",
 "Не могу, что хочу. Не хочу, что могу.",
 "Ненависть тоже нужно заслужить. Одно сплошное Безразличие.",
 "Прекраснейшая музыка души — это доброта.",
 "Люди, пожалуйста, — замечайте, когда вы счастливы.",
 "В каждом человеке — солнце. Только дайте ему светить.",
 "Закат красив, когда веришь в рассвет",
 "Бессонница — это плата за богатое воображение",
 "Тебе скучно и одиноко? 8(927)00333, а знаешь, я передумал",
 "Мои друзья - моя крепость, а мои подруги - мой флот",
 "Чем богаты, тем и Влады",
 "Зачем волноваться о том, чего никогда не будет?",
 "Топтыгин, #живи",
 "Имею связи с общественностью. Или они меня, не-по-нят-но :(",
 "",*/

 "░░░░░░░░░░░░░░░░░░░░",
 "▓░░░░░░░░░░░░░░░░░░░",
 "▓▓░░░░░░░░░░░░░░░░░░",
 "▓▓▓░░░░░░░░░░░░░░░░░",
 "▓▓▓▓░░░░░░░░░░░░░░░░",
 "▓▓▓▓▓░░░░░░░░░░░░░░░",
 "▓▓▓▓▓▓░░░░░░░░░░░░░░",
 "▓▓▓▓▓▓▓░░░░░░░░░░░░░",
 "▓▓▓▓▓▓▓▓░░░░░░░░░░░░",
 "▓▓▓▓▓▓▓▓▓░░░░░░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░",
 "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓"
);
$rand = rand(0,count($texts) - 1);  
$fun = $texts[$rand]; 
$kek = date('z')*1440+date('G')*60+date('i');
$start = 175*1440;
$finish = 208*1440;
$raznica = 47520;
$procent = round((($kek-$start)/$raznica)*100,4);
$bar = "";
$stata = "Иииии мммм ттт ггг ттттт и вввввв";
if ($procent < 5){
    $bar = "░░░░░░░░░░░░░░░░░░░░";
} elseif ($procent > 5 && $procent < 10){
    $bar = "▓░░░░░░░░░░░░░░░░░░░";
    $stata = "Ииити мммм ттт ггг ттттт и вввввв" ;
} elseif ($procent > 10 && $procent < 15){
    $bar = "▓▓░░░░░░░░░░░░░░░░░░";
    $stata = "Ииити мммм тат ггг ттттт и вввввв";
} elseif ($procent > 15 && $procent < 20){
    $bar = "▓▓▓░░░░░░░░░░░░░░░░░";
    $stata = "Ииити мммм тат ггг тттто и вввввв";
} elseif ($procent > 20 && $procent < 25){
    $bar = "▓▓▓▓░░░░░░░░░░░░░░░░";
    $stata = "Ииити ммнм тат ггг тттто и вввввв";
} elseif ($procent > 25 && $procent < 30){
    $bar = "▓▓▓▓▓░░░░░░░░░░░░░░░";
    $stata = "Ииити ммнм тат ггг тттто и вввжвв";
} elseif ($procent > 30 && $procent < 35){
    $bar = "▓▓▓▓▓▓░░░░░░░░░░░░░░";
    $stata = "Ииити ммнм тат гге тттто и вввжвв";
} elseif ($procent > 35 && $procent < 40){
    $bar = "▓▓▓▓▓▓▓░░░░░░░░░░░░░";
    $stata = "Ииити ммнм тат, где тттто и вввжвв";
} elseif ($procent > 40 && $procent < 45){
    $bar = "▓▓▓▓▓▓▓▓░░░░░░░░░░░░";
    $stata = "Ииите ммнм тат, где тттто и вввжвв";
} elseif ($procent > 45 && $procent < 50){
    $bar = "▓▓▓▓▓▓▓▓▓░░░░░░░░░░░";
    $stata = "Ииити ммнм тат, где тетто и вввжвв";
} elseif ($procent > 50 && $procent < 55){
    $bar = "▓▓▓▓▓▓▓▓▓▓░░░░░░░░░░";
    $stata = "Ииити ммнм тат, где тетто и вввжвв";
} elseif ($procent > 55 && $procent < 60){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░░";
    $stata = "Ииите ммнм тат, где тттто и вввжвв";
} elseif ($procent > 60 && $procent < 65){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░░";
    $stata = "Ищите меня там, где тттто и вввжвв";
} elseif ($procent > 65 && $procent < 70){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░░";
    $stata = "Ищите меня, там, где тттто и вввжвв";
} elseif ($procent > 70 && $procent < 75){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░░";
    $stata = "Ищите меня там, где тттто и влвжвв";
} elseif ($procent > 75 && $procent < 80){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░░";
    $stata = "Ищите меня там, где тттто и влвжво";
} elseif ($procent > 80 && $procent < 85){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░░";
    $stata = "Ищите меня там, где тттто и влвжво";
} elseif ($procent > 85 && $procent < 90){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░░";
    $stata = "Ищите меня там, где тетто и влвжво";
} elseif ($procent > 90 && $procent < 95){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░░";
    $stata = "Ищите меня там, где тетто и влажно";
} elseif ($procent > 95 && $procent < 100){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓░";
    $stata = "Ищите меня там, где тепло и влажно";
} elseif ($procent > 100){
    $bar = "▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓";
    $stata = "А вы уже нашли меня? ";
}
echo $kek;
if ($kek > 252124 && $kek < 252199){
    $bar = "░░░░░░░Самара░░░░░░░";
} elseif ($kek > 252199 && $kek < 252224){
    $bar = "░░░Новокуйбышевск░░░";
} elseif ($kek > 252224 && $kek < 252388){
    $bar = "░░░░░░Чапаевск░░░░░░";
} elseif ($kek > 252388 && $kek < 252470){
    $bar = "░░░░░░Пугачевск░░░░░";
} elseif ($kek > 252470 && $kek < 252532){
    $bar = "░░░░░░Балаково░░░░░░";
} elseif ($kek > 252532 && $kek < 252572){
    $bar = "░░░░░░Вольск-2░░░░░░";
} elseif ($kek > 252572 && $kek < 252724){
    $bar = "░░░░░░░Сенная░░░░░░░";
} elseif ($kek > 252724 && $kek < 252996){
    $bar = "░░░░░░Саратов░░░░░░░";
} elseif ($kek > 252996 && $kek < 253196){
    $bar = "░░░░░Петров Вал░░░░░";
} elseif ($kek > 253196 && $kek < 253275){
    $bar = "░░░░░░Волгоград░░░░░";
} elseif ($kek > 253275 && $kek < 253404){
    $bar = "░░░░░░░Сарепта░░░░░░";
} elseif ($kek > 253404 && $kek < 253459){
    $bar = "░░░░░░░Жутово░░░░░░░";
} elseif ($kek > 253459 && $kek < 253504){
    $bar = "░░░░Котельниково░░░░";
} elseif ($kek > 253504 && $kek < 253544){
    $bar = "░░░░░░Ремонтная░░░░░";
} elseif ($kek > 253544 && $kek < 253675){
    $bar = "░░░░░░Зимовники░░░░░";
} elseif ($kek > 253675 && $kek < 253766){
    $bar = "░░░░░░░Сальск░░░░░░░";
} elseif ($kek > 253766 && $kek < 253892){
    $bar = "░░░Песчанокопское░░░";
} elseif ($kek > 253892 && $kek < 253975){
    $bar = "░░░░░Тихорецкая░░░░░";
} elseif ($kek > 253975 && $kek < 254005){
    $bar = "░░░░░░░Выселки░░░░░░";
} elseif ($kek > 254005 && $kek < 254048){
    $bar = "░░░░░░Кореновск░░░░░";
} elseif ($kek > 254048 && $kek < 254113){
    $bar = "░░░░░░░Динская░░░░░░";
} elseif ($kek > 254113 && $kek < 254210){
    $bar = "░░░░░░Краснодар░░░░░";
} elseif ($kek > 254210 && $kek < 254228){
    $bar = "░░░░░░Абинская░░░░░░";
} elseif ($kek > 254228 && $kek < 254265){
    $bar = "░░░░░░Крымская░░░░░░";
} elseif ($kek > 254265 && $kek < 254313){
    $bar = "░░░░░Тоннельная░░░░░";
} elseif ($kek > 254313 && $kek < 254500){
    $bar = "░░░░Новороссийск░░░░";
}
$l = "〈";
$s = "〉";

//$status = ("rm -rf */       $time       $a1  $fun");
$status = ("$procent% &#8195; $l$bar$s &#8195; $stata");


$statusSet = curl('https://api.vk.com/method/status.set?text='.urlencode($status).'&v=3.0&access_token='.$access_token);


function curl( $url ){
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec( $ch );
curl_close( $ch );
return $response;
}

?>