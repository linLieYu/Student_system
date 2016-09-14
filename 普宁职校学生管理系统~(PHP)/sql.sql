Drop table IF EXISTS student_qz;
Drop table IF EXISTS student_qm;
Drop table IF EXISTS web;
Create table student_qz(
  `id` int(6) AUTO_INCREMENT PRIMARY KEY,
  `name` char(10),
  `qz_chinese` float(10),
  `qz_math` float(10),
  `qz_english` float(10),
  `qz_flash` float(10),
  `qz_tiyu` float(10),
  `qz_music` float(10),
  `qz_jichu` float(10),
  `qz_c` float(10)
);
alter table student_qz CONVERT TO CHARACTER SET utf8;
INSERT INTO student_qz(name,qz_chinese,qz_math,qz_english,qz_flash,qz_tiyu,qz_music,qz_jichu,qz_c)VALUES
('林烈宇','待添加','待添加','待添加','待添加','待添加','待添加','待添加','待添加');
Create table student_qm(
  `id` int(6) AUTO_INCREMENT PRIMARY KEY,
  `name` char(10),
  `qm_chinese` float(10),
  `qm_math` float(10),
  `qm_english` float(10),
  `qm_flash` float(10),
  `qm_tiyu` float(10),
  `qm_music` float(10),
  `qm_jichu` float(10),
  `qm_c` float(10)
);
alter table student_qm CONVERT TO CHARACTER SET utf8;
INSERT INTO student_qm(name,qm_chinese,qm_math,qm_english,qm_flash,qm_tiyu,qm_music,qm_jichu,qm_c)VALUES
('林烈宇','待添加','待添加','待添加','待添加','待添加','待添加','待添加','待添加');
Create table web(
  `id` int(6) AUTO_INCREMENT PRIMARY KEY,
  `school_name` VARCHAR(50),
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL
);
alter table web CONVERT TO CHARACTER SET utf8;
