function eliminarCategoria(idForm, destino) {

    confirma = confirm("Deseja eliminar esta categoria?");


    dadosForm = $('#' + idForm).serialize();

    if (confirma) {
        $.ajax({

            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == 'true') {
                    $('#linha' + idForm).remove();
                } else {
                    alert('Deu errado');
                }

            },
            error: function (argument) {
                alert('Num sei');
            }
        });
    }
    return false;
}

function someDiv(){
    $('#caixa-status').hide(300);
}

function adicionarCategoria(destino) {


    dadosForm = $('#formAdd').serialize();
    nomcat = $('#nomcat').val();
     $('#btnSalvar').attr('disabled', 'true');

        $.ajax({

            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == 'true') {
                    msg = 'Categoria adicionada com sucesso!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                    
                    $('#btnSalvar').removeAttr('disabled', 'true');
                    $('#caixa-status').addClass('sucesso');
                    $('#caixa-status').fadeIn(300);
                   
                } else {
                    msg = 'Erro a adicionar categoria!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    $('#caixa-status').addClass('falha').fadeIn(800);
                }

            },
            error: function (argument) {
                msg = 'Erro a adicionar categoria!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#caixa-status').addClass('falha');
            }
        });
    $('#btnSalvar').attr('disabled', 'true');
    return false;
}

function editarCategoria(destino) {


    dadosForm = $('#formEdit').serialize();
    nomcat = $('#nomcat').val();
    // $('#btnSalvar').attr('disabled', 'true');

        $.ajax({

            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == 'true') {
                    
                    msg = 'Categoria editada com sucesso!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    
                    $('#nomcat').val('');
                    $('#nomcat').focus();
                    
                    $('#btnEditar').removeAttr('disabled', 'true');
                    $('#caixa-status').addClass('sucesso');
                    $('#caixa-status').fadeIn(300);
                   
                } else {
                    msg = 'Erro a editar categoria!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                    $('#caixa-status').addClass('falha').fadeIn(800);
                }

            },
            error: function (argument) {
                msg = 'Erro a editar categoria!'
                    $('#status').hide();
                    $('#status').html('<h4>'+msg+'</h4>');
                    $('#status').fadeIn(800);
                     $('#caixa-status').addClass('falha');
            }
        });
    $('#btnSalvar').attr('disabled', 'true');
    return false;
}

function mostrarEsconderTitulo() {
    $('#titulo').fadeToggle(1000);
} 