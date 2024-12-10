# Job Flow 💼

## Description
This project consists of a website for registering offers.

We can see a table with our offers and we can also see each of them individually and see their comments.

We can also create, modify, view and delete an offer.

## Proyect guide
On entering the page we see a table where we can view each of the offers, where we find the date when we created it, the name of the type of offer and the state in which it is.

Right next to it we have a button where we can access each of our offers and see if we have any comments added about how our offer is going, etc.

![Home view](./public/docs/offerView.png)
<p align="center"><em>Home view</em></p>

This is the main view where we see the table with offers.

![Show view](./public/docs/showView.png)
<p align="center"><em>Show view</em></p>

This is the secondary view where we see the table with the comments.

## Installation requierements
- XAMPP

- Install the composer

- Install Nodejs

- Xdebug

-Postman

## 💻 Installation
- Clone repository
```
https://github.com/Inma0711/Employment-Project.git
```
- Install the composer

```
composer install
```
- Install Nodejs

```
npm install
```

-Create a '.env' for example:
    - DB_CONNECTION=mysql
    - DB_DATABASE=db_jobFLow

-Generate all the tables and fake values:

```
php artisan migrate:fresh --seed
```
-Run Laravel:

```
php artisan serve
```
-Run npm:

```
npm run dev
```

## API Endpoints
5 endpoints have been created, one for the offer table and one for the progress table.

### Offer
-GET (read all):

```
http://127.0.0.1:8000/api/offers
```
-GET BY ID:

```
http://127.0.0.1:8000/api/offers/{id}
```
-POST:

```
http://127.0.0.1:8000/api/offers
```
-DELETE:

```
http://127.0.0.1:8000/api/offers/{id}
```
-PUT:

```
http://127.0.0.1:8000/api/offers/{id}
```

### Progress

-GET (read all):

```
http://127.0.0.1:8000/api/progresses
```
-GET BY ID:

```
  http://127.0.0.1:8000/api/progresses/{id}
```
-POST:

```
 http://127.0.0.1:8000/api/offers/{id}/progresses
```
-DELETE:

```
 http://127.0.0.1:8000/api/progresses/{id}
```
-PUT:

```
 http://127.0.0.1:8000/api/progresses/{id}
```

## Test
Here you will find all the tests we have done.

to test we put the following command: php artisan test --coverage

![Test coverage](./public/docs/testApi.png)

## Database diagram
![Database diagram](./public/docs/tables.png)

## Technologies and Tools

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Bootstrap' src='https://img.shields.io/badge/Bootstrap-100000?style=for-the-badge&logo=Bootstrap&logoColor=white&labelColor=7952B3&color=7952B3'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='phpMyAdmin' src='https://img.shields.io/badge/phpMyAdmin-100000?style=for-the-badge&logo=phpMyAdmin&logoColor=white&labelColor=6C78AF&color=6C78AF'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='XAMPP' src='https://img.shields.io/badge/XAMPP-100000?style=for-the-badge&logo=XAMPP&logoColor=white&labelColor=FB7A24&color=FB7A24'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Canva' src='https://img.shields.io/badge/Canva-100000?style=for-the-badge&logo=Canva&logoColor=white&labelColor=00C4CC&color=00C4CC'/></a>

## Author

This project was fully developed by: 

[Inmaculada Gonzalez Aguilar](https://github.com/Inma0711)