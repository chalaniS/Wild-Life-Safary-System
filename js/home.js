document.addEventListener('DOMContentLoaded',()=>{
    window.addEventListener('scroll',()=>{
        var sector = document.querySelector('section');
        sector.classList.toggle('sticky',window.scrollY>0);
    })    
})
