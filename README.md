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
Updated .env database to "awamangala".
Created route group for language prefix to all routes at web.php
Added default lang as "en" by redirecting "/" route to "/en" at web.php
Created a middleware for SetLanguage with "php artisan make:middleware SetLanguage"
Updated kerrnal-> protected middlewaregroups -> web by adding SetLanugage middleware
Updated all pages with route('xxxx') with route('xxxx', app()->getLocale())
Added Language switch to nav bar and prefixed required lang to route by "Route::currentRouteName(), 'en'"
Marked all lables with both languages in lang-> labels file

Created Partials->_head for all pages
Created guest_layout for guest users at views->layouts
Created welcome_guest for guest users at views->pages
Duplicated resources->lang->en folder as "sin" folder for sinhala language

