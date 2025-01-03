document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerText;
        submitBtn.disabled = true;
        submitBtn.innerText = 'Envoi en cours...';

        try {
            const formData = new FormData(form);
            const response = await fetch('/contact', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData
            });

            const data = await response.json();
            console.log('Response:', data);

            if (response.ok) {
                showNotification('success', 'Message envoyé avec succès!');
                form.reset();
            } else {
                showNotification('error', data.message || 'Une erreur est survenue');
            }
        } catch (error) {
            console.error('Error:', error);
            showNotification('error', 'Une erreur est survenue lors de l\'envoi');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerText = originalText;
        }
    });
});

function showNotification(type, message) {
    // Supprimer les anciennes notifications
    const oldNotifications = document.querySelectorAll('.notification');
    oldNotifications.forEach(notif => notif.remove());

    // Créer la nouvelle notification
    const notification = document.createElement('div');
    notification.className = `notification fixed bottom-4 right-4 p-4 rounded-lg text-white z-50 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    }`;
    notification.style.transition = 'opacity 0.5s ease-in-out';
    notification.innerHTML = message;

    // Ajouter au DOM
    document.body.appendChild(notification);

    // Supprimer après 5 secondes
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => notification.remove(), 500);
    }, 5000);
}
