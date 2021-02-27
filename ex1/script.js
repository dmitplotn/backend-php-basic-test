const submitForm = () => {
  const request = new XMLHttpRequest();

  request.onreadystatechange = function() {
    if (this.readyState == 4 && (this.status == 200 || this.status == 422)) {
      const message = JSON.parse(this.responseText).message;
      document.getElementById('message').innerHTML = message;
    }
  }

  const year = document.getElementById('year').value;
  
  request.open('GET', `check.php?year=${year}`);
  request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  request.send();
};
