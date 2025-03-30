function openGallery() {
    // Ouvre la boîte de dialogue de sélection de fichiers
    document.getElementById('fileInput').click();
}

function displaySelectedImage(event) {
    // Récupère le fichier sélectionné
    const file = event.target.files[0];

    if (file) {
        // Crée un objet URL pour afficher l'image
        const reader = new FileReader();
        reader.onload = function (e) {
            // Affiche l'image dans le cadre
            const imageFrame = document.querySelector('.image-frame');
            imageFrame.innerHTML = `<img src="${e.target.result}" alt="Selected Image" style="width: 100%; height: 100%; object-fit: cover;">`;
        };
        reader.readAsDataURL(file); // Lit le fichier comme une URL de données
    }
}

function switchToLoginOffcanvas() {
    // Fermer l'**offcanvas** "Forgot Password"
    const forgotPasswordOffcanvas = document.getElementById('forgotPasswordOffcanvas');
    const bootstrapForgotPasswordOffcanvas = bootstrap.Offcanvas.getInstance(forgotPasswordOffcanvas);
    bootstrapForgotPasswordOffcanvas.hide();

    // Ouvrir l'**offcanvas** de login
    const loginOffcanvas = document.getElementById('offcanvasExample');
    const bootstrapLoginOffcanvas = new bootstrap.Offcanvas(loginOffcanvas);
    bootstrapLoginOffcanvas.show();
}

function switchToForgotPasswordOffcanvas() {
    // Fermer l'**offcanvas** "Verify Code"
    const verifyCodeOffcanvas = document.getElementById('verifyCodeOffcanvas');
    const bootstrapVerifyCodeOffcanvas = bootstrap.Offcanvas.getInstance(verifyCodeOffcanvas);
    if (bootstrapVerifyCodeOffcanvas) {
        bootstrapVerifyCodeOffcanvas.hide();
    }

    // Ouvrir l'**offcanvas** "Forgot Password"
    const forgotPasswordOffcanvas = document.getElementById('forgotPasswordOffcanvas');
    const bootstrapForgotPasswordOffcanvas = new bootstrap.Offcanvas(forgotPasswordOffcanvas);
    bootstrapForgotPasswordOffcanvas.show();
}

function switchToVerifyCodeOffcanvas() {
    // Fermer l'**offcanvas** "Reset Password"
    const resetPasswordOffcanvas = document.getElementById('resetPasswordOffcanvas');
    const bootstrapResetPasswordOffcanvas = bootstrap.Offcanvas.getInstance(resetPasswordOffcanvas);
    if (bootstrapResetPasswordOffcanvas) {
        bootstrapResetPasswordOffcanvas.hide();
    }

    // Ouvrir l'**offcanvas** "Verify Code"
    const verifyCodeOffcanvas = document.getElementById('verifyCodeOffcanvas');
    const bootstrapVerifyCodeOffcanvas = new bootstrap.Offcanvas(verifyCodeOffcanvas);
    bootstrapVerifyCodeOffcanvas.show();
}

function closeAlert() {
    const alertContainer = document.querySelector('.alert-container');
    if (alertContainer) {
        alertContainer.style.display = 'none';
    }
}
/************** Contrôle de saisie **************/

// Validation pour le prénom
document.getElementById('firstName')?.addEventListener('input', function () {
    const firstNameError = document.getElementById('firstNameError');
    const value = this.value.trim();
    if (value === '') {
        firstNameError.textContent = 'First name is required';
    } else if (!/^[a-zA-Z ]+$/.test(value)) {
        firstNameError.textContent = 'First name must contain only letters';
    } else {
        firstNameError.textContent = '';
    }
});

// Validation pour le nom
document.getElementById('lastName')?.addEventListener('input', function () {
    const lastNameError = document.getElementById('lastNameError');
    const value = this.value.trim();
    if (value === '') {
        lastNameError.textContent = 'Last name is required';
    } else if (!/^[a-zA-Z ]+$/.test(value)) {
        lastNameError.textContent = 'Last name must contain only letters';
    } else {
        lastNameError.textContent = '';
    }
});

// Validation pour le CIN
document.getElementById('cin')?.addEventListener('input', function () {
    const cinError = document.getElementById('cinError');
    const value = this.value.trim();
    if (value === '') {
        cinError.textContent = 'CIN is required';
    } else if (!/^\d{8}$/.test(value)) {
        cinError.textContent = 'CIN must be exactly 8 digits';
    } else {
        cinError.textContent = '';
    }
});

// Validation pour le numéro de téléphone
document.getElementById('phoneNumber')?.addEventListener('input', function () {
    const phoneNumberError = document.getElementById('phoneNumberError');
    const value = this.value.trim();
    if (value === '') {
        phoneNumberError.textContent = 'Phone number is required';
    } else if (!/^\+?\d+$/.test(value)) {
        phoneNumberError.textContent = 'Phone number must be numeric and can only start with +';
    } else {
        phoneNumberError.textContent = '';
    }
});

// Validation pour l'email
document.getElementById('email')?.addEventListener('input', function () {
    const emailError = document.getElementById('emailError');
    const value = this.value.trim();
    if (value === '') {
        emailError.textContent = 'Email is required';
    } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(value)) {
        emailError.textContent = 'Invalid email format';
    } else {
        emailError.textContent = '';
    }
});

