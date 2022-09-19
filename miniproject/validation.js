function matchpass(){
	//validation for email
var emails =document.signup.email.value;
if(emails.indexOf('@') <= 0 ){
document.getElementById("email").innerHTML =" ** @ Invalid Position **";
return false;
}

if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
document.getElementById("email").innerHTML =" ** . Invalid Position **";
return false;
}
//password validation
var pass=document.signup.pswd.value;
if(pass == ""){
document.getElementById("pswd").innerHTML =" ** Please fill the password field **";
return false;
}
if((pass.length <= 5) || (pass.length > 20)) {
document.getElementById("pswd").innerHTML =" ** Passwords length must be between  5 and 20 **";
return false;
}
//VALIDATION FOR CONFIRM  PASSWORD

var cf=document.signup.pswd2.value;
if(cf == ""){
document.getElementById("pswd2").innerHTML =" ** Please fill the confirm password field **";
return false;
}



if(pass!=cf){
document.getElementById("pswd2").innerHTML = " ** Password does not match the confirm password **";
return false;
}

}