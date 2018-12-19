class ClassCurso {
    constructor(csrf) { 
        this.csrf = csrf;
        $('.overlay').hide();
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
        data.append('objetivo', frm.target.querySelector('#inputObjetivo').value);
        data.append('requisitos', frm.target.querySelector('#inputRequisitos').value);
        data.append('metodologia', frm.target.querySelector('#inputMetodologia').value);
        data.append('descricao', frm.target.querySelector('#inputDescricao').value);
        data.append('valor', frm.target.querySelector('#inputValor').value);
        data.append('txt_destaque', frm.target.querySelector('#inputTxtDestaque').value);

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });
        
        $('.overlay').show();

        fetch('/manager/curso',{
            method: 'POST',
            headers: _headers,
            body: data
        })
        .then(response => response.ok)
        .then(e => {
            $('.overlay').hide();
            location.href = '/manager/curso';
            // console.log(e);
        })
        .catch(err => {
            console.log(err);
            $('.overlay').show();
        });
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
        data.append('endereco', frm.target.querySelector('#inputEndereco').value);
        data.append('dt_inicio', frm.target.querySelector('#inputDtInicio').value);
        data.append('dt_fim', frm.target.querySelector('#inputDtFim').value)
        data.append('horario_inicio', frm.target.querySelector('#inputHoraInicio').value);
        data.append('horario_fim', frm.target.querySelector('#inputHoraFim').value);
        data.append('periodo', frm.target.querySelector('#inputPeriodo').value);
        data.append('objetivo', frm.target.querySelector('#inputObjetivo').value);
        data.append('requisitos', frm.target.querySelector('#inputRequisitos').value);
        data.append('metodologia', frm.target.querySelector('#inputMetodologia').value);
        data.append('descricao', frm.target.querySelector('#inputDescricao').value);
        data.append('valor', frm.target.querySelector('#inputValor').value);
        data.append('txt_destaque', frm.target.querySelector('#inputTxtDestaque').value);
        data.append('_method', frm.target.querySelector('input[name="_method"]').value);

        let destaque = 0;
        let disponivel = 0;

        if(frm.target.querySelector('#chkDestaque').checked === true)
            destaque = 1

        if(frm.target.querySelector('#chkDisponivel').checked === true)
            disponivel = 1;

        data.append('destaque', destaque);
        data.append('disponivel', disponivel);

        const _headers = new Headers({ 'X-CSRF-TOKEN': this.csrf });
        $('.overlay').show();


        fetch('/manager/curso/' + frm.target.querySelector('#hiddenId').dataset.id, {
            method: 'POST',
            headers: _headers,
            body: data
        })
        .then(response => response.ok)
        .then(result => {
           $('.overlay').hide();
            location.href = '/manager/curso';
            console.log(result);
        })
        .catch(err => {
            $('.overlay').hide();
            console.log(err);
        });
    }
}

export default ClassCurso;
window.ClassCurso = ClassCurso;