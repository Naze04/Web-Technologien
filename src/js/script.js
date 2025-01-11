function onLoad() {
    loadNav()
}

function loadNav() {
    document.getElementById("nav").innerHTML = '<ul class="menu">\
                <li>\
                    <a href="home.html"><img alt="Logo" src=../assets/orange_logo.png class="logo"></a>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>test</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                </li>\
                <li><a href="shop.html"><h4>Shop</h4></a></li>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>1</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                <li>\
                    <a href="oPhone.html"><h4>OPhone</h4></a>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>1</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                </li>\
                <li><a href="oWatch.html"><h4>OWatch</h4></a></li>\
                <li><a href="earthPods.html"><h4>EarthPods</h4></a></li>\
                <li><a href="aboutUs.html"><h4>About Us</h4></a></li>\
            </ul>'
}