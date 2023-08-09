//this is a javascript file

    const element = document.getElementById("element");
    // console.log(element.innerHTML)

    fetch('SessionsController.php')
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            console.log(data)
            // let info1 = data[1][name]
            // console.log(info1);
        })


// element.innerHTML='Hello '+ info1
// console.log(element.innerHTML);

// const resultBox = document.getElementById('result')
// // const messages = ["cat", "dog", "fish"];
// let count;
// const length = count.length;
// const result = document.getElementById('result')
// const getNextIdx = (idx = 0, length, direction) => {
//     switch (direction) {
//         case 'next': return (idx + 1) % length;
//         case 'prev': return (idx == 0) && length - 1 || idx - 1;
//         default:     return idx;
//     }
// }
//
// let idx; // idx is undefined, so getNextIdx will take 0 as default
// const getNewIndexAndRender = (direction) => {
//     idx = getNextIdx(idx, length, direction);
//     result.innerHTML = count[idx]
// }
//
// getNewIndexAndRender();

