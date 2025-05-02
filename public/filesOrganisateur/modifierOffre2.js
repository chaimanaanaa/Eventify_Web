document.addEventListener("DOMContentLoaded", function () {
    console.log("modifierOffre.js loaded - Version: 2025-04-14");

    // Soumission du formulaire
    document.getElementById("ModifyOffre").addEventListener("click", async function (event) {
        event.preventDefault();

        // Validation côté client
        if (!validateForm()) {
            return;
        }

        const modal = document.getElementById("confirmationModal");
        const backdrop = document.getElementById("modalBackdrop");
        if (!modal || !backdrop) {
            console.error("Confirmation modal elements not found");
            return;
        }

        modal.style.display = "block";
        backdrop.style.display = "block";

        const isConfirmed = await new Promise((resolve) => {
            const confirmYes = document.getElementById("confirmYes");
            const confirmCancel = document.getElementById("confirmCancel");
            if (!confirmYes || !confirmCancel) {
                console.error("Confirm buttons not found");
                resolve(false);
            } else {
                confirmYes.onclick = () => {
                    modal.style.display = "none";
                    backdrop.style.display = "none";
                    resolve(true);
                };
                confirmCancel.onclick = () => {
                    modal.style.display = "none";
                    backdrop.style.display = "none";
                    resolve(false);
                };
            }
        });

        if (!isConfirmed) {
            return;
        }

        document.querySelectorAll(".error-message").forEach(div => div.remove());

        const formData = {
            objet: document.getElementById("objet")?.value.trim() || "",
            description: document.getElementById("description")?.value.trim() || "",
            type_evennement: document.getElementById("type_evenement")?.value.trim() || "",
            lieuEvenement: document.getElementById("lieu_event")?.value.trim() || "",
            dateDebutEvenement: document.getElementById("date_debut_event")?.value || "",
            dateFinEvenement: document.getElementById("date_fin_event")?.value || "",
            budget: parseFloat(document.getElementById("budget")?.value) || null,
            nombreInvite: parseInt(document.getElementById("nombre_invite")?.value) || null,
        };

        console.log("FormData sent:", formData);

        const offreId = document.querySelector("#OffreData")?.dataset.idOffre;
        if (!offreId) {
            console.error("Offer ID not found");
            return;
        }

        try {
            const response = await fetch(`/offre/edit/${offreId}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();
            console.log("Server response:", result);

            if (response.ok) {
                const successModal = document.getElementById("successModal");
                const successBackdrop = document.getElementById("successModalBackdrop");
                if (!successModal || !successBackdrop) {
                    console.error("Success modal elements not found");
                    return;
                }
                successModal.style.display = "block";
                successBackdrop.style.display = "block";

                document.getElementById("closeSuccessModal").onclick = () => {
                    successModal.style.display = "none";
                    successBackdrop.style.display = "none";
                    document.getElementById("handleClear").click();
                    window.location.href = afficherOffreUrl;
                };
            } else {
                if (result.errors) {
                    const fieldToIdMap = {
                        'objet': 'objet',
                        'description': 'description',
                        'type_evennement': 'type_evenement',
                        'lieuEvenement': 'lieu_event',
                        'dateDebutEvenement': 'date_debut_event',
                        'dateFinEvenement': 'date_fin_event',
                        'budget': 'budget',
                        'nombreInvite': 'nombre_invite'
                    };

                    let unmappedErrors = [];

                    for (const [field, message] of Object.entries(result.errors)) {
                        const inputId = fieldToIdMap[field];
                        if (inputId) {
                            const inputElement = document.getElementById(inputId);
                            if (inputElement) {
                                const errorDiv = document.createElement("div");
                                errorDiv.className = "error-message";
                                errorDiv.textContent = message;
                                inputElement.insertAdjacentElement("afterend", errorDiv);
                            } else {
                                console.warn(`Input element #${inputId} not found`);
                                unmappedErrors.push(message);
                            }
                        } else {
                            console.warn(`No mapping for field: ${field}`);
                            unmappedErrors.push(message);
                        }
                    }

                    if (unmappedErrors.length > 0) {
                        const errorModal = document.getElementById("errorModal");
                        const errorBackdrop = document.getElementById("errorModalBackdrop");
                        if (errorModal && errorBackdrop) {
                            const errorMessage = document.querySelector("#errorModal p");
                            if (errorMessage) {
                                errorMessage.textContent = unmappedErrors.join("; ");
                            }
                            errorModal.style.display = "block";
                            errorBackdrop.style.display = "block";

                            document.getElementById("closeErrorModal").onclick = () => {
                                errorModal.style.display = "none";
                                errorBackdrop.style.display = "none";
                            };
                        }
                    }
                } else {
                    console.error("No validation errors provided:", result);
                    const errorModal = document.getElementById("errorModal");
                    const errorBackdrop = document.getElementById("errorModalBackdrop");
                    if (!errorModal || !errorBackdrop) {
                        console.error("Error modal elements not found");
                        return;
                    }
                    const errorMessage = document.querySelector("#errorModal p");
                    if (errorMessage) {
                        errorMessage.textContent = result.message || "An error occurred while modifying the offer.";
                    }
                    errorModal.style.display = "block";
                    errorBackdrop.style.display = "block";

                    document.getElementById("closeErrorModal").onclick = () => {
                        errorModal.style.display = "none";
                        errorBackdrop.style.display = "none";
                    };
                }
            }
        } catch (error) {
            console.error("Network error:", error);
            const errorModal = document.getElementById("errorModal");
            const errorBackdrop = document.getElementById("errorModalBackdrop");
            if (!errorModal || !errorBackdrop) {
                console.error("Error modal elements not found");
                return;
            }
            const errorMessage = document.querySelector("#errorModal p");
            if (errorMessage) {
                errorMessage.textContent = "Network error: Unable to modify the offer. Please check your connection.";
            }
            errorModal.style.display = "block";
            errorBackdrop.style.display = "block";
            document.getElementById("closeErrorModal").onclick = () => {
                errorModal.style.display = "none";
                errorBackdrop.style.display = "none";
            };
        }
    });

    // Validation côté client
    function validateForm() {
        let isValid = true;
        document.querySelectorAll(".error-message").forEach(div => div.remove());

        const fields = [
            { id: "objet", validate: value => value.trim() !== "", message: "Request Subject is required." },
            { id: "description", validate: value => value.trim() !== "", message: "Description is required." },
            { id: "type_evenement", validate: value => value.trim() !== "", message: "Event Type is required." },
            { id: "lieu_event", validate: value => value.trim() !== "", message: "Location is required." },
            { id: "date_debut_event", validate: value => value.trim() !== "", message: "Start Date is required." },
            { id: "date_fin_event", validate: value => value.trim() !== "", message: "End Date is required." },
            { id: "budget", validate: value => !isNaN(value) && value !== "" && parseFloat(value) > 0, message: "Budget must be a positive number." },
            { id: "nombre_invite", validate: value => !isNaN(value) && value !== "" && parseInt(value) > 0, message: "Number of Guests must be a positive integer." }
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const value = input.value.trim();

            if (!field.validate(value)) {
                const errorDiv = document.createElement("div");
                errorDiv.className = "error-message";
                errorDiv.textContent = field.message;
                input.insertAdjacentElement("afterend", errorDiv);
                isValid = false;
            }
        });

        return isValid;
    }

    // Supprimer les messages d'erreur lors de la saisie
    document.querySelectorAll("input, textarea, select").forEach(element => {
        element.addEventListener("input", function () {
            const errorDiv = this.nextElementSibling;
            if (errorDiv && errorDiv.classList.contains("error-message")) {
                errorDiv.remove();
            }
        });
    });

    // AI Description
    document.getElementById("aiGenerateButton").addEventListener("click", async function () {
        const subject = document.getElementById("objet")?.value.trim() || "";
        const descriptionField = document.getElementById("description");
        const aiImage = document.getElementById("aiRobotImage");

        if (!descriptionField || !aiImage) {
            console.error("AI elements not found");
            return;
        }

        const existingError = descriptionField.nextElementSibling;
        if (existingError && existingError.classList.contains("error-message")) {
            existingError.remove();
        }

        if (!subject) {
            const errorDiv = document.createElement("div");
            errorDiv.className = "error-message";
            errorDiv.textContent = "Please enter a subject first";
            descriptionField.insertAdjacentElement("afterend", errorDiv);
            return;
        }

        aiImage.style.animation = "bounce 0.5s infinite alternate";
        const originalSrc = aiImage.src;
        aiImage.src = window.robotLoadingImage || "/filesOrganisateur/imageOrganisateur/robot-loading.png";

        try {
            const response = await fetch("/offre/generate-ai", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ subject: subject })
            });

            const data = await response.json();

            if (response.ok) {
                descriptionField.value = data.description;
            } else {
                const errorDiv = document.createElement("div");
                errorDiv.className = "error-message";
                errorDiv.textContent = data.error || "Failed to generate description";
                descriptionField.insertAdjacentElement("afterend", errorDiv);
            }
        } catch (error) {
            console.error("Error:", error);
            const errorDiv = document.createElement("div");
            errorDiv.className = "error-message";
            errorDiv.textContent = "Network error - please check your connection";
            descriptionField.insertAdjacentElement("afterend", errorDiv);
        } finally {
            aiImage.style.animation = "none";
            aiImage.src = originalSrc;
            aiImage.style.transform = "translateY(-10px)";
            setTimeout(() => {
                aiImage.style.transform = "translateY(0)";
            }, 300);
        }
    });

    // Animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-10px); }
        }
    `;
    document.head.appendChild(style);

    // Clear
    document.getElementById("handleClear").addEventListener("click", function () {
        // Clear all input, textarea values
        document.querySelectorAll("input, textarea").forEach(input => {
            input.value = "";
        });

        // Reset select to default option
        const select = document.getElementById("type_evenement");
        if (select) {
            select.value = "";
        }

        // Reset disabled state of end date
        const endDateInput = document.getElementById("date_fin_event");
        if (endDateInput) {
            endDateInput.disabled = true;
        }

        // Clear weather info
        const weatherInfoDiv = document.getElementById("weatherInfo");
        if (weatherInfoDiv) {
            weatherInfoDiv.innerHTML = "";
        }

        // Remove error messages
        document.querySelectorAll(".error-message").forEach(div => div.remove());
    });

    // Désactivation des dates
    const startDateInput = document.getElementById('date_debut_event');
    const endDateInput = document.getElementById('date_fin_event');

    if (startDateInput && endDateInput) {
        const today = new Date();
        const todayFormatted = today.toISOString().split('T')[0];
        startDateInput.setAttribute('min', todayFormatted);

        startDateInput.addEventListener('change', function () {
            if (this.value) {
                endDateInput.setAttribute('min', this.value);
                endDateInput.disabled = false;
                if (endDateInput.value && endDateInput.value < this.value) {
                    endDateInput.value = '';
                }
            } else {
                endDateInput.disabled = true;
            }
        });

        // Initial state based on pre-filled values
        if (!startDateInput.value) {
            endDateInput.disabled = true;
        } else {
            endDateInput.disabled = false;
            endDateInput.setAttribute('min', startDateInput.value);
        }
    }

    // Météo
    document.querySelector(".custom-button-primary").addEventListener("click", async function () {
        const startDate = document.getElementById("date_debut_event")?.value || "";
        const endDate = document.getElementById("date_fin_event")?.value || "";
        const weatherInfoDiv = document.getElementById("weatherInfo");

        if (!weatherInfoDiv) {
            console.error("weatherInfo not found");
            return;
        }

        const existingStartError = document.getElementById("date_debut_event")?.nextElementSibling;
        if (existingStartError && existingStartError.classList.contains("error-message")) {
            existingStartError.remove();
        }
        const existingEndError = document.getElementById("date_fin_event")?.nextElementSibling;
        if (existingEndError && existingEndError.classList.contains("error-message")) {
            existingEndError.remove();
        }

        let valid = true;
        if (!startDate) {
            const errorDiv = document.createElement("div");
            errorDiv.className = "error-message";
            errorDiv.textContent = "Start date is required";
            document.getElementById("date_debut_event").insertAdjacentElement("afterend", errorDiv);
            valid = false;
        }
        if (!endDate) {
            const errorDiv = document.createElement("div");
            errorDiv.className = "error-message";
            errorDiv.textContent = "End date is required";
            document.getElementById("date_fin_event").insertAdjacentElement("afterend", errorDiv);
            valid = false;
        }

        if (!valid) return;

        this.disabled = true;
        const originalText = this.textContent;
        this.textContent = "Loading...";
        weatherInfoDiv.innerHTML = '<div style="text-align: center; padding: 20px;"><i class="fas fa-spinner fa-spin"></i> Loading weather data...</div>';

        try {
            const response = await fetch("/offre/weather", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ 
                    startDate: startDate,
                    endDate: endDate 
                })
            });

            const data = await response.json();
            weatherInfoDiv.innerHTML = "";

            if (response.ok && data.weatherData && data.weatherData.length > 0) {
                const title = document.createElement("h3");
                title.textContent = "Weather Forecast";
                title.style.marginBottom = "15px";
                title.style.color = "#844062";
                weatherInfoDiv.appendChild(title);

                data.weatherData.forEach(weather => {
                    const dayDiv = document.createElement("div");
                    dayDiv.style.display = "flex";
                    dayDiv.style.justifyContent = "space-between";
                    dayDiv.style.alignItems = "center";
                    dayDiv.style.padding = "8px 0";
                    dayDiv.style.borderBottom = "1px solid #eee";

                    const dayText = document.createElement("span");
                    dayText.textContent = weather.split(":")[0] + ":";
                    dayText.style.fontWeight = "bold";

                    const weatherText = document.createElement("span");
                    weatherText.textContent = weather.split(":")[1];

                    dayDiv.appendChild(dayText);
                    dayDiv.appendChild(weatherText);
                    weatherInfoDiv.appendChild(dayDiv);
                });
            } else {
                const errorDiv = document.createElement("div");
                errorDiv.innerHTML = '<p style="font-size: 14px; color: #666; text-align: center;">🤷 Weather data not available</p>';
                weatherInfoDiv.appendChild(errorDiv);
            }
        } catch (error) {
            console.error("Error:", error);
            weatherInfoDiv.innerHTML = '<p style="font-size: 14px; color: #666; text-align: center;">⚠️ Error loading weather data</p>';
        } finally {
            this.textContent = originalText;
            this.disabled = false;
        }
    });
});