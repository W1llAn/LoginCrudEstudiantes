class Operaciones{
    constructor(valor1, valor2){
        this.valor1 = valor1;
        this.valor2 = valor2;
    }

    sumarNumeros() {
        return this.valor1 + this.valor2;
    }

    restarNumeros(){
        return this.valor1 - this.valor2;
    }

    multiplicarNumeros(){
        return this.valor1 * this.valor2;
    }

    //HACER QUE APAREZCA LA SUMA LA RESTA ALA DERECHA LA MULTIPLICACION ABAJO DE LA SUMA Y LA DIVISION ABAJO DE LA resta

    divNumeros(){
        return this.valor1 / this.valor2;
    }

}

function calcularSuma(){
    var n1 = parseInt(document.getElementById("txtNumSuma1").value);
    var n2 = parseInt(document.getElementById("txtNumSuma2").value);
    var resul = new Operaciones(n1,n2);
    document.getElementById("respuesta").innerHTML = resul.sumarNumeros();
}

function calcularResta(){
    var n1 = parseInt(document.getElementById("txtNumResta1").value);
    var n2 = parseInt(document.getElementById("txtNumResta2").value);
    var resul = new Operaciones(n1,n2);
    document.getElementById("respuesta2").innerHTML = resul.restarNumeros();
}

function calcularMult(){
    var n1 = parseInt(document.getElementById("txtNumMult1").value);
    var n2 = parseInt(document.getElementById("txtNumMult2").value);
    var resul = new Operaciones(n1,n2);
    document.getElementById("respuesta3").innerHTML = resul.multiplicarNumeros();
}

function calcularDivision(){
    var n1 = parseInt(document.getElementById("txtNumDiv1").value);
    var n2 = parseInt(document.getElementById("txtNumDiv2").value);
    var resul = new Operaciones(n1,n2);
    document.getElementById("respuesta4").innerHTML = resul.divNumeros();
}