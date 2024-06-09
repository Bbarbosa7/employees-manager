document.addEventListener("DOMContentLoaded", function () {
    // Check if the user has already accepted cookies policy
    cookiesPolicy();

    // Apply mask to phone input
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', maskPhone);
    }

    // Apply mask to zip input
    const zipInput = document.getElementById('zip');
    if (zipInput) {
        zipInput.addEventListener('input', maskZip);
    }

    function cookiesPolicy() {
        const cookieNoticeModal = document.getElementById("cookieNoticeModal");
        const hasAcceptedCookies = localStorage.getItem("cookiesAccepted");

        // If not accepted yet, display the notice modal
        if (hasAcceptedCookies !== "true" && cookieNoticeModal) {
            cookieNoticeModal.classList.remove("invisible");
        }

        // Add event to the accept button to handle agreement of cookies
        const acceptButton = document.getElementById("acceptCookies");
        if (acceptButton) {
            acceptButton.addEventListener("click", function () {
                localStorage.setItem("cookiesAccepted", "true");
                if (cookieNoticeModal) {
                    cookieNoticeModal.classList.add("invisible");
                }
            });
        }

        // Add event to the close button to handle rejection of cookies
        const closeButton = document.getElementById("closeButton");
        if (closeButton) {
            closeButton.addEventListener("click", function () {
                localStorage.setItem("cookiesAccepted", "false");
                if (cookieNoticeModal) {
                    cookieNoticeModal.classList.add("invisible");
                }
            });
        }
    }

    function maskPhone(event) {
        let input = event.target;
        input.value = input.value.replace(/\D/g, '');
        input.value = input.value.replace(/^(\d{2})(\d)/, '($1) $2');
        input.value = input.value.replace(/(\d{5})(\d)/, '$1-$2');
    }

    function maskZip(event) {
        let input = event.target;
        input.value = input.value.replace(/\D/g, '');
        input.value = input.value.replace(/^(\d{5})(\d{3})$/, '$1-$2');
    }
});