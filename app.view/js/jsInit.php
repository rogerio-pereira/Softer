<script>
    skel.init();

    $('#menuSuperior').hide();

    function scrollToAnchor(aid)
    {
        var aTag = $("a[name='"+ aid +"']");
        $('html,body').animate({scrollTop: aTag.offset().top},'slow');
        
        $('#menuSuperior').hide();
    }
</script>