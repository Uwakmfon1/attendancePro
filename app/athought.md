 ** ALGORITHM FOR MY PROGRAM
 * ALLOW USER TO LOG IN AND/SIGN UP IF NOT REGISTERED   %%%
 * IF LOGGED IN, THEN SHOW THEM THEIR COURSES REGISTERED    %%%
 * ALLOW THEM THE ABILITY TO CLICK ON THE COURSES     %%%
 * WHEN THEY CLICK ON A PARTICULAR COURSE, SHOW THEM A PAGE %%%
 * ON THE PAGE ALLOW THEM TO ADD A NEW DATE FOR WHICH THEY WOULD TAKE ATTENDANCE OF STUDENTS %%%

** IF THEY WANT TO CREATE A NEW PAGE             %% YET TO DO THIS WITH GOOGLE FORMS %%%
* SHOW THEM A BUTTON TO CLICK TO CREATE A PAGE
* ALLOW THEM TO ADD A NUMBER OF STUDENTS REG_NO, NAME
* SHOW THEM A BUTTON TO SAVE AND PROCEED


** IF THEY WANT TO TAKE A NEW ATTENDANCE
* ALLOW THEM TO SELECT THE COURSE WHICH WILL THEREAFTER SHOW THE NUMBER OF REGISTERED STUDENTS %%%
* SHOW THEM THE START BUTTON TO START ATTENDANCE %%%
* FOR EACH OF THE NEXT REG_NO, CLICK PRESENT OR ABSENT %%%
* AT THE END OF TICKING ALL REG_NOS, CLICK THE SAVE BUTTON %%%
* AFTER SAVING THE NEW DATE SHOULD APPEAR ON THE ATTENDANCE DB %%%
* SAVE AND REDIRECT TO HOME PAGE %%%



** To calculate the attendance
* get the students from the attendance %%%
* get the date from the attendance %%%
* for each student id, display name of student %%%
* --> check and fetch the dates %%%
* --> count the dates for each attendance %%%
* --> check the present column for either present/absent %%%
* --> calculate the % attendance {{ math.floor((timesAttended/totalNoOfClasses) x 100%) }} %%%

**Not yet done
*write migrations to automate pivot table %%%
*make a calculate total attendance button %%%

*make it responsive on different screen resolutions
*connect to google forms using pabbly connect

