## Concept

The CompanyListApp enables a user to create company records, and also to show, update and delete the company records. Also a user can archive deleted company records and restore them again at the dashboard.

## CompanyListApp structure

This web application, has created under a CRUD(Create-Read-Edit-Delete) philosophy.More specifically, a user is able to execute authorization actions, such as login/register/logout, and also he is allowed to access a profile dashboard.

At the main app dashboard, a user can create a company through access specific create action button and preview his companies records at a dashboard table.
Every table record is accompanied with Show/Update/Delete button.

A button for creating company record, is located at the main dashboard and enables the user to redirect at a single view, and from there to  fill form fields in order to submit and create a new company record.

Also an 'Archive record results' button is created at the main dashboard, with a single view and if a user clicks the button, he can access deleted records that has been archived through deletion at the main dashboard. Also he can restore deleted records at the main dashboard.

Every record that will be created from a specific User, also will enable a relationship between Company and User. So this way the user can access his records privately. And from a security scope no one other user can preview records that he is not allowed to access.


## Assumptions

Through the time I have dedicated to execute the app project. I fonud myself enjoying the work and I was happy to meet new challenges and to strive through them. 
Let me breakdown my process:
1. I attempted to set a new structure and initiate all the libraries (and every tool I was going to use through the project.)
2. I initiated a git structure to make the project commits/push at the Git repository platform.
3. I initiated Tailwind CSS in order to use classes for style the application.
4. I initiated Laravel Breeze in order to set an authentication structure for the user.
5. I used an MVC architecture, so I tried to use every productive aspect of Laravel Framework. At this point I set the  Controller, the Model Structure.
I have implemented the migrations at the Database, and set the database columns. Also I've created Factories for the Models in order to feed the database with dummy data, as i was performing Unit Tests for the app.
6. I have chosen to work for inner to outer. So I began to write basic Php Unit tests and  implement the according functionality I was tested..Through this phase my main interest was about, the proper functionality of CRUD operrations.
7. I have started to set the views, not caring so much about the styling at this point, but I wanted to set the routes properly, and create the app architecture.
8. At this point and after I had a basic functional structure, I have started to care more about the styling.
9. I made a decision transition moving my main dashboard from a third view file, at the Laravel Breeze Dashboard file. So this kept me a little behind the process. 
9. As I was keeping to work at the project, I was interested establishing  relationships between the User and Company models, in order to create the functionality for private dashboard.
10. I tried the challenge for soft deletes, as it was a concept, I didn't reach out ever before. It was too interesting and let me equip with another technique,that it might be usefull at the future.

Finally I let myself free to user pen and paper for figuring out the next steps, and I was trying to search for information in every way, in order to execute the project.

I dedicated 48 hours almost, but unfortunately I didn't go for the (optional) filter challenge, cause my time was ending, and i prefered to be consistent at the deadline.


## In order to run the project

1. clone the project from the github repository.

2. run a git bash terminal.

3. execute at your preferred pc location:

git clone https://github.com/parischaralampidis3/test-app.git

This will clone the project at your local computer.

4. install composer dependencies:

run: composer install

5. Copy the .env.example.example file.

6. Paste the file at the root and rename at .env.

7. Access .env file and set the database settings, similar to the following:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_company
DB_USERNAME=root
DB_PASSWORD=

8. Connet the project through a DB client:

9. To set npm dependencies:

run npm install

10. Run to generate a key for .env:

php artisan key:generate

11. Run:

npm run dev

12. Run the migrations, in order to initialize the default database tables:

php artisan migrate


13. At the root of the project run to fire the php server:

php artisan run serve
 



