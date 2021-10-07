$(document).ready(function() {

    (function($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function(value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "type the correct answer -_-");

        // validate contactForm form
        $(function() {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    subject: {
                        required: true,
                        minlength: 1
                    },
                    number: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    resAddress: {
                        required: true,
                        minlength: 20
                    },
                    perAddress: {
                        required: true,
                        minlength: 20
                    },
                    jobtitle: {
                        required: true,
                    },
                    agree: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "come on, you have a name, don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    subject: {
                        required: "come on, Enter No of Experience, don't you have Enter 0?",
                        minlength: "your subject must consist of at least 1 characters"
                    },
                    number: {
                        required: "come on, you have a Mobile number, don't you?",
                        minlength: "your Number must consist of at least 5 characters"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    resAddress: {
                        required: "come on, you have a Address, don't you?",
                        minlength: "thats all? really?"
                    },
                    perAddress: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    },
                    agree: {
                        required: " please check this box to proeced.",
                    },
                    jobtitle: {
                        required: " Select Any Job to proceed.",
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "contact_process.php",
                        success: function() {
                            $('#contactForm :input').attr('disabled', 'disabled');
                            $('#contactForm').fadeTo("slow", 1, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('#success').fadeIn()
                                $('.modal').modal('hide');
                                $('#success').modal('show');
                            })
                        },
                        error: function() {
                            $('#contactForm').fadeTo("slow", 1, function() {
                                $('#error').fadeIn()
                                $('.modal').modal('hide');
                                $('#error').modal('show');
                            })
                        }
                    })
                }
            })
        })

    })(jQuery)
})