-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2024 г., 17:40
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `School`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Courses`
--

CREATE TABLE `Courses` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Courses`
--

INSERT INTO `Courses` (`id`, `name`) VALUES
(1, 'Математика'),
(2, 'Русский язык'),
(3, 'Литература'),
(4, 'Английский язык'),
(5, 'История'),
(6, 'География'),
(7, 'Биология'),
(8, 'Химия'),
(9, 'Физика');

-- --------------------------------------------------------

--
-- Структура таблицы `Days`
--

CREATE TABLE `Days` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Days`
--

INSERT INTO `Days` (`id`, `name`) VALUES
(1, 'Понедельник'),
(2, 'Вторник'),
(3, 'Среда'),
(4, 'Четверг'),
(5, 'Пятница');

-- --------------------------------------------------------

--
-- Структура таблицы `Events`
--

CREATE TABLE `Events` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Events`
--

INSERT INTO `Events` (`id`, `image`, `title`, `description`) VALUES
(1, 'https://gazeta-chertanovo-juzhnoe.ru/wp-content/uploads/2022/12/file6junnt0vfupqjl1yl-scaled.jpg', 'Конкурс \"Талантливые перышки\"', 'На данном событии ученики могут продемонстрировать свои литературные таланты, представив свои собственные произведения. Участникам предоставляется возможность читать свои тексты перед аудиторией или представить их в виде драматического спектакля или поэтического флешмоба.'),
(2, 'https://www.riakchr.ru/upload/iblock/d20/d202e7aa674a03aba276313fe20060fe.jpg', 'Спортивный турнир \"Звезды площадки\"', 'Это соревнование проводится среди команд различных классов. Участники могут показать свои спортивные навыки в футболе, баскетболе, волейболе и других командных видах спорта. Турнир способствует развитию спортивных навыков, укреплению дружеских отношений между учениками и созданию командной солидарности.'),
(3, 'http://lic-zheldor.ru/d/2012-09-29__09.jpg', 'Встреча с выпускниками \"Путь к успеху\"', 'Это мероприятие организуется для учащихся старших классов, чтобы они могли обсудить свои будущие карьерные планы с бывшими выпускниками школы. Выпускники, уже имеющие опыт работы или учебы за пределами школы, делятся своими историями успеха, советами по выбору профессии и предлагают помощь в ориентации на рынке труда.'),
(4, 'https://fondserova.ru/wp-content/uploads/2019/07/d2f9a5_40fe5118216d44b9b9c7ade490c80d15.jpg', 'Выставка \"Творческое многообразие\"', 'Это событие представляет возможность учащимся продемонстрировать свои художественные способности и исследовательские навыки. Участники выставки представляют свои работы в различных видах искусства, таких как живопись, скульптура, фотография, дизайн, графика. Это способствует развитию творческого мышления и помогает ученикам найти свою индивидуальность в сфере искусства.'),
(5, 'https://bimcbali.com/wp-content/uploads/2018/07/Keep-Kids-Fit-and-Healthy-This-Summer.jpg', 'День здоровья \"Здоровое будущее\"', 'Это событие организуется с целью пропаганды здорового образа жизни среди учащихся. В этот день проводятся специальные мероприятия, такие как зарядка, спортивные игры, мастер-классы по правильному питанию и гигиене. Также проводятся лекции и презентации о важности здорового образа жизни и профилактике различных заболеваний.');

-- --------------------------------------------------------

--
-- Структура таблицы `Groupss`
--

CREATE TABLE `Groupss` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Groupss`
--

INSERT INTO `Groupss` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11');

-- --------------------------------------------------------

--
-- Структура таблицы `Ratings`
--

CREATE TABLE `Ratings` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Ratings`
--

