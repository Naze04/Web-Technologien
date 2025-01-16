function onLoginClick() {
    let element = document.getElementById("logindropdown")
    if (element.isOpen != true) {
        element.style.opacity = 1
        element.style.transform = "scaleY(1)"
        element.isOpen = true
    } else {
        element.style.opacity = 0
        element.style.transform = "scaleY(0)"
        element.isOpen = false
    }
}