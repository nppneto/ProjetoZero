class ClassPagina {
    constructor() { }

    save(frm, url, mtd) {
        frm.preventDefault();
        // console.log(frm);
        var data = new FormData(frm);
        console.log(data);;
        console.log('Testando envio de dados');
    }

    del() {

    }

    up() {

    }
}

export default ClassPagina;
window.ClassPagina = ClassPagina;