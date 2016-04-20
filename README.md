# UTPHAX Training Scoreboard

Scoreboard samples for tournaments

## Getting Started

Installation guideline


### <sup>Step 1:</sup> Download and install

Download and install __[`XAMPP`](https://www.apachefriends.org/download.html)__ with version `5.6` according to your OS


### <sup>Step 2:</sup> Download the ZIP kit 📦

[<img src="http://i.imgur.com/UVPZoM0.png" width="200">](https://github.com/neonexxa/scoreboard/score.zip)


### <sup>Step 3:</sup> Move and Extract File

Move `score.zip` to `C:/xampp/htdocs/` and Extract the downloaded file

After you have __[downloaded and extracted this `.zip` file](https://github.com/neonexxa/scoreboard/score.zip)__ containing the contents of this repo, you'll have your scoreboard ready in these few steps:


### <sup>Step 4:</sup> Upload Your Database

Switch on your xampp, start your `apache` and `mysql`.

Open your browser, go to `localhost/phpmyadmin` , __[create a new Database](http://webvaultwiki.com.au/(S(iungfwenvz2f5c55pioeinil))/Default.aspx?Page=Create-Mysql-Database-User-Phpmyadmin&NS=&AspxAutoDetectCookieSupport=1)__ , and give any name you want. for example it can be `mynewdb`. 

After that, go to `import` tab in the `mynewdb(example)` and import the `newtest.sql` file that you downloaded together inside that `.zip` earlier.


### <sup>Step 5:</sup> Reconfigure your scoreboard

Lets connect our scoreboard with our new database

Open `C:/xampp/htdocs/score/inc/constant.php`, can use any text editor. 

Find 

	define("DATABASE", "your_database_name");

Replace with your database name that your created earlier in the phpmyadmin. for example `mynewdb` 

	define("DATABASE", "mynewdb");

Great!!! Now our user application is connected to the database, lets help the Admin connected to the database next. 

Open your browser, go to `localhost/scoreboard/Nconnected.php`, can use any text editor.

Find 

	$mysql_db = 'your_database_name';

Replace with your database name that your created earlier in the phpmyadmin. for example `mynewdb` 

	$mysql_db = 'mynewdb';

Congratulation!!! You have completed all the steps for configuration. Your scoreboard will be ready in a few seconds. 

### It's Ready!!!

Open your browser, go to `localhost/score/` , __[this is where your the user will log in](http://localhost/score)__ , 

Opps!!!!! 

	*you cannot see the scoreboard because there is no user yet*

Relax.., just head to `localhost/scoreboard/` , __[this is where the admin will log in](http://localhost/scoreboard)__ , 

you can add users, questions etc from there. 

YOU ARE ALLOWED TO MODIFY AND COPY THE FILE TO MEET YOUR SECURITY EXPECTATION. JUST INCLUDE THE __[LICENSE](https://github.com/neonexxa/scoreboard/blob/master/LICENSE)__ FILE IN YOUR FOLDER. 

# Still need help?

Meanwhile, how about take a little time and read the usage __[documentation](https://github.com/neonexxa/scoreboard/blob/master/USAGE.md)__ on how to use the scoreboard.



