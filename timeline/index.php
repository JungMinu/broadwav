<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    Flight::render('index_page.php', array('name' => 'swavelate'));
});//INDEX PAGE

Flight::route('/main/', function(){
    Flight::render('main_page.php', array('name' => 'swavelate'));
});//TIMELINE PAGE

Flight::route('/like/', function(){
    Flight::render('function_page/like.php', array('name' => 'swavelate'));
});//LIKE ADD

Flight::route('/like_load/', function(){
    Flight::render('function_page/like_load.php', array('name' => 'swavelate'));
});//LIKE LIST LOAD

Flight::route('/post_compose/', function(){
    Flight::render('function_page/post_compose.php', array('name' => 'swavelate'));
});//POST COMPOSE

Flight::route('/post_delete/', function(){
    Flight::render('function_page/post_delete.php', array('name' => 'swavelate'));
});//POST DELETE

Flight::route('/comments_compose/', function(){
    Flight::render('function_page/comments_compose.php', array('name' => 'swavelate'));
});//COMMNETS COMPOSE

Flight::route('/comments_load/', function(){
    Flight::render('function_page/comments_load.php', array('name' => 'swavelate'));
});//COMMNETS LOAD

Flight::route('/comments_more_load/', function(){
    Flight::render('function_page/comments_more_load.php', array('name' => 'swavelate'));
});//COMMNETS MORE LOAD

Flight::route('/comments_delete/', function(){
    Flight::render('function_page/comments_delete.php', array('name' => 'swavelate'));
});//COMMNETS DELETE

Flight::route('/accounts/signup/', function(){
    Flight::render('/accounts_page/signup.php', array('name' => 'swavelate'));
});//ACCOUNTS SIGN UP

Flight::route('/accounts/signup_done/', function(){
    Flight::render('/function_page/signup_done.php', array('name' => 'swavelate'));
});//ACCOUNTS SIGN UP DONE

Flight::route('/accounts/login/', function(){
    Flight::render('/function_page/login.php', array('name' => 'swavelate'));
});//ACCOUNTS LOGIN

Flight::route('/accounts/logout/', function(){
    Flight::render('/function_page/logout.php', array('name' => 'swavelate'));
});//ACCOUNTS LOGOUT

Flight::route('/accounts/profile_edit/', function(){
    Flight::render('/accounts_page/profile_edit.php', array('name' => 'swavelate'));
});//ACCOUNTS PROFILE EDIT

Flight::route('/accounts/pw_change/', function(){
    Flight::render('/accounts_page/pw_change.php', array('name' => 'swavelate'));
});//ACCOUNTS PW CHANGE

Flight::route('/android/', function(){
    Flight::render('android.php', array('name' => 'swavelate'));
});

Flight::route('/@name', function($name){	 
	 Flight::render('user_page.php', array('usrid' => $name));
});//USER PAGE

Flight::start();
?>

//connect
