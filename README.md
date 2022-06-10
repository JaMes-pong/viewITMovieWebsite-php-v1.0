# ViewIT movie rating website (php version) (v1.0)
___________________________________________________________________________________________________________________________

ViewIT website develop by James Chan

This readne file contains how to start to use this website.
___________________________________________________________________________________________________________________________

The files should be contain:

 1.  .readme
 2.  css (8 css source code)
 3.  db
 4.  images
 5.  poster
 6.  add_movie.php
 7.  index.php
 8.  loading.html
 9.  login.html
 10. logout.php
 11. movie.php
 12. movie_detail.php
 13. rate.php
 14. register.html
 15. register.php
 16. search
 17. login.php

________________________________________________________________________________________________________________________

Start to explore this website: localhost/php/index.php

Login Account (**you can register with your own also)
Account : admin
Password: 74418552

Website database name: moviedb (moviedb.sql)
___________________________________________________________________________________________________________________________

## Home Page (index.php)

This is the home page of ViewIT. At this page, user can view the movie database and search the movie. Moreover, user can login or regsiter a ViewIT account.
User can login by using the "Login Now" button and regsiter account by using the "Register Now" button.
On the top of home page, there are 3 icons to connect to "index.php", movie database and search. About the bottom of the home page. There are some Blockbuster 
Movie of December 2019, user can click on the movie poster to visit the movie database and know more about the movie.

After login in, user can rate the movie that they want. However, every users only can rate the particular movie ONCE only. Also user can logout by using the
"logout" button.

## Login function (login.html)

This is the page to allow user to login. User can login by using the ViewIT website *if user do not own a ViewIT account, can register one. User will be require
to enter the username and password to login.

## login.php

This php use for check the user's username or password correct or not. To enable user to login.

## Register function (register.html)

This is the page let user to registered a ViewIT account. User need to enter the username, password and the email address to register a account.

## register.php 

This php is use for insert the user data to database. After the javascript in the "register.html" to check the information is correct. This php will help user to
insert their login information to database. Enable user to get a ViewIT account and login in to ViewIT website.

## Rate function (rate.php)

User can rate the movie after login. User can reach to this page by click the button "Rate Now" which on the home page(after login). When user enter to the rate 
page, user can rate the movie that they want. In the rate page, there are two drop-down list. The first one is enable user to choose the movie title. Another one
is enable user to choose the marks to rate the movie. After choose the title and rate. User can click on submit button and submit. If submit success, there will
show a message to tell user submit the rating success. If the message show "Repeat Rating, Please rate another movie!", that means user is rate a same movie twice. User should choose another movie to rate.

## Movie database (movie.php)
 
This is the page that show all the movie in ViewIT database. User can find out the details of the movie here. For example the title, running time of the movie.
User can click on the movie poster to know more about the movie. After click in to movie (movie_detail.php), you can view the description and the rating of movie. This page available to all user, no matter they login or not. However user still need login to rate the movie.

## Search function (search.php)

In this page, enable user to search the movie that they want. User can search the movie by enter the keywords in the search box. User can enter the title of movie
or genre of movie to search. After enter the keywords of movie, user just click the search button to start searching. The search results will show under the search
box. This php provide a hyperlink of movie to user. Allow user to reach the movie detail page.
 
*The hyperlink may fail to use after you have change the file name. Since the hyperlink use in search,php is = "http://localhost/php/movie_detail.php?id="
*If you have change the file name of this website, please also change the hyperlink in serach.php.
*Change to http://localhost/___file name of this website___/movie_detail.php?id=
*Sorry for inconvient 

## Logout function (logout.php)

After user finish their rate, search or movie review. User can logout by click the "logout" button in the home page. When user click on the logout button. This php
will reset the cookie to achieve logout function. Then the user will logout successful. 

## *Insert new movie function (add_movie.php)
 
This is the special page of this website. You cannot reach this page in this webisite. However, this function only available to website admin. Admin can reach this
page by enter "localhost/php/add_movie.php" in the browser. Admin can insert the new movie information in this page.
_______________________________________________________________________________________________________________________________________________________________
 
 Thank you! Enjoy
____________________________________________________________________________________________________________________________________________________________________

 ViewIT Website. Develop by James Chan 2019
____________________________________________________________________________________________________________________________________________________________________
