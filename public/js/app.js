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
const form = document.querySelector('#form');

modalClose1.addEventListener('click', e =>{
    modalLabel.textContent = 'None of Above';
    modalBody.childNodes[1].lastChild.remove();
});

modalClose2.addEventListener('click', e =>{
    modalLabel.textContent = 'None of Above';
    modalBody.childNodes[1].lastChild.remove();
});


modalSave.addEventListener('click', e =>{
    console.log('h');
    form.submit();
});


function edit(time){
    switch(time){

        // 6 - 7
        case 'mon-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 6-7';
            
            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);

            break;
        }
        case 'tue-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Miércoles 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 7 - 8
        case 'mon-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 8 - 9
        case 'mon-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 9 - 10
        case 'mon-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 10 - 11
        case 'mon-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 11 - 12
        case 'mon-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 12 - 13
        case 'mon-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 13 - 14
        case 'mon-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 14 - 15
        case 'mon-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 15 - 16
        case 'mon-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 16 - 17
        case 'mon-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 17 - 18
        case 'mon-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 18 - 19
        case 'mon-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 19 - 20
        case 'mon-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 20 - 21
        case 'mon-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 21 - 22
        case 'mon-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Lunes 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Martes 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Jueves 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Viernes 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sábado 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Domingo 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

    }
}