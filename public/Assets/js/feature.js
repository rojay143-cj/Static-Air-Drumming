$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="air+community2024"]').attr("content"),
        },
    });

    $("#btn_send").click(function (e) {
        // Show success modal
        $('body').on('click', '.close-modal', function() {
            $('#statusModal').remove();
        });

        // Send AJAX to the controller
        var name = $("#name").val();
        var organization = $("#organization").val();
        var inquiry = $("#inquiry").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var message = $("#message").val();

        // Form validation
        $('#contact_msg').empty();
        $("#status").empty();
        if (
            name == "" ||
            inquiry == "" ||
            email == "" ||
            message == ""
        ) {
            e.preventDefault();
            $('#contact_msg').append(`
               <span class="error-message duration-500 ease-linear shadow-lg shadow-red-600 roboto">Please fill out the form below!</span>
            `);
        } else {
            var data = {
                name: name,
                organization: organization,
                inquiry: inquiry,
                email: email,
                number: number,
                message: message,
            };

            // Make AJAX request
            var ContacatAJAX = $.ajax({
                type: "POST",
                url: "/contact/send",
                data: JSON.stringify(data),
                contentType: "application/json",
                dataType: "json",

                // beforeSend: function() {
                //     $('#contact_load').show();
                // },

                success: function(response) {
                    // $('#contact_load').hide();
                    var name = $("#name").val("");
                    var organization = $("#organization").val("");
                    var inquiry = $("#inquiry").val("");
                    var email = $("#email").val("");
                    var number = $("#number").val("");
                    var message = $("#message").val("");
                    $("#status").append(
                        `
                        <div id="statusModal"
                            class="fixed top-0 left-0 w-full h-full bg-[#1A193D] bg-opacity-50 z-50 flex justify-center items-center">
                            <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
                                <div class="absolute top-4 right-6 cursor-pointer close-modal">
                                    <i class="fa-solid fa-xmark text-4xl"></i>
                                </div>
                                <div class="p-5 flex justify-center items-center relative">
                                    <img src="../Assets/06_Contact page/sent.png" alt="Success Image"
                                         class="max-w-full h-auto object-contain">
                                </div>
                                <div class="text-white font-semibold text-center">
                                    <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Thank you for messaging us!</h5>
                                    <p class="text-sm md:text-base lg:text-lg opacity-80">
                                        We have received your message! We will get back to you as soon as possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                        `
                    );

                    setTimeout(function() {
                        $('#statusModal').fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },

                error: function(error) {
                    // $('#contact_load').hide();
                    $('#status').append(
                        `
                        <div id="statusModal"
                            class="fixed top-0 left-0 w-full h-full bg-[#1A193D] bg-opacity-50 z-50 flex justify-center items-center">
                            <div class="bg-[#1A193D] rounded-3xl py-10 px-6 w-full max-w-md mx-4 lg:max-w-lg relative">
                                <div class="absolute top-4 right-6 cursor-pointer close-modal">
                                    <i class="fa-solid fa-xmark text-4xl"></i>
                                </div>
                                <div class="p-5 flex justify-center items-center">
                                    <img src="../Assets/06_Contact page/error_message.png" alt="Error Image"
                                        class="max-w-full h-auto object-contain">
                                </div>
                                <div class="text-white font-semibold text-center">
                                    <h5 class="text-xl md:text-2xl lg:text-3xl mb-3">Message couldn’t be sent...</h5>
                                    <p class="text-sm md:text-base lg:text-lg opacity-80">
                                        An error occurred while trying to send the message. Please try again.
                                    </p>
                                </div>
                            </div>
                        </div>
                        `
                    );
                    setTimeout(function() {
                        $('#statusModal').fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 5000);
                },
                // complete: function() {
                //     $('#contact_load').hide();
                // }
            });
        }
    });
});
