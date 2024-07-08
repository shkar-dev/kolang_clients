

    var nextbtn = document.getElementById('next');
    var prevbtn = document.getElementById('prev');
    const steps = document.querySelectorAll('.step');
    const form_step = document.querySelectorAll('.form-step');
    let active  = 1;


    const updateProgress = () => {

        steps.forEach((step,i) => {
            if(i == (active-1)){
                step.classList.add('active');
                form_step[i].classList.add('active');
                console.log('i => '+ i);

            }else {
                step.classList.remove('active');
                form_step[i].classList.remove('active');
            }
        })
        if(active === 1){
            prevbtn.disabled =  true;

        }else if(active === steps.length){
            nextbtn.disabled = true;
        }else{
            prevbtn.disabled =  false;
            nextbtn.disabled =  false;
        }
    }

nextbtn.addEventListener('click',() => {
        active++;
        if(active > steps.length){
        active = steps.length;
    }
    updateProgress();
})

prevbtn.addEventListener('click',()=> {
        active--;
        if(active < 1){
        active = 1;
    }
    updateProgress();
})




