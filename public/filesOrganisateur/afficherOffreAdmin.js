document.addEventListener('DOMContentLoaded', function() {
    // Initialisation
    const offerCards = Array.from(document.querySelectorAll('.offer-card'));
    const filterButtons = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('offerSearch');
    const dateSort = document.getElementById('dateSort');
    let currentFilter = 'all';
    let currentSearch = '';
    let currentSort = '';

    // Stocke l'ordre initial des cartes
    const originalOrder = [...offerCards];

    function getOfferDate(card) {
        const backDateElement = card.querySelector('.card-back .detail-item:nth-child(2) .detail-value');
        if (backDateElement) {
            const dateText = backDateElement.textContent.trim();
            const [datePart] = dateText.split(' ');
            const [day, month, year] = datePart.split('/');
            return new Date(`${year}-${month}-${day}`);
        }
        
        const frontDateElement = card.querySelector('.card-front p:first-child');
        if (frontDateElement) {
            const dateText = frontDateElement.textContent.replace(/[^\d\/]/g, '').trim();
            const [day, month, year] = dateText.split('/');
            return new Date(`${year}-${month}-${day}`);
        }
        
        return new Date(0);
    }

    function applyFiltersAndSort() {
        // Applique d'abord les filtres
        offerCards.forEach(card => {
            const matchesFilter = currentFilter === 'all' || card.dataset.status === currentFilter;
            const matchesSearch = currentSearch === '' || card.textContent.toLowerCase().includes(currentSearch);
            card.style.display = matchesFilter && matchesSearch ? 'block' : 'none';
        });

        // Applique le tri si nécessaire
        if (currentSort && currentSort !== '') {
            const grid = document.getElementById('offersGrid');
            if (grid) {
                const visibleCards = offerCards
                    .filter(card => card.style.display !== 'none')
                    .map(card => ({ element: card, date: getOfferDate(card) }))
                    .sort((a, b) => currentSort === 'asc' ? a.date - b.date : b.date - a.date);
                
                visibleCards.forEach(({element}) => grid.appendChild(element));
            }
        }
    }

    // Gestion du tri par date avec réinitialisation
    dateSort.addEventListener('change', function() {
        currentSort = this.value;
        
        if (currentSort === '') {
            // Réinitialise à l'ordre original
            const grid = document.getElementById('offersGrid');
            if (grid) {
                originalOrder.forEach(card => {
                    if (card.style.display !== 'none') {
                        grid.appendChild(card);
                    }
                });
            }
        } else {
            applyFiltersAndSort();
        }
    });

    // Gestion des boutons de filtre
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.dataset.filter;
            applyFiltersAndSort();
        });
    });

    // Gestion de la recherche
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            currentSearch = this.value.toLowerCase();
            applyFiltersAndSort();
        }, 200);
    });

    // Gestion du flip
    document.querySelectorAll('.flip-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            this.closest('.offer-card')?.classList.toggle('flipped');
        });
    });

    // Animation initiale
    offerCards.forEach((card, index) => {
        card.style.setProperty('--order', index);
    });
    
    setTimeout(() => {
        const grid = document.getElementById('offersGrid');
        if (grid) {
            grid.style.opacity = '1';
            grid.style.transform = 'translateY(0)';
        }
    }, 100);
});



