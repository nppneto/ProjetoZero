class ClassCurso {
    constructor() { }

    save(frm, csrf) {
        frm.preventDefault();
        let data = new FormData();
        data.append()

        const _headers = new Headers({ 'X-CSRF-TOKEN': csrf });

        fetch('/manager/curso',{
            method: 'POST',
            headers: _header,
            body: data
        })
        .then(response => response.json())
        .then(result => {
            console.log(result)
        })
        .catch(err => console.log(err));
    
    }

    del() {

    }

    up() {

    }
}

export default ClassCurso;
window.ClassCurso = ClassCurso;