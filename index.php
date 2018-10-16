<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
   <!-- EXTERNAL CSS FILE -->
  <link rel="stylesheet" type="text/css" href="./css/index.css">

   <!-- LOGO -->
   <link rel="icon" type="image/gif" href="img/logo.png">

  <!-- ANIMATE.CSSS -->
   <link rel="stylesheet" href =" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

   
  <style type="text/css">
    
   body{

   background-image: url("img/background.jpg");
   background-position: top;
   background-size: cover;
   background-repeat: no-repeat;
  

}

.content{
  color: white;
  font-style: italic;
  padding: 40px; 
}

.content h2 {
  margin-top: 5px;
}

form{
    color: #36474F;
}

.reg_option{
    cursor: pointer;
}

.reg_option:hover{
    text-decoration: underline;
    color: white;
}


#login_option{
  color: #E9ECEF;
}

#sign_option{
    text-decoration: underline;
}

  </style>






    <title>Code Chain</title>
  </head>
  <body>
   
  
    <div class="row content" style="margin-top: 40px;">

      <!-- DESCRIPTION -->
      <div class="col-sm-8" >
        <img src="img/logo.png" height="150" width="150"  >
         <h2>Code Chain</h2><br>
        <p>A Real Time code Sharing Website with easy to <br> use User Interface. Code Chain is a Unique Web <br> Application  help you to code  with your friends <br> on the same  compiler with real time screen sharing.</p>

      </div>

      <!--  FORM -->

      <div class="col-sm-4">

         <div class="row" style="text-align: center;" >
                


             <!-- SIGN UP OPTION -->    
             <div class="col-sm-6" >
                <p class="reg_option" id="sign_option"><b>Sign Up</b></p>              
             </div>
                
              <!-- LOGIN OPTION  --> 
             <div class="col-sm-6" >
                 <p class="reg_option" id="login_option"><b>Login</b></p>
             </div>    
                
          
         </div>


       <!-- SIGN UP FORM -->
        <div class="card flipInY animated" id="sign_form">
        <div class="card-body">
          <form method="post" action="common/signup.php" id="from"  onsubmit="return valid_signup()"  >
              
              <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="firstname"><b>First Name</b></label>
                  <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
                <div class="form-group col-md-6 ">
                  <label><b>Last Name</b></label>
                  <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
              </div>

             
                <div class="form-group ">
                    <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control"  name="email" id="email">
                </div>
                <div class="form-group ">
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              
               
                <div class="form-group ">
                    <label for="username"><b>Username</b></label>
                  <input type="text" class="form-control" name="username" id="username">
                </div>
               <br> 
              
              <button type="submit" class="btn btn-primary btn-sm btn-block" name="signup" id="sign_button" >Sign Up</button>
            </form>
        </div>
       </div>

       <!-- LOGIN FORM -->
        <div class="card flipInY animated" id="login_form" style="display: none;">
        <div class="card-body">
          <form method="post" action="common/login.php" onsubmit="return valid_login()">
              
                <div class="form-group ">
                    <label for="username"><b>Username</b></label>
                  <input type="text" class="form-control" name="login_username" id="username_l">
                </div>
                <div class="form-group ">
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" name="login_password" id="password_l">
                </div>
                <br>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="check" name="remember"><b>Remember Me<b></label>
                         <a href="" style="float: right;">Forgot Password ?</a>
                 </div>

               <br> 
              
              <button type="submit" class="btn btn-primary btn-sm btn-block" name="login">Login</button>
            </form>
        </div>
       </div>



      </div>
    </div>

    <script type="text/javascript">
      
    const login_button = document.querySelector("#sign_button");
    const username_l = document.querySelector("#username_l");
    const password_l = document.querySelector("#password_l");

    var flag_l = 0;

    var valid_login = function(){

      if(password_l.value == ""){
         password_l.style.borderColor = "#DC3545"; flag_l = 1;
       }
       else{
         password_l.style.borderColor = "#CED4DA";
       }

      if(username_l.value == ""){
         username_l.style.borderColor = "#DC3545"; flag_l = 1 ;
       }
       else{
         username_l.style.borderColor = "#CED4DA";
       }


     if(flag_l){
      return false ;
    }

    else{
     return true ;
    }

}


//VALIDATION OF SIGNUP FORM
 const sign_button = document.querySelector("#sign_button");
    const firstname = document.querySelector("#firstname");
    const lastname = document.querySelector("#lastname");
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const username = document.querySelector("#username");
     const formcontrol = document.querySelector(".form-control");

    var flag = 0 ;


     var valid_signup = function(){

      if(firstname.value == ""){
        firstname.style.borderColor = "#DC3545"; flag = 1 ;
      }
      else{
         firstname.style.borderColor = "#CED4DA";
         }
      
      if(lastname.value == ""){
        lastname.style.borderColor = "#DC3545";   flag = 1 ;
      }
      else{
         lastname.style.borderColor = "#CED4DA";
        }


      if(email.value==""){
        email.style.borderColor = "#DC3545" ;   flag = 1;
      }
      else
        email.style.borderColor = "#CED4DA" ; 


      if(password.value == ""){
         password.style.borderColor = "#DC3545"; flag = 1;
       }
       else{
         password.style.borderColor = "#CED4DA";
       }

      if(username.value == ""){
         username.style.borderColor = "#DC3545"; flag = 1 ;
       }
       else{
         username.style.borderColor = "#CED4DA";
       }

         

     if(flag){
      return false ;
    }

    else{
     return true ;
    }
  }




    </script>
   
   <script type="text/javascript" src="./js/index.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>