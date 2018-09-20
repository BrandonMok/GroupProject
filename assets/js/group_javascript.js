/* Group Project JS */


/* Form Validation */
function validate(){
    var name = document.getElementById('name').value=="";
    var email = document.getElementById('email').value=="";
    var phone = document.getElementById('phoneNum').value=="";
    
	if(name){
		document.getElementById('name').style.background="red";		
		return false;
	}
    
    if(email){
        document.getElementById('email').style.background="red";
        return false;
    }
    
    if(phone){
        document.getElementById('phoneNum').style.background="red";
        return false;
    }

}