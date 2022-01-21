var mivariablr = 'Rojo'; //Este ya no se usa
let mivariable = 'Rojo'; //Este sí
const Pi = 3.14;
let comillas = ` `
//variables booleanas
let boton = true; 
let boton2 = false;
console.log("Hola Mundo");
console.log(Pi);

let shopping = ['bread', 'milk', 'cheese', 'hummus', 'noodles']
for(let i=0; i<5; i++){
    console.log(shopping[i]);
}
//JSon
const manzana = {
    color: 'rojo',
    marca: 'appleRed',
    distribucion:{
        pais: 'Estados Unidos',
        telefono: '557766223'
    }
}

console.log("\n",manzana.color);
console.log(manzana.distribucion.pais,"\n");

let j=0;
while(j<3){
    console.log(`ciclo while ${j}`);
    j++;
}

//Funciones

    function imprimir(){
        console.log("Esta es mi primer función");
    }

    function suma(numero1, numero2){
        let resultado = numero1+numero2;
        return resultado;
    }
    
    let sum = (a,b) => {
        let result = a +b;
        return result;
    };

    console.log(sum(17,12));
