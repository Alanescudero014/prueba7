
<script>
    var today = new Date();
    var entrada = new Date('03/07/2023 09:21:00')
    console.log(today);
    console.log(entrada);

    totale = (today - entrada)/1000;
    x = Math.round(totale);
    console.log(x);

    if(x >= 350){
        alert("Acabo el tiempo");
    }else{

    }
</script>