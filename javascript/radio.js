document.getElementById('submit').onclick = function() {
    var radiobox = document.createElement('input');
    radiobox.type = 'radio';
    radiobox.id = 'contact';
    radiobox.value = 'email';
 
    var label = document.createElement('label')
    label.htmlFor = 'contact';
 
    var description = document.createTextNode('Email');
    label.appendChild(description);
 
    var newline = document.createElement('br');
 
    var container = document.getElementById('container');
    container.appendChild(radiobox);
    container.appendChild(label);
    container.appendChild(newline);
}