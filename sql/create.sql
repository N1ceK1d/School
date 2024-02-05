CREATE DATABASE School;

USE School;

CREATE TABLE UserType (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE Users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL, 
    login VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type INT NOT NULL,
    FOREIGN KEY (user_type) REFERENCES UserType (id)
);

CREATE TABLE Days (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE Courses (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE Ratings (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    rating INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Users (id),
    FOREIGN KEY (course_id) REFERENCES Courses (id)
);

CREATE TABLE Shedules (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    course_id INT NOT NULL,
    day_id INT NOT NULL,
    schedule_time Time NOT NULL, 
    group_id INT NOT NULL,
    FOREIGN KEY (course_id) REFERENCES Courses (id),
    FOREIGN KEY (day_id) REFERENCES Days (id),
    FOREIGN KEY (group_id) REFERENCES Groupss (id)
);

CREATE TABLE Events (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    image VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description LONGTEXT NOT NULL
);

CREATE TABLE Teachers (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    course_id INT NOT NULL,
    teacher_id INT NOT NULL,
    FOREIGN KEY (course_id) REFERENCES Courses (id),
    FOREIGN KEY (teacher_id) REFERENCES Users (id)
);

CREATE TABLE Groupss (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE StudentGroups (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    group_id INT NOT NULL,
    student_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Users (id),
    FOREIGN KEY (group_id) REFERENCES Groupss (id)
);