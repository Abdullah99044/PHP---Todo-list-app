<style> 

body{
    display:flex; 
    flex-direction:column;
    min-height: 100vh;
    margin:0;
 
}

header{ 
    height: 5vw;
    width: 100%;
    background-color: greenyellow;
    box-shadow: 2px 2px 5px black;    
    padding: 0;
    font-size: 1.05vw;
} 
 

 .title{

    display: inline-block;
    width: 70%;
    margin-left: 2vw;
    

 }

.logout{

    display: inline-block;
    width: 20%;
     
}

.logout  a {
    
    background-color: white;
    color: black;
    padding: 1vw;
    border-radius: 2vw;
}
 

.logout  a:hover {
    background-color:#EEEEEE;
     
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
    padding-top: 20px;
    padding-bottom: 20px;
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
 


/* Plan maken form style in personal page */

.makingPlanForm{

    display: block;
    width: 40%;
    padding: 2vw;
    margin-left: 28vw;
    background-color: greenyellow;
    border-radius: 4vw;

}

.makingPlanInput{
    display: block;
    text-align: center;
    height: 3vw;
    padding: 0.5vw;
    font-size: 2vw;
    border-radius: 4vw;
    margin-left: 7vw;
}

.makingPlanTextArea{
    display: block;
    width: 80%;
    height: 3vw;
    padding: 1vw;
    font-size: 1vw;
    border-radius: 4vw;
    margin: 3vw;
}

 
.makingPlanButton{

    display: inline-block;
    width: 25%;
    text-align: center;

    font-size: 2vw;
    color: black;
    background-color: white;
    
    border-radius: 1vw;
    border: 0vw;

}

 
 

/* plans style in personal page */


.plansBox{

display: block;
padding: 2vw;
margin: 1vw;
background-color: #EEEEEE;
border-radius: 4vw;
 

}


.planName{

    display: block;
    font-size: 2vw;
    font-style: italic;

}


.planDiscription{

    display: block;
    margin: 2vw;
    font-size: 1.5vw;

}

.planDelete{

    display: inline-block;
    width: 5%;
    margin-right: 2vw;
    
}

.deleteButton{


    font-size: 1.7vw;
    color: black;
    background-color: greenyellow;
    padding: 1vw;
    border-radius: 1vw;
    border: 0vw;
    
}

.plansBox a {

    text-align: center;
    display: inline-block;
    color: black;
    width: 5%;
    font-size: 1.7vw;
    padding: 1vw;
    margin-left: 1vw;
    background-color: greenyellow;
    border-radius: 1vw;
    

}


/* Planning pagina style */


.makeListButton{

    margin: 3vw;
    font-size: 1.5vw;
}

.listInsert {

    display: block;
    margin: 4vw;
    margin-top: 1vw;
    padding: 1vw;
    background-color: greenyellow;
    border-radius: 1vw;


}

.listInsert  form{

    display: inline-block;
    height: 4vw;
    margin-right: 0px;
    width: 40%;
}


.listInsert  form input{

    display: inline-block;
    margin-left: 1vw;
   
    font-size: 1.5vw;
 
}


.listInsert button {
    display: inline-block;
    width: 10%;
    
    font-size: 1.5vw;
}


.filter{
    display: block;
    margin: 3vw;
}

.filter form select {
    width: 20%;
}


.listBox{

display: block;
padding: 2vw;
margin: 1vw;
background-color: #EEEEEE;
border-radius: 4vw;
 

}

 


.listName{


    display: block;
    margin: 2vw 2vw 0vw 0vw;
    
    font-size: 2vw;
    font-style: italic;


}

.listButton{

    display: block;
    margin: 1vw 0vw 1vw 0vw;
    font-size: 2vw;
   

}

.listFormsedit{

    display: block;
    margin: 2vw;

}

.listFormsedit input{

    display: block;
    
    margin: 0vw 0vw  1vw 1vw;

    
}

.listFormsedit select{

    display: block;

    margin: 0vw 0vw  1vw 1vw;


}

.listFormsedit textarea {

    display: block;

    margin: 0vw 0vw  1vw 1vw;
}

.listFormsedit button {

display: block;

margin: 2vw 0vw  1vw 0vw;
}


 
.taskBox{

    background-color: greenyellow;
    margin-left: 1vw;
    padding: 2vw;
    border-radius: 4vw;
}


.tasks{

    display: block;
    margin: 1vw 0vw 0vw 0vw;
    font-size: 1.5vw;
    font-style: italic;

}

.taskDescription{

    display: block;
    margin: 1vw 0vw 0vw 8vw;
    font-size: 1vw;
    font-style: italic;

}


 
 

</style>