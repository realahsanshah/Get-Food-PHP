// import {dishesInCart} from './cartItems';

console.log('Inside file');

// console.log("CART: "+dishesInCart);
window.dishSelected=[];

// localStorage.setItem('isLoggedIn',false);
console.log("Cart: "+dishSelected);
var isLoggedIn=localStorage.getItem('isLoggedIn');
window.user={
    userId:localStorage.getItem('userId'),
    name:localStorage.getItem('name'),
    email:localStorage.getItem('email'),
    username:localStorage.getItem('username')
};

// localStorage.setItem('user',JSON.stringify(user));
if(isLoggedIn===null){
    localStorage.setItem('isLoggedIn',false);
    localStorage.setItem('userId',"");
    localStorage.setItem('name',"");
    localStorage.setItem('email',"");
    localStorage.setItem('username',"");
    isLoggedIn=localStorage.getItem('isLoggedIn');
    window.user={
        userId:localStorage.getItem('userId'),
        name:localStorage.getItem('name'),
        email:localStorage.getItem('email'),
        username:localStorage.getItem('username')
    };
    
}
console.log("Login status: "+isLoggedIn);
console.log('user: '+window.user.name);

var cartItems={};


// console.log("Login Status is ".isLoggedIn);
$(document).ready(()=>{
    if(isLoggedIn==='false'){
        $('#cartLink').html('<li class="nav-item"><a class="nav-link" href="index.php"><span class="fa fa-shopping-cart fa-lg"></span>Cart</a></li>')
        $('#loginButton').html("<a href='./login.php'><button id='login' class='buttons btn btn-outline'><span class='fa fa-sign-in' style='cursor:pointer'>Login</span></button></a>");
        $('#signupButton').html("<a href='./signup.php'><button id='signup' class='buttons btn btn-outline'><span className='fa fa-sign-up fa-lg'></span>Sign Up</button></a>");
    }
    else{
        $('#cartLink').html('<li class="nav-item"><a id="cartBtn" class="nav-link"><span class="fa fa-shopping-cart fa-lg"></span>Cart</a></li>')
        $('#loginButton').html("<button id='profile' class='buttons btn btn-outline'><span class='fa fa-user-o' style='cursor:pointer'>"+window.user.username+"</span></button>");
        $('#signupButton').html("<a href='./index.php'><button id='logout' class='buttons btn btn-outline'><span className='fa fa-sign-out fa-lg'></span>Logout</button></a>");
    }

    $("#logout").click(()=>{
        localStorage.setItem('isLoggedIn',false);
        localStorage.setItem('user',{});
    });

    let userId=localStorage.getItem('userID');
    $('#cartBtn').click(()=>{
        window.location.href = "http://localhost/projects/get-food-php/cart.php?user="+userId;
    });

    $('#profile').click(()=>{
        window.location.href = "http://localhost/projects/get-food-php/profile.php?user="+userId;
    })

    $('#profileName').html("Name: "+window.user.name);
    $('#profileEmail').html("Email: "+window.user.email);
    $('#profileUsername').html("Username: "+window.user.username);

    // $('.addToCart').click((event)=>{
    //     // dishesInCart.push({
    //     //     dishId:event.target.id,
    //     //     userId:window.user.userID
    //     // });
    //     dishSelected.push({
    //         dishId:event.target.id,
    //         userId:window.user.userID
    //     });
    // });
});



