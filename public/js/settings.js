var buttons=document.getElementsByClassName('link-add')

for(var i=0; i<buttons.length; i++) {
    buttons[i].addEventListener('click', linkAdd);
}
function linkAdd(){
    var parent = this.parentNode.parentNode;
    var inp = parent.querySelectorAll('.inp');
    var inpValue=inp[0].value
    var socLinkType=this.getAttribute("data-type")
    var socLink=inpValue.split('https://'+socLinkType+'.com/')
        // socLink.length > 1 ? socLink = socLink[1] : socLink[0]
        if(inpValue == ''){
            parent.querySelectorAll('.hidden-inp')[0].value=''
            parent.querySelectorAll('.hidden-inp')[0].setAttribute('name', 'social_link['+socLinkType+']')
            parent.nextElementSibling.innerHTML = ''
        }
        else{
            if(socLink.length > 1){
                parent.nextElementSibling.innerHTML = ''
                socLink = socLink[1]
                parent.querySelectorAll('.hidden-inp')[0].value=socLink
                parent.querySelectorAll('.hidden-inp')[0].setAttribute('name', 'social_link['+socLinkType+']')
            }
            else{
                parent.nextElementSibling.innerHTML='Неверный формат ссылки';
            }
        }

}
