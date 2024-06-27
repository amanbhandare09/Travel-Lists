function formValidator(){
    var name=document.getElementById('name');
    var phone=document.getElementById('phone');
    var email=document.getElementById('email');
    

    if(notEmpty(name,'cannot be NULL')){
        if(isAlphabet(name,"Only alphabets Allowed! ")){
                if(isNumeric(phone,'Phone has to be numeric!')){  
                    if(emailValidator(email, 'Please Enter Proper emailId')){
                        if(lengthReg(phone,10,10)){
                                            return true;
                                            }
                                        }
                                    }
                                }
                            }return false;
                        }

function notEmpty(ele,helperMsg){
    if(ele.value.length==0){
        alert(helperMsg);
        ele.focus();
        return false;
    }
    return true;
}
function isAlphabet(ele,helperMsg){
    var alphaExp= /^[a-zA-Z\s]+$/;
    if(ele.value.match(alphaExp))
    {   return true; }
    else{
        alert(helperMsg);
        ele.focus();
        return false;
    }
}
function isNumeric(ele, helperMsg) {
    var numericExpression = /^[0-9]+$/;
    if (ele.value.match(numericExpression)) {
        return true;
    } else {
        alert(helperMsg);
        ele.focus();
        return false;
    }
}
function emailValidator(ele, helperMsg) {
    var emailExpression = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (ele.value.match(emailExpression)) {
        return true;
    } else {
        alert(helperMsg);
        ele.focus();
        return false;
    }
}
function lengthReg(ele, minLength, maxLength) {
    if (ele.value.length < minLength || ele.value.length > maxLength) {
        alert("The length of the " + ele.phone + " must be between " + minLength + " and " + maxLength);
        ele.focus();
        return false;
    }
    return true;
}