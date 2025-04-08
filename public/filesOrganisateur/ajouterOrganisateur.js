
 

      // Variables pour stocker les chaînes
      let employmentString = "";
      let languagesString = "";
      let skillsString = "";
 
/* ****************************************************************************************
 *  il fonction ili mas2oula 3ala il ajout stocke les :  employment /languages / skills   *
 * *****************************************************************************************/
 document.addEventListener("DOMContentLoaded", function () {

     // Fonction générique pour gérer l'ajout dynamique
     function setupDynamicSection(buttonId, inputContainerId, containerId, addButtonId, cancelButtonId, stringToUpdate) {
         const button = document.getElementById(buttonId);
         const inputContainer = document.getElementById(inputContainerId);
         const container = document.getElementById(containerId);
         const addButton = document.getElementById(addButtonId);
         const cancelButton = document.getElementById(cancelButtonId);

         let isVisible = false;

         // Gérer l'affichage/masquage du champ de saisie
         button.addEventListener("click", function () {
             isVisible = !isVisible;
             inputContainer.style.display = isVisible ? "flex" : "none";
         });

         // Ajouter un élément
         addButton.addEventListener("click", function () {
             const input = document.getElementById(inputContainer.querySelector("input").id);
             const value = input.value.trim();
             if (value) {
                 const newItem = document.createElement("div");
                 newItem.classList.add("dynamic-item");

                 const text = document.createElement("span");
                 text.textContent = value;

                 const deleteButton = document.createElement("button");
                 deleteButton.textContent = "Delete";
                 deleteButton.onclick = function () {
                     // Supprimer l'élément et mettre à jour la chaîne correspondante
                     container.removeChild(newItem);
                     removeFromString(stringToUpdate, value);
                 };

                 newItem.appendChild(text);
                 newItem.appendChild(deleteButton);
                 container.appendChild(newItem);

                 // Ajouter la valeur à la chaîne correspondante
                 updateString(stringToUpdate, value);

                 // Réinitialiser le champ de saisie
                 input.value = "";
                 inputContainer.style.display = "none";
                 isVisible = false;
             }
         });

         // Annuler la saisie
         cancelButton.addEventListener("click", function () {
             inputContainer.style.display = "none";
             isVisible = false;
             inputContainer.querySelector("input").value = "";
         });
     }

     // Initialiser les sections dynamiques
     setupDynamicSection("addEmploymentButton", "employmentInputContainer", "employmentContainer", "addEmployment", "cancelEmployment", "employmentString");
     setupDynamicSection("addLanguageButton", "languageInputContainer", "languageContainer", "addLanguage", "cancelLanguage", "languagesString");
     setupDynamicSection("addSkillButton", "skillInputContainer", "skillContainer", "addSkill", "cancelSkill", "skillsString");

     // Fonction pour ajouter une valeur à une chaîne
     function updateString(stringName, value) {
         switch (stringName) {
             case "employmentString":
                 employmentString = employmentString ? `${employmentString},${value}` : value;
                 console.log(`Updated Employment String: ${employmentString}`);
                 break;
             case "languagesString":
                 languagesString = languagesString ? `${languagesString},${value}` : value;
                 console.log(`Updated Languages String: ${languagesString}`);
                 break;
             case "skillsString":
                 skillsString = skillsString ? `${skillsString},${value}` : value;
                 console.log(`Updated Skills String: ${skillsString}`);
                 break;
         }
     }


     // Fonction pour supprimer une valeur d'une chaîne
     function removeFromString(stringName, value) {
         switch (stringName) {
             case "employmentString":
                 employmentString = employmentString
                     .split(",")
                     .filter(item => item !== value)
                     .join(",");
                 console.log(`Updated Employment String after removal: ${employmentString}`);
                 break;
             case "languagesString":
                 languagesString = languagesString
                     .split(",")
                     .filter(item => item !== value)
                     .join(",");
                 console.log(`Updated Languages String after removal: ${languagesString}`);
                 break;
             case "skillsString":
                 skillsString = skillsString
                     .split(",")
                     .filter(item => item !== value)
                     .join(",");
                 console.log(`Updated Skills String after removal: ${skillsString}`);
                 break;
         }
     }
 });



 /* *************************************************
 *  fonction calculer years of experience  *
 * ****************************************************/

