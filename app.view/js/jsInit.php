<script>
    skel.init();

    $('#menuSuperior').hide();

    function scrollToAnchor(aid)
    {
        var aTag = $("a[name='"+ aid +"']");
        try
        {
            $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        }
        catch(err)
        {

        }
        finally
        {
            $('#menuSuperior').hide();
        }
    }
</script>