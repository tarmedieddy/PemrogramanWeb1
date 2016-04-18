function myFunction(){
                var x,text;
                //Get the Value of the input field with id="numb"
                x = document.getElementById("numb").value;
                
                //If x is not a number or less than one or greater than 10
                if (isNaN(x)|| x < 1 || x >10){
                    text ="Input not valid";
                }else{
                    text="input Ok";
                }
                document.getElementById("Tes").innerHTML=text;
}