document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll('.card-container:not(.add-card-container)');

    // 1. Click to Flip (independent of hover/tilt)
    cards.forEach(card => {
        card.addEventListener('click', function () {
            this.classList.toggle('flipped');
        });
    });

    // 2. Hover to Tilt (independent of flip state)
    cards.forEach(card => {
        const inner = card.querySelector('.card-inner');
        let cardRect;

        const handleMove = (e) => {
            if (card.classList.contains('flipped')) return; // Disable tilt if flipped

            // Update cardRect dynamically
            cardRect = card.getBoundingClientRect();

            // Get mouse position relative to card
            const x = e.clientX - cardRect.left;
            const y = e.clientY - cardRect.top;

            // Calculate percentage position (0-1 from center)
            const xPos = (x / cardRect.width) - 0.5;
            const yPos = (y / cardRect.height) - 0.5;

            // Calculate tilt rotation (15° max)
            const tiltX = yPos * 15;
            const tiltY = -xPos * 15;

            // Apply tilt transform
            inner.style.transform = `
                perspective(1200px)
                rotateX(${tiltX}deg)
                rotateY(${tiltY}deg)
            `;
        };

        const resetTilt = () => {
            inner.style.transform = card.classList.contains('flipped')
                ? 'perspective(1200px) rotateY(180deg)'
                : 'perspective(1200px)';
        };

        // Mouse events
        card.addEventListener('mousemove', handleMove);
        card.addEventListener('mouseleave', resetTilt);
    });

    // 3. File Upload Preview
    function previewImage(input) {
        const preview = document.getElementById('imagePreview');
        const file = input.files[0];

        if (!file || !file.type.startsWith('image/')) {
            preview.style.display = 'none'; // Hide preview if not an image
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(file);
    }

    const fileInput = document.querySelector('.file-upload');
    if (fileInput) {
        fileInput.addEventListener('change', function () {
            previewImage(this);
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
        // Handle delete with animation
        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (confirm('Are you sure you want to delete this reclamation?')) {
                    const card = this.closest('.card-container');
                    const id = this.getAttribute('data-id');
                    
                    // Add deleting class for animation
                    card.classList.add('deleting');
                    
                    // AJAX request
                    fetch(this.href, {
                        method: 'DELETE',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            // Animation before removal
                            card.style.transition = 'all 0.5s ease';
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.8) translateX(100px)';
                            
                            // Remove after animation completes
                            setTimeout(() => {
                                card.remove();
                                
                                // Optional: Show success message
                                const alert = document.createElement('div');
                                alert.className = 'alert alert-success position-fixed top-0 end-0 m-3';
                                alert.style.zIndex = '1000';
                                alert.textContent = 'Reclamation deleted successfully';
                                document.body.appendChild(alert);
                                
                                // Remove alert after 3 seconds
                                setTimeout(() => alert.remove(), 3000);
                            }, 500);
                        } else {
                            card.classList.remove('deleting');
                            alert('Error deleting reclamation');
                        }
                    })
                    .catch(error => {
                        card.classList.remove('deleting');
                        console.error('Error:', error);
                    });
                }
            });
        });
    });


    function previewNewImage(input) {
        const currentImg = document.getElementById('currentImage');
        const preview = document.getElementById('newImagePreview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
                if (currentImg) currentImg.style.opacity = '0.5';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.style.display = 'none';
            if (currentImg) currentImg.style.opacity = '1';
        }
    }
    document.querySelector('input[type="file"]').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
    
    document.getElementById('{{ form.imageFile.vars.id }}').addEventListener('change', function(e) {
        const preview = document.getElementById('imagePreview');
        const file = e.target.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    });

});