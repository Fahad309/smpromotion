//  for login form 

let loginbtn = document.querySelector('button');
loginbtn.addEventListener('click', showMsg_login);

function showMsg_login()
{
    alert("Are You want to login");

}



// for order form successfully submitted

let firstName="Fahad";
let lastname="Bilal";
const transitonId="123456789"
let orderbtn=document.querySelector('button');
orderbtn.addEventListener('click' ,showMsg_order);


function showMsg_order()
{
alert(firstName +" your order is Successfully submitted by this " + transitonId + " Tid. Thanks For order:)");
}


// for contact us form


 
let commentbtn=document.querySelector('button');
commentbtn.addEventListener('click' , showMsg_contact);

function showMsg_contact()
{
    alert("Your comment is successfully submitted. we will respone you shortly on email.");
}


// for signup page

let signupbtn=document.querySelector('button');
signupbtn.addEventListener('click', showMsg_signup );

function showMsg_signup()
{

    alert("Your account is successfully registered. Now login your account.");
}



var transitionId=prompt("Enter transition id for confirm order.")

if(transitionId=="7381010")
{

    alert("Your order is successfully submitted");

}
else 
{
    alert("Please put the correct transition Id.");
}