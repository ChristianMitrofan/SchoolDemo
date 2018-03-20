# schooldemo
##Windows users:

Download xampp: https://www.apachefriends.org/download.html<br/>
Download and extract cmder mini: http://cmder.net/<br/>

##Mac Os, Ubuntu and Windows users continue here:

Create a database locally named homestead utf8_general_ci<br/>
Download composer https://getcomposer.org/download/<br/>
Pull Laravel/php project from git provider and move it to xampp/htdocs/schooldemo.<br/>
Rename .env.example file to .env( In Windows using the cmd run ren .env.example .env)<br/>
Change the DB_USERNAME and DB_PASSWORD accordingly.</br>
Open the console and cd your project root directory( xampp/htdocs/schooldemo )<br/>
Run composer install in this directory.<br/>
Run php artisan key:generate<br/>
Run php artisan migrate<br/>
Run php artisan serve

#####You can now access your project at localhost:8000 :)
