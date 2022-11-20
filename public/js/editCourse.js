const btnEditTheme = document.querySelectorAll('.editTheme');
const btnEditThematics = document.querySelectorAll('.editThematics');
const btnNewThematics = document.querySelectorAll('.newThematic');

const themeName = document.getElementById('inputThemeName');
const themeId = document.getElementById('inputThemeId');
const currentThemeId = document.getElementById('currentThemeId');

const thematicName = document.getElementById('inputThematicName');
const thematicDesc = document.getElementById('inputThematicDesc');
const thematicVideo = document.getElementById('inputThematicVideo');
const thematicId = document.getElementById('inputThematicId');

btnEditTheme.forEach((btn) => {
  btn.addEventListener('click', () => {
    themeName.value = btn.dataset.name;
    themeId.value = btn.id;
  });
});

btnEditThematics.forEach((btn) => {
  btn.addEventListener('click', () => {
    thematicName.value = btn.dataset.name;
    thematicDesc.value = btn.dataset.desc;
    thematicVideo.value = btn.dataset.video;
    thematicId.value = btn.id;
  });
});

btnNewThematics.forEach((btn) => {
  btn.addEventListener('click', () => {
    currentThemeId.value = btn.dataset.theme;
  });
});
