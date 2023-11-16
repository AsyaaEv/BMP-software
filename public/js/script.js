const nav = document.querySelector('#nav')
document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            document.querySelector('.toTop').classList.remove('hidden');
            document.querySelector('.toTop').classList.remove('slide-bottom');
            nav.classList.remove('slide-bottom')
            nav.classList.add('fixed')
            nav.classList.add('slide-bottom')
            nav.classList.add('backdrop-blur-md')
            nav.classList.add('bg-bg')
            nav.classList.add('bg-opacity-50')
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
            nav.classList.remove('backdrop-blur-md')
            nav.classList.remove('bg-bg')
            nav.classList.remove('bg-opacity-50')
            nav.classList.remove('border')
            nav.classList.remove('border-border')

        }
        // if(this.window.scrollY = 5000){
        // }else{
            
        // }
    });
}); 

// function test(){
    //     detail.classList.remove("hidden")
    // }
document.addEventListener('DOMContentLoaded', function () {
    const profile1 = document.querySelector('#profile-1');
    const profile2 = document.querySelector('#profile-2');
    const profile3 = document.querySelector('#profile-3');
    const detail = document.querySelector("#detail");
    const detail1 = document.querySelector("#detail1");
    const detail2 = document.querySelector("#detail2");

    profile1.addEventListener('mouseover', function () {
      
        detail.classList.remove("-translate-y-64")
        detail.classList.remove("hidden")
    });
    
    profile1.addEventListener('mouseout', function () {
        detail.classList.add("-translate-y-64")
        // detail.classList.add("hidden")
    });
    
    
    profile2.addEventListener('mouseover', function () {
        detail1.classList.remove("hidden")
        detail1.classList.remove("-translate-y-64")
    });
    
    profile2.addEventListener('mouseout', function () {
        detail1.classList.add("-translate-y-64")
        // detail.classList.add("hidden")
    });
    
    
    profile3.addEventListener('mouseover', function () {
        detail2.classList.remove("hidden")
        detail2.classList.remove("-translate-y-64")
    });
    
    profile3.addEventListener('mouseout', function () {
        detail2.classList.add("-translate-y-64")
        // detail.classList.add("hidden")
    });
});