const navslide = () =>{
    const menubtn = document.querySelector('.navbar-menu-btn');
    const nav = document.querySelector('.navbar-menu-links');
    const navlinksfade = document.querySelectorAll('.menu li');
    const menubars = document.querySelector('.menu-bar div');
    //toggle nav
    menubtn.addEventListener('click', ()=>{
        nav.classList.toggle('navbar-menu-links-active',);
        menubtn.classList.toggle('menu-bar-focus');

        
        //animate links
        navlinksfade.forEach((link,index) => {
            link.style.animation = `navlinksfade 0.7s ease forwards ${index / 5 }s`;

        })

       
        //burger animation
       
    })


}
navslide();