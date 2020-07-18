console.log('Inside file');



// localStorage.setItem('isLoggedIn',false);

var isLoggedIn=localStorage.getItem('isLoggedIn');
var user={
    name:localStorage.getItem('name'),
    email:localStorage.getItem('email'),
    username:localStorage.getItem('username')
};

// localStorage.setItem('user',JSON.stringify(user));
if(isLoggedIn===null){
    localStorage.setItem('isLoggedIn',false);
    localStorage.setItem('name',"");
    localStorage.setItem('email',"");
    localStorage.setItem('username',"");
    isLoggedIn=localStorage.getItem('isLoggedIn');
    var user={
        name:localStorage.getItem('name'),
        email:localStorage.getItem('email'),
        username:localStorage.getItem('username')
    };
    
}
console.log("Login status: "+isLoggedIn);
console.log('user: '+user);

// console.log("Login Status is ".isLoggedIn);
$(document).ready(()=>{
    if(isLoggedIn==='false'){
        $('#loginButton').html("<a href='./login.php'><button id='login' class='buttons btn btn-outline'><span class='fa fa-sign-in' style='cursor:pointer'>Login</span></button></a>");
        $('#signupButton').html("<a href='./login.php'><button id='signup' class='buttons btn btn-outline'><span className='fa fa-sign-up fa-lg'></span>Sign Up</button></a>");
    }
    else{
        $('#loginButton').html("<a href='./index.php'><button id='profile' class='buttons btn btn-outline'><span class='fa fa-user-o' style='cursor:pointer'>"+user.username+"</span></button>");
        $('#signupButton').html("<a href='./index.php'><button id='logout' class='buttons btn btn-outline'><span className='fa fa-sign-out fa-lg'></span>Logout</button></a>");
    }

    $("#logout").click(()=>{
        localStorage.setItem('isLoggedIn',false);
        localStorage.setItem('user',{});
    })
});

