document.addEventListener("DOMContentLoaded", function () {
    // Check if the user has already accepted cookies policy
    cookiesPolicy();

    function cookiesPolicy() {
        const cookieNoticeModal = document.getElementById("cookieNoticeModal");
        const hasAcceptedCookies = localStorage.getItem("cookiesAccepted");

        // If not accepted yet, display the notice modal
        if (hasAcceptedCookies !== "true") {
            cookieNoticeModal.classList.remove("invisible");
        }

        // Add event to the accept button to handle agreement of cookies
        const acceptButton = document.getElementById("acceptCookies");

        acceptButton.addEventListener("click", function () {
            console.log("cookies accepted");
            localStorage.setItem("cookiesAccepted", "true");
            cookieNoticeModal.classList.add("invisible");
        });

        // Add event to the close button to handle rejection of cookies
        const closeButton = document.getElementById("closeButton");

        closeButton.addEventListener("click", function () {
            console.log("cookies rejected");
            localStorage.setItem("cookiesAccepted", "false");
            cookieNoticeModal.classList.add("invisible");
        });
    }
});
