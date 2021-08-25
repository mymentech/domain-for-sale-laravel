(function($) {
    $('document').ready(function(){
        $("#buy-now-button").on('click', function() {
            $("#offer-price").val(3900);
        });
        $("#main-offer-form").validate({
            errorClass: 'form-control-feedback',
            errorElement: 'div',
            highlight: function(element) {
                $(element).parents(".form-group").addClass("has-danger");
            },
            unhighlight: function(element) {
                $(element).parents(".form-group").removeClass("has-danger");
            },
            rules: {
                name: 'required',
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 18
                },
                price: "required",
                comments: {
                    maxlength: 500
                }
            },
            messages: {
                name: 'Please enter your name.',
                email: {
                    required: 'You can not leave this empty.',
                    email: 'Please enter a valid email address.'
                },
                phone: {
                    required: 'You can not leave this empty.',
                    matches: 'Please enter a valide phone number.',
                    minlength: 'Phone number should be min 10 digits.',
                    maxlength: 'Phone number should be max 15 digits.'
                },
                price: {
                    price: 'Please enter offered price.'
                },
                comments: {
                    maxlength: 'Message length must be less than 500 character.'
                }
            }
        });
    })
})(jQuery);
