class ClassCurso {
    constructor(csrf) { 
        this.csrf = csrf;
    }

    /**
     * 
     * @param {*} frm 
     */
    save(frm) {
        frm.preventDefault();

        let data = new FormData();
        data.append('titulo', frm.target.querySelector('#inputTitulo').value);
        data.append('endereco', frm.target.querySelector('#inputEndereço').value);
        data.append('dt_inicio', frm.target.querySelector('#inputDtInicio').value);
        data.append('dt_fim', frm.target.querySelector('#inputDtFim').value)
        data.append('horario_inicio', frm.target.querySelector('#inputHoraInicio').value);
        data.append('horario_fim', frm.target.querySelector('#inputHoraFim').value);
        data.append('periodo', frm.target.querySelector('#inputPeriodo').value);
        data.append('descricao', frm.target.querySelector('#inputDescricao').value);
        data.append('valor', frm.target.querySelector('#inputValor').value);
        data.append('txt_destaque', frm.target.querySelector('#inputTxtDestaque').value);

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });

        fetch('/manager/curso',{
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

    /**
     * 
     * @param {*} frm 
     */
    del(frm) {
        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });
        
        fetch('/manager/curso/' + frm.dataset.id,{
            method: 'DELETE',
            headers: _headers
        })
        .then(response => response.json())
        .then(result => {
            console.log(result)
        })
        .catch(err => console.log(err));
        
        frm.closest('tr').remove();

        return false;
    }

    /**
     * 
     * @param {*} frm 
     */
    up(frm) {
        frm.preventDefault();

        let data = new FormData();
        data.append('titulo', frm.target.querySelector('#inputTitulo').value);
        data.append('endereco', frm.target.querySelector('#inputEndereço').value);
        data.append('dt_inicio', frm.target.querySelector('#inputDtInicio').value);
        data.append('dt_fim', frm.target.querySelector('#inputDtFim').value)
        data.append('horario_inicio', frm.target.querySelector('#inputHoraInicio').value);
        data.append('horario_fim', frm.target.querySelector('#inputHoraFim').value);
        data.append('periodo', frm.target.querySelector('#inputPeriodo').value);
        data.append('descricao', frm.target.querySelector('#inputDescricao').value);
        data.append('valor', frm.target.querySelector('#inputValor').value);
        data.append('txt_destaque', frm.target.querySelector('#inputTxtDestaque').value);

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });

        fetch('/manager/curso',{
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

export default ClassCurso;
window.ClassCurso = ClassCurso;