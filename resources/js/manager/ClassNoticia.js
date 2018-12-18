class ClassNoticia {
    constructor(csrf) { 
        this.csrf = csrf;
        $('.overlay').hide();
    }

    /**
     * 
     * @param {*} frm 
     */
    up(frm) {
        frm.preventDefault();

        let data = new FormData();
        data.append('titulo', frm.target.querySelector('#inputTitulo').value);
        data.append('mensagem', frm.target.querySelector('#inputMensagem').value);
        data.append('_method', frm.target.querySelector('input[name="_method"]').value);

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });
        $('.overlay').show();

        fetch('/manager/noticia/' + frm.target.querySelector('#hiddenId').dataset.id, {
            method: 'POST',
            headers: _headers,
            body: data
        })
        .then(response => response.ok)
        .then(result => {
           $('.overlay').hide();
            location.href = '/manager/noticia';
            console.log(result);
        })
        .catch(err => {
            $('.overlay').hide();
            console.log(err);
        });
    }
}

export default ClassNoticia;
window.ClassNoticia = ClassNoticia;