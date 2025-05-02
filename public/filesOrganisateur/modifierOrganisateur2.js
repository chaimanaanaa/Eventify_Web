let employmentString = "";
let languagesString = "";
let skillsString = "";

document.addEventListener("DOMContentLoaded", function () {
    // Gestion des sections dynamiques (emploi, langues, compétences)
    function setupDynamicSection(buttonId, inputContainerId, containerId, addButtonId, cancelButtonId, stringToUpdate) {
        const button = document.getElementById(buttonId);
        const inputContainer = document.getElementById(inputContainerId);
        const container = document.getElementById(containerId);
        const addButton = document.getElementById(addButtonId);
        const cancelButton = document.getElementById(cancelButtonId);

        let isVisible = false;

        button.addEventListener("click", function () {
            isVisible = !isVisible;
            inputContainer.style.display = isVisible ? "flex" : "none";
        });

        addButton.addEventListener("click", function () {
            const input = inputContainer.querySelector("input");
            const value = input.value.trim();
            if (value) {
                const newItem = document.createElement("div");
                newItem.classList.add("dynamic-item");

                const text = document.createElement("span");
                text.textContent = value;

                const deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.onclick = function () {
                    container.removeChild(newItem);
                    removeFromString(stringToUpdate, value);
                };

                newItem.appendChild(text);
                newItem.appendChild(deleteButton);
                container.appendChild(newItem);

                updateString(stringToUpdate, value);
                input.value = "";
                inputContainer.style.display = "none";
                isVisible = false;
            }
        });

        cancelButton.addEventListener("click", function () {
            inputContainer.style.display = "none";
            isVisible = false;
            inputContainer.querySelector("input").value = "";
        });
    }

    function updateString(stringName, value) {
        switch (stringName) {
            case "employmentString":
                employmentString = employmentString ? `${employmentString},${value}` : value;
                break;
            case "languagesString":
                languagesString = languagesString ? `${languagesString},${value}` : value;
                break;
            case "skillsString":
                skillsString = skillsString ? `${skillsString},${value}` : value;
                break;
        }
    }

    function removeFromString(stringName, value) {
        switch (stringName) {
            case "employmentString":
                employmentString = employmentString.split(",").filter(item => item !== value).join(",");
                break;
            case "languagesString":
                languagesString = languagesString.split(",").filter(item => item !== value).join(",");
                break;
            case "skillsString":
                skillsString = skillsString.split(",").filter(item => item !== value).join(",");
                break;
        }
    }

    setupDynamicSection("addEmploymentButton", "employmentInputContainer", "employmentContainer", "addEmployment", "cancelEmployment", "employmentString");
    setupDynamicSection("addLanguageButton", "languageInputContainer", "languageContainer", "addLanguage", "cancelLanguage", "languagesString");
    setupDynamicSection("addSkillButton", "skillInputContainer", "skillContainer", "addSkill", "cancelSkill", "skillsString");

    // Gestion de l'upload d'image
    const uploadButton = document.getElementById("uploadPhotoButton");
    const fileInput = document.getElementById("imageUpload");
    const profileImage = document.querySelector(".profile-image");

    uploadButton.addEventListener("click", function () {
        fileInput.click();
    });

    fileInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Supprimer les messages d'erreur lorsqu'un champ est modifié
    const inputs = document.querySelectorAll("input, select");
    inputs.forEach(input => {
        input.addEventListener("input", function () {
            const errorDiv = input.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains("error-message")) {
                errorDiv.remove();
            }
        });
    });
});

// Calcul des années d'expérience
function calculateExperience() {
    const selectedDate = document.getElementById("dateExp").value;
    if (!selectedDate) {
        document.getElementById("nbExp").value = "";
        return;
    }

    const startDate = new Date(selectedDate);
    const currentDate = new Date();
    let yearsOfExperience = currentDate.getFullYear() - startDate.getFullYear();

    if (
        currentDate.getMonth() < startDate.getMonth() ||
        (currentDate.getMonth() === startDate.getMonth() && currentDate.getDate() < startDate.getDate())
    ) {
        yearsOfExperience--;
    }

    document.getElementById("nbExp").value = yearsOfExperience;

     // Supprimer uniquement le message d'erreur sous nbExp, s'il existe
     const nbExpInput = document.getElementById("nbExp");
     const errorDiv = nbExpInput.nextElementSibling;
     if (errorDiv && errorDiv.classList.contains("error-message")) {
         errorDiv.remove();
     }


}

