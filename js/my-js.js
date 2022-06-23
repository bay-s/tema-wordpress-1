



  // scrooll

  function scrollDown(){
    let y = window.scrollX;
  document.addEventListener("scroll", function () {
    const header = document.querySelector('.header');
    const navbar = document.querySelector('.header-top')
    console.log(header);
    let x = window.scrollY;
    console.log(x);
    if (x > 0) {
      header.classList.add("fixed-header");
    } else {
        header.classList.remove("fixed-header");
    }
    y = x;
  });
  }
  
  scrollDown()

const open_nav = document.querySelector('.navbar-burger');
open_nav.addEventListener('click',function(e) {
  e.preventDefault()
  const dropDown = document.querySelector('.my-dropdown')
 dropDown.classList.toggle('open')
 console.log(dropDown);
})
  // const btn = document.querySelector('.back-to-top');

  // btn.addEventListener('click', {

  // })

  // const scrollToTop = () => {
  //   const c = document.documentElement.scrollTop || document.body.scrollTop;
  //   if (c > 0) {
  //     window.requestAnimationFrame(scrollToTop);
  //     window.scrollTo(0, c - c / 10);
  //   }
  // };
