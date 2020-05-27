<?php 
 /* 
 Plugin Name: Personalización de tudominio.com 
 Plugin URI: https://tudominio.com 
 Description: Plugin con las funciones personalizadas para la web de tudominio.com 
 Version: 1.0.0 
 Author: Tu nombre 
 Author URI: https://tudominio.com 
 License: GPL 2+ 
 License URI: https://tudominio.com 
 */ 



//Añade capa de personalización al login de WordPress

function martin_login_logo() { 
    ?>
     <style type="text/css">
    
    #login h1 a, .login h1 a { 
     background-image: url('wp-content/themes/tm7200/image/Ursart_Black.svg');
     background-size: cover !important;
     width: 39vw !important;
     height: 12vw !important;
     padding: 0vh 0vw !important;
     }

     #login {
         padding-top: 7vh !important;
         margin-top:0;
         text-align:center !important;
         margin-left: 50vw !important;
         margin-top: 0vh !important;
         z-index:-1;
     }
  
 .login form {
     background:  none  !important; 
     border-color:none  !important;
     border: none !important;
     padding: 2vh 2vw !important;     
 }

 #resetpassform{
     width:120% !important;
 }

 .wp-core-ui .button-primary {
    background-color: rgb(40, 40, 40) !important;
    border-radius: 10px !important;
    border: none !important;
    padding: 0.8vh 0.8vw !important;
    color: white !important;
    margin-left: 0vw !important;   
    margin-top: 0 !important;
    margin-bottom: 3vh !important;
    font-weight: bold  !important;
    font-size:2.5vh  !important;
 
}

.submit{
    margin-left: 32.5vw !important;
}

body {
    background-repeat: no-repeat, repeat !important;
     background-size: cover !important;
}
 body.login {
     background-image: url('wp-content/themes/tm7200/image/image_size_login_big.png');
     margin-top: 1rem;
         } 
        #login{

            width: 30vw !important;
        }
 
 .login #backtoblog a, .login #nav a{
    
 color: black  !important;
} 

.login #nav {
padding-left:3.5vw !important;
}


#user_login.input{
   
    width: 88% !important;
    background-color: #fff0 !important; 
    border: 2px solid #919191 !important;
    height: 10vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 0rem !important;
    padding-right: 0rem !important;
    margin-left:10vw !important;
    margin-right:10vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;
 ;

    
}

#user_pass.input.password-input{
    width: 88% !important;
    background-color: #fff0 !important; 
    border: 2px solid #919191 !important;
    height: 10vh !important;
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1rem !important;
    padding-right: 0rem !important;
    margin-left:10vw !important;
    margin-right:10vw;
    font-family: Helvetica, 'FontAwesome', sans-serif;
  

}

#pass1{
    width: 88% !important;
    background-color: #fff0 !important; 
    border: 2px solid #919191 !important;
    height: 10vh !important;
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1rem !important;
    padding-right: 0rem !important;
    margin-left:10vw !important;
    margin-right:10vw;
    font-family: Helvetica, 'FontAwesome', sans-serif;
}


#user_login.input::placeholder{
    color: #919191 !important;
}



 #loginform p label,  #loginform div label {
  display:none;
}


p.forgetmenot label{
    display: inline !important;
    margin-top: 0.3rem;
    color: black  !important;
  
}
p.forgetmenot {
    margin-top: 1rem;
    margin-left:10vw !important;
    margin-right:0vw !important;
    padding-right: 0vw;
}


#backtoblog{
    margin-bottom: 2.5rem !important;
    margin-top:0 !important;
}

span.dashicons-visibility{
    margin-left:6vw !important;
}
span.dashicons-hidden{
    margin-left:6vw !important;
}

 a[href="http://localhost/wordpress/wordpress/wp-login.php?action=register"]{    
             font-weight: bold !important;
             text-transform: uppercase !important;
       }
.login #backtoblog {    
        margin-left:-15vh !important;
        }

#message{display:none !important;}
p.message.register{display:none !important;}

label[for="user_login"]{display:none !important;}


label[for="user_email"]{display:none !important;}

#user_email{
    width: 88% !important;
    background-color: #fff0 !important; 
    border: 2px solid #919191 !important;
    height: 10vh !important;
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1rem !important;
    padding-right: 0rem !important;
    margin-left:10vw !important;
    margin-right:10vw;
    font-family: Helvetica, 'FontAwesome', sans-serif;

}

#reg_passmail{
    width:200%;
    margin-left:-5vw;
}

/**** breakpoint 1********************/ 

