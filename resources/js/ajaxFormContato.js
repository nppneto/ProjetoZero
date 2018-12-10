window.document.getElementById('formContato').addEventListener('submit', function(e) {

    e.preventDefault();

    const form = {
        'nome': window.document.getElementById('inputNome').value,
        'email': window.document.getElementById('inputEmail').value,
        'assunto': window.document.getElementById('inputAssunto').value,
        'comentario': window.document.getElementById('inputComentario').value
    };

    console.log(form);
    return false;

    $.ajax({
        method: 'post',
        async: true,
        url: '/contato',
        data: form
    })
    .done(e => {
        console.log(e);
    })
    .fail(e => {
        console.log(e);
    });

});