document.getElementById("hambuger-icon").addEventListener("click", function() {
    let adminProfile = document.getElementsByClassName("admin-profile");
    let sidebarMenu = document.getElementsByClassName("side-bar-content");
    let sideBar = document.getElementsByClassName("side-bar");
    // alert(sideBar.style.width === "")
    // sideBar.style.width = sideBar.style.width === "50px" ? "200px" : "50px";
    // console.log(sideBar.style.width);

    if (sideBar[0].classList.contains("sidebar-open")) {
        sideBar[0].classList.remove("sidebar-open");
        adminProfile[0].classList.remove("profile-appear");
        adminProfile[0].classList.add("profile-disappear");
        sidebarMenu[0].classList.add("sidebar-disappear");
       
    } else {
        sideBar[0].classList.add("sidebar-open");
        adminProfile[0].classList.add("profile-appear");
        adminProfile[0].classList.remove("profile-disappear");
        sidebarMenu[0].classList.remove("sidebar-disappear");
    }
});