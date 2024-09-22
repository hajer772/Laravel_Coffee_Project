$(document).ready(function () {
    /* ----------------------------- Sub-Title Option ----------------------------- */
    // Hide if there is no errors
    $.each($('.sub-title-container input[type="text"]'), function () {
        if (
            !$('input[name="has_sub_title"]').is(":checked") &&
            !$(this).hasClass("is-invalid")
        )
            $(".sub-title-container").hide("fast");
    });

    // Toggle value on change
    $('input[name="has_sub_title"]').on("change", function () {
        $(".sub-title-container").toggle("slow");

        // Update switch value within the $locale <div>
        $(".tab-pane.active").attr("id") === "en"
            ? $('#ar input[name="has_sub_title"]').prop(
                  "checked",
                  $('#en input[name="has_sub_title"]').is(":checked")
              )
            : $('#en input[name="has_sub_title"]').prop(
                  "checked",
                  $('#ar input[name="has_sub_title"]').is(":checked")
              );
    });

    /* ----------------------------- Description Option ----------------------------- */
    // Hide if there is no errors
    $.each($('.description-container textarea[type="text"]'), function () {
        if (
            !$('input[name="has_description"]').is(":checked") &&
            !$(this).hasClass("is-invalid")
        )
            $(".description-container").hide("fast");
    });

    // Toggle value on change
    $('input[name="has_description"]').on("change", function () {
        $(".description-container").toggle("slow");

        // Update switch value within the $locale <div>
        $(".tab-pane.active").attr("id") === "en"
            ? $('#ar input[name="has_description"]').prop(
                  "checked",
                  $('#en input[name="has_description"]').is(":checked")
              )
            : $('#en input[name="has_description"]').prop(
                  "checked",
                  $('#ar input[name="has_description"]').is(":checked")
              );
    });

    /* ----------------------------- Link Option ----------------------------- */
    // Hide if there is no errors
    if (
        !$('input[name="has_link"]').is(":checked") &&
        !$('#link-container input[type="text"]').hasClass("is-invalid")
    )
        $("#link-container").hide("fast");

    // Toggle value on change
    $('input[name="has_link"]').on("change", function () {
        $("#link-container").toggle("slow");
    });

    /* ----------------------------- Video Option ----------------------------- */
    // Hide if there is no errors
    if (
        !$('input[name="has_video"]').is(":checked") &&
        !$('#video-container input[type="text"]').hasClass("is-invalid")
    )
        $("#video-container").hide("fast");

    // Toggle value on change
    $('input[name="has_video"]').on("change", function () {
        $("#video-container").toggle("slow");
    });


    /* ----------------------------- Image Option ----------------------------- */
    // Hide if there is no errors
    if (
        !$('input[name="has_image"]').is(":checked") &&
        !$('#image_container input[type="text"]').hasClass("is-invalid")
    )
        $("#image_container").hide("fast");

    // Toggle value on change
    $('input[name="has_image"]').on("change", function () {
        $("#image_container").toggle("slow");
    });
});
