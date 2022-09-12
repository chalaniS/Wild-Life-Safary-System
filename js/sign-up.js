
var btn = document.getElementById('sign-up');

btn.addEventListener('click',()=>{
    var pw1 = document.getElementById('pw1').value
    var pw2 = document.getElementById('pw2').value


    var success = document.querySelector('.tagline-validate-success');
    var unsuccess = document.querySelector('.tagline-validate-unsuccess');
    var empty = document.querySelector('.tagline-validate-empty');

    if(pw1 === pw2){
        success.style.visibility = 'visible';
        unsuccess.style.visibility = 'hidden';
        console.log('passed');
    }
    else if(pw1 != pw2){
        unsuccess.style.visibility = 'visible';
        success.style.visibility = 'hidden';
        console.log('failed');
    }
})




