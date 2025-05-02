document.addEventListener("DOMContentLoaded", function () {
    console.log("ajouterOffre.js loaded - Version: 2025-04-14");

    // Soumission du formulaire
    document.getElementById("AddOffre").addEventListener("click", async function (event) {
        event.preventDefault();

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
                return;
            }

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

        console.log("FormData sent:", formData); // Debug payload

        try {
            const response = await fetch("/offre/add", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();
            console.log("Server response:", result); // Debug response

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
                        'type_evenement': 'type_evenement',
                        'lieuEvenement': 'lieu_event',
                        'dateDebutEvenement': 'date_debut_event',
                        'dateFinEvenement': 'date_fin_event',
                        'budget': 'budget',
                        'nombreInvite': 'nombre_invite'
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
                            } else {
                                console.warn(`Input element #${inputId} not found`);
                            }
                        } else {
                            console.warn(`No mapping for field: ${field}`);
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
                        errorMessage.textContent = result.message || "An error occurred while adding the offer.";
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
            errorModal.style.display = "block";
            errorBackdrop.style.display = "block";
            document.getElementById("closeErrorModal").onclick = () => {
                errorModal.style.display = "none";
                errorBackdrop.style.display = "none";
            };
        }
    });

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
        aiImage.src = "{{ asset('filesOrganisateur/imageOrganisateur/robot-loading.png') }}";

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
        document.querySelectorAll("input, textarea, select").forEach(input => {
            input.value = "";
        });

        const weatherInfoDiv = document.getElementById("weatherInfo");
        if (weatherInfoDiv) {
            weatherInfoDiv.innerHTML = "";
        }

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

        if (!startDateInput.value) {
            endDateInput.disabled = true;
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