/*******************************************************************************
 * ********* Delete Offre fil client : yitbadal etat offre cancled  ************
 * ******************************************************************************/
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

            // Récupérer l'ID de l'offre depuis l'attribut data-offer-id
            const offerId = this.dataset.offerId;

            // Récupérer la carte parente de l'offre
            const card = this.closest(".offer-card");

            // Gérer le clic sur "Yes" dans la modale de confirmation
            document.getElementById("confirmYes").onclick = async function () {
                try {
                    // Envoyer une requête POST au serveur pour mettre à jour l'état à "canceled"
                    const response = await fetch(`/offre/delete/${offerId}`, {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json'
                        }
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
                    } 
                    else
                    {
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






/********************************************
*********************************************
*******js affichage detaille organisateur ***
*********************************************
********************************************/

document.addEventListener("DOMContentLoaded", function () {
    const floatingDetails = document.getElementById("floatingDetails");
    const closeFloatingDetails = document.getElementById("closeFloatingDetails");

    // Animation pour l'image au hover
    floatingImage.addEventListener('mouseenter', function() {
        this.style.transform = 'perspective(600px) rotateY(30deg) scale(1.05)';
        this.style.transition = 'transform 0.5s ease, box-shadow 0.5s ease';
        this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
    });
    
    floatingImage.addEventListener('mouseleave', function() {
        this.style.transform = 'perspective(600px) rotateY(0deg) scale(1)';
        this.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
    });

    // Handle "See Answer" button click
    document.querySelectorAll(".modify-btn").forEach(button => {
        button.addEventListener("click", async function(e) {
            e.preventDefault();
            const card = this.closest(".card");
            const organizerId = this.dataset.id;

            // Animation de disparition de la carte
            card.style.transition = "all 0.5s ease";
            card.style.transform = "scale(0.9)";
            card.style.opacity = "0";
            
            try {
             
                const response = await fetch(`/AffichetgeOrgOffreTraite/${organizerId}`);
                if (!response.ok) {
                    throw new Error("Erreur lors de la récupération des détails.");
                }

                const data = await response.json();

                // Remplir les détails
                document.getElementById("floatingImage").src = data.image;
                document.getElementById("floatingNomPrenom").textContent = `${data.nom} ${data.prenom}`;
                document.getElementById("floatingEmail").textContent = data.email;
                document.getElementById("floatingNum").textContent = data.telephone;
                document.getElementById("floatingCity").textContent = data.city;
                document.getElementById("floatingDateNaissance").textContent = data.date_naissance;
                document.getElementById("floatingSpecialite").textContent = data.specialite;
                document.getElementById("floatingExperience").textContent = data.experience;
                document.getElementById("floatingSalaire").textContent = data.salaire;
                document.getElementById("floatingEtat").textContent = data.etat;
                document.getElementById("floatingEmployment").textContent = data.employment;
                document.getElementById("floatingLangues").textContent = data.langues;
                document.getElementById("floatingCompetences").textContent = data.competences;
                document.getElementById("floatingDateEmpbauche").textContent = data.date_embauche;

                // Afficher les détails avec animation
                setTimeout(() => {
                    floatingDetails.style.display = "block";
                    setTimeout(() => {
                        floatingDetails.style.opacity = "1";
                        floatingDetails.style.transform = "translate(-50%, -50%) scale(1)";
                    }, 10);
                }, 500); // Correspond à la durée de l'animation de la carte
                
            } catch (error) {
                console.error("Erreur :", error);
                // Réafficher la carte en cas d'erreur
                card.style.transform = "scale(1)";
                card.style.opacity = "1";
            }
        });
    });

    // Handle "Fermer" button click
    closeFloatingDetails.addEventListener("click", function() {
        // Animation de fermeture
        floatingDetails.style.opacity = "0";
        floatingDetails.style.transform = "translate(-50%, -50%) scale(0.9)";
        
        setTimeout(() => {
            floatingDetails.style.display = "none";
            
            // Réafficher toutes les cartes cachées
            document.querySelectorAll(".card").forEach(card => {
                card.style.transform = "scale(1)";
                card.style.opacity = "1";
            });
        }, 500);
    });
});





/*****************************************************************
 ************* drop dow menue ili fo offre admin pending  *********
 *****************************************************************/

function toggleActions(button) {
    const dropdown = button.nextElementSibling;
    const arrow = button.querySelector('.toggle-arrow');
    
    // Fermer d'abord les autres dropdowns ouverts
    document.querySelectorAll('.action-dropdown').forEach(d => {
        if (d !== dropdown) {
            d.classList.remove('show-dropdown');
            const a = d.previousElementSibling.querySelector('.toggle-arrow');
            if (a) a.style.transform = 'rotate(0)';
        }
    });
    
    dropdown.classList.toggle('show-dropdown');
    arrow.style.transform = dropdown.classList.contains('show-dropdown') 
      ? 'rotate(180deg)' 
      : 'rotate(0)';
}

document.addEventListener('click', function(e) {
    if (!e.target.closest('.offer-actions')) {
        document.querySelectorAll('.action-dropdown').forEach(dropdown => {
            dropdown.classList.remove('show-dropdown');
        });
        document.querySelectorAll('.toggle-arrow').forEach(arrow => {
            arrow.style.transform = 'rotate(0)';
        });
    }
});



/***************************
 ************* PDF *********
 ***************************/


// Export to PDF functionality
document.getElementById('exportPdfButton').addEventListener('click', function() {
    // Initialize jsPDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    
    // Add title
    doc.setFontSize(18);
    doc.setTextColor(132, 64, 98); // Couleur #844062
    doc.text('Liste des Offres', 105, 20, { align: 'center' });
    
    // Get current date
    const today = new Date();
    const dateString = today.toLocaleDateString();
    doc.setFontSize(10);
    doc.setTextColor(100);
    doc.text(`Exported on: ${dateString}`, 105, 30, { align: 'center' });
    
    // Prepare data for the table
    const offerCards = document.querySelectorAll('.offer-card');
    const tableData = [];
    
    // Add header row
    tableData.push([
        'Objet', 
        'Date Demande', 
        'Lieu', 
        'Invités', 
        'Budget', 
        'Statut'
    ]);
    
    // Add data rows
    offerCards.forEach(card => {
        const front = card.querySelector('.card-front');
        const status = card.getAttribute('data-status');
        
        let statusText = '';
        let statusColor = '';
        
        switch(status) {
            case 'pending':
                statusText = 'Pending';
                statusColor = '#ffc107'; // yellow
                break;
            case 'treated':
                statusText = 'Handled';
                statusColor = '#28a745'; // green
                break;
            case 'canceled':
                statusText = 'Declined';
                statusColor = '#dc3545'; // red
                break;
        }
        
        const objet = front.querySelector('h3').textContent.trim();
        const date = front.querySelectorAll('p')[0].textContent.trim();
        const lieu = front.querySelectorAll('p')[1].textContent.trim();
        const invites = front.querySelectorAll('p')[2].textContent.trim();
        const budget = front.querySelectorAll('p')[3].textContent.trim();
        
        tableData.push([
            objet,
            date,
            lieu,
            invites,
            budget,
            { content: statusText, styles: { textColor: statusColor } }
        ]);
    });
    
    // Add table to PDF
    doc.autoTable({
        head: [tableData[0]],
        body: tableData.slice(1),
        startY: 40,
        theme: 'grid',
        headStyles: {
            fillColor: [132, 64, 98], // #844062
            textColor: 255,
            fontStyle: 'bold'
        },
        alternateRowStyles: {
            fillColor: [248, 248, 248]
        },
        styles: {
            cellPadding: 3,
            fontSize: 10,
            valign: 'middle'
        },
        columnStyles: {
            0: { cellWidth: 40 },
            1: { cellWidth: 25 },
            2: { cellWidth: 35 },
            3: { cellWidth: 20 },
            4: { cellWidth: 20 },
            5: { cellWidth: 20 }
        }
    });
    
    // Save the PDF
    doc.save(`Eventify_Offers_${dateString}.pdf`);
});