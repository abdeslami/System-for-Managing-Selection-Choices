
    function handleSubmit(e) {
        e.preventDefault();
    }

    function handleInput() {
        let type_diplome = document.getElementById('type_diplome').value;

        if (type_diplome === "bac+2" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            let input_note3 = document.createElement('input');
            let label_note3 = document.createElement('label');
            let label_releve3 = document.createElement('label');
            let file_note3 = document.createElement('input'); 

            let input_note4 = document.createElement('input');
            let label_note4 = document.createElement('label');
            let label_releve4 = document.createElement('label');
            let file_note4 = document.createElement('input'); 

            let div1 = document.createElement('div');
            label_note1.textContent = "Moyenne de Semaitre 1:";
            label_releve1.textContent = "Donnez le relevé de la note 1";
            label_note2.textContent = "Moyenne de Semaitre 2:";
            label_releve2.textContent = "Donnez le relevé de la note 2";
            label_note3.textContent = "Moyenne de Semaitre 3:";
            label_releve3.textContent = "Donnez le relevé de la note 3";

            label_note4.textContent = "Moyenne de Semaitre 4:";
            label_releve4.textContent = "Donnez le relevé de la note 4";

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'releve_s1');
            file_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'releve_s2');
            file_note2.setAttribute('class', 'form-control');

            file_note3.setAttribute('type', 'file');
            file_note3.setAttribute('name', 'releve_s3');
            file_note3.setAttribute('class', 'form-control');   

            file_note4.setAttribute('type', 'file');
            file_note4.setAttribute('name', 'releve_s4');
            file_note4.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'moyenne_s1');
            input_note1.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'moyenne_s2');
            input_note2.setAttribute('class', 'form-control');
            
            input_note3.setAttribute('type', 'text');
            input_note3.setAttribute('name', 'moyenne_s3');
            input_note3.setAttribute('class', 'form-control');

            
            input_note4.setAttribute('type', 'text');
            input_note4.setAttribute('name', 'moyenne_s4');
            input_note4.setAttribute('class', 'form-control');

            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            div1.appendChild(label_note3);
            div1.appendChild(input_note3);
            div1.appendChild(label_releve3);
            div1.appendChild(file_note3);

            div1.appendChild(label_note4);
            div1.appendChild(input_note4);
            div1.appendChild(label_releve4);
            div1.appendChild(file_note4);

            document.getElementById('div_input').innerHTML = '';
            document.getElementById('div_input').appendChild(div1);
        }else if(type_diplome === "bac+3" ){
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

       

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            let input_note3 = document.createElement('input');
            let label_note3 = document.createElement('label');
            let label_releve3 = document.createElement('label');
            let file_note3 = document.createElement('input'); 

            let input_note4 = document.createElement('input');
            let label_note4 = document.createElement('label');
            let label_releve4 = document.createElement('label');
            let file_note4 = document.createElement('input'); 

            let input_note5 = document.createElement('input');
            let label_note5 = document.createElement('label');
            let label_releve5 = document.createElement('label');
            let file_note5 = document.createElement('input'); 

            let input_note6 = document.createElement('input');
            let label_note6 = document.createElement('label');
            let label_releve6 = document.createElement('label');
            let file_note6 = document.createElement('input'); 

            let div1 = document.createElement('div');
            label_note1.textContent = "Moyenne de Semaitre 1:";
            label_releve1.textContent = "Donnez le relevé de la note 1";
            label_note2.textContent = "Moyenne de Semaitre 2:";
            label_releve2.textContent = "Donnez le relevé de la note 2";
            label_note3.textContent = "Moyenne de Semaitre 3:";
            label_releve3.textContent = "Donnez le relevé de la note 3";

            label_note4.textContent = "Moyenne de Semaitre 4:";
            label_releve4.textContent = "Donnez le relevé de la note 4";

            label_note5.textContent = "Moyenne de Semaitre 5:";
            label_releve5textContent = "Donnez le relevé de la note 5";

            label_note6.textContent = "Moyenne de Semaitre 6:";
            label_releve6.textContent = "Donnez le relevé de la note 6";

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'releve_s1');
            file_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'releve_s2');
            file_note2.setAttribute('class', 'form-control');

            file_note3.setAttribute('type', 'file');
            file_note3.setAttribute('name', 'releve_s3');
            file_note3.setAttribute('class', 'form-control');   

            file_note4.setAttribute('type', 'file');
            file_note4.setAttribute('name', 'releve_s4');
            file_note4.setAttribute('class', 'form-control');

            file_note5.setAttribute('type', 'file');
            file_note5.setAttribute('name', 'releve_s5');
            file_note5.setAttribute('class', 'form-control');

            file_note6.setAttribute('type', 'file');
            file_note6.setAttribute('name', 'releve_s5');
            file_note6.setAttribute('class', 'form-control');
 

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'moyenne_s1');
            input_note1.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'moyenne_s2');
            input_note2.setAttribute('class', 'form-control');
            
            input_note3.setAttribute('type', 'text');
            input_note3.setAttribute('name', 'moyenne_s3');
            input_note3.setAttribute('class', 'form-control');

            
            input_note4.setAttribute('type', 'text');
            input_note4.setAttribute('name', 'moyenne_s4');
            input_note4.setAttribute('class', 'form-control');

            input_note5.setAttribute('type', 'text');
            input_note5.setAttribute('name', 'moyenne_s5');
            input_note5.setAttribute('class', 'form-control');

            input_note6.setAttribute('type', 'text');
            input_note6.setAttribute('name', 'moyenne_s6');
            input_note6.setAttribute('class', 'form-control');

            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            div1.appendChild(label_note3);
            div1.appendChild(input_note3);
            div1.appendChild(label_releve3);
            div1.appendChild(file_note3);

            div1.appendChild(label_note4);
            div1.appendChild(input_note4);
            div1.appendChild(label_releve4);
            div1.appendChild(file_note4);

            div1.appendChild(label_note5);
            div1.appendChild(input_note5);
            div1.appendChild(label_releve5);
            div1.appendChild(file_note5);

            div1.appendChild(label_note6);
            div1.appendChild(input_note6);
            div1.appendChild(label_releve6);
            div1.appendChild(file_note6);

            

            document.getElementById('div_input').innerHTML = '';
            document.getElementById('div_input').appendChild(div1);
        }else  if(type_diplome === "bac+5" ){
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

       

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            let input_note3 = document.createElement('input');
            let label_note3 = document.createElement('label');
            let label_releve3 = document.createElement('label');
            let file_note3 = document.createElement('input'); 

            let input_note4 = document.createElement('input');
            let label_note4 = document.createElement('label');
            let label_releve4 = document.createElement('label');
            let file_note4 = document.createElement('input'); 

            let input_note5 = document.createElement('input');
            let label_note5 = document.createElement('label');
            let label_releve5 = document.createElement('label');
            let file_note5 = document.createElement('input'); 

            let input_note6 = document.createElement('input');
            let label_note6 = document.createElement('label');
            let label_releve6 = document.createElement('label');
            let file_note6 = document.createElement('input');
            
            
            let input_note7= document.createElement('input');
            let label_note7 = document.createElement('label');
            let label_releve7 = document.createElement('label');
            let file_note7 = document.createElement('input');

            let input_note8 = document.createElement('input');
            let label_note8= document.createElement('label');
            let label_releve8 = document.createElement('label');
            let file_note8 = document.createElement('input');

            let input_note9= document.createElement('input');
            let label_note9 = document.createElement('label');
            let label_releve9 = document.createElement('label');
            let file_note9 = document.createElement('input');

            let input_note10 = document.createElement('input');
            let label_note10 = document.createElement('label');
            let label_releve10 = document.createElement('label');
            let file_note10 = document.createElement('input');

            let div1 = document.createElement('div');
            label_note1.textContent = "Moyenne de Semaitre 1:";
            label_releve1.textContent = "Donnez le relevé de la note 1";

            label_note2.textContent = "Moyenne de Semaitre 2:";
            label_releve2.textContent = "Donnez le relevé de la note 2";

            label_note3.textContent = "Moyenne de Semaitre 3:";
            label_releve3.textContent = "Donnez le relevé de la note 3";

            label_note4.textContent = "Moyenne de Semaitre 4:";
            label_releve4.textContent = "Donnez le relevé de la note 4";

            label_note5.textContent = "Moyenne de Semaitre 5:";
            label_releve5textContent = "Donnez le relevé de la note 5";

            label_note6.textContent = "Moyenne de Semaitre 6:";
            label_releve6.textContent = "Donnez le relevé de la note 6";

            label_note7.textContent = "Moyenne de Semaitre 7:";
            label_releve7.textContent = "Donnez le relevé de la note 7";

            label_note8.textContent = "Moyenne de Semaitre 8:";
            label_releve8.textContent = "Donnez le relevé de la note 8";

            label_note9.textContent = "Moyenne de Semaitre 9:";
            label_releve9.textContent = "Donnez le relevé de la note 9";

            label_note10.textContent = "Moyenne de Semaitre 10:";
            label_releve10.textContent = "Donnez le relevé de la note 10";

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'releve_s1');
            file_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'releve_s2');
            file_note2.setAttribute('class', 'form-control');

            file_note3.setAttribute('type', 'file');
            file_note3.setAttribute('name', 'releve_s3');
            file_note3.setAttribute('class', 'form-control');   

            file_note4.setAttribute('type', 'file');
            file_note4.setAttribute('name', 'releve_s4');
            file_note4.setAttribute('class', 'form-control');

            file_note5.setAttribute('type', 'file');
            file_note5.setAttribute('name', 'releve_s5');
            file_note5.setAttribute('class', 'form-control');

            file_note6.setAttribute('type', 'file');
            file_note6.setAttribute('name', 'releve_s6');
            file_note6.setAttribute('class', 'form-control');

            file_note7.setAttribute('type', 'file');
            file_note7.setAttribute('name', 'releve_s7');
            file_note7.setAttribute('class', 'form-control');

            file_note8.setAttribute('type', 'file');
            file_note8.setAttribute('name', 'releve_s8');
            file_note8.setAttribute('class', 'form-control');

            file_note9.setAttribute('type', 'file');
            file_note9.setAttribute('name', 'releve_s9');
            file_note9.setAttribute('class', 'form-control');

            file_note10.setAttribute('type', 'file');
            file_note10.setAttribute('name', 'releve_s10');
            file_note10.setAttribute('class', 'form-control');
 

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'moyenne_s1');
            input_note1.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'moyenne_s2');
            input_note2.setAttribute('class', 'form-control');
            
            input_note3.setAttribute('type', 'text');
            input_note3.setAttribute('name', 'moyenne_s3');
            input_note3.setAttribute('class', 'form-control');

            
            input_note4.setAttribute('type', 'text');
            input_note4.setAttribute('name', 'moyenne_s4');
            input_note4.setAttribute('class', 'form-control');

            input_note5.setAttribute('type', 'text');
            input_note5.setAttribute('name', 'moyenne_s5');
            input_note5.setAttribute('class', 'form-control');

            input_note6.setAttribute('type', 'text');
            input_note6.setAttribute('name', 'moyenne_s6');
            input_note6.setAttribute('class', 'form-control');

            input_note7.setAttribute('type', 'text');
            input_note7.setAttribute('name', 'moyenne_s7');
            input_note7.setAttribute('class', 'form-control');

            input_note8.setAttribute('type', 'text');
            input_note8.setAttribute('name', 'moyenne_s8');
            input_note8.setAttribute('class', 'form-control');

            input_note9.setAttribute('type', 'text');
            input_note9.setAttribute('name', 'moyenne_s9');
            input_note9.setAttribute('class', 'form-control');

            input_note10.setAttribute('type', 'text');
            input_note10.setAttribute('name', 'moyenne_s10');
            input_note10.setAttribute('class', 'form-control');

           

            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            div1.appendChild(label_note3);
            div1.appendChild(input_note3);
            div1.appendChild(label_releve3);
            div1.appendChild(file_note3);

            div1.appendChild(label_note4);
            div1.appendChild(input_note4);
            div1.appendChild(label_releve4);
            div1.appendChild(file_note4);

            div1.appendChild(label_note5);
            div1.appendChild(input_note5);
            div1.appendChild(label_releve5);
            div1.appendChild(file_note5);

            div1.appendChild(label_note6);
            div1.appendChild(input_note6);
            div1.appendChild(label_releve6);
            div1.appendChild(file_note6);

            div1.appendChild(label_note7);
            div1.appendChild(input_note7);
            div1.appendChild(label_releve7);
            div1.appendChild(file_note7);

            div1.appendChild(label_note8);
            div1.appendChild(input_note8);
            div1.appendChild(label_releve8);
            div1.appendChild(file_note8);

            div1.appendChild(label_note9);
            div1.appendChild(input_note9);
            div1.appendChild(label_releve9);
            div1.appendChild(file_note9);

            div1.appendChild(label_note10);
            div1.appendChild(input_note10);
            div1.appendChild(label_releve10);
            div1.appendChild(file_note10);



            

            document.getElementById('div_input').innerHTML = '';
            document.getElementById('div_input').appendChild(div1);
        }
    }
    function AutreDiplome(){
        let autre_diplome = document.getElementById('autre').value;
        if (autre_diplome === "Diplome+1" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'diplome_supp1');
            file_note1.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'nom_ds1');
            input_note1.setAttribute('class', 'form-control');

            let div1 = document.createElement('div');
            label_note1.textContent = "Saisir la Moyenne de Diplome :";
            label_releve1.textContent = "Donnez le Donneé Diplome :";
            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);
            document.getElementById('div_input1').innerHTML = '';
            document.getElementById('div_input1').appendChild(div1);
        }
        else if (autre_diplome === "Diplome+2" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'diplome_supp1');
            file_note1.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'nom_ds1');
            input_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'diplome_supp2');
            file_note2.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'nom_ds2');
            input_note2.setAttribute('class', 'form-control');

            let div1 = document.createElement('div');
            label_note1.textContent = "Saisir la Moyenne de Diplome  1:";
            label_releve1.textContent = "Donnez le  Diplome 1 :";
            label_note2.textContent = "Saisir la Moyenne de Diplome 2:";
            label_releve2.textContent = "Donnez le  Diplome 2:";
            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            document.getElementById('div_input1').innerHTML = '';
            document.getElementById('div_input1').appendChild(div1);
        }else if (autre_diplome === "Diplome+3" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            let input_note3 = document.createElement('input');
            let label_note3 = document.createElement('label');
            let label_releve3 = document.createElement('label');
            let file_note3 = document.createElement('input'); 


            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'diplome_supp1');
            file_note1.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'nom_ds1');
            input_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'diplome_supp2');
            file_note2.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'nom_ds2');
            input_note2.setAttribute('class', 'form-control');

            file_note3.setAttribute('type', 'file');
            file_note3.setAttribute('name', 'diplome_supp3');
            file_note3.setAttribute('class', 'form-control');

            input_note3.setAttribute('type', 'text');
            input_note3.setAttribute('name', 'nom_ds3');
            input_note3.setAttribute('class', 'form-control');

            let div1 = document.createElement('div');
            label_note1.textContent = "Saisir la Moyenne de Diplome  1:";
            label_releve1.textContent = "Donnez le  Diplome 1 :";
            label_note2.textContent = "Saisir la Moyenne de Diplome 2:";
            label_releve2.textContent = "Donnez le  Diplome 2:";
            
            label_note3.textContent = "Saisir la Moyenne de Diplome 3:";
            label_releve3.textContent = "Donnez le  Diplome 3:";

            

            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            div1.appendChild(label_note3);
            div1.appendChild(input_note3);
            div1.appendChild(label_releve3);
            div1.appendChild(file_note3);

            document.getElementById('div_input1').innerHTML = '';
            document.getElementById('div_input1').appendChild(div1);
        }
        else if (autre_diplome === "Diplome+2" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'diplome_supp1');
            file_note1.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'nom_ds1');
            input_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'diplome_supp2');
            file_note2.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'nom_ds2');
            input_note2.setAttribute('class', 'form-control');

            let div1 = document.createElement('div');
            label_note1.textContent = "Saisir la Moyenne de Diplome  1:";
            label_releve1.textContent = "Donnez le  Diplome 1 :";
            label_note2.textContent = "Saisir la Moyenne de Diplome 2:";
            label_releve2.textContent = "Donnez le  Diplome 2:";
            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            document.getElementById('div_input1').innerHTML = '';
            document.getElementById('div_input1').appendChild(div1);
        }else if (autre_diplome === "Diplome+4" ) {
            let input_note1 = document.createElement('input');
            let label_note1 = document.createElement('label');
            let label_releve1 = document.createElement('label');
            let file_note1 = document.createElement('input'); 

            let input_note2 = document.createElement('input');
            let label_note2 = document.createElement('label');
            let label_releve2 = document.createElement('label');
            let file_note2 = document.createElement('input'); 

            let input_note3 = document.createElement('input');
            let label_note3 = document.createElement('label');
            let label_releve3 = document.createElement('label');
            let file_note3 = document.createElement('input'); 
            
            let input_note4 = document.createElement('input');
            let label_note4 = document.createElement('label');
            let label_releve4 = document.createElement('label');
            let file_note4 = document.createElement('input');


            file_note1.setAttribute('type', 'file');
            file_note1.setAttribute('name', 'diplome_supp1');
            file_note1.setAttribute('class', 'form-control');

            input_note1.setAttribute('type', 'text');
            input_note1.setAttribute('name', 'nom_ds1');
            input_note1.setAttribute('class', 'form-control');

            file_note2.setAttribute('type', 'file');
            file_note2.setAttribute('name', 'diplome_supp2');
            file_note2.setAttribute('class', 'form-control');

            input_note2.setAttribute('type', 'text');
            input_note2.setAttribute('name', 'nom_ds2');
            input_note2.setAttribute('class', 'form-control');

            file_note3.setAttribute('type', 'file');
            file_note3.setAttribute('name', 'diplome_supp3');
            file_note3.setAttribute('class', 'form-control');

            input_note3.setAttribute('type', 'text');
            input_note3.setAttribute('name', 'nom_ds3');
            input_note3.setAttribute('class', 'form-control');

            file_note4.setAttribute('type', 'file');
            file_note4.setAttribute('name', 'diplome_supp4');
            file_note4.setAttribute('class', 'form-control');

            input_note4.setAttribute('type', 'text');
            input_note4.setAttribute('name', 'nom_ds4');
            input_note4.setAttribute('class', 'form-control');

            let div1 = document.createElement('div');
            label_note1.textContent = "Saisir la Moyenne de Diplome  1:";
            label_releve1.textContent = "Donnez le  Diplome 1 :";
            label_note2.textContent = "Saisir la Moyenne de Diplome 2:";
            label_releve2.textContent = "Donnez le  Diplome 2:";
            
            label_note3.textContent = "Saisir la Moyenne de Diplome 3:";
            label_releve3.textContent = "Donnez le  Diplome 3:";
            
            label_note4.textContent = "Saisir la Moyenne de Diplome 4:";
            label_releve4.textContent = "Donnez le  Diplome 4:";

            

            div1.setAttribute('class', 'form-outline mb-4');

            div1.appendChild(label_note1);
            div1.appendChild(input_note1);
            div1.appendChild(label_releve1);
            div1.appendChild(file_note1);

            div1.appendChild(label_note2);
            div1.appendChild(input_note2);
            div1.appendChild(label_releve2);
            div1.appendChild(file_note2);

            div1.appendChild(label_note3);
            div1.appendChild(input_note3);
            div1.appendChild(label_releve3);
            div1.appendChild(file_note3);

            div1.appendChild(label_note4);
            div1.appendChild(input_note4);
            div1.appendChild(label_releve4);
            div1.appendChild(file_note4);

            document.getElementById('div_input1').innerHTML = '';
            document.getElementById('div_input1').appendChild(div1);
        }

    }