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

modalClose1.addEventListener('click', e =>{
    modalLabel.textContent = 'None of Above';
    modalBody.childNodes[1].lastChild.remove();
});

modalClose2.addEventListener('click', e =>{
    modalLabel.textContent = 'None of Above';
    modalBody.childNodes[1].lastChild.remove();
});


function edit(time){
    switch(time){

        // 6 - 7
        case 'mon-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 6-7';
            
            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);

            break;
        }
        case 'tue-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'wed-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Wednesday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'thu-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Thursday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-6':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 6-7';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 7 - 8
        case 'mon-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 7-8';

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
            modalLabel.textContent = 'Thursday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-7':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 7-8';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 8 - 9
        case 'mon-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 8-9';

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
            modalLabel.textContent = 'Thursday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-8':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 8-9';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 9 - 10
        case 'mon-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 9-10';

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
            modalLabel.textContent = 'Thursday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-9':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 9-10';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 10 - 11
        case 'mon-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 10-11';

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
            modalLabel.textContent = 'Thursday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-10':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 10-11';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 11 - 12
        case 'mon-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 11-12';

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
            modalLabel.textContent = 'Thursday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-11':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 11-12';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 12 - 13
        case 'mon-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 12-13';

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
            modalLabel.textContent = 'Thursday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-12':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 12-13';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 13 - 14
        case 'mon-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 13-14';

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
            modalLabel.textContent = 'Thursday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-13':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 13-14';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 14 - 15
        case 'mon-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 14-15';

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
            modalLabel.textContent = 'Thursday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-14':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 14-15';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 15 - 16
        case 'mon-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 15-16';

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
            modalLabel.textContent = 'Thursday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-15':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 15-16';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 16 - 17
        case 'mon-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 16-17';

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
            modalLabel.textContent = 'Thursday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-16':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 16-17';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 17 - 18
        case 'mon-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 17-18';

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
            modalLabel.textContent = 'Thursday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-17':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 17-18';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 18 - 19
        case 'mon-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 18-19';

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
            modalLabel.textContent = 'Thursday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-18':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 18-19';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 19 - 20
        case 'mon-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 19-20';

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
            modalLabel.textContent = 'Thursday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-19':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 19-20';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 20 - 21
        case 'mon-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 20-21';

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
            modalLabel.textContent = 'Thursday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-20':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 20-21';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

        // 21 - 22
        case 'mon-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Monday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'tue-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Tuesday 21-22';

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
            modalLabel.textContent = 'Thursday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'fri-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Friday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sat-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Saturday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }
        case 'sun-21':{
            console.log('Editando: ', time);
            modalLabel.textContent = 'Sunday 21-22';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.value = time;

            modalBody.childNodes[1].append(input);
            break;
        }

    }
}