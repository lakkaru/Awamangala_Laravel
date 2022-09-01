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

Added default lang as "en" by redirecting "/" route to "/en" at web.php
Created route group for lang prefix to all routes at web.php
Created a middleware for SetLanguage with "php artisan make:middleware SetLanguage"
Updated kerrnal-> middleware by adding SetLangage middleware
Created Partials->_head for all pages
Created guest_layout for guest users at views->layouts
Created welcome_guest for guest users at views->pages
Duplicated resources->lang->en folder as "sin" folder for sinhala language

