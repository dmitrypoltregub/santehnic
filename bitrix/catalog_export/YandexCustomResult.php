<?if (!isset($_GET["referer1"]) || strlen($_GET["referer1"])<=0) $_GET["referer1"] = "yandext";?><? $strReferer1 = htmlspecialchars($_GET["referer1"]); ?><?if (!isset($_GET["referer2"]) || strlen($_GET["referer2"]) <= 0) $_GET["referer2"] = "";?><? $strReferer2 = htmlspecialchars($_GET["referer2"]); ?><? header("Content-Type: text/xml; charset=windows-1251");?><? echo "<"."?xml version=\"1.0\" encoding=\"windows-1251\"?".">"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2022-08-25 09:59">
<shop>
<name>Сантехник Маркет</name>
<company>Сантехник Маркет</company>
<url>http://santehnic-market.ru</url>
<platform>1C-Bitrix</platform>
<currencies>
<currency id="RUB" rate="CBRF" />
<currency id="USD" rate="CBRF" />
</currencies>
<categories>
<category id="674">Вентиляция</category>
<category id="675" parentId="674">Вентиляторы</category>
<category id="933" parentId="674">Воздуховоды круглые</category>
<category id="932" parentId="674">Воздуховоды плоские</category>
<category id="682" parentId="674">Гибкие воздуховоды</category>
<category id="683" parentId="674">Люки сантехнические</category>
<category id="684" parentId="674">Переходы вентиляционные</category>
<category id="685" parentId="674">Решетки вентиляционные</category>
<category id="498">Замочно-скобяные изделия</category>
<category id="939" parentId="498">Замки и личинки</category>
<category id="771" parentId="939">Замки велосипедные</category>
<category id="848" parentId="939">Замки дверные</category>
<category id="690" parentId="939">Замки навесные</category>
<category id="810" parentId="939">Замки накладные</category>
<category id="799" parentId="939">Замки почтовые, мебельные</category>
<category id="623" parentId="939">Личинки дверные</category>
<category id="757" parentId="939">Накладки дверные</category>
<category id="722" parentId="498">Колеса мебельные</category>
<category id="889" parentId="498">Крючки мебельные</category>
<category id="824" parentId="498">Накладки на ножки</category>
<category id="689" parentId="498">Ножки мебельные</category>
<category id="924" parentId="498">Офисные принадлежности</category>
<category id="777" parentId="924">Бирки</category>
<category id="821" parentId="924">Гвозди мебельные обивочные</category>
<category id="740" parentId="924">Глазки дверные</category>
<category id="874" parentId="924">Цифры (номера) для дверей</category>
<category id="942" parentId="498">Петли</category>
<category id="751" parentId="942">Петли дверные</category>
<category id="563" parentId="942">Петли мебельные</category>
<category id="774" parentId="498">Полкодержатели</category>
<category id="944" parentId="498">Ручки</category>
<category id="671" parentId="944">Ручки балконные</category>
<category id="622" parentId="944">Ручки дверные</category>
<category id="585" parentId="944">Ручки мебельные</category>
<category id="904" parentId="944">Ручки оконные</category>
<category id="936" parentId="498">Упоры-защелки</category>
<category id="581" parentId="936">Гребенки оконные</category>
<category id="518" parentId="936">Дверные доводчики</category>
<category id="499" parentId="936">Магниты мебельные</category>
<category id="879" parentId="936">Ограничители для дверей (стопоры)</category>
<category id="600" parentId="936">Фиксаторы для дверей</category>
<category id="738" parentId="936">Шпингалеты</category>
<category id="487">Инструменты</category>
<category id="647" parentId="487">Аксессуары для шлифования и полировки</category>
<category id="759" parentId="487">Биты</category>
<category id="564" parentId="487">Диски отрезные</category>
<category id="765" parentId="487">Инструмент для укладки плитки</category>
<category id="873" parentId="487">Клеевые пистолеты и стержни</category>
<category id="921" parentId="487">Ключи сантехнические и автомобильные</category>
<category id="796" parentId="921">Гаечные ключи и головки</category>
<category id="655" parentId="921">Ключи разводные, переставные, трубчатые</category>
<category id="940" parentId="487">Малярный инструмент</category>
<category id="856" parentId="940">Валики, ручки к валикам, ванночки для валиков</category>
<category id="817" parentId="940">Кисти</category>
<category id="590" parentId="940">Правила</category>
<category id="584" parentId="940">Шпатели</category>
<category id="606" parentId="487">Прочий инструмент</category>
<category id="488" parentId="487">Резьбонарезной инструмент</category>
<category id="938" parentId="487">Сверла и коронки для сверления</category>
<category id="762" parentId="938">Коронки для сверления</category>
<category id="847" parentId="938">Сверла по бетону</category>
<category id="743" parentId="938">Сверла по металлу</category>
<category id="863" parentId="938">Сверла по плитке, стеклу</category>
<category id="553" parentId="938">Сверла, коронки по дереву</category>
<category id="925" parentId="487">Слесарный и столярный инструмент</category>
<category id="694" parentId="925">Губцевый инструмент</category>
<category id="767" parentId="925">Зажимной инструмент</category>
<category id="750" parentId="925">Заклепочники и заклепки</category>
<category id="728" parentId="925">Измерительный и разметочный инструмент</category>
<category id="893" parentId="925">Молотки, киянки, кувалды</category>
<category id="842" parentId="925">Ножи, ножницы и лезвия</category>
<category id="789" parentId="925">Ножовки</category>
<category id="911" parentId="925">Отвертки</category>
<category id="806" parentId="925">Пистолеты для герметиков и пен</category>
<category id="834" parentId="925">Стамески</category>
<category id="730" parentId="925">Степлеры и скобы</category>
<category id="586" parentId="925">Топоры</category>
<category id="922" parentId="487">Электромонтажный инструмент</category>
<category id="560" parentId="922">Инструменты для электриков</category>
<category id="872" parentId="922">Паяльники и принадлежности для пайки</category>
<category id="492" parentId="487">Ящики для инструментов</category>
<category id="495">Крепеж</category>
<category id="869" parentId="495">Крепёж для гипсокартона</category>
<category id="635" parentId="495">Крепежные элементы WALRAVEN, Mupro, Rehau</category>
<category id="601" parentId="495">Крючек шуруп</category>
<category id="931" parentId="495">Метизы</category>
<category id="607" parentId="931">Анкера</category>
<category id="597" parentId="931">Болты</category>
<category id="894" parentId="931">Глухари</category>
<category id="583" parentId="931">Дюбель-гвозди</category>
<category id="496" parentId="931">Дюбеля</category>
<category id="808" parentId="931">Комфирмат</category>
<category id="852" parentId="931">Саморезы и гвозди</category>
<category id="850" parentId="931">Шайбы и гайки</category>
<category id="502" parentId="931">Шпильки</category>
<category id="861" parentId="495">Пластины и мебельные уголки</category>
<category id="812" parentId="495">Пороги</category>
<category id="668" parentId="495">Профиля и уголки</category>
<category id="709" parentId="495">Прочий крепеж</category>
<category id="881" parentId="495">Такелаж</category>
<category id="535">Лакокрасочные материалы</category>
<category id="626" parentId="535">Затирки для плитки</category>
<category id="539" parentId="535">Защита древесины</category>
<category id="788" parentId="535">Клеи</category>
<category id="855" parentId="535">Клейкие ленты</category>
<category id="912" parentId="535">Колеры</category>
<category id="577" parentId="535">Краска аэрозоль</category>
<category id="781" parentId="535">Краски и грунтовки</category>
<category id="536" parentId="535">Пены, герметики, шпатлевки</category>
<category id="741" parentId="535">Растворители</category>
<category id="884" parentId="535">Сухие смеси</category>
<category id="917">Сантехника инженерная</category>
<category id="1042" parentId="917">Защита от протечек</category>
<category id="1026" parentId="917">Инсталляции</category>
<category id="954" parentId="917">Канализация</category>
<category id="1008" parentId="954">Внутренняя канализация Ostendorf</category>
<category id="1236" parentId="954">Внутренняя канализация Ostendorf Skolan Safe</category>
<category id="1172" parentId="954">Внутренняя канализация Политэк</category>
<category id="1077" parentId="954">Наружняя Рыжая канализация</category>
<category id="955" parentId="954">Обратные клапаны и зонты ПВХ</category>
<category id="1114" parentId="954">Фитинги SML Rapid</category>
<category id="964" parentId="954">Шумопоглощающая канализация REHAU RAUPIANO PLUS</category>
<category id="1064" parentId="917">Коллекторы и аксессуары</category>
<category id="1065" parentId="1064">Коллектор FAR NEW</category>
<category id="1097" parentId="1064">Коллектор Oventrop</category>
<category id="1103" parentId="1064">Коллектор Rehau</category>
<category id="1081" parentId="1064">Коллектор STOUT</category>
<category id="1163" parentId="1064">Коллектор TIEMME</category>
<category id="1144" parentId="1064">Коллектор TIM (IS)</category>
<category id="1170" parentId="1064">Коллекторные группы</category>
<category id="1208" parentId="1064">Коллекторные шкафы</category>
<category id="1193" parentId="1064">Комплектующие к коллекторам</category>
<category id="1126" parentId="1064">Стальные распределительные коллекторы</category>
<category id="1128" parentId="917">Нарезка резьбы</category>
<category id="1060" parentId="917">Насосы циркуляционные, реле давления</category>
<category id="1132" parentId="917">Обратные клапаны</category>
<category id="1040" parentId="917">Подводки гибкие</category>
<category id="1041" parentId="1040">Подводки для воды</category>
<category id="1147" parentId="1040">Подводки для воды Гигант</category>
<category id="1044" parentId="1040">Подводки для газа</category>
<category id="1055" parentId="1040">Подводки для стиральных машин</category>
<category id="1062" parentId="1040">Подводки из нержавейки</category>
<category id="1206" parentId="1040">Подводки под смеситель</category>
<category id="1109" parentId="917">Предохранительный клапан</category>
<category id="957" parentId="917">Расходные материалы</category>
<category id="1045" parentId="957">Гофры и утеплители для труб</category>
<category id="1047" parentId="957">Манжеты</category>
<category id="1048" parentId="957">Прокладки</category>
<category id="1110" parentId="957">Прочие расходники</category>
<category id="1053" parentId="957">Прочистка канализации</category>
<category id="1052" parentId="957">Расходные материалы для металлопластиковых труб</category>
<category id="1046" parentId="957">Средства герметизации резьбовых соединений</category>
<category id="958" parentId="957">Хомуты</category>
<category id="1076" parentId="958">Хомуты аварийные</category>
<category id="1205" parentId="958">Хомуты ленточные</category>
<category id="1150" parentId="958">Хомуты с рез. и дюбелем</category>
<category id="1029" parentId="958">Хомуты усиленные болтовые</category>
<category id="1149" parentId="958">Хомуты червячные под отвертку</category>
<category id="1014" parentId="917">Термосмесители</category>
<category id="920" parentId="917">Фильтры и измерительные приборы</category>
<category id="1043" parentId="920">Манометры</category>
<category id="998" parentId="920">Регуляторы давления</category>
<category id="1005" parentId="920">Счетчики для воды</category>
<category id="1074" parentId="920">Фильтры косые</category>
<category id="1120" parentId="920">Фильтры промывные</category>
<category id="926">Сантехника чистовая</category>
<category id="962" parentId="926">Аксессуары для ванной и туалета</category>
<category id="1215" parentId="962">Frap</category>
<category id="1216" parentId="962">Savol</category>
<category id="1086" parentId="962">VERAGIO RAMBA</category>
<category id="1146" parentId="962">Бумагодержатели</category>
<category id="1239" parentId="962">Дозаторы в ванную комнату в ванную комнату</category>
<category id="963" parentId="962">Ершик для унитаза</category>
<category id="1156" parentId="962">Мусорное ведро</category>
<category id="1083" parentId="962">Мыльница и стакан для щеток</category>
<category id="1164" parentId="962">Полки угловые в ванную комнату</category>
<category id="1186" parentId="962">Поручень в ванную комнату</category>
<category id="1183" parentId="962">Ретро Classic бронза</category>
<category id="1135" parentId="962">Стойки напольные</category>
<category id="1056" parentId="926">Ванны, душевые кабины и комплектующие к ним</category>
<category id="1057" parentId="1056">Ванны</category>
<category id="1087" parentId="1056">Комплектующие к душевым кабинам</category>
<category id="1100" parentId="926">Водонагреватели</category>
<category id="1009" parentId="926">Водосливная арматура</category>
<category id="1032" parentId="1009">Арматура для бачка унитаза</category>
<category id="1035" parentId="1009">Выпуски и донные клапаны</category>
<category id="1036" parentId="1009">Гофры для сифонов</category>
<category id="1197" parentId="1009">Гофры, фановые трубы, эксцентрики для унитаза</category>
<category id="1010" parentId="1009">Комплектующие для стиральных машин</category>
<category id="1125" parentId="1009">Сифоны для биде и писсуаров</category>
<category id="1082" parentId="1009">Сифоны для кухонной мойки</category>
<category id="1034" parentId="1009">Сифоны для раковины (умывальника)</category>
<category id="1189" parentId="1009">Слив-перелив (обвязка) и трапы</category>
<category id="1134" parentId="926">Душевые ограждения</category>
<category id="1063" parentId="926">Питьевые фильтры и картриджи</category>
<category id="1176" parentId="1063">Комплектующие к фильтрам</category>
<category id="1133" parentId="1063">Питьевые фильтры</category>
<category id="1211" parentId="1063">Сменные картриджы к фильтрам</category>
<category id="1098" parentId="1063">Фильтры кувшины и картриджи</category>
<category id="945" parentId="926">Полотенцесушители и комплектующие</category>
<category id="946" parentId="945">Водяные полотенцесушители в ванную комнату</category>
<category id="1038" parentId="945">Комплектующие для полотенцесушителей</category>
<category id="965" parentId="945">Электрические полотенцесушители с терморегулятором</category>
<category id="966" parentId="926">Радиаторы отопления и запорные краны</category>
<category id="1237" parentId="966">Алюминевые радиаторы</category>
<category id="1130" parentId="966">Декоративные краны</category>
<category id="1115" parentId="966">Комплектующие к радиаторам</category>
<category id="1080" parentId="966">Краны для радиаторов, термоголовки</category>
<category id="1031" parentId="966">Шаровые краны</category>
<category id="1214" parentId="926">Раковины в ванную комнату</category>
<category id="973" parentId="926">Смесители и комплектующие</category>
<category id="1037" parentId="973">Гигиенические лейки и наборы</category>
<category id="1058" parentId="973">Душевая система</category>
<category id="1151" parentId="973">Душевой гарнитур</category>
<category id="992" parentId="973">Душевые шланги</category>
<category id="1054" parentId="973">Комплектующие к смесителям</category>
<category id="1161" parentId="973">Ручной душ</category>
<category id="974" parentId="973">Смесители встраиваемые</category>
<category id="1024" parentId="973">Смесители для биде</category>
<category id="1217" parentId="973">Смесители для ванны</category>
<category id="1192" parentId="973">Смесители для душа</category>
<category id="980" parentId="973">Смесители для кухни</category>
<category id="1212" parentId="973">Смесители для раковины</category>
<category id="975" parentId="926">Унитазы и аксессуары</category>
<category id="1001" parentId="975">Крепеж для сиденья унитаза</category>
<category id="976" parentId="975">Сиденье для унитаза</category>
<category id="1093" parentId="975">Унитазы напольные</category>
<category id="1073" parentId="975">Унитазы подвесные</category>
<category id="927">Сантехнические резьбовые фитинги</category>
<category id="1039" parentId="927">Металлопластиковые трубы и фитинги</category>
<category id="1012" parentId="927">ПНД фитинги</category>
<category id="1068" parentId="1012">Краны шаровые ПНД</category>
<category id="1092" parentId="1012">Муфты ПНД</category>
<category id="1154" parentId="1012">Тройники ПНД</category>
<category id="1013" parentId="1012">Уголки ПНД</category>
<category id="959" parentId="927">Полипропиленовые трубы и фитинги</category>
<category id="960" parentId="959">Полипропилен белый</category>
<category id="1171" parentId="960">Американки белые</category>
<category id="1152" parentId="960">Водорозетки белые</category>
<category id="1209" parentId="960">Заглушки белые</category>
<category id="1072" parentId="960">Зачистной инструмент</category>
<category id="1199" parentId="960">Клипсы белые</category>
<category id="961" parentId="960">Краны белые</category>
<category id="993" parentId="960">Муфты белые</category>
<category id="1111" parentId="960">Насадки для сварочного аппарата</category>
<category id="1196" parentId="960">Обводы и крестовины белые</category>
<category id="1167" parentId="960">Тройники белые</category>
<category id="1175" parentId="960">Трубы белые</category>
<category id="1112" parentId="960">Уголки белые</category>
<category id="971" parentId="959">Полипропилен серый</category>
<category id="1202" parentId="971">Американки серые</category>
<category id="1182" parentId="971">Водорозетки серые</category>
<category id="972" parentId="971">Заглушки серые</category>
<category id="1022" parentId="971">Клипсы серые</category>
<category id="997" parentId="971">Краны серые</category>
<category id="1025" parentId="971">Крестовины серые</category>
<category id="1066" parentId="971">Муфты серые</category>
<category id="1162" parentId="971">Обводы серые</category>
<category id="1049" parentId="971">Тройники комбинированные</category>
<category id="1213" parentId="971">Тройники серые</category>
<category id="1105" parentId="971">Трубы серые</category>
<category id="1129" parentId="971">Уголки серые</category>
<category id="969" parentId="927">Пресс- фитинги из нержавеющей стали</category>
<category id="1155" parentId="969">Водорозетки из нержавеющей стали</category>
<category id="970" parentId="969">Муфты из нержавеющей стали</category>
<category id="1190" parentId="969">Обводы из нержавеющей стали</category>
<category id="1107" parentId="969">Тройники из нержавеющей стали</category>
<category id="1159" parentId="969">Труба из нержавеющей стали</category>
<category id="1023" parentId="969">Уголки из нержавеющей стали</category>
<category id="943" parentId="927">Резьбовые фитинги</category>
<category id="987" parentId="943">Фитинги Viega</category>
<category id="1018" parentId="987">Заглушки viega</category>
<category id="1139" parentId="987">Муфты viega</category>
<category id="1104" parentId="987">Ниппеля viega</category>
<category id="1079" parentId="987">Переходы viega</category>
<category id="1020" parentId="987">Тройники viega</category>
<category id="988" parentId="987">Уголки viega</category>
<category id="1188" parentId="987">Удлинители viega</category>
<category id="1166" parentId="987">Футорки viega</category>
<category id="949" parentId="943">Фитинги и трубы оцинкованные</category>
<category id="1207" parentId="949">Контргайки оцинк.</category>
<category id="1050" parentId="949">Крестовины и обводы оцинк.</category>
<category id="999" parentId="949">Муфты оцинк.</category>
<category id="1169" parentId="949">Ниппеля оцинк.</category>
<category id="1069" parentId="949">Сгоны и бочата оцинк.</category>
<category id="1061" parentId="949">Тройник оцинк.</category>
<category id="950" parentId="949">Трубы оцинк.</category>
<category id="1200" parentId="949">Уголки оцинк.</category>
<category id="1006" parentId="949">Футорки оцинк.</category>
<category id="985" parentId="943">Фитинги и трубы чугунные</category>
<category id="986" parentId="985">Контргайки чёрн.</category>
<category id="1195" parentId="985">Муфты чёрн.</category>
<category id="991" parentId="985">Ниппеля чёрн.</category>
<category id="1075" parentId="985">Сгоны и бочата чёрн.</category>
<category id="1203" parentId="985">Тройники чёрн.</category>
<category id="1174" parentId="985">Трубы чёрн.</category>
<category id="1131" parentId="985">Уголки чёрн.</category>
<category id="1090" parentId="985">Футорки чёрн.</category>
<category id="952" parentId="943">Фитинги латунные</category>
<category id="1122" parentId="952">Американки латунные</category>
<category id="1168" parentId="952">Водоотводы (врезки для труб)</category>
<category id="953" parentId="952">Заглушки латунные</category>
<category id="1015" parentId="952">Контргайки латунные</category>
<category id="1173" parentId="952">Муфты латунные</category>
<category id="967" parentId="952">Ниппеля латунные</category>
<category id="1059" parentId="952">Переходы латунные</category>
<category id="1218" parentId="952">Сгоны, бочата  и удлинители латунные</category>
<category id="1145" parentId="952">Тройники латунные</category>
<category id="968" parentId="952">Уголки латунные</category>
<category id="1021" parentId="952">Футорки латунные</category>
<category id="1088" parentId="952">Штуцера латунные</category>
<category id="981" parentId="943">Фитинги никелированные</category>
<category id="1070" parentId="981">Американки никелированные</category>
<category id="1136" parentId="981">Заглушки никелированные</category>
<category id="1091" parentId="981">Муфты никелированные</category>
<category id="1116" parentId="981">Ниппеля никелированные</category>
<category id="1099" parentId="981">Переходы никелированные</category>
<category id="982" parentId="981">Тройники никелированные</category>
<category id="1078" parentId="981">Уголки никелированный</category>
<category id="1219" parentId="981">Удлинители никелированные</category>
<category id="1165" parentId="981">Футорки никелированные</category>
<category id="1201" parentId="981">Эксцентрики никелированные</category>
<category id="983" parentId="943">Фитинги под конус</category>
<category id="977" parentId="943">Фитинги хромированные</category>
<category id="1004" parentId="977">Американки хром.</category>
<category id="1106" parentId="977">Заглушки хром.</category>
<category id="978" parentId="977">Муфты хром.</category>
<category id="1030" parentId="977">Ниппеля хром.</category>
<category id="1095" parentId="977">Переходы и футорки хром.</category>
<category id="1137" parentId="977">Тройники хром.</category>
<category id="1157" parentId="977">Уголки хром.</category>
<category id="1180" parentId="977">Удлинители и боченки хром.</category>
<category id="994" parentId="977">Цанговые фитинги хром.</category>
<category id="1187" parentId="977">Штуцера хром.</category>
<category id="1027" parentId="977">Эксцентрики хром.</category>
<category id="928" parentId="927">Сшитый полиэтилен</category>
<category id="929" parentId="928">Сшитый полиэтилен Rehau</category>
<category id="1085" parentId="929">Водоразетки Rehau</category>
<category id="1118" parentId="929">Гильзы Rehau</category>
<category id="984" parentId="929">Евроконуса Rehau</category>
<category id="1011" parentId="929">Инструмент для сшитого полиэтилена Rehau</category>
<category id="956" parentId="929">Муфты Rehau</category>
<category id="1113" parentId="929">Муфты с накидной гайкой Rehau</category>
<category id="1084" parentId="929">Направляющие Rehau</category>
<category id="1184" parentId="929">Тройники Rehau</category>
<category id="1153" parentId="929">Трубки для подключения радиатора Rehau</category>
<category id="1102" parentId="929">Трубы Rehau</category>
<category id="1051" parentId="929">Уголки Rehau</category>
<category id="1028" parentId="929">Шина и планки Rehau</category>
<category id="937" parentId="928">Сшитый полиэтилен Stout</category>
<category id="1002" parentId="937">Водорозетки Stout</category>
<category id="1158" parentId="937">Гильзы Stout</category>
<category id="951" parentId="937">Крючки Stout</category>
<category id="1177" parentId="937">Муфты Stout</category>
<category id="1019" parentId="937">Муфты с накидной гайкой Stout</category>
<category id="1178" parentId="937">Тройники Stout</category>
<category id="948" parentId="937">Труба Stout</category>
<category id="1121" parentId="937">Трубки для подключения радиатора Stout</category>
<category id="1108" parentId="937">Уголки Stout</category>
<category id="1141" parentId="927">Фитинги Gebo</category>
<category id="1017" parentId="927">Фитинги медные</category>
<category id="479">Хозяйственные товары</category>
<category id="480" parentId="479">Автощетки и лопаты снеговые</category>
<category id="614" parentId="479">Аксессуары для телефона</category>
<category id="934" parentId="479">Все для дома</category>
<category id="735" parentId="934">1001 мелочь</category>
<category id="591" parentId="934">Веревки и шнуры</category>
<category id="802" parentId="934">Восковые мелки</category>
<category id="891" parentId="934">Гладильные доски, сушилки для белья</category>
<category id="711" parentId="934">Пленки укрывные</category>
<category id="857" parentId="934">Плинтусы потолочные</category>
<category id="688" parentId="934">Соединительные элементы плинтусов Aqua20 и Aqua37</category>
<category id="578" parentId="934">Средства от вредителей</category>
<category id="772" parentId="934">Стремянки</category>
<category id="699" parentId="934">Уборочный инвентарь</category>
<category id="686" parentId="934">Уплотнители и ленты для окон</category>
<category id="787" parentId="934">Электронагревательные приборы</category>
<category id="530" parentId="479">Все для сада и огорода</category>
<category id="531" parentId="530">Садовый инструмент</category>
<category id="790" parentId="530">Системы полива</category>
<category id="616" parentId="530">Шланги поливочные</category>
<category id="766" parentId="479">Емкости и тары</category>
<category id="833" parentId="479">Смазки</category>
<category id="731" parentId="479">Средства индивидуальной защиты и инвентарь</category>
<category id="853" parentId="479">Химия</category>
<category id="509">Щетки для электроинструмента</category>
<category id="484">Электротовары</category>
<category id="565" parentId="484">Автоматические выключатели</category>
<category id="826" parentId="565">Автоматические выключатели ABB</category>
<category id="566" parentId="565">Автоматические выключатели Legrand</category>
<category id="550" parentId="484">Дверные звонки и кнопки</category>
<category id="526" parentId="484">Кабель и монтаж</category>
<category id="882" parentId="526">Гофрированные трубы для кабеля</category>
<category id="877" parentId="526">Изолента и термоусадочные трубки</category>
<category id="557" parentId="526">Кабель-каналы</category>
<category id="749" parentId="526">Кабельные наконечники</category>
<category id="724" parentId="526">Клипсы, скобы для гофротруб</category>
<category id="845" parentId="526">Распределительные (распаячные) коробки</category>
<category id="527" parentId="526">Силовые кабели</category>
<category id="785" parentId="526">Хомуты и стяжки кабельные</category>
<category id="625" parentId="484">Осветительные приборы и элементы питания</category>
<category id="1071" parentId="625">Аксессуары для люминесцентных и галогеновых ламп</category>
<category id="830" parentId="625">Батарейки</category>
<category id="1148" parentId="625">Встраиваемые и накладные светильники</category>
<category id="1003" parentId="625">Лампы накаливания</category>
<category id="1204" parentId="625">Лампы светодиодные</category>
<category id="1210" parentId="625">Настольные лампы</category>
<category id="1191" parentId="625">Ночники</category>
<category id="947" parentId="625">Светильники для гаражей и подсобных помещений</category>
<category id="1124" parentId="625">Светодиодные ленты и комплектующие</category>
<category id="695" parentId="625">Фонари для дачи и кемпинга</category>
<category id="604" parentId="484">Распределительные щиты</category>
<category id="507" parentId="484">Розетки и выключатели</category>
<category id="725" parentId="507">Подрозетники</category>
<category id="775" parentId="507">Рамки для розеток и выключателей</category>
<category id="508" parentId="507">Розетки и выключатели встраиваемые</category>
<category id="589" parentId="507">Розетки и выключатели накладные</category>
<category id="691" parentId="484">Телекоммуникации</category>
<category id="807" parentId="691">ТВ и интернет кабели</category>
<category id="692" parentId="691">ТВ и интернет штекеры и переходники</category>
<category id="776" parentId="691">ТВ разветвители</category>
<category id="803" parentId="484">Теплые полы и комплектующие к ним</category>
<category id="546" parentId="484">Удлинители и тройники</category>
<category id="602" parentId="546">Двойники и тройники для розетки</category>
<category id="547" parentId="546">Колодки для удлинителей</category>
<category id="859" parentId="546">Сетевые фильтры</category>
<category id="780" parentId="546">Удлинители сетевые</category>
<category id="548" parentId="484">Электрические комплектующие</category>
<category id="666" parentId="548">Выключатели проходные</category>
<category id="828" parentId="548">Клеммы для проводов</category>
<category id="844" parentId="548">Патроны и крепежные кольца для ламп</category>
<category id="549" parentId="548">Силовые розетки и вилки</category>
</categories>
<offers>
<offer id="6151" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/rez_bonareznoy_instrument/zubr_1_2_klupp_trubnyy_rez_bonareznoy_bspt_r_seriya_professional_28271_1_2_z02_28271_1_2_z02/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rez_bonareznoy_instrument&amp;utm_term=6151</url>
<price>1265</price>
<purchase_price>606</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>488</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/015/nfwwlv0151kk6wvmbs6hh06twl8pgw12.jpg</picture>
<name>ЗУБР 1/2&quot; клупп трубный резьбонарезной (BSPT R), серия Профессионал 28271-1/2_z02</name>
<description></description>
</offer>
<offer id="6936" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/rez_bonareznoy_instrument/zubr_3_4_klupp_trubnyy_rez_bonareznoy_bspt_r_seriya_professional_28271_3_4_z02_28271_3_4_z02/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rez_bonareznoy_instrument&amp;utm_term=6936</url>
<price>1265</price>
<purchase_price>520</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>488</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/015/nfwwlv0151kk6wvmbs6hh06twl8pgw12.jpg</picture>
<name>ЗУБР 3/4&quot; клупп трубный резьбонарезной (BSPT R), серия Профессионал 28271-3/4_z02</name>
<description></description>
</offer>
<offer id="10176" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/rez_bonareznoy_instrument/treshchotka_mirax_s_udlinitelem_dlya_kluppov_1_4_1_1_4_dlina_620mm_28245_28245/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rez_bonareznoy_instrument&amp;utm_term=10176</url>
<price>1783</price>
<purchase_price>643</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>488</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ba5/agasruh47u68wo0tu3lanh8j9m2u32n8.jpg</picture>
<name>Трещотка MIRAX с удлинителем для клуппов, 1/4&quot; - 1 1/4&quot;, длина 620мм 28245</name>
<description></description>
</offer>
<offer id="7430" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/rozetka_tv_zvezda_prokhodnaya_14_db_legrand_valena_slonovaya_kost_774331_774331/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=7430</url>
<price>1587</price>
<purchase_price>380</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/183/w3sqot5v7d8380icrcaz6zh3wuhkpphc.jpg</picture>
<name>Розетка TV звезда проходная 14 дБ Legrand Valena ( слоновая кость ) 774331</name>
<description></description>
</offer>
<offer id="9169" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/rozetka_rj45_1_vykhod_kat_5e_utp_legrand_valena_alyuminiy_montazh_na_vintakh_770130_770130/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=9169</url>
<price>1587</price>
<purchase_price>300</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/84d/2s6t9rvrj0zvzoy9orrsh5c6idrlvqz7.png</picture>
<name>Розетка RJ45 1 выход Кат.5e UTP Legrand Valena ( алюминий ) монтаж на винтах 770130</name>
<description></description>
</offer>
<offer id="9421" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/vyvod_kabelya_legrand_valena_slonovaya_kost_774347_774347/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=9421</url>
<price>1173</price>
<purchase_price>392</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/62e/75a0c7r64ppprehnxe3pre9zlln54g39.jpg</picture>
<name>Вывод кабеля Legrand Valena ( слоновая кость ) 774347</name>
<description></description>
</offer>
<offer id="10926" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/rozetka_tv_zvezda_prokhodnaya_14_db_legrand_valena_belaya_774431_774431/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=10926</url>
<price>1587</price>
<purchase_price>380</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/317/gq0yv3jsi6v0pcc55ovlisck1wc2a92p.jpg</picture>
<name>Розетка TV звезда проходная 14 дБ Legrand Valena ( белая ) 774431</name>
<description></description>
</offer>
<offer id="11953" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/rozetka_tv_zvezda_1_5db_2400mgts_legrand_valena_alyuminiy_770129_770129/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=11953</url>
<price>1231</price>
<purchase_price>220</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b21/mmjx9uum9pep79vb5g0tb7sq2w74axtk.jpg</picture>
<name>Розетка TV звезда 1,5Дб 2400МГц Legrand Valena ( алюминий ) 770129</name>
<description></description>
</offer>
<offer id="14259" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/vyvod_kabelya_legrand_valena_belaya_774447_774447/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=14259</url>
<price>1173</price>
<purchase_price>395</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a75/tdf2oqvtwjm09j7u49kkklu1yrwdvho0.jpg</picture>
<name>Вывод кабеля Legrand Valena (белая) 774447</name>
<description></description>
</offer>
<offer id="17546" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/rozetki_i_vyklyuchateli_vstraivaemye/rozetka_elektricheskaya_s_zazemleniem_s_usb_legrand_valena_slonovaya_kost_774119_774119/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rozetki_i_vyklyuchateli_vstraivaemye&amp;utm_term=17546</url>
<price>2300</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>508</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7ba/xil978hbd6cgri7bh8sw0ka9yqjvw75f.png</picture>
<name>Розетка электрическая с заземлением с USB Legrand Valena ( слоновая кость ) 774119</name>
<description></description>
</offer>
<offer id="6882" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/upory_zashchelki/dvernye_dovodchiki/dvernoy_dovodchik_msm_d100_wh_belyy_100kg_msm_d100_wh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dvernye_dovodchiki&amp;utm_term=6882</url>
<price>2099</price>
<purchase_price>895</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>518</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9ed/03e0h5otba73t2jp8ooj7ts35607d4sl.png</picture>
<name>Дверной доводчик MSM D100-WH (белый) 100кг</name>
<description></description>
</offer>
<offer id="7500" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/upory_zashchelki/dvernye_dovodchiki/dvernoy_dovodchik_msm_d50_wh_belyy_50kg_msm_d50_wh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dvernye_dovodchiki&amp;utm_term=7500</url>
<price>1576</price>
<purchase_price>579</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>518</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9ed/03e0h5otba73t2jp8ooj7ts35607d4sl.png</picture>
<name>Дверной доводчик MSM D50-WH (белый) 50кг</name>
<description></description>
</offer>
<offer id="8631" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/upory_zashchelki/dvernye_dovodchiki/dvernoy_dovodchik_msm_d75_wh_belyy_75kg_msm_d75_wh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dvernye_dovodchiki&amp;utm_term=8631</url>
<price>1927</price>
<purchase_price>711</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>518</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9ed/03e0h5otba73t2jp8ooj7ts35607d4sl.png</picture>
<name>Дверной доводчик MSM D75-WH (белый) 75кг</name>
<description></description>
</offer>
<offer id="19650" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/dvernye_zvonki_i_knopki/zvonok_besprovodnoy_belyy_d04_lexman_7_melodiy_837195/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dvernye_zvonki_i_knopki&amp;utm_term=19650</url>
<price>1495</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>550</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/068/khbl9wr312paed0vr2y8yrqmnnpmis9b.jpg</picture>
<name>Звонок беспроводной белый D04 LEXMAN 7 мелодий</name>
<description></description>
</offer>
<offer id="9068" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_koronki_po_derevu/kraftool_5sht_68_100_32mm_pila_segmentnaya_nabornaya_po_derevu_68_74_80_90_100x32_mm_29584_h5_32_295/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_koronki_po_derevu&amp;utm_term=9068</url>
<price>1725</price>
<purchase_price>813</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>553</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8b8/nm8j212dynshpubqsgwlc31yrso4n4mh.jpg</picture>
<name>KRAFTOOL 5шт(68-100/32мм) пила сегментная наборная по дереву: 68-74-80-90-100x32 мм 29584-H5-32</name>
<description></description>
</offer>
<offer id="12584" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_koronki_po_derevu/nabor_kol_tsevykh_pil_koronok_po_derevu_16_predmet_19mm_22mm_30mm_32mm_38mm_44mm_51mm_67mm_76mm_89mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_koronki_po_derevu&amp;utm_term=12584</url>
<price>1311</price>
<purchase_price>494</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>553</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ef3/dx54hx6qe17t8uzc8hkqeewo39h2ojh6.png</picture>
<name>Набор кольцевых пил (коронок) по дереву 16 предмет.: 19мм, 22мм, 30мм, 32мм, 38мм, 44мм, 51мм, 67мм, 76мм, 89мм, 102мм, 127мм</name>
<description></description>
</offer>
<offer id="6802" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/stripper_mnogofunktsional_nyy_kt_2_0_5_6_mm2_zubr_professional_22672_z01_22672_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=6802</url>
<price>1495</price>
<purchase_price>574</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b96/c8l4ck7002z44nzczavmlgzkinma2o2y.jpg</picture>
<name>Стриппер многофункциональный KT-2, 0.5 - 6 мм2, ЗУБР Профессионал 22672_z01</name>
<description></description>
</offer>
<offer id="7904" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/nabor_stayer_profi_electro_otvertki_dielektricheskie_tester_100_250v_cr_v_8sht_25145_h8_z01_25145_h8/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=7904</url>
<price>2013</price>
<purchase_price>1072</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4f5/hdb3ogqtpj02morhzx8moaj5t5u23sll.jpg</picture>
<name>Набор STAYER &quot;PROFI&quot; &quot;ELECTRO&quot;: Отвертки диэлектрические, тестер, 100-250В, Cr-V, 8шт 25145-H8_z01</name>
<description></description>
</offer>
<offer id="8247" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/pk_2_press_kleshchi_dlya_izolirovannye_nakonechnikov_i_muft_0_5_6_mm_kv_zubr_professional_45456_2_45/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=8247</url>
<price>2272</price>
<purchase_price>822</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/557/sxz2i4hl6efifqq0g1dubp5gwpqr87kx.jpg</picture>
<name>ПК-2 пресс-клещи для изолированные наконечников и муфт 0.5 -6 мм.кв, ЗУБР Профессионал 45456-2</name>
<description></description>
</offer>
<offer id="8937" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/nabor_stayer_profi_electro_otvertki_dielektricheskie_tester_100_250v_cr_v_6sht_25145_h6_z01_25145_h6/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=8937</url>
<price>1668</price>
<purchase_price>669</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6ad/nrxmou6z4clhphoxrl2q3grvogsy2m4h.jpg</picture>
<name>Набор STAYER &quot;PROFI&quot; &quot;ELECTRO&quot;: Отвертки диэлектрические, тестер, 100-250В, Cr-V, 6шт 25145-H6_z01</name>
<description></description>
</offer>
<offer id="10779" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/zubr_stripper_avtomaticheskiy_mnogofunktsional_nyy_tm_1_22645_22645/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=10779</url>
<price>1610</price>
<purchase_price>728</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/23e/4gycitpq3bcdajlwnevj1u1i0z5pp7be.jpg</picture>
<name>ЗУБР стриппер автоматический  многофункциональный ТМ-1 22645</name>
<description></description>
</offer>
<offer id="13970" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/instrumenty_dlya_elektrikov/metallodetektor_stayer_standard_topelectro_mnogofunktsional_nyy_2v1_45296_45296/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrumenty_dlya_elektrikov&amp;utm_term=13970</url>
<price>1265</price>
<purchase_price>493</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>560</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/06a/rkd0nmjs4tksd7eqxwb6voe7laqhd2ov.png</picture>
<name>Металлодетектор STAYER &quot;STANDARD&quot; &quot;TOPElectro&quot; многофункциональный, 2в1 45296</name>
<description></description>
</offer>
<offer id="7577" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/diski_otreznye/mul_tirez_125_mm_disk_almaznyy_otreznoy_universal_nyy_zubr_professional_36660_125_z01_36660_125_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=diski_otreznye&amp;utm_term=7577</url>
<price>1380</price>
<purchase_price>692</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>564</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f19/jyt78r57ns8vxea7txk704zxcssrk531.jpg</picture>
<name>МУЛЬТИРЕЗ 125 мм, диск алмазный отрезной универсальный, ЗУБР Профессионал 36660-125_z01</name>
<description></description>
</offer>
<offer id="8587" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/diski_otreznye/krug_otreznoy_almaznyy_zubr_sploshnoy_dlya_elektroplitkoreza_25_4kh230mm_36655_230_z01_36655_230_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=diski_otreznye&amp;utm_term=8587</url>
<price>1380</price>
<purchase_price>657</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>564</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/031/75pstat2hn1oidvo916f8e6zwnm6p7q1.jpg</picture>
<name>Круг отрезной алмазный ЗУБР сплошной, для электроплиткореза, 25,4х230мм 36655-230_z01</name>
<description></description>
</offer>
<offer id="10569" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/diski_otreznye/krug_almaznyy_distar_5d_hard_ceramics_230_kh_1_6_kh_25_4_mm_11120048017_111_200_48_017/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=diski_otreznye&amp;utm_term=10569</url>
<price>4020</price>
<purchase_price>1850</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>564</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0b6/wr7ho11dthlfsf5vfq56el554cl3pc1u.jpg</picture>
<name>Круг алмазный DISTAR 5D HARD CERAMICS 230 х 1.6 х 25.4 мм 11120048017</name>
<description></description>
</offer>
<offer id="13825" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/diski_otreznye/disk_otreznoy_almaznyy_sploshnoy_keramo_d_300_mm_zubr_professional_36655_300_36655_300/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=diski_otreznye&amp;utm_term=13825</url>
<price>2530</price>
<purchase_price>1150</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>564</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/10f/0wm5rnppbupgd81gacoccwa0jh02dwo9.png</picture>
<name>Диск отрезной алмазный сплошной КЕРАМО, d=300 мм, ЗУБР Профессионал 36655-300</name>
<description></description>
</offer>
<offer id="13857" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/diski_otreznye/keramo_25_250_mm_disk_almaznyy_otreznoy_sploshnoy_po_keramogranitu_mramoru_plitke_zubr_professional/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=diski_otreznye&amp;utm_term=13857</url>
<price>2191</price>
<purchase_price>850</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>564</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b5e/90jzrup3b1gc26g9flkahnbgltsrs6jn.jpg</picture>
<name>КЕРАМО-25 250 мм, диск алмазный отрезной сплошной по керамограниту, мрамору, плитке, ЗУБР Профессионал 36655-250_z02</name>
<description></description>
</offer>
<offer id="11093" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_legrand/differentsial_nyy_avtomat_2p_40a_30ma_legrand_rx3_avdt_khar_ka_s_tip_ac_1p_n_419403_419403/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_legrand&amp;utm_term=11093</url>
<price>3261</price>
<purchase_price>1263</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>566</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c1f/i3uckgxiperyaiq1ey0grx3972527ssy.jpg</picture>
<name>Дифференциальный автомат 2П C 40 30мА Legrand 419403</name>
<description></description>
</offer>
<offer id="11659" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/sredstva_ot_vrediteley/otpugivatel_krys_i_myshey_chistyy_dom_ul_trazvukovoy_06_170/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sredstva_ot_vrediteley&amp;utm_term=11659</url>
<price>1530</price>
<purchase_price>614</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>578</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/683/ryymf6vc55q02bptbh2bsj021lsmbkbo.jpg</picture>
<name>Отпугиватель крыс и мышей &quot;ЧИСТЫЙ ДОМ&quot; ультразвуковой</name>
<description></description>
</offer>
<offer id="12312" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/shpateli/shpatel_kraftool_fasadnyy_s_dvukhkomponentnoy_ruchkoy_nerzhaveyushchee_polotno_250mm_10036_250_10036/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shpateli&amp;utm_term=12312</url>
<price>1265</price>
<purchase_price>616</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>584</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8fe/frxwx9gp2q8bntht8ioey5dd41r88ny9.jpg</picture>
<name>Шпатель KRAFTOOL фасадный с двухкомпонентной ручкой, нержавеющее полотно, 250мм 10036-250</name>
<description></description>
</offer>
<offer id="12313" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/shpateli/shpatel_kraftool_fasadnyy_s_dvukhkomponentnoy_ruchkoy_nerzhaveyushchee_polotno_300mm_10036_300_10036/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shpateli&amp;utm_term=12313</url>
<price>1380</price>
<purchase_price>459</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>584</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/593/nntmkk34af3em4fep05ibozjqsv91s00.jpg</picture>
<name>Шпатель KRAFTOOL фасадный с двухкомпонентной ручкой, нержавеющее полотно, 300мм 10036-300</name>
<description></description>
</offer>
<offer id="12314" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/shpateli/shpatel_kraftool_fasadnyy_s_dvukhkomponentnoy_ruchkoy_nerzhaveyushchee_polotno_350mm_10036_350_10036/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shpateli&amp;utm_term=12314</url>
<price>1610</price>
<purchase_price>756</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>584</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/08f/1inhjsgqxux0clb2avnpyyr2zlfrkviw.jpg</picture>
<name>Шпатель KRAFTOOL фасадный с двухкомпонентной ручкой, нержавеющее полотно, 350мм 10036-350</name>
<description></description>
</offer>
<offer id="8267" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/pravila/pravilo_3_0_m_sibin_10725_3_0_10725_3_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pravila&amp;utm_term=8267</url>
<price>1553</price>
<purchase_price>446</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>590</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/50c/ympm17x60rxf3q4rz0xgkkd92cpp8v0e.jpg</picture>
<name>Правило, 3.0 м, СИБИН 10725-3.0</name>
<description></description>
</offer>
<offer id="12580" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/pravila/pravilo_2_5_m_sibin_10725_2_5_10725_2_5/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pravila&amp;utm_term=12580</url>
<price>1265</price>
<purchase_price>404</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>590</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/50c/ympm17x60rxf3q4rz0xgkkd92cpp8v0e.jpg</picture>
<name>Правило, 2.5 м, СИБИН 10725-2.5</name>
<description></description>
</offer>
<offer id="14158" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/pravila/pravilo_uroven_s_ruchkami_grand_2_m_stayer_10752_2_0_10752_2_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pravila&amp;utm_term=14158</url>
<price>1840</price>
<purchase_price>1031</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>590</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3ec/l9t25rjqd6g45mjk1txp233n3mrtq4cf.jpg</picture>
<name>Правило-уровень с ручками GRAND, 2 м, STAYER 10752-2.0</name>
<description></description>
</offer>
<offer id="6548" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_8_moduley_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=6548</url>
<price>1426</price>
<purchase_price>311</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac9/3k8dah0ddcptbamj3h6xhawevpcua4v6.png</picture>
<name>Щит встраиваемый TEKFOR 8 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="6729" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_navesnoy_tekfor_8_moduley_ip41_prozrachnaya_chernaya_dvertsa_01_04_003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=6729</url>
<price>1426</price>
<purchase_price>389</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d35/xpp5trt1t6vfvqcux02iprncfi8iyi0m.jpg</picture>
<name>Щит накладной TEKFOR 8 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="6889" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_36_modulya_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=6889</url>
<price>5923</price>
<purchase_price>1550</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/730/ylddrnl04joju5ocn9gethmft2w76nr1.png</picture>
<name>Щит встраиваемый TEKFOR 36 модуля IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="7969" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/grebenka_dlya_avtomatov_2_faznaya_yns21_2_063/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=7969</url>
<price>1909</price>
<purchase_price>407</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7fd/0iw02sq2kba6n8ni7ncas1a06mib1c1k.jpg</picture>
<name>Гребенка для автоматов 2 фазная</name>
<description></description>
</offer>
<offer id="8161" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/grebenka_dlya_avtomatov_3_faznaya_yns21_3_063/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=8161</url>
<price>2542</price>
<purchase_price>601</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d34/b6egpes3nodm3k81jjbspvyixuv4x5ns.jpg</picture>
<name>Гребенка для автоматов 3 фазная</name>
<description></description>
</offer>
<offer id="8429" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_18_moduley_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=8429</url>
<price>2358</price>
<purchase_price>638</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/aaf/i7mkk5hhw6do36mc849fi39vhl0l0o63.png</picture>
<name>Щит встраиваемый TEKFOR 18 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="10635" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_6_moduley_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=10635</url>
<price>1185</price>
<purchase_price>261</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac9/3k8dah0ddcptbamj3h6xhawevpcua4v6.png</picture>
<name>Щит встраиваемый TEKFOR 6 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="10860" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_nakladnoy_tekfor_18_moduley_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=10860</url>
<price>2358</price>
<purchase_price>730</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/acc/1qlh94l0nteb93d4m4w6usethrz3e3hd.png</picture>
<name>Щит накладной TEKFOR 18 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="10863" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_nakladnoy_tekfor_36_modulya_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=10863</url>
<price>4922</price>
<purchase_price>1550</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/425/n3pjzghtp9u7y82sry5pxe0gclt8v845.jpg</picture>
<name>Щит накладной TEKFOR 36 модуля IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="13021" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_24_modulya_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=13021</url>
<price>3289</price>
<purchase_price>945</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/497/oh9zneawnrk2vr0rdcgu5rdxgba1npd1.png</picture>
<name>Щит встраиваемый TEKFOR 24 модуля IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="14276" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/raspredelitel_nye_shchity/shchit_vstraivaemyy_tekfor_12_moduley_ip41_prozrachnaya_chernaya_dvertsa/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raspredelitel_nye_shchity&amp;utm_term=14276</url>
<price>1771</price>
<purchase_price>516</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>604</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac9/3k8dah0ddcptbamj3h6xhawevpcua4v6.png</picture>
<name>Щит встраиваемый TEKFOR 12 модулей IP41, прозрачная черная дверца</name>
<description></description>
</offer>
<offer id="7411" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/prochiy_instrument/perekhodnik_zubr_s_sds_max_na_sds_29064_z01_29064_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=prochiy_instrument&amp;utm_term=7411</url>
<price>1840</price>
<purchase_price>714</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>606</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/95b/22r82mlzkc20fu74rmtyqm97kuurj909.png</picture>
<name>Переходник ЗУБР с &quot;SDS max&quot; на &quot;SDS+&quot; 29064_z01</name>
<description></description>
</offer>
<offer id="8156" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/prochiy_instrument/perekhodnik_s_perforatora_sds_max_na_sds_stk_03900002/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=prochiy_instrument&amp;utm_term=8156</url>
<price>1311</price>
<purchase_price>436</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>606</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/95b/22r82mlzkc20fu74rmtyqm97kuurj909.png</picture>
<name>Переходник с перфоратора SDS max на SDS+</name>
<description></description>
</offer>
<offer id="6210" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/ruchki/ruchki_dvernye/ruchki_na_planke_apecs_hp_85_0423_s_cr_hp_85_0423_s_cr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ruchki_dvernye&amp;utm_term=6210</url>
<price>2450</price>
<purchase_price>853</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>622</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f67/zbtc4rfyvqlwlogxf499gnjv3byxfrvm.jpg</picture>
<name>Ручки на планке Apecs HP-85.0423-S-CR</name>
<description></description>
</offer>
<offer id="12889" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/ruchki/ruchki_dvernye/ruchka_na_planke_ferre_alu_85_0423_cp_alu_85_0423_cp/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ruchki_dvernye&amp;utm_term=12889</url>
<price>1403</price>
<purchase_price>392</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>622</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0cd/5t62gcfcr4wc1chog9n4l904t7vfwqhn.jpg</picture>
<name>Ручка на планке FERRE ALU 85.0423 CP</name>
<description></description>
</offer>
<offer id="9363" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/lichinki_dvernye/lichinka_dlya_dveri_cw_90_mm_klyuch_vertushka_perf_klyuchi/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lichinki_dvernye&amp;utm_term=9363</url>
<price>1173</price>
<purchase_price>532</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>623</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d51/qahwiiutsb2yrto0ql0vmf43a598zqt2.jpg</picture>
<name>Личинка для двери CW 90 мм “ключ - вертушка” перф. ключи</name>
<description></description>
</offer>
<offer id="9370" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/lichinki_dvernye/lichinka_dlya_dveri_35_kh_45_mm_klyuch_vertushka/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lichinki_dvernye&amp;utm_term=9370</url>
<price>1173</price>
<purchase_price>330</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>623</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c49/8kjqwwq9y1dbxypc263aoxjauivazmki.jpg</picture>
<name>Личинка для двери 35 х 45 мм “ключ - вертушка”</name>
<description></description>
</offer>
<offer id="9373" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/lichinki_dvernye/lichinka_dlya_dveri_35_kh_55_mm_klyuch_vertushka/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lichinki_dvernye&amp;utm_term=9373</url>
<price>1219</price>
<purchase_price>532</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>623</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c49/8kjqwwq9y1dbxypc263aoxjauivazmki.jpg</picture>
<name>Личинка для двери 35 х 55 мм “ключ - вертушка”</name>
<description></description>
</offer>
<offer id="9134" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/krepezhnye_elementy_walraven_mupro_rehau/instrument_dlya_gibki_montazhnoy_shiny_shinogib_137685/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezhnye_elementy_walraven_mupro_rehau&amp;utm_term=9134</url>
<price>9893</price>
<purchase_price>6820</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>635</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8ab/kmmr08j0u18lrep69bk6rnjqkoo193km.jpg</picture>
<name>Инструмент для гибки монтажной шины (шиногиб)</name>
<description></description>
</offer>
<offer id="10915" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/krepezhnye_elementy_walraven_mupro_rehau/montazhnaya_shina_profil_plastina_universal_naya_s_perforatsiey_2000_kh_50_kh_3_mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezhnye_elementy_walraven_mupro_rehau&amp;utm_term=10915</url>
<price>1265</price>
<purchase_price>540</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>635</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/676/506hd13pqedu5iiryy80ylyqwu415h1z.jpg</picture>
<name>Монтажная шина (профиль/пластина) универсальная с перфорацией 2000 х 50 х 3 мм</name>
<description></description>
</offer>
<offer id="10919" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/krepezhnye_elementy_walraven_mupro_rehau/alyuminiy_list_riflenyy_1_5_kh_1000_kh_600_mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezhnye_elementy_walraven_mupro_rehau&amp;utm_term=10919</url>
<price>2910</price>
<purchase_price>917</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>635</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b40/j1o12gbe1lv9c5e67afsokzbzfymwd8l.jpg</picture>
<name>Алюминий лист рифленый 1,5 х 1000 х 600 мм</name>
<description></description>
</offer>
<offer id="11750" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/krepezhnye_elementy_walraven_mupro_rehau/profil_walraven_30_x_30_kh_2_kh_2000_mm_c_obraznyy_wm2_bis_rapidrail_6505002_6505002/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezhnye_elementy_walraven_mupro_rehau&amp;utm_term=11750</url>
<price>1700</price>
<purchase_price>672</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>635</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0e2/57958ypgpdivaz14v9858q2m20c35837.jpg</picture>
<name>Профиль Walraven 30 x 30 х 2 х 2000 мм C-образный WM2 BIS RapidRail 6505002</name>
<description></description>
</offer>
<offer id="10905" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/aksessuary_dlya_shlifovaniya_i_polirovki/brusok_zubr_s_almaznym_napyleniem_pravochnyy_dvukhstoronniy_v_penale_p_325_600_100mm_33395_100_33395/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=aksessuary_dlya_shlifovaniya_i_polirovki&amp;utm_term=10905</url>
<price>1495</price>
<purchase_price>662</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>647</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2eb/40tsmel9kuatfpl1xev0dfn7hlcrgwgi.jpg</picture>
<name>Брусок ЗУБР с алмазным напылением правочный двухсторонний, в пенале, P 325/600, 100мм 33395-100</name>
<description></description>
</offer>
<offer id="19711" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/aksessuary_dlya_shlifovaniya_i_polirovki/segmentirovannaya_almaznaya_chashka_sibin_turbo_d_125_mm_33440_125_33440_125/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=aksessuary_dlya_shlifovaniya_i_polirovki&amp;utm_term=19711</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>647</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a46/p4ayve7wdg1iwvqu350gi8vx5q7ouvhb.jpg</picture>
<name>Сегментированная алмазная чашка СИБИН Турбо d 125 мм 33440-125</name>
<description></description>
</offer>
<offer id="6576" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/kleshchi_kraftool_perestavnye_bulldog_bystraya_regulirovka_crv_fosfatirovan_pokrytie_max_zakhvat_60m/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=6576</url>
<price>2070</price>
<purchase_price>1078</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6f8/bmxhlu478b22dxnd8b5li5lz9xz3gb7y.jpg</picture>
<name>Клещи KRAFTOOL переставные Bulldog, быстрая регулировка, CrV, фосфатирован покрытие, max захват 60мм, губки 6мм, 250мм 22353-25</name>
<description></description>
</offer>
<offer id="6577" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_cobra_200_39_mm_stayer_27264_20_27264_20/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=6577</url>
<price>1380</price>
<purchase_price>663</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8eb/t0uc1ozvsukgnasev9fmrmb63xyem3je.jpg</picture>
<name>Ключ разводной COBRA, 200 / 39 мм, STAYER 27264-20</name>
<description></description>
</offer>
<offer id="7009" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_kraftool_trubnyy_tip_panzer_l_pryamye_gubki_cr_v_stal_tsel_nokovannyy_1_330mm_2734_10_z01_273/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=7009</url>
<price>1495</price>
<purchase_price>743</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7e5/xnff8e98k84jpdnv901eyhyezzvp6zxr.jpg</picture>
<name>Ключ KRAFTOOL трубный, тип &quot;PANZER-L&quot;, прямые губки, Cr-V сталь, цельнокованный, 1&quot;/330мм 2734-10_z01</name>
<description></description>
</offer>
<offer id="8427" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/kleshchi_perestavnye_kayman_bystraya_regulirovka_cr_v_max_zakhvat_do_80_mm_300mm_kraftool_22353_30_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=8427</url>
<price>3220</price>
<purchase_price>1806</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e37/eemjxvpyxyc1n9luxgxzwbyu96je4ou1.jpg</picture>
<name>Клещи переставные &quot;KAYMAN&quot;, быстрая регулировка, Cr-V, max захват до 80 мм, 300мм, KRAFTOOL 22353-30</name>
<description></description>
</offer>
<offer id="8689" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_slimwide_compact_120_28_mm_kraftool_27266_15_27266_15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=8689</url>
<price>1668</price>
<purchase_price>804</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/06a/wk3j2n5nvxf7k7mobugqeio8708p22el.jpg</picture>
<name>Ключ разводной SlimWide Compact, 120 / 28 мм, KRAFTOOL 27266-15</name>
<description></description>
</offer>
<offer id="8735" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_slimwide_compact_160_43_mm_kraftool_27266_25_27266_25/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=8735</url>
<price>2070</price>
<purchase_price>1206</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/658/9n3z36wb50lnmsseo52nah1g732cbclh.jpg</picture>
<name>Ключ разводной SlimWide Compact, 160 / 43 мм, KRAFTOOL 27266-25</name>
<description></description>
</offer>
<offer id="11776" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_kraftool_trubnyy_tip_panzer_l_pryamye_gubki_cr_v_stal_tsel_nokovannyy_1_1_2_440mm_2734_15_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11776</url>
<price>2070</price>
<purchase_price>1148</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a5a/dta3rkdvvmr5h1fge7rewmwhtlrh3v5o.jpg</picture>
<name>Ключ KRAFTOOL трубный, тип &quot;PANZER-L&quot;, прямые губки, Cr-V сталь, цельнокованный, 1 1/2&quot;/440мм 2734-15_z01</name>
<description></description>
</offer>
<offer id="11777" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_kraftool_trubnyy_tip_panzer_s_tsel_nokovannyy_440mm_1_1_2_2733_15_z01_2733_15_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11777</url>
<price>2070</price>
<purchase_price>932</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0cc/xenfq3z7sgwby6e45ypgvtxu5i1gxkk2.jpg</picture>
<name>Ключ KRAFTOOL трубный, тип &quot;PANZER-S&quot;, цельнокованный, 440мм/1 1/2&quot; 2733-15_z01</name>
<description></description>
</offer>
<offer id="11781" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_trubnyy_rychazhnyy_stayer_pryamye_gubki_2_1_5_27331_2_27331_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11781</url>
<price>1380</price>
<purchase_price>654</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d91/jr91qd2953m0vah9bfoyg0ltav0iawtf.jpg</picture>
<name>Ключ трубный рычажный STAYER, прямые губки, № 2,  1,5&quot; 27331-2</name>
<description></description>
</offer>
<offer id="11789" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_slimwide_250_50_mm_kraftool_27258_25_27258_25/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11789</url>
<price>2760</price>
<purchase_price>1495</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/29d/9snoruya9alwgye8c73vb4b91l93jlce.jpg</picture>
<name>Ключ разводной SlimWide, 250 / 50 мм, KRAFTOOL 27258-25</name>
<description></description>
</offer>
<offer id="11790" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_slimwide_150_34_mm_kraftool_27258_15_27258_15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11790</url>
<price>1840</price>
<purchase_price>932</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/29d/9snoruya9alwgye8c73vb4b91l93jlce.jpg</picture>
<name>Ключ разводной SlimWide, 150 / 34 мм, KRAFTOOL 27258-15</name>
<description></description>
</offer>
<offer id="11791" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_razvodnoy_slimwide_200_38_mm_kraftool_27258_20_27258_20/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=11791</url>
<price>2300</price>
<purchase_price>1144</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/29d/9snoruya9alwgye8c73vb4b91l93jlce.jpg</picture>
<name>Ключ разводной SlimWide, 200 / 38 мм, KRAFTOOL 27258-20</name>
<description></description>
</offer>
<offer id="14024" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/klyuchi_razvodnye_perestavnye_trubchatye/klyuch_kraftgrip_trubnyy_bystrozazhimnoy_kovanye_gubki_1_2_1_1_2_kraftool_27365_14_27365_14/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=klyuchi_razvodnye_perestavnye_trubchatye&amp;utm_term=14024</url>
<price>3910</price>
<purchase_price>2303</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>655</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/899/l164r9clbros6hhm4jimusa93nc1561b.jpg</picture>
<name>Ключ &quot;KRAFTGRIP&quot; трубный быстрозажимной, кованые губки, 1/2&quot; – 1 1/2&quot;, KRAFTOOL 27365-14</name>
<description></description>
</offer>
<offer id="6423" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/profilya_i_ugolki/bordyur_dlya_vanny_na_plitku_akrilovyy_volshebnaya_palochka_gb24_1800_kh_24_kh_12_mm_ut000065412/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=profilya_i_ugolki&amp;utm_term=6423</url>
<price>3638</price>
<purchase_price>1861</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>668</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f07/talozrnk9qp8icmj00by92rucsz2rf6t.jpg</picture>
<name>Бордюр для ванны на плитку акриловый Волшебная палочка ГБ24 1800 х 24 х 12 мм</name>
<description></description>
</offer>
<offer id="11249" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/profilya_i_ugolki/karniz_3_kh_ryadnyy_pvkh_ekonom_megellan_2_4m_belyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=profilya_i_ugolki&amp;utm_term=11249</url>
<price>1164</price>
<purchase_price>503</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>668</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d38/fuph28ilcntuma3fco6fpabegk9k9sm0.jpg</picture>
<name>Карниз 3-х рядный ПВХ Эконом МЕГЕЛЛАН 2,4м Белый</name>
<description></description>
</offer>
<offer id="13352" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/profilya_i_ugolki/bordyur_dlya_vanny_na_plitku_akrilovyy_volshebnaya_palochka_gl12_1800_kh_12_kh_12_mm_ut000065227/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=profilya_i_ugolki&amp;utm_term=13352</url>
<price>2547</price>
<purchase_price>1187</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>668</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/31a/oz3asx6q2moy16f94a2w9kr1d29t64j0.jpg</picture>
<name>Бордюр для ванны на плитку акриловый Волшебная палочка ГЛ12 1800 х 12 х 12 мм</name>
<description></description>
</offer>
<offer id="13646" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/profilya_i_ugolki/karniz_3_kh_ryadnyy_pvkh_standart_le_grand_3_0m_belyy_ut000065096/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=profilya_i_ugolki&amp;utm_term=13646</url>
<price>1601</price>
<purchase_price>628</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>668</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d38/fuph28ilcntuma3fco6fpabegk9k9sm0.jpg</picture>
<name>Карниз 3-х рядный ПВХ Стандарт ЛЕ-ГРАНД 3,0м Белый</name>
<description></description>
</offer>
<offer id="13166" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/ventilyatory/ventilyator_vytyazhnoy_nakladnoy_vents_vents_125_s_10051549_16vt_220v_35db_10051549/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ventilyatory&amp;utm_term=13166</url>
<price>1449</price>
<purchase_price>472</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>675</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/22e/yhazgmtauix31tcdzxp4gzkmzinfx0vn.jpg</picture>
<name>Вентилятор вытяжной накладной Vents (Вентс) 125 С 10051549 16Вт 220В 35Дб</name>
<description></description>
</offer>
<offer id="7463" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_santekhnicheskiy_50_x_40_revizionnyy_pod_keramich_plitku_gorizontal_nyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=7463</url>
<price>7688</price>
<purchase_price>3289</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/646/33e0ori92ck1tbaofnllae62ieyl0i79.png</picture>
<name>Люк сантехнический 50 x 40 ревизионный под керамич. плитку горизонтальный</name>
<description></description>
</offer>
<offer id="7481" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_santekhnicheskiy_30_x_50_alyuminievyy_revizionnyy_pod_keramich_plitku/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=7481</url>
<price>8177</price>
<purchase_price>3232</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c0c/1olnnyurtet2splb8tg0ehgaukhfrred.jpg</picture>
<name>Люк сантехнический 30 x 50 алюминиевый ревизионный под керамич. плитку</name>
<description></description>
</offer>
<offer id="10704" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_revizionnyy_santekhnicheskiy_30_x_50_sm_300_x_500_mm_vents_vents_252623/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=10704</url>
<price>1242</price>
<purchase_price>410</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1f6/vi01nr7uejf33tmglye66omxukpilf79.jpg</picture>
<name>Люк ревизионный (сантехнический) 30 x 50 см (300 x 500 мм) Vents (Вентс)</name>
<description></description>
</offer>
<offer id="10714" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_revizionnyy_santekhnicheskiy_50_x_50_sm_500_x_500_mm_vents_vents_252633/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=10714</url>
<price>1610</price>
<purchase_price>588</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1f6/vi01nr7uejf33tmglye66omxukpilf79.jpg</picture>
<name>Люк ревизионный (сантехнический) 50 x 50 см (500 x 500 мм) Vents (Вентс)</name>
<description></description>
</offer>
<offer id="12532" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_santekhnicheskiy_30_x_60_revizionnyy_pod_keramich_plitku/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=12532</url>
<price>7895</price>
<purchase_price>2600</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dbd/srnjqe0hvhsec7odmnscb6s5bzyxnz9n.png</picture>
<name>Люк сантехнический 30 x 60 ревизионный под керамич. плитку</name>
<description></description>
</offer>
<offer id="14184" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/lyuki_santekhnicheskie/lyuk_santekhnicheskiy_50_x_60_revizionnyy_pod_keramich_plitku/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=lyuki_santekhnicheskie&amp;utm_term=14184</url>
<price>9609</price>
<purchase_price>4514</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>683</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dbd/srnjqe0hvhsec7odmnscb6s5bzyxnz9n.png</picture>
<name>Люк сантехнический 50 x 60 ревизионный под керамич. плитку</name>
<description></description>
</offer>
<offer id="8496" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/soedinitel_nye_elementy_plintusov_aqua20_i_aqua37/plintus_pvkh_smartprofile_aqua20_95_kh_20_mm_2_2_m_belyy_pod_pokrasku_ut000072319/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=soedinitel_nye_elementy_plintusov_aqua20_i_aqua37&amp;utm_term=8496</url>
<price>1219</price>
<purchase_price>510</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>688</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/088/pyenudt899dgj582qwliwf9tq759m2uv.png</picture>
<name>Плинтус ПВХ Smartprofile Aqua20 95 х 20 мм 2,2 м белый под покраску</name>
<description></description>
</offer>
<offer id="13305" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/soedinitel_nye_elementy_plintusov_aqua20_i_aqua37/plintus_pvkh_smartprofile_aqua37_95_kh_37_mm_2_2_m_belyy_pod_pokrasku_ut000072298/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=soedinitel_nye_elementy_plintusov_aqua20_i_aqua37&amp;utm_term=13305</url>
<price>1219</price>
<purchase_price>510</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>688</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8f2/xzs6znogc2xrxz2s4fn1u9p8g2f9k1yh.png</picture>
<name>Плинтус ПВХ Smartprofile Aqua37 95 х 37 мм 2,2 м белый под покраску</name>
<description></description>
</offer>
<offer id="7622" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/fonari_dlya_dachi_i_kempinga/fonar_zubr_profi_nalobnyy_svetodiodnyy_6vt_450lm_reguliruemyy_fokus_3_rezhima_transformer_4aa_56430/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fonari_dlya_dachi_i_kempinga&amp;utm_term=7622</url>
<price>2450</price>
<purchase_price>1021</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>695</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7f0/zf4ss1z8i3fhd9xl3hhsld4pwkhg68qs.jpg</picture>
<name>Фонарь ЗУБР &quot;ПРОФИ&quot; налобный светодиодный, 6Вт(450Лм), регулируемый фокус, 3 режима, трансформер, 4АА 56430</name>
<description></description>
</offer>
<offer id="11134" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/fonari_dlya_dachi_i_kempinga/s_cl010_ba_blue_fonar_tm_uniel_seriya_standart_safe_drive_fixation_plastik_tsvet_siniy_3watt_led_kle/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fonari_dlya_dachi_i_kempinga&amp;utm_term=11134</url>
<price>1674</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>695</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5d9/6bebc1lza4gzr2x6rq9o2ya9a1aaey5s.jpg</picture>
<name>S-CL010-BA Blue Фонарь TM Uniel. серия Стандарт Safe drive-Fixation. пластик. Цвет синий. 3Watt LED. клеммы и штекер для а-м. Картон.</name>
<description></description>
</offer>
<offer id="6324" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/izmeritel_nyy_i_razmetochnyy_instrument/uroven_s_magnitom_1000_mm_sti_618011000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=izmeritel_nyy_i_razmetochnyy_instrument&amp;utm_term=6324</url>
<price>1403</price>
<purchase_price>397</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>728</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ace/qkxe6stkfffa3lgs8bydli1qwsko5p3u.jpg</picture>
<name>Уровень с магнитом 1000 мм</name>
<description></description>
</offer>
<offer id="7011" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/izmeritel_nyy_i_razmetochnyy_instrument/uroven_plumbsite_genesis_100_sm_kapro_781_40_100_781_40_100/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=izmeritel_nyy_i_razmetochnyy_instrument&amp;utm_term=7011</url>
<price>4278</price>
<purchase_price>1873</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>728</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/70a/7762yy7j107uz4p0xp8wv7x9nfdfdxu4.jpg</picture>
<name>Уровень PLUMBSITE GENESIS 100 см KAPRO 781-40-100</name>
<description></description>
</offer>
<offer id="14009" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/izmeritel_nyy_i_razmetochnyy_instrument/mernaya_lenta_stayer_master_f_50_fiberglassovoe_dvustoronnee_polotno_50m_3415_50_z01_3415_50_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=izmeritel_nyy_i_razmetochnyy_instrument&amp;utm_term=14009</url>
<price>1495</price>
<purchase_price>527</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>728</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/567/3jpju4jbtpyqbrr6ogwrmgn22f5hat9f.jpg</picture>
<name>Мерная лента STAYER &quot;MASTER&quot; F-50, фиберглассовое двустороннее полотно, 50м 3415-50_z01</name>
<description></description>
</offer>
<offer id="6508" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/emal_anles_renessans_komplekt_dlya_remonta_restavratsii_i_izmeneniya_tsveta_emalevogo_pokrytiya_vann/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=6508</url>
<price>2346</price>
<purchase_price>889</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/08c/s3edhgkbeofwe64yazm5i5kl6huag693.png</picture>
<name>Эмаль Анлес Ренессанс комплект для ремонта, реставрации и изменения цвета эмалевого покрытия ванн, раковин, душевых кабин и поддонов белая глянцевая, 0.8 кг</name>
<description></description>
</offer>
<offer id="6629" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_keramika_shokolad/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=6629</url>
<price>2617</price>
<purchase_price>1060</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8fa/8yj4fg0gxhhrh1es02f4bv3lhkr8lxki.jpg</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Керамика Шоколад</name>
<description></description>
</offer>
<offer id="6762" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_al_piyskaya_lavanda_ut000064508/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=6762</url>
<price>2617</price>
<purchase_price>1020</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/04e/y4803zllph08zq5rzaspc4zlo92pef1o.png</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Альпийская Лаванда</name>
<description></description>
</offer>
<offer id="7302" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_frukty_ut000064533/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=7302</url>
<price>2617</price>
<purchase_price>1020</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ea8/hbuzcegtcc5rrlyzhjwv84n1kz1r57qq.png</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Фрукты</name>
<description></description>
</offer>
<offer id="8222" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_belaya_orkhideya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=8222</url>
<price>2617</price>
<purchase_price>851</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/184/3b0qm3y236r71qihz27zoqup9mfadrt8.jpg</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Белая орхидея</name>
<description></description>
</offer>
<offer id="9865" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/elektrody_mr_3s_d_3_mm_kh_5_kg_1_4_lez/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=9865</url>
<price>1955</price>
<purchase_price>500</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f26/n9sap53e0eiavc9ucmnwdvy02nyggy5v.jpg</picture>
<name>ЭЛЕКТРОДЫ МР-3 ММК Метиз ЛЮКС D 3 ММ Х 5 КГ</name>
<description></description>
</offer>
<offer id="11261" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_ulichnoe_kafe/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=11261</url>
<price>2617</price>
<purchase_price>1020</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fb/4lpy6ttt4yr07opvfvl4q72rg1cqktsc.jpg</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Уличное кафе</name>
<description></description>
</offer>
<offer id="11549" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/payal_naya_lampa_stayer_master_55590_s_p_ezopodzhigom_na_ballon_55590/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=11549</url>
<price>2887</price>
<purchase_price>811</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d5d/gxl5xu13qhkbn2k839qeu94rfqwcvsaa.jpg</picture>
<name>Паяльная лампа STAYER &quot;MASTER&quot; 55590, с пьезоподжигом, на баллон (БАЛЛОН В КОМПЛЕКТ НЕ ВХОДИТ !)</name>
<description></description>
</offer>
<offer id="11900" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_nezhnost_ut000064516/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=11900</url>
<price>2617</price>
<purchase_price>1020</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/820/l98cb3sdkzib3kvitxzyiiwsxdblxseu.png</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Нежность</name>
<description></description>
</offer>
<offer id="14303" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/1001_meloch/fartuk_kukhonnyy_fartukoff_3000_x_600_mm_yablonevyy_tsvet/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=1001_meloch&amp;utm_term=14303</url>
<price>2617</price>
<purchase_price>851</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>735</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/37a/rnopiubqle3paw8cbgp16a86l9hr0f5q.jpg</picture>
<name>Фартук кухонный ФАРТУКОФФ 3000 x 600 мм Яблоневый цвет</name>
<description></description>
</offer>
<offer id="8151" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_po_metallu/nabor_sverl_po_metallu_10_sht_d_1_10_mm_prof_v_zubr_29621_h10_29621_h10/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_po_metallu&amp;utm_term=8151</url>
<price>1610</price>
<purchase_price>518</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>743</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b25/hwpf2vbq3n2gmusxvvbx19ihlpf6kfsj.jpg</picture>
<name>Набор сверл по металлу 10 шт (d=1-10 мм), Проф-В, ЗУБР 29621-H10</name>
<description></description>
</offer>
<offer id="10299" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_po_metallu/sverlo_stayer_master_stupenchatoe_po_stalyam_i_tsvet_met_stal_hss_d_4_30mm_14stup_d4_30_l_100mm_trekh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_po_metallu&amp;utm_term=10299</url>
<price>1495</price>
<purchase_price>941</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>743</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9b7/dmlg7wyh4yfsdl70q1mg3yq5tjk2m0j2.png</picture>
<name>Сверло STAYER &quot;MASTER&quot; ступенчатое по сталям и цвет.мет., сталь HSS, d=4-30мм, 14ступ.d4-30, L-100мм, трехгран. хв.10мм 29660-4-30-14</name>
<description></description>
</offer>
<offer id="10790" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_po_metallu/sverlo_stayer_master_stupenchatoe_po_stalyam_i_tsvet_met_stal_hss_d_4_39mm_14stup_d4_39_l_113_mm_tre/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_po_metallu&amp;utm_term=10790</url>
<price>2300</price>
<purchase_price>1414</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>743</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4c7/xjso2226cabue8c3v299wwuvyyde90i8.png</picture>
<name>Сверло STAYER &quot;MASTER&quot; ступенчатое по сталям и цвет.мет., сталь HSS, d=4- 39мм,14ступ.d4-39,L -113 мм, трехгран.хв. 10мм 29660-4-39-14</name>
<description></description>
</offer>
<offer id="5712" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/kabel_i_montazh/kabel_nye_nakonechniki/neodimovyy_magnit_disk_40_kh_10_mm_stseplenie_41_kg_rexant_72_3006/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kabel_nye_nakonechniki&amp;utm_term=5712</url>
<price>1449</price>
<purchase_price>524</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>749</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1fe/6tucrstq6gj1zwyw6977kytcr7bhfztm.jpg</picture>
<name>Неодимовый магнит диск 40 х 10 мм сцепление 41 кг REXANT</name>
<description></description>
</offer>
<offer id="10813" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/zaklepochniki_i_zaklepki/zaklepochnik_dvuruchnyy_zubr_mkh500_31032_dlya_zaklyepok_d_2_4_4_8_mm_iz_alyuminiya_stali_nerzh_ctal/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zaklepochniki_i_zaklepki&amp;utm_term=10813</url>
<price>1495</price>
<purchase_price>610</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>750</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/add/etze7vqrl2c07xvkd8iyzcu1j3olz7fz.jpg</picture>
<name>Заклепочник двуручный, ЗУБР &quot;МХ500&quot; 31032, для заклёпок d=2,4-4,8 мм из алюминия, стали, нерж cтали, c двухкомпонентными рукоятками</name>
<description></description>
</offer>
<offer id="7106" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/bity/adapter_zubr_ekspert_uglovoy_dlya_bit_dopolnitel_naya_rukoyatka_135_mm_26754_135_26754_135/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=bity&amp;utm_term=7106</url>
<price>1610</price>
<purchase_price>744</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>759</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d61/n7gfirothnzipz87c5qprbg72q505te6.jpg</picture>
<name>Адаптер ЗУБР &quot;ЭКСПЕРТ&quot; угловой для бит, дополнительная рукоятка, 135 мм 26754-135</name>
<description></description>
</offer>
<offer id="11525" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/bity/nabor_bit_grand_61_s_adapterom_kraftool_26140_h61_v_plastikovom_bokse_cr_v_61_predmet_26140_h61/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=bity&amp;utm_term=11525</url>
<price>1380</price>
<purchase_price>553</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>759</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/194/7fg319i443rm4vbv5vuokylsxa52ouv2.jpg</picture>
<name>Набор бит &quot;GRAND-61&quot; с адаптером, KRAFTOOL 26140-H61, в пластиковом боксе, Cr-V, 61 предмет</name>
<description></description>
</offer>
<offer id="13685" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/bity/adapter_zubr_ekspert_sharnirnyy_dlya_bit_derzhatel_dlya_napravleniya_bity_110mm_26755_110_26755_110/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=bity&amp;utm_term=13685</url>
<price>1380</price>
<purchase_price>553</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>759</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e7a/zyp6g7vyh13zr64roz6la9uge8nb0alv.jpg</picture>
<name>Адаптер ЗУБР &quot;ЭКСПЕРТ&quot; шарнирный для бит, держатель для направления биты, 110мм 26755-110</name>
<description></description>
</offer>
<offer id="7155" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/koronka_almaznaya_s_tsentriruyushchim_sverlom_po_keramike_steklu_keramogranitu_vlazhnoe_sverlenie_45/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=7155</url>
<price>1610</price>
<purchase_price>520</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d24/yauaaqilxdvj40588imp48fasyiiy3ih.jpg</picture>
<name>Коронка алмазная с центрирующим сверлом по керамике, стеклу, керамограниту (влажное сверление) 45 мм</name>
<description></description>
</offer>
<offer id="8690" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/koronka_almaznaya_po_betonu_distar_68_mm_sds_plus_17982091081_17982091081/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=8690</url>
<price>7688</price>
<purchase_price>3550</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6c8/mmpdgbfiy9z7pupa761zj2lpsh7av001.jpg</picture>
<name>Коронка алмазная по бетону DISTAR 68 мм SDS plus 17982091081</name>
<description></description>
</offer>
<offer id="8801" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/koronka_bimetallicheskaya_111_mm_stk_04400111/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=8801</url>
<price>1668</price>
<purchase_price>590</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e03/9p8u9zm3eapyqy82rnbtkyckf31c1stm.png</picture>
<name>Коронка биметаллическая 111 мм</name>
<description></description>
</offer>
<offer id="10788" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/koronka_almaznaya_s_tsentriruyushchim_sverlom_po_keramike_steklu_keramogranitu_vlazhnoe_sverlenie_68/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=10788</url>
<price>2415</price>
<purchase_price>731</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d24/yauaaqilxdvj40588imp48fasyiiy3ih.jpg</picture>
<name>Коронка алмазная с центрирующим сверлом по керамике, стеклу, керамограниту (влажное сверление) 68 мм</name>
<description></description>
</offer>
<offer id="13581" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/nabor_koronok_chashek_zubr_professional_c_karbid_vol_framovym_naneseniem_6_koronok_chashek_o_22_28_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=13581</url>
<price>2645</price>
<purchase_price>1583</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5e7/0frsz5sjfy8xk5lb5oikvt1j3ob32b9l.jpg</picture>
<name>Набор коронок-чашек ЗУБР &quot;ПРОФЕССИОНАЛ&quot; c карбид-вольфрамовым нанесением, 6 коронок-чашек O 22, 28, 35, 44, 68, 73 мм, 2 державки со сверлами, ключ 33360-H6_z01</name>
<description></description>
</offer>
<offer id="13583" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/koronki_dlya_sverleniya/nabor_kraftool_koronki_kol_tsevye_s_napyleniem_iz_karbida_vol_frama_4_sht_33_53_67_73mm_3340_z01_334/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=koronki_dlya_sverleniya&amp;utm_term=13583</url>
<price>2300</price>
<purchase_price>1036</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>762</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/69e/t6emoawb2gou6qkuz48jyoo7l9ldflnw.jpg</picture>
<name>Набор KRAFTOOL: Коронки кольцевые с напылением из карбида вольфрама, 4 шт, 33-53-67-73мм 3340_z01</name>
<description></description>
</offer>
<offer id="7331" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/instrument_dlya_ukladki_plitki/razdelitel_dlya_razdvizhnoy_grebyenki_dlya_ukladki_plitki_nerzhaveyka/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_ukladki_plitki&amp;utm_term=7331</url>
<price>1547</price>
<purchase_price>520</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>765</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ab4/yyxx8wy1h7oxxlhamk9n2r9i7oj5ekwc.jpg</picture>
<name>Разделитель для раздвижной гребёнки для укладки плитки нержавейка</name>
<description></description>
</offer>
<offer id="10556" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/instrument_dlya_ukladki_plitki/bokovye_upory_dlya_razdvizhnoy_grebyenki_dlya_ukladki_plitki_nerzhaveyka/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_ukladki_plitki&amp;utm_term=10556</url>
<price>1495</price>
<purchase_price>490</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>765</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/afd/f5pku8kbuoe7qlqeyswk8wn5t1sr0xxs.jpg</picture>
<name>Боковые упоры для раздвижной гребёнки для укладки плитки нержавейка</name>
<description></description>
</offer>
<offer id="14131" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/instrument_dlya_ukladki_plitki/razdvizhnaya_grebyenka_dlya_ukladki_plitki_300_600_mm_nerzhaveyka_8kh8/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_ukladki_plitki&amp;utm_term=14131</url>
<price>4025</price>
<purchase_price>2150</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>765</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d9c/uzarr0oyzpnf223pu07i8bgelsbqtya5.jpg</picture>
<name>Раздвижная гребёнка для укладки плитки 300-600 мм нержавейка 8х8</name>
<description></description>
</offer>
<offer id="14235" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/instrument_dlya_ukladki_plitki/razdvizhnaya_grebyenka_dlya_ukladki_plitki_300_600_mm_nerzhaveyka_10kh10/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_ukladki_plitki&amp;utm_term=14235</url>
<price>4025</price>
<purchase_price>2150</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>765</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d9c/uzarr0oyzpnf223pu07i8bgelsbqtya5.jpg</picture>
<name>Раздвижная гребёнка для укладки плитки 300-600 мм нержавейка 10х10</name>
<description></description>
</offer>
<offer id="14315" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/instrument_dlya_ukladki_plitki/razdvizhnaya_grebyenka_dlya_ukladki_plitki_300_600_mm_otsinkovka_10kh10/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_ukladki_plitki&amp;utm_term=14315</url>
<price>2530</price>
<purchase_price>1150</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>765</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d9c/uzarr0oyzpnf223pu07i8bgelsbqtya5.jpg</picture>
<name>Раздвижная гребёнка для укладки плитки 300-600 мм оцинковка 10х10</name>
<description></description>
</offer>
<offer id="12106" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/stremyanki/stremyanka_stal_naya_3_stupeni_1_alyumet_m8403/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=stremyanki&amp;utm_term=12106</url>
<price>2530</price>
<purchase_price>1020</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>772</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fb2/qhq69jmcwq7ipeymgkd3jwrt2dry6gm4.jpg</picture>
<name>СТРЕМЯНКА СТАЛЬНАЯ 3 СТУПЕНИ (1) &apos;АЛЮМЕТ&apos;</name>
<description></description>
</offer>
<offer id="12107" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/stremyanki/stremyanka_stal_naya_4_stupeni_1_alyumet_m8404/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=stremyanki&amp;utm_term=12107</url>
<price>3105</price>
<purchase_price>1653</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>772</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5f5/2c57v4sct09im666uf2djl18yxa2doae.jpg</picture>
<name>СТРЕМЯНКА СТАЛЬНАЯ 4 СТУПЕНИ (1) &apos;АЛЮМЕТ&apos;</name>
<description></description>
</offer>
<offer id="12108" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/stremyanki/stremyanka_stal_naya_5_stupeney_1_alyumet/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=stremyanki&amp;utm_term=12108</url>
<price>3565</price>
<purchase_price>1961</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>772</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e33/kyavazsud7wlhzf65190pwiro1vmx04o.jpg</picture>
<name>СТРЕМЯНКА СТАЛЬНАЯ 5 СТУПЕНЕЙ (1) &apos;АЛЮМЕТ&apos;</name>
<description></description>
</offer>
<offer id="12109" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/stremyanki/stremyanka_stal_naya_6_stupeney_1_alyumet_m8406/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=stremyanki&amp;utm_term=12109</url>
<price>4198</price>
<purchase_price>2360</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>772</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fb2/qhq69jmcwq7ipeymgkd3jwrt2dry6gm4.jpg</picture>
<name>СТРЕМЯНКА СТАЛЬНАЯ 6 СТУПЕНЕЙ (1) &apos;АЛЮМЕТ&apos;</name>
<description></description>
</offer>
<offer id="13467" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/rozetki_i_vyklyuchateli/ramki_dlya_rozetok_i_vyklyuchateley/valena_alyuminievaya_ramka_4_aya_legrand_770154_770154/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ramki_dlya_rozetok_i_vyklyuchateley&amp;utm_term=13467</url>
<price>1685</price>
<purchase_price>160</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>775</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/887/nnahrib5j2y5rta6x0rnftubujauqsp9.jpg</picture>
<name>Valena Алюминиевая Рамка 4-ая Legrand 770154</name>
<description></description>
</offer>
<offer id="11144" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/udliniteli_i_troyniki/udliniteli_setevye/s_gcd6_3b_udlinitel_uniel_serii_standart_s_z_6_gn_shnur_3_m_vykl_s_gcd6_3b/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_setevye&amp;utm_term=11144</url>
<price>1185</price>
<purchase_price>420</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>780</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cbd/imeajpc7grh4u6wmhys83c48u69fyuc4.jpg</picture>
<name>S-GCD6-3B Удлинитель Uniel серии Стандарт. с-з. 6 гн.. шнур 3 м. выкл.</name>
<description></description>
</offer>
<offer id="8189" available="true">
<url>http://santehnic-market.ru/catalog/lakokrasochnye_materialy/kraski_i_gruntovki/gruntovka_ukreplyayushchaya_ct_17_10_l_1_60_ceresit_792197_1130391/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kraski_i_gruntovki&amp;utm_term=8189</url>
<price>1449</price>
<purchase_price>791</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>781</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/da3/t3z0qnko8akjwo4g35g7w5k7ld7d6paq.jpg</picture>
<name>ГРУНТОВКА УКРЕПЛЯЮЩАЯ CT 17 10 Л (1/60) &apos;CERESIT&apos;</name>
<description></description>
</offer>
<offer id="12064" available="true">
<url>http://santehnic-market.ru/catalog/lakokrasochnye_materialy/kraski_i_gruntovki/kraska_lateksnaya_dali_dlya_kukhni_i_vannoy_baza_a_2_5_l_1_vlagostoykaya_biozashchitnaya_rogneda_209/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kraski_i_gruntovki&amp;utm_term=12064</url>
<price>1553</price>
<purchase_price>684</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>781</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b8/7ulblrg0o5lp4dozqcc587wanmen5ink.jpg</picture>
<name>КРАСКА ЛАТЕКСНАЯ &apos;DALI&apos; ДЛЯ КУХНИ И ВАННОЙ БАЗА А 2,5 Л (1) ВЛАГОСТОЙКАЯ БИОЗАЩИТНАЯ &apos;РОГНЕДА&apos;</name>
<description></description>
</offer>
<offer id="7745" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/gaechnye_klyuchi_i_golovki/nabor_kraftool_klyuchi_imbusovye_korotkie_cr_mo_stal_derzhatel_rukoyatka_hex_2_10mm_8_pred_27430_1_z/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gaechnye_klyuchi_i_golovki&amp;utm_term=7745</url>
<price>1311</price>
<purchase_price>484</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>796</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7c4/twvua7lc2p2nf3e52gv5dtqo3fq51di6.jpg</picture>
<name>Набор KRAFTOOL: Ключи имбусовые короткие, Cr-Mo сталь, держатель-рукоятка, HEX 2-10мм, 8 пред 27430-1_z01</name>
<description></description>
</offer>
<offer id="8674" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/gaechnye_klyuchi_i_golovki/nabor_zubr_master_27162_h9_klyuchi_tortsovye_trubchatye_dvukhstoronnie_6_22mm_s_vorotkom_9sht_27162/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gaechnye_klyuchi_i_golovki&amp;utm_term=8674</url>
<price>1231</price>
<purchase_price>519</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>796</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6be/av032ck4y44y6wncqvuga7q1qgu3ccev.jpg</picture>
<name>Набор ЗУБР &quot;МАСТЕР&quot; 27162-H9 Ключи торцовые, трубчатые двухсторонние, 6-22мм, с воротком, 9шт</name>
<description></description>
</offer>
<offer id="11786" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/gaechnye_klyuchi_i_golovki/nabor_klyuchi_stayer_trubchatye_6_22_mm_10_predmetov_2719_h10_2719_h10/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gaechnye_klyuchi_i_golovki&amp;utm_term=11786</url>
<price>1196</price>
<purchase_price>384</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>796</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/706/uc2ttckq8pphqqenmxdtiucx2jn026c2.jpg</picture>
<name>Набор Ключи STAYER трубчатые 6 - 22 мм, 10 предметов 2719-H10</name>
<description></description>
</offer>
<offer id="13474" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/klyuchi_santekhnicheskie_i_avtomobil_nye/gaechnye_klyuchi_i_golovki/golovka_universal_naya_tortsevaya_1_2_11_32mm_stp_98801132/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gaechnye_klyuchi_i_golovki&amp;utm_term=13474</url>
<price>1748</price>
<purchase_price>660</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>796</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b19/dneg50d0hzfnw3s03vwgj8t82wb1g37x.jpg</picture>
<name>Головка универсальная торцевая 1/2 (11-32мм)</name>
<description></description>
</offer>
<offer id="14288" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/teplye_poly_i_komplektuyushchie_k_nim/teplyy_pol_mat_nagrevatel_nyy_warmstad_wsm_485_vt_3_2_kv_m/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=teplye_poly_i_komplektuyushchie_k_nim&amp;utm_term=14288</url>
<price>6918</price>
<purchase_price>2134</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>803</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3f7/5qdz0m4zv1dw1vk124o1z6646g5ta0k5.jpg</picture>
<name>Теплый пол, мат нагревательный Warmstad WSM 485 Вт/3,2 кв.м</name>
<description></description>
</offer>
<offer id="14115" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/pistolety_dlya_germetikov_i_pen/pistolet_dlya_germetika_kraftool_superkraft_06673_skeletnyy_povorotnyy_korpus_320ml_06673_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pistolety_dlya_germetikov_i_pen&amp;utm_term=14115</url>
<price>1725</price>
<purchase_price>1028</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>806</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/584/hen3rq5cbld4fjt2l6cruo18ie15lsbz.jpg</picture>
<name>Пистолет для герметика KRAFTOOL &quot;SuperKraft&quot; 06673, скелетный, поворотный корпус, 320мл</name>
<description></description>
</offer>
<offer id="7542" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_nakladnye/zamok_nakladnoy_penza_zn1_1_zn1_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_nakladnye&amp;utm_term=7542</url>
<price>1403</price>
<purchase_price>700</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>810</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c5d/p0q9v5i8crerl0mi2ldd9c8u6vscmipg.png</picture>
<name>Замок накладной Пенза ЗН1-1</name>
<description></description>
</offer>
<offer id="9429" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_nakladnye/zamok_nakladnoy_zn_067_zn067/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_nakladnye&amp;utm_term=9429</url>
<price>1196</price>
<purchase_price>366</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>810</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/998/h57p00dkn2rmg5dqj3keyuz46a7tmo7e.jpg</picture>
<name>Замок накладной ЗН-067</name>
<description></description>
</offer>
<offer id="9434" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_nakladnye/zamok_nakladnoy_avtomat_zn2_3_zn2_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_nakladnye&amp;utm_term=9434</url>
<price>1576</price>
<purchase_price>473</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>810</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0c6/txgdlcr9qtk1p2h6olrjhmwsfwmwca5a.jpg</picture>
<name>Замок накладной (автомат) ЗН2-3</name>
<description></description>
</offer>
<offer id="14214" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_nakladnye/zamok_nakladnoy_allyur_zn_2a_zamena_sho_40_avtomat_zn_2a/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_nakladnye&amp;utm_term=14214</url>
<price>1403</price>
<purchase_price>577</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>810</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/92d/kj63dx6zj89wbqjtoz02qy7qi3kqftwb.png</picture>
<name>Замок накладной Аллюр ЗН 2А  (Замена ШО-40 ) автомат</name>
<description></description>
</offer>
<offer id="13076" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/dif_avtomat_abb_2_polyusnyy_dsh941r_c_10_30ma_tip_as_dsh941r_c10/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=13076</url>
<price>5239</price>
<purchase_price>2310</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b44/o67k4r98hamci3dwa8wxzi20nn21t64s.jpg</picture>
<name>Диф автомат ABB 2-полюсный DSH941R C 10 30mA тип АС</name>
<description></description>
</offer>
<offer id="13914" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/avtomaticheskiy_vyklyuchatel_abb_3_polyusnyy_sh203l_c32_sh203l_c32/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=13914</url>
<price>1369</price>
<purchase_price>320</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/51e/9nn2jkiku4qquz1urfogsyou9v12ri9f.png</picture>
<name>Автоматический выключатель ABB 3-полюсный SH203L C32</name>
<description></description>
</offer>
<offer id="13916" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/avtomaticheskiy_vyklyuchatel_abb_3_polyusnyy_sh203l_c50_sh203l_c50/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=13916</url>
<price>2053</price>
<purchase_price>280</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/51e/9nn2jkiku4qquz1urfogsyou9v12ri9f.png</picture>
<name>Автоматический выключатель ABB 3-полюсный SH203L C50</name>
<description></description>
</offer>
<offer id="13917" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/avtomaticheskiy_vyklyuchatel_abb_3_polyusnyy_sh203l_c63_sh203l_c63/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=13917</url>
<price>2450</price>
<purchase_price>280</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/51e/9nn2jkiku4qquz1urfogsyou9v12ri9f.png</picture>
<name>Автоматический выключатель ABB 3-полюсный SH203L C63</name>
<description></description>
</offer>
<offer id="13923" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/dif_avtomat_abb_2_polyusnyy_dsh941r_c6_30ma_tip_as_dsh941r_c6/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=13923</url>
<price>5400</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b44/o67k4r98hamci3dwa8wxzi20nn21t64s.jpg</picture>
<name>Диф автомат ABB 2-полюсный DSH941R C6 30mA тип АС</name>
<description></description>
</offer>
<offer id="19544" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/dif_avtomat_2_polyusnyy_c_16_30ma_tip_iek_avdt_32_mad_22_5_016_c_30_mad_22_5_016_c_30/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=19544</url>
<price>1725</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f4b/bxlhsiihcsuvmd3zl1kjxm12bmrg267h.jpg</picture>
<name>Диф автомат  2-полюсный  C 16 30mA тип IEK AVDT 32 MAD 22-5-016-C-30</name>
<description></description>
</offer>
<offer id="19545" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/avtomaticheskie_vyklyuchateli/avtomaticheskie_vyklyuchateli_abb/uzo_avtomat_2_polyusnyy_25_a_30ma_tip_iek_vd1_63_mdv_10_2_025_030_mdv_10_2_025_030/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=avtomaticheskie_vyklyuchateli_abb&amp;utm_term=19545</url>
<price>2645</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>826</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/53f/irkexj83bvz1h2bqys2j25vx216dzp9d.jpg</picture>
<name>УЗО автомат  2-полюсный  25 A 30mA тип IEK ВД1-63 MDV 10-2-025-030</name>
<description></description>
</offer>
<offer id="7554" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/nozhi_nozhnitsy_i_lezviya/skrebok_stayer_profi_teleskopicheskiy_universal_nyy_570_910mm_lezvie_100mm_08505_z01_08505_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nozhi_nozhnitsy_i_lezviya&amp;utm_term=7554</url>
<price>1380</price>
<purchase_price>644</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>842</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/abe/5n4fpksiqwjpfs05y3drzy90v0z7dt46.jpg</picture>
<name>Скребок STAYER &quot;PROFI&quot; телескопический универсальный, 570-910мм, лезвие 100мм 08505_z01</name>
<description></description>
</offer>
<offer id="13144" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/nozhi_nozhnitsy_i_lezviya/nozh_olfa_s_vydvizhnym_lezviem_dvukhkomponentnyy_korpus_treshchotochnyy_fiksator_25mm_ol_xh_1_ol_xh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nozhi_nozhnitsy_i_lezviya&amp;utm_term=13144</url>
<price>1495</price>
<purchase_price>809</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>842</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/612/m71cr19v5ycsx8hftuc8l12wio1d9xia.jpg</picture>
<name>Нож OLFA с выдвижным лезвием, двухкомпонентный корпус, трещоточный фиксатор, 25мм OL-XH-1</name>
<description></description>
</offer>
<offer id="13795" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/nozhi_nozhnitsy_i_lezviya/nozhnitsy_po_tverdomu_metallu_kraftool_cr_mo_levyy_rez_260mm_2325_l_2325_l/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nozhi_nozhnitsy_i_lezviya&amp;utm_term=13795</url>
<price>2047</price>
<purchase_price>1002</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>842</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2d9/y6kdf65x0nt6iy6artw0bseyavrrn43e.jpg</picture>
<name>Ножницы по твердому металлу KRAFTOOL, Cr-Mo, левый рез, 260мм 2325-L</name>
<description></description>
</offer>
<offer id="13796" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/nozhi_nozhnitsy_i_lezviya/nozhnitsy_po_tverdomu_metallu_kraftool_cr_mo_pravyy_rez_260mm_2325_r_2325_r/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nozhi_nozhnitsy_i_lezviya&amp;utm_term=13796</url>
<price>2047</price>
<purchase_price>994</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>842</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e56/bjk4j07li71s36t6qb69b3rjwciwr5mw.jpg</picture>
<name>Ножницы по твердому металлу KRAFTOOL, Cr-Mo, правый рез, 260мм 2325-R</name>
<description></description>
</offer>
<offer id="10817" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/sverla_i_koronki_dlya_sverleniya/sverla_po_betonu/bur_po_betonu_sds_plus_18_x_800/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sverla_po_betonu&amp;utm_term=10817</url>
<price>1231</price>
<purchase_price>400</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>847</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/99a/0l51c9u8xaz02ocsx60do9lspntngvpn.jpg</picture>
<name>Бур по бетону SDS Plus 18 x 800</name>
<description></description>
</offer>
<offer id="5682" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_el_bor_granit_1_04_02_el_bor_granit_1_04_02/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=5682</url>
<price>1748</price>
<purchase_price>598</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/37c/w5xtu1aaef2zc9axkx9gfucx05b40jfr.png</picture>
<name>Замок врезной Эльбор Гранит 1.04.02</name>
<description></description>
</offer>
<offer id="5684" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_bif_0010_2_3_lk_0010_2_3_lk/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=5684</url>
<price>1403</price>
<purchase_price>554</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/beb/07geffm8gfcmk0bha3vj2yunuug30nrb.png</picture>
<name>Замок врезной БИФ 0010 - 2 3 ЛК</name>
<description></description>
</offer>
<offer id="5775" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_suval_dnyy_zv8_802_0_0_3rig_5_kl_zv8_802_0_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=5775</url>
<price>1403</price>
<purchase_price>431</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/afc/fuuu22qjc36iabfd7vaddpmzq6r2iype.png</picture>
<name>Замок врезной сувальдный ЗВ8 802.0.0 (3риг., 5 кл.)</name>
<description></description>
</offer>
<offer id="6028" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zv8_8u_13_79900_zv8_8u_13_79900/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6028</url>
<price>1231</price>
<purchase_price>487</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d47/26b6a6j9ix47ircwp7t1qgsrq9ep34i3.png</picture>
<name>Замок врезной ЗВ8-8У/13 (79900)</name>
<description></description>
</offer>
<offer id="6159" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_baranovichi_sho_25_baranovich_sho25/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6159</url>
<price>2272</price>
<purchase_price>852</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9b4/eqa2crhhz0v28cd630t9hsqgut3t4a37.jpg</picture>
<name>Замок врезной Барановичи ШО-25</name>
<description></description>
</offer>
<offer id="6338" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_20mm_kale_153_20mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6338</url>
<price>1323</price>
<purchase_price>418</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 20мм</name>
<description></description>
</offer>
<offer id="6547" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_gardian_profi_45_11_16_s_zashchelkoy_gardian_profi_45_11_16/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6547</url>
<price>1231</price>
<purchase_price>346</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/582/s08ukjq49gc1jdg019n42qrr6z0t5c72.png</picture>
<name>Замок врезной узкопрофильный Гардиан Profi 45.11.16 с защелкой</name>
<description></description>
</offer>
<offer id="6609" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zenit_zv4_3_01_zv4_3_01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6609</url>
<price>1576</price>
<purchase_price>684</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8a0/nc5e9cylfbj1z9e36o6kub9cdgt3c98b.jpg</picture>
<name>Замок врезной Зенит ЗВ4-3.01</name>
<description></description>
</offer>
<offer id="6642" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/korpus_zamka_dlya_kitayskikh_metallicheskikh_dverey_msm_ml68_60_k_cp_khrom_ml68_60_k_cp/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6642</url>
<price>1323</price>
<purchase_price>400</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d49/uozhgncod0wgslt2xc3c8uj4jyh92v2u.jpg</picture>
<name>Корпус замка для китайских металлических дверей MSM ML68/60 К CP (хром)</name>
<description></description>
</offer>
<offer id="6737" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_30_12_3_rig_4_kl_gardian_30_12/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6737</url>
<price>2272</price>
<purchase_price>786</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/037/7g64h4hwmcbxepctkdvrwedpmh5dken1.png</picture>
<name>Замок врезной Гардиан 30.12 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="6923" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_suval_dnyy_zv9_4_1_4_zv9_4_1_4/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=6923</url>
<price>1748</price>
<purchase_price>493</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6a0/lcezhldh5kjyt82ocj3fbpx3lt4dyvt1.png</picture>
<name>Замок врезной сувальдный ЗВ9-4-1-4</name>
<description></description>
</offer>
<offer id="7041" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_mettem_zv4_401_0_0_zv4_401_0_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=7041</url>
<price>1208</price>
<purchase_price>409</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8e9/oez3fa5el6ifkp4mv0gv4xikfrknbem1.jpg</picture>
<name>Замок врезной Меттэм ЗВ4 401.0.0</name>
<description></description>
</offer>
<offer id="7613" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zv8_160_0_0_165_0_0_zv8_160_0_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=7613</url>
<price>2450</price>
<purchase_price>974</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f70/2ea1vtxo6g60tkvrbicu5auldf8x91c5.png</picture>
<name>Замок врезной ЗВ8 160.0.0 (165.0.0)</name>
<description></description>
</offer>
<offer id="7990" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_tsilindrovyy_s_zashchelkoy_gardian_12_11_1416/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=7990</url>
<price>1501</price>
<purchase_price>485</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7f7/ax70hnevcrjhvd8m35bc0yezczwp2eo1.jpg</picture>
<name>Замок врезной цилиндровый с защелкой Гардиан 12.11</name>
<description></description>
</offer>
<offer id="8100" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_el_bor_granit_1_06_41_prav_el_bor_granit_1_06_41_prav/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8100</url>
<price>3019</price>
<purchase_price>1051</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/24f/5ijor2lmlvy4hd1sdc9wwhbx5xe6xewi.jpg</picture>
<name>Замок врезной Эльбор Гранит 1.06.41 прав.</name>
<description></description>
</offer>
<offer id="8153" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_suval_dnyy_s_zashchelkoy_gardian_10_11_3_rig_4_kl_gardian_10_11/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8153</url>
<price>1501</price>
<purchase_price>542</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/aaf/hf792r0xu6ifonc365hl4zo6hv75tbzn.png</picture>
<name>Замок врезной сувальдный с защелкой Гардиан 10.11 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="8285" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_30_01_3_rig_4_kl_gardian_30_01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8285</url>
<price>1909</price>
<purchase_price>449</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0d0/cz0x4667fkcocpy8x72o877hijc9rk5o.png</picture>
<name>Замок врезной Гардиан 30.01 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="8498" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_prosam_77311_zv9_6_13_77311_zv9_6_13/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8498</url>
<price>1927</price>
<purchase_price>814</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5fc/bieh5u39hw8czxei3rlysyx3rhz1yhoq.png</picture>
<name>Замок врезной Просам 77311 (ЗВ9-6/13)</name>
<description></description>
</offer>
<offer id="8544" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_10_01_3_rig_4_kl_gardian_10_01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8544</url>
<price>1576</price>
<purchase_price>574</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cee/xvpi13r5maurg7mc8tjcvnycsxxeb6m0.png</picture>
<name>Замок врезной Гардиан 10.01 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="8566" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_kale_257_nikel_kale_257/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8566</url>
<price>1927</price>
<purchase_price>565</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d82/js5mgo3qbjstpbalzrbiakx4e30eyndj.png</picture>
<name>Замок врезной Kale 257 никель</name>
<description></description>
</offer>
<offer id="8609" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_30mm_kale_153_30mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8609</url>
<price>1323</price>
<purchase_price>420</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 30мм</name>
<description></description>
</offer>
<offer id="8639" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_suval_dnyy_new_cambio_facile_57_675_48_tekh_upakovka_klyuch_44_mm_khrom_57_675_48/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8639</url>
<price>19033</price>
<purchase_price>7000</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/55e/dh1od3qjlw4frvvb1aafui7zqbp2amik.jpg</picture>
<name>Замок Врезной Сувальдный Cisa New Cambio Facile 57.675.48 (Тех. Упаковка). Ключ 44 Мм Хром</name>
<description></description>
</offer>
<offer id="8807" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vrezno_rubin_1_08_46_5_5_1_787_dvukhsistem_1_08_46_5_5_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8807</url>
<price>7861</price>
<purchase_price>3272</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6ad/epvcteqautknpalhoc86dt201aswcvxt.png</picture>
<name>Замок врезно РУБИН 1.08.46.5.5.1 ( 787 Двухсистем )</name>
<description></description>
</offer>
<offer id="8925" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_35mm_kale_153_35mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=8925</url>
<price>1231</price>
<purchase_price>310</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 35мм</name>
<description></description>
</offer>
<offer id="9077" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_30_11_3_rig_4_kl_gardian_30_11/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=9077</url>
<price>2542</price>
<purchase_price>657</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d26/ysduw4icuyrysum04d51sphkkxazj20s.png</picture>
<name>Замок врезной Гардиан 30.11 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="9092" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zv8_141_1_0_dlinnyy_zv8_141_1_0_dlinnyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=9092</url>
<price>2622</price>
<purchase_price>1009</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/70f/1r9mtso0rr0t4ajp8535mc5wbtimtdil.jpg</picture>
<name>Замок врезной ЗВ8 141.1.0 длинный</name>
<description></description>
</offer>
<offer id="10336" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_apecs_1026_60_cr_khrom_1026_60_cr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10336</url>
<price>2099</price>
<purchase_price>827</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dbe/k0yi4773dgjulf302bzzeuwyi4yfnsjj.jpg</picture>
<name>Замок врезной Apecs 1026/60 cr хром</name>
<description></description>
</offer>
<offer id="10601" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zv9_144_1_0_dlinnyy_zv9_144_1_0_dlinnyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10601</url>
<price>2622</price>
<purchase_price>1009</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/70f/1r9mtso0rr0t4ajp8535mc5wbtimtdil.jpg</picture>
<name>Замок врезной ЗВ9 144.1.0 длинный</name>
<description></description>
</offer>
<offer id="10631" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_ferre_3_rigelya_i_zashchelkoy_2000_cr_2000_cr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10631</url>
<price>1231</price>
<purchase_price>262</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ded/e0j1j53kdgf1pv8fw3qjf02vaj1c0cdw.png</picture>
<name>Замок врезной FERRE 3 ригеля и защелкой 2000 CR</name>
<description></description>
</offer>
<offer id="10636" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_gardian_profi_25_11_16_s_zashchelkoy_gardian_profi_25_11_16/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10636</url>
<price>1323</price>
<purchase_price>409</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/582/s08ukjq49gc1jdg019n42qrr6z0t5c72.png</picture>
<name>Замок врезной узкопрофильный Гардиан Profi 25.11.16 с защелкой</name>
<description></description>
</offer>
<offer id="10793" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_dupleks_00021128/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10793</url>
<price>6987</price>
<purchase_price>3190</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8cc/tlxei0igjcsaymetilfni2c6endr6rgq.png</picture>
<name>Замок врезной Дуплекс</name>
<description></description>
</offer>
<offer id="10980" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_apecs_1226_60_g_zoloto_1226_60_g/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=10980</url>
<price>2979</price>
<purchase_price>1113</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/952/cpn5q42ewh8uwxj1o4cyru5q7xpb4sg8.jpg</picture>
<name>Замок врезной Apecs 1226/60 G (золото)</name>
<description></description>
</offer>
<offer id="11181" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_kale_kilit_kale_kilit_252r_l_suval_dnyy_dlya_metallicheskikh_dverey_252r_l/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=11181</url>
<price>4370</price>
<purchase_price>1230</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d46/dnicrfg76tigwk9gd4gf9jg8iut4mix9.jpg</picture>
<name>Замок врезной KALE KILIT (КАЛЕ КИЛИТ) 252R/L сувальдный для металлических дверей</name>
<description></description>
</offer>
<offer id="11689" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_p_25mm_kale_153_p_25mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=11689</url>
<price>1323</price>
<purchase_price>374</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 P 25мм</name>
<description></description>
</offer>
<offer id="11867" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_el_bor_granit_1_06_40_lev_el_bor_granit_1_06_40_lev/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=11867</url>
<price>2795</price>
<purchase_price>1051</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f63/5sx767srruq17mshrpm1tq2lsspiv8hz.jpg</picture>
<name>Замок врезной Эльбор Гранит 1.06.40 лев.</name>
<description></description>
</offer>
<offer id="12400" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_zv8_141_1_0_korotkiy_zv8_141_1_0_korotkiy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=12400</url>
<price>2858</price>
<purchase_price>998</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/70f/1r9mtso0rr0t4ajp8535mc5wbtimtdil.jpg</picture>
<name>Замок врезной ЗВ8 141.1.0 короткий</name>
<description></description>
</offer>
<offer id="12647" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_avers_0823_60_c_g_zoloto_0823_60_c_g/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=12647</url>
<price>2065</price>
<purchase_price>665</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/45b/quxffbizuhq9b5063cl4mmx3kb4gvmp0.jpg</picture>
<name>Замок врезной Avers 0823/60 - C - G золото</name>
<description></description>
</offer>
<offer id="12659" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_p_20mm_kale_153_p_20mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=12659</url>
<price>1231</price>
<purchase_price>268</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 P 20мм</name>
<description></description>
</offer>
<offer id="13059" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_72_16_t_4_rig_5_kl_podkhodit_k_cisa_56_535_72_16t/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13059</url>
<price>4894</price>
<purchase_price>2245</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ccf/n1vc1ppn5weg2g7mqjdx5037bfkbl1fm.jpg</picture>
<name>Замок врезной Гардиан 72.16 Т (4 риг., 5 кл.) ( подходит к Cisa 56.535 )</name>
<description></description>
</offer>
<offer id="13151" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_kale_153_25mm_kale_153_25mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13151</url>
<price>1231</price>
<purchase_price>278</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c2/hlqy2f0qsyg0j1df11yrkc0b28zrnz1l.jpg</picture>
<name>Замок врезной узкопрофильный Kale 153 25мм</name>
<description></description>
</offer>
<offer id="13209" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_el_bor_granit_1_06_01_5_el_bor_granit_1_06_01_5/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13209</url>
<price>2703</price>
<purchase_price>872</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/071/x4ux97g2vsg0a6ki3uqnsula48rqj8rh.png</picture>
<name>Замок врезной Эльбор Гранит 1.06.01.5</name>
<description></description>
</offer>
<offer id="13309" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/vreznoy_zamok_zashchelka_mezhkomnatnyy_pod_tsilindr_apecs_5300_ni_5300_ni/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13309</url>
<price>1231</price>
<purchase_price>486</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/23c/o11b1pyz4g11mv0cuvo7p4qshrwacfmh.jpg</picture>
<name>Врезной замок-защелка межкомнатный под цилиндр Apecs 5300-NI</name>
<description></description>
</offer>
<offer id="13342" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_apecs_1425_cr_zamena_baranovich_sho_25_pod_lichinku_1425_cr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13342</url>
<price>3652</price>
<purchase_price>1542</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/413/0ke1054o07vy0x268z5ww63sdl5859jz.jpg</picture>
<name>Замок врезной Apecs 1425-CR (замена Баранович ШО-25) под личинку</name>
<description></description>
</offer>
<offer id="13520" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_kale_257l_nikel_kale_257_l/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13520</url>
<price>2979</price>
<purchase_price>658</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/93d/8ymhc548byo3l3m0byej4blpife8mntr.png</picture>
<name>Замок врезной Kale 257L никель</name>
<description></description>
</offer>
<offer id="13620" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_apecs_2210_60_b_g_2210_60_b_g/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13620</url>
<price>3065</price>
<purchase_price>1437</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1f8/i3l4c6rxvkc01vi5s9sf2b3egepql10y.jpg</picture>
<name>Замок врезной Apecs 2210/60 B/G</name>
<description></description>
</offer>
<offer id="13832" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_s_ruchkoy_bif_007_pravyy_bif_007_pravyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13832</url>
<price>1927</price>
<purchase_price>635</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b9d/2ef3fedyur4xt1yzg1ovho1qh13zg27x.jpg</picture>
<name>Замок врезной с ручкой БИФ-007 ПРАВЫЙ</name>
<description></description>
</offer>
<offer id="13896" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_uzkoprofil_nyy_gardian_profi_25_11r_16_s_rol_zashchelkoy_gardian_profi_25_11r_16/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=13896</url>
<price>1323</price>
<purchase_price>399</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/303/ozz9981sx3jp5z22g3i716y0y10gzphs.png</picture>
<name>Замок врезной узкопрофильный Гардиан Profi 25.11Р.16 с рол. защелкой</name>
<description></description>
</offer>
<offer id="14168" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_gardian_30_15_3_rig_4_kl_gardian_30_15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=14168</url>
<price>2450</price>
<purchase_price>853</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/633/e3hkg02311t5g2xb57zkubyxrtkilq58.png</picture>
<name>Замок врезной Гардиан 30.15 (3 риг., 4 кл.)</name>
<description></description>
</offer>
<offer id="14300" available="true">
<url>http://santehnic-market.ru/catalog/zamochno_skobyanye_izdeliya/zamki_i_lichinki/zamki_dvernye/zamok_vreznoy_pod_tsilindr_agb_securezza_b008605003_b008605003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zamki_dvernye&amp;utm_term=14300</url>
<price>2979</price>
<purchase_price>968</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>848</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/978/l3fcuv0uswy6hl77t7r8lfcsvk563tjn.jpg</picture>
<name>Замок врезной под цилиндр AGB Securezza B008605003</name>
<description></description>
</offer>
<offer id="7666" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/malyarnyy_instrument/valiki_ruchki_k_valikam_vannochki_dlya_valikov/valik_igol_chatyy_stayer_dlya_nalivnykh_polov_v_sbore_plastmassovye_igly_byugel_8mm_75kh400mm_03951/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=valiki_ruchki_k_valikam_vannochki_dlya_valikov&amp;utm_term=7666</url>
<price>1610</price>
<purchase_price>557</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>856</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/272/ff3plclg9w06uakpcjcd45yu6rfc3o2a.jpg</picture>
<name>Валик игольчатый STAYER для наливных полов в сборе, пластмассовые иглы, бюгель 8мм, 75х400мм 03951-40</name>
<description></description>
</offer>
<offer id="6775" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/udliniteli_i_troyniki/setevye_fil_try/s_gsu5_3_ivory_cetevoy_fil_tr_serii_universal_3m_pvs_3x0_75_5_gnezd_s_z_10a_zashchita_ot_perenapryazh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=setevye_fil_try&amp;utm_term=6775</url>
<price>1271</price>
<purchase_price>445</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>859</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/239/e4rc7go1p3kk9c68lsmydol2v1vzs4dd.jpg</picture>
<name>S-GSU5-3 IVORY Cетевой фильтр серии Universal. 3м Пвс 3x0.75. 5 гнезд. с-з. 10А. Защита от перенапряжения. короткого замыкания. TM Uniel.</name>
<description></description>
</offer>
<offer id="11981" available="true">
<url>http://santehnic-market.ru/catalog/krepezh/plastiny_i_mebel_nye_ugolki/uglovaya_konsol_fischer_wk_gvz_dlya_montazhnoy_sistemy_fus_100_x_100_x_36_mm_63559_63559/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=plastiny_i_mebel_nye_ugolki&amp;utm_term=11981</url>
<price>1245</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>861</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/980/la7uvdp7k64fui4jmpwco1j4ghpbotw1.png</picture>
<name>Угловая консоль fischer WK GVZ для монтажной системы FUS, 100 x 100 x 36 мм 63559</name>
<description></description>
</offer>
<offer id="7591" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/payal_niki_i_prinadlezhnosti_dlya_payki/payal_nik_zubr_professional_s_dvukhkomponentnoy_rukoyatkoy_s_zashchitnym_kolpachkom_keramicheskim_na/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=payal_niki_i_prinadlezhnosti_dlya_payki&amp;utm_term=7591</url>
<price>1265</price>
<purchase_price>577</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>872</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9bd/lf5wh5ozqjtap7kyj3r66m3aeq35j25u.jpg</picture>
<name>Паяльник ЗУБР &quot;ПРОФЕССИОНАЛ&quot; с двухкомпонентной рукояткой, с защитным колпачком, керамическим нагревательным элементом, 40Вт, конус 55413-40</name>
<description></description>
</offer>
<offer id="12456" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/payal_niki_i_prinadlezhnosti_dlya_payki/gazovaya_gorelka_stayer_55505_h6_s_p_ezopodzhigom_55505_h6/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=payal_niki_i_prinadlezhnosti_dlya_payki&amp;utm_term=12456</url>
<price>1610</price>
<purchase_price>739</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>872</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b26/xm2ah0f2169daj8zc3b6c9lcqax1taai.jpg</picture>
<name>Газовая горелка Stayer 55505-H6 с пьезоподжигом</name>
<description></description>
</offer>
<offer id="12601" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/elektromontazhnyy_instrument/payal_niki_i_prinadlezhnosti_dlya_payki/payal_nik_zubr_professional_s_dvukhkomponentnoy_rukoyatkoy_s_zashchitnym_kolpachkom_keramicheskim_na/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=payal_niki_i_prinadlezhnosti_dlya_payki&amp;utm_term=12601</url>
<price>1438</price>
<purchase_price>651</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>872</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/434/g4wmkw5h48iuflberrdxiu53fj3wolvi.jpg</picture>
<name>Паяльник ЗУБР &quot;ПРОФЕССИОНАЛ&quot; с двухкомпонентной рукояткой, с защитным колпачком, керамическим нагревательным элементом, 60Вт, конус 55413-60</name>
<description></description>
</offer>
<offer id="8083" available="true">
<url>http://santehnic-market.ru/catalog/lakokrasochnye_materialy/sukhie_smesi/gidroizolyatsiya_tserezit_ceresit_cr_65_tsementnaya_20kg/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sukhie_smesi&amp;utm_term=8083</url>
<price>1426</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>884</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/302/i5e700hqbv7qlzo6kxhqjk3463vb6rsa.png</picture>
<name>Гидроизоляция Церезит Ceresit CR 65 Цементная 20кг</name>
<description></description>
</offer>
<offer id="7579" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_garmoshka_gimi_brio_super_120/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=7579</url>
<price>2001</price>
<purchase_price>639</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b65/l3d8j1enup7nu0ox9akl4ahl8jk5mggv.jpg</picture>
<name>Сушилка-гармошка GIMI Brio Super 120</name>
<description></description>
</offer>
<offer id="8500" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_raskladnaya_leifheit_telegnt_100/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=8500</url>
<price>8119</price>
<purchase_price>2693</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8ab/vbtyd6vu5y40zab7bw3u7eleusu2anh7.png</picture>
<name>Сушилка раскладная Leifheit Telegnt 100</name>
<description></description>
</offer>
<offer id="8538" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_potolochnaya_1_1_m_art_nr_921_02/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=8538</url>
<price>1294</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e8f/jhrcbv067cyys63lmw4sreovg8l1uzgf.png</picture>
<name>Сушилка потолочная 1,1 м Art.Nr.921-02</name>
<description></description>
</offer>
<offer id="8679" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_dlya_bel_ya_napol_naya_skladnaya_sushil_noe_polotno_18_m_1_5_sb1_sb1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=8679</url>
<price>2001</price>
<purchase_price>757</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/825/fija9snl4tclbououfjr12hodkqcaelj.jpg</picture>
<name>СУШИЛКА ДЛЯ БЕЛЬЯ НАПОЛЬНАЯ СКЛАДНАЯ (СУШИЛЬНОЕ ПОЛОТНО 18 М) (1/5) СБ1</name>
<description></description>
</offer>
<offer id="11242" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_potolochnaya_1_3_m_art_nr_921_04/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=11242</url>
<price>1639</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e8f/jhrcbv067cyys63lmw4sreovg8l1uzgf.png</picture>
<name>Сушилка потолочная 1,3 м Art.Nr.921-04</name>
<description></description>
</offer>
<offer id="13047" available="true">
<url>http://santehnic-market.ru/catalog/khozyaystvennye_tovary/vse_dlya_doma/gladil_nye_doski_sushilki_dlya_bel_ya/sushilka_potolochnaya_1_2_m_art_nr_921_03/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gladil_nye_doski_sushilki_dlya_bel_ya&amp;utm_term=13047</url>
<price>1467</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>891</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e8f/jhrcbv067cyys63lmw4sreovg8l1uzgf.png</picture>
<name>Сушилка потолочная 1,2 м Art.Nr.921-03</name>
<description></description>
</offer>
<offer id="8555" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/molotki_kiyanki_kuvaldy/sibin_20133_8_8_kg_kuvalda_s_derevyannoy_udlinyennoy_rukoyatkoy_20133_8/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=molotki_kiyanki_kuvaldy&amp;utm_term=8555</url>
<price>2760</price>
<purchase_price>1271</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>893</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6a7/qhyxgup7cakveqsig56dapaqid3cbjmh.jpg</picture>
<name>СИБИН 20133-8 8 кг кувалда с деревянной удлинённой  рукояткой</name>
<description></description>
</offer>
<offer id="8626" available="true">
<url>http://santehnic-market.ru/catalog/instrumenty/slesarnyy_i_stolyarnyy_instrument/otvertki/kraftool_kh_drive_nabor_otvertok_6_sht_250081_h6_250081_h6/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=otvertki&amp;utm_term=8626</url>
<price>1553</price>
<purchase_price>948</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>911</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/02b/j1xvvzx7ouelwotph68yoqwy7gq0rmb0.jpg</picture>
<name>KRAFTOOL Х-Drive набор отверток 6 шт 250081-H6</name>
<description></description>
</offer>
<offer id="17963" available="true">
<url>http://santehnic-market.ru/catalog/ventilyatsiya/vozdukhovody_ploskie/8020_kanal_pryamougol_nyy_ploskiy_ventilyatsionnyy_vents_vents_60_kh_204_mm_kh_2_m_12510075_12510075/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vozdukhovody_ploskie&amp;utm_term=17963</url>
<price>1208</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>932</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6f0/qela6qxb19c4hyvluvet1vubys3lr935.jpg</picture>
<name>8020 Канал прямоугольный (плоский) вентиляционный Vents (Вентс) 60 х 204 мм х 2 м 12510075</name>
<description></description>
</offer>
<offer id="14597" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/vodyanye_polotentsesushiteli_v_vannuyu_komnatu/vodyanoy_polotentsesushitel_terminus_viktoriya_32_18_p5_430_x_630/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodyanye_polotentsesushiteli_v_vannuyu_komnatu&amp;utm_term=14597</url>
<price>10040</price>
<purchase_price>3100</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>946</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3fe/6qeefrg8gcroy0l1bk0nn6cgrdqobugs.png</picture>
<name>Водяной полотенцесушитель TERMINUS Виктория 32/18 П5 430 x 630</name>
<description></description>
</offer>
<offer id="15809" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/vodyanye_polotentsesushiteli_v_vannuyu_komnatu/vodyanoy_polotentsesushitel_terminus_fokstrot_600x532/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodyanye_polotentsesushiteli_v_vannuyu_komnatu&amp;utm_term=15809</url>
<price>5980</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>946</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d95/sbnimmswsrzzj8y74uzdrquh1tuslnqw.jpg</picture>
<name>Водяной полотенцесушитель TERMINUS Фокстрот 600x532</name>
<description></description>
</offer>
<offer id="17670" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/vodyanye_polotentsesushiteli_v_vannuyu_komnatu/vodyanoy_polotentsesushitel_terminus_evromiks_32_20_p6_482_x_630/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodyanye_polotentsesushiteli_v_vannuyu_komnatu&amp;utm_term=17670</url>
<price>16733</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>946</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/839/v6fw4sh419pkdo65dpgu0rfjw20135av.png</picture>
<name>Водяной полотенцесушитель TERMINUS Евромикс 32/20 П6 482 x 630</name>
<description></description>
</offer>
<offer id="17281" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy/fl_led_t5_18w_6500k_22_35_1168mm_18vt_1530lm_220v_svetil_nik_svetodiodnyy_so_shtekerami/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy&amp;utm_term=17281</url>
<price>1369</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>947</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a52/drw4z33gmmchdrobv2a15w0cou95lvw3.png</picture>
<name>FL-LED T5- 18W 6500K   22*35*1168мм  18Вт   1530Лм   220В  (светильник светодиодный со штекерами)</name>
<description></description>
</offer>
<offer id="17517" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy/prozhektor_svetodiodnyy_sdo_7_30vt_230v_6500k_ip65_chernyy_in_home_4690612034621/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy&amp;utm_term=17517</url>
<price>1185</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>947</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fe7/flidggzr5h0y67shllwsqm0n2g5brxg8.jpg</picture>
<name>Прожектор светодиодный СДО-7 30Вт 230В 6500К IP65 черный IN HOME</name>
<description></description>
</offer>
<offer id="17840" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy/svetil_nik_perenosnoy_15_m_ultpaflash_220v_uf_nrb_01_60_003_uf_nrb_01_60_003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy&amp;utm_term=17840</url>
<price>1185</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>947</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/08a/lpjonzq31s545dydjc7e1s8o1t1ykfo0.png</picture>
<name>Светильник переносной 15 м ULTPAFLASH 220В UF НРБ 01-60-003</name>
<description></description>
</offer>
<offer id="19301" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy/panel_svetodiodnaya_universal_naya_lpu_02_50vt_prizma_230v_6500k_4500lm_595kh595kh19mm_ip40_in_home/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetil_niki_dlya_garazhey_i_podsobnykh_pomeshcheniy&amp;utm_term=19301</url>
<price>2185</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>947</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/79d/j0y9ql7mz6r47aaq50eigflbdaocfwme.jpg</picture>
<name>Панель светодиодная универсальная LPU-02 50Вт ПРИЗМА 230В 6500К 4500Лм 595х595х19мм IP40 IN HOME</name>
<description></description>
</offer>
<offer id="14819" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/obratnye_klapany_i_zonty_pvkh/kanalizatsionnyy_obrat_klap_f_32_mcalpine_s28_nrv_32_s28_nrv_32/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany_i_zonty_pvkh&amp;utm_term=14819</url>
<price>1265</price>
<purchase_price>355</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>955</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c8a/poybtys5iu32s0b7oy0e0dhpdar1z34f.jpg</picture>
<name>КАНАЛИЗАЦИОННЫЙ ОБРАТЫЙ КЛАПАН ф 32 McALPINE S28-NRV-32</name>
<description></description>
</offer>
<offer id="15379" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/obratnye_klapany_i_zonty_pvkh/kanalizatsionnyy_obratnyy_klapan_f_50_capricorn_5000_50/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany_i_zonty_pvkh&amp;utm_term=15379</url>
<price>1610</price>
<purchase_price>560</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>955</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f21/hy9jkk62nmybi8w1r8aa31oyl3b8rr70.jpg</picture>
<name>Канализационный обратный клапан ф 50 Capricorn 5000/50</name>
<description></description>
</offer>
<offer id="16244" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/obratnye_klapany_i_zonty_pvkh/kanalizatsionnyy_obrat_klap_f_40_mcalpine_t28m_nrv_40_t28m_nrv_40/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany_i_zonty_pvkh&amp;utm_term=16244</url>
<price>1771</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>955</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c8a/poybtys5iu32s0b7oy0e0dhpdar1z34f.jpg</picture>
<name>КАНАЛИЗАЦИОННЫЙ ОБРАТЫЙ КЛАПАН ф 40 McALPINE T28M-NRV-40</name>
<description></description>
</offer>
<offer id="16923" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/obratnye_klapany_i_zonty_pvkh/kanaliz_obr_klap_vert_tip_kopres_d_19_23mm_mcalpine_convalve_convalve/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany_i_zonty_pvkh&amp;utm_term=16923</url>
<price>2277</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>955</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c92/pib5puge1fqmfwbjfbaubm2njb04alge.jpg</picture>
<name>Канализационный  обратный клапан  вертикальный (D=19-23мм.) McALPINE CONVALVE</name>
<description></description>
</offer>
<offer id="19252" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/obratnye_klapany_i_zonty_pvkh/kanalizatsionnyy_obrat_klap_f_50_mcalpine_z2850_nrv_z2850_nrv/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany_i_zonty_pvkh&amp;utm_term=19252</url>
<price>1879</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>955</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c8a/poybtys5iu32s0b7oy0e0dhpdar1z34f.jpg</picture>
<name>КАНАЛИЗАЦИОННЫЙ ОБРАТЫЙ КЛАПАН ф 50 McALPINE Z2850-NRV</name>
<description></description>
</offer>
<offer id="14399" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/mufty_rehau/mufta_nadvizhnaya_n_bronza_rehau_32_kh_1_366060_456321_366060_456321/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_rehau&amp;utm_term=14399</url>
<price>1750</price>
<purchase_price>11</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>956</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cd0/2x6ys9mpvmswg8nypgg57skkmer8l0ea.jpg</picture>
<name>Муфта надвижная Н бронза REHAU 32 х 1 &quot; 366060 / 456321</name>
<description></description>
</offer>
<offer id="16503" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/mufty_rehau/mufta_nadvizhnaya_n_bronza_rehau_25_kh_3_4_366057_456318_366057_456318/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_rehau&amp;utm_term=16503</url>
<price>1164</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>956</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/96f/pk89utf8wtj0xg2z2kaz8s0ofretzsps.jpg</picture>
<name>Муфта надвижная Н бронза Rehau 25 х 3/4 &quot; 366057 / 456318</name>
<description></description>
</offer>
<offer id="15898" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/krany_belye/belyy_polipropilenovyy_kran_ventil_nyy_f32_spk_4015v4_000032/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_belye&amp;utm_term=15898</url>
<price>1238</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>961</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/046/l6qnahqbt93tb21wrx34l31sjg97h4aj.jpg</picture>
<name>БЕЛЫЙ ПОЛИПРОПИЛЕНОВЫЙ КРАН ВЕНТИЛЬНЫЙ ф32 SPK</name>
<description></description>
</offer>
<offer id="18921" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/krany_belye/belyy_polipropilenovyy_kran_sharovoy_f_40_spk_4010v4_000040/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_belye&amp;utm_term=18921</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>961</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/ba2/5285hjnmdvv9t6oqcheurm0vp5gd5pw2.png</picture>
<name>БЕЛЫЙ ПОЛИПРОПИЛЕНОВЫЙ КРАН ШАРОВОЙ ф 40 SPK</name>
<description></description>
</offer>
<offer id="14982" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/ershik_dlya_unitaza/ershik_dlya_unitaza_frap_f901_khrom_f901/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ershik_dlya_unitaza&amp;utm_term=14982</url>
<price>1840</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>963</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/66d/v7m1a1zdhjgdvzc9pc3hvp30nlvcvpa3.jpg</picture>
<name>Ершик для унитаза FRAP F901 Хром</name>
<description></description>
</offer>
<offer id="15199" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/ershik_dlya_unitaza/ershik_dlya_unitaza_frap_f902_khrom_f902/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ershik_dlya_unitaza&amp;utm_term=15199</url>
<price>1840</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>963</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b2/6kgq9ge74cljv1af94j0mxjxvezyxblz.jpg</picture>
<name>Ершик для унитаза FRAP F902 Хром</name>
<description></description>
</offer>
<offer id="17819" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/ershik_dlya_unitaza/ershik_dlya_unitaza_frap_f910_f910/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ershik_dlya_unitaza&amp;utm_term=17819</url>
<price>1840</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>963</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f3b/nonzv26gisz4zxjxo9nm6ows1cwx434g.png</picture>
<name>Ершик для унитаза FRAP F910</name>
<description></description>
</offer>
<offer id="18103" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/ershik_dlya_unitaza/ershik_dlya_unitaza_frap_f905_khrom_f905/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ershik_dlya_unitaza&amp;utm_term=18103</url>
<price>1840</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>963</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b81/cyqi6kvtwobj1whkgb1fegg924g93zah.jpg</picture>
<name>Ершик для унитаза FRAP F905 Хром</name>
<description></description>
</offer>
<offer id="15018" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus/kanalizatsionnaya_mufta_revizionnaya_polipropilen_110_rehau_raupiano_plus_11215341003_11215341004/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus&amp;utm_term=15018</url>
<price>1712</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>964</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7fe/1yi95fzaelbnv5w041axgn7gpxjs40kn.jpg</picture>
<name>Канализационная муфта ревизионная полипропилен 110 REHAU RAUPIANO PLUS 11215341003</name>
<description></description>
</offer>
<offer id="15035" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus/kanalizatsionnyy_troynik_polipropilen_110_kh_50_45_rehau_raupiano_plus_11213041001_11213041001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus&amp;utm_term=15035</url>
<price>1240</price>
<purchase_price>7</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>964</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/659/dh9fnxvinfailiu61y93lmp3qa3cbvpb.jpg</picture>
<name>Канализационный  тройник полипропилен 110 х 50 45° REHAU RAUPIANO PLUS 11213041001</name>
<description></description>
</offer>
<offer id="16742" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus/kanalizatsionnyy_troynik_polipropilen_110_kh_110_45_rehau_raupiano_plus_11229841001_11229841001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus&amp;utm_term=16742</url>
<price>1721</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>964</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/4bf/wjworqmazbzxtcr0232fftin26m8u2nz.jpeg</picture>
<name>Канализационный  тройник полипропилен 110 х 110 45° REHAU RAUPIANO PLUS 11229841001</name>
<description></description>
</offer>
<offer id="17398" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus/kanalizatsionnaya_truba_rehau_vnutr_polipropilenovaya_raupiano_plus_110_x_2_7_x_500_mm_11202741005/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus&amp;utm_term=17398</url>
<price>1330</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>964</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/89f/v1vm3cxn1gtu5jvqwjx6p7i2mqs904o3.jpg</picture>
<name>Канализационная труба REHAU внутр. полипропиленовая RAUPIANO Plus 110 x 2.7 x 500 мм</name>
<description></description>
</offer>
<offer id="18298" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus/kanalizatsionnaya_truba_rehau_vnutr_polipropilenovaya_raupiano_plus_40_x_1_8_x_2000_mm_11230441200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=shumopogloshchayushchaya_kanalizatsiya_rehau_raupiano_plus&amp;utm_term=18298</url>
<price>1494</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>964</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/89f/v1vm3cxn1gtu5jvqwjx6p7i2mqs904o3.jpg</picture>
<name>Канализационная труба REHAU внутр. полипропиленовая RAUPIANO Plus 40 x 1.8 x 2000 мм</name>
<description></description>
</offer>
<offer id="19509" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/elektricheskie_polotentsesushiteli_s_termoregulyatorom/polotentsesushitel_elektricheskiy_ganzer_g24_600_kh_500_pravoe_podklyuchenie_g24_60x50_el/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=elektricheskie_polotentsesushiteli_s_termoregulyatorom&amp;utm_term=19509</url>
<price>25099</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>965</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c42/88jox3wfc7vlif3p0l0wqe8lzqs8uewk.png</picture>
<name>Полотенцесушитель электрический GANZER  G24 600 х 500 правое подключение</name>
<description></description>
</offer>
<offer id="15140" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/ugolki_latunnye/ugolok_latunnyy_2_g_sh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_latunnye&amp;utm_term=15140</url>
<price>1695</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>968</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/91c/f1zvvbzt4tfe46km1o6uzix3nyg8qjo4.jpg</picture>
<name>Уголок латунный 2 &quot; г/ш</name>
<description></description>
</offer>
<offer id="18662" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/ugolki_latunnye/ugolok_latunnyy_2_g_g_is_50_005/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_latunnye&amp;utm_term=18662</url>
<price>1695</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>968</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/64b/ne9ck4ert21yeq0k1eq9c2tf6hmbger6.jpg</picture>
<name>Уголок латунный 2&quot; г/г  IS</name>
<description></description>
</offer>
<offer id="15176" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_s_gigienicheskim_dushem_hansen_h6112_h_6112/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=15176</url>
<price>5751</price>
<purchase_price>1682</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d8d/44331730d2jbjhjyvkaqjuqaa531n7dn.jpg</picture>
<name>Смеситель встраиваемый с гигиеническим душем HANSEN H6112</name>
<description></description>
</offer>
<offer id="15290" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_s_gigienicheskim_dushem_ganzer_ganzer_gz12404_gz_12404/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=15290</url>
<price>7502</price>
<purchase_price>3370</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4fe/vgnjfsqrheql9qpy8dvbhhupkwk0v8r3.png</picture>
<name>Смеситель встраиваемый с гигиеническим душем GANZER (Ганзер) GZ12404</name>
<description></description>
</offer>
<offer id="16249" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_s_gigienicheskim_dushem_ganzer_ganzer_gz_42101_set_c_chernyy_gz42101_setc/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=16249</url>
<price>8752</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/38c/ticr7zla5kpa32ik483gcrk01csmle56.png</picture>
<name>Смеситель встраиваемый с гигиеническим душем GANZER (Ганзер) GZ 42101 - Set C черный</name>
<description></description>
</offer>
<offer id="16276" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_kaiser_merkur_26017_26017/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=16276</url>
<price>6267</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bc0/5a3qqvgo1kx29d80d1gaj15jwgs2st18.jpg</picture>
<name>Смеситель встраиваемый  KAISER Merkur 26017</name>
<description></description>
</offer>
<offer id="16647" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_s_gigienicheskim_dushem_ganzer_ganzer_gz5202d_gz_5202d/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=16647</url>
<price>7292</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b5e/oxz8xm87d6mb1z6ys72t2yy7qb85ad98.jpg</picture>
<name>Смеситель встраиваемый с гигиеническим душем GANZER (Ганзер) GZ5202D</name>
<description></description>
</offer>
<offer id="17276" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/termostat_cezares_globo_f_vdim3_tb_01_s_vnutrenney_chast_yu_dlya_vanny_s_dushem_globo_f_vdim3_tb_01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=17276</url>
<price>39396</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b6/27ncb9ys7nyeuqwhvsk9e9kmpo7g739g.jpg</picture>
<name>Термостат CEZARES Globo-F-VDIM3-TB-01 С внутренней частью, для ванны с душем</name>
<description></description>
</offer>
<offer id="17635" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_s_gigienicheskim_dushem_ganzer_ganzer_gz12402_gz_12402/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=17635</url>
<price>7502</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5d0/87mv3z31y3fg2f81npg2tlsx923w46fc.png</picture>
<name>Смеситель встраиваемый с гигиеническим душем GANZER (Ганзер) GZ12402</name>
<description></description>
</offer>
<offer id="17788" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_vstraivaemye/smesitel_vstraivaemyy_ganzer_ganzer_gz5102_gz_5102/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_vstraivaemye&amp;utm_term=17788</url>
<price>4191</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>974</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/10d/zjc9faw6f288944trmk6cgy1d3gtfnd7.png</picture>
<name>Смеситель встраиваемый GANZER (Ганзер) GZ5102</name>
<description></description>
</offer>
<offer id="14466" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_sonia_dlya_unitazov_sanita_luxe_next_gustavsberg_artic_logic_jika_baltic_santek_sant/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=14466</url>
<price>4761</price>
<purchase_price>1950</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/179/kr854dhp7q7rzzu3snw1bawz9jhfamk4.jpg</picture>
<name>Крышка - сиденье Sonia для унитазов Sanita Luxe NEXT , Gustavsberg Artic / Logic , Jika Baltic , Santek ( Сантек ) Алькор и Сенатор , Cersanit Capri , дюропласт , с микролифтом</name>
<description></description>
</offer>
<offer id="14565" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_kharo_era_era_dlya_unitazov_roca_victoria_victoria_nord_mitos_cersanit_delfi_to/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=14565</url>
<price>6193</price>
<purchase_price>2622</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ae3/231aos3qu43i4isfmd4p9k7yzhx9k0qc.jpg</picture>
<name>Крышка-сиденье Haro (Харо) Era (Эра) для унитазов Roca Victoria / Victoria Nord / Mitos, Cersanit Delfi / Top / Best, Villeroy&amp;Boch Arriba / Omnia Classic, Gustavsberg Saval, Ifo Arret / Hitta / Fargen, AM PM Joy подвесной / Tender / Bliss / Sense 536911</name>
<description></description>
</offer>
<offer id="15208" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_kano_dlya_unitazov_gustavsberg_artic_hygienic_jacob_delafon_odeon_up_podvesnoy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=15208</url>
<price>6032</price>
<purchase_price>1891</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a38/p3atycv95fuzj2x0nhyhli11hyuo2fbx.jpg</picture>
<name>Крышка-сиденье Haro Кано для унитазов Gustavsberg Artic/Hygienic,Jacob Delafon Odeon Up подвесной,Villeroy&amp;Boch O&apos;Novo/Subway/Omnia Architectura/My Nature/Hommage,Laufen Pro/Living,AM PM Inspire/Spirit,Hatria Fusion/Daytime,Roca Nexo/Leon,Ideal Standard</name>
<description></description>
</offer>
<offer id="16597" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_bakan_dlya_unitazov_gustavsberg_artic_hygienic_jacob_delafon_odeon_up_podvesnoy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=16597</url>
<price>3968</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e96/bs3xbx9nce0y6d0h8x4e3jn6tz4247fz.jpg</picture>
<name>Крышка-сиденье Haro Бакан для унитазов Gustavsberg Artic/Hygienic,Jacob Delafon Odeon Up подвесной,Villeroy&amp;Boch O&apos;Novo/Subway/Omnia Architectura/My Nature/Hommage,Laufen Pro/Living,AM PM Inspire/Spirit,Hatria Fusion/Daytime,Roca Nexo/Leon,Ideal Standard</name>
<description></description>
</offer>
<offer id="16763" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_ocean_kharo_okean_dlya_unitazov_jika_lyra_vega_dino_ideal_standart_sanremo_euro/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=16763</url>
<price>2944</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cf3/qwvyietlax821b2rij4x5u6iennw3e2q.jpg</picture>
<name>Крышка - сиденье Haro Ocean (Харо Океан) для унитазов Jika Lyra/Vega/Dino, Ideal Standart SanRemo/Eurovit/Ecco, Vidima Seva Duo/Fresh/Storm/Style, Santek Бриз/Цезарь/Дельта, IFO Hitta/Fargen/Arret, Сантери Воротынский/Орион/Ультра, Сызрань Карина 522360</name>
<description></description>
</offer>
<offer id="16882" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_delphi_kharo_delfi_dlya_unitazov_santek_boreal_senator_gustavsberg_perl_saval_j/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=16882</url>
<price>5555</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a3d/w71yv0tfwr79hdf0jvdomfmegizivpev.jpg</picture>
<name>Крышка - сиденье Haro Delphi (Харо Делфи) для унитазов Santek Бореаль/Сенатор, Gustavsberg Perl/Saval, Jika Baltic/Olymp/Zeta, Vitra Grand/Normus, Cersanit Merida/Olimpia, Jacob Delafon Patio/Odeon, Duravit Darling/Duraplus, Twyford Galerie, Iddis Viking</name>
<description></description>
</offer>
<offer id="16927" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_dlya_unitaza_roca_debba_slim_dyuroplast_s_mikroliftom_7_8019_d_200_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=16927</url>
<price>4761</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/748/6oalz4v7b9jd1ao0ca63iu72cetl3u9x.jpg</picture>
<name>Крышка - сиденье для унитаза Roca DEBBA SLIM, дюропласт, с микролифтом</name>
<description></description>
</offer>
<offer id="17264" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_kharo_samar_slim_samar_slim_dlya_unitazov_jacob_delafon_odeon_up_podvesnoy_iddi/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=17264</url>
<price>5555</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/172/z66r8ixdcen7q79y8qqg7061wyn6opc0.jpg</picture>
<name>Крышка-сиденье Haro (Харо) Samar Slim (Самар Слим) для унитазов Jacob Delafon Odeon Up подвесной, IDDIS Calipso подвесной, 539705</name>
<description></description>
</offer>
<offer id="17426" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_banoka_dlya_unitazov_gustavsberg_artic_hygienic_jacob_delafon_odeon_up_podvesno/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=17426</url>
<price>5555</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b9d/2w1hrapwoca4py3zpoqc3gxmf45nhpmq.jpg</picture>
<name>Крышка-сиденье Haro Банока для унитазов Gustavsberg Artic/Hygienic,Jacob Delafon Odeon Up подвесной,Villeroy&amp;Boch O&apos;Novo/Subway/Omnia Architectura/My Nature/Hommage,Laufen Pro/Living,AM PM Inspire/Spirit,Hatria Fusion/Daytime,Roca Nexo/Leon,Ideal Standard</name>
<description></description>
</offer>
<offer id="17459" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_dlya_unitaza_santek_santek_polar_polar_dyuroplast_bez_mikrolifta_1_wh30_1_672_1_wh30/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=17459</url>
<price>2542</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b2b/eldu4qicu6govz1swhosodeyca9dh2ng.jpg</picture>
<name>Крышка - сиденье для унитаза Santek (Сантек) Polar (Полар) , дюропласт, без микролифта 1.WH30.1.672</name>
<description></description>
</offer>
<offer id="17714" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_dante_kharo_dante_dlya_unitazov_roca_gap_dyuroplast_mikrolift_534526_534526/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=17714</url>
<price>5400</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bb6/xdigbkf0vug3183srxyycg9yvlm296nv.jpg</picture>
<name>Крышка - сиденье Haro Dante (Харо Данте) для унитазов Roca Gap, дюропласт, микролифт 534526</name>
<description></description>
</offer>
<offer id="17843" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_crest_kharo_krest_dlya_unitazov_udlinennykh_amerikanskogo_tipa_dyuroplast_mikro/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=17843</url>
<price>7475</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d88/k3amrbu4ytciyljtihi84ovy0ix7wsrf.jpg</picture>
<name>Крышка - сиденье Haro Crest (Харо Крест) для унитазов удлиненных американского типа, дюропласт, микролифт 531983</name>
<description></description>
</offer>
<offer id="18213" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/siden_e_dlya_unitaza/kryshka_siden_e_haro_tind_kharo_tind_dlya_unitazov_ifo_cera_frisk_unique_ido_seven_d_mosaik_tempo_ar/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=siden_e_dlya_unitaza&amp;utm_term=18213</url>
<price>6032</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>976</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dde/190pie20sv2iqm44xmb13nvvociuvm7h.jpg</picture>
<name>Крышка-сиденье Haro Tind (Харо Тинд) для унитазов IFO Cera/Frisk/Unique,IDO Seven D/Mosaik/Tempo/Aria,Ideal Standart Skanitet,Vitra Form 500,Cersanit Geo/Parva/Arena/Scandinavian,Villeroy&amp;Boch Century,Santek Полар/Ирис,Rihard Knauff Skandik,AmPm 531814</name>
<description></description>
</offer>
<offer id="14580" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_city_21044_1904_odnorychazhnyy_khrom_21044_1904/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=14580</url>
<price>5693</price>
<purchase_price>2124</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/123/vpb15jfugwt14v9bk4qbp10lwg820o50.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser City 21044/1904 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14677" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h08_f4608_dvukhrychazhnyy_khrom_f4608/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=14677</url>
<price>2645</price>
<purchase_price>11</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6a1/t8rddvzf5mwbkr6w4q2caupke76raiyt.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H08 F4608 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="14730" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_magistro_14011_14233_odnorychazhnyy_khrom_14011_14233/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=14730</url>
<price>5845</price>
<purchase_price>2184</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/492/ddm9n9z247dzj0g0yfmibtv843laoeo5.png</picture>
<name>Смеситель для кухни (мойки) Kaiser Magistro 14011/14233 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14946" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_planet_14033_odnorychazhnyy_khrom_14033/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=14946</url>
<price>5060</price>
<purchase_price>1946</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/302/214ugalfps1cpppncwlbitb15rbiih3t.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser Planet 14033 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14962" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h27_f4127_dvukhrychazhnyy_khrom_f4127/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=14962</url>
<price>2645</price>
<purchase_price>13</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/277/es0xbrcvokh10h77nuauczy3gnlbu9ne.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H27 F4127 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="15587" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_grohe_eurosmart_32224001_odnorychazhnyy_khrom_32224001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=15587</url>
<price>10576</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6f8/6phahedy9w04uor81itg9is20r1dv265.jpg</picture>
<name>Смеситель для кухни (мойки) GROHE Eurosmart 32224001 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15590" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_nova_23044_odnorychazhnyy_khrom_23044/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=15590</url>
<price>8855</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/583/pj21xlzd5tg7b7ij5r6bpjk4j2d12az3.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser Nova 23044 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15793" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h25_f4025_dvukhrychazhnyy_khrom_f4025/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=15793</url>
<price>4830</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/629/k22dhc7r5rvxz514b1gni0ai7er7qi8w.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H25 F4025 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="15796" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h701_f49701_b_odnorychazhnyy_khrom_f49701_b/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=15796</url>
<price>2530</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e84/gv49kvt1gz2264601nr2uqw63xxy94rd.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H701 F49701-B однорычажный, хром</name>
<description></description>
</offer>
<offer id="15941" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_county_55244_odnorychazhnyy_khrom_55244/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=15941</url>
<price>6578</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1e5/wky4ulygdlcmzh3wee0wf94e892x49bd.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser County 55244 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16231" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_athlete_19044_odnorychazhnyy_khrom_19044/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16231</url>
<price>6958</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2e1/l748z4f9egk9h0999q439epjfqj3ixyw.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser Athlete 19044 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16399" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_planet_1901_20433_odnorychazhnyy_khrom_1901_20433/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16399</url>
<price>5440</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9da/1x2dbi1np2ar2vv1kplyrmwwdyj3whiv.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser Planet 1901/20433 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16402" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_carlson_11033_dvukhrychazhnyy_khrom_11033/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16402</url>
<price>6262</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/329/weog80a5jjt63q9jq0vnna9tf60mz4gw.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser Carlson 11033 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="16506" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h01_f4101_odnorychazhnyy_khrom_f4101/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16506</url>
<price>4370</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2a5/z621oij31rxlkgttvfsnpjxrvhr3zq3p.png</picture>
<name>Смеситель для кухни (мойки) FRAP H01 F4101 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16531" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_gappo_g4399_so_vstroennym_fil_trom_kranom_pod_pit_evuyu_vodu_odnorychazhn/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16531</url>
<price>10120</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/303/2dll2qt7u0t1o53xlo8bfpstna35eofw.jpg</picture>
<name>Смеситель для кухни (мойки) Gappo G4399 со встроенным фильтром (краном) под питьевую воду, однорычажный, хром</name>
<description></description>
</offer>
<offer id="16629" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_county_55244_1_sandbeige_odnorychazhnyy_pesochnyy_mramor_bezhevyy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16629</url>
<price>6578</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a09/j34bnfio89nmbesxlzsbfec4qyqb5uu2.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser County 55244-1 Sandbeige однорычажный, песочный мрамор (бежевый песок)</name>
<description></description>
</offer>
<offer id="16916" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_grohe_bauloop_23763000_odnorychazhnyy_khrom_23763000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=16916</url>
<price>12650</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d4f/7ccmr1oktpm8lnhvj3weg4gkl5oayj8q.jpg</picture>
<name>Смеситель для кухни (мойки) GROHE BauLoop 23763000 однорычажный, хром</name>
<description></description>
</offer>
<offer id="17084" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h04_f4104_odnorychazhnyy_khrom_f4104/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=17084</url>
<price>4255</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c89/e59nrldq20g5g77q2nm79y05ryt3vs5p.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H04 F4104 однорычажный, хром</name>
<description></description>
</offer>
<offer id="17397" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_decor_40144_5_silver_so_vstroennym_fil_trom_kranom_pod_pit_evuyu_v/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=17397</url>
<price>13915</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/071/i2dqndpmyqrjj3jw3gzrmx0qjemz72yd.png</picture>
<name>Смеситель для кухни (мойки) Kaiser Decor 40144-5 silver  со встроенным фильтром (краном) под питьевую воду, однорычажный,</name>
<description></description>
</offer>
<offer id="17557" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frap_h19_f4219_dvukhrychazhnyy_khrom_f4219/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=17557</url>
<price>3105</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4e2/rmvit52kul76ondh8pipo0aqcbb10l8l.jpg</picture>
<name>Смеситель для кухни (мойки) FRAP H19 F4219 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="17889" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frud_r104_r41104_odnorychazhnyy_khrom_r41104/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=17889</url>
<price>2645</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/93b/2pcjxlaxb2sh24r2sh7lyqd1jcs1udq5.jpg</picture>
<name>Смеситель для кухни (мойки) Frud R104 R41104 однорычажный, хром</name>
<description></description>
</offer>
<offer id="18222" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_county_66231_66233_odnorychazhnyy_khrom_66231_66233/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=18222</url>
<price>5946</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d52/3izmxqpmvmo8h1ow0n7nl0tgp4kzf7v0.jpg</picture>
<name>Смеситель для кухни (мойки) Kaiser County 66231/66233 однорычажный, хром</name>
<description></description>
</offer>
<offer id="19601" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_frud_r_054_r43054_so_vstroennym_fil_trom_kranom_pod_pit_evuyu_vodu_odnory/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=19601</url>
<price>6900</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/52f/51mbjdikmmeyiiv55d03jje9heqiwlfn.png</picture>
<name>Смеситель для кухни (мойки) FRUD R 054 R43054 со встроенным фильтром (краном) под питьевую воду, однорычажный, хром</name>
<description></description>
</offer>
<offer id="19688" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_kukhni/smesitel_dlya_kukhni_moyki_kaiser_leon_19300_leon_19300_odnorychazhnyy_khrom_19300/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_kukhni&amp;utm_term=19688</url>
<price>6705</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>980</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b2d/5zmrg9920oq9sbraiy87vqwfsiu7pgt8.png</picture>
<name>Смеситель для кухни (мойки) Kaiser Leon 19300 Leon 19300 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14718" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_1_3_4_g_g_viega_320683_320683/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=14718</url>
<price>2765</price>
<purchase_price>12</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/aa6/gmwnwyhdmx2j1bisbjb8scmntfgpnzoo.jpg</picture>
<name>Уголок бронза  1 - 3/4 г/г  Viega 320683</name>
<description></description>
</offer>
<offer id="17776" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_3_4_1_2_g_g_viega_320669_320669/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=17776</url>
<price>1567</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/aa6/gmwnwyhdmx2j1bisbjb8scmntfgpnzoo.jpg</picture>
<name>Уголок бронза  3/4 - 1/2 г/г  Viega 320669</name>
<description></description>
</offer>
<offer id="18499" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_45_1_g_g_viega_320652_320652/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18499</url>
<price>2218</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fd/6n7cetwva458habr0kyzb1butene0r3v.jpg</picture>
<name>Уголок бронза 45°  1&quot; г/г     Viega 320652</name>
<description></description>
</offer>
<offer id="18504" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_45_3_4_g_g_viega_320645_320645/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18504</url>
<price>2001</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fd/6n7cetwva458habr0kyzb1butene0r3v.jpg</picture>
<name>Уголок бронза 45°   3/4 г/г     Viega 320645</name>
<description></description>
</offer>
<offer id="18507" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_1_sh_sh_viega_317997_317997/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18507</url>
<price>2688</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ba6/rk0za4qam52w816j9kf7b7yjra8qsx09.jpg</picture>
<name>Уголок бронза  1&quot; ш/ш  Viega 317997</name>
<description></description>
</offer>
<offer id="18526" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_1_g_g_viega_269234_269234/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18526</url>
<price>1314</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bca/lly4z13qz2o15slp4agwora93d71d5uy.jpg</picture>
<name>Уголок бронза  1&quot; г/г   Viega 269234</name>
<description></description>
</offer>
<offer id="18529" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_45_1_2_g_g_viega_320690_320690/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18529</url>
<price>1205</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fd/6n7cetwva458habr0kyzb1butene0r3v.jpg</picture>
<name>Уголок бронза 45°   1/2 г/г     Viega 320690</name>
<description></description>
</offer>
<offer id="18582" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/ugolki_viega/ugolok_bronza_3_4_sh_sh_viega_317980_317980/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_viega&amp;utm_term=18582</url>
<price>1521</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>988</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ba6/rk0za4qam52w816j9kf7b7yjra8qsx09.jpg</picture>
<name>Уголок бронза   3/4 ш/ш     Viega 317980</name>
<description></description>
</offer>
<offer id="15253" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevye_shlangi/dushevoy_shlang_grohe_relexaflex_gladkiy_1750_mm_khrom_28154001_28154001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevye_shlangi&amp;utm_term=15253</url>
<price>2783</price>
<purchase_price>10</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>992</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/eff/9x83y5c3ppt8fdubwymwwgnp2izlbzm7.jpg</picture>
<name>Душевой шланг GROHE Relexaflex гладкий, 1750 мм, хром 28154001</name>
<description></description>
</offer>
<offer id="15622" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevye_shlangi/shlang_dlya_dusha_1_75_m_kaiser_luxus_usilennyy_0024_khrom_art0024/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevye_shlangi&amp;utm_term=15622</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>992</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1a2/2u59ksl9b9n2xpocyt6pe4hnk108qnbn.jpg</picture>
<name>Шланг для душа 1,75 м Kaiser Luxus усиленный 0024 Хром</name>
<description></description>
</offer>
<offer id="16493" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevye_shlangi/shlang_dlya_dusha_leyki_vydvizhnoy_3_8_gayka_x_1_2_gayka_2m_dlya_vstroennykh_smesiteley_na_bort_vann/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevye_shlangi&amp;utm_term=16493</url>
<price>3163</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>992</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/61e/xweyy166yovrdzci1ke62e7tinkodb0i.jpg</picture>
<name>Шланг для душа (лейки) выдвижной 3/8&quot; (гайка) x 1/2&quot; (гайка), 2м, для встроенных смесителей на борт ванны (джакузи) ALEXKROS 1/2 х 3/8 IG гайка</name>
<description></description>
</offer>
<offer id="16516" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevye_shlangi/shlang_dlya_dusha_leyki_vydvizhnoy_3_8_shtutser_x_1_2_gayka_2m_dlya_vstroennykh_smesiteley_na_bort_v/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevye_shlangi&amp;utm_term=16516</url>
<price>3163</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>992</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/342/l64n8mubgw86fdfencm5rdeb6z13s2zc.jpg</picture>
<name>Шланг для душа (лейки) выдвижной 3/8&quot; (штуцер) x 1/2&quot; (гайка), 2м, для встроенных смесителей на борт ванны (джакузи) ALEXKROS 1/2 х 3/8 AG штуцер</name>
<description></description>
</offer>
<offer id="17035" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevye_shlangi/shlang_dlya_dusha_leyki_vydvizhnoy_m15x1mm_shtutser_metricheskiy_x_1_2_gayka_2m_alexkros_dlya_smesit/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevye_shlangi&amp;utm_term=17035</url>
<price>3163</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>992</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/342/l64n8mubgw86fdfencm5rdeb6z13s2zc.jpg</picture>
<name>Шланг для душа (лейки) выдвижной М15x1мм (штуцер метрический) x 1/2&quot; (гайка), 2м, ALEXKROS для смесителей кухонных, парикмахерских, на борт ванны (джакузи)</name>
<description></description>
</offer>
<offer id="14586" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/mufty_belye/belaya_polipropilenovaya_mufta_f_63_2_vnut_pod_klyuch_spk_2095m1_063063/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_belye&amp;utm_term=14586</url>
<price>1710</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>993</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5ad/16hosz7d6x85vh0683m2li99flwmhw7t.jpg</picture>
<name>БЕЛАЯ  ПОЛИПРОПИЛЕНОВАЯ МУФТА  ф 63 - 2&quot; внут. ПОД КЛЮЧ SPK</name>
<description></description>
</offer>
<offer id="15040" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/mufty_belye/belaya_polipropilenovaya_mufta_f_63_2_nar_pod_klyuch_spk_2105m5_063063/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_belye&amp;utm_term=15040</url>
<price>1783</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>993</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9e9/3msspjox3l8w4uknonw5ebrkpcf2ri6d.jpg</picture>
<name>БЕЛАЯ ПОЛИПРОПИЛЕНОВАЯ МУФТА  ф 63 - 2&quot; нар. ПОД КЛЮЧ SPK</name>
<description></description>
</offer>
<offer id="18964" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/mufty_belye/belaya_polipropilenovaya_mufta_f_50_11_2_nar_pod_klyuch_spk_2105m5_050050/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_belye&amp;utm_term=18964</url>
<price>1162</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>993</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9e9/3msspjox3l8w4uknonw5ebrkpcf2ri6d.jpg</picture>
<name>БЕЛАЯ ПОЛИПРОПИЛЕНОВАЯ МУФТА  ф 50 - 11/2 нар. ПОД КЛЮЧ SPK</name>
<description></description>
</offer>
<offer id="16712" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/krany_serye/fv_plast_kran_sharovoy_polipropilenovyy_f_50_ruchka_pp_r_seryy_301050_aa271050000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_serye&amp;utm_term=16712</url>
<price>2986</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>997</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/332/wf7qjpfmms4ektfoe0jxihbesvhbelz6.jpeg</picture>
<name>FV-Plast Кран шаровой полипропиленовый ф 50 ручка PP-R  серый 301050</name>
<description></description>
</offer>
<offer id="16889" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/krany_serye/fv_plast_kran_sharovoy_polipropilenovyy_f_40_ruchka_pp_r_seryy_301040_aa271040000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_serye&amp;utm_term=16889</url>
<price>1954</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>997</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/332/wf7qjpfmms4ektfoe0jxihbesvhbelz6.jpeg</picture>
<name>FV-Plast Кран шаровой полипропиленовый ф 40 ручка PP-R  серый 301040</name>
<description></description>
</offer>
<offer id="16890" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/krany_serye/fv_plast_kran_sharovoy_polipropilenovyy_f_32_ruchka_pp_r_seryy_301032_aa271032000z/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_serye&amp;utm_term=16890</url>
<price>1478</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>997</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/332/wf7qjpfmms4ektfoe0jxihbesvhbelz6.jpeg</picture>
<name>FV-Plast Кран шаровой полипропиленовый ф 32 ручка PP-R  серый 301032</name>
<description></description>
</offer>
<offer id="15264" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_valtec_vt_085_n_0407_1_2_vr_membrannyy_s_otverstiem_pod_manometr_vt_085_n_0407/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=15264</url>
<price>4301</price>
<purchase_price>2291</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/416/n2qs2gktrxfqu25eap1rfuwswe4pmv27.jpg</picture>
<name>Редуктор давления VALTEC (VT.085.N.0407) 1/2 ВР мембранный с отверстием под манометр</name>
<description></description>
</offer>
<offer id="16112" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_vv_itap_361_3_4_s_otverstiem_pod_manometr_maks_davl_15_bar_zavodskaya_nastroyka_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=16112</url>
<price>2227</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4f4/0pytx93lnozedhwmq5n0d0vzkholpopc.jpg</picture>
<name>Редуктор давления ВВ ITAP 361 3/4&quot; с отверстием под манометр, макс. давл. 15 бар (заводская настройка 3 бар)</name>
<description></description>
</offer>
<offer id="16113" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_vv_itap_361_1_2_s_otverstiem_pod_manometr_maks_davl_15_bar_zavodskaya_nastroyka_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=16113</url>
<price>2018</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f6a/8rlnft4emo4qk6n0w1slylsy87hm1kua.jpg</picture>
<name>Редуктор давления ВВ ITAP 361 1/2&quot; с отверстием под манометр, макс. давл. 15 бар (заводская настройка 3 бар)</name>
<description></description>
</offer>
<offer id="16115" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_vv_itap_360_1_2_maks_davl_15_bar_zavodskaya_nastroyka_3_bar_360_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=16115</url>
<price>2018</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/42e/c5b80i4huw5ssh0t3kcspcuz13edgx9q.jpg</picture>
<name>Редуктор давления ВВ ITAP 360 1/2&quot; макс. давл. 15 бар (заводская настройка 3 бар)</name>
<description></description>
</offer>
<offer id="16196" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/anti_shok_kompensator_gasitel_gidroudarov_far_1_2_nr_fa_2895_12_davl_maks_50_bar_fa_2895_12/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=16196</url>
<price>3897</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/ftnikm2inbdeaa4g5d3bb554g5nlrsdc.jpg</picture>
<name>&quot;Анти-шок&quot; Компенсатор  ( гаситель ) гидроударов FAR 1/2&quot; НР FA 2895 12 (давл. макс. 50 бар)</name>
<description></description>
</offer>
<offer id="17073" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/membrannyy_kompensator_gasitel_gidroudarov_valtec_0_162l_nerzh_valtec_vt_car19_i_04001_vt_car19_i_04/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=17073</url>
<price>2847</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1f1/qow8n4myaxirx73pcrd82q2ownscck6w.jpg</picture>
<name>Мембранный компенсатор ( гаситель ) гидроударов VALTEC 0,162л. (нерж.) VALTEC VT.CAR19.I.04001</name>
<description></description>
</offer>
<offer id="17240" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_honeywell_resideo_braukmann_d04fm_1_2_a_s_otverstiem_pod_manometr_maks_davl_16_ba/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=17240</url>
<price>3062</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/224/3kqf2eov9zwa7ig3ykubvs1tatzvrnsr.jpg</picture>
<name>Редуктор давления Honeywell Resideo Braukmann D04fm-1/2&quot;A с отверстием под манометр, макс. давл. 16 бар (регулировка 1,5-6 бар)</name>
<description></description>
</offer>
<offer id="17477" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/kompensator_gasitel_gidroudarov_uni_fitt_n_1_2_nikelirovannyy_260n2400_maks_davl_50_bar_260n2400/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=17477</url>
<price>2619</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2c1/vqbcvdb71yulx1rv73i9xreaj9y69jk0.jpg</picture>
<name>Компенсатор  ( гаситель ) гидроударов UNI-FITT Н 1/2&quot; никелированный 260N2400 (макс. давл. 50 бар)</name>
<description></description>
</offer>
<offer id="17488" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_vv_itap_143_3_4_s_otverstiem_pod_aksial_nyy_manometr_maks_davl_25_bar_zavodskaya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=17488</url>
<price>4592</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b9d/wa1fhy2bpo8ac8mwkygys8rvh2xuk54g.jpg</picture>
<name>Редуктор давления ВВ ITAP 143 3/4&quot; с отверстием под аксиальный манометр, макс. давл. 25 бар (заводская настройка 3 бар)</name>
<description></description>
</offer>
<offer id="17848" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/regulyatory_davleniya/reduktor_davleniya_vv_millennium_rdff1212_1_2_s_otverstiem_pod_manometr_rdff1212/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=regulyatory_davleniya&amp;utm_term=17848</url>
<price>1392</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>998</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d7b/cm3f976yi2cs7qg0ye29m56unoamhz5i.png</picture>
<name>Редуктор давления ВВ Millennium RDFF1212 1/2&quot; с отверстием под манометр</name>
<description></description>
</offer>
<offer id="14720" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_mikrolift_pin_7_mm_dlya_kryshki_siden_ya_unitaza_nizhnee_s_ekstsentrikom_haro_kharo_f0202y/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=14720</url>
<price>1909</price>
<purchase_price>561</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ef2/25p7xtyjejqftaifejh7kbo9lcy77jvj.jpg</picture>
<name>Крепление микролифт (пин 7 мм) для крышки-сиденья унитаза, нижнее, с эксцентриком Haro (Харо) F0202Y 410167</name>
<description></description>
</offer>
<offer id="16965" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_mikrolift_pin_10_mm_dlya_kryshki_siden_ya_unitaza_verkhnee_dlya_skrytogo_montazha_s_ekstse/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=16965</url>
<price>1909</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a4b/7f01fvmn7nqogh7ky7uyj7o5ay51aml3.jpg</picture>
<name>Крепление микролифт (пин 10 мм) для крышки-сиденья унитаза верхнее (для скрытого монтажа), с эксцентриком Haro (Харо) C4501H 408412</name>
<description></description>
</offer>
<offer id="16968" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_dlya_kryshki_siden_ya_unitaza_standartnoe_verkhnee_dlya_skrytogo_montazha_metallicheskoe_h/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=16968</url>
<price>1674</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/48e/jsg13woseyx4v3f6zf39enjp8uhk5k46.jpg</picture>
<name>Крепление для крышки-сиденья унитаза стандартное, верхнее (для скрытого монтажа), металлическое Haro (Харо) D4002H 404942</name>
<description></description>
</offer>
<offer id="17015" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_dlya_kryshki_siden_ya_unitaza_standartnoe_verkhnee_dlya_skrytogo_montazha_metallicheskoe_s/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=17015</url>
<price>1674</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/429/9zi7d59y0n9j9gh7huo6abe30lsydyv3.jpg</picture>
<name>Крепление для крышки-сиденья унитаза стандартное, верхнее (для скрытого монтажа), металлическое, с эксцентриком Haro (Харо) D2402H 404746</name>
<description></description>
</offer>
<offer id="17079" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_mikrolift_pin_7_mm_dlya_kryshki_siden_ya_unitaza_verkhnee_dlya_skrytogo_montazha_s_ekstsen/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=17079</url>
<price>2226</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4be/rydtp77tclxfk14mvwl463zfoc5qpzzw.jpg</picture>
<name>Крепление микролифт (пин 7 мм) для крышки-сиденья унитаза, верхнее (для скрытого монтажа), с эксцентриком Haro (Харо) F4302G 409524</name>
<description></description>
</offer>
<offer id="18188" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_mikrolift_pin_10_mm_dlya_kryshki_siden_ya_unitaza_nizhnee_s_ekstsentrikom_haro_kharo_c4502/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=18188</url>
<price>1909</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2dc/099qa1x1bqdbzz8bl74hyrejwjv9q2wf.jpg</picture>
<name>Крепление микролифт (пин 10 мм) для крышки-сиденья унитаза нижнее, с эксцентриком Haro (Харо) C4502Y 408289</name>
<description></description>
</offer>
<offer id="19269" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/unitazy_i_aksessuary/krepezh_dlya_siden_ya_unitaza/kreplenie_mikrolift_pin_10_mm_dlya_kryshki_siden_ya_unitaza_nizhnee_s_ekstsentrikom_pin_na_shaybe_po/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krepezh_dlya_siden_ya_unitaza&amp;utm_term=19269</url>
<price>1909</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1001</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/062/o6910m8rper7jpfrogg415q6x2wjle9g.png</picture>
<name>Крепление микролифт (пин 10 мм) для крышки-сиденья унитаза нижнее, с эксцентриком, пин на шайбе по центру Haro (Харо) C0202Y 404146</name>
<description></description>
</offer>
<offer id="19721" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_stout/vodorozetki_stout/elsen_efa25_20_12wbd_ugol_nik_nastennyy_s_krepleniem_16_x_rp_1_2_kh_16_efa25_20_12wbd/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodorozetki_stout&amp;utm_term=19721</url>
<price>1898</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1002</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/414/viwiu0pvsahpx034e9b83plp4uu5bwf3.png</picture>
<name>Elsen EFA25.20-12WBD Угольник настенный с креплением 16 x Rp 1/2&quot; х 16</name>
<description></description>
</offer>
<offer id="14969" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/schetchiki_dlya_vody/schetchik_dlya_kholodnoy_vody_1_2_universal_nyy_itelma_wfk20_d080_bez_amerikanok_du_15mm_l_80mm_mezh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=schetchiki_dlya_vody&amp;utm_term=14969</url>
<price>2088</price>
<purchase_price>729</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1005</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c22/2tl5qzfqwcxf62zqlf52o89yeqvasju3.jpg</picture>
<name>Счетчик для холодной воды 1/2 УНИВЕРСАЛЬНЫЙ Itelma WFK20.D080 (без американок) Ду=15мм, L=80мм (межповерочный интервал 6 лет)</name>
<description></description>
</offer>
<offer id="16267" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/schetchiki_dlya_vody/schetchik_dlya_goryachey_vody_1_2_universal_nyy_itelma_wfw20_d080_bez_amerikanok_du_15mm_l_80mm_mezh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=schetchiki_dlya_vody&amp;utm_term=16267</url>
<price>2088</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1005</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/82c/0s2oqlxrx0i42dydl23mvxk2iy19vdze.jpg</picture>
<name>Счетчик для горячей воды 1/2 УНИВЕРСАЛЬНЫЙ Itelma WFW20.D080 (без американок) Ду=15мм, L=80мм (межповерочный интервал 6 лет)</name>
<description></description>
</offer>
<offer id="17245" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/schetchiki_dlya_vody/schetchik_dlya_vody_univer_impul_snyy_1_2_bez_amerikanok_valtec_vlf_15u_il_vlf_15u_il/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=schetchiki_dlya_vody&amp;utm_term=17245</url>
<price>1282</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1005</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/adf/owqmljf0pv29ohra828eqlqf07sfb9i6.jpeg</picture>
<name>Счетчик  для воды универ. импульсный  1/2 (без американок)  VALTEC VLF-15U-IL</name>
<description></description>
</offer>
<offer id="15685" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/vnutrennyaya_kanalizatsiya_ostendorf/ostendorf_truba_kanalizatsionnyy_f_90_kh_1_8_kh_2000_mm_114060_ostendorf/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vnutrennyaya_kanalizatsiya_ostendorf&amp;utm_term=15685</url>
<price>1428</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1008</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a71/7f47t0kdot4vjwfp3v3mu8dcpvu5429n.jpg</picture>
<name>(Ostendorf) ТРУБА  канализационный  ф 90 х 1,8 х 2000 мм</name>
<description></description>
</offer>
<offer id="16191" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/vnutrennyaya_kanalizatsiya_ostendorf/mufta_ostendorf_vstavnaya_vosstanovitel_rastruba_dlya_kanalizatsionnoy_truby_dn_110/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vnutrennyaya_kanalizatsiya_ostendorf&amp;utm_term=16191</url>
<price>1747</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1008</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/fd1/yhr927lpzfveejh69ueya7qpfhj3kbe9.png</picture>
<name>Муфта Ostendorf вставная (восстановитель раструба) для канализационной трубы DN 110</name>
<description></description>
</offer>
<offer id="18218" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/vnutrennyaya_kanalizatsiya_ostendorf/ostendorf_troynik_kanalizatsionnyy_vosstanovitel_rastruba_f_110_110_90_115740_115740/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vnutrennyaya_kanalizatsiya_ostendorf&amp;utm_term=18218</url>
<price>5043</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1008</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/233/i7zyc7g7t1zbjo5nqxyoqaym3budrf9k.jpg</picture>
<name>(Ostendorf) ТРОЙНИК  канализационный восстановитель раструба ф 110 - 110 - 90° 115740</name>
<description></description>
</offer>
<offer id="14735" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/hl_405_hutterer_lechner_vstroennyy_sifon_dlya_stiral_noy_ili_posudomoechnoy_mashiny_hl405/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=14735</url>
<price>8525</price>
<purchase_price>4022</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0f0/rsvac2kdhu84jadory0eoyq5s9kt5jb9.jpg</picture>
<name>HL 405 (Hutterer Lechner) Встроенный сифон для стиральной или посудомоечной машины</name>
<description></description>
</offer>
<offer id="16987" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/vstraivaemyy_sifon_dlya_stiral_noy_mashiny_dlya_posudomoechnoy_mashiny_viega_452452_452452/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=16987</url>
<price>2438</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fe3/m5k1nwmyxix56yhvja04xohip1tqccst.jpg</picture>
<name>Встраиваемый сифон для стиральной машины, для посудомоечной машины viega 452452</name>
<description></description>
</offer>
<offer id="17002" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/hl_905_4_hutterer_lechner_kryshka_seraya_k_hl_905_hl_905_4/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=17002</url>
<price>2098</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d46/o86xopmxy14szl4ww55yp8tcfvqtmey6.jpg</picture>
<name>HL 905.4 (Hutterer Lechner) Крышка серая к HL 905</name>
<description></description>
</offer>
<offer id="19115" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/hl_4000_1_hutterer_lechner_komplekt_dlya_odnoy_stiral_noy_mashiny_ustanavlivaetsya_k_korpusu_hl_4000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=19115</url>
<price>4715</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/111/sndjyko0q8ioj61qykwq4j6yme00m5w4.jpg</picture>
<name>HL 4000.1 (Hutterer Lechner) Комплект для одной стиральной машины, устанавливается к корпусу HL 4000.0</name>
<description></description>
</offer>
<offer id="19615" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/alcaplast_koleno_s_dvumya_shtutserami_i_obratnymi_klapanami_pryamoe_podklyuchenie_k_kanalizatsionnoy/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=19615</url>
<price>1771</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e77/6qna12leis4i138oua6nhk9rkyxnabl2.png</picture>
<name>Alcaplast  Колено с двумя штуцерами и обратными клапанами прямое подключение к канализационной трубе ? 40 / 32 мм  P155Z</name>
<description></description>
</offer>
<offer id="19621" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/komplektuyushchie_dlya_stiral_nykh_mashin/alcaplast_koleno_s_dvumya_shtutserami_i_obratnymi_klapanami_g1_17_23_mm_p148z_p_148z/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_stiral_nykh_mashin&amp;utm_term=19621</url>
<price>1607</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1010</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/95c/kr8kgo3ncwcd888616wr2dyhc0fmvpqf.jpg</picture>
<name>Alcaplast  Колено с двумя штуцерами и обратными клапанами G1 / 17-23 мм P148Z</name>
<description></description>
</offer>
<offer id="15178" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/instrument_dlya_sshitogo_polietilena_rehau/mekhanicheskiy_press_instrument_apparat_universal_nyy_vieir_dlya_trub_i_fitingov_rehau/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=instrument_dlya_sshitogo_polietilena_rehau&amp;utm_term=15178</url>
<price>20700</price>
<purchase_price>12729</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1011</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f95/cav0tw9uyec243j8gji880fq4kt5h3mi.jpg</picture>
<name>Механический пресс инструмент (аппарат) универсальный ViEiR для труб и фитингов Rehau</name>
<description></description>
</offer>
<offer id="15160" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/termosmesiteli/termostaticheskiy_smesitel_nyy_klapan_stout_3_4_nr_20_43_s_kv_1_6_svm_0120_164320_svm_0120_164320/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=termosmesiteli&amp;utm_term=15160</url>
<price>7590</price>
<purchase_price>44</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1014</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/42a/6fyws4ee8utjil9yxz0k22pyt5onm5p1.jpg</picture>
<name>Термостатический смесительный клапан STOUT 3/4 НР, 20-43°С, KV 1.6 SVM-0120-164320</name>
<description></description>
</offer>
<offer id="16412" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/termosmesiteli/termostaticheskiy_smesitel_nyy_klapan_termosmesitel_3_4_watts_ind_10017418_aquamix_diap_reg_32_50_s/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=termosmesiteli&amp;utm_term=16412</url>
<price>8223</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1014</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/a3e/cu4kh82gf4tq9xt3vdycqjgu8q6hc0jb.jpeg</picture>
<name>Термостатический смесительный клапан (термосмеситель) 3/4&quot; WATTS Ind 10017418 AQUAMIX диап. рег. 32-50°С</name>
<description></description>
</offer>
<offer id="19063" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/termosmesiteli/trekhkhodovoy_smesitel_nyy_klapan_termostaticheskiy_esbe_vta321_31100800_muftovyy_vr_du_20_3_4_kvs_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=termosmesiteli&amp;utm_term=19063</url>
<price>9488</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1014</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/51c/9lrfy5fzg1ytpytoowx2bnx9v7ks9ww1.png</picture>
<name>Трехходовой смесительный клапан термостатический Esbe VTA321 31100800 муфтовый (ВР), Ду 20 (3/4&quot;), Kvs 1.6</name>
<description></description>
</offer>
<offer id="16009" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/kontrgayki_latunnye/kontrgayka_latunnaya_s_bortikom_tiemme_2_1583_1500332/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kontrgayki_latunnye&amp;utm_term=16009</url>
<price>1653</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1015</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/fa5/qb2tspz9he9q6adsnkp5uwkizyk7wdnw.jpeg</picture>
<name>Контргайка латунная с бортиком TIEMME 2 1583</name>
<description></description>
</offer>
<offer id="18505" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/zaglushki_viega/zaglushka_bronza_1_vnutrennyaya_viega_268367_268367/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zaglushki_viega&amp;utm_term=18505</url>
<price>1235</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1018</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b4f/c5v0nu5l51hl7sldhd4553we6hq34399.jpg</picture>
<name>Заглушка бронза  1&quot; Внутренняя.  Viega 268367</name>
<description></description>
</offer>
<offer id="16624" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/troyniki_viega/troynik_bronza_1_1_2_1_g_g_g_viega_362515_362515/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_viega&amp;utm_term=16624</url>
<price>2583</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1020</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2aa/l1myeg6a4oj16qeocatpn7may53rgzyd.jpg</picture>
<name>Тройник  бронза  1 - 1/2 - 1 г/г/г  Viega 362515</name>
<description></description>
</offer>
<offer id="16637" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/troyniki_viega/troynik_bronza_3_4_1_2_3_4_g_g_g_viega_264468_3130_3_4_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_viega&amp;utm_term=16637</url>
<price>1205</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1020</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2aa/l1myeg6a4oj16qeocatpn7may53rgzyd.jpg</picture>
<name>Тройник  бронза  3/4 - 1/2 - 3/4 г/г/г  Viega 264468</name>
<description></description>
</offer>
<offer id="18519" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/troyniki_viega/troynik_bronza_3_4_g_g_g_viega_264246_264246/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_viega&amp;utm_term=18519</url>
<price>1171</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1020</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/0d9/50f2su36g2sd27yww0l336dfl3acdyp3.jpeg</picture>
<name>Тройник  бронза  3/4 г/г/г  Viega 264246</name>
<description></description>
</offer>
<offer id="18570" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/troyniki_viega/troynik_bronza_1_g_g_g_viega_264260_264260/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_viega&amp;utm_term=18570</url>
<price>1601</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1020</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/0d9/50f2su36g2sd27yww0l336dfl3acdyp3.jpeg</picture>
<name>Тройник  бронза 1&quot; г/г/г  Viega 264260</name>
<description></description>
</offer>
<offer id="15020" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_bide/smesitel_odnorychazhnyy_dlya_bide_kaiser_55088_55088/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_bide&amp;utm_term=15020</url>
<price>7590</price>
<purchase_price>2619</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1024</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/558/oudw32tumnupz0vd2jxpfn6ghgoq2mei.jpg</picture>
<name>Смеситель однорычажный для биде Kaiser 55088</name>
<description></description>
</offer>
<offer id="18363" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/ekstsentriki_khrom/ekstsentrik_khrom_s_otrazh_1_2_3_4_6sm_remer_9012346rr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ekstsentriki_khrom&amp;utm_term=18363</url>
<price>1551</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1027</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/86b/vxsyf3as4yzd33h4pxk16h0cpack0lh5.jpg</picture>
<name>ЭКСЦЕНТРИК  ХРОМ С ОТРАЖ. 1/2 - 3/4  ( 6см. ) REMER</name>
<description></description>
</offer>
<offer id="18431" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/ekstsentriki_khrom/ekstsentrik_khrom_s_otrazh_1_2_3_4_8sm_remer_9012348rr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ekstsentriki_khrom&amp;utm_term=18431</url>
<price>1758</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1027</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/86b/vxsyf3as4yzd33h4pxk16h0cpack0lh5.jpg</picture>
<name>ЭКСЦЕНТРИК  ХРОМ С ОТРАЖ. 1/2 - 3/4 ( 8см. )  REMER</name>
<description></description>
</offer>
<offer id="18475" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/ekstsentriki_khrom/ekstsentrik_khrom_s_otrazh_1_2_3_4_4sm_remer_9012344rr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ekstsentriki_khrom&amp;utm_term=18475</url>
<price>1448</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1027</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/86b/vxsyf3as4yzd33h4pxk16h0cpack0lh5.jpg</picture>
<name>ЭКСЦЕНТРИК  ХРОМ С  ОТРАЖ. 1/2 - 3/4 ( 4см.)  REMER</name>
<description></description>
</offer>
<offer id="14482" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_vv_3_4_makhovik_iz_alyuminiya_1076106_1076106/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14482</url>
<price>2148</price>
<purchase_price>10</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/183/3ujewbmemp2a3u8q8x8r6bgbqj890x73.jpg</picture>
<name>Кран шаровой Oventrop Optibal ВВ 3/4&quot; маховик из алюминия 1076106</name>
<description></description>
</offer>
<offer id="14634" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_1_2_makhovik_plastmassovyy_1077304_1077304/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14634</url>
<price>1802</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8d4/p5v1vb25nlyysmvy9468ifyz42tavo2p.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 1/2&quot; маховик пластмассовый 1077304</name>
<description></description>
</offer>
<offer id="14682" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_vv_3_4_makhovik_plastmassovyy_1077106_1077106/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14682</url>
<price>2414</price>
<purchase_price>11</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/37c/twka79rcrk3qktcftvo2x0dc91v9lvph.jpg</picture>
<name>Кран шаровой Oventrop Optibal ВВ 3/4&quot; маховик пластмассовый 1077106</name>
<description></description>
</offer>
<offer id="14809" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_vv_1_makhovik_plastmassovyy_1077108_1077108/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14809</url>
<price>3506</price>
<purchase_price>14</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/37c/twka79rcrk3qktcftvo2x0dc91v9lvph.jpg</picture>
<name>Кран шаровой Oventrop Optibal ВВ 1&quot; маховик пластмассовый 1077108</name>
<description></description>
</offer>
<offer id="14838" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_vv_1_2_makhovik_plastmassovyy_1077104_1077104/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14838</url>
<price>1625</price>
<purchase_price>7</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/37c/twka79rcrk3qktcftvo2x0dc91v9lvph.jpg</picture>
<name>Кран шаровой Oventrop Optibal ВВ 1/2&quot; маховик пластмассовый 1077104</name>
<description></description>
</offer>
<offer id="14995" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_s_raz_yemnym_soedineniem_amerikanka_oventrop_optibal_nv_1_2_makhovik_iz_alyuminiya_107/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=14995</url>
<price>3107</price>
<purchase_price>11</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a9b/j4jt0j9kk0zd9tzdk8t20kxpqhk7wmyb.jpg</picture>
<name>Кран шаровой с разъёмным соединением (американка) Oventrop Optibal НВ 1/2&quot; маховик из алюминия 1075804</name>
<description></description>
</offer>
<offer id="15036" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_3_4_makhovik_ruchka_rychag_1076206_1076206/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=15036</url>
<price>2414</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9f5/secia802ej2gy5ga6a2rimcyczel58f5.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 3/4&quot; маховик ручка-рычаг 1076206</name>
<description></description>
</offer>
<offer id="15684" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_s_raz_yemnym_soedineniem_amerikanka_oventrop_optibal_nv_1_2_makhovik_plastmassovyy_107/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=15684</url>
<price>3107</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/61b/zkhgd4eusic0f327gib03ih1bz4m4eys.jpg</picture>
<name>Кран шаровой с разъёмным соединением (американка) Oventrop Optibal НВ 1/2&quot; маховик пластмассовый 1075704</name>
<description></description>
</offer>
<offer id="15776" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_3_4_makhovik_iz_alyuminiya_1076306_1076306/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=15776</url>
<price>2414</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/109/qyd09dtcy5ivc3g373ctpdc3o58x252w.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 3/4&quot; маховик из алюминия 1076306</name>
<description></description>
</offer>
<offer id="16198" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_vv_1_ploskiy_rychag_oregon_seriya_300_polnyy_prokhod_03010156_03010156/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16198</url>
<price>1871</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/822/8e03gkri418kdkmxasg9185ou8gkc91o.jpg</picture>
<name>Кран шаровой Bugatti ВВ 1&quot; плоский рычаг Oregon серия 301 полный проход 03010156</name>
<description></description>
</offer>
<offer id="16218" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_1_makhovik_iz_alyuminiya_1076308_1076308/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16218</url>
<price>3506</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/109/qyd09dtcy5ivc3g373ctpdc3o58x252w.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 1&quot; маховик из алюминия 1076308</name>
<description></description>
</offer>
<offer id="16681" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_s_raz_yemnym_soedineniem_amerikanka_nv_3_4_babochka_new_jersey_seriya_922_poln/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16681</url>
<price>1442</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a5e/t14lxr3qtqcoupnccoojasf7uj7nzqks.jpg</picture>
<name>Кран шаровой Bugatti с разъёмным соединением (американка) НВ 3/4&quot; бабочка NEW JERSEY серия 922 полный проход 09220005</name>
<description></description>
</offer>
<offer id="16757" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_1_makhovik_plastmassovyy_1077308_1077308/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16757</url>
<price>3843</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8d4/p5v1vb25nlyysmvy9468ifyz42tavo2p.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 1&quot; маховик пластмассовый 1077308</name>
<description></description>
</offer>
<offer id="16907" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_s_raz_yemnym_soedineniem_amerikanka_nv_1_babochka_oregon_seriya_322_polnyy_pro/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16907</url>
<price>2756</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c26/1idedwuxs0rvf92lmfgo1lqtowtvveft.png</picture>
<name>Кран шаровой Bugatti с разъёмным соединением (американка) НВ 1&quot; бабочка OREGON серия 322 полный проход 03220037</name>
<description></description>
</offer>
<offer id="16908" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_s_raz_yemnym_soedineniem_amerikanka_nv_3_4_babochka_oregon_seriya_322_polnyy_p/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16908</url>
<price>1669</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c26/1idedwuxs0rvf92lmfgo1lqtowtvveft.png</picture>
<name>Кран шаровой Bugatti с разъёмным соединением (американка) НВ 3/4&quot; бабочка OREGON серия 322 полный проход 03220032</name>
<description></description>
</offer>
<offer id="16909" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_s_raz_yemnym_soedineniem_amerikanka_nv_1_2_babochka_oregon_seriya_322_polnyy_p/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16909</url>
<price>1155</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c26/1idedwuxs0rvf92lmfgo1lqtowtvveft.png</picture>
<name>Кран шаровой Bugatti с разъёмным соединением (американка) НВ 1/2&quot; бабочка OREGON серия 322 полный проход 03220027</name>
<description></description>
</offer>
<offer id="16911" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_nv_3_4_babochka_oregon_seriya_307_polnyy_prokhod_03070065_03070065/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16911</url>
<price>1439</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fa1/tooitu1bgufxc8lz7onjqyciu9z2uwo6.png</picture>
<name>Кран шаровой Bugatti НВ 3/4&quot; бабочка Oregon серия 307 полный проход 03070065</name>
<description></description>
</offer>
<offer id="16914" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_vv_3_4_babochka_oregon_seriya_302_polnyy_prokhod_03020067_03020067/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16914</url>
<price>1309</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f59/0s82th6nlx93pq0h3oaj5zi881q9apex.jpg</picture>
<name>Кран шаровой Bugatti ВВ 3/4&quot; бабочка Oregon серия 302 полный проход 03020067</name>
<description></description>
</offer>
<offer id="16956" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_3_4_makhovik_plastmassovyy_1077306_1077306/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=16956</url>
<price>2636</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8d4/p5v1vb25nlyysmvy9468ifyz42tavo2p.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 3/4&quot; маховик пластмассовый 1077306</name>
<description></description>
</offer>
<offer id="17027" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_uglovoy_bugatti_s_raz_yemnym_soedineniem_amerikanka_nv_1_2_babochka_oregon_seriya_594/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=17027</url>
<price>1684</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/59e/n0urq0kocm8k3mlqlkktn9b07jnjn219.jpg</picture>
<name>Кран шаровой УГЛОВОЙ Bugatti с разъёмным соединением (американка) НВ 1/2&quot; бабочка OREGON серия 594 полный проход 05940001</name>
<description></description>
</offer>
<offer id="17603" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_1_2_makhovik_ruchka_rychag_1076204_1076204/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=17603</url>
<price>1625</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9f5/secia802ej2gy5ga6a2rimcyczel58f5.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 1/2&quot; маховик ручка-рычаг 1076204</name>
<description></description>
</offer>
<offer id="17703" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_s_raz_yemnym_soedineniem_amerikanka_oventrop_optibal_nv_3_4_makhovik_iz_alyuminiya_107/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=17703</url>
<price>4109</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a9b/j4jt0j9kk0zd9tzdk8t20kxpqhk7wmyb.jpg</picture>
<name>Кран шаровой с разъёмным соединением (американка) Oventrop Optibal НВ 3/4&quot; маховик из алюминия 1075806</name>
<description></description>
</offer>
<offer id="17892" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_nv_3_4_ploskiy_ruchka_rychag_oregon_seriya_300_polnyy_prokhod_03060099_0306009/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=17892</url>
<price>1485</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3dc/2svht9osncjcjaj1bls14j67jvyklsgd.jpg</picture>
<name>Кран шаровой Bugatti НВ 3/4&quot; плоский ручка-рычаг Oregon серия 300 полный проход 03060099</name>
<description></description>
</offer>
<offer id="18837" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_oventrop_optibal_nv_1_makhovik_ruchka_rychag_1076208_1076208/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=18837</url>
<price>3506</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9f5/secia802ej2gy5ga6a2rimcyczel58f5.jpg</picture>
<name>Кран шаровой Oventrop Optibal НВ 1&quot; маховик ручка-рычаг 1076208</name>
<description></description>
</offer>
<offer id="19628" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_ideal_itap_s_raz_yemnym_soedineniem_amerikanka_nv_1_babochka_098_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=19628</url>
<price>1771</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f62/ka8i5vs9bs3kektsj0cn0h60ha7oirho.jpg</picture>
<name>Кран шаровой IDEAL ITAP с разъёмным соединением (американка) НВ 1&quot; бабочка</name>
<description></description>
</offer>
<offer id="19737" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/sharovye_krany/kran_sharovoy_bugatti_vv_3_4_ploskiy_ruchka_rychag_oregon_seriya_301_polnyy_prokhod_03000169_0300016/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sharovye_krany&amp;utm_term=19737</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1031</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/822/8e03gkri418kdkmxasg9185ou8gkc91o.jpg</picture>
<name>Кран шаровой Bugatti ВВ 3/4&quot; плоский ручка-рычаг Oregon серия 301 полный проход 03000169</name>
<description></description>
</offer>
<offer id="14710" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/komplekt_armatury_slivnaya_nalivnaya_dlya_bachka_unitaza_deco_s_odnim_slivom_podvod_1_2_plastik_oli/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=14710</url>
<price>2283</price>
<purchase_price>850</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/864/hxjga37q4nkjfny3i21c6qa9pna1au53.jpg</picture>
<name>Комплект арматуры сливная/наливная для бачка унитаза DECO с одним сливом, подвод 1/2 пластик OLI 037192</name>
<description></description>
</offer>
<offer id="14788" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/klapan_sliva_tece_a2_9820223_9820223/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=14788</url>
<price>3887</price>
<purchase_price>1709</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ced/kbc4zpfllz0mvntcwkesmny2vrs0e0j3.png</picture>
<name>Клапан слива TECE A2 9820223</name>
<description></description>
</offer>
<offer id="14807" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/geberit_komplekt_armatury_242_397_00_1_242_397_00_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=14807</url>
<price>4566</price>
<purchase_price>2000</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b81/s4hewe5lrtveqrc8r6zl7k1mph5rsj60.png</picture>
<name>Geberit Комплект арматуры 242.397.00.1</name>
<description></description>
</offer>
<offer id="14964" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/kryshka_bachka_unitaza_pod_krugluyu_knopku_sliva_gustavsberg_skandic_gb19299t2800_gb19299t2800/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=14964</url>
<price>1978</price>
<purchase_price>780</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/57f/3fgh0bfl26m9s1v89c96w8xdl72som3i.png</picture>
<name>Крышка бачка унитаза под круглую кнопку слива Gustavsberg Skandic GB19299T2800</name>
<description></description>
</offer>
<offer id="16293" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/dvukhrezhimnaya_knopka_sliva_dlya_unitazov_ifo_cera_ifo_unique_z96609_z96609/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16293</url>
<price>1754</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5bf/j6acikk7nif4menygfwhabk6aidbly0t.jpg</picture>
<name>Двухрежимная кнопка слива для унитазов IFO Cera, IFO Unique Z96609</name>
<description></description>
</offer>
<offer id="16699" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_dlya_bachka_unitaza_c_nizhn_podvodom_3_8_alcaplast_sa2000_s_sa2000_s_3_8_nizh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16699</url>
<price>2622</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/072/wm9polhv67vf23x0vxwialaeccdpmoip.jpg</picture>
<name>Арматура для бачка унитаза c нижн. подводом 3/8 &quot; Alcaplast SA2000/S</name>
<description></description>
</offer>
<offer id="16700" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/vpusknoy_mekhanizm_poplavok_dlya_bachka_unitaza_s_bok_latun_podvodom_1_2_a16_alcaplast_a16_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16700</url>
<price>1401</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fb/imo5nz896rz23fvx6j1r9xxp9phmndai.jpg</picture>
<name>Впускной механизм (поплавок) для бачка унитаза с бок. латун. подводом 1/2 &quot; A16 Alcaplast</name>
<description></description>
</offer>
<offer id="16702" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_dlya_bachka_unitaza_c_bok_podvodom_3_8_alcaplast_sa2000_sa2000_3_8/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16702</url>
<price>2451</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c61/4qiu5bgq126tlfdzoofpf7y8nklby3nj.jpg</picture>
<name>Арматура для бачка унитаза c бок. подводом 3/8 &quot; Alcaplast SA2000</name>
<description></description>
</offer>
<offer id="16703" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_dlya_bachka_unitaza_c_bok_lat_podvodom_1_2_alcaplast_sa2000k_2_sa2000k_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16703</url>
<price>2622</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bd5/ivuar5snciyqq7apyfhos1tt9hucq0uh.jpg</picture>
<name>Арматура для бачка унитаза c бок. лат. подводом 1/2 &quot; Alcaplast SA2000K/2</name>
<description></description>
</offer>
<offer id="16705" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/vpusknoy_mekhanizm_poplavok_dlya_bachka_unitaza_s_bok_lat_podvodom_3_8_a16_alcaplast_a16_3_8/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16705</url>
<price>1401</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fb/imo5nz896rz23fvx6j1r9xxp9phmndai.jpg</picture>
<name>Впускной механизм (поплавок) для бачка унитаза с бок. лат. подводом 3/8 &quot; A16 Alcaplast</name>
<description></description>
</offer>
<offer id="16706" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/vpusknoy_mekhanizm_poplavok_dlya_bachka_unitaza_s_nizhn_lat_podvodom_1_2_a18_alcaplast_a18_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16706</url>
<price>1401</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c55/7ieqcsq5cnb69yspjpw1jwo2tcbbjcdt.gif</picture>
<name>Впускной механизм (поплавок) для бачка унитаза с нижн. лат. подводом 1/2 &quot; A18 Alcaplast</name>
<description></description>
</offer>
<offer id="16708" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/vpusknoy_mekhanizm_poplavok_dlya_bachka_unitaza_s_nizhn_lat_podvodom_3_8_a18_alcaplast_a18_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16708</url>
<price>1401</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c55/7ieqcsq5cnb69yspjpw1jwo2tcbbjcdt.gif</picture>
<name>Впускной механизм (поплавок) для бачка унитаза с нижн. лат. подводом 3/8 &quot; A18 Alcaplast</name>
<description></description>
</offer>
<offer id="16709" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_dlya_bachka_unitaza_c_nizhn_lat_podvodom_1_2_alcaplast_sa2000_sk2_sa2000_sk2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=16709</url>
<price>2622</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/4b2/hamucmpnc7fccfl7wzvckqkzkkf47u9l.jpeg</picture>
<name>Арматура для бачка унитаза c нижн. лат. подводом 1/2 &quot; Alcaplast SA2000/SK2</name>
<description></description>
</offer>
<offer id="17552" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_mekhanizm_smyva_dlya_bachka_unitaza_c_nizhnim_podvodom_1_2_dvukhrezhimnyy_vidima_sevamiks_w/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=17552</url>
<price>2513</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c1c/1n942uprjnrjq5xi0gzp6zgv33ib5mt7.png</picture>
<name>Арматура (механизм смыва) для бачка унитаза c нижним подводом 1/2 &quot;, двухрежимный, Vidima СеваМикс WW969195</name>
<description></description>
</offer>
<offer id="19632" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_s_dvoynoy_knopkoy_dlya_bachka_unitaza_c_nizhn_lat_podvodom_1_2_alcaplast_sa08sk_sa08sk_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=19632</url>
<price>2783</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8d6/rlqt3p5vwmo2w4qengt19muxnoxm96ow.png</picture>
<name>Арматура с двойной кнопкой для бачка унитаза c нижн. лат. подводом 1/2 &quot; Alcaplast SA08SK</name>
<description></description>
</offer>
<offer id="19760" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/armatura_dlya_bachka_unitaza/armatura_s_dvoynoy_knopkoy_dlya_bachka_unitaza_c_bok_lat_podvodom_1_2_alcaplast_sa08k_sa08k_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=armatura_dlya_bachka_unitaza&amp;utm_term=19760</url>
<price>2783</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1032</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bb6/q7mdvvzfzjqk3hhg9zlp6efpcbi6pknf.jpg</picture>
<name>Арматура с двойной кнопкой для бачка унитаза c бок. лат. подводом 1/2 &quot; Alcaplast SA08K</name>
<description></description>
</offer>
<offer id="14719" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_rakoviny_umyval_nika/sifon_metallicheskiy_ganzer_art_a2_a2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_rakoviny_umyval_nika&amp;utm_term=14719</url>
<price>3347</price>
<purchase_price>1226</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1034</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/818/hb8pt69t3l73u9jhcacx5ph8sjspazcz.jpg</picture>
<name>Сифон металлический Ganzer art. A2</name>
<description></description>
</offer>
<offer id="15304" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_rakoviny_umyval_nika/sifon_metallicheskiy_ganzer_art_a3_a3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_rakoviny_umyval_nika&amp;utm_term=15304</url>
<price>3347</price>
<purchase_price>1081</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1034</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c97/2n21vgp6par1k313onbb7ycfykgq5ab1.jpg</picture>
<name>Сифон металлический Ganzer art. A3</name>
<description></description>
</offer>
<offer id="15679" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_rakoviny_umyval_nika/metallicheskiy_khromirovannyy_sifon_dlya_rakoviny_a_7_ganzer_a7/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_rakoviny_umyval_nika&amp;utm_term=15679</url>
<price>2438</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1034</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/61c/0ozapbtritu1ui9iyk5bwusb68o0naqm.jpg</picture>
<name>Металлический хромированный сифон для раковины A-7 Ganzer</name>
<description></description>
</offer>
<offer id="16772" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_rakoviny_umyval_nika/khromirovannaya_trubka_s_flantsem_f32_30sm_viega_102203_102203/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_rakoviny_umyval_nika&amp;utm_term=16772</url>
<price>1513</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1034</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/24e/m7d6l5drtcs1av95dcoeoq8w0hmc4pnu.jpg</picture>
<name>ХРОМИРОВАННАЯ ТРУБКА С ФЛАНЦЕМ ф32-30см Viega  102203</name>
<description></description>
</offer>
<offer id="18161" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_rakoviny_umyval_nika/koleno_khromirovannoe_f32kh22sm_68sm_viega_5792_111_102654_102654_viega/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_rakoviny_umyval_nika&amp;utm_term=18161</url>
<price>3186</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1034</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/399/lzip31pn4djkk4z9jxvi09jkb4cz2toy.jpg</picture>
<name>КОЛЕНО ХРОМИРОВАННОЕ ф32х22см-68см Viega  [5792-111] 102654</name>
<description></description>
</offer>
<offer id="15319" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_dlya_rakoviny_bez_pereliva_1_1_4_ganzer_f17_f17/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=15319</url>
<price>1300</price>
<purchase_price>377</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4eb/pb72rr0uzocjg8h1znynpo8ajblz3wqq.png</picture>
<name>Донный клапан для раковины без перелива 1 1/4 ViEiR VER21A</name>
<description></description>
</offer>
<offer id="16533" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_s_perelivom_1_1_4_kaiser_8011an_bronza_8011an/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=16533</url>
<price>3042</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8f1/583ypbffl6q1zhzidy0etgvu7qi53xnm.jpg</picture>
<name>Донный клапан с переливом 1 1/4 Kaiser 8011An бронза</name>
<description></description>
</offer>
<offer id="16544" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_s_perelivom_poluavtomat_metallicheskiy_1_1_4/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=16544</url>
<price>1375</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/61c/wbxq36pk4d7odnfjpzb3p13eh8xqasq8.jpg</picture>
<name>Донный клапан с переливом полуавтомат металлический  1 1/4</name>
<description></description>
</offer>
<offer id="17114" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/vypusk_dlya_sifona_f40_113mm_mcalpine_mrskw7_cpne_shampanskoe_mrskw7_cpne/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=17114</url>
<price>1455</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/29a/3chugkfnf13ui207avp5m04p2p4rw7i0.jpg</picture>
<name>Выпуск для сифона ф40-113мм McALPINE MRSKW7-CPNE шампанское</name>
<description></description>
</offer>
<offer id="17200" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/vypusk_dlya_sifona_f40_113mm_mcalpine_mrskw7_pwg_polyarnyy_belyy_mrskw7_pwg/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=17200</url>
<price>1455</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3c4/fe62x29kup38383c9ysmlb1u3rn5wrf9.jpg</picture>
<name>Выпуск для сифона ф40-113мм McALPINE MRSKW7-PWG полярный белый</name>
<description></description>
</offer>
<offer id="17352" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_dlya_rakoviny_s_perelivom_1_1_4_kruglyy_universal_nyy_vieir_ver26_ver26/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=17352</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/684/3a27e1bfbh92i4md1qvovkt932p1ri0t.png</picture>
<name>Донный клапан для раковины с переливом 1 1/4, круглый, универсальный, ViEiR VER26</name>
<description></description>
</offer>
<offer id="17626" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/sliv_pereliv_universal_nyy_113mm_vypusk_dlya_kukhonnoy_moyki_pod_pryamougol_noe_otverstie_pereliva_m/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=17626</url>
<price>1857</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/57a/iyj1t31em6y9aygmt0l14vpl1lxl43ip.jpg</picture>
<name>Слив-перелив универсальный 113мм (выпуск) для кухонной мойки под прямоугольное отверстие перелива McALPINE OR2-113S</name>
<description></description>
</offer>
<offer id="17629" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/sliv_pereliv_universal_nyy_113mm_vypusk_dlya_kukhonnoy_moyki_pod_krugloe_otverstie_pereliva_mcalpine/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=17629</url>
<price>1857</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8ae/cmrmnav0840brt60htcc1q0obxhyjqhf.jpg</picture>
<name>Слив-перелив универсальный 113мм (выпуск) для кухонной мойки под круглое отверстие перелива McALPINE OF2-113S</name>
<description></description>
</offer>
<offer id="18030" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_dlya_rakoviny_s_perelivom_1_1_4_ganzer_f15_f15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=18030</url>
<price>1300</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fd6/vg6vp0vxhz2d44at9e2ls1ggd7tidqcs.png</picture>
<name>Донный клапан для раковины с переливом 1 1/4 HANSEN H6715</name>
<description></description>
</offer>
<offer id="19538" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/vypusk_dlya_sifona_f40_113_mm_bez_pereliva_ani_m250_m250/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=19538</url>
<price>1191</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b40/rn31wjw1d047c88ds8ixpa7camefp8q2.png</picture>
<name>Слив-перелив универсальный 113 мм (выпуск) для кухонной мойки  без перелива ф 40-113 мм АНИ М250</name>
<description></description>
</offer>
<offer id="19718" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_dlya_rakoviny_bez_pereliva_1_1_4_vieir_ver23b_ver23b/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=19718</url>
<price>1300</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d13/dha7twnom8737zuizrs9jawwsr01twnc.jpg</picture>
<name>Донный клапан для раковины без перелива 1 1/4 ViEiR VER23B</name>
<description></description>
</offer>
<offer id="19719" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/vypuski_i_donnye_klapany/donnyy_klapan_dlya_rakoviny_s_perelivom_1_1_4_hansen_h6716_h6716/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vypuski_i_donnye_klapany&amp;utm_term=19719</url>
<price>1300</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1035</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8c9/0pllkokabfnda632hxiobicjgyblg67h.jpg</picture>
<name>Донный клапан для раковины с переливом 1 1/4 HANSEN H6716</name>
<description></description>
</offer>
<offer id="15602" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/gigienicheskie_leyki_i_nabory/gigienicheskiy_dush_nabor_s_derzhatelem_i_shlangom_1_5m_kaiser_lh_223_lh_223/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gigienicheskie_leyki_i_nabory&amp;utm_term=15602</url>
<price>1898</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1037</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ade/glyo4lzukbufft1eaho5le5saqdfo7zi.jpg</picture>
<name>Гигиенический душ (набор) с держателем и шлангом (1,5м) Kaiser LH-223</name>
<description></description>
</offer>
<offer id="15760" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/gigienicheskie_leyki_i_nabory/gigienicheskiy_dush_nabor_s_nastennym_derzhatelem_shlangom_1m_kranom_ganzer_ganzer_gz2011_set_metall/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gigienicheskie_leyki_i_nabory&amp;utm_term=15760</url>
<price>2272</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1037</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/57e/01jose6v901x5dfengq818rdiavpyqt4.jpg</picture>
<name>Гигиенический душ (набор) с настенным держателем, шлангом (1м), краном GANZER (Ганзер) GZ2011 SET, металлический, хром</name>
<description></description>
</offer>
<offer id="14827" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/ten_nagrevatel_nyy_element_dlya_elektricheskogo_polotentsesushitelya_300w_300vt_zoloto/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=14827</url>
<price>6026</price>
<purchase_price>2071</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a98/dput00ih67cwrzxlrsn2cp3jfgdi6y4g.jpg</picture>
<name>ТЭН (нагревательный элемент) для электрического полотенцесушителя 300W (300Вт) золото</name>
<description></description>
</offer>
<offer id="15219" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/korobka_dlya_podklyucheniya_skrytoy_provodki_elektricheskogo_polotentsesushitelya_khrom/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=15219</url>
<price>1846</price>
<purchase_price>600</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/400/gcqftgte1ni5db5qgdm41iqvo8hgtk3d.jpg</picture>
<name>Коробка для подключения скрытой проводки электрического полотенцесушителя, хром</name>
<description></description>
</offer>
<offer id="16166" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/ten_nagrevatel_nyy_element_dlya_elektricheskogo_polotentsesushitelya_c_displeem_300w_300vt_khrom/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=16166</url>
<price>5193</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8a0/d38z9gl57lc2pfomgbdm2rqe76t7dwv9.jpg</picture>
<name>ТЭН (нагревательный элемент) для электрического полотенцесушителя c дисплеем 300W (300Вт) хром</name>
<description></description>
</offer>
<offer id="16352" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_uglovaya_dlya_polotentsesushitelya_1_2_x3_4_shtutser_gayka_naruzhnyaya_vnutren/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=16352</url>
<price>1179</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fed/jenzkfnv1hgulsw86a1fw0yckmaauwie.jpg</picture>
<name>Американка (соединитель) угловая для полотенцесушителя 1/2&quot;x3/4&quot; штуцер-гайка (наружняя-внутренняя), пара</name>
<description></description>
</offer>
<offer id="16926" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/ventil_kran_uglovoy_dlya_polotentsesushitelya_1_2_x3_4_shtutser_gayka_naruzhnyaya_vnutrennyaya_1_sht/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=16926</url>
<price>1674</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7c2/a3f2wo0f4yv0frrfutf3oab1avacwkvq.png</picture>
<name>Вентиль (кран) угловой для полотенцесушителя 1/2&quot;x3/4&quot; штуцер-гайка (наружняя-внутренняя), 1 шт</name>
<description></description>
</offer>
<offer id="17083" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/korobka_dlya_podklyucheniya_skrytoy_provodki_elektricheskogo_polotentsesushitelya_bronza/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=17083</url>
<price>2180</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b7/qu7j55go71ujju5clsovz20iq3ainnvn.jpg</picture>
<name>Коробка для подключения скрытой проводки электрического полотенцесушителя, бронза</name>
<description></description>
</offer>
<offer id="17374" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/ten_nagrevatel_nyy_element_dlya_elektricheskogo_polotentsesushitelya_300w_300vt_khrom/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=17374</url>
<price>4692</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/611/681w76k3tsbszqmo2kyd4gi3lk7nlo1j.jpg</picture>
<name>ТЭН (нагревательный элемент) для электрического полотенцесушителя 300W (300Вт) хром</name>
<description></description>
</offer>
<offer id="17702" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/korobka_dlya_podklyucheniya_skrytoy_provodki_elektricheskogo_polotentsesushitelya_zoloto/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=17702</url>
<price>2180</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7be/2x36i11x69znbdewuxatp94ov3fjawck.jpg</picture>
<name>Коробка для подключения скрытой проводки электрического полотенцесушителя, золото</name>
<description></description>
</offer>
<offer id="19216" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_uglovaya_dlya_polotentsesushitelya_1_x3_4_gayka_gayka_vnutrennyaya_vnutrennyaya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19216</url>
<price>1179</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a10/hzdu6zhp57w76n9u85r2gswd8mdxto1y.jpg</picture>
<name>Американка (соединитель) угловая для полотенцесушителя 1&quot;x3/4&quot; гайка-гайка (внутренняя-внутренняя), пара</name>
<description></description>
</offer>
<offer id="19220" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_pryamaya_dlya_polotentsesushitelya_1_x1_gayka_gayka_vnutrennyaya_vnutrennyaya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19220</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b4b/2qtg5gabynjusie20747rm91dpgic10c.jpg</picture>
<name>Американка (соединитель) прямая для полотенцесушителя 1&quot;x1&quot; гайка-гайка (внутренняя-внутренняя), пара</name>
<description></description>
</offer>
<offer id="19233" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_uglovaya_dlya_polotentsesushitelya_1_x1_gayka_shtutser_vnutrennyaya_naruzhnyaya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19233</url>
<price>1513</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b15/mzi8mhptuey9brwb6mk8wcd30vw3638k.jpg</picture>
<name>Американка (соединитель) угловая для полотенцесушителя 1&quot;x1&quot; гайка-штуцер (внутренняя-наружняя), пара</name>
<description></description>
</offer>
<offer id="19274" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_uglovaya_dlya_polotentsesushitelya_1_x3_4_gayka_shtutser_vnutrennyaya_naruzhnya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19274</url>
<price>1300</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b15/mzi8mhptuey9brwb6mk8wcd30vw3638k.jpg</picture>
<name>Американка (соединитель) угловая для полотенцесушителя 1&quot;x3/4&quot; гайка-штуцер (внутренняя-наружняя), пара</name>
<description></description>
</offer>
<offer id="19279" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_soedinitel_uglovaya_dlya_polotentsesushitelya_1_x1_gayka_gayka_vnutrennyaya_vnutrennyaya/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19279</url>
<price>1674</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a10/hzdu6zhp57w76n9u85r2gswd8mdxto1y.jpg</picture>
<name>Американка (соединитель) угловая для полотенцесушителя 1&quot;x1&quot; гайка-гайка (внутренняя-внутренняя), пара</name>
<description></description>
</offer>
<offer id="19680" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/polotentsesushiteli_i_komplektuyushchie/komplektuyushchie_dlya_polotentsesushiteley/amerikanka_kvadratnaya_soedinitel_uglovaya_dlya_polotentsesushitelya_1_2_x3_4_shtutser_gayka_naruzhn/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_dlya_polotentsesushiteley&amp;utm_term=19680</url>
<price>1179</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1038</categoryId>
<name>Американка КВАДРАТНАЯ (соединитель) угловая для полотенцесушителя 1/2&quot;x3/4&quot; штуцер-гайка (наружняя-внутренняя), пара</name>
<description></description>
</offer>
<offer id="14533" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/sistema_zashchity_ot_protechek_vody_neptun_neptun_base_bugatti_1_2_220v_modul_upravleniya_neptun_bas/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=14533</url>
<price>35246</price>
<purchase_price>13281</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d0e/dh9j93c1cs9zpiv8bgsr6vk1evfhyef9.jpg</picture>
<name>Система защиты от протечек воды Neptun (Нептун) Base Bugatti 1/2&quot; 220В (модуль управления Neptun Base-1шт; датчик протечки воды SW005 2м-3шт; кран шаровый Neptun Bugatti Pro-2шт)</name>
<description></description>
</offer>
<offer id="17465" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/montazhnyy_korob_dlya_neptun_neptun_smart_art_s30000_s30000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=17465</url>
<price>3042</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/319/p8hlo5qdsja7ejmd22ffd0dep3rvu9ed.jpg</picture>
<name>Монтажный короб для Нептун Neptun Smart, арт. s30000</name>
<description></description>
</offer>
<offer id="17571" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/sistema_zashchity_ot_protechek_vody_akvastorozh_klassika_radio_2_15_1d_kran_1_2_2sht_modul_upravleni/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=17571</url>
<price>40250</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/639/5z1cfzpv41c82wx3j5gpc19m1fe4ychm.jpg</picture>
<name>КОМПЛЕКТ ЗАЩИТЫ ОТ ПРОТЕЧЕК ВОДЫ АКВАСТОРОЖ, 2 Х 1/2&quot;, 3 ДАТЧИКА</name>
<description></description>
</offer>
<offer id="17772" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/datchik_kontrolya_protechki_vody_akvastorozh_klassika_ak40_tk15_provodnoy_4m_ak40_tk15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=17772</url>
<price>2070</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7fa/wgmliwlezwi2411s5hgoyk6xd7hhdxer.jpg</picture>
<name>Датчик контроля протечки воды Аквасторож Классика АК40(ТК15), проводной 2м</name>
<description></description>
</offer>
<offer id="19520" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/sistema_zashchity_ot_protechek_vody_gidrolock_gidrolok_ultimate_bugatti_3_4/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=19520</url>
<price>33350</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/258/k0kitqpav53kmq0qegf4jy2xawt8txkd.png</picture>
<name>Система защиты от протечек воды Gidrolock ( Гидролок ) ULTIMATE BUGATTI 1/2</name>
<description></description>
</offer>
<offer id="19542" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/zashchita_ot_protechek/sistema_zashchity_ot_protechek_vody_neptun_neptun_aquacontrol_3_4_220v_modul_upravleniya_neptun_base/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=zashchita_ot_protechek&amp;utm_term=19542</url>
<price>24743</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1042</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/df3/0vggu11gx334hqmsredkgav8t7y9mse9.jpg</picture>
<name>Система защиты от протечек воды Neptun (Нептун) Aquacontrol 3/4&quot; 220В (модуль управления Neptun Base-1шт; датчик протечки воды SW007 2м-2шт; кран шаровый Neptun Aquacontrol-2шт)</name>
<description></description>
</offer>
<offer id="19011" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_dlya_gaza/podvodka_dlya_gaza_sil_fonnaya_1_2_500_sm_gayka_shtutser_ayvaz_a000024/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_dlya_gaza&amp;utm_term=19011</url>
<price>1294</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1044</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2fc/0f2vvi50iujfav2tj23ph2xmf5f0byg9.jpg</picture>
<name>Подводка для газа сильфонная   1/2 500 см гайка / штуцер   AYVAZ</name>
<description></description>
</offer>
<offer id="16984" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/raskhodnye_materialy/sredstva_germetizatsii_rez_bovykh_soedineniy/pasta_anaerobnyy_kley_germetik_belyy_quickspacer_710_100_g/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sredstva_germetizatsii_rez_bovykh_soedineniy&amp;utm_term=16984</url>
<price>1340</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1046</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bd4/pbp5vo27xw0r18w64cgk23ardkbufigk.jpg</picture>
<name>Паста анаэробный клей герметик (белый) Quickspacer 710 100 г.</name>
<description></description>
</offer>
<offer id="14437" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/ugolki_rehau/ugol_nadvizhnoy_plastikovyy_rehau_32_160024_160024/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_rehau&amp;utm_term=14437</url>
<price>1599</price>
<purchase_price>10</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1051</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9c3/1l7d465eg65i442x6gwlay96mt6vwb3x.jpg</picture>
<name>Угол надвижной пластиковый REHAU 32 160024</name>
<description></description>
</offer>
<offer id="17043" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/ugolki_rehau/ugol_nadvizhnoy_n_rehau_25_x_3_4_bronza_456350_456350/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_rehau&amp;utm_term=17043</url>
<price>1180</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1051</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3c2/7g8wnw9maf2g43ibtre84d55ak5h5ign.jpg</picture>
<name>Угол надвижной Н REHAU 25 x 3/4 &quot; бронза 456350</name>
<description></description>
</offer>
<offer id="17132" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/raskhodnye_materialy/raskhodnye_materialy_dlya_metalloplastikovykh_trub/nozhnitsy_g_500_dlya_metalloplastikovykh_trub_d_42_mm_1_5_8_kraftool_23381_42_z01_23381_42_z01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=raskhodnye_materialy_dlya_metalloplastikovykh_trub&amp;utm_term=17132</url>
<price>2272</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1052</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/de4/gun3nq5dd8v3dl04n7lcryltjken25rr.jpg</picture>
<name>Ножницы G-500 для металлопластиковых труб, d=42 мм (1 5/8&quot;), KRAFTOOL 23381-42_z01</name>
<description></description>
</offer>
<offer id="14562" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/podklyuchenie_dlya_dushevogo_shlanga_s_derzhatelem_dlya_dusha_i_fiksatorom_ganzer_ganzer_gz5173d_gz/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=14562</url>
<price>1215</price>
<purchase_price>482</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a65/iuajzptdde4oloofn86x16h1ljau9kz1.jpg</picture>
<name>Подключение для душевого шланга с держателем для душа и фиксатором Ganzer ( Ганзер ) GZ5173D</name>
<description></description>
</offer>
<offer id="15339" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/kartridzh_keramicheskiy_grohe_46_mm_46048000_46048000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=15339</url>
<price>5060</price>
<purchase_price>1600</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/347/yeu9xs3bjgefvaabsfg0c0khpthegpel.jpg</picture>
<name>Картридж керамический GROHE 46 мм 46048000</name>
<description></description>
</offer>
<offer id="15420" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/izliv_dlya_smesitelya_v_vannu_ploskiy_l_40_sm_kaiser_art21_40_21_l40/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=15420</url>
<price>1392</price>
<purchase_price>568</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/459/2sbrxhue8ya7nb2k8se0h7n44wqltwlz.jpg</picture>
<name>Излив для смесителя в ванну плоский L - 40 см KAISER art21/40</name>
<description></description>
</offer>
<offer id="15475" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/izliv_dlya_skrytogo_montazha_ploskiy_l_180mm_khrom_kaiser_l_115_kaiser_l_115/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=15475</url>
<price>2530</price>
<purchase_price>536</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dd8/oa3to5q5caoverckv5nyvtf8sy1mgc9k.jpg</picture>
<name>Излив для скрытого монтажа плоский L=180мм Хром KAISER L-115</name>
<description></description>
</offer>
<offer id="15748" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/izliv_dlya_smesitelya_v_vannu_ploskiy_l_30_sm_kaiser_art21_30_21_l30/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=15748</url>
<price>1392</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/459/2sbrxhue8ya7nb2k8se0h7n44wqltwlz.jpg</picture>
<name>Излив для смесителя в ванну плоский L - 30 см KAISER art21/30</name>
<description></description>
</offer>
<offer id="15802" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/divertor_pereklyuchatel_dlya_smesitelya_fbbb/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=15802</url>
<price>1336</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a21/aovfssj9effw2ksibawqqn1emq3u3adk.jpg</picture>
<name>Дивертор (переключатель) для смесителя</name>
<description></description>
</offer>
<offer id="16428" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/podklyuchenie_dlya_dushevogo_shlanga_s_derzhatelem_dlya_dusha_i_kranom_ganzer_ganzer_gz5175_gz_5175/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=16428</url>
<price>1215</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac3/7t2fn9rgc6crwc6a2aydky7lssu37khk.jpg</picture>
<name>Подключение для душевого шланга с держателем для душа и краном Ganzer ( Ганзер ) GZ5175</name>
<description></description>
</offer>
<offer id="16680" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/ekstsentriki_usilennye_s_teleskopicheskimi_otrazhatelyami_kaiser_0034_33777_sh_sh_1_2_kh_3_4_0034_33/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=16680</url>
<price>1392</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c19/m56c19w29tonf1dzgs19mogd6kuwvd8p.png</picture>
<name>Эксцентрики усиленные с телескопическими отражателями KAISER  0034 / 33777 ш/ш 1/2&quot; х 3/4&quot;</name>
<description></description>
</offer>
<offer id="16687" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/ekstsentrik_kreplenie_krepezh_dlya_ustanovki_smesitelya_na_bort_vanny_ganzer_gz009_gz009/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=16687</url>
<price>1974</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/49f/5n2xc9tmi2jmnjr9nrqrhd1tyfyfpti0.jpg</picture>
<name>Эксцентрик , крепление (крепеж) для установки смесителя на борт ванны Ganzer GZ009</name>
<description></description>
</offer>
<offer id="17821" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/komplektuyushchie_k_smesitelyam/kartridzh_keramicheskiy_38_43_mm_click_dlya_smesiteley_vidima_nekst_serafleks_seraplan_b961491nu_a86/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_smesitelyam&amp;utm_term=17821</url>
<price>1670</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1054</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fff/y1vnwbifnu4a5evqnv4pxlozxig04hsu.jpg</picture>
<name>Картридж керамический 38-43 мм CLICK для смесителей Vidima Некст, Серафлекс, Сераплан B961491NU / A861156NU</name>
<description></description>
</offer>
<offer id="18051" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/nasosy_tsirkulyatsionnye_rele_davleniya/tsirkulyatsionnyy_nasos_grundfos_upa_15_90_118_vt/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nasosy_tsirkulyatsionnye_rele_davleniya&amp;utm_term=18051</url>
<price>9602</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1060</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c78/x7eild1obvqg8f5mug2aeedz0akn1hay.jpg</picture>
<name>Циркуляционный насос Grundfos UPA 15-90  (118 Вт)</name>
<description></description>
</offer>
<offer id="18407" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_i_truby_otsinkovannye/troynik_otsink/otsinkovannyy_troynik_2_g_g_g_ee_130_2_ee/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troynik_otsink&amp;utm_term=18407</url>
<price>1343</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1061</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e1d/233smrtinljh0h6193b234dgehjhlrtj.jpg</picture>
<name>Оцинкованный тройник 2&quot; г/г/г EE</name>
<description></description>
</offer>
<offer id="15906" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_1_17_40sm_02412725/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15906</url>
<price>4477</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5d7/jpl1jwjsv55yzpfhpvzjj5ro0ii0519k.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 1&quot; 17-40см</name>
<description></description>
</offer>
<offer id="15907" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_3_4_17_40sm_02412720/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15907</url>
<price>3289</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5d7/jpl1jwjsv55yzpfhpvzjj5ro0ii0519k.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 3/4&quot; 17-40см</name>
<description></description>
</offer>
<offer id="15909" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_1_10_19_5sm_02450125/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15909</url>
<price>3244</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/71d/9y3vlorulpdm2lex0xnkgjwzes6sfh0r.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 1&quot; 10-19.5см</name>
<description></description>
</offer>
<offer id="15910" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_3_4_10_19_5sm_02450120/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15910</url>
<price>2474</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/71d/9y3vlorulpdm2lex0xnkgjwzes6sfh0r.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 3/4&quot; 10-19.5см</name>
<description></description>
</offer>
<offer id="15912" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_1_6_5_12_5sm_02412625/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15912</url>
<price>2689</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/71d/9y3vlorulpdm2lex0xnkgjwzes6sfh0r.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 1&quot; 6.5-12.5см</name>
<description></description>
</offer>
<offer id="15913" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_3_4_6_5_12_5sm_02412620/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15913</url>
<price>2118</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/71d/9y3vlorulpdm2lex0xnkgjwzes6sfh0r.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 3/4&quot; 6.5-12.5см</name>
<description></description>
</offer>
<offer id="15914" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_iz_nerzhaveyki/podvodka_dlya_vody_nv_flexorapid_iz_nerzhaveyushchey_stali_emmeti_1_2_6_5_12_5sm_02412612/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_iz_nerzhaveyki&amp;utm_term=15914</url>
<price>1562</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1062</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/71d/9y3vlorulpdm2lex0xnkgjwzes6sfh0r.jpg</picture>
<name>Подводка для воды НВ Flexorapid из нержавеющей стали EMMETI 1/2&quot; 6.5-12.5см</name>
<description></description>
</offer>
<offer id="14398" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_far_new/reguliruyushchiy_prokhodnoy_kollektor_ploskoe_uplotnenie_vr_nr_3_4_s_2_otvodami_1_2_far_fk_3821_3412/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_far_new&amp;utm_term=14398</url>
<price>2562</price>
<purchase_price>14</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1065</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/df1/vc2cyfojrm430gmt90c4pv6yx0okgzu6.jpg</picture>
<name>Регулирующий проходной коллектор плоское уплотнение ВР-НР 3/4&quot; с 2 отводами 1/2&quot; FAR FK 3821 3412 TP</name>
<description></description>
</offer>
<offer id="14478" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_far_new/reguliruyushchiy_prokhodnoy_kollektor_evrokonus_uplotnenie_vr_nr_1_s_2_otvodami_3_4_far_fk_3821_134/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_far_new&amp;utm_term=14478</url>
<price>3245</price>
<purchase_price>14</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1065</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d7f/xrc6ootrah5qfmaamj3wapeq3eb4kgrp.jpg</picture>
<name>Регулирующий проходной коллектор евроконус уплотнение ВР-НР 1&quot; с 2 отводами 3/4&quot; FAR FK 3821 134 EU</name>
<description></description>
</offer>
<offer id="15581" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_far_new/reguliruyushchiy_prokhodnoy_kollektor_evrokonus_uplotnenie_vr_nr_1_s_3_otvodami_3_4_far_fk_3822_134/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_far_new&amp;utm_term=15581</url>
<price>4441</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1065</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/33f/hqn77udbolgxeqnybo3llu7sxzvsgv0c.jpg</picture>
<name>Регулирующий проходной коллектор евроконус уплотнение ВР-НР 1&quot; с 3 отводами 3/4&quot; FAR FK 3822 134 EU</name>
<description></description>
</offer>
<offer id="17764" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_far_new/reguliruyushchiy_prokhodnoy_kollektor_evrokonus_uplotnenie_vr_nr_1_s_4_otvodami_3_4_far_fk_3824_134/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_far_new&amp;utm_term=17764</url>
<price>5636</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1065</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f26/4qp8cuf7ljecjijhdjyrvi0qnh21z12s.jpg</picture>
<name>Регулирующий проходной коллектор евроконус уплотнение ВР-НР 1&quot; с 4 отводами 3/4&quot; FAR FK 3824 134 EU</name>
<description></description>
</offer>
<offer id="14605" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_50_11_2_nar_pp_r_seraya_215050_aa215050064/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=14605</url>
<price>2205</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3b2/cukj636n31evotirmghy70w1o348wg24.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 50 - 11/2 нар. PP-R  серая 215050</name>
<description></description>
</offer>
<offer id="15501" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_63_2_vnut_pp_r_seraya_217063_aa217063002/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=15501</url>
<price>3334</price>
<purchase_price>14</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/486/owuo15yi6evkuy8bd3bj84uj68heytat.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 63 - 2 &quot; внут. PP-R  серая 217063</name>
<description></description>
</offer>
<offer id="16320" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_50_11_2_vnut_pp_r_seraya_217050_aa217050064/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=16320</url>
<price>2215</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/486/owuo15yi6evkuy8bd3bj84uj68heytat.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 50 - 11/2 внут. PP-R  серая 217050</name>
<description></description>
</offer>
<offer id="16857" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_40_11_4_nar_pp_r_seraya_215040_aa215040054/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=16857</url>
<price>1541</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3b2/cukj636n31evotirmghy70w1o348wg24.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 40 - 11/4 нар. PP-R  серая 215040</name>
<description></description>
</offer>
<offer id="16858" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_40_11_4_vnut_pp_r_seraya_217040_aa217040054/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=16858</url>
<price>1556</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/486/owuo15yi6evkuy8bd3bj84uj68heytat.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 40 - 11/4 внут. PP-R  серая 217040</name>
<description></description>
</offer>
<offer id="17657" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/mufty_serye/fv_plast_mufta_polipropilenovaya_f_63_2_nar_pp_r_seraya_215063_aa215063002/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_serye&amp;utm_term=17657</url>
<price>3114</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1066</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3b2/cukj636n31evotirmghy70w1o348wg24.jpg</picture>
<name>FV-Plast Муфта полипропиленовая ф 63 - 2 &quot; нар. PP-R  серая 215063</name>
<description></description>
</offer>
<offer id="15579" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_nikelirovannye/amerikanki_nikelirovannye/raz_emnoe_soedinenie_amerikanka_vv_nikelirovannoe_s_ploskoy_prokladkoy_uni_fitt_1_pryamoe_654n4000_6/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_nikelirovannye&amp;utm_term=15579</url>
<price>1969</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1070</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8b0/zre2wxqwzlj2luzfrzky7zg1o7k4mf7v.png</picture>
<name>Разъемное соединение ( американка ) ВВ никелированное с плоской прокладкой UNI-FITT 1&quot; прямое 654N4000</name>
<description></description>
</offer>
<offer id="15700" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_nikelirovannye/amerikanki_nikelirovannye/raz_emnoe_soedinenie_amerikanka_vv_nikelirovannoe_s_prokladkoy_o_ring_uni_fitt_3_4_pryamoe_655n3000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_nikelirovannye&amp;utm_term=15700</url>
<price>1623</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1070</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8b0/zre2wxqwzlj2luzfrzky7zg1o7k4mf7v.png</picture>
<name>Разъемное соединение ( американка ) ВВ никелированное с прокладкой O-ring UNI-FITT 3/4&quot; прямое 655N3000</name>
<description></description>
</offer>
<offer id="16005" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_nikelirovannye/amerikanki_nikelirovannye/raz_emnoe_soedinenie_amerikanka_nv_nikelirovannoe_s_prokladkoy_o_ring_uni_fitt_1_uglovoe_651n4000_65/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_nikelirovannye&amp;utm_term=16005</url>
<price>1784</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1070</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dfb/x32k1232asumld09lccmntd51nzkaw02.png</picture>
<name>Разъемное соединение ( американка ) НВ никелированное с прокладкой O-ring UNI-FITT 1&quot; угловое 651N4000</name>
<description></description>
</offer>
<offer id="16550" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_nikelirovannye/amerikanki_nikelirovannye/fiting_nikelirovannyy_uglovoy_s_raz_yemnym_soedineniem_amerikanka_far_fc_5200_34_3_4_x_3_4_fc_5200_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_nikelirovannye&amp;utm_term=16550</url>
<price>1344</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1070</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/069/3zburdgeafv1e9wkwlqactmwdarx7zsq.png</picture>
<name>Фитинг никелированный  угловой с  разъёмным соединением ( американка ) FAR FC 5200 34 3/4&quot; x 3/4&quot;</name>
<description></description>
</offer>
<offer id="14922" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_kosye/fil_tr_kosoy_gryazevik_3_4_far_fa_2390_34_vr_vr_dlya_gruboy_mekhanicheskoy_ochistki_vody_s_otverstie/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_kosye&amp;utm_term=14922</url>
<price>1746</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1074</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0aa/tc9s1rrwdmxymxsx1nzwm3lunjikbx5c.jpg</picture>
<name>Фильтр косой-грязевик 3/4&quot; FAR FA 2390 34 ВР-ВР для грубой (механической) очистки воды, с отверстием для пломбировки, 600мкм</name>
<description></description>
</offer>
<offer id="16109" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_kosye/fil_tr_kosoy_gryazevik_uni_fitt_1_210g4000_dlya_gruboy_ochistki_vody_500mkm_210g4000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_kosye&amp;utm_term=16109</url>
<price>1385</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1074</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b66/vbx24pfq9m3egwyxdp08gxphs662o2jm.jpg</picture>
<name>Фильтр косой-грязевик UNI-FITT 1&quot; 210G4000 для грубой очистки воды, 500мкм</name>
<description></description>
</offer>
<offer id="17690" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_kosye/fil_tr_kosoy_gryazevik_itap_192_2_dlya_gruboy_ochistki_vody_500mkm_192_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_kosye&amp;utm_term=17690</url>
<price>4509</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1074</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1fe/6yl2wtbx8e8ms6lm8l604wndpxb2e68r.jpg</picture>
<name>Фильтр косой-грязевик Itap 192 2&quot; для грубой очистки воды, 500мкм</name>
<description></description>
</offer>
<offer id="19374" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kanalizatsiya/naruzhnyaya_ryzhaya_kanalizatsiya/truba_kanalizatsionnaya_ostendorf_kg_f_110_x_3_2_kh_2000_mm_dlya_naruzhnoy_kanalizatsii_220020/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=naruzhnyaya_ryzhaya_kanalizatsiya&amp;utm_term=19374</url>
<price>1219</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1077</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a66/00azedbk3mab519ijrxcrs7e9paoax00.png</picture>
<name>Труба канализационная Ostendorf KG ф 110 x 3,2 х 2000 мм для наружной канализации</name>
<description></description>
</offer>
<offer id="18555" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/perekhody_viega/perekhod_bronza_1_vnut_1_2_nar_viega_320430_320430/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=perekhody_viega&amp;utm_term=18555</url>
<price>1304</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1079</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a16/jklta2pv6t9uw45sj3yffo3elf5jec7n.jpg</picture>
<name>Переход бронза  1&quot; внут. - 1/2 нар. Viega 320430</name>
<description></description>
</offer>
<offer id="18558" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/perekhody_viega/perekhod_bronza_1_vnut_3_4_nar_viega_335311_335311/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=perekhody_viega&amp;utm_term=18558</url>
<price>1181</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1079</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a16/jklta2pv6t9uw45sj3yffo3elf5jec7n.jpg</picture>
<name>Переход бронза  1&quot; внут. - 3/4 нар. Viega 335311</name>
<description></description>
</offer>
<offer id="14479" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_termostaticheskiy_pod_termogolovku_m30x1_5_uglovoy_seriya_a_nv_1_2_nikelirovannyy_s_raz_yemny/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=14479</url>
<price>2689</price>
<purchase_price>10</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e63/nlpop4yxvnzc6rha2cnsd2nw3odin7nk.jpg</picture>
<name>Вентиль термостатический (под термоголовку M30x1.5) угловой, серия &quot;A&quot; НВ 1/2&quot; никелированный с разъёмным соединением Oventrop 1181004</name>
<description></description>
</offer>
<offer id="14828" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/svh_0004_000020_uzel_radiatornyy_mul_tifleks_so_vstroennym_kranom_stout_uglovoy_3_4_svh_0004_000020/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=14828</url>
<price>1518</price>
<purchase_price>6</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9d0/56g1o4q2zpplry5sc0c1qv0l2qvc42pn.png</picture>
<name>SVH-0004-000020 STOUT Узел радиаторный (мультифлекс) угловой со встроенными кранами с разъемным соединением для двухтрубной системы 3/4&quot; вн. Евроконус х 3/4&quot; нар. Евроконус</name>
<description></description>
</offer>
<offer id="14944" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_obratnyy_pryamoy_combi_2_nv_1_2_oventrop_1091162_1091162/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=14944</url>
<price>1713</price>
<purchase_price>6</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/873/00lam01f9grew5qnhunr9duv7kjalnp7.jpg</picture>
<name>Вентиль обратный прямой &quot;Combi 2&quot; НВ 1/2&quot; Oventrop 1091162</name>
<description></description>
</offer>
<offer id="15313" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termogolovka_termostaticheskaya_golovka_dlya_radiatorov_t_regulirovaniya_7_28_c_m30kh1_5_oventrop_un/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=15313</url>
<price>3843</price>
<purchase_price>22</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/af7/9wia0tsmv8hg4a7tf4ujgxre02ndzvcm.jpg</picture>
<name>Термоголовка (термостатическая головка) для радиаторов (t регулирования 7-28°C) M30х1,5 Oventrop Uni SH матовая стал 1012085</name>
<description></description>
</offer>
<offer id="15673" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_zapornyy_obratnyy_pryamoy_uplotnitel_loctite_dri_seal_nv_3_4_far_fv_1400_34_fv_1400_34/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=15673</url>
<price>1656</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e29/3f4yzpnw02z7gh2lfyl4g1b1tjq87i0o.jpg</picture>
<name>Вентиль запорный обратный прямой, уплотнитель Loctite Dri-Seal, НВ 3/4&quot; FAR FV 1400 34</name>
<description></description>
</offer>
<offer id="15693" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termogolovka_termostaticheskaya_golovka_so_vstroennym_datchikom_dlya_radiatorov_t_regulirovaniya_0_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=15693</url>
<price>2575</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/203/b8j6n6bsmi0c8yzt4nmtkq9davqdpnsm.jpg</picture>
<name>Термоголовка (термостатическая головка) со встроенным датчиком для радиаторов (t регулирования 0-28°C) M30х1,5 FAR FT 1824</name>
<description></description>
</offer>
<offer id="16128" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/uzel_radiatornyy_mul_tifleks_so_vstroennymi_kranami_nv_uni_fitt_3_4_ek_kh_3_4_ek_2_trubnaya_sistema/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=16128</url>
<price>1258</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/abe/v7uy0313jnncah6292ok0nmrtuixq192.jpg</picture>
<name>Узел радиаторный (мультифлекс) со встроенными кранами НВ UNI-FITT 3/4&quot;ЕК х 3/4&quot;ЕК 2-трубная система прямой 192N3300</name>
<description></description>
</offer>
<offer id="16212" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_zapornyy_obratnyy_uglovoy_uplotnitel_loctite_dri_seal_nv_3_4_farfv_1200_34_fv_1200_34/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=16212</url>
<price>1712</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d56/v0bslwbrz1yepvhui2s2o640kqgantl3.jpg</picture>
<name>Вентиль запорный обратный угловой, уплотнитель Loctite Dri-Seal, НВ 3/4&quot; FARFV 1200 34</name>
<description></description>
</offer>
<offer id="16367" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termoreguliruyushchiy_ventil_pod_termogolovku_m30x1_5_far_pryamoy_uplotnitel_loctite_dri_seal_nv_3_4/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=16367</url>
<price>2603</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/708/ojb3uu1y8lzmf00fvzii8ckvkk2ygo9r.png</picture>
<name>Терморегулирующий вентиль (под термоголовку M30x1.5) Far прямой, уплотнитель Loctite Dri-Seal, НВ 3/4&quot;  FТ 1640 34</name>
<description></description>
</offer>
<offer id="16790" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/reguliruyushchiy_ventil_far_pryamoy_uplotnitel_loctite_dri_seal_nv_3_4_fv_1350_34_fv_1350_34/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=16790</url>
<price>1670</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/427/7hn11gqa6wjbxg1onx8acn8t6uba2reo.jpg</picture>
<name>Регулирующий вентиль Far прямой, уплотнитель Loctite Dri-Seal, НВ 3/4&quot;  FV 1350 34</name>
<description></description>
</offer>
<offer id="17212" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termogolovka_termostaticheskaya_golovka_dlya_radiatorov_t_regulirovaniya_6_28_c_uni_fitt_dx_m30kh1_5/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17212</url>
<price>1309</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f1f/zmhdo1e5rj01p6f1sn67a8ide2feto4n.jpg</picture>
<name>Термоголовка (термостатическая головка) для радиаторов (t регулирования 6-28°C) UNI-FITT DX, M30х1,5 169D0000</name>
<description></description>
</offer>
<offer id="17213" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_termostaticheskiy_pod_termogolovku_m30x1_5_uglovoy_nv_uni_fitt_3_4_nikelirovannyy_s_raz_yemny/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17213</url>
<price>2189</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9cd/racrxrrtt8mjxdf3oi4mxs3j4asfagp1.jpg</picture>
<name>Вентиль термостатический (под термоголовку M30x1.5) угловой НВ UNI-FITT 3/4&quot; никелированный с разъёмным соединением 165N3000</name>
<description></description>
</offer>
<offer id="17214" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_termostaticheskiy_pod_termogolovku_m30x1_5_uglovoy_nv_uni_fitt_1_2_nikelirovannyy_s_raz_yemny/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17214</url>
<price>1295</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9cd/racrxrrtt8mjxdf3oi4mxs3j4asfagp1.jpg</picture>
<name>Вентиль термостатический (под термоголовку M30x1.5) угловой НВ UNI-FITT 1/2&quot; никелированный с разъёмным соединением 165N2000</name>
<description></description>
</offer>
<offer id="17215" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_termostaticheskiy_pod_termogolovku_m30x1_5_pryamoy_nv_uni_fitt_3_4_nikelirovannyy_s_raz_yemny/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17215</url>
<price>2381</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d06/2yztqf16tm94tyofa3u8bgggsy0cb6ux.jpg</picture>
<name>Вентиль термостатический (под термоголовку M30x1.5) прямой НВ UNI-FITT 3/4&quot; никелированный с разъёмным соединением 160N3000</name>
<description></description>
</offer>
<offer id="17216" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_termostaticheskiy_pod_termogolovku_m30x1_5_pryamoy_nv_uni_fitt_1_2_nikelirovannyy_s_raz_yemny/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17216</url>
<price>1437</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/049/t619ddkh1tkw0s1bf36z78zpc2n1c0qi.jpg</picture>
<name>Вентиль термостатический (под термоголовку M30x1.5) прямой НВ UNI-FITT 1/2&quot; никелированный с разъёмным соединением 160N2000</name>
<description></description>
</offer>
<offer id="17372" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_obratnyy_uglovoy_combi_2_nv_1_2_oventrop_1091062_1091062/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17372</url>
<price>1713</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d74/d8qbp1ekyza2a4r0ort8g4pbl0lsxewb.jpg</picture>
<name>Вентиль обратный угловой &quot;Combi 2&quot; НВ 1/2&quot; Oventrop 1091062</name>
<description></description>
</offer>
<offer id="17379" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_obratnyy_nikelirovannyy_uglovoy_nv_uni_fitt_3_4_s_raz_emnym_soedineniem_thermo_178n3000_178n3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17379</url>
<price>1754</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c43/4vswu217nx1w0pwwouu25uwzeyz0wzxf.jpg</picture>
<name>Вентиль обратный никелированный угловой НВ UNI-FITT 3/4&quot; с разъемным соединением THERMO 178N3000</name>
<description></description>
</offer>
<offer id="17380" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/ventil_obratnyy_nikelirovannyy_pryamoy_nv_uni_fitt_3_4_s_raz_emnym_soedineniem_thermo_173n3000_173n3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=17380</url>
<price>1851</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/057/7ox6yzwhl92piqt0xo0rlhdnldperh92.jpg</picture>
<name>Вентиль обратный никелированный прямой НВ UNI-FITT 3/4&quot; с разъемным соединением THERMO 173N3000</name>
<description></description>
</offer>
<offer id="18246" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termoreguliruyushchiy_ventil_pod_termogolovku_m30x1_5_far_pryamoy_uplotnitel_loctite_dri_seal_nv_1_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=18246</url>
<price>1253</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/246/n5imea78a3o7vivbemgpq6frfq25l48s.jpg</picture>
<name>Терморегулирующий вентиль (под термоголовку M30x1.5) Far прямой, уплотнитель Loctite Dri-Seal, НВ 1/2&quot;  FТ 1640 12</name>
<description></description>
</offer>
<offer id="19323" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/krany_dlya_radiatorov_termogolovki/termogolovka_termostaticheskaya_golovka_dlya_radiatorov_t_regulirovaniya_7_28_c_m30kh1_5_oventrop_vi/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=krany_dlya_radiatorov_termogolovki&amp;utm_term=19323</url>
<price>1926</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1080</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/08e/oq08rzyem46ich07viz2zddgt243raix.jpg</picture>
<name>Термоголовка (термостатическая головка) для радиаторов (t регулирования 7-28°C) M30х1,5 Oventrop VINDO белый 1013066</name>
<description></description>
</offer>
<offer id="14665" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sukhoy_sifon_dlya_rakovin_i_bide_senzo_bez_vypuska_wirquin_1_1_2_kh_40_30719169_30719169/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=14665</url>
<price>2180</price>
<purchase_price>950</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6f4/164fol1hcw2xc0mwxl85uboosj4g8i9m.jpg</picture>
<name>Сухой сифон для раковин и биде « SENZO», без выпуска, Wirquin 1 1/2 х 40 30719169</name>
<description></description>
</offer>
<offer id="15343" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sifon_dlya_kukhonnoy_moyki_dvoynoy_s_nosikom_1_1_2_x_40mm_mcalpine_mrsk5_a_mrsk5_a/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=15343</url>
<price>1772</price>
<purchase_price>600</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8b1/356awusrbfmqlethdb3aw7gbailyw0l7.jpg</picture>
<name>Сифон для кухонной мойки двойной с носиком 1 1/2 x 40мм McALPINE MRSK5-A</name>
<description></description>
</offer>
<offer id="15870" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sifon_mcalpine_tip_sukhoy_gidrozatvor_11_2vn_50_mm_mrnrv50_mrnrv50/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=15870</url>
<price>2490</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/04a/3c7fou52v5dt9ss3rhvdb3hipf8k7cy4.png</picture>
<name>Сифон McALPINE  тип сухой гидрозатвор 11/2вн.-50 мм MRNRV50</name>
<description></description>
</offer>
<offer id="17030" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sifon_mcalpine_tip_sukhoy_gidrozatvor_11_2vn_40mm_mrnrv40_mrnrv40/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=17030</url>
<price>2308</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cb3/pra561mths13bpiutw69iobqhkge5a6c.png</picture>
<name>Сифон McALPINE  тип сухой гидрозатвор 11/2вн.-40мм MRNRV40</name>
<description></description>
</offer>
<offer id="19319" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sifon_mcalpine_tip_sukhoy_gidrozatvor_40_mm_40_mm_mrnrv40c_pb_mrnrv40c_pb/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=19319</url>
<price>3020</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e9e/ymvl4lx3ecga4bx4o1w6o8w25z9xzv80.png</picture>
<name>Сифон McALPINE  тип сухой гидрозатвор 40 мм -40 мм MRNRV40C-PB</name>
<description></description>
</offer>
<offer id="19766" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_kukhonnoy_moyki/sifon_dlya_kukhonnoy_moyki_s_vypuskom_1_1_2_x_40mm_s_kruglym_perelivom_grot_ani_a0142s_a0142s/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_kukhonnoy_moyki&amp;utm_term=19766</url>
<price>1392</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1082</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c15/osp3bqu9i6cahn7urhr5wjc0arabj8qw.png</picture>
<name>Сифон для кухонной мойки с выпуском 113 мм (выпуск)  под круглое отверстие перелива 1 1/2 x 40 мм  Грот Ани A0142S</name>
<description></description>
</offer>
<offer id="14753" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/vodorazetki_rehau/vodorozetka_nadvizhnaya_v_latunnaya_rehau_20_kh_1_2_kh_20_366017_366017/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodorazetki_rehau&amp;utm_term=14753</url>
<price>2491</price>
<purchase_price>14</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1085</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/aa5/we1dlchslptbcvgz370twtp6d4hqjzo9.jpg</picture>
<name>Водорозетка надвижная В латунная REHAU 20 х 1/2 &apos; х 20 366017</name>
<description></description>
</offer>
<offer id="15821" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/vodorazetki_rehau/vodorozetka_nadvizhnaya_v_rehau_16_x_1_2_bronza_dlya_gipsokartona_456374_456374/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodorazetki_rehau&amp;utm_term=15821</url>
<price>1395</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1085</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/eb8/3k9wpl3ad9m2b8yc0xh68zvudjg1fadb.jpg</picture>
<name>Водорозетка надвижная В REHAU 16 x 1/2&quot; бронза, для гипсокартона 456374</name>
<description></description>
</offer>
<offer id="14441" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/roliki_dlya_dushevykh_kabin_dc1001_2_25_mm_komplekt_8sht_dc1001_2_25/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=14441</url>
<price>1281</price>
<purchase_price>470</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ad1/5udsdk4qg9asf8ld6vmdji5h9q789q89.jpg</picture>
<name>Ролики для душевых кабин DC1001-2 25 мм (комплект 8шт)</name>
<description></description>
</offer>
<offer id="14553" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/trap_pryamoy_s_obr_klap_08_x_30_bronza_hansen_h6803_d_h6803_d/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=14553</url>
<price>5703</price>
<purchase_price>2430</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5fb/fb8p3evdo7h0phsvcy2w5nv15nj213fn.jpg</picture>
<name>Трап прямой с обр. клап. / 08 x 30 БРОНЗА HANSEN H6803-D</name>
<description></description>
</offer>
<offer id="14617" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_na_3_rezhima_100_mm_pod_khomut/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=14617</url>
<price>2444</price>
<purchase_price>900</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3ab/szu3aco3qihqfvgugp0h541f80sw5z22.png</picture>
<name>Смеситель для душевой кабины на 3 режима, 100 мм, под хомут</name>
<description></description>
</offer>
<offer id="15163" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/roliki_dlya_dushevykh_kabin_dc1001_2_22_mm_komplekt_8sht_dc_1001_2_22/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=15163</url>
<price>1281</price>
<purchase_price>390</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ad1/5udsdk4qg9asf8ld6vmdji5h9q789q89.jpg</picture>
<name>Ролики для душевых кабин DC1001-2 22 мм (комплект 8шт)</name>
<description></description>
</offer>
<offer id="15198" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_na_4_rezhima_100_mm_pod_khomut/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=15198</url>
<price>2561</price>
<purchase_price>900</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/74e/y5zma2cyp9dgddi7vgj7623ol7t0ydvg.png</picture>
<name>Смеситель для душевой кабины на 4 режима, 100 мм, под хомут</name>
<description></description>
</offer>
<offer id="15300" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_dc6312_rezh_3_gayka_universal_nyy_dc6312_rezh_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=15300</url>
<price>3259</price>
<purchase_price>1800</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b56/95lsex8z9nghmlu9ivs3k7jcnti7dp8t.jpg</picture>
<name>Смеситель для душевой кабины DC6312, реж.3, гайка (универсальный)</name>
<description></description>
</offer>
<offer id="15303" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_na_5_rezhima_100_mm_pod_khomut/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=15303</url>
<price>2910</price>
<purchase_price>900</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/753/n80a6gynv1d95gpyvroyvn7epbf4xf22.jpg</picture>
<name>Смеситель для душевой кабины на 5 режима, 100 мм, под хомут</name>
<description></description>
</offer>
<offer id="16292" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/roliki_dlya_dushevykh_kabin_dc1011_25_mm_komplekt_8sht_dc1011_25/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=16292</url>
<price>1164</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/72c/rnzo9kv62tfagy9t5pq6h1c5i1t4u6m8.jpg</picture>
<name>Ролики для душевых кабин DC1011 25 мм (комплект 8шт)</name>
<description></description>
</offer>
<offer id="16405" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_na_2_rezhima_100_mm_pod_khomut/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=16405</url>
<price>2328</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/19b/6tl1e06stm4b7598kuy3rpouq12rhwu5.png</picture>
<name>Смеситель для душевой кабины на 2 режима, 100 мм, под хомут</name>
<description></description>
</offer>
<offer id="16515" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/roliki_dlya_dushevykh_kabin_dc1011_23_mm_komplekt_8sht_dc_1011_23/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=16515</url>
<price>1164</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/72c/rnzo9kv62tfagy9t5pq6h1c5i1t4u6m8.jpg</picture>
<name>Ролики для душевых кабин DC1011 23 мм (комплект 8шт)</name>
<description></description>
</offer>
<offer id="16651" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vanny_dushevye_kabiny_i_komplektuyushchie_k_nim/komplektuyushchie_k_dushevym_kabinam/smesitel_dlya_dushevoy_kabiny_dc6312_rezh_1_gayka_dc6312_rezh_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_dushevym_kabinam&amp;utm_term=16651</url>
<price>1513</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1087</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/eb1/vpr1fn6ob1cf0x1tljkpbhgocixfhn5t.jpg</picture>
<name>Смеситель для душевой кабины DC6312, реж.1, гайка</name>
<description></description>
</offer>
<offer id="16432" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_oventrop/kollektor_grebenka_s_kranami_dlya_vodosnabzheniya_multidis_r_3_4_x_3_4_ek_pod_evrokonus_2_vykhoda_ov/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_oventrop&amp;utm_term=16432</url>
<price>6789</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1097</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/dfc/myuhjorl0lselo8md5gh2k32npumjqnb.jpeg</picture>
<name>Коллектор (гребенка) с кранами для водоснабжения &quot;Multidis R&quot; 3/4&quot; x 3/4&quot; ЕК (под евроконус) 2 выхода Oventrop 4200552</name>
<description></description>
</offer>
<offer id="18767" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_oventrop/kollektor_grebenka_s_kranami_dlya_vodosnabzheniya_multidis_r_3_4_x_3_4_ek_pod_evrokonus_3_vykhoda_ov/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_oventrop&amp;utm_term=18767</url>
<price>9496</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1097</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/dfc/myuhjorl0lselo8md5gh2k32npumjqnb.jpeg</picture>
<name>Коллектор (гребенка) с кранами для водоснабжения &quot;Multidis R&quot; 3/4&quot; x 3/4&quot; ЕК (под евроконус) 3 выхода Oventrop 4200553</name>
<description></description>
</offer>
<offer id="19659" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodonagrevateli/vodonagrev_protochnyy_napor_odnofaz_7_7kvt_220v_aures_m_178_304_103mm_kitay_3195213_ariston_3195213/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodonagrevateli&amp;utm_term=19659</url>
<price>7820</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1100</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0b7/pryfwdtbfn3yfczky4av6v5xj4fd7q63.jpg</picture>
<name>Водонагрев.проточный напор. однофаз. 7,7кВт/220В AURES M (178/304/103мм) Китай 3195213 ARISTON</name>
<description></description>
</offer>
<offer id="16303" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/nippelya_viega/nippel_perekhodnaya_bronza_11_4_3_4_viega_320119_320119/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nippelya_viega&amp;utm_term=16303</url>
<price>2755</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1104</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/143/mndj6c5u8915qgch4zr9lq3997bfpf6c.jpg</picture>
<name>Ниппель переходная бронза   11/4&quot; - 3/4   Viega 320119</name>
<description></description>
</offer>
<offer id="18533" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/nippelya_viega/nippel_perekhodnaya_bronza_1_1_2_viega_320287_320287/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=nippelya_viega&amp;utm_term=18533</url>
<price>1165</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1104</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/143/mndj6c5u8915qgch4zr9lq3997bfpf6c.jpg</picture>
<name>Ниппель переходная бронза   1&quot; - 1/2   Viega 320287</name>
<description></description>
</offer>
<offer id="15330" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_stout/ugolki_stout/stout_sfa_0007_000025_ugol_nik_soedinitel_nyy_32_sfa_0007_000032/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ugolki_stout&amp;utm_term=15330</url>
<price>1594</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1108</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/93b/h67p3s66y4eaq4atxb2dctfjq78nvdm7.jpg</picture>
<name>Stout  SFA-0007-000032 Угольник соединительный 32</name>
<description></description>
</offer>
<offer id="16353" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/raskhodnye_materialy/prochie_raskhodniki/kreplenie_krepyezh_dlya_podvesnogo_unitaza_bide_skrytyy_montazh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=prochie_raskhodniki&amp;utm_term=16353</url>
<price>2530</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1110</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/044/fam50e48i2qaep2cw2r12pva1307cezn.jpg</picture>
<name>Крепление (крепёж) для подвесного унитаза / биде (скрытый монтаж)</name>
<description></description>
</offer>
<offer id="17612" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/raskhodnye_materialy/prochie_raskhodniki/kreplenie_krepyezh_dlya_podvesnogo_unitaza_bide_skrytyy_montazh_gsi_fisr_gsi_fisr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=prochie_raskhodniki&amp;utm_term=17612</url>
<price>3968</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1110</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/574/2xi7x0fre5ubxsau1wcg8yw6pfivhhku.jpg</picture>
<name>Крепление (крепёж) для подвесного унитаза / биде (скрытый монтаж) GSI (FISR)</name>
<description></description>
</offer>
<offer id="15133" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/mufty_s_nakidnoy_gaykoy_rehau/ugol_s_nakidnoy_gaykoy_nadvizhnoy_v_rautitan_rx_rehau_16_x_1_2_bronza_456396_456396/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_s_nakidnoy_gaykoy_rehau&amp;utm_term=15133</url>
<price>1406</price>
<purchase_price>9</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1113</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8c9/31o358ktu0dt697e3fp7leq1rphv9znl.jpg</picture>
<name>Угол с накидной гайкой надвижной-В Rautitan RX Rehau 16 x 1/2&quot; бронза 456396</name>
<description></description>
</offer>
<offer id="18556" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/radiatory_otopleniya_i_zapornye_krany/komplektuyushchie_k_radiatoram/sms_1000_010001_stout_reguliruemyy_kontsevoy_fiting_s_drenazhnym_ventilem_avtomatich_vozdukhootvod_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_radiatoram&amp;utm_term=18556</url>
<price>2024</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1115</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/af3/t4stcupx2me3nqzglc5ge2a3n180096c.png</picture>
<name>SMS-1000-010001 STOUT РЕГУЛИРУЕМЫЙ КОНЦЕВОЙ ФИТИНГ С ДРЕНАЖНЫМ ВЕНТИЛЕМ, АВТОМАТИЧ. ВОЗДУХООТВОД 1&quot;</name>
<description></description>
</offer>
<offer id="15569" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_universal_nyy_tonkoy_ochistki_1_2_s_reduktorom_davleniya_s_manometrom_100_mkm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=15569</url>
<price>4934</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/de7/nvpa9sym56e94sxsd1jgrwfb0c3514c9.jpg</picture>
<name>Фильтр промывной универсальный тонкой очистки  1/2  с редуктором давления, с манометром, 100 мкм</name>
<description></description>
</offer>
<offer id="15761" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_dlya_kholodnoy_vody_svobodnogo_vrashcheniya_povorotnyy_s_manometrom_100_mkm_jc148/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=15761</url>
<price>3944</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/47e/dz7j1rnwl9nee1201ynh9r5r6jxbmzrx.jpg</picture>
<name>Фильтр промывной для холодной воды свободного вращения (поворотный) с манометром, 100 мкм</name>
<description></description>
</offer>
<offer id="16460" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_universal_nyy_tonkoy_ochistki_vieir_jh159_3_4_s_reduktorom_davleniya_s_manometrom_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=16460</url>
<price>6578</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/de7/nvpa9sym56e94sxsd1jgrwfb0c3514c9.jpg</picture>
<name>Фильтр промывной универсальный тонкой очистки ViEiR JH159   3/4  с редуктором давления, с манометром, 100 мкм</name>
<description></description>
</offer>
<offer id="16541" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_mekhanicheskoy_ochistki_1_2_far_fa_3943_12100_muftovyy_nr_nr_latun_100_mkm_fa_3943_12100/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=16541</url>
<price>8602</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/252/22rodj7enksxz2x2e6jw45uib3riuhes.jpg</picture>
<name>Фильтр механической очистки 1/2&quot; FAR FA 3943 12100 муфтовый (НР/НР), латунь, 100 мкм</name>
<description></description>
</offer>
<offer id="17045" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_mekhanicheskoy_ochistki_1_2_far_fa_3944_12100_muftovyy_nr_nr_latun_s_manometrom_100_mkm_fa_39/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17045</url>
<price>9614</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/868/fvmokmkcz21dtzjeonvg3gmup15m9iin.png</picture>
<name>Фильтр механической очистки 1/2&quot; FAR FA 3944 12100 муфтовый (НР/НР), латунь, с манометром, 100 мкм</name>
<description></description>
</offer>
<offer id="17224" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_honeywell_resideo_braukmann_fk06_1_aam_s_reduktorom_davleniya_dlya_goryachey_vody_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17224</url>
<price>15939</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/82e/co5nvpbwv1bzpb6js2xmetph4hu1kkgo.jpg</picture>
<name>Фильтр промывной Honeywell  Resideo Braukmann FK06 - 1 AAM с редуктором давления, для горячей воды, 100 мкм</name>
<description></description>
</offer>
<offer id="17225" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_honeywell_resideo_braukmann_fk06_3_4_aam_s_reduktorom_davleniya_dlya_goryachey_vody/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17225</url>
<price>12524</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/671/1u8bxawb0ju1ju75mjd0jwvmbc9logjm.jpg</picture>
<name>Фильтр промывной Honeywell Resideo Braukmann FK06 - 3/4 AAM с редуктором давления, для горячей воды, 100 мкм</name>
<description></description>
</offer>
<offer id="17226" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_honeywell_resideo_braukmann_fk06_1_2_aam_s_reduktorom_davleniya_dlya_goryachey_vody/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17226</url>
<price>9614</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/055/quivmkngmxh0yh0xkm22qjvwgrcl71lf.jpg</picture>
<name>Фильтр промывной Honeywell Resideo Braukmann FK06 - 1/2 AAM с редуктором давления, для горячей воды, 100 мкм</name>
<description></description>
</offer>
<offer id="17230" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_honeywell_resideo_braukmann_fk06_1_2_aa_s_reduktorom_davleniya_dlya_kholodnoy_vody/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17230</url>
<price>7843</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f79/b1p33zuutjtwnf2qdcapf3bm3bui8u2w.jpg</picture>
<name>Фильтр промывной Honeywell Resideo Braukmann FK06 - 1/2 AA с редуктором давления, для холодной воды, 100 мкм</name>
<description></description>
</offer>
<offer id="17235" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_honeywell_resideo_braukmann_ff06_3_4_aaru_dlya_kholodnoy_vody_100_mkm_bez_klyucha_f/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17235</url>
<price>11132</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f8f/hp0uiw0xe909ixyjeodep8p7i778wog1.jpg</picture>
<name>Фильтр промывной Honeywell  Resideo Braukmann FF06 - 3/4 AARU для холодной воды, 100 мкм (без ключа)</name>
<description></description>
</offer>
<offer id="17237" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/fil_try_i_izmeritel_nye_pribory/fil_try_promyvnye/fil_tr_promyvnoy_universal_nyy_s_manometrom_amerikankami_i_slivnym_kranom_100_mkm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=fil_try_promyvnye&amp;utm_term=17237</url>
<price>3416</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1120</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d44/f48942gxekcp6vmdj73pw8x259iyluoi.jpg</picture>
<name>Фильтр промывной универсальный с манометром, американками и сливным краном, 100 мкм</name>
<description></description>
</offer>
<offer id="16002" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/amerikanki_latunnye/raz_emnoe_soedinenie_amerikanka_nv_s_ploskoy_prokladkoy_uni_fitt_1_pryamoe_656g4000_656g4000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_latunnye&amp;utm_term=16002</url>
<price>1201</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1122</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/38c/rr5sdvrsed9ec8htz046cnljkd10tsrb.jpg</picture>
<name>Разъемное соединение ( американка ) НВ с плоской прокладкой UNI-FITT 1&quot; прямое 656G4000</name>
<description></description>
</offer>
<offer id="17636" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/amerikanki_latunnye/raz_emnoe_soedinenie_amerikanka_nv_s_ploskoy_prokladkoy_11_4_pryamoe/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_latunnye&amp;utm_term=17636</url>
<price>1767</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1122</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/c79/b01utix3ykbxjdd7e8gh42souttsots7.jpeg</picture>
<name>Разъемное соединение ( американка ) НВ с плоской прокладкой  11/4&quot; прямое</name>
<description></description>
</offer>
<offer id="14592" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetodiodnye_lenty_i_komplektuyushchie/kontroller_dlya_svetodiodnoy_rgb_lenty_s_pul_tom_eleganz_led_controller_12a/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetodiodnye_lenty_i_komplektuyushchie&amp;utm_term=14592</url>
<price>1547</price>
<purchase_price>541</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1124</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0c5/8iot8b3sv5l3ji2pip25ai6i1pklzxdo.jpg</picture>
<name>Контроллер для светодиодной RGB ленты с пультом Eleganz Led Controller 12A</name>
<description></description>
</offer>
<offer id="14949" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetodiodnye_lenty_i_komplektuyushchie/svetodiodnaya_lenta_eleganz_14_4_vt_smd_5050_rgb_ip20/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetodiodnye_lenty_i_komplektuyushchie&amp;utm_term=14949</url>
<price>1547</price>
<purchase_price>550</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1124</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7a2/mrk01icyidh8c3j2liysjumvrgdklwhz.jpg</picture>
<name>Светодиодная лента Eleganz 14,4 Вт SMD 5050 RGB IP20</name>
<description></description>
</offer>
<offer id="15865" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetodiodnye_lenty_i_komplektuyushchie/elektronnyy_transformator_dlya_svetodiodnoy_lenty_eleganz_250_vt/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetodiodnye_lenty_i_komplektuyushchie&amp;utm_term=15865</url>
<price>1909</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1124</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/850/25w0z5zpqymgiaififi3peavrknvqy99.jpg</picture>
<name>Электронный трансформатор для светодиодной ленты Eleganz 250 Вт</name>
<description></description>
</offer>
<offer id="16980" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/svetodiodnye_lenty_i_komplektuyushchie/istochnik_pitaniya_220_v_ac_12_v_dc_12_5_a_150_w_s_raz_emami_pod_vint_bez_vlagozashchity_ip23_200_15/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=svetodiodnye_lenty_i_komplektuyushchie&amp;utm_term=16980</url>
<price>1817</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1124</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e48/6wne2jdhnuynzhzech2ct8tol477sifj.png</picture>
<name>Источник питания 220 V AC/12 V DC 12,5 A 150 W с разъемами под винт, без влагозащиты (IP23) 200-150-1</name>
<description></description>
</offer>
<offer id="14939" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_bide_i_pissuarov/sifon_dlya_pissuara_viega_3233_8_492_458_492_458/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_bide_i_pissuarov&amp;utm_term=14939</url>
<price>3347</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1125</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f7c/p8pesrfzjkfx10lnpcno0upu3in0nm9c.jpg</picture>
<name>Сифон для писсуара viega 3233.8 492 458</name>
<description></description>
</offer>
<offer id="15382" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sifony_dlya_bide_i_pissuarov/sifon_f32_metal_dlya_bide_remer_958brr_958brr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sifony_dlya_bide_i_pissuarov&amp;utm_term=15382</url>
<price>3732</price>
<purchase_price>1468</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1125</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/315/bkwifza29n1o086le7dj6f6mtc8zm5h9.jpg</picture>
<name>СИФОН ф32 МЕТАЛ. ДЛЯ БИДЕ REMER 958BRR</name>
<description></description>
</offer>
<offer id="16118" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/obratnye_klapany/klapan_obratnyy_pruzhinnyy_europa_s_metallicheskim_zatvorom_itap_1_100_100_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=obratnye_klapany&amp;utm_term=16118</url>
<price>1239</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1132</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/2a5/jzz66ygtjzpphbj4o22mdvb24rqql82h.jpeg</picture>
<name>Клапан обратный пружинный EUROPA с металлическим затвором ITAP 1&quot; 100</name>
<description></description>
</offer>
<offer id="15019" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/pit_evye_fil_try/fil_tr_vodoochistitel_dlya_vody_geyzer_aragon_bio_321_dlya_zhestkoy_vody_bio_321/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pit_evye_fil_try&amp;utm_term=15019</url>
<price>8217</price>
<purchase_price>4143</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1133</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/beb/2vhnaqynxsa3gqdeqjwlo9113gqefyln.png</picture>
<name>Фильтр (водоочиститель) для воды Гейзер АРАГОН БИО 321 для жесткой воды</name>
<description></description>
</offer>
<offer id="15259" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/pit_evye_fil_try/fil_tr_vodoochistitel_dlya_vody_akvafor_trio_norma/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pit_evye_fil_try&amp;utm_term=15259</url>
<price>5785</price>
<purchase_price>2149</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1133</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/de3/84ik8xv5vuzkt9daeb04tyiviy9mgkhp.jpg</picture>
<name>Фильтр (водоочиститель) для воды Аквафор Трио Норма</name>
<description></description>
</offer>
<offer id="16745" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/pit_evye_fil_try/fil_tr_vodoochistitel_dlya_vody_akvafor_kristall_n/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=pit_evye_fil_try&amp;utm_term=16745</url>
<price>6084</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1133</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/f15/iby1i7t4y75gjott8yqn5u4otri5ipja.jpeg</picture>
<name>Фильтр (водоочиститель) для воды Аквафор Кристалл Н</name>
<description></description>
</offer>
<offer id="17677" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/mufty_viega/mufta_perekhodnaya_bronza_11_4_1_viega_266417_266417/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=mufty_viega&amp;utm_term=17677</url>
<price>1205</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1139</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f5f/0hrk8zm9lsi1fe0d4fmcjt9xyy1dofux.jpg</picture>
<name>Муфта переходная  бронза  11/4&quot; - 1&quot;    Viega 266417</name>
<description></description>
</offer>
<offer id="14386" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_tim_is/kollektor_s_kranami_latun_2_vykh_kras_sin_ruchki_3_4_16_ts_is_60_000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_tim_is&amp;utm_term=14386</url>
<price>1169</price>
<purchase_price>368</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1144</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f76/pfqohjywcehrmxiegw33yhuu33j836ap.jpg</picture>
<name>Коллектор с кранами латунь 2 вых. (крас. + син. ручки) 3/4&quot; - 16 ц. IS</name>
<description></description>
</offer>
<offer id="15052" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektor_tim_is/kollektor_s_kranami_latun_4_vykh_kras_sin_ruchki_3_4_16_ts_is_60_002/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektor_tim_is&amp;utm_term=15052</url>
<price>2167</price>
<purchase_price>757</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1144</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/86a/xle5yomcdol2u7h7dib6ggwobrnqndfn.jpg</picture>
<name>Коллектор с кранами латунь 4 вых. (крас. + син. ручки) 3/4&quot; - 16 ц. IS</name>
<description></description>
</offer>
<offer id="14722" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/troyniki_latunnye/troynik_latunnyy_11_2_sh_sh_sh_is/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_latunnye&amp;utm_term=14722</url>
<price>1573</price>
<purchase_price>516</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1145</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/88d/40qazlix4nzanfme3v7k0goki6xyudy0.jpg</picture>
<name>Тройник латунный 11/2 ш/ш/ш  IS</name>
<description></description>
</offer>
<offer id="18638" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/troyniki_latunnye/troynik_latunnyy_2_g_g_g_is_50_048/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_latunnye&amp;utm_term=18638</url>
<price>1471</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1145</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b11/0y08wgsooqra3f2hb86lgyyxlu6nb8or.jpg</picture>
<name>Тройник латунный 2&quot; г/г/г  IS</name>
<description></description>
</offer>
<offer id="19163" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/podvodki_gibkie/podvodki_dlya_vody_gigant/gigant_gibkaya_podvodka_dlya_vody_3_4_gayka_shtutser_250_sm_victoria_97_250/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=podvodki_dlya_vody_gigant&amp;utm_term=19163</url>
<price>1153</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1147</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a7b/0pzx8vrolavhjv61dezhtfdlcgnfsldo.png</picture>
<name>ГИГАНТ Гибкая подводка для воды 3/4 гайка / штуцер 250 см Victoria</name>
<description></description>
</offer>
<offer id="18021" available="true">
<url>http://santehnic-market.ru/catalog/elektrotovary/osvetitel_nye_pribory_i_elementy_pitaniya/vstraivaemye_i_nakladnye_svetil_niki/ulm_f43_0_9w_4200k_sensor_ip20_white_svetil_nik_svetodiodnyy_dlya_vnutrenney_podsvetki_mebeli_s_datch/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vstraivaemye_i_nakladnye_svetil_niki&amp;utm_term=18021</url>
<price>1720</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1148</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/edf/eke8m3w8nj68auzxsug5u7wofc7ji13x.jpg</picture>
<name>ULM-F43-0,9W/4200K SENSOR IP20 WHITE Светильник светодиодный для внутренней подсветки мебели с датчиком движения. Белый. TM Uniel</name>
<description></description>
</offer>
<offer id="15427" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevoy_garnitur/leyka_tropicheskaya_verkhniy_dush_kruglaya_30_kh_30_ganzer_gz_018_30_gz_018_30/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevoy_garnitur&amp;utm_term=15427</url>
<price>4071</price>
<purchase_price>869</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1151</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/30d/sko1d6n9ivks9j02e8lf3om9hafehfrq.jpg</picture>
<name>Лейка тропическая ( верхний душ ) круглая 30 х 30 GANZER GZ 018-30</name>
<description></description>
</offer>
<offer id="15834" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevoy_garnitur/dushevoy_garnitur_i_grohe_new_tempesta_cosmopolitan_27853001_27853001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevoy_garnitur&amp;utm_term=15834</url>
<price>4830</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1151</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/dc5/k9ngk138sz61zg6e68m1mtf94dpk1my2.jpg</picture>
<name>Душевой гарнитур I Grohe New Tempesta Cosmopolitan 27853001</name>
<description></description>
</offer>
<offer id="15841" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevoy_garnitur/leyka_tropicheskaya_verkhniy_dush_kvadratnaya_40_kh_40_ganzer_gz_019_40_gz019_40/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevoy_garnitur&amp;utm_term=15841</url>
<price>7866</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1151</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bb4/laiehjc0h4zr48i6v46l3j9jyj0gpxir.jpg</picture>
<name>Лейка тропическая ( верхний душ ) квадратная 40 х 40 GANZER GZ 019-40</name>
<description></description>
</offer>
<offer id="17014" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/dushevoy_garnitur/dushevoy_garnitur_frap_g8006_g8006/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dushevoy_garnitur&amp;utm_term=17014</url>
<price>3910</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1151</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/724/ngwputsqept0zklphy7r68npiodcap9n.png</picture>
<name>ДУШЕВОЙ ГАРНИТУР FRAP G8006</name>
<description></description>
</offer>
<offer id="14420" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/trubki_dlya_podklyucheniya_radiatora_rehau/troynik_s_trubkoy_250_mm_iz_nerzhaveyushchey_stali_dlya_podklyucheniya_radiatora_rehau_16_x_15_x_16/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=trubki_dlya_podklyucheniya_radiatora_rehau&amp;utm_term=14420</url>
<price>2425</price>
<purchase_price>15</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1153</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/148/7o5awur0s2vkspuor8loycca0apgtya3.jpg</picture>
<name>Тройник с трубкой 250 мм из нержавеющей стали для подключения радиатора, REHAU 16 x 15 x 16 266282-001</name>
<description></description>
</offer>
<offer id="14422" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/trubki_dlya_podklyucheniya_radiatora_rehau/troynik_s_trubkoy_250_mm_iz_nerzhaveyushchey_stali_dlya_podklyucheniya_radiatora_rehau_20_x_15_x_20/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=trubki_dlya_podklyucheniya_radiatora_rehau&amp;utm_term=14422</url>
<price>2488</price>
<purchase_price>15</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1153</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/148/7o5awur0s2vkspuor8loycca0apgtya3.jpg</picture>
<name>Тройник с трубкой 250 мм из нержавеющей стали для подключения радиатора, REHAU 20 x 15 x 20 266302-001</name>
<description></description>
</offer>
<offer id="14769" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/trubki_dlya_podklyucheniya_radiatora_rehau/ugol_s_trubkoy_250_mm_iz_nerzhaveyushchey_stali_dlya_podklyucheniya_radiatora_rehau_16_x_15_266242_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=trubki_dlya_podklyucheniya_radiatora_rehau&amp;utm_term=14769</url>
<price>1379</price>
<purchase_price>7</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1153</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bac/3b1fdbdmg15wy75nlz4ll31em25loovz.jpg</picture>
<name>Угол с трубкой 250 мм из нержавеющей стали для подключения радиатора, REHAU 16 x 15 266242-001</name>
<description></description>
</offer>
<offer id="14771" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/trubki_dlya_podklyucheniya_radiatora_rehau/ugol_s_trubkoy_250_mm_iz_nerzhaveyushchey_stali_dlya_podklyucheniya_radiatora_rehau_20_x_15_266262_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=trubki_dlya_podklyucheniya_radiatora_rehau&amp;utm_term=14771</url>
<price>1478</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1153</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bac/3b1fdbdmg15wy75nlz4ll31em25loovz.jpg</picture>
<name>Угол с трубкой 250 мм из нержавеющей стали для подключения радиатора, REHAU 20 x 15 266262-001</name>
<description></description>
</offer>
<offer id="14772" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/trubki_dlya_podklyucheniya_radiatora_rehau/ugol_s_trubkoy_500_mm_iz_nerzhaveyushchey_stali_dlya_podklyucheniya_radiatora_rehau_20_x_15_240941_0/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=trubki_dlya_podklyucheniya_radiatora_rehau&amp;utm_term=14772</url>
<price>2044</price>
<purchase_price>13</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1153</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bac/3b1fdbdmg15wy75nlz4ll31em25loovz.jpg</picture>
<name>Угол с трубкой 500 мм из нержавеющей стали для подключения радиатора, REHAU 20 x 15 240941-001</name>
<description></description>
</offer>
<offer id="16586" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/musornoe_vedro/konteyner_dlya_musora_3l_frap_f701_f701/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=musornoe_vedro&amp;utm_term=16586</url>
<price>1470</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1156</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/87b/0i7d01i72c06w6vb2e8y6cvfcxt96j93.jpg</picture>
<name>Контейнер для мусора 3L FRAP F701</name>
<description></description>
</offer>
<offer id="17640" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/musornoe_vedro/musornoe_vedro_sensornoe_9_l_frap_f777_f777/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=musornoe_vedro&amp;utm_term=17640</url>
<price>6324</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1156</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a45/b9wjhjmxnucc0ta1q0bsvdi9lw46wn6w.jpg</picture>
<name>Мусорное ведро сенсорное 9 л. FRAP F777</name>
<description></description>
</offer>
<offer id="17867" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/musornoe_vedro/konteyner_dlya_musora_12l_frap_f703_f703/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=musornoe_vedro&amp;utm_term=17867</url>
<price>3400</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1156</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/87b/0i7d01i72c06w6vb2e8y6cvfcxt96j93.jpg</picture>
<name>Контейнер для мусора 12L  FRAP F703</name>
<description></description>
</offer>
<offer id="18679" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/musornoe_vedro/konteyner_dlya_musora_5l_frap_f702_f702/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=musornoe_vedro&amp;utm_term=18679</url>
<price>2052</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1156</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/87b/0i7d01i72c06w6vb2e8y6cvfcxt96j93.jpg</picture>
<name>Контейнер для мусора 5L FRAP F702</name>
<description></description>
</offer>
<offer id="15605" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/ruchnoy_dush/leyka_dlya_dusha_3_kh_rezhimnaya_gappo_g17_khrom_g17/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ruchnoy_dush&amp;utm_term=15605</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1161</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5f5/szrv5rr61ohrhljxr0hopw1x0pdn0dlq.jpg</picture>
<name>Лейка для душа 3-х режимная Gappo G17 хром</name>
<description></description>
</offer>
<offer id="18008" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/ruchnoy_dush/leyka_dlya_dusha_parikmakherskaya_1_rezhimnaya_kaiser_sm_032_khrom_sm_032/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=ruchnoy_dush&amp;utm_term=18008</url>
<price>1202</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1161</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/171/ar2iwotdbkngxioavzhpuow9sf4p9yd5.jpg</picture>
<name>Лейка для душа ( парикмахерская ) 1 режимная Kaiser SM-032 хром</name>
<description></description>
</offer>
<offer id="15106" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/vodootvody_vrezki_dlya_trub/vodootvod_vrezka_1_3_4_v_remer_64410rr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodootvody_vrezki_dlya_trub&amp;utm_term=15106</url>
<price>1901</price>
<purchase_price>8</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1168</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/813/j2sf3do8vu35pcsgubj8xwm51mltfhfj.jpg</picture>
<name>Водоотвод ( Врезка ) 1&quot; - 3/4 В REMER</name>
<description></description>
</offer>
<offer id="17580" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/vodootvody_vrezki_dlya_trub/vypusk_rezervuarnyy_flanets_n_s_kontrgaykoy_bez_zaglushki_tiemme_1_1_4_1500231/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=vodootvody_vrezki_dlya_trub&amp;utm_term=17580</url>
<price>1696</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1168</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1ee/s0g3nugkdll21cvoeee1nv6ywxg72vkj.jpg</picture>
<name>Выпуск резервуарный фланец-Н с контргайкой, без заглушки TIEMME 1&quot;1/4</name>
<description></description>
</offer>
<offer id="16299" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektornye_gruppy/sms_0922_000005_kollektornaya_gruppa_iz_nerzhaveyushchey_stali_s_regulirovochnymi_ventilyami_stout_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektornye_gruppy&amp;utm_term=16299</url>
<price>15022</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1170</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6d5/j2214toi3mue8xoyvnrz967z0w74vy2m.png</picture>
<name>SMS 0922 000005 Коллекторная группа из нержавеющей стали с регулировочными  вентилями STOUT 1 &quot; x 3/4 &quot; ЕК 5 выходов</name>
<description></description>
</offer>
<offer id="17017" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektornye_gruppy/kollektornaya_gruppa_iz_nerzhaveyushchey_stali_s_regulirovochnymi_i_termostaticheskimi_ventilyami_un/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektornye_gruppy&amp;utm_term=17017</url>
<price>15377</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1170</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8a1/iu0cn6frpocwd1w8xndgmxxe3u0rten0.jpg</picture>
<name>Коллекторная группа из нержавеющей стали с регулировочными и термостатическими вентилями UNI-FITT 1&quot;x3/4&quot;ЕК 6 выходов 451I4306.R</name>
<description></description>
</offer>
<offer id="19584" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektornye_gruppy/sms_0922_000004_kollektornaya_gruppa_iz_nerzhaveyushchey_stali_s_regulirovochnymi_ventilyami_stout_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektornye_gruppy&amp;utm_term=19584</url>
<price>11828</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1170</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c44/envcfbapiyxn8hoyge1n2u4byfrkumgz.jpg</picture>
<name>SMS 0922 000004 Коллекторная группа из нержавеющей стали с регулировочными  вентилями STOUT 1 &quot; x 3/4 &quot; ЕК 4 выходов</name>
<description></description>
</offer>
<offer id="18939" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/amerikanki_belye/belaya_polipropilenovaya_amerikanka_f_50_11_2_vnut_spk_2130m1_050050/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_belye&amp;utm_term=18939</url>
<price>1607</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1171</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/579/jpwtn7loev7szvbcwks7rhg48sl18aiz.jpg</picture>
<name>БЕЛАЯ  ПОЛИПРОПИЛЕНОВАЯ АМЕРИКАНКА  ф 50 - 11/2 внут. SPK</name>
<description></description>
</offer>
<offer id="18941" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_belyy/amerikanki_belye/belaya_polipropilenovaya_amerikanka_f_50_11_2_nar_spk_2135m5_050050/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_belye&amp;utm_term=18941</url>
<price>1796</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1171</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/157/42swmolxoby3bl100jrjq5f7bax1df3k.jpg</picture>
<name>БЕЛАЯ  ПОЛИПРОПИЛЕНОВАЯ АМЕРИКАНКА  ф 50 - 11/2 нар. SPK</name>
<description></description>
</offer>
<offer id="17223" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/komplektuyushchie_k_fil_tram/kran_dlya_pit_evogo_fil_tra_chistoy_vody_s_keramicheskim_pereklyuchatelem_raifil_f_09_2bc_l_1_4_f_09/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_fil_tram&amp;utm_term=17223</url>
<price>1846</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1176</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/275/0iwyc52wa2usaej4trf6afavifms4tg0.jpg</picture>
<name>Кран для питьевого фильтра / чистой воды с керамическим переключателем</name>
<description></description>
</offer>
<offer id="14723" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/udliniteli_i_bochenki_khrom/udlinitel_khrom_1_80_mm_comisa_77_17_323/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_i_bochenki_khrom&amp;utm_term=14723</url>
<price>1220</price>
<purchase_price>277</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1180</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ca2/2m7bqd6293rak0qhj0dwthkt6ve7h7eu.jpg</picture>
<name>Удлинитель  хром. 1&quot; - 80 мм COMISA</name>
<description></description>
</offer>
<offer id="14997" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/udliniteli_i_bochenki_khrom/udlinitel_khrom_1_100_mm_comisa_77_17_330/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_i_bochenki_khrom&amp;utm_term=14997</url>
<price>1365</price>
<purchase_price>369</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1180</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ca2/2m7bqd6293rak0qhj0dwthkt6ve7h7eu.jpg</picture>
<name>Удлинитель  хром.1&quot; - 100 мм COMISA</name>
<description></description>
</offer>
<offer id="16019" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/udliniteli_i_bochenki_khrom/udlinitel_nv_khromirovannyy_uni_fitt_3_4_x_80_mm_657c3080/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_i_bochenki_khrom&amp;utm_term=16019</url>
<price>1324</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1180</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fd5/cy5r2a3pbz4cxguuoi2xnh9uutan3xbp.jpg</picture>
<name>Удлинитель НВ хромированный UNI-FITT 3/4 x 80 мм</name>
<description></description>
</offer>
<offer id="16040" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/udliniteli_i_bochenki_khrom/udlinitel_nv_150_mm_kh_1_2_khromir_seriya_1530c_1500402/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_i_bochenki_khrom&amp;utm_term=16040</url>
<price>3185</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1180</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ca2/2m7bqd6293rak0qhj0dwthkt6ve7h7eu.jpg</picture>
<name>Удлинитель НВ 150 мм х  1/2 хромир., серия 1530C</name>
<description></description>
</offer>
<offer id="16045" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_khromirovannye/udliniteli_i_bochenki_khrom/udlinitel_nv_khromirovannyy_uni_fitt_1_2_x_100_mm_657c2100/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_i_bochenki_khrom&amp;utm_term=16045</url>
<price>1200</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1180</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b53/6o0mt0c9sbtd04kaa66n182m6ezhxkar.jpg</picture>
<name>Удлинитель НВ хромированный UNI-FITT 1/2 x 100 мм</name>
<description></description>
</offer>
<offer id="14414" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/troyniki_rehau/troynik_nadvizhnoy_plastikovyy_rehau_32_160034_160034/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_rehau&amp;utm_term=14414</url>
<price>1890</price>
<purchase_price>12</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1184</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4e0/h0a9v82rnrii3bn9vmdf8h2lz5jrj2bb.jpg</picture>
<name>Тройник надвижной пластиковый REHAU 32 160034</name>
<description></description>
</offer>
<offer id="14418" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/troyniki_rehau/troynik_reduktsionnyy_nadvizhnoy_plastikovyy_rehau_32_x_16_x_32_160064_160064/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_rehau&amp;utm_term=14418</url>
<price>1890</price>
<purchase_price>12</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1184</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/860/1jp5xsivxicon4091faq5lpfjyk48sok.jpg</picture>
<name>Тройник редукционный надвижной пластиковый REHAU 32 x 16 x 32 160064</name>
<description></description>
</offer>
<offer id="15334" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/troyniki_rehau/troynik_reduktsionnyy_nadvizhnoy_rehau_20_kh_32_kh_20/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_rehau&amp;utm_term=15334</url>
<price>1827</price>
<purchase_price>6</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1184</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ad4/cdaxoa3xig2fr1wzbsstq1vm5qi83ggy.jpg</picture>
<name>Тройник редукционный надвижной REHAU 20 х 32 х 20</name>
<description></description>
</offer>
<offer id="16630" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/troyniki_rehau/troynik_v_nadvizhnoy_bronza_rehau_32_x_3_4_x_32_366021_456297_366021_456297/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_rehau&amp;utm_term=16630</url>
<price>3481</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1184</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/371/n2z62vvn1uyfs16dj4y55x208pmx1yde.jpg</picture>
<name>Тройник В надвижной бронза REHAU 32 x 3/4 &quot; x 32 366021 / 456297</name>
<description></description>
</offer>
<offer id="18040" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/sshityy_polietilen/sshityy_polietilen_rehau/troyniki_rehau/troynik_reduktsionnyy_nadvizhnoy_plastikovyy_rehau_32_x_32_x_25_160075_160075/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=troyniki_rehau&amp;utm_term=18040</url>
<price>1890</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1184</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/eca/v6q7u247qq0actpr998l1x7p51o3xi79.jpg</picture>
<name>Тройник редукционный надвижной пластиковый REHAU 32 x 32 x 25 160075</name>
<description></description>
</offer>
<offer id="18489" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_25_viega_357184_357184/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18489</url>
<price>1236</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 25  Viega 357184</name>
<description></description>
</offer>
<offer id="18508" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_3_4_80_viega_359584_359584/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18508</url>
<price>1860</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  3/4 - 80   Viega 359584</name>
<description></description>
</offer>
<offer id="18511" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_100_viega_440473_440473/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18511</url>
<price>3982</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 100 Viega 440473</name>
<description></description>
</offer>
<offer id="18515" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_50_viega_357214_357214/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18515</url>
<price>1737</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 50  Viega 357214</name>
<description></description>
</offer>
<offer id="18516" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_2_80_viega_357238_357238/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18516</url>
<price>1369</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  1/2 - 80   Viega 357238</name>
<description></description>
</offer>
<offer id="18522" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_40_viega_357207_357207/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18522</url>
<price>1567</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 40  Viega 357207</name>
<description></description>
</offer>
<offer id="18528" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_2_150_viega_440305_440305/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18528</url>
<price>3921</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  1/2 - 150   Viega 440305</name>
<description></description>
</offer>
<offer id="18530" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_3_4_50_viega_357252_357252/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18530</url>
<price>1261</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  3/4 - 50   Viega 357252</name>
<description></description>
</offer>
<offer id="18538" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_30_viega_357191_357191/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18538</url>
<price>1325</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 30  Viega 357191</name>
<description></description>
</offer>
<offer id="18543" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_2_120_viega_440299_440299/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18543</url>
<price>3274</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  1/2 - 120   Viega 440299</name>
<description></description>
</offer>
<offer id="18545" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_80_viega_440466_440466/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18545</url>
<price>3480</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 80  Viega 440466</name>
<description></description>
</offer>
<offer id="18547" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_3_4_65_viega_357269_357269/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18547</url>
<price>1596</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  3/4 - 65   Viega 357269</name>
<description></description>
</offer>
<offer id="18562" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_3_4_100_viega_359577_359577/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18562</url>
<price>2157</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  3/4 - 100   Viega 359577</name>
<description></description>
</offer>
<offer id="18563" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_2_100_viega_357245_3525_1_2_100/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18563</url>
<price>1671</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза  1/2 - 100   Viega 357245</name>
<description></description>
</offer>
<offer id="18571" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_viega/udliniteli_viega/udlinitel_bronza_1_65_viega_440596_440596/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=udliniteli_viega&amp;utm_term=18571</url>
<price>2397</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1188</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/821/o3nah400kng7ig4chenidlsm7d9kx014.jpeg</picture>
<name>Удлинитель  бронза 1&quot; - 65  Viega 440596</name>
<description></description>
</offer>
<offer id="17705" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sifon_koleno_trubnyy_metallich_latun_1_1_2_kh_40_mm_victoria_23_001/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=17705</url>
<price>1513</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4db/x4v2qdiw12dltf4ix86laab3xusjt76j.jpg</picture>
<name>Сифон (колено) трубный металлич. (латунь) 1 1/2 х 40 мм Victoria</name>
<description></description>
</offer>
<offer id="18110" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/koleno_plastik_f_11_2_40_s_reviziey_i_ventil_klapanom_vys_75mm_mcalpine_mrb7_ansv_mrb7_ansv/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=18110</url>
<price>1425</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/853/wrvjhans100l88z9lvwy4hcngl66bsgv.jpg</picture>
<name>КОЛЕНО ПЛАСТИК. ф 11/2-40 . с ревизией и вентил.клапаном ;выс=75мм McAlpine MRB7-ANSV</name>
<description></description>
</offer>
<offer id="18164" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sliv_pereliv_obvyazka_sifon_trap_dlya_vanny_plastik_poluavtomat_viega_285357_6168_45_285357_viega/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=18164</url>
<price>4025</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b30/7ajy99sh07sya9xfqle6wj19l23j9l00.jpg</picture>
<name>Слив-перелив (обвязка) / сифон (трап) для ванны пластик. &quot;полуавтомат&quot; Viega 285357 6168.45</name>
<description></description>
</offer>
<offer id="18165" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sliv_pereliv_obvyazka_sifon_trap_dlya_vanny_plastik_viega_311537_6387_35_311537_viega/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=18165</url>
<price>1495</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ecc/s3twlio37i5cu43xbadupkid1t8oik8q.jpg</picture>
<name>Слив-перелив (обвязка) / сифон (трап) для ванны пластик. Viega 311537 6387.35</name>
<description></description>
</offer>
<offer id="18168" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sifon_trap_dlya_dushevogo_poddona_viega_f_120_90mm_40_50mm_tempoplex_6956ex_364786_364786_viega/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=18168</url>
<price>4186</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1e1/2wpny2192cxaijkdoaigmu80c7ssqatk.jpg</picture>
<name>Сифон (трап) для душевого поддона Viega  ф 120/90мм - 40/50мм Tempoplex / 6956EX 364786</name>
<description></description>
</offer>
<offer id="18170" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sifon_trap_dlya_dushevogo_poddona_plastik_vypusk_70mm_50_60_11_2_vysota_92mm_s_gofroy_40_50_l_300_50/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=18170</url>
<price>1772</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/185/17n7xpajln1ye418382m23l60ey9qs0p.png</picture>
<name>Сифон (трап) для душевого поддона пластик. (выпуск 70мм), 50/60-11/2, высота=92мм, с гофрой 40/50 (L=300-500мм) McALPINE MRS2C-F</name>
<description></description>
</offer>
<offer id="19304" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sifon_trap_dlya_poddona_alcaplast_a491cr_a491cr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=19304</url>
<price>3267</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1e2/r67ygtv243584p2iady2jm6ukq04y4i8.png</picture>
<name>Сифон ( трап ) для поддона AlcaPlast A491CR</name>
<description></description>
</offer>
<offer id="19639" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sliv_pereliv_obvyazka_sifon_trap_dlya_vanny_plastik_60sm_alcaplast_a501_a501/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=19639</url>
<price>1531</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4b8/1fbp1ww0wng642cqv3anwpclfblv7tyk.png</picture>
<name>Слив-перелив (обвязка) / сифон (трап) для ванны пластик.  60см AlcaPLAST A501</name>
<description></description>
</offer>
<offer id="19660" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sliv_pereliv_obvyazka_sifon_trap_dlya_vanny_plastik_avtomat_alcaplast_a505crm_a_505_crm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=19660</url>
<price>2530</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f76/3w8d11d9565fftmhk9ttp7jbzekj4ikb.jpg</picture>
<name>Слив-перелив (обвязка) / сифон (трап) для ванны пластик. &quot;автомат&quot; Alcaplast A505CRM</name>
<description></description>
</offer>
<offer id="19661" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/sliv_pereliv_obvyazka_i_trapy/sliv_pereliv_obvyazka_sifon_trap_dlya_vanny_plastik_avtomat_alcaplast_a507km_a_507_km/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sliv_pereliv_obvyazka_i_trapy&amp;utm_term=19661</url>
<price>5865</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1189</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/baa/b08xbxz934eefpgyja20cisuvd7hxvzy.png</picture>
<name>Слив-перелив (обвязка) / сифон (трап) для ванны пластик. &quot;автомат&quot; Alcaplast A507KM</name>
<description></description>
</offer>
<offer id="14526" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_kaiser_vista_65077_65077/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=14526</url>
<price>7590</price>
<purchase_price>3188</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b8b/7wr8ys0coo3ti60t6pwn86i6d0pju5zo.jpg</picture>
<name>Смеситель для душа KAISER Vista 65077</name>
<description></description>
</offer>
<offer id="14625" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_frap_h04_f2004_f2004/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=14625</url>
<price>4945</price>
<purchase_price>29</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/929/q3t5iozir9ecxg8lzygbuzt72ajstsfx.jpg</picture>
<name>Смеситель для душа FRAP H04 F2004</name>
<description></description>
</offer>
<offer id="16300" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_frap_f7503_f7503/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=16300</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b8/3hrkknreu7cqszfi1wfm8r2psgxgq13y.jpg</picture>
<name>Смеситель для душа Frap F7503</name>
<description></description>
</offer>
<offer id="17357" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_kaiser_sonat_34077_34077/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=17357</url>
<price>8855</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/568/thdkgwwz28d2hlgzkj05ovjid3lvrrgn.jpeg</picture>
<name>Смеситель для душа KAISER Sonat 34077</name>
<description></description>
</offer>
<offer id="17582" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_frap_h08_f2008_khrom_f2008/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=17582</url>
<price>3220</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5df/14zzujlsnv1u3t2pht938x5ryhbl768m.jpg</picture>
<name>Смеситель для душа FRAP H08 F2008 Хром</name>
<description></description>
</offer>
<offer id="18022" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_grohe_grohtherm_xl_35085_odnorychazhnyy_s_termostatom_khrom_35085000_35085000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=18022</url>
<price>98936</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0f5/yyxw3yv7ykdi708jhqiu5f6qnekv431y.jpg</picture>
<name>Смеситель для душа Grohe Grohtherm XL 35085 однорычажный с термостатом хром 35085000</name>
<description></description>
</offer>
<offer id="18255" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_kaiser_nova_23077_23077/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=18255</url>
<price>7577</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/51e/2mlctezt5j98ndrf1dwjdvwrhkj6bz0f.png</picture>
<name>Смеситель для душа KAISER Arena ф35 33077</name>
<description></description>
</offer>
<offer id="19533" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_dusha/smesitel_dlya_dusha_kaiser_eco_00077_00077/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_dusha&amp;utm_term=19533</url>
<price>7577</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1192</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ae1/g62qka9gq0rv3h0f3afmau30cyqmlawn.png</picture>
<name>Смеситель для душа KAISER Eco 00077</name>
<description></description>
</offer>
<offer id="17499" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/komplektuyushchie_k_kollektoram/sharovoy_kran_oventrop_dlya_konutrnoy_grebenki_3_4_nr_1406504_14065011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=komplektuyushchie_k_kollektoram&amp;utm_term=17499</url>
<price>1704</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1193</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bb5/xhztsz50mc2t94raj3x1c2r94f6n6wbj.png</picture>
<name>Шаровой кран OVENTROP для конутрной гребенки 3/4 Нр 1406504</name>
<description></description>
</offer>
<offer id="14541" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_240_600_mm_vkhod_90_110_s_lepestkovym_okonchaniem_110mm_alcaplast_a97_a97/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=14541</url>
<price>1295</price>
<purchase_price>341</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8be/5li3dn2c0uibrflu0lw69kky20spobbi.png</picture>
<name>ГОФРА для унитаза 240-600 мм вход 90-110 , с лепестковым окончанием 110мм AlcaPLAST A97</name>
<description></description>
</offer>
<offer id="15564" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_230_330mm_vkhod_97_107_s_metal_khomutom_vykhod_gladkiy_110mm_mcalpine_mrwc_f23pj/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=15564</url>
<price>1602</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac1/9aj1gaxmy6zjscb5dwms71zh7el2i9ur.jpg</picture>
<name>ГОФРА для унитаза 230-330мм вход 97-107 с метал. хомутом, выход гладкий 110мм McALPINE MRWC-F23PJ</name>
<description></description>
</offer>
<offer id="15763" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_pod_uglom_45_dlina_ot_31_5sm_do_44sm_mcalpine_mrwc_f16r_mrwc_f16r/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=15763</url>
<price>2259</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ccc/rrty1bbylexjndyyzb1zodskst5v3xt7.jpg</picture>
<name>ГОФРА для унитаза под углом 45° длина от 31,5см до 44см McALPINE MRWC-F16R</name>
<description></description>
</offer>
<offer id="17008" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/mufta_vstavnaya_vosstanovitel_rastruba_dlya_chugunnykh_kanalizatsionnoy_truby_dn_110/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=17008</url>
<price>1524</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9e8/0n3kebi168u7u640og0216ykjr00o3qg.jpg</picture>
<name>Муфта вставная (восстановитель раструба) для чугунных канализационной трубы DN 110</name>
<description></description>
</offer>
<offer id="17110" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/komplekt_dlya_podklyucheniya_installyatsiy_navesnogo_unitaza_s_fanovoy_truboy_f90_260mm_soedinitel_n/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=17110</url>
<price>2657</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3cf/985227bpiey7xy6z08cazwl380oojw3r.jpg</picture>
<name>Комплект для подключения инсталляций (навесного унитаза) с фановой трубой ф90-260мм, соединительным патрубком ф45/59-304мм, крепежными гайками и декоративными белыми заглушками McALPINE FP45R-KIT2</name>
<description></description>
</offer>
<offer id="18117" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_gladkim_okonchaniem_230_440mm_mcalpine_mrwc_f23p_mrwc_f23p/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18117</url>
<price>1455</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/04b/ejq961xwaa7ex17agr2m6x1gk8933nhk.png</picture>
<name>Гофра для унитаза с гладким окончанием 230-440мм McALPINE MRWC-F23P</name>
<description></description>
</offer>
<offer id="18118" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_lepestkovym_okonchaniem_230_440mm_mcalpine_mrwc_f23r_mrwc_f23r/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18118</url>
<price>1455</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0b1/hkl326n83apmhhp60g8nn3tywjqtzqri.png</picture>
<name>Гофра для унитаза с лепестковым окончанием 230-440мм McALPINE MRWC-F23R</name>
<description></description>
</offer>
<offer id="18119" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_gladkim_okonchaniem_330_850mm_mcalpine_mrwc_f33p_mrwc_f33p/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18119</url>
<price>1936</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ebc/8720t0q7rx4pavorvod7licktrkpcp3e.png</picture>
<name>Гофра для унитаза с гладким окончанием 330-850мм McALPINE MRWC-F33P</name>
<description></description>
</offer>
<offer id="18120" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_lepestkovym_okonchaniem_330_850mm_mcalpine_mrwc_f33r_mrwc_f33r/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18120</url>
<price>1936</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1dc/512kc5xktx46mpuj63ajk6ojo568bsno.png</picture>
<name>Гофра для унитаза с лепестковым окончанием 330-850мм McALPINE MRWC-F33R</name>
<description></description>
</offer>
<offer id="18121" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_gladkim_okonchaniem_200_330mm_mcalpine_mrwc_f20p_mrwc_f20p/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18121</url>
<price>1535</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7c8/jmzkxnjbm0h682g9qfoaaibr479wds53.png</picture>
<name>Гофра для унитаза с гладким окончанием 200-330мм McALPINE MRWC-F20P</name>
<description></description>
</offer>
<offer id="18122" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_s_lepestkovym_okonchaniem_200_330mm_mcalpine_mrwc_f20r_mrwc_f20r/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18122</url>
<price>1535</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/73b/g7uzxy6qpyif1z0u0gbdq5t9s8bqidkx.png</picture>
<name>Гофра для унитаза с лепестковым окончанием 200-330мм McALPINE MRWC-F20R</name>
<description></description>
</offer>
<offer id="18129" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/soedinitel_nyy_patrubok_f45_300mm_plastik_dlya_installyatsiy_viega_8310_79_495169_495169_viega/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18129</url>
<price>2352</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8d7/y5xoc4ujbk99p4a5jfkeqe4iweyu360i.jpg</picture>
<name>Соединительный патрубок ф45-300мм пластик  (для инсталляций) Viega [8310.79] 495169</name>
<description></description>
</offer>
<offer id="18175" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/truba_fanovaya_ekstsentrik_160mm_dlya_unitaza_150mm_smeshcheniem_vkhod_90_110mm_vykhod_110mm_mcalpin/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18175</url>
<price>4189</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/936/fk3vwvo1bcqjggayyjp17t3b7yz57jc7.png</picture>
<name>Труба фановая (эксцентрик) 160мм для унитаза (150мм смещением), вход 90-110мм, выход 110мм, McALPINE MRWCLO-15</name>
<description></description>
</offer>
<offer id="18178" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/truba_fanovaya_ekstsentrik_160mm_dlya_unitaza_100mm_smeshcheniem_vkhod_90_110mm_vykhod_110mm_mcalpin/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18178</url>
<price>4031</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/936/fk3vwvo1bcqjggayyjp17t3b7yz57jc7.png</picture>
<name>Труба фановая (эксцентрик) 160мм для унитаза (100мм смещением), вход 90-110мм, выход 110мм, McALPINE MRWCLO-10</name>
<description></description>
</offer>
<offer id="18179" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/truba_fanovaya_ekstsentrik_160mm_dlya_unitaza_80mm_smeshcheniem_vkhod_90_110mm_vykhod_110mm_mcalpine/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18179</url>
<price>2259</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/936/fk3vwvo1bcqjggayyjp17t3b7yz57jc7.png</picture>
<name>Труба фановая (эксцентрик) 160мм для унитаза (80мм смещением), вход 90-110мм, выход 110мм, McALPINE MRWCLO-8</name>
<description></description>
</offer>
<offer id="18240" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/vodoslivnaya_armatura/gofry_fanovye_truby_ekstsentriki_dlya_unitaza/gofra_dlya_unitaza_330_760mm_vkhod_97_107_s_metal_khomutom_vykhod_gladkiy_110mm_mcalpine_wc_f33pj_mr/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=gofry_fanovye_truby_ekstsentriki_dlya_unitaza&amp;utm_term=18240</url>
<price>2308</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1197</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ac1/9aj1gaxmy6zjscb5dwms71zh7el2i9ur.jpg</picture>
<name>ГОФРА для унитаза 330-760мм вход 97-107 с метал. хомутом, выход гладкий 110мм McALPINE WC-F33PJ</name>
<description></description>
</offer>
<offer id="15061" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/amerikanki_serye/fv_plast_amerikanka_polipropilenaya_f40_11_4_nar_pp_r_seraya_237040_aa237040054/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_serye&amp;utm_term=15061</url>
<price>1356</price>
<purchase_price>6</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1202</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/481/oulmdiuxewpq8vo13bnb2e5obkfazgqm.jpg</picture>
<name>FV-Plast Американка полипропиленая ф40-11/4 нар. PP-R  серая 237040</name>
<description></description>
</offer>
<offer id="16845" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/polipropilenovye_truby_i_fitingi/polipropilen_seryy/amerikanki_serye/fv_plast_razbornoe_soedinenie_polipropilenovoe_truba_truba_f_40_pp_r_seroe_224040_aa224040000/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=amerikanki_serye&amp;utm_term=16845</url>
<price>1872</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1202</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/888/nv4wds3re2voky1blkguz9qqzdz3x6ge.jpg</picture>
<name>FV-Plast Разборное соединение полипропиленовое труба-труба ф 40 PP-R  серое 224040</name>
<description></description>
</offer>
<offer id="17474" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_inzhenernaya/kollektory_i_aksessuary/kollektornye_shkafy/shkaf_raspredelitel_nyy_vstroennyy_6_7_vykhodov_shrv_2_670kh125kh596_scc_0002_000067/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=kollektornye_shkafy&amp;utm_term=17474</url>
<price>4665</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1208</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cdf/6x1rcqon16umrjj26se2kwfh1ebxay1u.jpg</picture>
<name>Шкаф распределительный встроенный 6-7 выходов (ШРВ-2) 670х125х596</name>
<description></description>
</offer>
<offer id="15295" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/kartridzh_modul_smennyy_fil_truyushchiy_akvafor_kh_kh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=15295</url>
<price>1605</price>
<purchase_price>639</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/070/9ox5bugejnqkp0403rjnnxb9115ohzkx.jpg</picture>
<name>Картридж (модуль сменный фильтрующий) Аквафор KH</name>
<description></description>
</offer>
<offer id="15570" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_trio_umyagchayushchiy_b510_03_04_07_b510_03_04_07/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=15570</url>
<price>3186</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/340/66di069cpdnurib43rt1n2fjyi2ce23b.jpg</picture>
<name>Комплект сменных модулей (картриджей) для Аквафор Трио Умягчающий B510-03-02-07</name>
<description></description>
</offer>
<offer id="16030" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/kartridzh_modul_smennyy_fil_truyushchiy_akvafor_k7_k7/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=16030</url>
<price>1605</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b93/szuucw0e8mtenlrkmdiq8vr02zs6mosx.jpg</picture>
<name>Картридж (модуль сменный фильтрующий) Аквафор K7</name>
<description></description>
</offer>
<offer id="16441" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/kartridzh_modul_smennyy_fil_truyushchiy_akvafor_k5_k5/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=16441</url>
<price>1265</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/687/anyd72tvuqufj3qk2dy26pglv60vkf7n.jpg</picture>
<name>Картридж (модуль сменный фильтрующий) Аквафор K5</name>
<description></description>
</offer>
<offer id="16540" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_kristall_a_k5_k2_k7_k5_k2_k7/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=16540</url>
<price>3347</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/sections_images/d47/irvzzbz62sl406n4iegb8ztj3tm9cbbw.jpeg</picture>
<name>Комплект сменных модулей (картриджей) для Аквафор Кристалл A K5-K2-K7</name>
<description></description>
</offer>
<offer id="16585" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/kartridzh_modul_smennyy_fil_truyushchiy_akvafor_k3_k3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=16585</url>
<price>1346</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/13e/2y7ursr6pnex717du2lvlr0ap4xa0ue6.jpg</picture>
<name>Картридж (модуль сменный фильтрующий) Аквафор K3</name>
<description></description>
</offer>
<offer id="17152" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_kristall_a_k3_k2_k7_k3_k2_k7/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=17152</url>
<price>3278</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/502/ov3i00ougvre4z719m6dvidqku9jr5nw.jpg</picture>
<name>Комплект сменных модулей (картриджей) для Аквафор Кристалл A K3-K2-K7</name>
<description></description>
</offer>
<offer id="17482" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_kristall_umyagchayushchiy_k3_kh_k7_k3_kh_k7/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=17482</url>
<price>3519</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/339/blcaznhtawlsd9q7r51pi5hu21klzcm4.jpg</picture>
<name>Комплект сменных модулей (картриджей) для Аквафор Кристалл Умягчающий K3-KH-K7</name>
<description></description>
</offer>
<offer id="17554" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_morion_k5_k2_k7m_k5_k2_k7m/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=17554</url>
<price>4353</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/338/bh9i17ltkngxovytkkh9fk7jk5t4d1md.png</picture>
<name>Комплект сменных модулей (картриджей)  для Аквафор Морион K5-K2-K7M</name>
<description></description>
</offer>
<offer id="17753" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/komplekt_smennykh_moduley_kartridzhey_dlya_akvafor_trio_norma_umyagchayushchiy_pp5_b510_04_02_pp5_b5/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=17753</url>
<price>2352</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a1b/ow2i563xzs2c1pc8dtqzk38l0mhjk4vv.jpg</picture>
<name>Комплект сменных модулей (картриджей) для Аквафор Трио Норма Умягчающий PP5-B510-04-02</name>
<description></description>
</offer>
<offer id="17876" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/pit_evye_fil_try_i_kartridzhi/smennye_kartridzhy_k_fil_tram/kartridzh_modul_smennyy_fil_truyushchiy_akvafor_k2_k2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smennye_kartridzhy_k_fil_tram&amp;utm_term=17876</url>
<price>1605</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1211</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b36/g70azvrb6n47mou4r2u58y9bjce9m1qp.jpg</picture>
<name>Картридж (модуль сменный фильтрующий) Аквафор K2</name>
<description></description>
</offer>
<offer id="14459" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_h21_f1021_odnorychazhnyy_khrom_f1021/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=14459</url>
<price>4945</price>
<purchase_price>23</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f87/8ycugcx4f3zex3k7lpcpebblq7gx9hu8.jpg</picture>
<name>Смеситель для раковины (рукомойника) Frap H21 F1021 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14648" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_county_66215_66211_odnorychazhnyy_khrom_66215_66211/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=14648</url>
<price>5693</price>
<purchase_price>2229</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/562/0p5f4tbth2yoi2kgppnbib3bfjonub3t.png</picture>
<name>Смеситель для раковины (рукомойника) Kaiser County 66215/66211 однорычажный, хром</name>
<description></description>
</offer>
<offer id="14672" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_nova_23011_odnorychazhnyy_khrom_23011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=14672</url>
<price>6452</price>
<purchase_price>2887</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0f7/m9xglmlvyq3yj53qckzd7whw8fnix6kw.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Nova 23011 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15013" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_gappo_noar_g1048_odnorychazhnyy_belyy_khrom_g1048/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15013</url>
<price>5482</price>
<purchase_price>34</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/fe4/yi6em3hoy8nwc60k94bgfp2jkp948opl.jpg</picture>
<name>Смеситель для раковины (рукомойника) Gappo Noar G1048 однорычажный, белый/хром</name>
<description></description>
</offer>
<offer id="15113" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_odnorychazhnyy_dlya_rakoviny_grohe_atrio_32043003_32043003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15113</url>
<price>30335</price>
<purchase_price>14500</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8bb/yul0usi6zcix8cpndqgf60ituixgp5wc.jpg</picture>
<name>Смеситель однорычажный для раковины GROHE Atrio 32043003</name>
<description></description>
</offer>
<offer id="15201" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_sena_74111_odnorychazhnyy_khrom_74111/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15201</url>
<price>8349</price>
<purchase_price>3465</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/41b/bnemd8ayi7wh5x84wnrm3cv73o1r5if4.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Sena 74111 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15337" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_s_gigienicheskim_dushem_gappo_jacob_g1207_odnorychazhnyy_khrom_g1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15337</url>
<price>7943</price>
<purchase_price>49</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c8b/00qub6x0mg55oytw9f4f662vrfb63ty3.jpg</picture>
<name>Смеситель для раковины (рукомойника) с гигиеническим душем Gappo Jacob G1207 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15530" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_s_gigienicheskim_dushem_hansa_twist_09302203_odnorychazhnyy_khrom/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15530</url>
<price>13752</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ee5/ajvn2b01m46fsw3iin0i4bmfu8mrgvmp.jpg</picture>
<name>Смеситель для раковины (рукомойника) с гигиеническим душем Hansa Twist 09302203 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15557" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_county_55210_55011_odnorychazhnyy_khrom_55210_55011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15557</url>
<price>6958</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/cd5/reuz539gr09pm49fafflyo9t5e33pohp.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser County 55210 / 55011 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15672" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_leon_19310_odnorychazhnyy_khrom_19310/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15672</url>
<price>6072</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ce7/bre3xi76eo1p57k9ydq5cm49wjlrtrz8.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Leon 19310 однорычажный, хром</name>
<description></description>
</offer>
<offer id="15896" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_h26_f1326_dvukhrychazhnyy_khrom_f1326/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=15896</url>
<price>3220</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/06f/uaz3frx8dk4mmmuabkha3cxildk4w7yj.jpg</picture>
<name>Смеситель для раковины (рукомойника) Frap H26 F1326 двухрычажный, хром</name>
<description></description>
</offer>
<offer id="16230" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_s_gigienicheskim_dushem_kaiser_douglas_12088_odnorychazhnyy_khrom/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=16230</url>
<price>9108</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b20/s3jpb4ops3w86wp5b6nk5runethjqiqj.jpg</picture>
<name>Смеситель для раковины (рукомойника) с гигиеническим душем Kaiser Douglas 12088 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16691" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_odnorychazhnyy_dlya_rakoviny_belbagno_roso_ros_lvm_crm_ros_lvm_crm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=16691</url>
<price>6116</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a3a/c1xlpamck5lhhadimedser08sqen4dzh.jpg</picture>
<name>Смеситель однорычажный для раковины BelBagno Roso ROS-LVM-CRM</name>
<description></description>
</offer>
<offer id="16762" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_h04_f1004_odnorychazhnyy_khrom_f1004/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=16762</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/09e/8g3jm0e5gol2t86rjus9fzvhoidxnooe.png</picture>
<name>Смеситель для раковины (рукомойника) Frap H04 F1004 однорычажный, хром</name>
<description></description>
</offer>
<offer id="16934" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_classic_16011_odnorychazhnyy_khrom_16011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=16934</url>
<price>7464</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/09e/jmq6x528jgx3anygfqws93gqpn6d0n3a.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Classic 16011 однорычажный, хром</name>
<description></description>
</offer>
<offer id="17029" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_s_gigienicheskim_dushem_gappo_moscow_g1208_odnorychazhnyy_belyy_kh/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=17029</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/7a8/c82b8ip6tdlthjs2je3pko3fctm8fhll.jpg</picture>
<name>Смеситель для раковины (рукомойника) с гигиеническим душем Gappo Moscow G1208 однорычажный, белый/хром</name>
<description></description>
</offer>
<offer id="17443" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_h03_f1003_odnorychazhnyy_khrom_f1003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=17443</url>
<price>3680</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/258/0woqvepunrkxybynb000xpq8qyjyh513.png</picture>
<name>Смеситель для раковины (рукомойника) Frap H03 F1003 однорычажный, хром</name>
<description></description>
</offer>
<offer id="17532" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_h07_f1007_odnorychazhnyy_khrom_f1007/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=17532</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bf7/sgjd69dfbvz0igvhgfmr9c8pvefvi5rv.jpg</picture>
<name>Смеситель для раковины (рукомойника) Frap H07 F1007 однорычажный, хром</name>
<description></description>
</offer>
<offer id="17647" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_odnorychazhnyy_dlya_rakoviny_ganzer_ganzer_silestis_gz77011d_bronza_gz_77011_d/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=17647</url>
<price>9352</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/6c7/jktubwtr65btqiv6uix34ch2vsx1ldrm.jpg</picture>
<name>Смеситель однорычажный для раковины GANZER (Ганзер) Silestis GZ77011D бронза</name>
<description></description>
</offer>
<offer id="17801" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_guss_68011_odnorychazhnyy_khrom_68011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=17801</url>
<price>6705</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/387/3s6pfww2em7h73i4m7967jiqmtqdxz2m.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Guss 68011 однорычажный, хром</name>
<description></description>
</offer>
<offer id="18085" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_termostaticheskiy_hansa_canyon_07612201_07612201/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=18085</url>
<price>149587</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/4bd/cba3dtcmmrpxw8g13iaje0iyt23q0ptc.jpg</picture>
<name>Смеситель для раковины (рукомойника) термостатический Hansa Canyon 07612201</name>
<description></description>
</offer>
<offer id="18229" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_kaiser_sonat_34011_odnorychazhnyy_khrom_34011/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=18229</url>
<price>8349</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f78/6cz6kw8aeex38hg6fde5r0950r2bhj3u.jpg</picture>
<name>Смеситель для раковины (рукомойника) Kaiser Sonat 34011 однорычажный, хром</name>
<description></description>
</offer>
<offer id="18401" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_rakoviny/smesitel_dlya_rakoviny_rukomoynika_frap_f512_1_sensornyy_s_termostatom_khrom_f512_1/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_rakoviny&amp;utm_term=18401</url>
<price>11318</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1212</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b1e/4ei29wpe1359l2soa8sb1khhznhrchhi.jpg</picture>
<name>Смеситель для раковины (рукомойника) Frap F512-1 сенсорный, с термостатом, хром</name>
<description></description>
</offer>
<offer id="14489" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/rakoviny_v_vannuyu_komnatu/rakovina_melana_mln_7027a_mln_7027a/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rakoviny_v_vannuyu_komnatu&amp;utm_term=14489</url>
<price>6461</price>
<purchase_price>35</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1214</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/305/3de2757tef3fte6o0wkws8tk3j18z2to.jpg</picture>
<name>Раковина MELANA MLN-7027А</name>
<description></description>
</offer>
<offer id="16345" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/rakoviny_v_vannuyu_komnatu/rakovina_melana_mln_78115_mln_78115/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rakoviny_v_vannuyu_komnatu&amp;utm_term=16345</url>
<price>9135</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1214</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a66/aqjpv5gboiuih103d0r9pk7jd7n9veeu.jpg</picture>
<name>Раковина MELANA MLN-78115</name>
<description></description>
</offer>
<offer id="17529" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/rakoviny_v_vannuyu_komnatu/rakovina_melana_mln_7167_mln_7167/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rakoviny_v_vannuyu_komnatu&amp;utm_term=17529</url>
<price>6195</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1214</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/69d/oitqfrct4idgi5f7htjpd04ikssskco4.jpg</picture>
<name>Раковина MELANA MLN-7167</name>
<description></description>
</offer>
<offer id="18006" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/rakoviny_v_vannuyu_komnatu/rakovina_melana_mln_e408_mln_e408/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rakoviny_v_vannuyu_komnatu&amp;utm_term=18006</url>
<price>12379</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1214</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/838/0q0v5c9r3sddwdwqplslr7ipngd809cr.jpg</picture>
<name>Раковина MELANA MLN-E408</name>
<description></description>
</offer>
<offer id="18017" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/rakoviny_v_vannuyu_komnatu/rakovina_melana_mln_9060d_mln_9060d/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=rakoviny_v_vannuyu_komnatu&amp;utm_term=18017</url>
<price>8205</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1214</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/531/8wru9tklyf03q5cbp49290vlizrm925b.jpg</picture>
<name>Раковина MELANA MLN-9060D</name>
<description></description>
</offer>
<offer id="15440" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/frap/uglovaya_steklyannaya_polka_frap_f1607_3_f1607_3/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=frap&amp;utm_term=15440</url>
<price>3681</price>
<purchase_price>13</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1215</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/10e/usydg8rnx83rw8lo03z2ro8i47w8qzdq.jpg</picture>
<name>Угловая стеклянная полка Frap F1607-3</name>
<description></description>
</offer>
<offer id="15508" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/frap/uglovaya_steklyannaya_polka_frap_f1607_2_f1607_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=frap&amp;utm_term=15508</url>
<price>2789</price>
<purchase_price>11</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1215</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/16e/7bhrjxsf1vospd84rerwm8vgn2wbz6dj.jpg</picture>
<name>Угловая стеклянная полка Frap F1607-2</name>
<description></description>
</offer>
<offer id="15730" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/frap/dva_stakana_s_derzhatelem_gappo_g1608_g1608/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=frap&amp;utm_term=15730</url>
<price>1227</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1215</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/c7a/yahto7i10qxl16v5ul21hxpccr9gvww4.jpg</picture>
<name>Два стакана с держателем Gappo G1608</name>
<description></description>
</offer>
<offer id="17147" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/frap/polotentsederzhatel_na_samokleyushcheysya_osnove_frap_f3813_f3813/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=frap&amp;utm_term=17147</url>
<price>1290</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1215</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b6b/ply5cfqgjuac0jy8tgz2nece9ub5bfnb.png</picture>
<name>Полотенцедержатель на самоклеющейся основе FRAP F3813</name>
<description></description>
</offer>
<offer id="17444" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/frap/polotentsederzhatel_frap_16_f1609_khrom_f1609/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=frap&amp;utm_term=17444</url>
<price>1189</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1215</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/68a/fnjziy92vbrax1yhq6f9t3hp17pvg2ly.jpg</picture>
<name>Полотенцедержатель FRAP 16 F1609 Хром</name>
<description></description>
</offer>
<offer id="15459" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frap_h02_f2202_f2202/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=15459</url>
<price>5750</price>
<purchase_price>32</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/39a/rsdicu83odt8mk9je9ecrbj3j0dgx6p4.jpg</picture>
<name>Смеситель однорычажный универсальный Frap H02 F2202</name>
<description></description>
</offer>
<offer id="15481" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_kaiser_classic_16055y_l_16055y_l/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=15481</url>
<price>11718</price>
<purchase_price>5348</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/8f4/2w3ix7k8o7bqn8ayvill6zneed0g0tr9.jpg</picture>
<name>Смеситель однорычажный универсальный KAISER Classic 16055Y-L</name>
<description></description>
</offer>
<offer id="15502" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_dlya_vanny_grohe_atrio_new_32653_003_32653003_32653003/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=15502</url>
<price>135254</price>
<purchase_price>60000</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f14/4pd76qina3plu0anyaik6n11z5negc54.png</picture>
<name>Смеситель однорычажный для ванны Grohe Atrio New 32653 003 (32653003)</name>
<description></description>
</offer>
<offer id="15503" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_county_55221_55022_smesitel_dlya_vanny_kaiser_county_55221_55022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=15503</url>
<price>9994</price>
<purchase_price>4368</purchase_price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a50/h3gsk6wptbtlhadw9jz77lx3s4v7be90.jpg</picture>
<name>KAISER County 55221/55022 Смеситель для ванны</name>
<description></description>
</offer>
<offer id="15807" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_universal_nyy_frap_h19_f2619_2_f2619_2/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=15807</url>
<price>5520</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/47f/ricgkblu82z1tkakellu5p36e4q95dgv.png</picture>
<name>Смеситель двухрычажный универсальный Frap H19 F2619-2</name>
<description></description>
</offer>
<offer id="16246" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_classic_16022_smesitel_dlya_vanny_kaiser_classic_16022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=16246</url>
<price>12199</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/0c6/zywxgj90n55r6ox7ss0kd60gq9x7my6l.jpg</picture>
<name>KAISER Classic 16022 Смеситель для ванны</name>
<description></description>
</offer>
<offer id="16258" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_smesitel_universal_nyy_frud_r108_r22108_r22108/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=16258</url>
<price>3680</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/3eb/sxj8lhai41vpkec5atxfj45lhnwgke10.jpg</picture>
<name>Смеситель двухрычажный смеситель универсальный Frud R108 R22108</name>
<description></description>
</offer>
<offer id="16507" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frap_h07_f2207_f2207/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=16507</url>
<price>6900</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2ff/r57jpl63zv4r4w5pbksmfoetf3r0edc4.jpg</picture>
<name>Смеситель однорычажный универсальный Frap H07 F2207</name>
<description></description>
</offer>
<offer id="16523" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_universal_nyy_viko_v_1015_v_1015/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=16523</url>
<price>3163</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e28/qh9jl225k1uvz7gzxeoxnqq3smmca1f5.jpg</picture>
<name>Смеситель двухрычажный универсальный VIKO V-1015</name>
<description></description>
</offer>
<offer id="16620" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_guss_68022_smesitel_dlya_vanny_68022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=16620</url>
<price>11512</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/651/rk18cnqaqvncsuj8h4yl710uu9hynfk7.jpg</picture>
<name>KAISER Guss 68022 Смеситель для ванны</name>
<description></description>
</offer>
<offer id="17010" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_universal_nyy_kaiser_carlson_11055_11055/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17010</url>
<price>9235</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/858/60e5wvex3ahbkyvt021z6foz8wfwq2of.jpg</picture>
<name>Смеситель двухрычажный универсальный KAISER Carlson 11055</name>
<description></description>
</offer>
<offer id="17169" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_kaiser_county_55255_55255/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17169</url>
<price>10917</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/b07/fsta9b68uc3s9dd2id01z9zdwyvq9f6l.jpg</picture>
<name>Смеситель однорычажный универсальный KAISER County 55255</name>
<description></description>
</offer>
<offer id="17366" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_dlya_vanny_s_dushem_cezares_globo_f_bvd4_01_globo_f_bvd4_01/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17366</url>
<price>32105</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/d3a/d74hlw2c4occzybjhs7lud557q3ltmty.jpg</picture>
<name>Смеситель двухрычажный для ванны с душем CEZARES Globo F-BVD4-01</name>
<description></description>
</offer>
<offer id="17428" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_universal_nyy_viko_v_1555_v_1555/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17428</url>
<price>3163</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/e28/qh9jl225k1uvz7gzxeoxnqq3smmca1f5.jpg</picture>
<name>Смеситель двухрычажный универсальный VIKO V-1555</name>
<description></description>
</offer>
<offer id="17561" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_kaiser_city_20455_20455/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17561</url>
<price>9614</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/1b6/7iyf55e1rod2unyfa2xwy5s5994ew12p.jpg</picture>
<name>Смеситель однорычажный универсальный KAISER City 20455</name>
<description></description>
</offer>
<offer id="17664" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dlya_vanny_frap_h04_f3204_f3204/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17664</url>
<price>7647</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/bbb/sgy27bl6mnml28n8tv1pjpvs3cu0pqjf.jpg</picture>
<name>Смеситель для ванны FRAP H04 F3204</name>
<description></description>
</offer>
<offer id="17686" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_kaiser_nova_23055b_23055v/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=17686</url>
<price>11385</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/2c0/0eqjtghhfcro89fdkbr906v3cd2ldp4r.jpg</picture>
<name>Смеситель однорычажный универсальный KAISER Nova 23055B</name>
<description></description>
</offer>
<offer id="18238" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_kaiser_orbit_20055b_20055_b/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=18238</url>
<price>10753</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/609/t9u956ugmowq7m05ssnof6zor5qwkyv1.jpg</picture>
<name>Смеситель однорычажный универсальный KAISER Orbit 20055B</name>
<description></description>
</offer>
<offer id="18420" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dvukhrychazhnyy_universal_nyy_kaiser_carlson_lux_11056k_11056k/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=18420</url>
<price>10653</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/64f/u8q7b2x3gc53adcoqe2ombb805w7sf2f.jpg</picture>
<name>Смеситель двухрычажный универсальный KAISER Carlson Lux 11056K</name>
<description></description>
</offer>
<offer id="19586" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_safira_15022_smesitel_dlya_vanny_15022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19586</url>
<price>10753</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/9a1/end5tgi2tbey26kcshvnq4z7mz4xr86a.png</picture>
<name>KAISER Safira 15022  Смеситель для ванны</name>
<description></description>
</offer>
<offer id="19587" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_eco_00022_smesitel_dlya_vanny_00022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19587</url>
<price>10500</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/05c/2knm8ny8d4835vtuo0ofn5ek8u1c7swz.png</picture>
<name>KAISER Eco 00022  Смеситель для ванны</name>
<description></description>
</offer>
<offer id="19591" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_dlya_vanny_kaiser_guss_68055_68055/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19591</url>
<price>11006</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/5b0/6lc7w7c97rgflbu661q1zkhpyupkbdzu.png</picture>
<name>Смеситель однорычажный для ванны KAISER Guss 68055</name>
<description></description>
</offer>
<offer id="19594" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/kaiser_areva_08022_smesitel_dlya_vanny_08022/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19594</url>
<price>9488</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/895/amyod8hlmtb87sy5yvlnt84wuq9rk707.png</picture>
<name>KAISER Areva 08022  Смеситель для ванны</name>
<description></description>
</offer>
<offer id="19596" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frud_r101_r22101_r22101/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19596</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/54c/vj3yyr3vtkr2cy5txuks3pw4sdh2t0mo.png</picture>
<name>Смеситель однорычажный универсальный Frud  R101 R22101</name>
<description></description>
</offer>
<offer id="19597" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frud_r106_r22106_r22106/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19597</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/ce2/mwxfsvc06mbtl2us2kjooep5rk7ak8m3.jpg</picture>
<name>Смеситель однорычажный универсальный Frud  R106 R22106</name>
<description></description>
</offer>
<offer id="19598" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frud_r102_r22102_r22102/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19598</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/69f/0iwqy51o49rw0pj63f53znmo3zqfpowj.png</picture>
<name>Смеситель однорычажный универсальный Frud R102 R22102</name>
<description></description>
</offer>
<offer id="19602" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_dlya_vanny_frud_r105_r32105_r32105/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19602</url>
<price>4945</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a22/z05bbxxk8ou2nn53j62d5b7ud6ukpb1x.png</picture>
<name>Смеситель для ванны FRUD R105 R32105</name>
<description></description>
</offer>
<offer id="19690" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/smesiteli_i_komplektuyushchie/smesiteli_dlya_vanny/smesitel_odnorychazhnyy_universal_nyy_frud_r105_r22105_r22105/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=smesiteli_dlya_vanny&amp;utm_term=19690</url>
<price>5060</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1217</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/20c/8r8f3ac355hfi50wg4ncl70wcatu5ih6.png</picture>
<name>Смеситель однорычажный универсальный Frud R105 R22105</name>
<description></description>
</offer>
<offer id="16047" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/sgon_latunnyy_n_uni_fitt_3_4_x_200_mm_659g3200_659g3200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16047</url>
<price>1526</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/5lquyzjk80hbawvzcudjshg51vrgulxp.jpg</picture>
<name>Сгон латунный  Н UNI-FITT 3/4 x 200 мм 659G3200</name>
<description></description>
</offer>
<offer id="16048" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/sgon_latunnyy_n_uni_fitt_1_2_kh_200_mm_659g2200_659g2200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16048</url>
<price>1180</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/5lquyzjk80hbawvzcudjshg51vrgulxp.jpg</picture>
<name>Сгон латунный  Н UNI-FITT 1/2 х 200 мм 659G2200</name>
<description></description>
</offer>
<offer id="16050" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/sgon_latunnyy_n_uni_fitt_1_x_200_mm_659g4200_659g4200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16050</url>
<price>1894</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/5lquyzjk80hbawvzcudjshg51vrgulxp.jpg</picture>
<name>Сгон латунный  Н UNI-FITT 1&quot; x 200 мм 659G4200</name>
<description></description>
</offer>
<offer id="16051" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/sgon_latunnyy_n_uni_fitt_3_4_x_150_mm_659g3150_659g3150/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16051</url>
<price>1159</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/5lquyzjk80hbawvzcudjshg51vrgulxp.jpg</picture>
<name>Сгон латунный  Н UNI-FITT 3/4 x 150 мм 659G3150</name>
<description></description>
</offer>
<offer id="16053" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/sgon_latunnyy_n_uni_fitt_1_kh_150_mm_659g4150_659g4150/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16053</url>
<price>1769</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/a70/5lquyzjk80hbawvzcudjshg51vrgulxp.jpg</picture>
<name>Сгон латунный  Н UNI-FITT 1&quot; х 150 мм 659G4150</name>
<description></description>
</offer>
<offer id="16059" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_latunnyy_tiemme_nn_1_x_90_mm_1500373_1500373/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16059</url>
<price>2222</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/678/1ex7alanyva5pblhwpkceupz9159gpw9.jpg</picture>
<name>Удлинитель ( бочонок ) латунный Tiemme НН 1&quot; x 90 мм 1500373</name>
<description></description>
</offer>
<offer id="16073" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_latunnyy_nn_uni_fitt_3_4_x_250_mm_658g3250_658g3250/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16073</url>
<price>1714</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/678/1ex7alanyva5pblhwpkceupz9159gpw9.jpg</picture>
<name>Удлинитель ( бочонок ) латунный НН UNI-FITT 3/4 x 250 мм 658G3250</name>
<description></description>
</offer>
<offer id="16075" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_latunnyy_nn_uni_fitt_1_x_250_mm_658g4250_658g4250/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16075</url>
<price>2327</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/678/1ex7alanyva5pblhwpkceupz9159gpw9.jpg</picture>
<name>Удлинитель ( бочонок ) латунный НН UNI-FITT 1&quot; x 250 мм 658G4250</name>
<description></description>
</offer>
<offer id="16076" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_latunnyy_nn_uni_fitt_3_4_x_200_mm_658g3200_658g3200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16076</url>
<price>1402</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/678/1ex7alanyva5pblhwpkceupz9159gpw9.jpg</picture>
<name>Удлинитель ( бочонок ) латунный НН UNI-FITT 3/4 x 200 мм 658G3200</name>
<description></description>
</offer>
<offer id="16078" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_latunnyy_nn_uni_fitt_1_x_200_mm_658g4200_658g4200/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16078</url>
<price>1806</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/678/1ex7alanyva5pblhwpkceupz9159gpw9.jpg</picture>
<name>Удлинитель ( бочонок ) латунный НН UNI-FITT 1&quot; x 200 мм 658G4200</name>
<description></description>
</offer>
<offer id="16385" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_bochonok_nn_250_mm_kh_1_2_valtec_vtr_652_n_0425_vtr_652_n_0425/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16385</url>
<price>1155</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/f75/7narjb1589v3uzyvlc0uhh4qmhv1myeq.jpg</picture>
<name>Удлинитель ( бочонок ) НН 250 мм х 1/2 VALTEC VTr.652.N.0425</name>
<description></description>
</offer>
<offer id="16625" available="true">
<url>http://santehnic-market.ru/catalog/santekhnicheskie_rez_bovye_fitingi/rez_bovye_fitingi/fitingi_latunnye/sgony_bochata_i_udliniteli_latunnye/udlinitel_latunnyy_nv_1_kh_70_mm/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=sgony_bochata_i_udliniteli_latunnye&amp;utm_term=16625</url>
<price>1229</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1218</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/935/zffg37vrx49rmyaz0ewrghn6ustukheg.jpg</picture>
<name>Удлинитель латунный НВ 1&quot; х 70 мм</name>
<description></description>
</offer>
<offer id="19742" available="true">
<url>http://santehnic-market.ru/catalog/santekhnika_chistovaya/aksessuary_dlya_vannoy_i_tualeta/dozatory_v_vannuyu_komnatu_v_vannuyu_komnatu/dozator_dlya_zhidkogo_myla_frap_f402_f402/?r1=&amp;r2=&amp;utm_source=yandex_market&amp;utm_medium=cpc&amp;utm_campaign=dozatory_v_vannuyu_komnatu_v_vannuyu_komnatu&amp;utm_term=19742</url>
<price>1426</price>
<currencyId>RUB</currencyId>
<vendor></vendor>
<categoryId>1239</categoryId>
<picture>http://santehnic-market.ru/upload/iblock/025/s3h7040cx9eh7kzu7ze40zxp9srjci06.png</picture>
<name>Дозатор для жидкого мыла FRAP F402</name>
<description></description>
</offer>
</offers>
</shop>
</yml_catalog>
