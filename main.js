const TypeWriter = function(txtElement, words, wait = 100){
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait,10);
    this.type();
    this.isDeleting = false;
}

//type method
 TypeWriter.prototype.type = function(){
   //current index of word
    const current = this.wordIndex % this.words.length;
   
   //get full text of current word
    const fullTxt = this.words[current];
    
    //check if deleting
    if(this.isDeleting){
        //remove char
        this.txt = fullTxt.substring(0, this.txt.length - 1);

    }
    else{
        //add char
        this.txt = fullTxt.substring(0, this.txt.length + 1);

    }

    //insert txt into element
    this.txtElement.innerHTML =`<span class="txt">${this.txt}</span>`;
    
    //type speed
    let typeSpeed = 100;

    if(this.isDeleting){
        typeSpeed /= 2;
    }

    //checking when the word gets completed
    if(!this.isDeleting && this.txt === fullTxt){
        //make a pause
        typeSpeed = this.wait;
        this.isDeleting = true;
    }
    else if(this.isDeleting && this.txt === ''){
        this.isDeleting = false;
        //move to next word
        this.wordIndex++;
        //pasue before typing
        typeSpeed = 50;
        console.log(this.wordIndex);
        console.log(this.txt);
    }

    setTimeout(()=> this.type(), typeSpeed)
 }

// init DOM load
document.addEventListener('DOMContentLoaded', init);

//init app
function init(){
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');

    //init typerwriter
    new TypeWriter(txtElement,words,wait);


}