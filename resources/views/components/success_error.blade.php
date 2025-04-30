<div id="statusModal"
    class="fixed top-0 left-0 w-full h-full bg-[#1A193D] bg-opacity-50 z-50 flex justify-center items-center">
    <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
        <div class="absolute top-4 right-6 cursor-pointer close-modal">
            <i class="fa-solid fa-xmark text-4xl"></i>
        </div>
        <div class="p-5 flex justify-center items-center">
            <img src="{{ asset('Assets/06_Contact page/error_message.png') }}" alt="Success Image"
                class="max-w-full h-auto object-contain">
        </div>
        <div class="text-white font-semibold text-center">
            <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Message couldn’t be sent...</h5>
            <p class="text-sm md:text-base lg:text-lg opacity-80">
                An error occurred while trying to send the message. Please try again
            </p>
        </div>
    </div>
    <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
        <div class="absolute top-4 right-6 cursor-pointer close-modal">
            <i class="fa-solid fa-xmark text-4xl"></i>
        </div>
        <div class="p-5 flex justify-center items-center relative">
            <img src="{{ asset('Assets/06_Contact page/plane_vector.png') }}" alt="Success Image"
                class="max-w-full h-auto object-contain">
            <img src="{{ asset('Assets/06_Contact page/success.gif') }}" alt="Success Image"
                class="absolute top-0 max-w-full h-auto object-contain">
        </div>
        <div class="text-white font-semibold text-center">
            <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Thank you for messaging us!</h5>
            <p class="text-sm md:text-base lg:text-lg opacity-80">
                We have received your message! We will get back to you as soon as possible.
            </p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        const successModal = $('#statusModal');
        successModal.removeClass('pointer-events-none');

        successModal.removeClass('hidden');

        setTimeout(function() {
            successModal.addClass('opacity-0').delay(500).queue(function(next) {
                $(this).addClass('hidden');
                next();
            });
        }, 6000);
        $('.close-modal').click(function() {
            $('#statusModal').toggle();
        });
    });
</script>
