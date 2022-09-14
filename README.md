Installed new project with "composer create-project laravel/laravel Awamangala --prefer-dist"
Created Readme file for instructions by "echo "# Awamangala_Laravel" >> README.md"
Initialized git by "git init"
Added all files to git by "git add ."
Git commited with "git commit -m "first commit"
Added to git repository by "git remote add origin git@github.com:lakkaru/Awamangala_Laravel.git"
Pushed files to repository by "git push -u origin master"
Installed Laravel Ui with "composer require laravel/ui"
Installed Bootsrap Authentication with "php artisan ui bootstrap --auth"
Run "npm install && npm run dev" for compile and mix.
Created a database "awamangala" in phpmyadmin.
Updated .env database to "awamangala"
****https://www.youtube.com/watch?v=KqzGKg8IxE4****
Created route group for language prefix to all routes at web.php
Added default lang as "en" by redirecting "/" route to "/en" at web.php
Created a middleware for SetLanguage with "php artisan make:middleware SetLanguage"
Updated kerrnal-> protected middlewaregroups -> web by adding SetLanugage middleware
Updated all pages with route('xxxx') with route('xxxx', app()->getLocale())
Added Language switch to nav bar and prefixed required lang to route by "Route::currentRouteName(), 'en'"
Marked all lables with both languages in lang-> labels file


******Followed DevMarketer video (https://www.youtube.com/watch?v=iKRLrJXNN4M&list=PLwAKR305CRO9S6KVHMJYqZpjPzGPWuQ7Q&index=1)*****
Used "php artisan make:migration create_admins_table --create=admins" for admins table. 08:30
Migrated all 
Duplicated User model for Admin model. 12:45
Introduced new admin guard at Config->auth. 15:30
Added new provide for adminns at Config->auth. This will use the admin model for Auth::guard('admin')->check ... etc
Added admins for passwords reset at Config->auth> 
Added admin guard with "protected $guard='admin';" at Admin model. 20:20

****https://www.youtube.com/watch?v=Ir2nAD9UDGg&list=PLwAKR305CRO9S6KVHMJYqZpjPzGPWuQ7Q&index=2****
Created AdminLoginController with "php artisan make:controller Auth/AdminLoginController". 10:00
Created admin_login view at view->auth 11:00
Created all routes for admin with route group prefixd by "admin" 14:30
Plased admin index route at the end of admin group
Filled admincontroller login function 19:11
Added local langage to intended function at Redirector.php at Illuminate->Routing

Admin loggin path
AdminLogincontroller->AuthenticatesUsers->Admin_login()->validateLogin()->attemptAdminLogin()->guard()->credentials()->Illuminate\Auth\SeessionGuard\attempt()->fireAttemptEvent()->Illuminate\Auth\Events->Attempting->attempt()->hasValidCredentials()->EloquentUserProvider\validateCredentials()->Illunimate\Auth\Authenticable\getAuthPassword()->EloquentUserProvider\validateCredentials()->SessionGuard\login()->updateSession()->fireLoginEvent()->setUser()->fireAuthenticatedEvent()->

Created Partials->_head for all pages
Created guest_layout for guest users at views->layouts
Created welcome_guest for guest users at views->pages
Duplicated resources->lang->en folder as "sin" folder for sinhala language

