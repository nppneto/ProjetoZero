window.document.querySelector('#formContato').addEventListener('submit', function(e){
    e.preventDefault();

    const formData = new FormData();
    formData.append('nome', document.querySelector('#inputNome').value);
    formData.append('email', document.querySelector('#inputEmail').value);
    formData.append('assunto', document.querySelector('#inputAssunto').value);
    formData.append('comentario', document.querySelector('#inputComentario').value);

    const _headers = new Headers({ 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').attributes.content.value });

    fetch('/contato',{
        method: 'POST',
        headers: _headers,
        body: formData
    })
    .then(response => response.json())
    .then(result => {
        console.log(result);
    })
    .catch(err => console.error(err));
})