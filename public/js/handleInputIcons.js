$(document).ready(function () {
    function updateIcon(type, element) {
        switch (type) {
            case "mobile":
                $(element).html('<i class="fas fa-mobile-alt"></i>');
                break;
            case "whatsapp":
                $(element).html('<i class="fab fa-whatsapp"></i>');
                break;
            case "telephone":
                $(element).html('<i class="fas fa-phone-alt"></i>');
                break;
            case "email":
                $(element).html('<i class="fas fa-envelope"></i>');
                break;
            case "social":
                $(element).html('<i class="fas fa-share-alt"></i>');
                break;
            default:
                $(element).html('<i class="fas fa-handshake"></i>');
                break;
        }
    }

    // Get current icon placement
    const element = $(".input-group").eq(1).find(".input-group-text");

    // set on initial rendering
    updateIcon($('select[name="type"]').val(), element);

    // Update on change
    $('select[name="type"]').on("change", function () {
        updateIcon($(this).val(), element);
    });
});
