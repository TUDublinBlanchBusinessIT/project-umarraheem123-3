# **Gym Capacity Tracker**

This is a PHP and MySQL web application used to record gym check-ins and check-outs.
The system stores all activity in a database and shows the current number of people inside the gym in real time.

**Features**

- Record check-ins through a simple form

- Record check-outs or delete entries from the admin page

- Store all attendance information in a MySQL database

- Show the current gym capacity (check-ins minus check-outs)

- Display a full attendance log with:

   -Name
  
  - Action (check-in / check-out)
  
  - Time
  
  - Area used
  
  - Membership type
  
  - Equipment selected
  
  - Energy level


    

**How the System Works (Step-by-Step)**

1. User Check-In

- The user opens checkin.php

- They enter their name and choose:

- Gym area

- Membership type

- Equipment

- Energy level
When the form is submitted, the data is saved in the attendance_log table as a check_in entry.





**2. Admin Page (admin.php)**

-The admin page displays:

  -All check-ins and check-outs
  
  -Extra information collected from the form
  
  -The system counts how many users have checked in and how many have checked out.
  
  -Current Capacity = Check-Ins − Check-Outs



  

**3. Managing Users**

  - Next to every log entry is an Options dropdown:
  
  - Check Out → Adds a check_out entry for that user
  
  - Delete → Removes the selected record completely
  
  - These actions are processed by actions.php.





**4. Database (MySQL)**

- The project uses three tables:

  - members – stores registered names 
  
  - attendance_log – stores check-ins and check-outs
  
  - attendance – simple event table (not required but included)

The system queries these tables to show the current status and history.
