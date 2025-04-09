 
/* ***************************
 **   Afficher AddOrganizer ****
 * ******************************/
 document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const stateFilter = document.getElementById("stateFilter");
    const salarySort = document.getElementById("salarySort"); // Combo box pour le tri
    const cards = document.querySelectorAll(".card");

    let currentSortOrder = "none"; // Variable pour stocker l'ordre de tri actuel
    const originalOrder = Array.from(cards); // Conserver l'ordre initial des cartes

    // Fonction de recherche et filtrage
    function filterCards() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedState = stateFilter.value;

        cards.forEach(card => {
            const cardSearchText = card.dataset.search.toLowerCase();
            const cardState = card.dataset.state;

            const matchesSearch = cardSearchText.includes(searchTerm);
            const matchesState = selectedState === "all" || cardState === selectedState;

            if (matchesSearch && matchesState) {
                card.style.display = "block"; // Affiche la carte
            } else {
                card.style.display = "none"; // Masque la carte
            }
        });

        sortCards(); // Applique le tri après le filtrage
    }

    // Fonction de tri par salaire
    function sortCards() {
        const selectedSort = salarySort.value;

        if (selectedSort === "none") {
            // Rétablir l'ordre initial des cartes
            const container = document.getElementById("organizersGrid");
            originalOrder.forEach(card => container.appendChild(card));
            return; // Aucun tri sélectionné
        }

        currentSortOrder = selectedSort; // Stocke l'ordre de tri actuel

        const container = document.getElementById("organizersGrid");
        const sortedCards = Array.from(cards).filter(card => card.style.display !== "none");

        sortedCards.sort((a, b) => {
            const salaryA = parseFloat(a.querySelector("p:nth-child(5)").innerText.match(/\d+/)[0]);
            const salaryB = parseFloat(b.querySelector("p:nth-child(5)").innerText.match(/\d+/)[0]);

            return currentSortOrder === "asc" ? salaryA - salaryB : salaryB - salaryA;
        });

        // Réorganise les cartes dans le conteneur
        sortedCards.forEach(card => container.appendChild(card));
    }

    // Événements pour la recherche, le filtrage et le tri
    searchInput.addEventListener("input", filterCards);
    stateFilter.addEventListener("change", filterCards);
    salarySort.addEventListener("change", () => {
        filterCards(); // Appelle filterCards pour appliquer le tri
    });

    // Appel de la fonction d'exportation PDF
    document.getElementById("exportPdfButton").addEventListener("click", exportToPDF);

    // Fonction dédiée pour l'exportation PDF
    function exportToPDF() {
        // Utiliser la version UMD de jsPDF
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // Créer un tableau pour stocker les données
        const tableData = [];
        const headers = ["Nom & Prénom", "Email", "Spécialité", "Expérience", "Salaire", "État"];

        // Ajouter les en-têtes du tableau
        tableData.push(headers);

        // Extraire les données des cartes visibles
        cards.forEach(card => {
            if (card.style.display !== "none") {
                const nomPrenom = card.querySelector("p strong").innerText;
                const email = card.querySelector("p:nth-child(2)").innerText;
                const specialite = card.querySelector("p:nth-child(3)").innerText;
                const experience = card.querySelector("p:nth-child(4)").innerText;
                const salaire = card.querySelector("p:nth-child(5)").innerText;
                const etat = card.querySelector(".state").innerText;

                // Ajouter les données de chaque carte au tableau
                tableData.push([nomPrenom, email, specialite, experience, salaire, etat]);
            }
        });

        // Définir les dimensions du tableau
        const tableConfig = {
            startY: 20, // Position de départ du tableau
            head: [headers], // En-têtes du tableau
            body: tableData.slice(1), // Données du tableau (sans les en-têtes)
            theme: "grid", // Style du tableau
            styles: { fontSize: 10 }, // Taille de police
        };

        // Générer le tableau dans le PDF
        doc.autoTable(tableConfig);

        // Télécharger le fichier PDF
        doc.save("organisateurs.pdf");
    }
});
/****************/ 

document.addEventListener("DOMContentLoaded", function () {
    const statusElements = document.querySelectorAll(".state");

    statusElements.forEach(statusElement => {
        const statusText = statusElement.querySelector("span").textContent.trim();

        if (statusText === "Available") {
            statusElement.style.backgroundColor = "#27ae60";
            statusElement.style.color = "white";
        } else if (statusText === "Not available") {
           statusElement.style.backgroundColor = "#cd6155"; // Rouge foncé
            statusElement.style.color = "white";
        }
    });
});





/****************************************************************
 * **************************************************************
 * ******************* * supprimer organisateur nib3af il id ****
 ****************************************************************/
