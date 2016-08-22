##作业1：

  *（1）建立通讯录create database ebook;
  *（2）建立员工表
               
			   create table staff(
			   
                   id int(4) not null primary key auto_increment,
				   name varchar(20) not null,
				   sex varchar(10) not null,
				   age int(4) not null default '0',
				   telephone int(20) not null,
				   email varchar(30) not null),
				   home varchar(50) not null,
				   jobID varchar(10) not null,
				   depaID varchar(10) not null);
				   
  *（3）建立部门表
               
			   create table department(
			   
                    depaID varchar(10) not null primary key
					dapeaName varchar(30) not null);
  
  *（4）建立职位表
               
			   create table job(
			   
                    jobID varchar(10) not null primary key,
					jobName varchar(30) not null);
					
##作业2：

  *（1）建立学生信息管理库create database student;
  
  *（2）建立学生表
               
			   create table studentTable(
			   
                     stuID int(4) not null primary auto_increment,
					 stuName varchar(10) not null,
					 stuAge int(4) not null,
					 stuSex varchar(10) not null,
					 phoneNum varchar(15) not null,
					 stuHome varchar(50) not null);
					 
  *（3）修改学生表结构，添加一列信息，学历
  
                     alter table studentTable add educationn varchar(20) notnull;
					 
  *（4）删除家庭住址字段
  
                     alter table studentTable drop stuHome;
					 
  *（5）添加信息 
                 
				 insert into studentTable values
                    (1,'A',22,'男','123456','小学'),
					(2,'B',21,'男','119','中学'),
					(3,'C',23,'男','110','高中'),
					(4,'D',18,'女','114','大学');
					
  *（6）将电话号码以11开头的学员的学历改为“大专”
  
            update studentTable education='大专' where phoneNum like '11%';
			
  *（7）将姓名以C开头，性别为男的记录删除
  
            delete from studentTable where stuName like 'C' and stuSex='男';
			
  *（8）查询年龄小于22，学历为大专的学生姓名和学号显示出来
  
            select stuID,stuName from studentTable where stuAge<22 and education='大专';
			
  *（9）查询学生表前25%的记录（缺：当表中的记录为奇数时查不出来）
  
            select * from studentTable where stuID<=(select count(*) from studentTable)*0.25;
			
  *（10）查询所有学生的姓名，性别，年龄降序排列
  
            select stuName,stuSex,stuAge from studentTable order by stuAge desc;
			
  *（11）按性别分组查询所有的平均年龄
  
            select avg(stuAge) as 平均年龄 from studentTable group by stuSex;
			
##作业3：

  *（1）建立user表 
                
				create table user(
				
                    userNo varchar(10) not null primary key,
					userName varchar(20) not null,
					currentUnit varchar(20) not null,
					age int(4) not null
					);
					
		建立course表
		
		        create table course(
				
		             courseNo varchar(10) not null primary key,
					 courseName varchar(20) not null
					 );
					 
		建立point表
		
		        create table point(
				
		            userNo varchar(10) not null primary key,
					courseNo varchar(10) not null 
					);
					
  *（2）查询选秀课程名为“税收基础”的学员学号和姓名
  
          select userNo,userName from user 
		  where userNo in  //进行子查询
		  (
		      select userNo from course,point
			  where course.course=point.course and course.courseName='税收基础'
		  );
		  
  *（3）查询选秀课程编号为“C2”的学员姓名和所属单位
  
          方法1：select userNo,userName from user 
		         where userNo in  //进行子查询
		        (
		          select userNo from course,point
			      where course.course=point.course and course.courseName='税收基础'
		        );
				
		  方法2：select user.userName,user.currentUnit from user,point
		          where user.userNo=point.userNo and point.dourseNo='C2';
				  
  *（4）查询不选修课程编号为“C5”的学员姓名和所属单位
  
           select userNo,userName from user 
		   where userNo not in  //进行子查询
		   (
		      select userNo from course,point
			  where course.course=point.course and course.courseNo='C5'
		   );
		   
  *（5）查询选修全部课程的学员姓名和所属单位
  
           select userName ftom student where not exist 
              (select * from course where not exist //不存在没有成绩的课程
                 (select * from point where 
                     sno=student.sno and cno=course.cno
			     )
			  );
			  
  *（6）查询选修了课程的学员人数
  
          select count(*) as 选修课程的学员人数 from user where exists
		  (select * from point where point.userNo=user.userNo);
		  
  *（7）查询选修课程超过5门的学员学号和所属单位
  
          select userNo,currentUnit from user where user.userNo in
		  (select point.userNo from point group by point.userNo having count(courseNo)>5);
		  
##作业4：写一个四表联查示例

  *（1）利用作业3的三个表，另外给course表增加一个字段
  
          alter table course add teacherNo varchar(10) not null;
		  
  *（2）字段值与课程的对应关系为：C1,C3->001 C2->003 C4->005 C5->002 C6->004;
  
  *（3）新建教师表
  
                create table teacher(
				
                    teacherNo varchar(10) not null primary key comment '教师编号',
					teacherName varchar(20) not null comment '教师姓名'
					);
					
	    在教师表中插入以下数据
		
		        insert into teacher values('001','刘翔'),('002','张怡宁'),
				         ('003','王楠'),('004','刘星'),('005','亚当');
						 
  *（4）四张表的关联查询
  
           select user.userName,course.courseName,point.grade,teacher.teachterName from user
		    left join point on user.userNo=point.userNo  //关联user表和point表
			left join course on course.courseNo=point.courseNo  //关联point表和course表
			left join teacher on teacher.teacherNo=course.teacherNo; 关联course表和teacher表
			
##封装mysql类、mysqli类、pdo类

  *（1）mysql类的测试为mysqlClassTest.php
  
  *（2）mysqli类的测试为mysqliClassTest.php
  
  *（3）pdo类的测试为pdoClassTest.php