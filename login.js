function validate(){
    var username=document.getElementById("username").value;
    var pass=document.getElementById("password").value;
    
    if(username=="admin" && pass=="admin"){
        window.location.href="./home.html";
    }else{
        alert("Something Wrong");
    }    
}
