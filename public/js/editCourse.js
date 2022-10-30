const btnEditTheme = document.querySelectorAll('.editTheme');

btnEditTheme.forEach( (btn) => {

  btn.addEventListener('click', () => {
    console.log(btn.dataset.name);
  });

});
