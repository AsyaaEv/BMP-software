const nav = document.querySelector('#nav')
document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            document.querySelector('.toTop').classList.remove('hidden');
            document.querySelector('.toTop').classList.remove('slide-bottom');
            nav.classList.remove('slide-bottom')
            nav.classList.add('fixed')
            nav.classList.add('slide-bottom')
            nav.classList.add('backdrop-blur-sm')
            nav.classList.add('bg-bg')
            nav.classList.add('bg-opacity-70')
            nav.classList.add('border')
            nav.classList.add('border-border')
            // bg-bg bg-opacity-60 border
            // add padding top to show content behind nav
            //   nav_height = document.querySelector('.nav').offsetHeight;
            //   document.body.style.paddingTop = nav_height + 'px';
        }else{
            document.querySelector('.toTop').classList.add('slide-bottom');
            document.querySelector('.toTop').classList.add('hidden');
            nav.classList.remove('fixed')
            nav.classList.remove('slide-bottom')
            nav.classList.remove('backdrop-blur-sm')
            nav.classList.remove('bg-bg')
            nav.classList.remove('bg-opacity-70')
            nav.classList.remove('border')
            nav.classList.remove('border-border')

        }
        // if(this.window.scrollY = 5000){
        // }else{
            
        // }
    });
}); 