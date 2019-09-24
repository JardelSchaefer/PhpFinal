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

function adicionarCategoria(destino) {


    dadosForm = $('#formAdd').serialize();
    nomcat = $('#nomcat'.val());


        $.ajax({

            method: 'post',
            url: destino,
            data: dadosForm,
            dataType: 'html',
            success: function (data) {
                if (data == 'true') {
                    alert('Categoria adicionada com sucesso!');
                    $('#nomcat').val('');
                } else {
                    alert('Falha ao adicionar categoria!')
                }

            },
            error: function (argument) {
                alert('Ops! Algo deu errado');
            }
        });
    
    return false;
}

function mostrarEsconderTitulo() {
    $('#titulo').fadeToggle(1000);
} 