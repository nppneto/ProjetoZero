document.querySelector('#formContato').addeventlistener('submit', function(e){
    e.preventDefault();
    
    const formData = new FormData();
    formData.append('nome', window.document.querySelector('#inputNome').value);
    formData.append('email', window.document.querySelector('#inputEmail').value);
    formData.append('assunto', window.document.querySelector('#inputAssunto').value);
    formData.append('comentario', window.document.querySelector('#inputComentario').value);
    formData.append('_token', window.document.querySelector('input[name="_token"]').value);

    // const _header = new Headers({ 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').attributes('content') });
    
    fetch('/contato',{
        method: 'POST',
        headers: _header,
        body: formData
    })
    .then(response => response.json())
    .then(result => {console.log(result)})
    .catch(err => console.error(err));

});