// Soumission du formulaire
document.getElementById("AddOrganizer").addEventListener("click", async function () {
    // Afficher la modale de confirmation
    const modal = document.getElementById("confirmationModal");
    const backdrop = document.getElementById("modalBackdrop");
    modal.style.display = "block";
    backdrop.style.display = "block";

    return new Promise((resolve) => {
        document.getElementById("confirmYes").onclick = async () => {
            modal.style.display = "none";
            backdrop.style.display = "none";
            resolve(true);
        };

        document.getElementById("confirmCancel").onclick = () => {
            modal.style.display = "none";
            backdrop.style.display = "none";
            resolve(false);
        };
    }).then(async (isConfirmed) => {
        if (!isConfirmed) {
            return;
        }

        // Supprimer les messages d'erreur existants
        document.querySelectorAll(".error-message").forEach(div => div.remove());

        const fileInput = document.getElementById("imageUpload");
        let imageBase64 = null;

        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            imageBase64 = await new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    resolve(e.target.result.split(",")[1]);
                };
                reader.onerror = function (error) {
                    reject(error);
                };
                reader.readAsDataURL(file);
            });
        }

        const formData = {
            imageOrg: imageBase64,
            nom_org: document.getElementById("nomOrg").value.trim(),
            prenom_org: document.getElementById("prenomOrg").value.trim(),
            email_org: document.getElementById("emailOrg").value.trim(),
            num_tel: document.getElementById("numOrg").value.trim(),
            city: document.getElementById("city").value.trim(),
            date_naissance: document.getElementById("date_naissance").value,
            specialite: document.getElementById("specialiteCombo").value,
            date_embauche: document.getElementById("dateEmbauche").value,
            nbexp: document.getElementById("nbExp").value,
            salaire: parseFloat(document.getElementById("salaire").value) || 0,
            employment: employmentString,
            skills: skillsString,
            longuage: languagesString,
            statut: document.getElementById("stateFilter")?.value || "Available"

        };

        try {
            const organizerData = document.getElementById("organizerData");
            const idOrg = organizerData.dataset.idOrg;

            const response = await fetch(`/organisateur/edit/${idOrg}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (response.ok) {
                const successModal = document.getElementById("successModal");
                const successBackdrop = document.getElementById("successModalBackdrop");
                successModal.style.display = "block";
                successBackdrop.style.display = "block";

                document.getElementById("closeSuccessModal").onclick = () => {
                    successModal.style.display = "none";
                    successBackdrop.style.display = "none";
                    document.getElementById("handleClear").click();
                    window.location.href = document.referrer;
                };
            } else {
                if (result.errors) {
                    const fieldToIdMap = {
                        'imageOrg': 'imageUpload',
                        'nom_org': 'nomOrg',
                        'prenom_org': 'prenomOrg',
                        'email_org': 'emailOrg',
                        'num_tel': 'numOrg',
                        'city': 'city',
                        'date_naissance': 'date_naissance',
                        'specialite': 'specialiteCombo',
                        'date_embauche': 'dateEmbauche',
                        'nbexp': 'nbExp',
                        'salaire': 'salaire',
                        'employment': 'employmentContainer',
                        'skills': 'skillContainer',
                        'longuage': 'languageContainer'
                    };

                    for (const [field, message] of Object.entries(result.errors)) {
                        const inputId = fieldToIdMap[field];
                        if (inputId) {
                            const inputElement = document.getElementById(inputId);
                            if (inputElement) {
                                const errorDiv = document.createElement("div");
                                errorDiv.className = "error-message";
                                errorDiv.textContent = message;
                                inputElement.insertAdjacentElement("afterend", errorDiv);
                            }
                        }
                    }
                }
            }
        } catch (error) {
            console.error("Erreur réseau :", error);
            alert("Erreur réseau. Veuillez réessayer.");
        }
    });
});

// Réinitialisation du formulaire
document.addEventListener("DOMContentLoaded", function () {
    function clearForm() {
        document.querySelectorAll("input[type='text'], input[type='date'], input[type='email'], input[type='number']").forEach(input => {
            input.value = "";
        });

        const fileInput = document.getElementById("imageUpload");
        if (fileInput) {
            fileInput.value = "";
        }

        const profileImage = document.querySelector(".profile-image");
        if (profileImage) {
            profileImage.src = "{{ asset('filesOrganisateur/imageOrganisateur/1.jpg') }}";
        }

        const specialiteCombo = document.getElementById("specialiteCombo");
        if (specialiteCombo) {
            specialiteCombo.value = "";
        }

        const dynamicContainers = ["employmentContainer", "languageContainer", "skillContainer"];
        dynamicContainers.forEach(containerId => {
            const container = document.getElementById(containerId);
            if (container) {
                container.innerHTML = "";
            }
        });

        employmentString = "";
        languagesString = "";
        skillsString = "";

        // Supprimer les messages d'erreur
        document.querySelectorAll(".error-message").forEach(div => div.remove());
    }

    const clearButton = document.getElementById("handleClear");
    if (clearButton) {
        clearButton.addEventListener("click", clearForm);
    }
});

// Configuration des datepickers
document.addEventListener("DOMContentLoaded", function () {
    function configureDatePickers() {
        const today = new Date();
        const maxBirthDate = "2020-12-31";
        const birthDateInput = document.getElementById("date_naissance");
        birthDateInput.setAttribute("max", maxBirthDate);

        const maxExperienceDate = "2023-12-31";
        const experienceDateInput = document.getElementById("dateExp");
        experienceDateInput.setAttribute("max", maxExperienceDate);
    }

    configureDatePickers();
});