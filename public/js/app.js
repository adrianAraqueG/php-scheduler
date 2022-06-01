/**
 * PHP Scheduler - Adrián Araque
 */

// Modal variables
const modal = document.querySelector('#modal');
const modalBody = document.querySelector('#modalBody');
const modalLabel = document.querySelector('#modalLabel');
const modalClose1 = document.querySelector('#modalClose1');
const modalClose2 = document.querySelector('#modalClose2');
const modalSave = document.querySelector('#modalSave');


// Form variables
const form = document.querySelector('#form');
const tkLabel = document.querySelector('#task-label');
const markup = document.querySelector('#markup');
const cellColor = document.querySelector('#t-cell-color');
const tkDesc = document.querySelector('#task-desc');

const lh = window.localStorage;


modalSave.addEventListener('click', () =>{
    form.submit();
});
modalClose1.addEventListener('click', () =>{
    if(form.querySelector(`input[type=hidden]`)){
        form.removeChild(form.querySelector(`input[type=hidden]`));
    }
});
modalClose2.addEventListener('click', () =>{
    if(form.querySelector(`input[type=hidden]`)){
        form.removeChild(form.querySelector(`input[type=hidden]`));
    }
});


// Set info from localHost
function showLabel(time){
    
    console.log('Editando: ', time);
    const schedule = JSON.parse(lh.getItem('schedule'));
    const daysLabels = {
        'mon-6': 'Lunes 6-7',
        'mon-7': 'Lunes 7-8',
        'mon-8': 'Lunes 8-9',
        'mon-9': 'Lunes 9-10',
        'mon-10': 'Lunes 10-11',
        'mon-11': 'Lunes 11-12',
        'mon-12': 'Lunes 12-13',
        'mon-13': 'Lunes 13-14',
        'mon-14': 'Lunes 14-15',
        'mon-15': 'Lunes 15-16',
        'mon-16': 'Lunes 16-17',
        'mon-17': 'Lunes 17-18',
        'mon-18': 'Lunes 18-19',
        'mon-19': 'Lunes 19-20',
        'mon-20': 'Lunes 20-21',
        'mon-21': 'Lunes 21-22',
        'tue-6': 'Martes 6-7',
        'tue-7': 'Martes 7-8',
        'tue-8': 'Martes 8-9',
        'tue-9': 'Martes 9-10',
        'tue-10': 'Martes 10-11',
        'tue-11': 'Martes 11-12',
        'tue-12': 'Martes 12-13',
        'tue-13': 'Martes 13-14',
        'tue-14': 'Martes 14-15',
        'tue-15': 'Martes 15-16',
        'tue-16': 'Martes 16-17',
        'tue-17': 'Martes 17-18',
        'tue-18': 'Martes 18-19',
        'tue-19': 'Martes 19-20',
        'tue-20': 'Martes 20-21',
        'tue-21': 'Martes 21-22',
        'wed-6': 'Miércoles 6-7',
        'wed-7': 'Miércoles 7-8',
        'wed-8': 'Miércoles 8-9',
        'wed-9': 'Miércoles 9-10',
        'wed-10': 'Miércoles 10-11',
        'wed-11': 'Miércoles 11-12',
        'wed-12': 'Miércoles 12-13',
        'wed-13': 'Miércoles 13-14',
        'wed-14': 'Miércoles 14-15',
        'wed-15': 'Miércoles 15-16',
        'wed-16': 'Miércoles 16-17',
        'wed-17': 'Miércoles 17-18',
        'wed-18': 'Miércoles 18-19',
        'wed-19': 'Miércoles 19-20',
        'wed-20': 'Miércoles 20-21',
        'wed-21': 'Miércoles 21-22',
        'thu-6': 'Jueves 6-7',
        'thu-7': 'Jueves 7-8',
        'thu-8': 'Jueves 8-9',
        'thu-9': 'Jueves 9-10',
        'thu-10': 'Jueves 10-11',
        'thu-11': 'Jueves 11-12',
        'thu-12': 'Jueves 12-13',
        'thu-13': 'Jueves 13-14',
        'thu-14': 'Jueves 14-15',
        'thu-15': 'Jueves 15-16',
        'thu-16': 'Jueves 16-17',
        'thu-17': 'Jueves 17-18',
        'thu-18': 'Jueves 18-19',
        'thu-19': 'Jueves 19-20',
        'thu-20': 'Jueves 20-21',
        'thu-21': 'Jueves 21-22',
        'fri-6': 'Viernes 6-7',
        'fri-7': 'Viernes 7-8',
        'fri-8': 'Viernes 8-9',
        'fri-9': 'Viernes 9-10',
        'fri-10': 'Viernes 10-11',
        'fri-11': 'Viernes 11-12',
        'fri-12': 'Viernes 12-13',
        'fri-13': 'Viernes 13-14',
        'fri-14': 'Viernes 14-15',
        'fri-15': 'Viernes 15-16',
        'fri-16': 'Viernes 16-17',
        'fri-17': 'Viernes 17-18',
        'fri-18': 'Viernes 18-19',
        'fri-19': 'Viernes 19-20',
        'fri-20': 'Viernes 20-21',
        'fri-21': 'Viernes 21-22',
        'sat-6': 'Sábado 6-7',
        'sat-7': 'Sábado 7-8',
        'sat-8': 'Sábado 8-9',
        'sat-9': 'Sábado 9-10',
        'sat-10': 'Sábado 10-11',
        'sat-11': 'Sábado 11-12',
        'sat-12': 'Sábado 12-13',
        'sat-13': 'Sábado 13-14',
        'sat-14': 'Sábado 14-15',
        'sat-15': 'Sábado 15-16',
        'sat-16': 'Sábado 16-17',
        'sat-17': 'Sábado 17-18',
        'sat-18': 'Sábado 18-19',
        'sat-19': 'Sábado 19-20',
        'sat-20': 'Sábado 20-21',
        'sat-21': 'Sábado 21-22',
        'sun-6': 'Domingo 6-7',
        'sun-7': 'Domingo 7-8',
        'sun-8': 'Domingo 8-9',
        'sun-9': 'Domingo 9-10',
        'sun-10': 'Domingo 10-11',
        'sun-11': 'Domingo 11-12',
        'sun-12': 'Domingo 12-13',
        'sun-13': 'Domingo 13-14',
        'sun-14': 'Domingo 14-15',
        'sun-15': 'Domingo 15-16',
        'sun-16': 'Domingo 16-17',
        'sun-17': 'Domingo 17-18',
        'sun-18': 'Domingo 18-19',
        'sun-19': 'Domingo 19-20',
        'sun-20': 'Domingo 20-21',
        'sun-21': 'Domingo 21-22',
    };

    let arr = time.split('-');
    switch(arr[0]){
        case 'mon':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.monday[time].title;
            tkDesc.textContent = schedule.monday[time].description;

            // Markup
            schedule.monday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.monday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `monday-${time}`;
            form.append(input);

            break;
        }
        case 'tue':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.tuesday[time].title;
            tkDesc.textContent = schedule.tuesday[time].description;

            // Markup
            schedule.tuesday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.tuesday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `tuesday-${time}`;
            form.append(input);

            break;
        }
        case 'wed':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.wednesday[time].title;
            tkDesc.textContent = schedule.wednesday[time].description;

            // Markup
            schedule.wednesday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.wednesday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `wednesday-${time}`;
            form.append(input);

            break;
        }
        case 'thu':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.thursday[time].title;
            tkDesc.textContent = schedule.thursday[time].description;

            // Markup
            schedule.thursday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.thursday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `thursday-${time}`;
            form.append(input);

            break;
        }
        case 'fri':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.friday[time].title;
            tkDesc.textContent = schedule.friday[time].description;

            // Markup
            schedule.friday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.friday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `friday-${time}`;
            form.append(input);

            break;
        }
        case 'sat':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.saturday[time].title;
            tkDesc.textContent = schedule.saturday[time].description;

            // Markup
            schedule.saturday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.saturday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `saturday-${time}`;
            form.append(input);

            break;
        }
        case 'sun':{
            modalLabel.textContent = daysLabels[time];
            tkLabel.value = schedule.sunday[time].title;
            tkDesc.textContent = schedule.sunday[time].description;

            // Markup
            schedule.sunday[time].markup !== "0" ? markup.checked = true : markup.checked = false;

            // Cell color
            cellColor.value = schedule.sunday[time]['cell-color'];

            // Set identifier
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'meta';
            input.value = `sunday-${time}`;
            form.append(input);

            break;
        }
    }
    
}