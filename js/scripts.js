console.log('Inside file');



// localStorage.setItem('isLoggedIn',false);

var isLoggedIn=localStorage.getItem('isLoggedIn');

if(isLoggedIn===null){
    localStorage.setItem('isLoggedIn',false);
    isLoggedIn=localStorage.getItem('isLoggedIn');
}
console.log("Login status: "+isLoggedIn);

// console.log("Login Status is ".isLoggedIn);
$(document).ready(()=>{
    if(isLoggedIn==='false'){
        $('#loginButton').html("<button id='login' class='btn btn-outline'><span class='fa fa-sign-in' style='cursor:pointer'>Login</span></button>");
        $('#signupButton').html("<button id='signup' class='btn btn-outline'><span className='fa fa-sign-up fa-lg'></span>Sign Up</button>");
    }
    else{
        $('#loginButton').html("<button id='profile' class='btn btn-outline'><span class='fa fa-sign-in' style='cursor:pointer'>Ahsan Shah</span></button>");
        $('#signupButton').html("<button id='logout' class='btn btn-outline'><span className='fa fa-sign-up fa-lg'></span>Logout</button>");
    }

    $("#logout").click(()=>{
        localStorage.setItem('isLoggedIn',false);
    })
});

