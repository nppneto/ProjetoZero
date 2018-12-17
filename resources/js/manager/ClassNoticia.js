class ClassNoticia {
    constructor(csrf) { 
        this.csrf = csrf;
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

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });

        fetch('/manager/noticia',{
            method: 'POST',
            headers: _headers,
            body: data
        })
        .then(response => response.json())
        .then(result => {
            console.log(result)
        })
        .catch(err => console.log(err));
    }
}

export default ClassNoticia;
window.ClassNoticia = ClassNoticia;