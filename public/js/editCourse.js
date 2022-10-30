const btnEditTheme = document.querySelectorAll('.editTheme');
const themeName = document.getElementById('inputThemeName');
const themeId = document.getElementById('inputThemeId');

btnEditTheme.forEach((btn) => {
  btn.addEventListener('click', () => {
    themeName.value = btn.dataset.name;
    themeId.value = btn.id;
  });
});
