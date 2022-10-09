let array = [5,25,13,8,45,6,11];
//Find maximum and minimum number
function findMinMax(){
    let max = array[0], min = array[0];
    for(let i =1;i<array.length;i++){
        if(max < array[i]) max = array[i];
        if(min > array[i]) min = array[i];
    }
    return [max, min];
}

//Sorting array(Smallest to largest)
function ascendingSorting(){
    for(let i=0;i<array.length;i++){
        for(let j=i+1;j<array.length;j++){
            if(array[i] > array[j]){
                let temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }
    }
    return array;
}

//Sorting array(Largest to smallest)
function descendingSorting(){
    for(let i=0;i<array.length;i++){
        for(let j=i+1;j<array.length;j++){
            if(array[i] < array[j]){
                let temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }
    }
    return array;
}

//Write result using DOM
function result(){
    let res = `
        <h1>Ex3-Lab1-Web programming</h1>
        <h2>Using JavaScript (the given array is [5,25,13,8,45,6,11]):</h2>
        <h3>The largest number is ${findMinMax()[0]}</h3>
        <h3>The smallest number is ${findMinMax()[1]}</h3>
        <h3>Sorting array from smallest to largest: ${ascendingSorting()}</h3>
        <h3>Sorting array from largest to smallest: ${descendingSorting()}</h3>
    `;
    let body = document.getElementById('js');
    body.innerHTML = res;
}