# schooldemo
##Windows users:

Download xampp: https://www.apachefriends.org/download.html<br/>
Download and extract cmder mini: http://cmder.net/<br/><br/>

##Mac Os, Ubuntu and Windows users continue here:

Create a database locally named homestead utf8_general_ci
Download composer https://getcomposer.org/download/
Pull Laravel/php project from git provider and move it to xampp/htdocs/schooldemo.
Rename .env.example file to .env( In Windows using the cmd run ren .env.example .env)
Open the console and cd your project root directory( xampp/htdocs/schooldemo )
Run composer install in this directory.
Run php artisan key:generate
Run php artisan migrate
Run php artisan serve

#####You can now access your project at localhost:8000 :)
