function onLoad() {
    loadNav()
}

function loadNav() {
    document.getElementById("nav").innerHTML = '<ul>\
                <li>\
                    <a href="home.html"><img alt="Logo" src=../assets/orange_logo.png id="logo"></a>\
                    <ul class="dropdown">\
                        <li><a href="PLACEHOLDER"><h5>1</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>2</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>3</h5></a></li>\
                        <li><a href="PLACEHOLDER"><h5>4</h5></a></li>\
                    </ul>\
                </li>\
                <li><a href="OPhone.html"><h4>OPhone</h4></a></li>\
                <li><a href="OWatch.html"><h4>OWatch</h4></a></li>\
                <li><a href="EarthPods.html"><h4>EarthPods</h4></a></li>\
            </ul>'
}