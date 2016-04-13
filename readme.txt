Vision
==============================================================================
The University Course Records System (UCRS) will be used to maintain 
information about the courses that have, will and are being offered at the 
unviersity. This will include information about the course(s) themselves, the 
professors who previously, currently or are intending to teach it as well as 
current and past students.

Like the Registrar’s Office, the system will record the history of courses, 
students, professors and other key information to facilitate real time, easy 
to access and up to date course information. 

The system is primarily designed for use by students, professors and student 
advisors. It will permit the students to view and modify their own 
information, including name, address and other personal information. They can 
also view the list of classes they've registered in, both current and past, 
and modify their registration for current courses. Professors will be able to 
view student lists including grades of past students, view and modify course 
information and be able to enter and modify current student grades. Student 
Advisors will be able to create and remove courses and course records, add or 
remove students and professors as well as alter student personal information.

Since the system will be used for both records and registration, it needs to 
recognize the dependencies of course prerequisites. It will need to maintain 
a catalogue of courses, though course numbers and titles will be adequate 
information. Different levels of security will be required for each possible 
user of the system. For example, students will have access rights to read 
their information, but will not be permitted to update it, or to view 
information belonging to other students. Faculty members only have access to 
the courses they have taught. Advisors for a particular	department can only 
modify the information of students within that department.

The system is envisioned as a web-based application, but it will be 
extensible so that future releases can have a desktop or mobile interface.

This system will be a significant improvement over the current systems in 
use, which provide a different interface to every type of user, and have 
many different states and viewing modes that are difficult to navigate. As a 
result,	the workflow of the advisors will be simplified and the time required 
to perform a task will be reduced. Students and faculty members will similarly 
find that they can more quickly access the information they need. Since the 
software will be developed inhouse, the maintenance costs will be lower than 
the annual license fees for the	current software. Because the system will be 
designed for this university, it will not require expensive customization.

The project will be considered successful if each type of user prefers this 
system over the current Aurora system, as determined by survey, and the 
annual expenses	are reduced by at least 25% from the current level.



Big User Stories (Major Tasks)
==============================================================================


Architecture
==============================================================================
PHP
------------------------------------------------------------------------------
###Objects
Database
|------>DatabaseController
|-------|---------------->StudentDBController
|-------|---------------->ProfessorDBController
|-------|---------------->AdministratorDBController
|-------|---------------->LoginDBController

User
|------>Student
|------>Professor
|------>Administrator

LoginChecker

###Scripts
header (include)
footer (include)

####Form Scripts
login (indlude)

JavaScript
------------------------------------------------------------------------------
###JQuery

HTML/Pages
------------------------------------------------------------------------------
Index (landing page)