document.addEventListener('DOMContentLoaded', function () {
    console.log('JavaScript loaded and running'); // Add this line for debugging

    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('shown.bs.collapse', function () {
            console.log('Accordion button clicked'); // Add this line for debugging
            const reclamationId = button.dataset.id;
            const updateUrl = button.dataset.updateUrl;
            const csrfToken = button.dataset.csrfToken;
            console.log({ reclamationId, updateUrl, csrfToken }); // Debugging data attributes

            if (!reclamationId || !updateUrl || !csrfToken) {
                console.error('Missing required data attributes');
                return;
            }

            fetch(updateUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    id: reclamationId,
                    status: 'In Progress',
                    _token: csrfToken
                })
            })
                .then(response => {
                    if (!response.ok) throw new Error('Network error');
                    return response.json();
                })
                .then(data => {
                    console.log('Response from server:', data); // Debugging server response
                    if (data.success) {
                        const badge = button.querySelector('.badge');
                        badge.textContent = data.newStatus;
                        badge.className = `badge ${data.badgeClass} me-2`;
                    } else {
                        console.error('Failed to update status:', data.message || 'Unknown error');
                    }
                })
                .catch(error => {
                    console.error('Update failed:', error);
                });
        });
    });
});