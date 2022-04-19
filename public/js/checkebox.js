var checkboxes=document.getElementsByClassName('checkboxes')

for(var i=0; i<checkboxes.length; i++) {
    checkboxes[i].addEventListener('click', checkedAction);
    checkboxes[i].value ? checkboxes[i].checked=true : checkboxes[i].checked=false
}
function checkedAction(event) {
   event.target.checked ? event.target.value=true : event.target.value=''
}
