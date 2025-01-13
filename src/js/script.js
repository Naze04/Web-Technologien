function onLoad() {
    loadNav()
}

function loadNav() {
    document.getElementById("nav").innerHTML = '<ul class="menu">\
                <li>\
                    <a href="home.php"><img alt="Logo" src=../assets/orange_logo.png class="logo"></a>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>test</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                </li>\
                <li><a href="shop.php"><h4>Shop</h4></a></li>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>1</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                <li>\
                    <a href="oPhone.php"><h4>OPhone</h4></a>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>1</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                </li>\
                <li><a href="oWatch.php"><h4>OWatch</h4></a></li>\
                <li><a href="earthPods.php"><h4>EarthPods</h4></a></li>\
                <li><a href="aboutUs.php"><h4>About Us</h4></a></li>\
            </ul>'
}

//Cardslider

    document.addEventListener('DOMContentLoaded', () => {
        const nextBtn = document.querySelector('#next-btn');
        const prevBtn = document.querySelector('#prev-btn');
        const slider = document.querySelector('#slider');
        if (nextBtn) {
            console.log('Next button found:', nextBtn);
        } else {
            console.error('Next button not found');
        }
    
        let currentIndex = 0;
    
        nextBtn.addEventListener('click', () => {
          const cards = document.querySelectorAll('.card');
          const cardWidth = cards.length > 0 ? cards[0].offsetWidth + 20 : 0;
          const maxIndex = cards.length - Math.floor(slider.offsetWidth / cardWidth);
          
          if (currentIndex < maxIndex) {
            currentIndex++;
            slider.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
          }
        });
    
        prevBtn.addEventListener('click', () => {
          const cards = document.querySelectorAll('.card');
          const cardWidth = cards[0].offsetWidth + 20;
    
          if (currentIndex > 0) {
            currentIndex--;
            slider.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
          }
        });
    });

