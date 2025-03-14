document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll("input");
            inputs.forEach(input => {
                if (input.value) {
                    input.nextElementSibling.classList.add("filled");
                }
                input.addEventListener("blur", function() {
                    if (this.value) {
                        this.nextElementSibling.classList.add("filled");
                    } else {
                        this.nextElementSibling.classList.remove("filled");
                    }
                });
            });
        });