window.onload= function (){
    let marketbutton = document.getElementById('lookup');
    let result = document.getElementById('result');

    marketbutton.addEventListener('click',function(element){
        element.preventDefault();
        var input = document.getElementById("market").value;
        fetch("supermarket.php"+"?market="+input)
        .then(response =>{
            if (response.ok){
                return response.text()
            } else{
                return Promise.reject("Something went wrong")
            }
        
        })
        .then(data => {
            result.innerHTML = data;
        })
        .catch(error => console.log('There was an error: ' + error));
    });


}