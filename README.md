# Chat_PHP
Simple Chat System made with php, javascript, ajax, css and html of course

# Warning

Admins username: administrator1<br>
Admins password: password1<br>
<br>
<br>
Admins username 2: administrator2<br>
Admins password 2: password2<br>
<br>
# Installation
The project is made with php and mysql mostly, this is why you must have a local server, and a mysql server setup (with the database, and tables) <br>
( For localhost hosting and mysql server i use xampp, which serves a http server + mysql server on 127.0.0.1 ) <br>
<br>
## Step 1
 - Clone the website and move it to the htdocs folder in xampp<br>
## Step 2
 - Start the http server <br>
 - Start the mysql database server<br>
## Step 3 
 - Make a database called: `chat_server1`<br>
## Step 4
 - Make some tables (`chat, chathack, chatnetw, chatpro, chattalkadmins, chattehc` - each table will have 2 rows which will be `Name` and `Text`)<br>
  - Warning! Tables, database and the rows should be named the exact way its typed!!<br>
# Step 5
 - You're done ( now you can navigate to the url `http://localhost:80/` )<br>
 - Warning! If you have moved a directory to the htdocs folder the url is then `http://localhost:80/[name of the directory]`!!<br>
# Final status
 - This is the sql structure you should have at the end:
 - Database: chat_server1
  - Table: chat
   - Row: Name
   - Row: Text
  - Table: chathack
   - Row: Name
   - Row: Text
  - Table: chatnetw
   - Row: Name
   - Row: Text
  - Table: chatpro
   - Row: Name
   - Row: Text
  - Table: chattalkadmins
   - Row: Name
   - Row: Text
  - Table: chatethc
   - Row: Name
   - Row: Text