document.addEventListener("DOMContentLoaded", function () {
    // Récupérer les éléments des modales
    const confirmationModal = document.getElementById("confirmationModal");
    const modalBackdrop = document.getElementById("modalBackdrop");
    const successModal = document.getElementById("successModal");
    const successModalBackdrop = document.getElementById("successModalBackdrop");
    const errorModal = document.getElementById("errorModal");
    const errorModalBackdrop = document.getElementById("errorModalBackdrop");

    // Gestionnaire pour les boutons "Supprimer"
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du bouton

            // Afficher la modale de confirmation
            confirmationModal.style.display = "block";
            modalBackdrop.style.display = "block";

            // Récupérer l'ID de l'organisateur depuis l'attribut data-id
            const organizerId = this.closest(".card").dataset.id;

            // Gérer le clic sur "Yes" dans la modale de confirmation
            document.getElementById("confirmYes").onclick = async function () {
                try {
                    // Envoyer une requête DELETE au serveur
                    const response = await fetch(`/organisateur/delete/${organizerId}`, {
                        method: "DELETE",
                    });

                    // Masquer la modale de confirmation
                    confirmationModal.style.display = "none";
                    modalBackdrop.style.display = "none";

                    if (response.ok) {
                        // Afficher la modale de succès
                        successModal.style.display = "block";
                        successModalBackdrop.style.display = "block";

                        // Rafraîchir la page après avoir fermé la modale de succès
                        document.getElementById("closeSuccessModal").onclick = function () {
                            successModal.style.display = "none";
                            successModalBackdrop.style.display = "none";
                            location.reload();
                        };
                    } else {
                        // Afficher la modale d'erreur
                        errorModal.style.display = "block";
                        errorModalBackdrop.style.display = "block";

                        // Fermer la modale d'erreur
                        document.getElementById("closeErrorModal").onclick = function () {
                            errorModal.style.display = "none";
                            errorModalBackdrop.style.display = "none";
                        };
                    }
                } catch (error) {
                    console.error("Erreur réseau :", error);

                    // Afficher la modale d'erreur en cas de problème réseau
                    errorModal.style.display = "block";
                    errorModalBackdrop.style.display = "block";

                    // Fermer la modale d'erreur
                    document.getElementById("closeErrorModal").onclick = function () {
                        errorModal.style.display = "none";
                        errorModalBackdrop.style.display = "none";
                    };
                }
            };

            // Gérer le clic sur "Cancel" dans la modale de confirmation
            document.getElementById("confirmCancel").onclick = function () {
                confirmationModal.style.display = "none";
                modalBackdrop.style.display = "none";
            };
        });
    });
});







document.addEventListener("DOMContentLoaded", function () {
    // Sélectionner toutes les images avec la classe .RotationChargementPageImoRG
    const images = document.querySelectorAll(".RotationChargementPageImoRG");

    // Ajouter la classe animate-once pour déclencher l'animation
    images.forEach(image => {
        image.classList.add("animate-once");

        // Supprimer la classe animate-once après la fin de l'animation
        image.addEventListener("animationend", function () {
            image.classList.remove("animate-once");
        });
    });
});












/********************************************
*********************************************
*******js affichage detaille organisateur ***
*********************************************
********************************************/


document.addEventListener("DOMContentLoaded", function () {
    const floatingDetails = document.getElementById("floatingDetails");
    const closeFloatingDetails = document.getElementById("closeFloatingDetails");

    // Handle "Détails" button click
    document.querySelectorAll(".details-btn").forEach(button => {
        button.addEventListener("click", async function () {
            const card = this.closest(".card"); // Find the parent card
            const organizerId = card.dataset.id; // Get the organizer ID

            try {
                // Simulate a fetch request to get organizer details
                const response = await fetch(`/organisateur/${organizerId}`);
                if (!response.ok) {
                    throw new Error("Erreur lors de la récupération des détails.");
                }

                const data = await response.json();

                // Populate the floating details container with fetched data
                document.getElementById("floatingImage").src = data.image;
                document.getElementById("floatingNomPrenom").innerText = `${data.nom} ${data.prenom}`;
                document.getElementById("floatingEmail").innerText = data.email;
                document.getElementById("floatingNum").innerText = data.telephone;
                document.getElementById("floatingCity").innerText = data.city;
                document.getElementById("floatingDateNaissance").innerText = data.date_naissance;
                document.getElementById("floatingSpecialite").innerText = data.specialite;
                document.getElementById("floatingExperience").innerText = data.experience;
                document.getElementById("floatingSalaire").innerText = data.salaire;
                document.getElementById("floatingEtat").innerText = data.etat;
                document.getElementById("floatingEmployment").innerText = data.employment;
                document.getElementById("floatingLangues").innerText = data.langues;
                document.getElementById("floatingCompetences").innerText = data.competences;
                document.getElementById("floatingDateEmpbauche").innerText = data.date_embauche;

                // Hide the card with an animation
                card.classList.add("hide");

                // Show the floating details container with an animation
                setTimeout(() => {
                    floatingDetails.style.display = "block";
                    floatingDetails.classList.add("show");
                }, 500); // Wait for the card's animation to finish
            } catch (error) {
                console.error("Erreur :", error);
                alert("Une erreur est survenue lors de la récupération des détails.");
            }
        });
    });

    // Handle "Fermer" button click
    closeFloatingDetails.addEventListener("click", function () {
        // Hide the floating details container with an animation
        floatingDetails.classList.remove("show");

        // Re-show all hidden cards after the animation
        setTimeout(() => {
            floatingDetails.style.display = "none";

            document.querySelectorAll(".card.hide").forEach(card => {
                card.classList.remove("hide");
            });
        }, 500); // Wait for the floating details' animation to finish
    });
});

/// hedhdi 



document.addEventListener("DOMContentLoaded", function () {
    // Sélectionner toutes les images avec la classe .RotationDetailOrg
    const images = document.querySelectorAll(".RotationDetailOrg");

    // Ajouter la classe animate-once pour déclencher l'animation
    images.forEach(image => {
        image.classList.add("animate-once");

        // Supprimer la classe animate-once après la fin de l'animation
        image.addEventListener("animationend", function () {
            image.classList.remove("animate-once");
        });
    });
});