INSERT INTO `Ratings` (`id`, `student_id`, `course_id`, `rating`) VALUES
(1, 3, 4, 3),
(2, 3, 1, 5),
(3, 3, 7, 3),
(4, 3, 6, 5),
(5, 3, 5, 4),
(7, 3, 9, 3),
(8, 3, 8, 4),
(9, 3, 2, 4),
(10, 3, 4, 2),
(11, 3, 1, 5),
(12, 3, 7, 4),
(13, 3, 6, 3),
(25, 4, 3, 5),
(26, 4, 3, 5),
(27, 4, 3, 5),
(34, 3, 3, 5),
(35, 3, 3, 4),
(36, 3, 3, 3),
(37, 9, 3, 2),
(38, 9, 3, 3),
(39, 9, 3, 3),
(40, 10, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Shedules`
--

CREATE TABLE `Shedules` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `day_id` int NOT NULL,
  `schedule_time` time NOT NULL,
  `group_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Shedules`
--

INSERT INTO `Shedules` (`id`, `course_id`, `day_id`, `schedule_time`, `group_id`) VALUES
(68, 4, 1, '11:40:00', 4),
(69, 2, 2, '09:20:00', 4),
(70, 2, 3, '09:20:00', 4),
(71, 3, 4, '09:20:00', 4),
(72, 7, 5, '09:20:00', 4),
(73, 7, 1, '09:20:00', 3),
(74, 1, 1, '08:30:00', 5),
(75, 6, 1, '09:20:00', 5),
(76, 4, 2, '08:30:00', 5),
(77, 4, 2, '09:20:00', 5),
(78, 9, 2, '10:10:00', 5),
(79, 1, 3, '08:30:00', 5),
(80, 9, 3, '09:20:00', 5),
(81, 7, 4, '08:30:00', 5),
(82, 5, 4, '09:20:00', 5),
(83, 9, 5, '08:30:00', 5),
(84, 1, 5, '09:20:00', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `StudentGroups`
--

CREATE TABLE `StudentGroups` (
  `id` int NOT NULL,
  `group_id` int NOT NULL,
  `student_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `StudentGroups`
--

INSERT INTO `StudentGroups` (`id`, `group_id`, `student_id`) VALUES
(1, 5, 3),
(2, 6, 4),
(3, 5, 9),
(4, 5, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `Teachers`
--

CREATE TABLE `Teachers` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `teacher_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Teachers`
--

INSERT INTO `Teachers` (`id`, `course_id`, `teacher_id`) VALUES
(1, 3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `login`, `password`, `user_type`) VALUES
(1, 'Валентина', 'Краснова', 'admin', '123', 1),
(2, 'Наталья', 'Жукова', 'teacher', '123', 2),
(3, 'Виктор', 'Комаров', 'student', '123', 3),
(4, 'Никита', 'Бузуев', 'buzuev_n', '123456', 3),
(5, 'Мария', 'Соболева', 'soboleva_m', '123456', 2),
(6, 'Мария', 'Соболева', 'soboleva_m', '123456', 2),
(7, 'Мария', 'Соболева', 'soboleva_m', '123456', 2),
(8, 'Алексей', 'Соболев', 'sobolev_a', '123456', 2),
(9, 'Елизавета', 'Крылова', 'student2', '123', 3),
(10, 'Афанасий ', 'Сидоров', 'student3', '123', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `UserType`
--

CREATE TABLE `UserType` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `UserType`
--

INSERT INTO `UserType` (`id`, `name`) VALUES
(1, 'Администратор'),
(2, 'Учитель'),
(3, 'Ученик');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Days`
--
ALTER TABLE `Days`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Groupss`
--
ALTER TABLE `Groupss`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Ratings`
--
ALTER TABLE `Ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Индексы таблицы `Shedules`
--
ALTER TABLE `Shedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `day_id` (`day_id`);

--
-- Индексы таблицы `StudentGroups`
--
ALTER TABLE `StudentGroups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Индексы таблицы `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type` (`user_type`);

--
-- Индексы таблицы `UserType`
--
ALTER TABLE `UserType`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `Days`
--
ALTER TABLE `Days`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Events`
--
ALTER TABLE `Events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `Groupss`
--
ALTER TABLE `Groupss`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `Ratings`
--
ALTER TABLE `Ratings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `Shedules`
--
ALTER TABLE `Shedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `StudentGroups`
--
ALTER TABLE `StudentGroups`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `UserType`
--
ALTER TABLE `UserType`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Ratings`
--
ALTER TABLE `Ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`);

--
-- Ограничения внешнего ключа таблицы `Shedules`
--
ALTER TABLE `Shedules`
  ADD CONSTRAINT `shedules_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`),
  ADD CONSTRAINT `shedules_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `Days` (`id`);

--
-- Ограничения внешнего ключа таблицы `StudentGroups`
--
ALTER TABLE `StudentGroups`
  ADD CONSTRAINT `studentgroups_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `studentgroups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `Groupss` (`id`);

--
-- Ограничения внешнего ключа таблицы `Teachers`
--
ALTER TABLE `Teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `Users` (`id`);

--
-- Ограничения внешнего ключа таблицы `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `UserType` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
