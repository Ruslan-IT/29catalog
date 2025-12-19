<div class=" col-sm-12">
    <div class="modal_right">

        <div class="modal_title mb-10">
            <h2>Have a question?</h2>
        </div>

        <div class="modal_content mb-15">
            <p>
                Leave your contact details and our manager will contact you shortly.
            </p>
        </div>

        <div class="modal_add_to_cart mb-15">
            <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                @csrf

                {{-- обязательные поля для контроллера --}}
                <input type="hidden" name="subject" value="Форма с главной страницы">
                <input type="hidden" name="message" value="Callback  message" id="contact-message">

                <div class="modal_form_group mb-10">
                    <label>Your Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="modal_form_group mb-10">
                    <label>Phone Number</label>
                    <input type="text" name="phone" >
                </div>

                <div class="modal_form_group mb-15">
                    <label>Email Address</label>
                    <input type="email" name="email" required>
                </div>

                <button type="submit">Request a Call</button>
            </form>

        </div>

        <div class="modal_description mt-15">
            <p>
                By submitting this form, you agree to be contacted by our team.
            </p>
        </div>



    </div>
</div>


