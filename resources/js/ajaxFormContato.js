document.querySelector('#formContato').addEventListener('submit', function(e){
    e.preventDefault();
    
    const formData = new FormData();
    formData.append('nome', window.document.getElementById('inputNome').value);
    formData.append('email', window.document.getElementById('inputEmail').value);
    formData.append('assunto', window.document.getElementById('inputAssunto').value);
    formData.append('comentario', window.document.getElementById('inputComentario').value);

    const _header = new Headers({ "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') });
    console.log(_header);

    fetch('/contato',{
        method: 'POST',
        headers: _header
    })
    .then(response => response.json())
    .then(result => {console.log(result)})
    .catch(err => console.error(err));
});