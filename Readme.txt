This Web application contains 8 files which includes 1 .JSON, 6 .php and 1 .html pages. 

The following is the explanation of each file-->

Firstpage.html :     This is the initial page displayed to user with two options such as alphabetic view and filename view

alphabetsList.php :  This page is displayed on selecting alphabetic view option. This page consists of alphabets displayed from A to Z where each 
		     alphabet acts as a URL link.

sortedAlphabets.php: On selecting particular alphabet, filenames starting with chosen letter will be displayed in this page. This page has home 
		     button which navigates to firstpage.html

fileview.php:        This page is displayed on selecting filename view option in firstpage.html. This page consists of filenames of all dll files 
		     retrieved from database where each filename acts as a url link.

fileViewDb.php :     In this page, dll file content pertaining to selected filename is displayed.  

omsairam1.php  : This page consists of PHP code to retrieve details of file from database.

dbConnect.php: This page contains details of database connection are provided. Database name: shiridi; Table name: user


Environment required to use this web application-->

1. Xampp server need to be installed enabling Apache and MySql
2. Netbeans or any IDE to view the code.
3. Connect to database PHPMyAdmin using database details provided in dbConnect.php.

How application works--> 

Intially, xampp server should be opened starting apache and mysql app. Later firstPage.html should be run to display intial web page with two 
options 1.alphabetic view 2.filename view. On selecting alphabetic view option, it re-directs to alphabetsList.php page. This page displays list
of alphabets from A to Z. Here, each page acts as a URL link to move to next page. On selecting particular alphabet, it redirects to 
sortedAlphabets.php page. Here list of filenames starting with selected letter are displayed. If there are no filenames staring with selected 
alphabet, an empty page is displayed. This page has home button to redirect to firstPage.html page

Another option avaialble in this web application is filename view. On selecting filename view option from firstPage.html page it re-directs to
fileview.php page. Here, list of filenames stored in database are retrieved and displayed to select particular filename. Each filename acts as URL,
on clicking particular filename, content in dll file with selected file name will be displayed.

Features-->

1. In this web application, data provided in data.JSON file are stored in mysql database in different rows and columns allowing dynamic retrieval of 
data. 
2. It is provided with search for DLL filename option. 
3. Filenames are sort by version number and also grouped by bits details. 
4. Visuals are designed with an attractive look and easily navigatable options.
5. Code is written considering reusability. 
6. Solution elegance persists in application.  
		