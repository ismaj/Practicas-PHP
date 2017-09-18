function validate(){
	var pwd=document.form.pwd.value;
	var rpwd=document.form.repeatpassword.value;

	if(pwd!=rpwd){
		alert('Password incorrectos');
		document.form.pwd.focus();
		return false;
	}


}