document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contact-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const phoneInput = form.querySelector('[name="phone"]');
        const messageInput = form.querySelector('[name="message"]');

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
            .then(() => {

                forceCloseModal();
                form.reset();
                showPopup('We will contact you soon!');

            })
            .catch(() => {

                forceCloseModal();
                showPopup('We will contact you soon!');

            });
    });

    /* ===== ЖЁСТКО ЗАКРЫВАЕМ МОДАЛКУ ===== */
    function forceCloseModal() {

        // скрываем все модальные окна
        document.querySelectorAll('.modal').forEach(modal => {
            modal.classList.remove('show');
            modal.style.display = 'none';
        });

        // удаляем backdrop
        document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());

        // возвращаем scroll
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
    }

    /* ===== POPUP ===== */
    function showPopup(text) {
        const popup = document.getElementById('popup');
        const msg = document.getElementById('popup-message');
        msg.textContent = text;
        popup.style.display = 'flex';
    }

    document.getElementById('popup-close').addEventListener('click', function () {
        document.getElementById('popup').style.display = 'none';
    });

    window.addEventListener('click', function (e) {
        const popup = document.getElementById('popup');
        if (e.target === popup) {
            popup.style.display = 'none';
        }
    });

});
