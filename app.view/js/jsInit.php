<script>
    skel.breakpoints({
        xlarge: "(max-width: 1680px)",
        large:  "(max-width: 1280px)",
        medium: "(max-width: 810px)",
        small:  "(max-width: 650px)",
        xsmall: "(max-width: 490px)",
    });
    skel.layout(
    {
        reset:          "full",
        conditionals:   true,
        grid:           true,
        containers:     "90%!",
    });

    $("#menuResponsivo").click(function() 
    {
        $('#menuSuperiorResponsivo').toggle('slow');
    });

    $('#menuSuperiorResponsivo').hide();
</script>