document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const phoneInput = form.querySelector('[name="phone"]');
    const messageInput = form.querySelector('[name="message"]');

    // Обновляем скрытое сообщение с телефоном
    if (phoneInput && messageInput) {
        messageInput.value = 'Callback request. Phone: ' + phoneInput.value;
    }

    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        },
        body: new FormData(form)
    })
        .then(response => response.json())
        .then(data => {
            // Скрываем модальное окно (если есть)
            const modal = form.closest('.modal');
            if(modal) {
                modal.style.opacity = '0';
                modal.style.pointerEvents = 'none';

                const backdrop = document.querySelector('.modal-backdrop.show');
                if(backdrop) backdrop.style.opacity = '0';

                setTimeout(() => {
                    modal.style.display = 'none';
                    if(backdrop) backdrop.remove();
                }, 300);
            }

            // Очистка формы
            form.reset();

            // Показ popup
            showPopup('We will contact you soon!');
        })
        .catch(error => {
            console.error(error);
            showPopup('We will contact you soon!');
        });

    // Функция popup
    function showPopup(message) {
        const popup = document.getElementById('popup');
        const popupMessage = document.getElementById('popup-message');
        popupMessage.textContent = message;
        popup.style.display = 'flex';
    }

    // Закрытие popup
    document.getElementById('popup-close').onclick = function() {
        document.getElementById('popup').style.display = 'none';
    }

    window.onclick = function(event) {
        const popup = document.getElementById('popup');
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
});
