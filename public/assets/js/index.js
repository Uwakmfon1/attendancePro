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
