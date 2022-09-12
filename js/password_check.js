document.addEventListener('DOMContentLoaded',()=>{
    var checkBtn =  document.querySelector('#check-btn');

    // function for validate change password section of the user
    checkBtn.addEventListener('click',()=>{
        var enterpw = document.getElementById('user-inp-2').value;
        var reenterpw = document.getElementById('user-inp-3').value;

        var correct = document.querySelector('.val-wrong');
        var incorrect = document.querySelector('.val-correct');
        var empty = document.querySelector('.val-empty');
        var fallback = document.querySelector('.val-fallback');

        if(enterpw === '' || reenterpw === ''){
            empty.style.visibility = 'visible';
            correct.style.visibility = 'hidden';
            incorrect.style.visibility = 'hidden';
            fallback.style.visibility = 'hidden';
        }
        
        else if(enterpw === reenterpw && enterpw !== ' ' && reenterpw !== ' '){
            correct.style.visibility = 'visible';
            empty.style.visibility = 'hidden';
            incorrect.style.visibility = 'hidden';
            fallback.style.visibility = 'hidden';
        }

        else if(enterpw != reenterpw){
            incorrect.style.visibility = 'visible';
            correct.style.visibility = 'hidden';
            empty.style.visibility = 'hidden';
            fallback.style.visibility = 'hidden';
        }

        else{
            fallback.style.visibility = 'visible';
            incorrect.style.visibility = 'hidden';
            correct.style.visibility = 'hidden';
            empty.style.visibility = 'hidden';
        }

    })
})