@media (min-width: 375px) and (max-width: 1024px) { 
    body.login {
            background-image: url('wp-content/themes/tm7200/image/image_size_login_small.png');} 
            
    .login #backtoblog a, .login #nav a {color: #fff !important}
    
    .login #backtoblog a, .login #nav a{
        color: white  !important;
        }    

        .login #nav {   
           color: white  !important;
           width:120% !important;
           float: left !important;  
           margin:2rem 0 0 0 !important;      
       }
       
       a[href="http://localhost/wordpress/wordpress/wp-login.php?action=register"]{    
             font-weight: bold !important;
             text-transform: uppercase !important;
             
       }

       .login #backtoblog {    
        margin-left:0% !important;
        }

    #login h1 a, .login h1 a {     
        background-image: url('wp-content/themes/tm7200/image/Ursart_White.svg');   
        width: 70vw !important;
        height: 21vw !important;
        margin-right:0% !important;
        background-size: cover !important;  
        padding: 0vh 0vw !important;}


        p.forgetmenot label{
        display: inline !important;
        margin-top: 0.3rem;
        color: white  !important;}

    p.forgetmenot {
        margin-top: 0.5rem;
        margin-bottom: 2rem;
        margin-left:2.5vw !important;
        margin-right:0vw !important;
        padding-right: 0vw;}

    .login form {
        width: 200% !important;
        background:  none  !important; 
        border-color:none  !important;
        border: none !important;
        padding: 2vh 7vw !important;
        }

    #user_login.input{    
    width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 10vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #user_email{    
    width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 10vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #user_pass.input.password-input{   
        width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 10vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #pass1{
     width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 10vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;
}

    #login {
            padding-top: 7vh !important;
            margin-top:0;
            text-align:center !important;
            margin-left: 15% !important;
            margin-top: 0vh !important;}


    #wp-submit{
    width:85% !important;
    border-radius: 10px !important;
    padding: 0.8vh 20.5vw 0.8vh 18vw !important;
    text-align:center !important;  
    color: white !important;  
    border: 2px solid #ffffff !important;
    background-color: rgba(255, 255, 255, 0)  !important;  
    font-weight: bold  !important;
    font-size:2.5vh  !important;}

    .submit{
        margin-top: 3rem !important;
        margin-left: -11% !important;}

    span.dashicons-visibility{
        margin-left:-16vw !important;}

    span.dashicons-hidden{
        margin-left:-16vw !important; }
    
    #reg_passmail{
        color: white !important;  
        margin-left:-33vw !important;       
}
}

.description {
    color: white !important;
}

/*****mobile breakpoint */

@media (min-width: 240px) and (max-width: 640px) { 
    
    #user_login.input{    
    width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 7vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #user_email{    
    width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 7vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #user_pass.input.password-input{   
        width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 7vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #pass1{
        width: 85% !important;
    background-color: rgba(255, 255, 255, 0.800) !important; 
    border: 0px solid #919191 !important;
    height: 7vh !important; 
    font-weight: bold !important;
    border-radius: .80rem !important;
    color: #919191 !important;
    font-size: 1.2rem !important;
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
    margin-left:0vw !important;
    margin-right:5vw !important;
    font-family: Helvetica, 'FontAwesome', sans-serif;}

    #wp-submit{
    height:7vw;    
    width:85% !important;
    border-radius: 10px !important;
    padding: 0vh 20.5vw 8vh 18vw !important;
    text-align:center !important;  
    color: white !important;  
    border: 2px solid #ffffff !important;
    background-color: rgba(255, 255, 255, 0)  !important;  
    font-weight: bold  !important;
    font-size:2.5vh  !important;}

    .submit{
        margin-top: 3rem !important;
        margin-left: -11% !important;}

    .login #nav {                      
           width:250% !important; 
           margin-left:-4vw !important; 
           margin-top:10vh !important;     
       }
       .login #backtoblog {    
        width:200% !important; 
        margin-left:-16vw !important;
        }
       
       .login form {
        width: 250% !important;
        background:  none  !important; 
        border-color:none  !important;
        border: none !important;
        padding: 2vh 0vw !important;
        }

        #reg_passmail{
        width:80% !important;
        color: white !important;  
        margin-left:3.5vw !important;       
}

}

 </style>
<?php }
add_action( 'login_enqueue_scripts', 'martin_login_logo' );


function martin_login_logo_url_title() {
    return 'Ursart';
}
add_filter( 'login_headertitle', 'martin_login_logo_url_title' );


function martin_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'martin_login_logo_url' );


function martin_no_wordpress_errors(){
  return 'Ups! Algo has puesto mal...';
}
add_filter( 'login_errors', 'martin_no_wordpress_errors' );

