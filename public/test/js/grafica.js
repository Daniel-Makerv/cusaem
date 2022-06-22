moment.locale('es');

const contentOptions = $('#contentOptions');
const button = $('#button');
$('input[ name = options ]').on('click', ()=>{
    const option=$('input:radio[name=options]:checked');
    switch(option.val()){
        case 'period':
                contentOptions.empty();
                periodChart();
                button.attr('hidden', true);
            break;
        case 'month':
                drawChart();
                contentOptions.empty();
                createSelectLaboratory();
                createSelectPeriods();
                button.attr('hidden', false);
            break;
        case 'weekend':
                drawChart();
                contentOptions.empty();
                createSelectLaboratory();
                createSelectPeriods();
                button.attr('hidden', false);
            break;
    }

});

button.on('click', ()=>{
    const selectPeriod = $('#period').val();
    const selectLaboratory = $('#laboratory').val();
    const option=$('input:radio[name=options]:checked').val();
    getInfo( selectPeriod,selectLaboratory,option);

});
function getInfo(period, laboratory, option){

   $.ajax({
        url: `/dashboard/getInfo/${period}/${laboratory}/${option}`,
        type: 'GET',
        success: response=>{
            createChart(response)
        },
        error: error=> error = error
    });

    const createChart= records =>{
        let datasets=[];
        let labels=[ 'Uso de laboratorio', 'prestamos de meterial' ];

        records.loans.forEach( element =>{
            let template=`${moment(element.of).format('MMMM DD')}-`;
            template+=`${moment(element.to).format('MMMM DD')}`;
            const red = Math.round( Math.random()*255 );
            const green = Math.round( Math.random()*255 );
            const blue = Math.round( Math.random()*255 );
            datasets.push(
                {
                    label: template,
                    backgroundColor: `rgb( ${red}, ${green}, ${blue} )`,
                    borderColor: `rgb( ${red}, ${green}, ${blue} )`,
                    data: [
                        element.laboratoryLoans,
                        element.laboratoryVouchers
                    ]
                }
            );
        });

        let data={
            labels: labels,
            datasets: datasets
        }
        drawChart('bar',data);
    }

}

function periodChart(){

    $.ajax({
        type: 'GET',
        url: '/dashboard/getLoansByPeriod',
        success: response =>{
            createChart(response.data);
        }
    });

    const createChart= records=>{
        let labels=[ 'Uso de laboratorio', 'prestamos de meterial' ];
        let datasets=[];

        records.forEach( element=>{
            let template=`Periodo ${moment(element.period.initial).format('MMMM')} `;
            template+=`${moment(element.period.initial).format('YYYY')} `;
            template +=`- ${moment(element.period.final).format('MMMM')} `;
            template +=`${moment(element.period.final).format('YYYY')}`;
            //agregan al array
            //labels.push(template);

            const red = Math.round( Math.random()*255 );
            const green = Math.round( Math.random()*255 );
            const blue = Math.round( Math.random()*255 );

            datasets.push(
                {
                    label: template,
                    backgroundColor: `rgb( ${red}, ${green}, ${blue} )`,
                    borderColor: `rgb( ${red}, ${green}, ${blue} )`,
                    data: [
                        element.laboratoryLoans,
                        element.laboratoryVouchers
                    ]
                }
            );

        } );

        let data={
            labels: labels,
            datasets: datasets
        }
        drawChart('bar',data);

    }

}

function drawChart(type= 'bar',data ={}, options={}) {

    $('#canvasContainer').html('<canvas id="chart"></canvas>');
    const ctx = $('#chart');
    const chart= new Chart(ctx,{
        type: type,
        data: data,
        options: options,
    });
    return chart;
}
function createSelectPeriods(){
    $.ajax({
        type: "GET",
        url: "/dashboard/getPeriod",
        success: function (response) {
            let template=`<div class="form-group mt-4">
            <label>Periodo</label>
            `;
            template+=`<select class="form-control" id="period">
                <option value="">Selecciona un Periodo</option>
            `;

            response.period.forEach(element=>{
                template+=`<option value="${element.id}">${element.initial}-${element.final}</option>`;
            });

            template+=`</select>
            </div>
            `;
            contentOptions.prepend(template);
        }
    });
}

function createSelectLaboratory(){
    $.ajax({
        type: "GET",
        url: "/dashboard/getLaboratory",
        success: function (response) {
            let template=`<div class="form-group">
            <label>Laboratorio</label>
            `;
            template+=`<select class="form-control" id="laboratory">
            <option value="">Selecciona un Laboratorio</option>
            `;

            response.laboratory.forEach(element=>{
                template+=`<option value="${element.id}">${element.name}</option>`;
            });

            template+=`</select></div>`;
            contentOptions.prepend(template);
        }
    });
}