// Validation pour le mot de passe
document.getElementById('password')?.addEventListener('input', function () {
    const passwordError = document.getElementById('passwordError');
    const value = this.value.trim();
    if (value === '') {
        passwordError.textContent = 'Password is required';
    } else if (!/.*[a-zA-Z].*/.test(value) || !/.*\d.*/.test(value)) {
        passwordError.textContent = 'Password must contain letters and numbers';
    } else if (!/.*[!@#$%^&*].*/.test(value)) {
        passwordError.textContent = 'Password must contain special characters';
    } else if (value.length < 8) {
        passwordError.textContent = 'Password must be at least 8 characters';
    } else {
        passwordError.textContent = '';
    }
});

// Validation pour le genre
document.getElementById('gender')?.addEventListener('change', function () {
    const genreError = document.getElementById('genreError');
    if (this.value === '') {
        genreError.textContent = 'Gender is required';
    } else {
        genreError.textContent = '';
    }
});

// Validation pour le rôle
document.getElementById('role')?.addEventListener('change', function () {
    const roleError = document.getElementById('roleError');
    if (this.value === '') {
        roleError.textContent = 'Role is required';
    } else {
        roleError.textContent = '';
    }
});

// Validation pour la date de naissance
document.addEventListener('DOMContentLoaded', function () {
    const dateOfBirthInput = document.getElementById('dateOfBirth');

    if (dateOfBirthInput) {
        const maxDate = `2007-12-31`; // Dernier jour de l'année 2007

        // Définir la limite max
        dateOfBirthInput.setAttribute('max', maxDate);

        // Validation de la date de naissance
        dateOfBirthInput.addEventListener('input', function () {
            const birthDateError = document.getElementById('birthDateError');
            const selectedDate = new Date(this.value);
            const maxDateObj = new Date(maxDate);

            if (!this.value) {
                birthDateError.textContent = 'Date of birth is required.';
            } else if (selectedDate > maxDateObj) {
                birthDateError.textContent = `Date must be in 2007 or earlier.`;
            } else {
                birthDateError.textContent = ''; // Effacer les erreurs si la date est valide
            }
        });
    }
});



// Validation du formulaire de signup
document.addEventListener('DOMContentLoaded', function () {
    const signupForm = document.getElementById('signup-form');

    signupForm?.addEventListener('submit', function (event) {
        let isValid = true;

        // Vérifier les erreurs dans les champs
        const firstNameError = document.getElementById('firstNameError')?.textContent;
        const lastNameError = document.getElementById('lastNameError')?.textContent;
        const cinError = document.getElementById('cinError')?.textContent;
        const phoneNumberError = document.getElementById('phoneNumberError')?.textContent;
        const emailError = document.getElementById('emailError')?.textContent;
        const passwordError = document.getElementById('passwordError')?.textContent;
        const genreError = document.getElementById('genreError')?.textContent;
        const roleError = document.getElementById('roleError')?.textContent;
        const birthDateError = document.getElementById('birthDateError')?.textContent;

        // Vérifier si tous les champs sont vides
        const firstName = document.getElementById('firstName')?.value.trim();
        const lastName = document.getElementById('lastName')?.value.trim();
        const cin = document.getElementById('cin')?.value.trim();
        const phoneNumber = document.getElementById('phoneNumber')?.value.trim();
        const email = document.getElementById('email')?.value.trim();
        const password = document.getElementById('password')?.value.trim();
        const gender = document.getElementById('gender')?.value.trim();
        const role = document.getElementById('role')?.value.trim();
        const birthDate = document.getElementById('dateOfBirth')?.value.trim();

        if (!firstName && !lastName && !cin && !phoneNumber && !email && !password && !gender && !role && !birthDate) {
            isValid = false;
            alert('Please fill out the form before submitting.');
            event.preventDefault();
            return;
        }

        // Vérifier si tous les champs sont valides
        if (firstNameError || lastNameError || cinError || phoneNumberError || emailError || passwordError || genreError || roleError || birthDateError) {
            isValid = false;
        }

        // Empêcher la soumission si des erreurs sont présentes
        if (!isValid) {
            event.preventDefault();
            alert('Please fix the errors in the form before submitting.');
        }
    });
});

//validate account deletion
function validateAccountDeletion() {
    const checkbox = document.getElementById('accountActivation');
    if (!checkbox.checked) {
        alert('You must confirm your account deactivation before proceeding.');
        return false; // Empêche la soumission du formulaire
    }
    return true; // Permet la soumission si la case est cochée
}

// calculate age

    function calculateAge() {
        const birthDateInput = document.getElementById('dateOfBirth').value;
        const ageMessage = document.getElementById('ageMessage');

        if (birthDateInput) {
            const birthDate = new Date(birthDateInput);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDifference = today.getMonth() - birthDate.getMonth();

            // Ajuster l'âge si l'anniversaire n'est pas encore passé cette année
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if (age >= 0) {
                ageMessage.textContent = `You are ${age} years old.`;
            } else {
                ageMessage.textContent = "Please enter a valid date of birth.";
            }
        } else {
            ageMessage.textContent = ""; 
        }
    }
