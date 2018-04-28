var userInfosDropdownBtn = document.querySelector('.user-infos-dropdown-btn');
var userInfosDropdown = document.querySelector('.user-infos-dropdown');
var userInfosDropdownState = false;


if (userInfosDropdownBtn !== null) {
    userInfosDropdownBtn.addEventListener('click', function () {
        if (userInfosDropdownState == false) {

            userInfosDropdown.style.display = "block";
            userInfosDropdownState = true;

            window.addEventListener('click', function () {
                if (userInfosDropdownState == true) {
                    userInfosDropdown.style.display = "none";
                    userInfosDropdownState = false;
                }
            });

        } else {
            userInfosDropdown.style.display = "none";
            userInfosDropdownState = false;
        }
    })
}