function calculateExperience() {
    // Récupérer la date sélectionnée
    const selectedDate = document.getElementById("dateExp").value;

    // Vérifier si une date est sélectionnée
    if (!selectedDate) {
        document.getElementById("nbExp").value = ""; // Effacer le champ si aucune date n'est sélectionnée
        return;
    }

    // Convertir la date sélectionnée en objet Date
    const startDate = new Date(selectedDate);

    // Obtenir la date actuelle
    const currentDate = new Date();

    // Calculer la différence en années entre les deux dates
    let yearsOfExperience = currentDate.getFullYear() - startDate.getFullYear();

    // Ajuster si la date d'anniversaire n'est pas encore passée cette année
    if (
        currentDate.getMonth() < startDate.getMonth() ||
        (currentDate.getMonth() === startDate.getMonth() && currentDate.getDate() < startDate.getDate())
    ) {
        yearsOfExperience--;
    }

    // Remplir le champ "Years of Experience"
    document.getElementById("nbExp").value = yearsOfExperience ;
}




 /* *************************************************
 *  fonction TIB3AF les donnees lil BASE de donnees *
 * ****************************************************/


  /* ************
 **   Ajout AddOrganizer ****
 * **************/


 document.addEventListener("DOMContentLoaded", function () {
    const uploadButton = document.getElementById("uploadPhotoButton");
    const fileInput = document.getElementById("imageUpload");
    const profileImage = document.querySelector(".profile-image");

    // Lier le clic du bouton "Photo" au champ de fichier
    uploadButton.addEventListener("click", function () {
        fileInput.click(); // Ouvrir la boîte de dialogue de sélection de fichier
    });

    // Gérer la sélection de fichier
    fileInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profileImage.src = e.target.result; // Afficher l'image sélectionnée
            };
            reader.readAsDataURL(file); // Convertir l'image en base64 pour l'affichage
        }
    });
});

// tib3af les donnees lil controlleur
document.getElementById("AddOrganizer").addEventListener("click", async function () {

   // Afficher la modale
   const modal = document.getElementById("confirmationModal");
   const backdrop = document.getElementById("modalBackdrop");
   modal.style.display = "block";
   backdrop.style.display = "block";

   // Attendre la réponse de l'utilisateur
   return new Promise((resolve) => {
       document.getElementById("confirmYes").onclick = async () => {
           modal.style.display = "none"; // Masquer la modale
           backdrop.style.display = "none";
           resolve(true);
       };

       document.getElementById("confirmCancel").onclick = () => {
           modal.style.display = "none"; // Masquer la modale
           backdrop.style.display = "none";
           resolve(false);
       };
   }).then(async (isConfirmed) => {
       if (!isConfirmed) {
           return; // Arrêter l'exécution si l'utilisateur clique sur "Cancel"
       }



     // Valider le formulaire
     if (!validateForm()) {
        return; // Arrêter la soumission si le formulaire n'est pas valide
    }


    const fileInput = document.getElementById("imageUpload");
    let imageBase64 = null;

    // Convertir l'image en base64 si une image est sélectionnée
    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        const reader = new FileReader();
        imageBase64 = await new Promise((resolve, reject) => {
            reader.onload = function (e) {
                resolve(e.target.result.split(",")[1]); // Extraire uniquement les données encodées en base64
            };
            reader.onerror = function (error) {
                reject(error);
            };
            reader.readAsDataURL(file);
        });
    }

    // Collecter les données du formulaire
    const formData = {
        imageOrg: imageBase64, // Stocker l'image en base64
        nom_org: document.getElementById("nomOrg").value.trim(),
        prenom_org: document.getElementById("prenomOrg").value.trim(),
        email_org: document.getElementById("emailOrg").value.trim(),
        num_tel: document.getElementById("numOrg").value.trim(),
        city: document.getElementById("city").value.trim(),
        date_naissance: document.getElementById("date_naissance").value,
        specialite: document.getElementById("specialiteCombo").value,
        date_embauche: document.getElementById("dateEmbauche").value,
        nbexp: document.getElementById("nbExp").value,
        salaire: parseFloat(document.getElementById("salaire").value),
        employment: employmentString, // Chaîne des emplois ajoutés dynamiquement
        skills: skillsString,         // Chaîne des compétences ajoutées dynamiquement
        longuage: languagesString     // Chaîne des langues ajoutées dynamiquement
    };

    // Validation des champs obligatoires
    if (!formData.nom_org || !formData.prenom_org || !formData.email_org || !formData.num_tel || !formData.specialite) {
        alert("Veuillez remplir tous les champs obligatoires.");
        return;
    }

    try {
        // Envoyer les données au serveur via Fetch API
        const response = await fetch("/organisateur/add", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        });

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
                   // window.location.href = organizersBackUrl;   // redirection lil affichage

                };
        } else {
                // Afficher la modale d'erreur
                const errorModal = document.getElementById("errorModal");
                const errorBackdrop = document.getElementById("errorModalBackdrop");
                errorModal.style.display = "block";
                errorBackdrop.style.display = "block";

                // Fermer la modale d'erreur lorsqu'on clique sur "OK"
                document.getElementById("closeErrorModal").onclick = () => {
                    errorModal.style.display = "none";
                    errorBackdrop.style.display = "none";
                };
        }
    } catch (error) {
        console.error("Erreur réseau :", error);
        alert("Une erreur est survenue. Veuillez réessayer.");
    }

  });
});


  /* **************************
 **   controle de saisie   ****
 * ***************************/


