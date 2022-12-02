
let patt = /[0-9]+/
function validateFirstName(){
    let firstName = document.myForm.firstname.value;
    if(firstName.match(patt)){
    alert("Incorrect");
        document.myForm.firstname.focus();
        return false;
    }
    return true;

}

function validateFatherName(){
    let fathername = document.myForm.fathername.value;
    if(fathername.match(patt)){
        document.myForm.fathername.focus()
        return false
    }
    return true
}

function validateMotherName(){
    let mothername = document.myForm.mothername.value;
    if(mothername.match(patt)){
        document.myForm.mothername.focus()
        return false
    }
    return true
}


function validateSex(){
    let sex = document.myForm.sex;
    let isChecked = false;
    for(let i=0;i<sex.length;i++){
        if(sex[i].checked){
            isChecked=true;
            break;
        }
    }
    if(isChecked)
    return true
    else return false
    }

function validateReligion(){
    let religion = document.myForm.religion.value;
    if(religion.match(patt)){
        document.myForm.religion.focus()
        return false
    }
    return true
}

function validatePlaceOfBirth(){
    let pob = document.myForm.pob.value;
    if(pob.match(patt)){
        document.myForm.pob.focus()
        return false
    }
    return true
}

function validateNationality(){
    let nation = document.myForm.nationality.selectedIndex;
    if(nation == 0){
        document.myForm.nationality.focus()
        return false
    }
    return true
}

// MARRAGE 
function validateHasbandFname(){
    let HfirstName = document.myForm.Hfirstname.value;
    if(HfirstName.match(patt)){
        document.myForm.HfirstName.focus()
        return false
    }
    return true
}


function validateHasbandLname(){
let Hlastname = document.myForm.Hlastname.value;
    if(Hlastname.match(patt)){
        document.myForm.Hlastname.focus()
        return false
    }
    return true
}

function validateHasbandReligion(){
    let Hreligion = document.myForm.Hreligion.value;
    if(Hreligion.test(patt)){
        document.myForm.Hreligion.focus()
        return false
    }
    return true
    
}

function validateHasbandNation(){
    let Hnationality = document.myForm.Hnationality.selectedIndex;
    if(Hnationality == 0)
    return false
    else return true
}



/// WIFIE 

function validateWifeFnam(){
    let Wfirstname = document.myForm.Wfirstname.value;
    if(Wfirstname.match(patt)){
        document.myForm.Wfirstname.focus()
        return false
    }
    return true
}


function validateWifeLname(){
let Wlastname = document.myForm.Wlastname.value;
    if(Wlastname.match(patt)){
        document.myForm.Wlastname.focus()
        return false
    }
    return true
}

function validateWfieReligion(){
    let Wreligion = document.myForm.Wreligion.value;
    if(Wreligion.match(patt)){
        document.myForm.Wreligion.focus()
        return false
    }
    return true
}

function validateWifeNation(){
    let Wnationality = document.myForm.Wnationality.selectedIndex;
    if(Wnationality == 0)
    return false
    else return true
}


// DEATH 
function deceasedname(){
    let dname = document.myForm.dname.value;
    if(dname.match(patt)){
        document.myForm.dname.focus()
        return false
    }
    return true
}

function deceasedFathername(){

    let fdname = document.myForm.fdname.value;
    if(fdname.match(patt)){
        document.myForm.fdname.focus()
        return false
    }
    return true
}

function deceasedSex(){
    let dsex = document.myForm.dsex;
    let isChecked = false;
    for(let i=0;i<dsex.length;i++){
        if(dsex[i].checked){
            isChecked=true;
            break;
        }
    }
    if(isChecked)
    return true
    else return false
}

function deceasedSex(){
    let dsex = document.myForm.dsex;
    let isChecked = false;
    for(let i=0;i<dsex.length;i++){
        if(dsex[i].checked){
            isChecked=true;
            break;
        }
    }
    if(isChecked)
    return true
    else return false
    }

function deceasedPOB(){
    let dplace = document.myForm.dplace.value;
    if(dplace.match(patt)){
        document.myForm.focus()
        return false
    }
    return true
}

function deceasedNation(){
    let dnation = document.myForm.dnation.selectedIndex;
    if(dnation == 0)
    return false
    else return true
}

/// VALIDATE FOR ALL 
function validateBirth(){
    if(validateFatherName()){
return true;
    }
    if(validateFirstName() && validateMotherName() && validateSex() && validateNationality() && validateReligion() && validatePlaceOfBirth()){
        return true;
    }
    return false;
}


function validateMarriage(){
    if(!validateHasbandFname())
    return false
    if(!validateHasbandLname())
    return false
    if(!validateHasbandNation())
    return false
    if(!validateHasbandReligion())
    return false
    if(!validateWfieReligion())
    return false
    if(!validateWifeFnam())
    return false
    if(!validateWifeLname())
    return false
    if(!validateWifeNation())
    return false
    return true
}

function validateDeath(){
    if(!deceasedFathername())
    return false
    if(!deceasedNation())
    return false
    if(!deceasedPOB())
    return false
    if(!deceasedSex())
    return false
    if(!deceasedname())
    return false
    return true
}
