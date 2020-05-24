DROP DATABASE IF EXISTS university;
CREATE DATABASE university collate utf16_general_ci;
USE university;

CREATE TABLE facultys
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    faculty VARCHAR(10) NOT NULL
);

INSERT INTO facultys(faculty) VALUES('ФИиВТ');
INSERT INTO facultys(faculty) VALUES('ФУП');
INSERT INTO facultys(faculty) VALUES('ЭФ');

CREATE TABLE groups_students
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name_group VARCHAR(20) NOT NULL,
    faculty_id INT,
    FOREIGN KEY (faculty_id) REFERENCES facultys(id)
);

INSERT INTO groups_students(name_group, faculty_id) VALUES('ПС', 1);
INSERT INTO groups_students(name_group, faculty_id) VALUES('ИВТ', 1);
INSERT INTO groups_students(name_group, faculty_id) VALUES('БИ', 1);
INSERT INTO groups_students(name_group, faculty_id) VALUES('СУЗиС', 2);
INSERT INTO groups_students(name_group, faculty_id) VALUES('СТР', 2);
INSERT INTO groups_students(name_group, faculty_id) VALUES('АРХ', 2);
INSERT INTO groups_students(name_group, faculty_id) VALUES('ОМ', 3);
INSERT INTO groups_students(name_group, faculty_id) VALUES('УПР', 3);
INSERT INTO groups_students(name_group, faculty_id) VALUES('ОП', 3);

CREATE TABLE students
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(20) NOT NULL,
    age INT,
    student_group_id INT,
    FOREIGN KEY (student_group_id) REFERENCES groups_students(id)
);  

INSERT INTO students(full_name, age, student_group_id) VALUES('Егоров Кирилл', 19, 1);
INSERT INTO students(full_name, age, student_group_id) VALUES('Дроздов Александр', 18, 1);
INSERT INTO students(full_name, age, student_group_id) VALUES('Ерошкин Глеб', 17, 1);
INSERT INTO students(full_name, age, student_group_id) VALUES('Васильев Руслан', 20, 1);
INSERT INTO students(full_name, age, student_group_id) VALUES('Герасимов Данил', 11, 1);
INSERT INTO students(full_name, age, student_group_id) VALUES('Глазырин Никита', 19, 2);
INSERT INTO students(full_name, age, student_group_id) VALUES('Попков Сергей', 18, 2);
INSERT INTO students(full_name, age, student_group_id) VALUES('Александров Николай', 19, 2);
INSERT INTO students(full_name, age, student_group_id) VALUES('Пушкин Александр', 20, 2);
INSERT INTO students(full_name, age, student_group_id) VALUES('Толстой Лев', 29, 2);
INSERT INTO students(full_name, age, student_group_id) VALUES('Тесла Никола', 19, 3);
INSERT INTO students(full_name, age, student_group_id) VALUES('Ньютон Исаак', 29, 3);
INSERT INTO students(full_name, age, student_group_id) VALUES('Иванов Владимир', 39, 3);
INSERT INTO students(full_name, age, student_group_id) VALUES('Путин Дмитрий', 18, 3);
INSERT INTO students(full_name, age, student_group_id) VALUES('Иванов Иван', 17, 3);
INSERT INTO students(full_name, age, student_group_id) VALUES('Сергеев Сергей', 20, 4);
INSERT INTO students(full_name, age, student_group_id) VALUES('Павлов Андрей', 19, 4);
INSERT INTO students(full_name, age, student_group_id) VALUES('Смирнов Николай', 19, 4);
INSERT INTO students(full_name, age, student_group_id) VALUES('Алексеев Алексей', 20, 4);
INSERT INTO students(full_name, age, student_group_id) VALUES('Егоров Егор', 21, 4);
INSERT INTO students(full_name, age, student_group_id) VALUES('Кузьмин Олег', 23, 5);
INSERT INTO students(full_name, age, student_group_id) VALUES('Князев Владислав', 19, 5);
INSERT INTO students(full_name, age, student_group_id) VALUES('Яковлев Иван', 25, 5);
INSERT INTO students(full_name, age, student_group_id) VALUES('Мухортов Олег', 19, 5);
INSERT INTO students(full_name, age, student_group_id) VALUES('Яковлев Иван', 20, 5);
INSERT INTO students(full_name, age, student_group_id) VALUES('Смирнов Андрей', 19, 6);
INSERT INTO students(full_name, age, student_group_id) VALUES('Андреев Иван', 17, 6);
INSERT INTO students(full_name, age, student_group_id) VALUES('Рыбаков Алексей', 19, 6);
INSERT INTO students(full_name, age, student_group_id) VALUES('Быстров Иван', 22, 6);
INSERT INTO students(full_name, age, student_group_id) VALUES('Илон Маск', 19, 6);
INSERT INTO students(full_name, age, student_group_id) VALUES('Джобс Стив', 18, 7);
INSERT INTO students(full_name, age, student_group_id) VALUES('Кук Джеймс', 20, 7);
INSERT INTO students(full_name, age, student_group_id) VALUES('Серов Евгений', 19, 7);
INSERT INTO students(full_name, age, student_group_id) VALUES('Ильин Александр', 21, 7);
INSERT INTO students(full_name, age, student_group_id) VALUES('Ястребов Алексей', 22, 7);
INSERT INTO students(full_name, age, student_group_id) VALUES('Рыжов Данил', 19, 8);
INSERT INTO students(full_name, age, student_group_id) VALUES('Голубков Иван', 22, 8);
INSERT INTO students(full_name, age, student_group_id) VALUES('Чернов Владислав', 21, 8);
INSERT INTO students(full_name, age, student_group_id) VALUES('Николаев Николай', 19, 8);
INSERT INTO students(full_name, age, student_group_id) VALUES('Максимов Максим', 20, 8);
INSERT INTO students(full_name, age, student_group_id) VALUES('Юрьев Иван', 19, 9);
INSERT INTO students(full_name, age, student_group_id) VALUES('Малышев Андрей', 35, 9);
INSERT INTO students(full_name, age, student_group_id) VALUES('Большунов Виталий', 19, 9);
INSERT INTO students(full_name, age, student_group_id) VALUES('Богатырев Владимир', 40, 9);
INSERT INTO students(full_name, age, student_group_id) VALUES('Клюев Иван', 19, 9);

