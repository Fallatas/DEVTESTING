/* Isset function */

function isset(variable) {

    return (typeof variable !== "undefined");

}

var variable = 1;

if(isset(variable)){
    console.log("Variable ist gesetzt und lautet: " + variable);
}else {
    console.log("Variable ist nicht gesetzt.");
}