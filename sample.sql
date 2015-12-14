 CREATE TABLE students(stid integer primary key autoincrement, name text);
 CREATE TABLE classes(csid integer primary key autoincrement, name text);
 CREATE TABLE enrollments(stid integer, csid integer);

 INSERT INTO students('name') VALUES('田中'),('佐藤'),('渡辺');
 INSERT INTO classes('name')VALUES('DB'),('NW'),('CG');

 INSERT INTO enrollments values (1,1),(1,2),(2,1),(2,2),(2,3);






