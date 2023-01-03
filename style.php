<style> 

body{
    display:flex; 
    flex-direction:column;
    min-height: 100vh;
    margin:0;
 
}

header{ 
    height: 5vw;
    background-color: greenyellow;
    box-shadow: 2px 2px 5px black;    
    padding: 0;
} 
 

.title {

    height: 100%;
    margin-top: 1.5vw;
    display: inline-block;
     
    padding-left: 1vw;
    width: 70%;
    
}



article{ 

    flex:1; 
    

}


footer{
    min-height: 2vw; 
    background:PapayaWhip;
    display: block;
    margin-top: 90px;
    box-shadow: 2px 2px 5px black;
    padding: 20px;
    background-color: greenyellow;
     
    text-align: center;
    bottom: 0;
    width: 100%;

}


/* index style */


.indexButtonsBox{
       
    height: 10vw;
    display: block;
    background-color: greenyellow;
    border-radius: 5vw;
    box-shadow: 2px 2px 5px black;
    margin: 10vw;
 
}

.indexButton{
    display: inline-block;
    height: 5vw;
    width: 30%;
    margin: 2.5vw 4.5vw 2.5vw 9vw;
    font-size: 5vw;
    
    text-align: center;
    background-color: white;
    border-radius: 5vw;
    box-shadow: 2px 2px 5px black;
    
}

.button , a{
     
    font-size: 3vw;
    margin-top: 0.5vw;
    color: greenyellow;
    text-decoration-line: none;
}

.indexButton:hover{
    background-color: #EEEEEE ;
}


/* loginPage style */

.loginBox {

    display: block;
    height: 20vw;
    width: 20%;
    margin: 4vw 5vw 4vw 40vw;
    padding-top: 2.5vw;
    padding-bottom: 0vw;
    background-color: greenyellow;
    border-radius: 5vw;
    box-shadow: 2px 2px 5px black;
    
    
}

.loginForm{

    display: block;
    margin-top: 2vw;
    margin-left: 1.4vw;
    padding: 0.5vw;
    height: 3vw;
    width: 80%;
    border: black 1vw;
    border-radius: 5vw;
    font-size: 1vw;


}

.loginSubmmit {
    display: block;
    margin-top: 2vw;
    margin-left: 5vw;
    height: 3vw;
    width: 50%;
    border: black 1vw;
    border-radius: 5vw;
    background-color: white;
    font-size: 1vw;

}

.loginSubmmit:hover {
    background-color: #EEEEEE;
}


.loginPageWarning {

    text-align: center;
    margin-top: 5vw;
}
 


/* SignUp page style */


.signUpBox {

    display: block;
    height: 32vw;
    width: 20%;
    margin: 4vw 5vw 4vw 40vw;
    padding-top: 2.5vw;
    padding-bottom: 0vw;
    background-color: greenyellow;
    border-radius: 5vw;
    box-shadow: 2px 2px 5px black;


}

.signUpForm{

    display: block;
    margin-top: 2vw;
    margin-left: 1.4vw;
    padding: 0.5vw;
    height: 3vw;
    width: 80%;
    border: black 1vw;
    border-radius: 5vw;
    font-size: 1vw;


}

.signUpSubmmit {
    display: block;
    margin-top: 2vw;
    margin-left: 5vw;
    height: 3vw;
    width: 50%;
    border: black 1vw;
    border-radius: 5vw;
    background-color: white;
    font-size: 1vw;

    
}


.signUpSubmmit:hover {
    background-color: #EEEEEE;
}



/* Personal page style */

.headerBox{
       
       height: 15vw;
       display: block;
       background-color: greenyellow;
       padding-top: 1vw;
       border-radius: 5vw;
       box-shadow: 2px 2px 5px black;
       margin: 10vw;
       text-align: center;

    
}

.welcoming {

    font-size: 5vw;
    margin-top: 1vw;
    margin-bottom: 0;
    font-style: italic;
}

.makingPlanButton {
    height: 3vw;
    width: 20%;
    border: black 1vw;
    border-radius: 5vw;
    background-color: white;
    font-size: 1vw;
    margin-top: 2.5vw;

}
   
.makingPlanButton:hover {
    background-color: #EEEEEE;
}
 

.logout{

    height: 3vw;
    width: 20%;
    border: black 1vw;
    border-radius: 5vw;
    background-color: white;
    font-size: 1vw;
    margin-top: 2.5vw;


 
}

 

.logout:hover {

    background-color: #EEEEEE;
}



</style>