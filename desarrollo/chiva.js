$(window).on('load',function(){


    let carroColombia=document.getElementsByTagName('svg')[2];

    console.log(carroColombia)
    //console.log(carroColombia.viewBox.animVal.x);
    //console.log(carroColombia.viewBox.animVal.width);
    //console.log(window.innerWidth);

    const CambioPantalla=()=>{

        console.log('funcionando')

        if(window.innerWidth >= 1000){

            carroColombia.viewBox.baseVal.x=-320;
            carroColombia.viewBox.baseVal.width=800.77;


        }else if(window.innerWidth < 1000){

            carroColombia.viewBox.baseVal.x=1;
            carroColombia.viewBox.baseVal.width=470.77;
            


        }

    }


    setInterval(function(){CambioPantalla()},1300);


 //____________________________________________________________________________________________________________________


  


});//final

