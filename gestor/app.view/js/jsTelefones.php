<script>
    $(document).ready(function() 
    { 
        $('#telefonesForm').submit(function(e) 
        {
            $.ajax
            ({
                type: "POST",
                url: "../../app.control/ajax.php",
                data: 
                {
                    codigo:         $('#codigo').val(),
                    telefone:       $('#telefone').val(),
                    ativo:          $('#ativo').val(),
                    request:        'salvaTelefones'
                },
                success: function(data)
                {
                    if(data == 1)
                    {
                        alert('Salvo com sucesso!');
                        top.location='/';
                    }
                    else
                    {
                        alert('Erro ao salvar o conteúdo!');
                    }
                }
            });
        });
    }); 
</script>