# cms-project

Demo: https://drive.google.com/file/d/1Rc-f_slhRiTROg50HKYPf56iwgFqDdr0/view?usp=sharing

This was my project in Advance Web Design class in college. I programmed it using PHP on the MAMP server (Apache, MySQL, PHP).

In createContent.php I created a table with fields where information can be entered. 
insertContentToDB.php file’s part of the code allows me to insert a data to a table so it can be seen in MyAdmin.php.  POST method will allow for data to pass from client side to server side.
SELECT statement allows to retrieve data from the statement.
Update is using to modify data in the table. I am selecting database and selecting records from this database to update them. 
I created a separate file with navigation code and put it on each page. 
Then this is where I faced a real struggle - Update function did not work. Nothing was updating in the system. I used   www.phpcodechecker.com to check if there were any syntax errors in my code but there weren’t any.  I also used code the strategy, where I input “ini_set('display_errors',1);”  in all my pages in the first php line in the php code, that didn’t show any errors also. 
I decided to rewrite whole project again from the very beginning. However, I had faced the same problem – Update didn’t work. 
I asked my college professor for help and he found that I missed the “=” after the “page” when I was calling a mysqli_fetch_array function in “selectContentToModify.php” file. 
Debugging process:
While I was working on redoing my project, I’ve found few bugs from previous code: 
•	In "updatedContent.php" file I found that I used $_POST['content_id] everywhere, instead of title, metaKeywords, etc. I fixed that.
•	I renamed index names for $_POST with correct ones in "insertContensToDB.php” file
deleteContentToDB.php did not work at first too, but when I fixed the code with “=” after the “page” in “selectContentToModify.php” file it all began to work as it should. 
Also, I created a separate file for database `connection and then I included this file to each page. 
I created an HTML page that displays data from the database via PHP.
