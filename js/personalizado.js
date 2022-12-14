document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale:'pt-br',
       // plugins:['interaction', 'dayGrid'],
        //defaultView: 'timeGridWeek',
        ///eventLimit:true,
        //editable: true,
        weekends: false,
        plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        //defaultDate: '2019-04-12',
        navLinks: true,   
        events: 'list_eventos.php',
        eventClick: function (info) {
            $("#apagar_evento").attr("href", "proc_apagar_evento.php?id=" + info.event.id);
            info.jsEvent.preventDefault(); // don't let the browser navigate
            console.log(info.event);
            $('#visualizar #id').text(info.event.id);
            $('#visualizar #id').val(info.event.id);
            $('#visualizar #id_paciente').text(info.event.extendedProps.id_paciente);
            $('#visualizar #id_pac').val(info.event.extendedProps.id_paciente);
            $('#visualizar #id_profissional').text(info.event.extendedProps.id_profissional);
            $('#visualizar #nome_profissional').text(info.event.extendedProps.nome_profissional);
            $('#visualizar #nome_profissional').val(info.event.extendedProps.nome_profissional);
            $('#visualizar #nome_paciente').text(info.event.extendedProps.nome_paciente);
            $('#visualizar #nome_paciente').val(info.event.extendedProps.nome_paciente);
            $('#visualizar #start').text(info.event.start.toLocaleString());
            $('#visualizar #start').val(info.event.start.toLocaleString());
            $('#visualizar #end').text(info.event.end.toLocaleString());
            $('#visualizar #end').val(info.event.end.toLocaleString());
            $('#visualizar #color').val(info.event.backgroundColor);
            $('#visualizar').modal('show');
        },
        selectable: true,
        select: function (info) {
            //alert('In??cio do evento: ' + info.start.toLocaleString());
            $('#cadastrar #start').val(info.start.toLocaleString());
            //$('#cadastrar #end').val(info.end.toLocaleString());
            $('#cadastrar #end').val(info.end.toLocaleString());
            $('#cadastrar').modal('show');
        }
    });

    calendar.render();
});


$(document).ready(function () {
    $("#addevent").on("submit", function (event) {
        event.preventDefault();
        event.stopPropagation();
       $.ajax({
            method: "POST",
            url: "cad_event.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
                if (retorna['sit']) {
                    //$("#msg-cad").html(retorna['msg']);
                    location.reload();
                } else {
                    $("#msg-cad").html(retorna['msg']);
                }
            }
        })
    });
    

    $('.btn-canc-vis').on("click", function(){
        $('.visevent').slideToggle();
        $('.formedit').slideToggle();
    });
    
    $('.btn-canc-edit').on("click", function(){
        $('.formedit').slideToggle();
        $('.visevent').slideToggle();
    });

    
    $("#editevent").on("submit", function (event) {
        event.preventDefault();
       $.ajax({
            method: "POST",
            url: "edit_event.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
                if (retorna['sit']) {
                    //$("#msg-cad").html(retorna['msg']);
                    location.reload();
                } else {
                    $("#msg-edit").html(retorna['msg']);
                }
            }
        })
    });
});
