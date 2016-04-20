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

Open your browser, go to `localhost/phpmyadmin` , __[create a new Database](http://webvaultwiki.com.au/(S(iungfwenvz2f5c55pioeinil))/Default.aspx?Page=Create-Mysql-Database-User-Phpmyadmin&NS=&AspxAutoDetectCookieSupport=1)__ , and give any name you want. for example it can be `mynewdb`. 

After that, go to `import` tab in the `mynewdb(example)` and import the `newtest.sql` file that you downloaded together inside that `.zip` earlier.


### <sup>Step 5:</sup> Reconfigure your scoreboard

Lets connect our scoreboard with our new database

Open `C:/xampp/htdocs/score/inc/constant.php`, can use any editor. 

Find 

	define("DATABASE", "your_database_name");

Replace with your database name that your created earlier in the phpmyadmin. for example `mynewdb` 

	define("DATABASE", "mynewdb");


### 