/*****  fonction pour valider la forme ista3maltha fi AddOrganize  *****/
function validateForm() {
    // Réinitialiser les messages d'erreur
    document.querySelectorAll(".error-message").forEach(span => {
        span.textContent = "";
        span.style.display = "none";
    });

    let isValid = true;

    // Validation du champ "Nom"
    const nomOrg = document.getElementById("nomOrg").value.trim();
    if (!nomOrg) {
        document.getElementById("nomOrgError").textContent += " Given Name is required.";
        document.getElementById("nomOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Prénom"
    const prenomOrg = document.getElementById("prenomOrg").value.trim();
    if (!prenomOrg) {
        document.getElementById("prenomOrgError").textContent = "Family Name is required.";
        document.getElementById("prenomOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Email"
    const emailOrg = document.getElementById("emailOrg").value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailOrg) {
        document.getElementById("emailOrgError").textContent = "Email is required.";
        document.getElementById("emailOrgError").style.display = "inline";
        isValid = false;
    } else if (!emailPattern.test(emailOrg)) {
        document.getElementById("emailOrgError").textContent = "Email is not valid.";
        document.getElementById("emailOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Téléphone"
    const numOrg = document.getElementById("numOrg").value.trim();
    const phonePattern = /^\d{8}$/; // Exemple : 8 chiffres
    if (!numOrg) {
        document.getElementById("numOrgError").textContent = "Phone number is required.";
        document.getElementById("numOrgError").style.display = "inline";
        isValid = false;
    } else if (!phonePattern.test(numOrg)) {
        document.getElementById("numOrgError").textContent = "The phone number must contain 8 digits.";
        document.getElementById("numOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Ville"
    const city = document.getElementById("city").value.trim();
    if (!city) {
        document.getElementById("CityError").textContent = "The city is required.";
        document.getElementById("CityError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Date de naissance"
    const dateNaissance = document.getElementById("date_naissance").value;
    if (!dateNaissance) {
        document.getElementById("dateBirthOrgError").textContent = "Date of birth is required.";
        document.getElementById("dateBirthOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Spécialité"
    const specialite = document.getElementById("specialiteCombo").value;
    if (!specialite) {
        document.getElementById("specialiteOrgError").textContent = "Specialty is required.";
        document.getElementById("specialiteOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Salaire"
    const salaire = document.getElementById("salaire").value.trim();
    if (!salaire) {
        document.getElementById("salaireOrgError").textContent = "Salary is required.";
        document.getElementById("salaireOrgError").style.display = "inline";
        isValid = false;
    } else if (isNaN(salaire) || parseFloat(salaire) <= 0) {
        document.getElementById("salaireOrgError").textContent = "The salary must be a positive number.";
        document.getElementById("salaireOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation du champ "Date d'embauche"
    const dateEmbauche = document.getElementById("dateEmbauche").value;
    if (!dateEmbauche) {
        document.getElementById("dateEmbaucheError").textContent = "Hire date is required.";
        document.getElementById("dateEmbaucheError").style.display = "inline";
        isValid = false;
    }


    // Validation du champ "years of experience"
    const yearsOfExperience = document.getElementById("dateExp").value;
    if (!yearsOfExperience) {
        document.getElementById("dateExpOrgError").textContent = "Years of Experience required select a date.";
        document.getElementById("dateExpOrgError").style.display = "inline";
        isValid = false;
    }

    // Validation de l'image
    const profileImage = document.querySelector(".profile-image");
    const defaultImageSrc = "{{ asset('filesOrganisateur/imageOrganisateur/1.jpg') }}";
    const fileInput = document.getElementById("imageUpload");

    if (profileImage.src === defaultImageSrc || !fileInput.files.length) {
    document.getElementById("imageOrgError").textContent = "You must upload an image.";
    document.getElementById("imageOrgError").style.display = "inline";
    isValid = false;
    }

    return isValid;
}

/****** titna7a il erreur ki tibda is7i7a ************/
document.addEventListener("DOMContentLoaded", function () {
    // Liste des champs à surveiller
    const fields = [
        { id: "nomOrg", errorId: "nomOrgError", validate: (value) => value.trim() !== "" },
        { id: "prenomOrg", errorId: "prenomOrgError", validate: (value) => value.trim() !== "" },
        { id: "emailOrg", errorId: "emailOrgError", validate: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) },
        { id: "numOrg", errorId: "numOrgError", validate: (value) => /^\d{8}$/.test(value) },
        { id: "city", errorId: "CityError", validate: (value) => value.trim() !== "" },
        { id: "date_naissance", errorId: "dateBirthOrgError", validate: (value) => value.trim() !== "" },
        { id: "specialiteCombo", errorId: "specialiteOrgError", validate: (value) => value.trim() !== "" },
        { id: "salaire", errorId: "salaireOrgError", validate: (value) => !isNaN(value) && parseFloat(value) > 0 },
        { id: "dateEmbauche", errorId: "dateEmbaucheError", validate: (value) => value.trim() !== "" },
        { id: "dateExp", errorId: "dateExpOrgError", validate: (value) => value.trim() !== "" }

    ];

    // Ajouter un écouteur pour chaque champ
    fields.forEach(field => {
        const inputElement = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);

        if (inputElement && errorElement) {
            inputElement.addEventListener("input", function () {
                const value = inputElement.value.trim();
                if (field.validate(value)) {
                    errorElement.textContent = ""; // Effacer le message d'erreur
                    errorElement.style.display = "none"; // Masquer le message d'erreur
                }
            });
        }
    });

    // Gestion spéciale pour l'image
    const profileImage = document.querySelector(".profile-image");
    const defaultImageSrc = "{{ asset('filesOrganisateur/imageOrganisateurAMS/1.jpg') }}";
    const fileInput = document.getElementById("imageUpload");
    const imageErrorElement = document.getElementById("imageOrgError");

    fileInput.addEventListener("change", function () {
        if (fileInput.files.length > 0) {
            imageErrorElement.textContent = ""; // Effacer le message d'erreur
            imageErrorElement.style.display = "none"; // Masquer le message d'erreur
        }
    });
});

/***********  desactivation des date pour date experience et date of birth   ***********/
document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour configurer les dates minimales et maximales
    function configureDatePickers() {
        const today = new Date();

    const birthDateInput = document.getElementById("date_naissance");
    const maxBirthDate = "2020-12-31";
    birthDateInput.setAttribute("max", maxBirthDate);
    console.log(`Date de naissance maximale configurée : ${maxBirthDate}`);

    const experienceDateInput = document.getElementById("dateExp");
     const MaxexperienceDateInput = "2023-12-31";
     experienceDateInput.setAttribute("max", MaxexperienceDateInput);
     console.log(`Date de naissance maximale configurée : ${MaxexperienceDateInput}`);
 
    }


    configureDatePickers();    //// Initialiser la configuration des datepickers
});

/*********** focntion clear ki tinzil 3ala bouton clear ***************/
document.addEventListener("DOMContentLoaded", function () {
    function clearForm() {
        document.querySelectorAll("input[type='text'], input[type='date'], input[type='email'], input[type='number']").forEach(input => {
            input.value = "";
        });

        document.querySelectorAll(".error-message").forEach(span => {
            span.textContent = "";
            span.style.display = "none";
        });

        const fileInput = document.getElementById("imageUpload");
        if (fileInput) {
            fileInput.value = ""; 
        }

       
        const profileImage = document.querySelector(".profile-image");
        if (profileImage) {
            profileImage.src = "{{ asset('filesOrganisateur/imageOrganisateurAMS/1.jpg') }}"; // Remplacer par l'image par défaut
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

        console.log("Formulaire réinitialisé avec succès.");
    }

    // Attacher la fonction au clic du bouton "Clear"
    const clearButton = document.getElementById("handleClear");
    if (clearButton) {
        clearButton.addEventListener("click", clearForm);
    }
});



