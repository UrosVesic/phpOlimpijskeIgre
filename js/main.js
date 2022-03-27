$('#dodaj').submit(function(){
    var $btn = $(document.activeElement);
    const $form = $(this);
     
    if($btn.is('button[id="dodaj"]')){
        event.preventDefault();
        const $inputs = $form.find('input, select, button, textarea');
        const serijalizacija = $form.serialize();

        request = $.ajax({
        url:'handler/add.php',
        type:'post',
        data:serijalizacija
    });

    request.done(function(response, textStatus, jqXHR){
        if(response==="Success"){
            alert("Sportista je dodat");
            location.reload(true);
        }
        else alert("Sportista nije dodat "+ response);
    });

    request.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila: '+textStatus, errorThrown)
    });

}
});

$('#obrisi').click(function(){
    const red = $('input[name=checked-donut]:checked');
    request = $.ajax({
        url:'handler/delete.php',
        type:'post',
        data:{'id':red.val()}
    });

    request.done(function(response, textStatus, jqXHR){
        if(response==="Success"){
            red.closest('tr').remove();
             alert("obrisan red");
        }
        else alert("Sportista nije obrisan "+ response);
    });

    request.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila: '+textStatus, errorThrown)
    });
});

$('#azuriraj').click(function(){
    
});

